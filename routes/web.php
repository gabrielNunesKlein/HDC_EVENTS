<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $nome = "Gabriel";
    $idade = 22;

    $array = [1, 2, 3, 4, 5, 6, 7];
    $nomes = ["Gabriel", "Pedro", "Raisa", "Gabriela", "Carlos", "Kimberly"];

    return view('welcome', ["nome" => $nome, "idade" => $idade, "profissao" => "Desenvolvedor PHP", 
    "array" => $array, "nomes" => $nomes]);
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/products', function(){
    return view('product');
});
