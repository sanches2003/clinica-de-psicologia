<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Terapia;
use App\Models\Paciente;
use Illuminate\Support\Facades\Auth;

class TerapiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        $pacientes = Paciente::where('user_id', $userId)->get();
        $terapias = Terapia::whereIn('paciente_id', $pacientes[0]->id)->get();
        return view("terapia.index", compact('terapias')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userId = Auth::id();
        $terapias = Paciente::where('user_id', $userId) -> get();
        return view("terapia.create", compact('terapias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Paciente::create($request->all());
        return redirect()->route('terapia.index')
                ->with('insercao', 'Inserido com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $terapias = Paciente::findOrFail($id);
        return view('terapia.show', compact('terapias'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $userId = Auth::id();
        $pacientes = Paciente::where('user_id', $userId) -> get();  
        $terapias = Paciente::findOrFail($id);
        return view('terapia.edit', compact('terapias', 'pacientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $terapias = Paciente::findOrFail($id);
        $terapias->update($request->all());
        return redirect()->route('terapia.index')
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
