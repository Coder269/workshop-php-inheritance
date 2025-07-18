<?php

namespace App\Utils;

use Throwable;

//Ca sert à attraper les exceptions non-gérées (unhandled exceptions),
//this means exceptions that where not caught via try/catch
class errorHandler
{

    public static function register(): void
    {
        set_exception_handler([self::class, 'handleException']);
    }

    public static function handleException(Throwable $exception): void
    {
        echo 'An error occurred: ' . $exception->getMessage();
    }

}