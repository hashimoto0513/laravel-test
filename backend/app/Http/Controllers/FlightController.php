<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    public function index(Request $request){
        foreach (Flight::all() as $flight);
    }
}
