<?php

namespace app\core;

use app\Middlewares\BaseMiddleware;


/**
 * class Controller
 * 
 * @author Kallyas <kallyasmedia@gmail.com>
 * @package app\core
 */

class Controller
{
    public string $layout = 'main';
    public string $action = '';

    protected array $middlewares = [];

    public function setLayout($layout): void
    {
        $this->layout = $layout;
    }

    public function render($view, $params = [])
    {
        return Application::$app->router->renderView($view, $params);
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}
