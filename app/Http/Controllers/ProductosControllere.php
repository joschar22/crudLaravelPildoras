<?php

namespace App\Http\Controllers;

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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        return view('productos.create');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        return view('productos.update');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        return view('productos.delete');

    }
}
