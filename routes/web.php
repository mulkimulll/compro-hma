<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/download', function () {
    return view('unduh');
});

Route::get('/contact', function () {
    return view('kontak');
});

Route::prefix('service')->group(function () {
    Route::get('/software', function () {
        return view('software');
    });
    Route::get('/infra', function () {
        return view('infra');
    });
    Route::get('/alat-peraga', function () {
        return view('alat');
    });
    Route::get('/furniture', function () {
        return view('furniture');
    });
    Route::get('/keamanan-data', function () {
        return view('keamanan');
    });
});
