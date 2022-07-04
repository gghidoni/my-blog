<?php 

// Class Router for routing management

class Router {

    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    // create a new instance using the routes.php file
    public static function load($file) { 
        $router = new static;
        require $file;
        return $router;
    }

    // uri management with get method
    public function get($uri, $controller){

        $this->routes['GET'][$uri] = $controller;

    }

    // uri management with post method
    public function post($uri, $controller){

        $this->routes['POST'][$uri] = $controller;

    }

    // redirect uri
    public function direct($uri, $requestType) {
       if(array_key_exists($uri, $this->routes[$requestType])) {
            return $this->routes[$requestType][$uri];
       } else if (preg_match("/^post-*/", $uri)) {
            return $this->routes[$requestType]['post'];
       }
       throw new Exception('No route defined for this uri');
    }
}