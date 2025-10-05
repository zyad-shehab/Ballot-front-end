<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoterController extends Controller
{
    public function index()
    {
        return view('voter.index');
    }
    public function proposals()
    {
        return view('voter.proposals');
    }
    public function vote()
    {
        return view('voter.vote');
    }
    public function winner()
    {
        return view('voter.winner');
    }
}
