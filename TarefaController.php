<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tarefa;

class TarefaController extends Controller
{
    public function index(){
        $tarefas = Tarefa::all();
        return view('tarefas.index', compact('tarefas'));
    }
}
