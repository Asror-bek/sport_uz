<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liga_calendar extends Model
{
    use HasFactory;

    public function ligaCategory()
    {
        return $this->hasOne(Liga_category::class, "id", "LigaCategoryId");
    }
}
