<?php

use App\Http\Controllers\ControladorUsuarios;
use App\Http\Controllers\LanguageController;
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

Route::middleware([App\Http\Middleware\LangAuto::class])->group(function () {

    Route::get('/', function () {
        return view('landing');
    });

    Route::get('lang/{lang}', [App\Http\Controllers\LanguageController::class, 'swap'])->name('lang.swap');

    Route::get('/gmail_igual', [ControladorUsuarios::class , "mostrar_gmail_igual"]);
    Route::get('/usuario_creado', [ControladorUsuarios::class , "mostrar_usuario_creado"]);
    Route::post('/usuario', [ControladorUsuarios::class , "anadir_usuario"])->name("ruta_usuario_anadir");


    
    Route::post('/usuario_iniciado', [ControladorUsuarios::class, 'verificar'])->name("iniciosesion");

    
    


});
