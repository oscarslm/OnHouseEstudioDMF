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
    return view('index');
})->name('Inicio');

Route::get('/nosotros', function () {
    return view('about');
})->name('Nosotros');

Route::get('/estudio-y-diseno/estilos/industrial', function () {
    return view('industrial-style');
})->name('Industrial');

Route::get('/estudio-y-diseno/estilos/minimalista', function () {
    return view('minimalist-style');
})->name('Minimalista');

Route::get('/estudio-y-diseno/estilos/nordico', function () {
    return view('nordic-style');
})->name('Nórdico');

Route::get('/estudio-y-diseno/estilos/rustico', function () {
    return view('rustic-style');
})->name('Rústico');

Route::get('/estudio-y-diseno/estilos/eclectico', function () {
    return view('eclectic-style');
})->name('Ecléctico');

Route::get('/arquitectura/diseno-de-interiores', function () {
    return view('interior-design');
})->name('Diseño de Interiores');

Route::get('/arquitectura/remodelaciones', function () {
    return view('remodeling');
})->name('Remodelaciones');

Route::get('/arquitectura/desarrollo-de-proyectos/habitacional', function () {
    return view('housing-development');
})->name('Habitacional');

Route::get('/arquitectura/desarrollo-de-proyectos/oficinas', function () {
    return view('offices-development');
})->name('Oficinas');

Route::get('/arquitectura/desarrollo-de-proyectos/comercial', function () {
    return view('commercial-development');
})->name('Comercial');

Route::get('/mobiliario/diseno', function () {
    return view('furniture-design');
})->name('Diseño de Mobiliario');

Route::get('/mobiliario/fabricacion', function () {
    return view('furniture-manufacturing');
})->name('Fabricación de Mobiliario');

Route::get('/mobiliario/instalacion', function () {
    return view('furniture-installation');
})->name('Instalación de Mobiliario');

Route::get('/domotica', function () {
    return view('home-automation');
})->name('Domótica');

Route::get('/contacto', function () {
    return view('contact');
})->name('Contacto');

Route::get('/aviso-de-privacidad', function () {
    return view('privacy');
})->name('Aviso de Privacidad');

Route::get('/preguntas-frecuentes', function () {
    return view('faq');
})->name('FAQS');

Route::get('/mapa-del-sitio', function () {
    return view('sitemap');
})->name('Sitemap');

// Ruta para envío de mail
Route::post('/contactoform', 'ContactoController@send');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
