<?php

namespace Xuexue;

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
     * @param string $callable
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
        $route = $this->routeFactory->match();
        if ($route !== null) {
            $this->finalize();
        }
    }
    
    /**
     * 
     * @return type
     */
    private function finalize()
    {
        return call_user_func($route->getCallable());
    }
}
