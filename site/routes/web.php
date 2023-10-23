<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $nome = ['joao', 'lara', 'larissa', 'emanoela'];
    
    
    return view('welcome', ['nome' => $nome]);
});


Route::get('/produtos/{id?}', function($id){
    $busca = request('search');
    
    return view('product', ['id' => $id, 'busca' => $busca]);
});
