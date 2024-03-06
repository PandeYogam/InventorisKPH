<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBarang
{
    private static $data_barang = [
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
        [
            "id_barang" => 3,
            "Nama_Barang" => "Komputer 3",
            "Jumlah_Barang" => 1,
            "Kondisi_Barang" => "Hilang",
        ],
    ];

    public static function all(){
        return collect(self::$data_barang);
    }
    
    public static function find($id_barang){
        $barang_inventaris = static::all();

        // $data_barang = [];
        // foreach ($barang_inventaris as $b) {
        //     if ($b['id_barang'] == $id_barang) {
        //         $data_barang = $b;
        //     }
        // }

        return $barang_inventaris->firstWhere('id_barang',$id_barang);
    }

    use HasFactory;
}
