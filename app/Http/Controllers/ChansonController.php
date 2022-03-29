<?php

namespace App\Http\Controllers;

use App\Models\Chanson;
use Illuminate\Http\Request;

class ChansonController extends Controller
{
    public function index(){
        $chansons = Chanson::all();
        return view("welcome", compact("chansons"));
    }
}
