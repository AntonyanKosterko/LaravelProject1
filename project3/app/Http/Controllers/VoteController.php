<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;

class VoteController extends Controller
{
    public function showAll(){
        $vote = new Vote();
        $votes = $vote->all();

        return view('index', ['votes' => $votes]);
    }
}
