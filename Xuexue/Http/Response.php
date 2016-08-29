<?php

namespace Xuexue\Http;

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
    public function getProtocolVersion()
    {
        
    }

    /**
     * {@inherit}
     */
    public function getReasonPhrase()
    {
        
    }

    /**
     * {@inherit}
     */
    public function getStatusCode()
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
