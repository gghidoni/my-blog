<?php 

/*
in this file the Request class is initialized, this class contains the methods 
that manipulate the uri and select the get or post method.
*/

class Request {

  // Handling uri
    public static function uri() {

        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
        
    }

    // get method (get or post)
    public static function method() {

      return  $_SERVER['REQUEST_METHOD'];

    }

}