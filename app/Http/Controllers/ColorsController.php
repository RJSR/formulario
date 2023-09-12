<?php

namespace App\Http\Controllers;

use App\Models\Colors;
use App\Http\Requests\StoreColorsRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ColorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colors = Colors::all();
        return Inertia::render('Datos/color',['colors' => $colors]);
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
            "maincolor" => "required",
            "seccolor" => "required",
            "thidcolor" => "required",
            "bgcolor" => "required",
            "fontcolor" => "required",

        ]);
        $color = new Colors($request->input());
        $color->save();
        return redirect('color');
    }

    /**
     * Display the specified resource.
     */
    public function show(Colors $colors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Colors $colors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $color = Colors::find($id);
        $color->fill($request->input())->saveOrFail();
        return redirect('color');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Colors $colors)
    {
        //
    }
}
