<?php

namespace Xuexue\Htpp;

/**
 * Description of Request
 *
 * @author DARA123
 */
class Request
{
    private $method;
    private $uri;
    private $headers;
    private $params;
    private $postParams;
    private $body;
    private $serverParams;

    public function __construct()
    {
        $this->fromGlobals();
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function getServerParams()
    {
        return $this->serverParams;
    }

    public function getParams()
    {
        return $this->params;
    }

    public function getPostParams()
    {
        return $this->postParams;
    }

    private function fromGlobals()
    {
        $this->method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $this->headers = function_exists('getallheaders') ? getallheaders() : $this->getAllHeaders();
        $this->uri = $_SERVER['REQUEST_URI'] ?? null;
        $this->serverParams = $_SERVER;
        $this->params = $_GET;
        $this->postParams = $_POST;
    }

    private function getAllHeaders()
    {
        $headers = '';
        foreach ($_SERVER as $name => $value)
        {
            if (substr($name, 0, 5) == 'HTTP_')
            {
                $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value;
            }
        }
        return $headers;
    }
}
