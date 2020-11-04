<?php

namespace App\Http\Livewire;

use App\Posts;
use Livewire\Component;

class PostIndex extends Component
{
    public function render()
    {
        return view('livewire.post-index', [
            'posts' => Posts::latest()->get()
        ]);
    }
}
