<?php

namespace App\Livewire;

use App\Models\Thread;
use Illuminate\Support\Collection;
use Livewire\Attributes\On;
use Livewire\Component;

class UserThreadList extends Component
{
    public Collection $threads;

    public int $userId;

    public function mount(int $userId)
    {
        $this->userId = $userId;
        $this->updateThreads();
    }

    #[On('thread-created')]
    public function updateThreads()
    {
        $this->threads = Thread::where('user_id', $this->userId)->orderByDesc('created_at')->get();   
    }

    public function render()
    {
        return view('livewire.user-thread-list');
    }
}
