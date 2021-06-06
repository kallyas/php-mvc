<?php

namespace app\controllers;

use app\core\Application;
use app\core\Request;

/**
 * class SiteController
 * 
 * @author Kallyas <kallyasmedia@gmail.com>
 * @package app\controllers
 */

class SiteController extends Controller
{

    public static function home()
    {
        $params = [
            'name' => "Kallyas"
        ];

        return SiteController::render("home", $params);
    }

    public static function contact()
    {
        return Application::$app->router->renderView('contact');
    }

    public static function handleContact(Request $request)
    {
        $request->getBody();
    }
}
