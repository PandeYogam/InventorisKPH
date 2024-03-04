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
        'title' => 'Dashboard'
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

Route::get('/inventoris', function () {
    return view('inventoris', [
        'title' => "inventoris",
    ]);
});

