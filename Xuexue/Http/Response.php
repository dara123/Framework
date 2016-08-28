<?php

namespace Xuexue\Htpp;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

/**
 * Description of Response
 *
 * @author DARA123
 */
class Response implements ResponseInterface
{
    private $statusCode;
    private $headers;
    private $body;
    private $protocolVersion;
    private $reasonPhrase;
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
    public function getHeader($name) 
    {
        return $this->headers[$name];
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
        return $this->headers;
    }

    /**
     * {@inherit}
     */
    public function getProtocolVersion() 
    {
        return $this->protocolVersion;
    }

    /**
     * {@inherit}
     */
    public function getReasonPhrase() 
    {
        return $this->reasonPhrase;
    }

    /**
     * {@inherit}
     */
    public function getStatusCode() 
    {
        return $this->statusCode;
    }

    /**
     * {@inherit}
     */
    public function hasHeader($name) 
    {
        return isset($this->headers[$name]);
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
    public function withBody(StreamInterface $body) 
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
    public function withProtocolVersion($version) 
    {
        
    }

    /**
     * {@inherit}
     */
    public function withStatus($code, $reasonPhrase = '')
    {
        
    }

    /**
     * {@inherit}
     */
    public function withoutHeader($name) 
    {
        
    }
}

