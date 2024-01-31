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

    // reads /resources/data/PEDIDOS_EJEMPLO.csv and returns an array
    $pedidos = array_map('str_getcsv', file('../resources/data/PEDIDOS_EJEMPLO.csv'));
    // removes the first row of the array
    array_shift($pedidos);
    // split each row with ;
    foreach ($pedidos as $key => $value) {
        $pedidos[$key] = explode(';', $value[0]);
    }


    return view('dash.pedidos')->withPedidos($pedidos);


})->name('dash.pedidos');
