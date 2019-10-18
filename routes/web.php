<?php

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

Route::get('contacto', 'PageController@contacto' )->name('contacto');

Route::get('nosotros', 'PageController@nosotros' )->name('nosotros');

Route::get('cursos', 'PageController@cursos' )->name('cursos');

Route::get('cursosExternos', 'PageController@cursosExt' )->name('cursosExt');

Route::get('/', 'PageController@inicio' )->name('inicio');



Auth::routes();

Route::get('planCurso', 'HomeController@planCurso')->name('plan');

Route::get('metodoPago', 'HomeController@metodoPago')->name('pago');

Route::get('/home', 'HomeController@index')->name('home');
