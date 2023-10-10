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
        $productos=Producto::all();
        return view('productos.index', compact('productos'));
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
        $producto=Producto::findOrFail($id);
        return view('productos.show',compact('producto'));
    }
    public function edit(string $id)
    {
        //
        $producto=Producto::findOrFail($id);
        return view('productos.edit',compact('producto'));
    }

    public function update(Request $request, string $id)
    {
        //
        $producto=Producto::findOrFail($id);
        $producto->update($request->all());
        return redirect("/productos");


    }

    public function destroy(string $id)
    {
        //

       $producto=Producto::findOrFail($id); // obtiene el id del producto que desamos
        $producto->delete();
        return redirect("/productos");

    }
}
