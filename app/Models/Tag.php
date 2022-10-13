<?php

namespace App\Models;

use App\Models\Post;
use App\Traits\ApiTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory, ApiTrait;

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
