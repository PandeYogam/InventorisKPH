{{-- @dd($barang); --}}

@extends('layouts.main')

@section('container')
<article>
    <h2>Id barang : {{ $barang["id_barang"] }}</h2>
    <h4>Nama barang : {{ $barang["Nama_Barang"] }}</h4>
    <h5>Jumlah barang : {{ $barang["Jumlah_Barang"] }}</h5>
    <p>Kondisi : {{ $barang["Kondisi_Barang"] }}</p>

    <a href="/inventoris">Kembali</a>
</article>
@endsection