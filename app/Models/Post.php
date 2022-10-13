<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\User;
use App\Models\Image;
use App\Models\Category;
use App\Traits\ApiTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, ApiTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'extract',
        'body',
        'category_id',
        'user_id'
    ];
    
    const BORRADOR = 1;
    const PUBLICADO = 2;

    // Relación uno a muchos inversa
    public function user()
    {
       return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relación muchos a muchos
    public function tags()
    {
        return  $this->belongsToMany(Tag::class);
    }

    // Relación uno a muchos polimórfica
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
