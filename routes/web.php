<?php

use App\Models\DataBarang;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataBarangController;

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

//Home
Route::get('/', function () {
    return view('home' , [
        'title' => 'Home'
    ]);
});

//Login
Route::get('/login', function () {
    return view('login', [
        "title" => "login",
        "name" => "Kuta Paradiso Hotel",
        "email" => "KPH haha",
        "image" => "KPH.jpg",
    ]);
});

//inventoris
Route::get('/inventoris', [DataBarangController::class, 'index']);

//detail inventoris
Route::get('/databarang/{DataBarang}', [DataBarangController::class, 'show']);

//history CRUD
Route::get('/history', function () {
    return view('history', [
        'title' => "History",
    ]);
});

