<?php

use Illuminate\Support\Facades\Route;

Route::get('/{name}/{age}', function ($name,$age) {
    return view('welcome', ['name' => $name, 'age' => $age]);
});


