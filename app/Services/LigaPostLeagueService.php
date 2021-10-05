<?php

namespace App\Services;

use App\Models\Liga_post_league;

class LigaPostLeagueService
{

    public function index()
    {
        return Liga_post_league::query()->get();
    }

    public function createLigaPostLeague(array $validated)
    {
        $ligaPostLeague = new Liga_post_league();
        $ligaPostLeague->team_name = $validated['team_name'];
        $ligaPostLeague->games = $validated['games'];
        $ligaPostLeague->score = $validated['score'];
        $ligaPostLeague->Liga_postId = $validated['Liga_postId'];
        $ligaPostLeague->save();
        return $ligaPostLeague;
    }

    public function updateLigaPostLeague(array $validated, Liga_post_league $ligaPostLeague)
    {
        $ligaPostLeague->team_name = $validated['team_name'];
        $ligaPostLeague->games = $validated['games'];
        $ligaPostLeague->score = $validated['score'];
        $ligaPostLeague->Liga_postId = $validated['Liga_postId'];
        $ligaPostLeague->save();
        return $ligaPostLeague;
    }

    public function deleteLigaPostLeague(Liga_post_league $ligaPostLeague)
    {
        $ligaPostLeague->delete();
    }

}




?>
