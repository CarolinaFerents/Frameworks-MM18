<?php
spl_autoload_register(function ($class){
    $class = explode( '\\', $class);  //teeb stringist array
    $className = array_pop($class);
    foreach($class as &$part){
        $part = strtolower($part);

    }
    $path = implode('/', $class);
    require_once(__DIR__ . '/' . $path .  '/' . $class . '.php');
});