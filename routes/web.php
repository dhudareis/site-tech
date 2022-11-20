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
    return view('welcome');
});

Route::get('/matricula', function () {
    return view('matricula');
});

Route::get('/curso/{id}', function ($id = null) {
    return view('curso',['id'=>$id]);
});

Route::get('/buscacursos', function () {

    $busca = request('search');

    return view('bus_cursos',['busca'=>$busca]);
});

/*Auth::routes();*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
