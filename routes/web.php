<?php

use App\Livewire\BlogDetails;
use App\Livewire\Blogs;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/blog-details/{slug}', BlogDetails::class)->name('blog-details');
