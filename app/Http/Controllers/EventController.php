<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = "Gabriel";
        $idade = 22;
    
        $array = [1, 2, 3, 4, 5, 6, 7];
        $nomes = ["Gabriel", "Pedro", "Raisa", "Gabriela", "Carlos", "Kimberly"];
    
        return view('welcome', ["nome" => $nome, "idade" => $idade, "profissao" => "Desenvolvedor PHP", 
        "array" => $array, "nomes" => $nomes]);
    }

    public function create(){
        return view('events.create');
    }
}
