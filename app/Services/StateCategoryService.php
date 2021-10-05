<?php

namespace App\Services;

use App\Models\State_category;

class StateCategoryService
{

    public function index()
    {
        return State_category::query()->get();
    }

    public function createStateCategory(array $validated)
    {
        $stateCategory = new State_category();
        $stateCategory->name = $validated['name'];
        $stateCategory->save();
        return $stateCategory;
    }

    public function updateStateCategory(array $validated, State_category $stateCategory)
    {
        $stateCategory->name = $validated['name'];
        $stateCategory->save();
        return $stateCategory;
    }

    public function deleteStateCategory(State_category $stateCategory)
    {
        $stateCategory->delete();
    }
}

?>
