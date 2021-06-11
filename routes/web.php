<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

//Route::get('/',[HomeController::class, 'index']);
//Route::get('/usuarios', [UserController::class, 'index']);



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('usuarios', [App\Http\Controllers\UserController::class, 'index']);
Route::get('usuarios', [App\Http\Controllers\UserController::class, 'index'])-> middleware('auth');
Route::get('usuarios/create', [App\Http\Controllers\UserController::class, 'create']);

Route::post('usuarios', [App\Http\Controllers\UserController::class, 'store'])->name('usuarios.store');

Route::get('usuarios/{id}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('usuarios.edit');
Route::put('usuarios/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('usuarios.update');

Route::get('usuarios/{id}/show', [App\Http\Controllers\UserController::class, 'show'])->name('usuarios.show');

Route::put('usuarios/{id}/delete', [App\Http\Controllers\UserController::class, 'destroy'])->name('usuarios.destroy');


/*
Route::get('/usuarios', function () {
    return view('usuarios');
});
*/