<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('pages.products.index', compact('products'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('products','public');
        }

        Product::create($data);

        return redirect()->back()->with('success','Produk berhasil ditambahkan');
    }
}