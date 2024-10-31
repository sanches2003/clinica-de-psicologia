<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Problema;
use App\Models\Paciente;
use Illuminate\Support\Facades\Auth;

class ProblemaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        $pacientes = Paciente::where('user_id', $userId)->get();
        $problemas = Problema::whereIn('paciente_id', $pacientes[0]->id)->get();
        return view("problema.index", compact('problemas')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userId = Auth::id();
        $problemas = Paciente::where('user_id', $userId) -> get();
        return view("problema.create", compact('problemas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Paciente::create($request->all());
        return redirect()->route('problema.index')
                ->with('insercao', 'Inserido com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $problemas = Paciente::findOrFail($id);
        return view('problema.show', compact('problemas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $userId = Auth::id();
        $pacientes = Paciente::where('user_id', $userId) -> get();  
        $problemas = Paciente::findOrFail($id);
        return view('problema.edit', compact('problemas', 'pacientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $problemas = Paciente::findOrFail($id);
        $problemas->update($request->all());
        return redirect()->route('problema.index')
        ->with('alteracao', 'Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
