<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination;
    public $perPage = 3;

    public function render()
    {
        return view('livewire.admin.posts',[
            'posts'=>auth()->user()->type == "superAdmin" ? Post::paginate($this->perPage) :
             Post::where('author_id',auth()->id())->paginate($this->perPage)
        ]);
    }
}
