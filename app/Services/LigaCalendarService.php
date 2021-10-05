<?php

namespace App\Services;

use App\Models\Liga_calendar;

class LigaCalendarService
{

    public function index()
    {
        return Liga_calendar::query()->get();
    }

    public function createLigaCalendar(array $validated)
    {
        $ligaCalendar = new Liga_calendar();
        $ligaCalendar->species = $validated['species'];
        $ligaCalendar->date = $validated['date'];
        $ligaCalendar->team_name = $validated['team_name'];
        $ligaCalendar->team_result = $validated['team_result'];
        $ligaCalendar->LigaCategoryId = $validated['LigaCategoryId'];
        $ligaCalendar->save();
        return $ligaCalendar;
    }

    public function updateLigaCalendar(array $validated, Liga_calendar $ligaCalendar)
    {
        $ligaCalendar->species = $validated['species'];
        $ligaCalendar->date = $validated['date'];
        $ligaCalendar->team_name = $validated['team_name'];
        $ligaCalendar->team_result = $validated['team_result'];
        $ligaCalendar->LigaCategoryId = $validated['LigaCategoryId'];
        $ligaCalendar->save();
        return $ligaCalendar;
    }

    public function deleteLigaCalendar(Liga_calendar $ligaCalendar)
    {
        $ligaCalendar->delete();
    }

}



?>
