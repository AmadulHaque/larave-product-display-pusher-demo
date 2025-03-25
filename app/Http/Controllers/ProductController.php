<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\ProductFetcher;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct(private ProductFetcher $productFetcher)
    {}

    public function index()
    {
        $products = $this->productFetcher->fetchProducts();
        return view('pages.products.index', compact('products'));
    }


    public function admin(Request $request)
    {
        // it's only for demo without auth
        $products = $this->productFetcher->fetchProducts();
        return view('pages.admin.index', compact('products'));
    }

    public function fetchProducts()
    {
        $this->productFetcher->fetchAndStoreProducts();
        return redirect()->route('products.admin')
            ->with('success', 'Products fetched successfully!');
    }

    public function delete($id)
    {
        $this->productFetcher->productDeleted($id);
        return redirect()->route('products.admin')
            ->with('success', 'Products fetched successfully!');
    }
}
