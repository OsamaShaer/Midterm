<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Products::all();
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.store');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product=new products();
        $product->name=$request->name;
        $product->price=$request->price;
        $product->puantity = $request->puantity;
        $product->save();
        return redirect('/');    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=products::find($id);
        return view('product.show',compact('product'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(products $product)
    {
        $product = products::find($product->id);
        return view('edit', compact('product'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, products $products)
    // {
    //     //
    // }

    public function update(products $product)
    {
        products::where('id', $product->id)->update([
            'name' => $product->name,
            'price' => $product->price,
            'Quantity' => $product->puantity,
            'updated_at' => now()
        ]);
        return redirect()->to('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(products $product)
    {
        products::find($product->id)->delete();
        return redirect()->back();    }
}
