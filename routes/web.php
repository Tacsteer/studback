<?php

use Illuminate\Support\Facades\Route;

Route::get('/{name}/{age}', function ($name,$age)
{
    return view('welcome', ['name' => $name, 'age' => $age]);
});

Route::get('/john/{age}', [\App\Http\Controllers\ValidAge::class, ''])
    ->where('age', '[0-9]+'); // Ограничение параметра age только числовыми значениями


