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

    public function create(Request $request){
        $vote = new Vote();
        $vote->title = $request->title;
        $vote->text = $request->text;
        $vote->positive = 0;
        $vote->negative = 0;
        $vote->save();

        return redirect('/');
    }
}