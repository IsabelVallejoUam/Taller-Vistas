<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('welcome', function () {
    return view('welcome');
});
Route::get('informacion2', function () {
    $idNumber = "1053863501";
    $name = "Isabel Vallejo";
    return view('information') -> with(["idNumber"=> $idNumber,
                                         "name"=>$name]);
});
Route::get('informacion3', function () {
    $idNumber = "1053863501 C.C";
    $name = "Isabel Vallejo Gomez";
    return view('information',["idNumber"=> $idNumber, 
                                "name"=>$name]);
});
Route::get('informacion4', function () {
    $idNumber = "1053863501 Cedula de Ciudadania";
    $name = "Isabel Vallejo Gomez Lema Castro";
    return view('information', compact("idNumber","name"));
});
Route::get('frameworks', function () {
    return view('frameworks');
});