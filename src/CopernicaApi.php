<?php
namespace Budgetlens\LaravelCopernicaApi;

use GuzzleHttp\ClientInterface;

class CopernicaApi
{
    private $client;

    public function registerd()
    {
        return true;
    }

    public function account()
    {
        return $this->getClient()->account;
    }

    public function database()
    {
        return $this->getClient()->database;
    }

    public function interest()
    {
        return $this->getClient()->interest;
    }

    public function profile()
    {
        return $this->getClient()->profile;
    }

    /**
     * Set Client
     * @param ClientInterface $client
     */
    public function setClient(ClientInterface $client)
    {
        $this->client = $client;
    }

    public function getClient()
    {
        if (!$this->client instanceof ClientInterface) {
            $this->client = new \Budgetlens\CopernicaRestApi\Client(config('copernica.access_token'));
        }

        return $this->client;
    }
}
