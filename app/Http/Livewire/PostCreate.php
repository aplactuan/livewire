<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostCreate extends Component
{
    public $body;

    public function addPost()
    {
       $post = auth()->user()->posts()->create([
          'body'    => $this->body
       ]);

       $this->emit('postAdded', $post->id);

       $this->body = '';
    }

    public function render()
    {
        return view('livewire.post-create');
    }
}
