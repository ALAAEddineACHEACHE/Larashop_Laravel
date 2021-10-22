<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
    public function create(Request $request)
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
        return redirect()->route('products.index');
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
            'name' => 'required',
            'category_id' => 'integer|required',
            'image' => 'required|mimes:png,jpg,jpeg',
            'quantity' => 'required|integer',
            'price' => 'required',
            'description' => 'required'

        ]);
        $product = new Product();
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->image = $request->file('image')->store('products');
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->description = $request->description;


        $product->save();

        flashy()->success('Le produit a été sauvegardé avec succès');
        return back()->with('success', 'Votre produit a été enregistrée');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $product = Product::findOrFail(decrypt($id));
        // if ($product) {
        //     return view('product.edit', compact('product'));
        // } else {
        //     flashy()->error('Le produit est introuvable');
        //     return back();
        // }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        if ($product) {
            return view('products.edit', compact('product'));
        } else {
            flashy()->error('Le produit  est introuvable');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'

        ]);

        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();
        flashy()->success('Le produit a été modifié avec succès');
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if (Product::destroy($id)) {
            flashy()->success('The product is deleted');
        } else {
            flashy()->error('The product is not deleted');
        }
        return back();
    }
}
