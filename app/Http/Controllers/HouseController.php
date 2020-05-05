<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apartment;

class HouseController extends Controller
{
    public function index(){

        $apartments = Apartment::paginate(6); 
        return view('houses.listHouse', compact('apartments'));
    }
}
