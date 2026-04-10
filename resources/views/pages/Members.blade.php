@extends('layouts.app')

@section('content')

<div class="space-y-6">

<h1 class="text-2xl">Kelola Anggota</h1>

<div class="bg-white p-4 rounded-xl shadow">

<table class="w-full">

<tr class="bg-gray-100">
<th class="p-3 text-left">Nama</th>
<th class="p-3">Telepon</th>
<th class="p-3 text-right">Limit</th>
</tr>

@foreach($members as $m)
<tr class="border-t">
<td class="p-3">{{ $m->name }}</td>
<td class="p-3">{{ $m->phone }}</td>
<td class="p-3 text-right">Rp {{ number_format($m->credit_limit) }}</td>
</tr>
@endforeach

</table>

</div>

</div>

@endsection