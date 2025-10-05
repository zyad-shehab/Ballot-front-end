<?php

use App\Http\Controllers\BallotController;
use App\Http\Controllers\VoterController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BallotController::class, 'index'])->name('home');
// Route::post('/vote', [BallotController::class, 'vote']);
// Route::post('/give-right', [BallotController::class, 'giveRight']);
// Route::get('/winner', [BallotController::class, 'winner']);

Route::get('/give-right', [BallotController::class, 'giveRight'])->name('giveRight');
Route::get('/proposals', [BallotController::class, 'proposals'])->name('proposals');
Route::get('/vote', [BallotController::class, 'vote'])->name('vote');
Route::get('/winner', [BallotController::class, 'winner'])->name('winner');
Route::get('/AddProposal', [BallotController::class, 'AddProposal'])->name('AddProposal');

Route::get('/voter', [VoterController::class, 'index'])->name('voterIndex');
Route::get('/voter/proposals', [VoterController::class, 'proposals'])->name('voterProposals');
Route::get('/voter/vote', [VoterController::class, 'vote'])->name('voterVote');
Route::get('/voter/winner', [VoterController::class, 'winner'])->name('voterWinner');
