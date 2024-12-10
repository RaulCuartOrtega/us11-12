<?php

namespace App\Http\Controllers;

use App\Models\Dam1;
use Illuminate\Http\Request;

class DamController1 extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $modulos = Dam1::all();
    return view('modulos.index', ['modulos' => $modulos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modulos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dam = new Dam1;
        $dam->curso = $request->curso;
        $dam->modulo = $request->modulo;
        $dam->descripcion = $request->descripcion;
        $dam->nHoras = $request->nHoras;
        

        $dam->save();
        return redirect()->route('modulos.create');
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
