<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aluno extends Controller
{
    function show(){
        $alunos = [
            (object) ['nome'=> 'Victor', 'telefone'=>'123456789', 'email'=>'victor@gmail.com'],
            (object) ['nome'=> 'Gabriel', 'telefone'=>'32164756', 'email'=>'gabriel@gmail.com'],
            (object) ['nome'=> 'cleyton', 'telefone'=>'56674965', 'email'=>'cleyton@gmail.com']
        ];

        return view('aluno', compact('alunos'));
    }
}
