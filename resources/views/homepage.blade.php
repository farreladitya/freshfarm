<!-- resources/views/homepage.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreshFarm</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Hero Section -->
    <section class="relative bg-cover bg-center h-screen" style="background-image: url('hero_homepage.jpg');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative container mx-auto text-center text-white py-24">
            <h1 class="text-5xl font-bold mb-4">Buy directly from farmers and cooperatives</h1>
            <p class="text-lg mb-8">Get the freshest products delivered to your door</p>
            <a href="#categories" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-full">Shop Now</a>
        </div>
    </section>

  <!-- Categories Section -->
<section id="categories" class="container mx-auto py-12 px-4">
    <h2 class="text-3xl font-semibold text-center mb-8">Categories</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($categories as $category)
            @php
                // Get the latest product for the current category
                $latestProduct = $category->products()->latest()->first();
            @endphp
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                @if ($latestProduct)
                    <!-- Show the image of the latest product -->
                    <img src="{{ asset('storage/' . $latestProduct->image) }}" alt="{{ $category->name }}" class="w-full h-40 object-cover rounded-lg mb-4">
                @else
                    <!-- Fallback if no product exists for this category -->
                    <img src="{{ asset('images/categories/default-category.jpg') }}" alt="{{ $category->name }}" class="w-full h-40 object-cover rounded-lg mb-4">
                @endif
                <h3 class="font-semibold text-xl">{{ $category->name }}</h3>
            </div>
        @endforeach
    </div>
</section>



 <!-- Best Sellers Section -->
<section class="bg-white py-12 px-4">
    <h2 class="text-3xl font-semibold text-center mb-8">Best Sellers</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($products as $product)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="w-full h-56 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg">{{ $product->name }}</h3>
                    <p class="text-gray-600">{{ 'Rp ' . number_format($product->price, 0, ',', '.') }}</p>
                    <!-- Link to product details page -->
                    <a href="{{ route('product.show', $product->id) }}" class="text-blue-500 hover:underline">View Details</a>
                </div>
            </div>
        @endforeach
    </div>
</section>



    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 FreshFarm. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
