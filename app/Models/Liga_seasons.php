<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Liga_seasons extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    public function ligaCategory()
    {
        return $this->hasOne(Liga_category::class, "id", "LigaCategoryId");
    }
}
