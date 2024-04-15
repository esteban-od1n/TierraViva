<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recursos', function () {
    return view('resources.indexRecursos');
});

Route::get('/proveedores', function () {
    return view('providers.indexProveedores');
});

Route::get('/mapas', function () {
    return view('maps.indexMapas');
});

Route::get('/foro', function () {
    return view('forum.indexForum');
});

Route::get('/selectorlogin', function () {
    return view('auth.selectorLogin');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/recuperarContraseña', function () {
    return view('auth.recuperarContra');
});