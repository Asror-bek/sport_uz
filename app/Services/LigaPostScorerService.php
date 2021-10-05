<?php

namespace App\Services;

use App\Models\Liga_post_scorers;

class LigaPostScorerService
{

    public function index()
    {
        return Liga_post_scorers::query()->get();
    }

    public function createLigaPostScorer(array $validated)
    {
        $ligaPostScorer = new Liga_post_scorers();
        $ligaPostScorer->footballer_name = $validated['footballer_name'];
        $ligaPostScorer->goals = $validated['goals'];
        $ligaPostScorer->Liga_postId = $validated['Liga_postId'];
        $ligaPostScorer->save();
        return $ligaPostScorer;
    }

    public function updateLigaPostScorer(array $validated, Liga_post_scorers $ligaPostScorer)
    {
        $ligaPostScorer->footballer_name = $validated['footballer_name'];
        $ligaPostScorer->goals = $validated['goals'];
        $ligaPostScorer->Liga_postId = $validated['Liga_postId'];
        $ligaPostScorer->save();
        return $ligaPostScorer;
    }

    public function deleteLigaPostScorer(Liga_post_scorers $ligaPostScorer)
    {
        $ligaPostScorer->delete();
    }

}




?>
