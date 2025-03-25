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
        $products = Product::latest()->get();
        return view('pages.products.index', compact('products'));
    }
    public function admin(Request $request)
    {
        $products = Product::latest()->paginate(10);
        return view('pages.admin.index', compact('products'));
    }

    public function fetchProducts()
    {
        $this->productFetcher->fetchAndStoreProducts();

        // $endpoints = [
        //     'https://fakestoreapi.com/products',
        //     'https://fakestoreapi.com/products/categories'
        // ];
        // $results = $this->productFetcher->fetchProductsConcurrently($endpoints);

        return redirect()->route('products.admin')
            ->with('success', 'Products fetched successfully!');
    }
}
