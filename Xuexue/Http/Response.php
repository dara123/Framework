<?php

namespace Xuexue\Htpp;

/**
 * Description of Response
 *
 * @author DARA123
 */
class Response
{
    private $statusCode;
    private $headers;
    private $body;

    public function __construct($status = 200, array $headers = [], $body = null)
    {
        $this->statusCode = (int) $status;
        $this->setHeaders($headers);
        if (!empty($body)) {
            $this->setBody($body);
        }
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function setHeaders($headers)
    {
        $this->headers = $headers;
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
    }
}
