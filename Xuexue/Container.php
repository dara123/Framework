<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Xuexue;

use Htpp\Request;
use Htpp\Response;

/**
 * Description of Container
 *
 * @author DARA123
 */
class Container 
{
    private $container;
    
    public function __construct($config = []) 
    {
        $this->setDefaultContainer();
    }
    
    /**
     * Set default contain need to application
     */
    private function setDefaultContainer()
    {
        $this->container['route'] = new RouteFactory();
        $this->container['request'] = new Request();
        $this->container['response'] = new Response();
    }
    
    /**
     * 
     * @param string $name
     * 
     * return mixed
     */
    public function get($name)
    {
        return $this->container[$name] ?? null;
    }
}
