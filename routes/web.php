<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/', [Controller::class, 'viewHome']);
Route::get('/birre', [Controller::class, 'viewBirre']);

// Rotas do AdministradorController para funções do administrador
Route::get('/admin/home', [AdministradorController::class, 'viewHome']);

Route::post('/admin/login', [ValidarAdmController::class, 'entrar']);