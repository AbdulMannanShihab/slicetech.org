<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Blog Details')]
class BlogDetails extends Component
{
    public $post_id;
    public $slug;
    public $title;
    public $category_id;
    public $category_name;
    public $category_image;
    public $image;
    public $description;
    public $create_at;

    public function mount($slug)
    {
        $post = Post::where('slug', $slug)->first();
        if (!$post) {
            abort(404); // or redirect to a fallback
        }
        $this->post_id = $post->id;
        $this->category_name = $post->category->name;
        $this->category_id = $post->category->id;
        $this->category_image = $post->category->image;
        $this->title = $post->title;
        $this->image = $post->image;
        $this->description = $post->description;
        $this->create_at = $post->created_at->diffForHumans();
    }
    public function render()
    {
        $posts = Post::where('category_id', $this->category_id)
                    ->where('status', 'Approved')
                    ->where('slug', $this->slug)
                    ->orderBy('id', 'ASC')
                    ->get();

        return view('livewire.blog-details',[
            'posts' => $posts,
        ]);
    }
}
