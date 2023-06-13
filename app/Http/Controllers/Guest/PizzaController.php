<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function getPizza()
    {
        $pizza = Pizza::all();

        return view('welcome', compact('pizza'));
    }
}
