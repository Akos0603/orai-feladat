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
    return view('Hello world');
});
/*Route::get('/help', function () {
    $username= 'John';
    return view('welcome', [
        'name' => $username 
    ]);
});*/
Route::view('/' , 'welcome', ['name' => 'John']);

Route::get('/pass-array', function () {
    $tasks = [
    'Go to the store',
    'Go to the market',
    'Go to the work'
    ];
    $foobar = 'foobar';
    return view('tasklist')->with([
        'foo' => $foobar,
        'tasks' => $tasks
    ]);

});



