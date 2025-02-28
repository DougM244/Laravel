<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'status', 'data', 'user_id'
    ];

    public function user(){
        return $this->belongsTo(related:User::class);
    }

    public function tarefas(){
        return $this->hasMany(related:Tarefa::class);
    }
}
