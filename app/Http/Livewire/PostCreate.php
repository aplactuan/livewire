<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostCreate extends Component
{
    public $body;

    public function addPost()
    {
       auth()->user()->posts()->create([
          'body'    => $this->body
       ]);

       $this->body = '';
    }

    public function render()
    {
        return view('livewire.post-create');
    }
}
