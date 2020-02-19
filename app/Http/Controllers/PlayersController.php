<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function index(){
        $jugadores = Students::all();
        return view('welcome',compact('jugadores'));
    }
}
