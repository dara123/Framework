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
    private $verb;
    private $callable;
    
    public function __construct($verb, $uri, $callable)
    {
        $this->verb = $verb;
        $this->uri = $uri;
        $this->callable = $callable;
    }

    public function getUri() 
    {
        return $this->uri;
    }
    
    public function getVerb()
    {
        return $this->verb;
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
