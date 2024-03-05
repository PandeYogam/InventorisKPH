<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home' , [
        'title' => 'Home'
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "title" => "login",
        "name" => "Kuta Paradiso Hotel",
        "email" => "KPH haha",
        "image" => "KPH.jpg",
    ]);
});

$barang_inventaris = [
    [
        "id_barang" => 1,
        "Nama_Barang" => "Komputer 1",
        "Jumlah_Barang" => 1,
        "Kondisi_Barang" => "Layak Pakai",
    ],
    [
        "id_barang" => 2,
        "Nama_Barang" => "Komputer 2",
        "Jumlah_Barang" => 1,
        "Kondisi_Barang" => "Rusak",
    ],
];

Route::get('/inventoris', function () {
    $barang_inventaris = [
        [
            "id_barang" => 1,
            "Nama_Barang" => "Komputer 1",
            "Jumlah_Barang" => 1,
            "Kondisi_Barang" => "Layak Pakai",
        ],
        [
            "id_barang" => 2,
            "Nama_Barang" => "Komputer 2",
            "Jumlah_Barang" => 1,
            "Kondisi_Barang" => "Rusak",
        ],
    ];

    return view('inventoris', [
        'title' => "Inventoris",
        'data_inventaris' => $barang_inventaris,
    ]);
});

Route::get('/databarang/{id_barang}', function ($id_barang) {
    $barang_inventaris = [
        [
            "id_barang" => 1,
            "Nama_Barang" => "Komputer 1",
            "Jumlah_Barang" => 1,
            "Kondisi_Barang" => "Layak Pakai",
        ],
        [
            "id_barang" => 2,
            "Nama_Barang" => "Komputer 2",
            "Jumlah_Barang" => 1,
            "Kondisi_Barang" => "Rusak",
        ],
    ];

    $new_data_barang = [];
    foreach ($barang_inventaris as $barang) {
        if ($barang['id_barang'] == $id_barang) {
            $new_data_barang = $barang;
        }
    }

    return view('databarang', [
        'title' => "Data barang",
        'barang' => $new_data_barang
    ]);
});




Route::get('/history', function () {
    return view('history', [
        'title' => "History",
    ]);
});

