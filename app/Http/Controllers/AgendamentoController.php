<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agendamento;
use App\Models\Paciente;
use Illuminate\Support\Facades\Auth;

class AgendamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        $pacientes = Paciente::where('user_id', $userId)->get();
        $agendamento = Agendamento::whereIn('paciente_id', $pacientes[0]->id)->get();
        return view("agendamento.index", compact('agendamentos'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userId = Auth::id();
        $pacientes = Paciente::where('user_id', $userId) -> get();
        return view("agendamento.create", compact('pacientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Agendamento::create($request->all());
        return redirect()->route('agendamento.index')
                ->with('insercao', 'Inserido com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $agendamento = Agendamento::findOrFail($id);
        return view('agendamento.show', compact('agendamento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $agendamento = Agendamento::findOrFail($id);
        return view('agendamento.edit', compact('agendamento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $agendamento = Agendamento::findOrFail($id);
        $agendamento->update($request->all());
        return redirect()->route('agendamento.index')
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
