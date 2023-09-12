<?php

namespace App\Http\Controllers;

use App\Models\Datos;
use App\Http\Requests\StoreDatosRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Datos/color');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-> validate([

        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Datos $datos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Datos $datos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

    }
}
