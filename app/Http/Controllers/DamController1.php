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
    $modulos_all = Dam1::all();
    $modulos_all = Dam1::paginate(1);
    
    return view('modulos.index', ['modulos_all' => $modulos_all]);
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
        $dam = Dam1::find($id);
        return view('modulos.edit',['dam' => $dam]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $modulos = Dam1::find($id);
        $modulos->curso = $request->curso;
        $modulos->modulo = $request->modulo;
        $modulos->descripcion = $request->descripcion;
        $modulos->nHoras = $request->nHoras;
        $modulos->save();
        return redirect()->route('modulos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dam = Dam1::find($id);
        $dam = delete();

        return redirect()->route('modulos.index');
    }
}
