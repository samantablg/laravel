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

Route::get('/', function() {
    return view('welcome!');
});

Route::get('/url-hello-world', function() {
    return 'Hello world!';
});

Route::get('/tutu', function() {
    $a = [1, 0, 'gsdgshg'];
    dd($a);
});

Route::get('/usuarios', function() {
    $aUser = User::find(1);
    //foreach ($aUser as $a) {
        //echo $a -> name . " " . $a -> id . " " . $a -> email . "<br>";
    dd($aUser);
});
