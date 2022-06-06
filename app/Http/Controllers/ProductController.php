<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' =>'required|string',
            'price' => 'required'
        ]);

        $product = new product();
        $product->title = $request->title;
        $product->slug = Str::slug($request->title);
        $product->description = $request->description;
        $product->price = $request->price;
        if($request->file('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $product->image = $imageName;
        }
        $product->save();
        return redirect()->route('product.index')->with('toast_success', 'Product Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product_id' => 'required',
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' =>'required|string',
            'price' => 'required'
        ]);

        $product = product::find($request->product_id);
        $product->title = $request->title;
        $product->slug = Str::slug($request->title);
        $product->description = $request->description;
        $product->price = $request->price;
        if($request->file('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $product->image = $imageName;
        }
        $product->update();
        return redirect()->route('products')->with('toast_success', 'Product Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('toast_success', 'Product Deleted');
    }
}
