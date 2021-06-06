<?php

namespace app\controllers;

use app\core\Application;

/**
 * class Controller
 * 
 * @author Kallyas <kallyasmedia@gmail.com>
 * @package app\controllers
 */

class Controller
{
    public static function render($view, $params = [])
    {
        return Application::$app->router->renderView($view, $params);
    }
}
