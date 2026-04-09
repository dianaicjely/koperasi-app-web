<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index(){
        $loans = Loan::all();
        return view('pages.loans', compact('loans'));
    }

    public function create(){
        return view('pages.add-loan');
    }

    public function store(Request $r){
        Loan::create([
            'user_id' => 1,
            'amount' => $r->amount,
            'duration' => $r->duration,
            'status' => 'pending'
        ]);

        return redirect('/loans');
    }
}