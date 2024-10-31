<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encaminhamento;
use App\Models\Paciente;
use Illuminate\Support\Facades\Auth;

class EncaminhamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        $pacientes = Paciente::where('user_id', $userId)->get();
        $encaminhamentos = Encaminhamento::whereIn('paciente_id', $pacientes[0]->id)->get();
        return view("encaminhamento.index", compact('encaminhamentos')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userId = Auth::id();
        $pacientes = Paciente::where('user_id', $userId) -> get();
        return view("encaminhamento.create", compact('pacientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Paciente::create($request->all());
        return redirect()->route('encaminhamento.index')
                ->with('insercao', 'Inserido com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $encaminhamentos = Encaminhamento::findOrFail($id);
        return view('encaminhamento.show', compact('encaminhamentos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $userId = Auth::id();
        $pacientes = Paciente::where('user_id', $userId) -> get();  
        $encaminhamentos = Encaminhamento::findOrFail($id);
        return view('encaminhamento.edit', compact('encaminhamentos', 'pacientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $encaminhamentos = Encaminhamento::findOrFail($id);
        $encaminhamentos->update($request->all());
        return redirect()->route('encaminhamento.index')
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
