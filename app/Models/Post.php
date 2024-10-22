<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

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
