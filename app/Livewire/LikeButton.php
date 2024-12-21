<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class LikeButton extends Component
{
    public $post_id;

    public function toggleLike()
    {
        if(auth()->guest()){
            return redirect()->route('login');
        }

        $user = auth()->user();
        $hasLiked = $user->likes()->where('post_id', $this->post_id)->exists();

        if($hasLiked){
            $user->likes()->detach($this->post_id);
            $return;
        } 
        $user->likes()->attach($this->post_id);
    }
    public function render()
    {
        return view('livewire.like-button');
    }
}
