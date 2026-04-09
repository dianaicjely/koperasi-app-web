@extends('layouts.app')

@section('content')

<h2>Daftar Produk</h2>

<a href="/products/create" class="btn btn-primary mb-3">Tambah Produk</a>

<table class="table">
    <tr>
        <th>Nama</th>
        <th>Harga</th>
    </tr>

    @foreach($products as $p)
    <tr>
        <td>{{ $p->name }}</td>
        <td>{{ $p->price }}</td>
    </tr>
    @endforeach

</table>

@endsection