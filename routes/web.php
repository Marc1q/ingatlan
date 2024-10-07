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
Route::get('ezamenu', function () {
    return view('menu');
});
Route::get('kategoria', function () {
    return view('kategoriak');
});
Route::get('bejelentkezes', function () {
    return view('bejelentkezes');
});
Route::get('/kontakt', function () {
    return view('contact');
   });
Route::get('/pass-array', function () {
    $tasks = [
    'Go to the store',
    'Go to the market',
    'Go to the work'
    ];
    return view('tasklist')->with([
        'foo' => $foobar,
        'tasks' => $tasks
       ]);
});
   
Route::view('/' , 'welcome', ['name' => 'John']);
    $username = 'John';
    return view('welcome', [
    'name' => $username
    ]);