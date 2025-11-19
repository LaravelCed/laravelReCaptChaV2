<?php

use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;

// For Routing Pages
Route::get('/', function () {
    return view('index');
});

Route::get('/output', function () {
    return view('output');
});
// For Routing Pages End

Route::post('/addRecaptcha', [indexController::class, 'addRecaptcha']);