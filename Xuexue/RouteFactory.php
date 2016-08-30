<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Xuexue;

use Xuexue\Http\Request;
use Xuexue\Http\Response;

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
     * @param array $methods
     * @param string $pattern
     * @param string $callable
     */
    public function add($methods, $pattern, $callable)
    {
        $this->routes[] = new Route($methods, $pattern, $callable);
    }

    /**
     * 
     * @param Request $request
     * @param Response $response
     * 
     * @return Route|null
     */
    public function match(Request $request, Response $response)
    {
        $uri = $request->getUri();
        $method = $request->getMethod();

        foreach ($this->routes as $route) {
            if (preg_match("#^{$route->getUri()}$#", $uri) && 
                in_array($method, $route->getMethods())
            ) {
                return $route;
            }
        }
        
        return null;
    }
}
