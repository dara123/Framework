<?php

namespace Xuexue;

use Xuexue\Http\Request;
use Xuexue\Http\Response;

/**
 * Description of Application
 *
 * @author DARA123
 */

class Application 
{
    const VERSION = 'v 1.0';
    
    private $container;

    /**
     * Contructor
     */
    public function __construct() 
    {
        $this->container = new Container();
    }

    /**
     * 
     * @return string
     */
    public function getVersion()
    {
        return self::VERSION;
    }
    
    /**
     * 
     * @return Container $container
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * 
     * @param string $pattern
     * @param mixed $callable
     */
    public function get($pattern, $callable)
    {
        $this->container->get('route')->add(['GET'], $pattern, $callable);
    }
    
    /**
     * 
     * @param string $pattern
     * @param mixed $callable
     */
    public function post($pattern, $callable)
    {
        $this->container->get('route')->add(['POST'], $pattern, $callable);
    }
    
    /**
     * 
     * @param string $pattern
     * @param mixed $callable
     */
    public function put($pattern, $callable)
    {
        $this->container->get('route')->add(['PUT'], $pattern, $callable);
    }
    
    public function patch($pattern, $callable)
    {
        $this->container->get('route')->add(['PATCH'], $pattern, $callable);
    }
    
    /**
     * 
     * @param string $pattern
     * @param mixed $callable
     */
    public function delete($pattern, $callable)
    {
        $this->container->get('route')->add(['DELETE'], $pattern, $callable);
    }
    
    /**
     * 
     * @param string $pattern
     * @param mixed $callable
     */
    public function options($pattern, $callable)
    {
        $this->container->get('route')->add(['OPTIONS'], $pattern, $callable);
    }
    
    /**
     * 
     * @param string $pattern
     * @param mixed $callable
     */
    public function all($pattern, $callable)
    {
        $this->container->get('route')->add(['GET', 'POST', 'PUT', 'DELETE', 'PATCH', 'OPTIONS'], $pattern, $callable);
    }
    
    /**
     * Run application
     */
    public function run()
    {
        $request = $this->container->get('request');
        $response = $this->container->get('response');
        $route = $this->container->get('route')->match($request, $response);

        if ($route !== null) {
            return $this->process($request, $response);
        } else {
            return $this->error();
        }
    }
    
    
    private function process(Request $request, Response $response) 
    {
        
    }

    /**
     * 
     * @return type
     */
    private function finalize()
    {
        return call_user_func($route->getCallable());
    }
    
    private function error()
    {
        echo 'Error';
    }
    
    /**
     *
     * @param string $method
     * @param array $args
     * 
     * @return mixed
     */
    public function __call($method, $args)
    {
        if ($this->container->has($method)) {
            $object = $this->container->get($method);
            if (is_callable($object)) {
                return call_user_func_array($object, $args);
            }
        }
    }
}
