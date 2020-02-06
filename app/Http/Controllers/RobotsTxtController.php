<?php

namespace App\Http\Controllers;

class RobotsTxtController extends Controller
{
    public function __invoke()
    {
        $env = app()->environment();
        $view = "robotstxt.{$env}";
        $view = view()->exists($view) ? $view : "robotstxt.dev";

        $response = response()->view($view)->header('Content-Type', 'text/plain');
        $response->header('Content-Length', mb_strlen($response->getOriginalContent()));

        return $response;
    }
}
