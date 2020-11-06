<?php

namespace App\Http\Livewire;

use App\Posts;
use Livewire\Component;

class PostIndex extends Component
{
    public $posts;

    protected $listeners = [
      'postAdded'
    ];

    public function postAdded($postId)
    {
        $this->posts->prepend(Posts::find($postId));
    }

    public function mount()
    {
        $this->posts = Posts::latest()->get();
    }

    public function render()
    {
        return view('livewire.post-index');
    }
}
