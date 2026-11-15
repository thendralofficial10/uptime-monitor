<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MonitorController;

Route::resource('monitors', MonitorController::class)->except(['show']);
Route::get('/home', [PageController::class, 'home']);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello Laravel!';
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/user/{name}', function ($name) {
    return "Hello, $name";
});

Route::get('/monitors-test', function () {
    $monitors = App\Models\Monitor::all();
    return view('monitors-test', compact('monitors'));
});
