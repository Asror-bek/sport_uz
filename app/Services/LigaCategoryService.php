<?php

namespace App\Services;

use App\Models\Liga_category;

class LigaCategoryService
{
    /**
     * Bu funksiya jamoalar kategoriyasini olib beradi
     */
    public function index()
    {
        return Liga_category::query()->get();
    }

    public function createLigaCategory(array $validated)
    {
        $ligaCategory = new Liga_category();
        $ligaCategory->name = $validated['name'];
        $ligaCategory->save();
        return $ligaCategory;
    }

    public function updateLigaCategory(array $validated, Liga_category $ligaCategory)
    {
        $ligaCategory->name = $validated['name'];
        $ligaCategory->save();
        return $ligaCategory;
    }

    public function deleteLigaCategory(Liga_category $ligaCategory)
    {
        $ligaCategory->delete();
    }


}


?>
