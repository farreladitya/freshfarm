<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.3/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body class="bg-gray-100 text-gray-800 font-sans">
    <!-- Navbar -->
    <nav class="bg-white shadow-lg">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="/" class="text-xl font-bold text-blue-500">My Laravel App</a>
            <div class="space-x-4">
                <a href="/" class="text-gray-600 hover:text-blue-500">Home</a>
                <a href="/get-started" class="text-gray-600 hover:text-blue-500">Get Started</a>
                <a href="/admin/products" class="text-gray-600 hover:text-blue-500">Products</a>
                <a href="/admin/categories" class="text-gray-600 hover:text-blue-500">Categories</a>
            </div>
        </div>
    </nav>

    <!-- Content -->
        @if (session('success'))
        <div class="container mx-auto px-4 py-3 bg-green-100 text-green-700 rounded-lg mb-4">
            {{ session('success') }}
        </div>
    @endif

    <main class="container mx-auto px-4 py-10">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} My Laravel App. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
