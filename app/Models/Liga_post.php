<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liga_post extends Model
{
    use HasFactory;

    public function stateCategory()
    {
        return $this->hasOne(State_category::class, "id", "State_categoryId");
    }

    public function ligaPostScorer()
    {
        return $this->hasMany(Liga_post_scorers::class, "Liga_postId", "id");
    }

    public function ligaPostLeague()
    {
        return $this->hasMany(Liga_post_league::class, "Liga_postId", "id");
    }
}
