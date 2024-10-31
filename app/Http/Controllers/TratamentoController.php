<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tratamento;
use App\Models\Paciente;
use Illuminate\Support\Facades\Auth;

class TratamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        $pacientes = Paciente::where('user_id', $userId)->get();
        $pacientesId = $pacientes->pluck('id');
        $tratamentos = Tratamento::whereIn('paciente_id', $pacientesId)->get();
        return view("tratamento.index", compact('tratamentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userId = Auth::id();
        $pacientes = Paciente::where('user_id', $userId) -> get();
        return view("tratamento.create", compact('pacientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Paciente::create($request->all());
        return redirect()->route('tratamento.index')
                ->with('insercao', 'Inserido com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tratamentos = Paciente::findOrFail($id);
        return view('tratamento.show', compact('tratamento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $userId = Auth::id();
        $pacientes = Paciente::where('user_id', $userId) -> get();  
        $tratamentos = Paciente::findOrFail($id);
        return view('tratamento.edit', compact('tratamento', 'pacientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tratamentos = Paciente::findOrFail($id);
        $tratamentos->update($request->all());
        return redirect()->route('tratamento.index')
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
