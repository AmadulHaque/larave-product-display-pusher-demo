<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ProductAdded implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $products;

    public function __construct($products)
    {
        $this->products = $products;
    }

    public function broadcastOn()
    {
        return ['productChannel'];
    }

    public function broadcastAs()
    {
        return 'productEvent';
    }
}
