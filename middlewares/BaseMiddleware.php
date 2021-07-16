<?php

# namespace
namespace app\Middlewares;

/**
 * abstract class BaseMiddleware
 * 
 * @author Kallyas <kallyasmedia@gmail.com>
 * @package app\Middlewares
 */

abstract class BaseMiddleware
{
    abstract public function execute();
}
