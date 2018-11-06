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
Use App\User;

Route::get('/url-hello-world', 'ShowProfile@hello');

Route::get('/tutu', 'ShowProfile@tutu');

Route::get('/usuarios', 'ShowProfile@usuarios');

Route::get('/ruta/{str1}/and/{str2?}', 'ShowProfile@nombre');

Route::get('/ruta', 'ShowProfile@welcome');

Route::get('/', 'ShowProfile@welcome');
