<?php
// app/Http/Controllers/HomeController.php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch all categories
        $categories = Category::all();

        // Fetch the latest product for each category
        $products = Product::latest()->get();

        // Pass the categories and products to the view
        return view('homepage', compact('categories', 'products'));
    }
}
