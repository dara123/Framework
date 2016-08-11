<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Xuexue;

/**
 * Description of RouteFactory
 *
 * @author DARA123
 */
class RouteFactory 
{
    private $routes = [];

    /**
     * 
     * @param string $verb
     * @param string $pattern
     * @param string $callable
     */
    public function add($verb, $pattern, $callable)
    {
        $this->routes[] = new Route($verb, $pattern, $callable);
    }

    /**
     * 
     */
    public function match()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $verb = $_SERVER['REQUEST_METHOD'];
        foreach ($this->routes as $route) {
            if (preg_match("#^{$route->getUri()}$#", $uri) &&  $route->getVerb() === $verb) {
                return $route;
            }
        }
        
        return null;
    }
}
