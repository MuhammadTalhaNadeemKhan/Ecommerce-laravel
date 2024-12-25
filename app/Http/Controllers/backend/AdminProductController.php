<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\backend\Controller;


use App\Models\backend\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    // Show the Add Product form
    public function showAddForm()
    {
        return view('backend.add-product');
    }

    // Store the new product in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string',
            'quantity' => 'required|integer',
            'brand' => 'required|string',
            'description' => 'required|string|max:1000',
        ]);

        Product::create($request->all());

        return redirect()->route('admin.products.list')->with('success', 'Product added successfully');
    }

    // Show the List Products page
    public function index()
    {
        $products = Product::all();
        return view('backend.list-product', compact('products'));
    }

    // Show the Edit Product form
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('backend.edit-product', compact('product'));
    }

    // Update the product details
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string',
            'quantity' => 'required|integer',
            'brand' => 'required|string',
            'description' => 'required|string|max:1000',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('admin.products.list')->with('success', 'Product updated successfully');
    }

    // Delete the product
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.products.list')->with('success', 'Product deleted successfully');
    }
}
