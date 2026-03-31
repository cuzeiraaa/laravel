<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Professor extends Controller
{
    function show(){
        $professores = [
            (object) ['nome'=> 'Felipe', 'telefone'=>'12345678', 'email'=>'victor@gmail.com'],
            (object) ['nome'=> 'Amauri', 'telefone'=>'32164756', 'email'=>'gabriel@gmail.com'],
        ];

        return view('Professor', compact('professores'));
    }
}
