<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">
    <!-- Navbar -->
    <nav class="bg-white shadow-lg">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="/" class="text-xl font-bold text-blue-500">FreshFarm Supplier</a>
            <div class="space-x-4">
                <a href="/" class="text-gray-600 hover:text-blue-500">Home</a>
                <a href="/get-started" class="text-gray-600 hover:text-blue-500">Get Started</a>
                <a href="/admin/products" class="text-gray-600 hover:text-blue-500">Products</a>
                <a href="/admin/categories" class="text-gray-600 hover:text-blue-500">Categories</a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="container mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold mb-6">Manage Products</h1>
        <a href="{{ route('admin.products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Add Product</a>
                    
        <table class="table-auto w-full mt-6 border-2 border-gray-300">
            <thead>
                <tr>
                    <th class="px-4 py-2 text-center border-2">Image</th>
                    <th class="px-4 py-2 text-center border-2">Name</th>
                    <th class="px-4 py-2 text-center border-2">Category</th>
                    <th class="px-4 py-2 text-center border-2">Price</th>
                    <th class="px-4 py-2 text-center border-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td class="border px-4 py-2 text-center">
                            <!-- Show product image -->
                            <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="w-20 h-20 object-cover rounded-md">
                        </td>
                        <td class="border px-4 py-2 text-center">{{ $product->name }}</td>
                        <td class="border px-4 py-2 text-center">{{ $product->category->name }}</td>
                        <td class="border px-4 py-2 text-center">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                        <td class="border px-4 py-2 text-center">
                            <a href="#" class="text-blue-500">Edit</a>
                            <form action="#" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} My Laravel App. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
