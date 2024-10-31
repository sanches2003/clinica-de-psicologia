<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diagnostico;
use App\Models\Paciente;
use Illuminate\Support\Facades\Auth;

class DiagnosticoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        $pacientes = Paciente::where('user_id', $userId)->get();
        $pacientesId = $pacientes->pluck('id');
        $diagnosticos = Diagnostico::whereIn('paciente_id', $pacientesId)->get();  
        return view("diagnostico.index", compact('diagnosticos'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userId = Auth::id();
        $pacientes = Paciente::where('user_id', $userId) -> get();
        return view("diagnostico.create", compact('pacientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Diagnostico::create($request->all());
        return redirect()->route('diagnostico.index')
                ->with('insercao', 'Inserido com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $diagnostico = Diagnostico::findOrFail($id);
        return view('diagnostico.show', compact('diagnostico'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $userId = Auth::id();
        $pacientes = Paciente::where('user_id', $userId) -> get();  
        $diagnostico = Diagnostico::findOrFail($id);
        return view('diagnostico.edit', compact('diagnostico', 'pacientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $diagnosticos = Diagnostico::findOrFail($id);
        $diagnosticos->update($request->all());
        return redirect()->route('diagnostico.index')
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
