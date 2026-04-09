@extends('layouts.app')

@section('content')

<h2>Dashboard</h2>

<div class="row">
    <div class="col-4">
        <a href="/products" class="btn btn-primary">Kelola Produk</a>
    </div>

    <div class="col-4">
        <a href="/loans" class="btn btn-success">Pinjaman</a>
    </div>
</div>

@endsection