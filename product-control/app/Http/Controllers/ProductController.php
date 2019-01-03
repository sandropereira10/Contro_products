<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;



class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        //dd($products);
        return view('products.index', compact('products'));
            //->with('i', (request()->input('page', 1) -1) *5);
    }

    public function create()
    {
        return view('products.create');

    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price'=> 'required',
            'category' => 'required',

            ]);
        Product::create($request->all());
        return redirect()->route('products.index')
            ->with('success', 'Product Created Successfully');
    }



    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show', compact('product'));

    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));

    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $request->validate([
           'name'=>'required',
           'price'=>'required',
           'category'=>'required'
        ]);
        $product->update($request->all());
        return redirect()->route('products.index')
            ->with('success', 'Product Updated Successfully');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index')
            ->with('success', 'Product deteled Successfully');
    }
}
