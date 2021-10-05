<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liga_post_league extends Model
{
    use HasFactory;

    public function ligaPost()
    {
        return $this->hasOne(Liga_post::class, "id", "Liga_postId");
    }
}
