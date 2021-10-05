<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State_category extends Model
{
    use HasFactory;

    public function ligaPost()
    {
        return $this->hasMany(Liga_post::class, "State_categoryId", "id");
    }
}
