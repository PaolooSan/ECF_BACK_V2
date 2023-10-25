<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestCreateProduct;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestCreateProduct $request)
    {
        // $product = new Product;
        // $product->image = "https://picsum.photos/200/300";
        // $product->brand = "EPEDA";
        // $product->name = "Matelas Brigitte";
        // $product->price = 759.00;
        // $product->save();

        // $product = new Product;
        // $product->image = "https://picsum.photos/200/300";
        // $product->brand = "DREAMWAY";
        // $product->name = "Matelas Marine";
        // $product->price = 809.00;
        // $product->save();

        // $product = new Product;
        // $product->image = "https://picsum.photos/200/300";
        // $product->brand = "BULTEX";
        // $product->name = "Matelas Positive Attitude";
        // $product->price = 529.00;
        // $product->save();

        // $product = new Product;
        // $product->image = "https://picsum.photos/200/300";
        // $product->brand = "EPEDA";
        // $product->name = "Matelas Buro Club";
        // $product->price = 1019.00;
        // $product->save();

        $product = new Product ($request->all());
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product created successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        $dimensions = $product->dimensions()->with('product')->get();
        return $dimensions;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RequestCreateProduct $request, string $id)
    {
        // $product = Product::findOrFail($id);
        // $product->price = 30000;
        // $product->save();

        // return $product;

        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return $product;
    }
}
