<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Blog Details')]
class BlogDetails extends Component
{
    public $user_id;
    public $title;
    public $image;
    public $description;

    public function mount($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $this->user_id = $post->user->name;
        $this->title = $post->title;
        $this->image = $post->image;
        $this->description = $post->description;
    }
    public function render()
    {
        return view('livewire.blog-details');
    }
}
