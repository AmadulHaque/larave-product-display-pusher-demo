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
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <!-- Product 1 -->
            <div class="product-card group bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300" data-category="electronics">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1024&q=80" alt="MacBook Pro" class="w-full h-64 object-cover">
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
                            <h3 class="text-xl font-semibold text-gray-800">MacBook Pro M2</h3>
                            <p class="text-gray-500 text-sm mt-1">Laptop</p>
                        </div>
                        <div class="text-right">
                            <p class="text-lg font-bold text-indigo-600">$1,299</p>
                            <p class="text-sm text-gray-400 line-through">$1,499</p>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="text-gray-500 text-sm ml-2">(142 reviews)</span>
                    </div>
                    <button class="mt-5 w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition-all flex items-center justify-center gap-2">
                        <i class="fas fa-shopping-cart"></i> Add to Cart
                    </button>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card group bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300" data-category="furniture">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1024&q=80" alt="Modern Sofa" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                        <button class="quick-view-btn bg-white text-indigo-600 px-4 py-2 rounded-full font-medium hover:bg-indigo-600 hover:text-white transition-all">
                            Quick View
                        </button>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800">Modern Lounge Sofa</h3>
                            <p class="text-gray-500 text-sm mt-1">Furniture</p>
                        </div>
                        <div class="text-right">
                            <p class="text-lg font-bold text-indigo-600">$899</p>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <span class="text-gray-500 text-sm ml-2">(87 reviews)</span>
                    </div>
                    <button class="mt-5 w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition-all flex items-center justify-center gap-2">
                        <i class="fas fa-shopping-cart"></i> Add to Cart
                    </button>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card group bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300" data-category="accessories">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1024&q=80" alt="Smart Watch" class="w-full h-64 object-cover">
                    <div class="absolute top-3 left-3 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded-full">NEW</div>
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                        <button class="quick-view-btn bg-white text-indigo-600 px-4 py-2 rounded-full font-medium hover:bg-indigo-600 hover:text-white transition-all">
                            Quick View
                        </button>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800">Pro Smart Watch</h3>
                            <p class="text-gray-500 text-sm mt-1">Wearable</p>
                        </div>
                        <div class="text-right">
                            <p class="text-lg font-bold text-indigo-600">$249</p>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="text-gray-500 text-sm ml-2">(215 reviews)</span>
                    </div>
                    <button class="mt-5 w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition-all flex items-center justify-center gap-2">
                        <i class="fas fa-shopping-cart"></i> Add to Cart
                    </button>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="product-card group bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300" data-category="electronics">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1024&q=80" alt="Wireless Headphones" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                        <button class="quick-view-btn bg-white text-indigo-600 px-4 py-2 rounded-full font-medium hover:bg-indigo-600 hover:text-white transition-all">
                            Quick View
                        </button>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800">Noise Cancelling Headphones</h3>
                            <p class="text-gray-500 text-sm mt-1">Audio</p>
                        </div>
                        <div class="text-right">
                            <p class="text-lg font-bold text-indigo-600">$179</p>
                            <p class="text-sm text-gray-400 line-through">$199</p>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="text-gray-500 text-sm ml-2">(93 reviews)</span>
                    </div>
                    <button class="mt-5 w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition-all flex items-center justify-center gap-2">
                        <i class="fas fa-shopping-cart"></i> Add to Cart
                    </button>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="product-card group bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300" data-category="accessories">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1585386959984-a4155224a1ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1024&q=80" alt="Luxury Watch" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                        <button class="quick-view-btn bg-white text-indigo-600 px-4 py-2 rounded-full font-medium hover:bg-indigo-600 hover:text-white transition-all">
                            Quick View
                        </button>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800">Classic Chronograph</h3>
                            <p class="text-gray-500 text-sm mt-1">Watch</p>
                        </div>
                        <div class="text-right">
                            <p class="text-lg font-bold text-indigo-600">$349</p>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <span class="text-gray-500 text-sm ml-2">(64 reviews)</span>
                    </div>
                    <button class="mt-5 w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition-all flex items-center justify-center gap-2">
                        <i class="fas fa-shopping-cart"></i> Add to Cart
                    </button>
                </div>
            </div>

            <!-- Product 6 -->
            <div class="product-card group bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300" data-category="furniture">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1024&q=80" alt="Wooden Desk" class="w-full h-64 object-cover">
                    <div class="absolute top-3 right-3 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">-20%</div>
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                        <button class="quick-view-btn bg-white text-indigo-600 px-4 py-2 rounded-full font-medium hover:bg-indigo-600 hover:text-white transition-all">
                            Quick View
                        </button>
                    </div>
                </div>
                <div class="p-5">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800">Minimalist Wooden Desk</h3>
                            <p class="text-gray-500 text-sm mt-1">Workspace</p>
                        </div>
                        <div class="text-right">
                            <p class="text-lg font-bold text-indigo-600">$459</p>
                            <p class="text-sm text-gray-400 line-through">$549</p>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="text-gray-500 text-sm ml-2">(38 reviews)</span>
                    </div>
                    <button class="mt-5 w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition-all flex items-center justify-center gap-2">
                        <i class="fas fa-shopping-cart"></i> Add to Cart
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>


<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
<script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    const pusher = new Pusher('95f3f5a548f4bf710036', { cluster: 'mt1' });
    const channel = pusher.subscribe(`fetchProduct`);
    channel.bind('fetchProductEvent', function (data) {
       console.log(data);
    });
  </script>
</body>
</html>

