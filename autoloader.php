<?php

spl_autoload_register(function ($className) {
    $path = str_replace('App', 'src', $className);
    $path = str_replace('\\', '/', $path);
    require_once $path . '.php';
});