<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Categories</title>
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
        <h1 class="text-3xl font-bold mb-6">Manage Categories</h1>
        <a href="{{ route('admin.categories.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Add Category</a>

        <table class="table-auto w-full mt-6 border-2 border-gray-300">
            <thead>
                <tr class="text-center">
                    <th class="border-2 px-4 py-2">Name</th>
                    <th class="border-2 px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td class="border-2 px-4 py-2 text-center">{{ $category->name }}</td>
                        <td class="border-2 px-4 py-2 text-center">
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
            <p>&copy; {{ date('Y') }} FreshFarm. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
