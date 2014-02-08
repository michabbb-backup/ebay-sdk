<?php
namespace DTS\eBaySDK\HttpClient;

/**
 * Allow SDKs to use a class that will fake sending requests and getting responses when testing.
 * The idea is that all the information needed to make the request is
 * passed to the client by the service. What we want to test is that the
 * is actualy passed correctly. We are not testing the sending of the request
 * over the internet. 
 * The TestHttpClient contains properties that will be set when the service
 * makes the request. We can test these properties to check what the service is passing.
 */
class TestHttpClient implements \DTS\eBaySDK\Interfaces\HttpClientInterface
{
    public $url;
    public $headers;
    public $body;

    public function post($url, $headers, $body)
    { 
        $this->url = $url;
        $this->headers = $headers;
        $this->body = $body;
    }
}