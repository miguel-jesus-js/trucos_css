<?php

use Illuminate\Support\Facades\Route;
use App\http\Controller\PostController;
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
Route::get('/acercade', function () {
    return view('acercade');
});
Route::get('/crearpost', function () {
    return view('post.crear');
});
Route::get('/crearpregunta', function () {
    return view('preguntas.crear');
});
//Obtener post recientes
Route::post('api/postRecientes','PostController@getPostRecientes');
//Route::post('postRecientes',\App\Http\Controllers\PostController::class . '@getPostRecientes');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/mispost', function () {
    return view('post.show');
})->name('mispost');
Route::middleware(['auth:sanctum', 'verified'])->get('/mispreguntas', function () {
    return view('preguntas.show');
})->name('mispreguntas');
