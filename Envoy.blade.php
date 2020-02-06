@setup
    // примеры вымышленные и даны просто для понимания
    $config = [
        'production_dir' => '',     // '/var/www/mysite/production',
        'newrelic_app_id' => '',  // '7437378',
        'newrelic_api_key' => '',  // '540bdc4f7bb6778fea91eaba7abdf5565a46872819e212e'
        'telegram_chat_id' => '',   // '-10010928174578',
        'telegram_bot_id' => '',   // 'bot793860023',
        'telegram_bot_key' => '',   // 'ABEhghwPLW4q90DHfIpxedTgjYSphBwlcbk',
    ];

    function logMessage($message) {
        return "echo '\033[32m" .$message. "\033[0m';\n";
    }
@endsetup

@servers(['prod' => '-A user@xx.xxx.x.xx', 'localhost' => '127.0.0.1'])

@story('release')
    deploy
    @if(!empty($config['newrelic_app_id']))
        send-notification-to-newrelic
    @endif

    @if(!empty($config['telegram_chat_id']))
        send-notification-to-telegram
    @endif
@macro

@task('deploy', ['on' => ['prod']])
    {{ logMessage("💻  Deploying code changes...") }}
    cd {{ $config['production_dir'] }}
    git pull origin master
    php artisan clear-compiled
    php artisan optimize
    php artisan config:clear
    php artisan config:cache
    php artisan route:clear
    php artisan route:cache
    @if(!empty($cache))
        php artisan cache:clear
    @endif

    {{ logMessage("🚀  Application deployed!") }}
@endtask

@task('status', ['on' => ['prod']])
    cd {{ $config['production_dir'] }}
    git status
@endtask

@task('send-notification-to-newrelic', ['on' => 'localhost'])
    curl --silent -X POST 'https://api.newrelic.com/v2/applications/{{ $config['newrelic_app_id'] }}/deployments.json' \
    -H 'X-Api-Key:{{ $config['newrelic_api_key'] }}' -i \
    -H 'Content-Type: application/json' \
    -d \
    '{
    "deployment": {
    "revision": "Deployment",
    "changelog": "",
    "description": "",
    "user": "envoy"
    }
    }' > /dev/null
@endtask

@task('send-notification-to-telegram', ['on' => 'localhost'])
    curl --silent 'https://api.telegram.org/{{ $config['telegram_bot_id'] }}:{{ $config['telegram_bot_key'] }}/sendMessage?chat_id={{ $config['telegram_chat_id'] }}&parse_mode=html&text=<strong>Внимание! На боевой был отгружен новый релиз.</strong>%0A%0AНе забудьте смержить master в свою ветку при продолжении работы над ней.'  > /dev/null
@endtask

@task('cache', ['on' => ['prod']])
    cd {{ $config['production_dir'] }}
    php artisan cache:clear
@endtask