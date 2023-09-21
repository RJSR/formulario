<?php

namespace App\Http\Controllers;

use App\Models\Redes;
use App\Http\Requests\StoreDatosRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RedesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $redes = Redes::all();
        return Inertia::render('Datos/red',['redes' => $redes]);
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
            "twitter" => "required",
            "ig" => "required",
            "fb" => "required",

        ]);
        $red = new Redes($request->input());
        $red->save();
        return redirect('red');
    }

    /**
     * Display the specified resource.
     */
    public function show(Redes $redes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Redes $redes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $red = Redes::find($id);
        $red->fill($request->input())->saveOrFail();
        return redirect('red');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $red = Redes::find($id);
        $red->delete();
        return redirect()->route('red.index');
    }
}
