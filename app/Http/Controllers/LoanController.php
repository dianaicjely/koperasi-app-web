<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index()
    {
        $loans = Loan::where('user_id', auth()->id())->get();
        return view('pages.loans.index', compact('loans'));
    }

    public function store(Request $request)
    {
        Loan::create([
            'user_id' => auth()->id(),
            'amount' => $request->amount,
            'duration' => $request->duration
        ]);

        return back()->with('success','Pengajuan berhasil');
    }
}