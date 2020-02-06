<?php

namespace App\Frontend;

class Frontend
{
    /**
     * WBP page for current page
     *
     * @var string
     */
    protected $page = '';

    /**
     * Manifest data from webpack-assets.json.
     *
     * @var array|null
     */
    protected $manifest;

    /**
     * Build directory
     * Директория где лежит сборка.
     *
     * @var string
     */
    public $dir = '/html/';

    /**
     * Absolute server path to manifest file.
     * Абсолютный серверный путь до файла-манифеста с ассетами фронтэнда.
     *
     * @return string
     */
    public function manifestPath()
    {
        return base_path('html/public/webpack-assets.json');
    }

    /**
     * Set frontend page to load assets from.
     *
     * @param string $page
     */
    public function setPage(string $page)
    {
        $this->page = $page;
    }

    /**
     * @return array
     */
    protected function loadManifestIfNotLoaded()
    {
        return $this->manifest === null ? $this->loadManifest() : $this->manifest;
    }

    /**
     * Load manifest file and parse it.
     *
     * @return array
     */
    protected function loadManifest()
    {
        $manifestPath = $this->manifestPath();
        $manifestData = file_get_contents($manifestPath);
        if ($manifestData === false) {
            throw new \RuntimeException("Cannot read manifest $manifestPath");
        }

        $manifest = json_decode($manifestData, true);
        if ($manifest === null && json_last_error() !== JSON_ERROR_NONE) {
            throw new \RuntimeException("Error decoding manifest {$manifestPath}: " . json_last_error());
        }

        return $this->manifest = $manifest;
    }

    /**
     * @return string
     */
    public function getCriticalCssContent()
    {
        $page = $this->page;
        if (!$page) {
            return '';
        }

        $manifest = $this->loadManifestIfNotLoaded();
        if (empty($manifest[$page])) {
            return '';
        }

        $assets = $manifest[$page];
        $content = '';
        $criticalCss = file_get_contents(base_path("html/public/critical/{$page}.html"));
        if ($criticalCss) {
            $content .= "<style>{$criticalCss}</style>";
        }

        if (empty($assets['css'])) {
            $assets['css'] = [];
        }

        foreach ((array) $assets['css'] as $cssInStatic) {
            $src = $this->path($cssInStatic);
            $content .= '<link href="' . $src . '" rel="preload" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">';
            $content .= '<noscript><link href="' . $src . '" rel="stylesheet"></noscript>';
        }

        $content .= '<script>!function(n){"use strict";n.loadCSS||(n.loadCSS=function(){});var o=loadCSS.relpreload={};if(o.support=function(){var e;try{e=n.document.createElement("link").relList.supports("preload")}catch(t){e=!1}return function(){return e}}(),o.bindMediaToggle=function(t){var e=t.media||"all";function a(){t.media=e}t.addEventListener?t.addEventListener("load",a):t.attachEvent&&t.attachEvent("onload",a),setTimeout(function(){t.rel="stylesheet",t.media="only x"}),setTimeout(a,3e3)},o.poly=function(){if(!o.support())for(var t=n.document.getElementsByTagName("link"),e=0;e<t.length;e++){var a=t[e];"preload"!==a.rel||"style"!==a.getAttribute("as")||a.getAttribute("data-loadcss")||(a.setAttribute("data-loadcss",!0),o.bindMediaToggle(a))}},!o.support()){o.poly();var t=n.setInterval(o.poly,500);n.addEventListener?n.addEventListener("load",function(){o.poly(),n.clearInterval(t)}):n.attachEvent&&n.attachEvent("onload",function(){o.poly(),n.clearInterval(t)})}"undefined"!=typeof exports?exports.loadCSS=loadCSS:n.loadCSS=loadCSS}("undefined"!=typeof global?global:this);</script>';

        return $content;
    }

    /**
     * @return string
     */
    public function getPreloadContent()
    {
        $manifest = $this->loadManifestIfNotLoaded();
        if (empty($manifest['preload'])) {
            return '';
        }

        $preload = $manifest['preload'];
        $content = '';
        if (!empty($preload['js'])) {
            foreach ((array) $preload['js'] as $jsInStatic) {
                $src = $this->path($jsInStatic);
                $content .= '<link as="script" href="' . $src . '" rel="preload">';
            }
        }

        if (!empty($preload['css'])) {
            foreach ((array) $preload['css'] as $cssInStatic) {
                $src = $this->path($cssInStatic);
                $content .= '<link as="style" href="' . $src . '" rel="preload">';
            }
        }

        return $content;
    }

    /**
     * @return string
     */
    public function getPrefetchContent()
    {
        $manifest = $this->loadManifestIfNotLoaded();
        if (empty($manifest['prefetch'])) {
            return '';
        }

        $prefetch = $manifest['prefetch'];
        $content = '';
        foreach ($prefetch as $prefetchItem) {
            $src = $this->path($prefetchItem);
            $content .= '<link href="' . $src . '" rel="prefetch">';
        }

        return $content;
    }

    /**
     * @return string
     */
    public function getFontsLinksContent()
    {
        $manifest = $this->loadManifestIfNotLoaded();
        if (empty($manifest['fonts'])) {
            return '';
        }

        $fonts = $manifest['fonts'];
        $content = '';
        foreach ($fonts as $fontInStatic) {
            $src = $this->path($fontInStatic);
            $content .= '<link as="font" crossorigin="anonymous" href="' . $src . '" rel="preload">';
        }

        return $content;
    }

    /**
     * @return string
     */
    public function getScriptsLinksContent()
    {
        $page = $this->page;
        if (!$page) {
            return '';
        }

        $manifest = $this->loadManifestIfNotLoaded();
        if (empty($manifest[$page])) {
            return '';
        }

        $assets = $manifest[$page];
        $content = '';

        if (empty($assets['js'])) {
            $assets['js'] = [];
        }

        foreach ((array) $assets['js'] as $srcInStatic) {
            $src = $this->path($srcInStatic);
            $content .= '<script src="' . $src . '"></script>';
        }

        return $content;
    }

    /**
     * Method to make web path to asset
     * Метод для формирования браузерного пути до ресурса из сборщика.
     * Если у вас используется спец домен для статики (например s.leroymerlin.ru)
     * то вы можете добавить сюда логику по добавлению его к пути.
     *
     * @param string $path
     * @return string
     */
    public function path($path)
    {
        return $this->dir . $path;
    }
}
