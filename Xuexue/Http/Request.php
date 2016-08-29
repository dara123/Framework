<?php

namespace Xuexue\Http;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UriInterface;

/**
 * Description of Request
 *
 * @author DARA123
 */
class Request implements ServerRequestInterface
{
    private $attributes;
    private $method;
    private $uri;
    private $headers;
    private $params;
    private $postParams;
    private $body;
    private $serverParams;
    private $cookieParams;

    public function __construct() 
    {
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->method = $_SERVER['REQUEST_METHOD'];
    }

    /**
     * {@inherit}
     */
    public function getAttribute($name, $default = null)
    {
        
    }

    /**
     * {@inherit}
     */
    public function getAttributes()
    {
        
    }

    /**
     * {@inherit}
     */
    public function getBody()
    {
        
    }

    /**
     * {@inherit}
     */
    public function getCookieParams()
    {
        
    }

    /**
     * {@inherit}
     */
    public function getHeader($name)
    {
        
    }

    /**
     * {@inherit}
     */
    public function getHeaderLine($name)
    {
        
    }

    /**
     * {@inherit}
     */
    public function getHeaders()
    {
        
    }

    /**
     * {@inherit}
     */
    public function getMethod()
    {
        
    }

    /**
     * {@inherit}
     */
    public function getParsedBody()
    {
        
    }

    /**
     * {@inherit}
     */
    public function getProtocolVersion()
    {
        
    }

    public function getQueryParams()
    {
        
    }

    /**
     * {@inherit}
     */
    public function getRequestTarget()
    {
        
    }

    /**
     * {@inherit}
     */
    public function getServerParams()
    {
        
    }

    /**
     * {@inherit}
     */
    public function getUploadedFiles()
    {
        
    }

    /**
     * {@inherit}
     */
    public function getUri()
    {
        
    }

    /**
     * {@inherit}
     */
    public function hasHeader($name)
    {
        
    }

    /**
     * {@inherit}
     */
    public function withAddedHeader($name, $value)
    {
        
    }

    /**
     * {@inherit}
     */
    public function withAttribute($name, $value)
    {
        
    }

    /**
     * {@inherit}
     */
    public function withBody(StreamInterface $body)
    {
        
    }

    /**
     * {@inherit}
     */
    public function withCookieParams(array $cookies)
    {
        
    }

    /**
     * {@inherit}
     */
    public function withHeader($name, $value)
    {
        
    }

    /**
     * {@inherit}
     */
    public function withMethod($method)
    {
        
    }

    /**
     * {@inherit}
     */
    public function withParsedBody($data)
    {
        
    }

    /**
     * {@inherit}
     */
    public function withProtocolVersion($version)
    {
        
    }

    /**
     * {@inherit}
     */
    public function withQueryParams(array $query)
    {
        
    }

    /**
     * {@inherit}
     */
    public function withRequestTarget($requestTarget)
    {
        
    }

    /**
     * {@inherit}
     */
    public function withUploadedFiles(array $uploadedFiles)
    {
        
    }

    /**
     * {@inherit}
     */
    public function withUri(UriInterface $uri, $preserveHost = false)
    {
        
    }

    /**
     * {@inherit}
     */
    public function withoutAttribute($name)
    {
        
    }

    /**
     * {@inherit}
     */
    public function withoutHeader($name)
    {
        
    }
}
