<?php

namespace Xuexue;

/**
 * Description of Application
 *
 * @author DARA123
 */
use Htpp\Request;
use Htpp\Response;

class Application 
{
    const VERSION = 'v 1.0';
    
    private $routeFactory;
    private $request;
    private $response;
    /**
     * Contructor
     */
    public function __construct() 
    {
        $this->routeFactory = new RouteFactory();
        $this->request = new Request();
        $this->response = new Response();
    }

    /**
     * 
     * @return string
     */
    public function getVersion()
    {
        return self::VERSION;
    }

    //put your code here
    public function run()
    {
        $route = $this->routeFactory->match();
        if ($route !== null) {
            call_user_func($route->getCallable());
        }
    }
    
    /**
     * 
     * @param string $pattern
     * @param mixed $callable
     */
    public function get($pattern, $callable)
    {
        $this->addToRoute('GET', $pattern, $callable);
    }
    
    /**
     * 
     * @param string $pattern
     * @param mixed $callable
     */
    public function post($pattern, $callable)
    {
        $this->addToRoute('POST', $pattern, $callable);
    }
    
    /**
     * 
     * @param string $pattern
     * @param mixed $callable
     */
    public function put($pattern, $callable)
    {
        $this->addToRoute('PUT', $pattern, $callable);
    }
    
    public function patch($pattern, $callable)
    {
        $this->addToRoute('PATCH', $pattern, $callable);
    }
    
    /**
     * 
     * @param string $pattern
     * @param mixed $callable
     */
    public function delete($pattern, $callable)
    {
        $this->addToRoute('DELETE', $pattern, $callable);
    }
    
    /**
     * 
     * @param string $pattern
     * @param mixed $callable
     */
    public function options($pattern, $callable)
    {
        $this->addToRoute('OPTIONS', $pattern, $callable);
    }
    
    /**
     * 
     * @param string $pattern
     * @param string $callable
     */
    public function all($pattern, $callable)
    {
        
    }

    /**
     * 
     * @param string $verb
     * @param string $pattern
     * @param mixed $callable
     */
    private function addToRoute($verb, $pattern, $callable)
    {
        $this->routeFactory->add($verb, $pattern, $callable);
    }
}
