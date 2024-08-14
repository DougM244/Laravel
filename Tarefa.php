<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;

    protected $fillable = [
        'flag_concluida', 'nome', 'atividade_id'
    ];

    public function atividade(){
        return $this->belongsTo(related:Atividade::class);
    }
}
