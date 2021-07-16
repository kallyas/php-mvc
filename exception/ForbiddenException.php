<?php

namespace app\exception;

use app\core\Application;

/**
 * class ForbiddenException
 * 
 * @author Kallyas <kallyasmedia@gmail.com>
 * @package app\exception
 * 
 * 
 */

class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have permission to access this page';
    protected $code = 403;
}
