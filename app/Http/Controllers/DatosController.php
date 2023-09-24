<?php

namespace App\Http\Controllers;

use App\Models\Datos;
use App\Models\Colors;
use App\Http\Requests\StoreDatosRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DatosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = Datos::all();
        $colors = Colors::all();
        return Inertia::render('Datos/Index',compact('datos','colors'));
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
            "nombre" => "required",
            "rif" => "required",
            "tlf1" => "required",
            "tlf2" => "required",
            "correo1" => "required",
            "correo2" => "required",
            "diredo" => "required",
            "dirpais" => "required",
        ]);
        $dato = new Datos($request->input());
        $dato->save();
        return redirect('dato');
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
        $dato = Datos::find($id);
        $dato->fill($request->input())->saveOrFail();
        return redirect('dato');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dato = Datos::find($id);
        $dato->delete();
        return redirect()->route('dato.index');
    }
}
