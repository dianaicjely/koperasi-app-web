<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CashierController extends Controller
{
    public function index()
    {
        return view('pages.Cashier', [
			'products' => \App\Models\Product::all(),
			'members' => \App\Models\Member::all(),
		]);
    }

    public function checkout(Request $request)
    {
        \App\Models\Transaction::create([
            'total' => $request->total,
            'payment_type' => $request->type,
            'member_id' => $request->member_id
        ]);

        return response()->json(['status' => 'success']);
    }
}