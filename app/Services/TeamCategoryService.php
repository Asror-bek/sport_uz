<?php

namespace App\Services;

use App\Models\Team_category;

class TeamCategoryService
{
    /**
     * Bu funksiya jamoalar kategoriyasini olib beradi
     */
    public function index()
    {
        return Team_category::query()->get();
    }

    public function createTeamcategory(array $validated)
    {
        $teamCategory = new Team_category();
        $teamCategory->name = $validated['name'];
        $teamCategory->addMedia($validated['image'])->toMediaCollection('images');
        $teamCategory->save();
        return $teamCategory;
    }

    public function updateTeamcategory(array $validated, Team_category $teamCategory)
    {
        $teamCategory->name = $validated['name'];
        if(isset($validated["image"]))
        {
            if ($teamCategory->getMedia('images')->first())
            {
                $teamCategory->getMedia('images')->first()->delete();
            }
            $teamCategory->addMedia($validated['image'])->toMediaCollection('images');
        }

        $teamCategory->save();
        return $teamCategory;
    }

    public function deleteTeamcategory(Team_category $teamCategory)
    {
        $teamCategory->delete();
    }


}


?>
