<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agentes;

class AgentesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agentes = Agentes::all();
        return view('agentes', compact('agentes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crearagente');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'telefono' => 'required'
        ]);

        Agentes::create($request->all());
        return redirect()->route('agentes.index')->with('success', 'Agente creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $agente = Agentes::findOrFail($id);
        return view('mostraragente', compact('agente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $agente = Agentes::findOrFail($id);
        return view('editaragente', compact('agente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $agente = Agentes::findOrFail($id);
        $agente->update($request->all());
        return redirect()->route('agentes.index')->with('success', 'Agente actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $agente = Agentes::findOrFail($id);
        $agente->delete();
        return redirect()->route('agentes.index')->with('success', 'Agente eliminado');
    }
}
