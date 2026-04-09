@extends('layouts.app')

@section('content')

<h2>Data Pinjaman</h2>

<a href="/loans/create" class="btn btn-primary mb-3">Ajukan Pinjaman</a>

<table class="table">
    <tr>
        <th>Jumlah</th>
        <th>Durasi</th>
        <th>Status</th>
    </tr>

    @foreach($loans as $l)
    <tr>
        <td>{{ $l->amount }}</td>
        <td>{{ $l->duration }} bulan</td>
        <td>{{ $l->status }}</td>
    </tr>
    @endforeach

</table>

@endsection