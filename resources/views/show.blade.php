<!-- resources/views/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }} - Product Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Product Detail Section -->
    <section class="container mx-auto py-12 px-4">
        <div class="flex justify-center">
            <div class="bg-white shadow-lg rounded-lg p-6 w-full sm:w-3/4 lg:w-2/4">
                <!-- Product Image -->
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-96 object-cover rounded-lg mb-6">
                <!-- Product Name -->
                <h2 class="text-3xl font-bold mb-4">{{ $product->name }}</h2>
                <!-- Product Price -->
                <p class="text-xl text-gray-600 mb-6">{{ 'Rp ' . number_format($product->price, 0, ',', '.') }}</p>
                <!-- Product Description -->
                <p class="text-gray-800">{{ $product->description }}</p>
                <!-- Add to Cart Button (Optional) -->
                <div class="mt-6">
                    <a href="#" class="bg-blue-500 text-white py-2 px-4 rounded-lg">Add to Cart</a>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
