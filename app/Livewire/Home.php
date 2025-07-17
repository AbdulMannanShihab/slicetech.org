<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Home')]
class Home extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';
    public $search = '';
    public $rows = 10;

    public function render()
    {
        if($this->search){
            $blogs = Post::select('title', 'description', 'image', 'slug')->where('title', 'like', '%'.$this->search.'%')
            ->orderBy('id', 'desc')->paginate($this->rows);

        }else{
            $blogs = Post::whereNull('deleted_at')->where('status', 'Approved')->orderBy('id', 'desc')->paginate($this->rows);
        }
        return view('livewire.home',[
            'blogs' => $blogs
        ]);
    }
}
