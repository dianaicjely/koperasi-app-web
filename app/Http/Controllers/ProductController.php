<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('pages.products', compact('products'));
    }

    public function create(){
        return view('pages.add-product');
    }

    public function store(Request $r){
        Product::create($r->all());
        return redirect('/products');
    }
}