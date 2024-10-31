<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;

class AvalicaoPsicologica extends Model
{
    use HasFactory;

    protected $fillable = ["paciente_id", 
                            "data_avaliacao",
                            "observacoes"];

    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }
}
