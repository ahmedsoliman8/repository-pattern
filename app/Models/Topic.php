<?php

namespace App\Models;

use App\Traits\Eloquent\HasLive;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasLive;
    use HasFactory;

    protected $fillable = ['title', 'user_id', 'slug'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public  function getRouteKeyName()
    {
        return 'slug';
    }
}
