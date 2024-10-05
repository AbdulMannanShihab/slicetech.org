<?php

namespace App\Livewire\Partials;

use App\Models\Category;
use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        $categories =Category::where('status', 'Active')->get();
        return view('livewire.partials.footer', [
            'categories' => $categories
        ]);
    }
}
