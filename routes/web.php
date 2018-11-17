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
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('login');
});

Route::get('/registrarUsuario', function () {
    return view('registrarUsuario');
});

Route::get('/registrarPremio', function () {
    return view('registrarPremio');
});

Route::get('/usuariosRegistrados', function () {
    return view('usuariosRegistrados');
});

Route::get('/premiosRegistrados', function () {
    return view('premiosRegistrados');
});

Route::get('/graficaUsuarios', function () {
    return view('graficaUsuarios');
});

Route::get('/graficaPremios', function () {
    return view('graficaPremios');
});


/*
//ruta con php clasica con el metodo get muestro el id de un usuario
Route::get('/usr', function () {
    return 'mostrando el id del usuario: '.$_GET['id'];
});

Route::get('/usr/{id}', function ($id) {
    return "mostrando el id del usuario: {$id}";
});->where('id','[0-9]+');

Route::get('/usr/nuevo', function () {
    return "creado nuevo usuario";
});

Route::get('/saludo/{name}/{nickname?}', function ($name,$nickname=null) {
	if($nickname){
		return "Bienvenido {$name}, tu apodo es {$nickname}";
	}else{
		return "Bienvenido {$name}, no tienes apodo";
	}
});*/