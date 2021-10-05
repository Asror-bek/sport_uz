<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liga_category extends Model
{
    use HasFactory;

    public function ligaSeason()
    {
        return $this->hasMany(Liga_seasons::class, "LigaCategoryId", "id");
    }

    public function ligaCalendar()
    {
        return $this->hasMany(Liga_calendar::class, "LigaCategoryId", "id");
    }
}
