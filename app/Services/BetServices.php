<?php


namespace App\Services;


use App\Models\Repositories\Bet\BetRepositoryInterface;

class BetServices
{
    public $bet;

    public function __construct(
        BetRepositoryInterface $bet
    ) {
        $this->bet = $bet;
    }

    public function store($data)
    {
        return $this->bet->store($data);
    }

    public function getBetsByMatch($match_id)
    {
        return $this->bet->getBetsByMatch($match_id);
    }
}
