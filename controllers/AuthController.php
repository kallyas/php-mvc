<?php

namespace app\controllers;

use app\core\Request;

/**
 * class AuthController
 * 
 * @author Kallyas <kallyasmedia@gmail.com>
 * @package app\controllers
 */


class AuthController extends Controller
{

    public static function login()
    {
        return AuthController::render('login');
    }

    public static function register(Request $request)
    {
        if ($request->isPost()) {
            return 'handle submittted data';
        }
        return AuthController::render('register');
    }
}
