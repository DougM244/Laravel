<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Atividade;

class AtividadeController extends Controller
{
    public function index(){
        $atividades=Atividade::all();

        return view("atividades.index",compact('atividades'));

    }
}
