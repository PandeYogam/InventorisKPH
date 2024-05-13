@extends('layouts.main')

@section('container')
    <h1>History</h1>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Departemen</th>
              <th scope="col">Outlet</th>
              <th scope="col">Jumlah Barang</th>
              <th scope="col">Kondisi Barang</th>
              <th scope="col">Inventor</th>
              <th scope="col">Tanggal Masuk</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td scope="col">1</td>
              <td scope="col">Nama Barang</td>
              <td scope="col">departemen</td>
              <td scope="col">outlet</td>
              <td scope="col">Jumlah Barang</td>
              <td scope="col">Kondisi Barang</td>
              <td scope="col">Inventor</td>
              <td scope="col">Tanggal Masuk</td>
            </tr>
          </tbody>
    </table>
@endsection