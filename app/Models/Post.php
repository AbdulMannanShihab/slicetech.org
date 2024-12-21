<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use RalphJSmit\Laravel\SEO\Support\HasSEO;

class Post extends Model
{
    use HasFactory, SoftDeletes, HasSEO;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'description',
        'category_id',
        'user_id',
        'status'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class)->where('status', 'Active');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
