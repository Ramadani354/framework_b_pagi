<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa',
[MahasiswaController::class, 'index']);

Route::get('/mahasiswa/create',
[MahasiswaController::class, 'create']);

Route::post('/mahasiswa/input',
function(Request $req){
    echo"<pre>";
    print_r($req->post());

});

Route::get('/nama', function(){
    echo "Hello World";
})->middleware('namamiddleware');

Route::get('/home', function(){
    echo '</h1> ini home</h1>';
});


Route::get('/namaku', function(){
    echo "Yovi Adhi Ramadani";
})->middleware('middleware1');

Route::get('rumah', function(){
    echo '</h1> ini rumah</h1>';
});
