<?php

use App\Http\Controllers\ProductosControllere;
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
Route::resource('productos', ProductosControllere::class)
    ->missing(function (Request $request) {
        return Redirect::route('productos.store');
    });

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/inicio',[ ProductosControllere::class,'index']);

Route::get('/crear',[ ProductosControllere::class,'create']);

Route::get('/insertar',[ ProductosControllere::class,'store']);

Route::get('/actualizar',[ ProductosControllere::class,'update']);

Route::get('/borrar',[ ProductosControllere::class,'destroy']);
*/