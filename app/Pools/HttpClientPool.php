<?php

namespace App\Pools;

use GuzzleHttp\Client;
use Illuminate\Support\Collection;

class HttpClientPool
{
    private Collection $pool;
    private int $maxClients;
    private int $currentClients = 0;

    public function __construct(int $maxClients = 5)
    {
        $this->maxClients = $maxClients;
        $this->pool = collect();
    }

    public function getClient(): Client
    {
        if ($this->pool->isNotEmpty()) {
            return $this->pool->pop();
        }

        if ($this->currentClients < $this->maxClients) {
            $this->currentClients++;
            return $this->createClient();
        }

        return $this->waitForAvailableClient();
    }

    private function createClient(): Client
    {
        return new Client([
            'timeout' => 10.0,
            'connect_timeout' => 5.0,
            'verify' => false  // Disable SSL verification for simplicity
        ]);
    }

    public function releaseClient(Client $client)
    {
        // If pool is not at max capacity, return the client to the pool
        if ($this->pool->count() < $this->maxClients) {
            $this->pool->push($client);
        } else {
            // If pool is full, reduce client count
            $this->currentClients--;
        }
    }

    private function waitForAvailableClient(): Client
    {
        while ($this->pool->isEmpty()) {
            usleep(100000);
        }
        return $this->pool->pop();
    }
}
