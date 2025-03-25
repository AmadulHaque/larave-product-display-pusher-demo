<?php

namespace App\Services;

use App\Events\ProductAdded;
use App\Models\Product;
use App\Pools\HttpClientPool;
use Illuminate\Support\Facades\Log;
use Pusher\Pusher;

class ProductFetcher
{
    protected $httpClientPool;

    public function __construct(HttpClientPool $httpClientPool)
    {
        $this->httpClientPool = $httpClientPool;
    }

    public function fetchAndStoreProducts()
    {
        $client = $this->httpClientPool->getClient();

        try {
            $response = $client->get('https://fakestoreapi.com/products');
            $products = json_decode($response->getBody(), true);

            foreach ($products as $productData) {
                $product = Product::firstOrCreate([
                    'title'         => $productData['title'],
                    'description'   => $productData['description'],
                    'price'         => $productData['price'],
                    'image' => $productData['image'],
                    'category' => $productData['category'],
                    'rating_rate' => $productData['rating']['rate'],
                    'rating_count' => $productData['rating']['count']
                ]);
            }

            $options = array(
                'cluster' => 'mt1',
              );
              $pusher = new Pusher(
                '95f3f5a548f4bf710036',
                '3c05dc48dbe8fb33409b',
                '1495910',
                $options
              );

            $pusher->trigger('fetchProduct', 'fetchProductEvent', $products);

            return $products;
        } catch (\Exception $e) {
            Log::error('Product fetch error: ' . $e->getMessage());
        } finally {
            $this->httpClientPool->releaseClient($client);
        }
    }

    public function fetchProductsConcurrently(array $endpoints)
    {
        $results = [];

        foreach ($endpoints as $endpoint) {
            $client = $this->httpClientPool->getClient();

            try {
                $response = $client->get($endpoint);
                $results[] = json_decode($response->getBody(), true);
            } catch (\Exception $e) {
                Log::error("Fetch error for $endpoint: " . $e->getMessage());
            } finally {
                $this->httpClientPool->releaseClient($client);
            }
        }

        return $results;
    }
}
