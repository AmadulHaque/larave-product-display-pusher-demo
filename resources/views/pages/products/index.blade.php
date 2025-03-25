<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Product Showcase</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 font-sans">
    <div class="container mx-auto px-4 py-12">
        <!-- Header -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Our Premium Collection</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Discover exceptional quality and innovative design in our curated product lineup.</p>

            <!-- Filter Buttons -->
            <div class="flex flex-wrap justify-center gap-3 mt-8">
                <button class="filter-btn px-5 py-2 rounded-full bg-indigo-600 text-white shadow-lg hover:bg-indigo-700 transition-all active:scale-95" data-category="all">All Products</button>
                <button class="filter-btn px-5 py-2 rounded-full bg-white text-gray-700 shadow-md hover:bg-gray-100 transition-all active:scale-95" data-category="electronics">Electronics</button>
                <button class="filter-btn px-5 py-2 rounded-full bg-white text-gray-700 shadow-md hover:bg-gray-100 transition-all active:scale-95" data-category="furniture">Furniture</button>
                <button class="filter-btn px-5 py-2 rounded-full bg-white text-gray-700 shadow-md hover:bg-gray-100 transition-all active:scale-95" data-category="accessories">Accessories</button>
            </div>
        </div>

        <!-- Product Grid -->
        <div id="products" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">

            @foreach ($products as $product)
                
            <!-- Product 1 -->
            <div data-product-id="{{ $product->id }}"  class="product-card group bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300" data-category="electronics">
                <div class="relative">
                    <img src="{{ $product->image }}" alt="{{ $product->title }}" class="w-full h-64 object-cover">
                    <div class="absolute top-3 right-3 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">SALE</div>
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                        <button class="quick-view-btn bg-white text-indigo-600 px-4 py-2 rounded-full font-medium hover:bg-indigo-600 hover:text-white transition-all">
                            Quick View
                        </button>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800">{{ $product->title }}</h3>
                            <p class="text-gray-500 text-sm mt-1">{{ $product->category }}</p>
                        </div>
                        <div class="text-right">
                            <p class="text-lg font-bold text-indigo-600">{{ $product->price }}</p>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center">
                        <div class="flex text-yellow-400">
                            @for ($i = 0; $i < floor($product->rating_rate); $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                            @if ($product->rating_rate - floor($product->rating_rate) >= 0.5)
                                <i class="fas fa-star-half-alt"></i>
                            @endif
                        </div>
                        <span class="text-gray-500 text-sm ml-2">({{ $product->rating_count }} reviews)</span>
                    </div>
                    <button class="mt-5 w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition-all flex items-center justify-center gap-2">
                        <i class="fas fa-shopping-cart"></i> Add to Cart
                    </button>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>


<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
<script>
    Pusher.logToConsole = true;

    var pusher = new Pusher('887f3f8d4a0fbaf4c01f', {
      cluster: 'ap2'
    });
    var channel = pusher.subscribe('productChannel');
    channel.bind('productEvent', function(data) {
        const existingProduct = document.querySelector(`[data-product-id="${data.id}"]`);
        const container = document.getElementById('products');
        if (!existingProduct) {
            const productCard = `
                <div data-product-id="${data.id}"  class="product-card group bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300" data-category="electronics">
                    <div class="relative">
                        <img src="${data.image}" alt="" class="w-full h-64 object-cover">
                        <div class="absolute top-3 right-3 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">SALE</div>
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                            <button class="quick-view-btn bg-white text-indigo-600 px-4 py-2 rounded-full font-medium hover:bg-indigo-600 hover:text-white transition-all">
                                Quick View
                            </button>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800">${data.title}</h3>
                                <p class="text-gray-500 text-sm mt-1">${data.category}</p>
                            </div>
                            <div class="text-right">
                                <p class="text-lg font-bold text-indigo-600">${data.price}</p>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center">
                            <div class="flex text-yellow-400">
                                 
                            </div>
                            <span class="text-gray-500 text-sm ml-2">( ${data.irating_countd} reviews)</span>
                        </div>
                        <button class="mt-5 w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition-all flex items-center justify-center gap-2">
                            <i class="fas fa-shopping-cart"></i> Add to Cart
                        </button>
                    </div>
                </div>
            `;
            container.insertAdjacentHTML('afterbegin', productCard);
        }
    });

    channel.bind('productDeleted', function(productId) {
        const existingProduct = document.querySelector(`[data-product-id="${productId}"]`);
        if (existingProduct) {
            existingProduct.remove();
        }
    });
  </script>


</body>
</html>

