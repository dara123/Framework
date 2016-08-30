<?php

namespace Xuexue;

/**
 * Description of Route
 *
 * @author DARA123
 */
class Route 
{
    private $baseUrl = '';
    private $uri;
    private $methods;
    private $callable;
    
    public function __construct($methods, $uri, $callable)
    {
        $this->methods = $methods;
        $this->uri = $uri;
        $this->callable = $callable;
    }

    public function getUri() 
    {
        return $this->uri;
    }
    
    public function getMethods()
    {
        return $this->methods;
    }
    
    public function getCallable()
    {
        return $this->callable;
    }
    
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }
}
