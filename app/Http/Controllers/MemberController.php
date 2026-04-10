<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = \App\Models\Member::all();
        return view('pages.Members', compact('members'));
    }

    public function store(Request $request)
    {
        \App\Models\Member::create($request->all());
        return back();
    }
}