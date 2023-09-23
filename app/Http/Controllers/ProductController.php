<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
        return view('products.index',compact('products'))

            ->with('i', (request()->input('page', 1) - 1) * 5);//
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view('products.create'); //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',

            'detail' => 'required',
        ]);
        Product::create($request->all());
        return redirect()->route('products.index')
                        ->with('success','Data berhasil ditambahkan cuuy.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
         ->with('success','lah kenapa dihapus kocak');
    }
}