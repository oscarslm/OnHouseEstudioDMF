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

Route::get('/', function () {
    return view('home');
})->name('Inicio');

Route::get('/contacto', function () {
    return view('contact');
})->name('Contacto');

Route::get('/aviso-de-privacidad', function () {
    return view('privacy');
})->name('Aviso de Privacidad');

Route::get('/nosotros', function () {
    return view('about');
})->name('Nosotros');

Route::get('/preguntas-frecuentes', function () {
    return view('faq');
})->name('FAQS');

Route::get('/mapa-del-sitio', function () {
    return view('sitemap');
})->name('Sitemap');
