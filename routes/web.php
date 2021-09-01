<?php

use App\Http\Controllers\ArtigoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ContapagarController;
use App\Http\Controllers\EntradaEstoqueController;
use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\HistoricoController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ItemVendaController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\ProcessoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\VendaController;
use App\Models\Models\Artigo;
use App\Models\Models\Contapagar;
use App\Models\Models\Tipo;
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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::resource('/', InicioController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('categoria', CategoriaController::class);

Route::resource('produto', ProdutoController::class);

Route::resource('artigo', ArtigoController::class);

Route::resource('estoque', EstoqueController::class);

Route::resource('aumenta', EntradaEstoqueController::class);

Route::resource('processo', ProcessoController::class);

Route::resource('tipo', TipoController::class);

Route::resource('contapagar', ContapagarController::class);

Route::resource('venda', VendaController::class);
Route::post('iniciar', [VendaController::class, 'store']);

Route::resource('itemvenda', ItemVendaController::class);
Route::post('item', [ItemVendaController::class,'item']);

Route::resource('historico', HistoricoController::class);

Route::resource('perfil', PerfilController::class);

require __DIR__.'/auth.php';
