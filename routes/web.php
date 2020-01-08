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
// Rutas de Administracion
//Rutas que nos lleguen con perfil admin
Route::prefix('admin')->group(function () {
    // Protegemos de usuarios registrados
    // solo los usuarios de tipo admin
    // Rutas automáticas del CRUD de usuarios
    Route::resource('users', 'UsersController')->middleware('perfil:admin', 'auth');
    // Ruta del fichero PDF de usuarios
     Route::get('usuarios-pdf', 'UsersController@pdfAll')->name('pdf.usersAll')->middleware('perfil:admin','auth');
     Route::get('usuario-pdf/{id}', 'UsersController@pdf')->name('pdf.user')->middleware('perfil:admin','auth');

    // Rutas automáticas del CRUD de productos
    Route::resource('productos', 'ProductosController')->middleware('perfil:admin','auth');
    // Ruta del fichero PDF de productos
    Route::get('productos-pdf', 'ProductosController@pdfAll')->name('pdf.productosAll')->middleware('perfil:admin','auth');
    Route::get('producto-pdf/{id}', 'ProductosController@pdf')->name('pdf.producto')->middleware('perfil:admin','auth');
});


//Rutas que nos lleguen con perfil catalogo
Route::prefix('catalogo')->group(function () {
    // Pagina principal de nuestro subruta/catalogo
    Route::get('/', 'CatalogoController@index')->name('catalogo.index')->middleware('auth');
    Route::get('producto/{id}', 'CatalogoController@show')->name('catalogo.show')->middleware('auth');
});

// Rutas para la parte de autenticación y registro
Auth::routes();
Route::prefix('home')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::put('actualizar/{id}', 'HomeController@update')->name('home.update');
});

// Rutas de email
Route::prefix('contacto')->group(function () {
    Route::get('/', 'CorreosController@index')->name('contacto');
    Route::post('enviar', 'CorreosController@enviar')->name('contacto.enviar');;
});

