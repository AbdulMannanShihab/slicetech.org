<?php

namespace App\Livewire\Partials;

use App\Models\Category;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        $categories =Category::where('status', 'Active')->get();
        return view('livewire.partials.navbar', [
            'categories' => $categories
        ]);
    }
}
