<?php

use App\Http\Controllers\Api\ArtigoController;
use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\Api\ProdutoController;
use App\Models\Models\Artigo;
use App\Models\Models\Categoria;
use App\Models\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('categoria', CategoriaController::class);

Route::apiResource('produto', ProdutoController::class);

Route::apiResource('artigo', ArtigoController::class);