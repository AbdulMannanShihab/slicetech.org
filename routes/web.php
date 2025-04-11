<?php

use App\Livewire\BlogDetails;
use App\Livewire\Blogs;
use App\Livewire\Home;
use App\Livewire\SingleCategoryPage;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/blog-details/{slug}', function ($slug) {
    return redirect()->route('blog-details', ['slug' => $slug]);
});

Route::get('/{slug}', BlogDetails::class)->name('blog-details');

Route::get('/category/{slug}', SingleCategoryPage::class)->name('category');
