<?php

use App\Http\Controllers\ArtigoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EntradaEstoqueController;
use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\ProdutoController;
use App\Models\Models\Artigo;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('categoria', CategoriaController::class);

Route::resource('produto', ProdutoController::class);

Route::resource('artigo', ArtigoController::class);

Route::resource('estoque', EstoqueController::class);

Route::resource('aumenta', EntradaEstoqueController::class);

require __DIR__.'/auth.php';
