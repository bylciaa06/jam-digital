<?php

use Illuminate\Support\Facades\Route;

Route::get('/jam', function () {
    return view('jam-digital');
});
