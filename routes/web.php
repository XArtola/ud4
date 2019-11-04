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
    return view('welcome');
});

Route::get('/4.1', function () {
    return view('4_1');
});

Route::get('/4.1/contacto', function () {
    return view('contacto');
});

Route::get('4.1/blog/{id}', function ($id) {
    return view('blog', ['id'=>$id]);
});

Route::get('/4.1/blog/{id}/{nombre}', function ($id, $nombre) {
    return view('blog', ['id' => $id, 'nombre' => $nombre]);
})->where(array('id'=>'[0-9]+', 'nombre'=>'[A-Za-z]+'));

Route::get('/4.2', function () {
    return view('4_2');
});

Route::get('/saludo/{nombre?}/{color?}', 'SaludoController@saludar')->name('saludar');


Route::get('/4.3', function () {
    return view('4_3');
});
Route::get('/4.4', function () {
    return view('4_4');
});

