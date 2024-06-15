<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValidAge;

Route::get('/{name}/{age}', function ($name,$age)
{
    return view('welcome', ['name' => $name, 'age' => $age]);
});

Route::get('/john/{age}', [\App\Http\Controllers\ValidAge::class, 'ageCheck'])
    ->where('age', '[0-9]+'); // Ограничение параметра age только числовыми значениями


