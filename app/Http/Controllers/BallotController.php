<?php

namespace App\Http\Controllers;

use App\Services\BallotService;
use Illuminate\Http\Request;

class BallotController extends Controller
{

    protected $ballot;

    // public function __construct(BallotService $ballot)
    // {
    //     $this->ballot = $ballot;
    // }

    public function index()
    {
        return view('ballot.index');
    }
    public function giveRight()
    {
        return view('ballot.give-right');
    }
    public function proposals()
    {
        return view('ballot.proposals');
    }
    public function vote()
    {
        return view('ballot.vote');
    }
    public function winner()
    {
        return view('ballot.winner');
    }
    public function AddProposal(){
        return view('ballot.add-proposal');
    }

    // public function giveRight(Request $request)
    // {
    //     $this->ballot->giveRightToVote($request->input('voter'));
    //     return redirect()->back();
    // }

    // public function vote(Request $request)
    // {
    //     $this->ballot->vote($request->input('proposal'));
    //     return redirect()->back();
    // }

    // public function winner()
    // {
    //     $winner = $this->ballot->winnerName();
    //     return view('ballot.winner', compact('winner'));
    // }
}


