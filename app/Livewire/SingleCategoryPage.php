<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class SingleCategoryPage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';
    public $search = '';
    public $rows = 10;
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {   
        if ($this->search) {
            $blogs = Post::select('title', 'description', 'image', 'slug')->where('title', 'like', '%'.$this->search.'%')
            ->orderBy('id', 'desc')->paginate($this->rows);
        } else {
            $blogs = Post::select('title', 'description', 'image', 'slug')->with('category')->whereHas('category', function($query) {
                $query->where('slug', $this->slug);
            })->where('status', 'Approved')->orderBy('id', 'desc')->paginate($this->rows);
        }

        return view('livewire.single-category-page',[
            'blogs' => $blogs
        ]);
    }
}
