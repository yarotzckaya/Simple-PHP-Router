<?php
/**
 * Created by PhpStorm.
 * User: yuliana
 * Date: 13.02.18
 * Time: 18:52
 * This class handles the data from URI and requires the files connected to the path
 */

class Router {
    private $request;

    public function __construct($request)
    {
        $this->request = $request;
    }
    public function get($route, $file){
        $uri = trim($this->request, "/");

        $uri = explode("/", $uri);

        if($uri[0] == trim($route, "/")){
            array_shift($uri);
            $args = $uri;
            require $file . '.php';
        }
    }
}