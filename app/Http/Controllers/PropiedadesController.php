<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Propiedades;

class PropiedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propiedades = Propiedades::all();

        return view('propiedades', compact('propiedades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crearpropiedad');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required'
        ]);

        Propiedades::create($request->all());
        return redirect()->route('propiedades.index')->with('success', 'Propiedad creada');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $propiedad = Propiedades::findOrFail($id);
        return view('mostrarpropiedad', compact('propiedad'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $propiedad = Propiedades::findOrFail($id);
        return view('editarpropiedad', compact('propiedad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $propiedad = Propiedades::findOrFail($id);
        $propiedad->update($request->all());
        return redirect()->route('propiedades.index')->with('success', 'Propiedad actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $propiedad = Propiedades::findOrFail($id);
        $propiedad->delete();
        return redirect()->route('propiedades.index')->with('success', 'Propiedad eliminada');
    }
}
