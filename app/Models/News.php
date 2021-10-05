<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class News extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    public function teamCategory()
    {
        return $this->hasOne(Team_category::class, "id", "Team_categoryId");
    }

    public function category()
    {
        return $this->hasOne(Category::class, "id", "CategoryId");
    }
}
