<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route Hooks - Do not delete//
	Route::view('novotosdistritos', 'livewire.novotosdistritos.index')->middleware('auth');
	Route::view('nocompetitividades', 'livewire.nocompetitividades.index')->middleware('auth');
	Route::view('novotospartidos', 'livewire.novotospartidos.index')->middleware('auth');
	Route::view('competitividadespartidos', 'livewire.competitividadespartidos.index')->middleware('auth');
	Route::view('alianzas', 'livewire.alianzas.index')->middleware('auth');
	Route::view('secciones', 'livewire.secciones.index')->middleware('auth');
	Route::view('tiposecciones', 'livewire.tiposecciones.index')->middleware('auth');
	Route::view('municipiosdistritos', 'livewire.municipiosdistritos.index')->middleware('auth');
	Route::view('distritos', 'livewire.distritos.index')->middleware('auth');
	Route::view('partidos', 'livewire.partidos.index')->middleware('auth');
	Route::view('municipios', 'livewire.municipios.index')->middleware('auth');
	Route::view('entidades', 'livewire.entidades.index')->middleware('auth');