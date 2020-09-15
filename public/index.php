<?php

class Cat{
    public $name;
    public static $count;
public function __constructor($name){
    $this->name=$name;
}
    public static function meow(){
        echo "meow";
    }
}
$cat = new Cat("Nuustik");
$cat::$count =1;
var_dump($cat);
$cat2 = new Cat("Tuustik");
$cat2::$count =2;
var_dump($cat);
var_dump($cat2);

die();
require(__DIR__ . '/views/autoload.php');
$router = new \App\Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
