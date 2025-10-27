<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller {
    public function index(Request $request) {
        $query = Product::with('category');
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }
        $products = $query->get();
        return view('products.index', compact('products'));
    }

    public function create() {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
            'category_id' => 'required'
        ]);
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->quantity, // map quantity to stock
            'category_id' => $request->category_id
        ]);
        return redirect()->route('products.index')->with('success','Product added!');
    }

    public function edit(Product $product) {
        $categories = Category::all();
        return view('products.edit', compact('product','categories'));
    }

    public function update(Request $request, Product $product) {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
            'category_id' => 'required'
        ]);
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->quantity, // map quantity to stock
            'category_id' => $request->category_id
        ]);
        return redirect()->route('products.index')->with('success','Product updated!');
    }

    public function destroy(Product $product) {
        $product->delete();
        return redirect()->route('products.index')->with('success','Product deleted!');
    }
}
