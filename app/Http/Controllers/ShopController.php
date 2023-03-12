<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller

{

    public function index()
    {
        $products = Product::all();

        return view('shop.index', compact('products'));
    }

    public function create()
    {
        return view('shop.create');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->image = $request->image;
        $product->price = $request->input('price');
        $product->save();

        return redirect()->route('shop.index');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('shop.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->image = $request->image;
        $product->price = $request->input('price');
        $product->save();

        return redirect()->route('shop.index');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('shop.index');
    }
}
