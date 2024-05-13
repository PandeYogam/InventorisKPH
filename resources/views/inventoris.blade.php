@extends('layouts.main')

@section('container')
    <h1>Inventoris</h1>

    {{-- @foreach ($data_inventaris as $data)
        <article>
            <h2>
                <a href="/databarang/{{ $data["id_barang"] }}">Nama barang : {{ $data["Nama_Barang"] }}</a>
            </h2>
            <h5>Jumlah barang : {{ $data["Jumlah_Barang"] }}</h5>
            <p>Kondisi : {{ $data["Kondisi_Barang"] }}</p>
        </article>
    @endforeach --}}

    <table class="table table-striped table-hover">
        <thead>
          
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Jumlah Barang</th>
              <th scope="col">Kondisi Barang</th>
              <th scope="col">Inventor</th>
              <th scope="col">Tanggal Masuk</th>
              <th scope="col">Edit</th>
            </tr>
          </thead>
          <tbody>
            @for ($i = 0; $i < 50; $i++)
              
              <tr>
                <td scope="col">1</td>
                <td scope="col">Nama Barang</td>
                <td scope="col">Jumlah Barang</td>
                <td scope="col">Kondisi Barang</td>
                <td scope="col">Inventor</td>
                <td scope="col">Tanggal Masuk</td>
                <td scope="col">edit</td>
              </tr>
            @endfor
          </tbody>
    </table>
@endsection