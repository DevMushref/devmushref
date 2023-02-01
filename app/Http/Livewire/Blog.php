<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Stephenjude\FilamentBlog\Models\Post;

class Blog extends Component
{
    public function render()
    {
        return view('livewire.blog');
    }
}
