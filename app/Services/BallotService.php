<?php

namespace App\Services;

use Web3\Web3;
use Web3\Contract;

class BallotService
{
    protected $web3;
    protected $contract;

    public function __construct()
    {
        $this->web3 = new Web3('http://127.0.0.1:8545'); // RPC URL
        $abi = json_decode(file_get_contents(storage_path('app/abi/Ballot.json')), true);
        $address = '0x...'; // ضع هنا عنوان العقد بعد النشر
        $this->contract = new Contract($this->web3->provider, $abi);
        $this->contract->at($address);
    }

    public function giveRightToVote($voter)
    {
        $this->contract->send('giveRightToVote', $voter, [
            'from' => '0x...' // عنوان صاحب الحق
        ], function ($err, $tx) {
            if ($err) { var_dump($err); }
            else { var_dump($tx); }
        });
    }

    public function vote($proposal)
    {
        $this->contract->send('vote', $proposal, [
            'from' => '0x...' // عنوان الناخب
        ], function ($err, $tx) {
            if ($err) { var_dump($err); }
            else { var_dump($tx); }
        });
    }

    public function winnerName()
    {
        $this->contract->call('winnerName', function ($err, $result) {
            if ($err) { var_dump($err); }
            else { var_dump($result); }
        });
    }
}
