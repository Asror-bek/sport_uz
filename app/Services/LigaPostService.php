<?php

namespace App\Services;

use App\Models\Liga_post;

class LigaPostService
{

    public function index()
    {
        return Liga_post::query()->get();
    }

    public function createLigaPost(array $validated)
    {
        $ligaPost = new Liga_post();
        $ligaPost->name = $validated['name'];
        $ligaPost->State_categoryId = $validated['State_categoryId'];
        $ligaPost->save();
        return $ligaPost;
    }

    public function updateLigaPost(array $validated, Liga_post $ligaPost)
    {
        $ligaPost->name = $validated['name'];
        $ligaPost->State_categoryId = $validated['State_categoryId'];
        $ligaPost->save();
        return $ligaPost;
    }

    public function deleteLigaPost(Liga_post $ligaPost)
    {
        $ligaPost->delete();
    }

}


?>
