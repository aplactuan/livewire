<?php

namespace App\Http\Livewire;

use App\Post;
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
        $this->posts = Post::latest()->get();
    }

    public function render()
    {
        return view('livewire.post-index');
    }
}
