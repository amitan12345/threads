<?php

namespace App\Livewire;

use App\Models\Thread;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserThreadList extends Component
{
    public Collection $threads;

    public function mount()
    {
        $this->threads = Thread::where('user_id', Auth::user()->id)->get();
    }

    public function render()
    {
        return view('livewire.user-thread-list');
    }
}
