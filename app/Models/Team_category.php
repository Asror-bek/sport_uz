<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Team_category extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    public function news()
    {
        return $this->hasMany(News::class, "Team_categoryId", "id");
    }


}
