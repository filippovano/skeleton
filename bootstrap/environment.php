<?php

use Dotenv\Environment\Adapter\EnvConstAdapter;
use Dotenv\Environment\Adapter\PutenvAdapter;
use Dotenv\Environment\Adapter\ServerConstAdapter;

// load extra base_path('../.env') file but do not override anything from main .env.
$app->afterLoadingEnvironment(function () use ($app) {
    $path = __DIR__.'/../../';
    if (file_exists($path . '.env') && !$app->configurationIsCached()) {
        Dotenv\Dotenv::create($path, '.env')->safeLoad();
    }
});

// set APP_URL and APP_SANDBOX in environment variables if they are not set.
$app->afterLoadingEnvironment(function () use ($app) {
    if ($app->configurationIsCached()) {
        return;
    }

    $adapters = [
        new EnvConstAdapter,
        new ServerConstAdapter,
        new PutenvAdapter
    ];

    $sandbox = array_reverse(explode('/', rtrim(base_path(), '/')))[0];
    $autoEnvVariables = [
        'APP_SANDBOX' => $sandbox,
        'APP_URL' => "https://$sandbox",
    ];

    foreach ($autoEnvVariables as $key => $value) {
        if (!$adapters[0]->get($key)->isEmpty()) {
            continue;
        }

        foreach ($adapters as $adapter) {
            if ($adapter->isSupported()) {
                $adapter->set($key, $value);
            }
        }
    }
});
