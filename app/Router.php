<?php


namespace App;


class Router
{
private $uri;
private $method;
private $routes;

    /**
     * Router constructor.
     * @param $uri
     * @param $method
     */
    public function __construct($uri, $method)
    {
        $this->uri = $uri;
        $this->method = $method;
        $this->match();
        require (__DIR__ . '/../routes.php');
        $this->routes = $routes;
    }
    public function match()
    {
        $routes = [
            '/page1' => function () {
                $title = "page1";
                include(__DIR__ . '/../views/page.php');
            }
        ];
        $uris = array_keys($routes);
        if (in_array($this->uri, $uris)) {
            call_user_func($routes[$this->uri]);
        } else {
            $title = "page not found";
            include(__DIR__ . '/../views/page.php');
        }
    }
    public static function route($uri, $method, callable $action){
     self::$routes[] = ['uri' => $uri, 'method' => $method, 'action' => $action];
    }
    public static function get($uri, callable $action){
        self::route($uri, 'GET', $action);
    }

}