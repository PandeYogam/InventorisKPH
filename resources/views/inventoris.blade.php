@extends('layouts.main')

@section('container')
    <h1>Inventoris</h1>

    @foreach ($data_inventaris as $data)
        <article>
            <h2>
                <a href="/databarang/{{ $data["id_barang"] }}">Nama barang : {{ $data["Nama_Barang"] }}</a>
            </h2>
            <h5>Jumlah barang : {{ $data["Jumlah_Barang"] }}</h5>
            <p>Kondisi : {{ $data["Kondisi_Barang"] }}</p>
        </article>
    @endforeach

@endsection