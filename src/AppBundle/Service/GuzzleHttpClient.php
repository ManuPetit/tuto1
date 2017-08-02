<?php

namespace AppBundle\Service;

use AppBundle\Service\HttpClientInterface;

class GuzzleHttpClient implements HttpClientInterface
{
    private $client;

    /**
     * GuzzleHttpClient constructor.
     */
    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    public function get($url)
    {
        $response = $this->client->get($url);

        return json_decode($response->getBody()->getContents(), true);
    }

    public function post($url, $data)
    {
        // TODO: Implement post() method.
    }
}