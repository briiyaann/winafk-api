<?php


namespace App\Services;


use App\Models\Repositories\Match\MatchRepositoryInterface;

class MatchServices
{
    public $match;

    public function __construct(
        MatchRepositoryInterface $match
    ){
        $this->match = $match;
    }

    public function store($data)
    {
        return $this->match->store($data);
    }

    public function getList()
    {
        return $this->match->getList();
    }

    public function getListByStatus($param, $status)
    {
        return $this->match->getListByStatus($param, $status);
    }

    public function addMatchTeam($data)
    {
        return $this->match->addMatchTeam($data);
    }

    public function addMatchSubMatch($data)
    {
        return $this->match->addMatchSubMatch($data);
    }

    public function getMatch($id)
    {
        return $this->match->getMatch($id);
    }

    public function getSubmatches($match_id)
    {
        return $this->match->getSubmatches($match_id);
    }

    public function getSubmatchByMatchidSubmatchid($match_id, $sub_match_id) {
        return $this->match->getSubmatchByMatchidSubmatchid($match_id, $sub_match_id);
    }

    public function updateMatchSubmatch($id, $data)
    {
        return $this->match->updateMatchSubmatch($id, $data);
    }

    public function updateMatch($id, $data)
    {
        return $this->match->updateMatch($id, $data);
    }

    public function addMatchRoundWinner($data)
    {
        return $this->match->addMatchRoundWinner($data);
    }
}
