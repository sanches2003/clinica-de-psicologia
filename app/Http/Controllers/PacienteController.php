<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use Illuminate\Support\Facades\Auth;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $user_Id = Auth::id();
        $pacientes = 
        Paciente::where('user_id', $user_Id)->get();
        return view('paciente.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user_Id = Auth::id();
        $pacientes = 
        Paciente::where('user_id', $user_Id)->get();
        return view ('paciente.create', compact('pacientes'));      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userId = Auth::id();
        $request->merge(['user_id' => $userId]);
        Paciente::create($request->all());
        return redirect()->route('paciente.index')
        ->with('insercao', 'Inserido com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $paciente= Paciente::findOrFail($id);
        return view("paciente.show", compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $paciente = Paciente::findOrFail($id);
        return view("paciente.edit", compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->update($request->all());
        return redirect()->route('paciente.index')
            ->with('alteracao', 'Alterado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
