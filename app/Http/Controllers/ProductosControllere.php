<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosControllere extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        echo 'you are in index';
    }

    public function create()
    {
        //
        return view('productos.create');
    }

   
    public function store(Request $request)
    {
        // return view('productos.create');
        $producto=new Producto;
        $producto->NombreArticulo=$request->NombreArticulo;
        $producto->Seccion=$request->Seccion;
        $producto->Precio=$request->Precio;
        $producto->Fecha=$request->Fecha;
        $producto->PaisOrigen=$request->PaisOrigen;
        $producto->save();

    }

    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
        return view('productos.update');

    }

    public function destroy(string $id)
    {
        //

        return view('productos.delete');

    }
}
