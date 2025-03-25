<?php

namespace App\Services;

use App\Events\ProductAdded;
use App\Models\Product;
use App\Pools\HttpClientPool;
use Illuminate\Support\Facades\Log;
use Pusher\Pusher;
use Illuminate\Support\Facades\Cache;

class ProductFetcher
{
    protected Pusher $pusher;

    public function __construct(private HttpClientPool $httpClientPool)
    {
        $this->httpClientPool = $httpClientPool;
        $this->pusher = new Pusher(
            config('broadcasting.connections.pusher.key'),
            config('broadcasting.connections.pusher.secret'),
            config('broadcasting.connections.pusher.app_id'),
            [
                'cluster' => config('broadcasting.connections.pusher.options.cluster'),
                'useTLS' => true
            ]
        );
    }

    public function fetchProducts()
    {
        return Product::all();
    }

    public function fetchAndStoreProducts(): void
    {
        $client = $this->httpClientPool->getClient();

        try {
            $response = $client->get('https://fakestoreapi.com/products');
            $products = json_decode($response->getBody(), true);

            if (!is_array($products)) {
                throw new \Exception('Invalid API response format');
            }

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
                $this->pusher->trigger('productChannel', 'productEvent', $product);
            }

        } catch (\Exception $e) {
            Log::error('Product fetch error: ' . $e->getMessage(), ['exception' => $e]);
        } finally {
            $this->httpClientPool->releaseClient($client);
        }
    }

    public function fetchProductsConcurrently(array $endpoints): array
    {
        $results = [];
        
        foreach ($endpoints as $endpoint) {
            $client = $this->httpClientPool->getClient();

            try {
                $response = $client->get($endpoint);
                $data = json_decode($response->getBody(), true);
                
                if (is_array($data)) {
                    $results[] = $data;
                } else {
                    Log::warning("Invalid response format from $endpoint");
                }
            } catch (\Exception $e) {
                Log::error("Fetch error for $endpoint: " . $e->getMessage(), ['exception' => $e]);
            } finally {
                $this->httpClientPool->releaseClient($client);
            }
        }
        
        return $results;
    }

    public function productDeleted($id)
    {
        Product::where('id', $id)->delete();
        $this->pusher->trigger('productChannel', 'productDeleted', $id);
    }

}
