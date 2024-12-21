<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use RalphJSmit\Laravel\SEO\Support\HasSEO;

class Category extends Model
{
    use HasFactory, SoftDeletes, HasSEO;

    protected $fillable = [
        'name', 
        'slug',
        'user_id',
        'image',  
        'status',
    ];

    protected $guarded = [];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
