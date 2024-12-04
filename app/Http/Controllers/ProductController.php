<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get(); // Eager load category
        return view('admin.products.index', compact('products'));
    }
    public function create()
    {
        $categories = Category::all(); // Get all categories
        return view('admin.products.create', compact('categories'));
    }


    // Handle the form submission and image upload
    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',  // Ensure category exists
            'image' => 'required|image|mimes:jpg,png,jpeg|max:10240',  // Image validation
        ]);

        // Store the product data
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;  // Store category ID
        $product->image = $request->image->store('products', 'public'); // Store image

        $product->save();

        return redirect()->route('admin.products.index')->with('success', 'Product added successfully');
    }
    public function show($id)
    {
        // Retrieve the product by its ID
        $product = Product::findOrFail($id);

        // Return the product detail view
        return view('show', compact('product'));
    }

}
