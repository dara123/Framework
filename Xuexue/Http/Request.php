<?php

namespace Xuexue\Htpp;

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

    /**
     * {@inherit}
     */
    public function getAttribute($name, $default = null) 
    {
        return $this->attributes[$name] ?? $default;
    }

    /**
     * {@inherit}
     */
    public function getAttributes() 
    {
        return $this->attributes;
    }

    /**
     * {@inherit}
     */
    public function getBody() 
    {
        return $this->body;
    }

    /**
     * {@inherit}
     */
    public function getHeaders() 
    {
        return $this->headers;
    }

    /**
     * {@inherit}
     */
    public function getMethod() 
    {
        return $this->method;
    }

    /**
     * {@inherit}
     */
    public function getServerParams() 
    {
        return $this->serverParams;
    }

    /**
     * {@inherit}
     */
    public function getUri()
    {
        return $this->uri;
    }
    
    /**
     * {@inherit}
     */
    public function getCookieParams() 
    {
        return $this->cookieParams;
    }

    /**
     * {@inherit}
     */
    public function getHeader($name) 
    {
        return $this->headers[$name];
    }

    /**
     * {@inherit}
     */
    public function getHeaderLine($name) {
        
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

    /**
     * {@inherit}
     */
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
    public function getUploadedFiles() 
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
