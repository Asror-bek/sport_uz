<?php

namespace App\Services;

use App\Models\Liga_seasons;

class LigaSeasonService
{
    public function index()
    {
        return Liga_seasons::query()->get();
    }

    public function createLigaSeason(array $validated)
    {
        $ligaSeason = new Liga_seasons();
        $ligaSeason->result = $validated['result'];
        $ligaSeason->team_name = $validated['team_name'];
        $ligaSeason->game = $validated['game'];
        $ligaSeason->win = $validated['win'];
        $ligaSeason->draw = $validated['draw'];
        $ligaSeason->defeat = $validated['defeat'];
        $ligaSeason->team_goals = $validated['team_goals'];
        $ligaSeason->score = $validated['score'];
        $ligaSeason->footballer_name = $validated['footballer_name'];
        $ligaSeason->footballer_goals = $validated['footballer_goals'];
        $ligaSeason->penalti = $validated['penalti'];
        $ligaSeason->pas = $validated['pas'];
        $ligaSeason->golpas = $validated['golpas'];
        $ligaSeason->LigaCategoryId = $validated['LigaCategoryId'];
        $ligaSeason->addMedia($validated['logo'])->toMediaCollection('images');
        $ligaSeason->save();
        return $ligaSeason;
    }

    public function updateLigaSeason(array $validated, Liga_seasons $ligaSeason)
    {
        $ligaSeason->result = $validated['result'];
        $ligaSeason->team_name = $validated['team_name'];
        $ligaSeason->game = $validated['game'];
        $ligaSeason->win = $validated['win'];
        $ligaSeason->draw = $validated['draw'];
        $ligaSeason->defeat = $validated['defeat'];
        $ligaSeason->team_goals = $validated['team_goals'];
        $ligaSeason->score = $validated['score'];
        $ligaSeason->footballer_name = $validated['footballer_name'];
        $ligaSeason->footballer_goals = $validated['footballer_goals'];
        $ligaSeason->penalti = $validated['penalti'];
        $ligaSeason->pas = $validated['pas'];
        $ligaSeason->golpas = $validated['golpas'];
        $ligaSeason->LigaCategoryId = $validated['LigaCategoryId'];
        if(isset($validated["logo"]))
        {
            if ($ligaSeason->getMedia('images')->first())
            {
                $ligaSeason->getMedia('images')->first()->delete();
            }
            $ligaSeason->addMedia($validated['logo'])->toMediaCollection('images');
        }
        $ligaSeason->save();
        return $ligaSeason;

    }

    public function deleteLigaSeason(Liga_seasons $ligaSeason)
    {
        $ligaSeason->delete();
    }

}

?>
