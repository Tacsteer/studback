<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidAge extends Controller
{
    public function ageCheck($age)
    {
        if (!is_numeric($age)) {
            //Вернуть статус 404, если возраст не является числом
            return response()->json(['error' => 'Invalid age'], Response::HTTP_NOT_FOUND);
        }
        return response()->json(['age' => $age]);
    }
}
