<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create(){
        return view('home');
    }

    public function update(){
        return "Está é uma página de atualização!";
    }

    public function store(Request $req){
        $titulo = $req->input('titulo');
        return "Job cadastrado com sucesso!".$titulo;
    }
}
