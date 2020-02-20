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

}
