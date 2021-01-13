<?php


namespace App\Models\Repositories\Match;


use App\Models\Core\Match;
use App\Models\Core\MatchSubmatch;
use App\Models\Core\MatchTeam;

class MatchRepository implements MatchRepositoryInterface
{
    public function store($data)
    {
        return Match::create($data);
    }

    public function getList($param)
    {
        if($param) {
            return Match::where('game_type_id', $param)->with('league')->with('matchSubmatch')->with('matchTeams')->get();
        } else {
            return Match::with('matchSubmatch')->with('league')->with('matchTeams')->get();
        }
    }

    public function addMatchTeam($data)
    {
        return MatchTeam::create($data);
    }

    public function addMatchSubMatch($data)
    {
        return MatchSubmatch::create($data);
    }
}
