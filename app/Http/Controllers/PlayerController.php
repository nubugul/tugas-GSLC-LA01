<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
class PlayerController extends Controller
{
    public function showPlayers(){
        return view('players',[
            "title" => "Players",
            "players" => Player::all()
    
        ]);
    }
}
