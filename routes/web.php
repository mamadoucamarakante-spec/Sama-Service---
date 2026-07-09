<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('accueil');
});

Route::get('/prestataires', function () {
    return view('prestataires');
});

Route::get('/reservation', function () {
    return view('reservation');
});

Route::get('/contact', function () {
    return view('contact');
});