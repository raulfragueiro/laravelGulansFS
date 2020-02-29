<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Players;

class PlayersController extends Controller
{
    public function index(){
        $jugadores = Players::paginate(5);
        return view('welcome',compact('jugadores'));
    }

    public function stats(){
        $jugadores = Players::all();
        return view('stats',compact('jugadores'));
    }

    public function playerView($nombre){
        $jugadores = Players::find($nombre);
        return view ('view',compact('jugadores'));
    }
}
