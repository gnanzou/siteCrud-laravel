<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function affiche(){
        $cars = Car::all();
        return view('welcome', compact('cars'));
    }
}
