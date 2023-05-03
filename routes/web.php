<?php

use App\Http\Controllers\EstoqueController;
use App\Models\Estoque;
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
    return view('welcome');
});

Route::get('/estoque', [EstoqueController::class, "index"])->name('estoque');

Route::get('/estoque/adicionar', [EstoqueController::class, "adicionar"])->name('estoqueAdicionar');

Route::post('/estoque/adicionar', [EstoqueController::class, 'adicionarGravar']);

Route::get("/estoque/editar/{estoque}", [EstoqueController::class, 'editar'])->name('estoque.editar');

Route::put('/estoque/adicionar', [EstoqueController::class, 'editarGravar']);
