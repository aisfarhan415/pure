<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer',
        ]);

        // Simpan produk
        Product::create($validated);

        return redirect()->back()->with('success', 'Product created successfully!');
    }
    public function addAssignRelation($productid,$orderid)
    {
         $product = Product::find($productId);
         $order = Order::find($OrderId);

        $order->products()->attach($product);

        return response()->json([
            'message' => 'Relation Optimized successfully']);
    }
}
