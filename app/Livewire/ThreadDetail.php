<?php

namespace App\Livewire;

use App\Models\Thread;
use Livewire\Attributes\On;
use Livewire\Component;

class ThreadDetail extends Component
{
    public int $threadId;
    public Thread $thread;

    public function mount(int $threadId)
    {
        $this->threadId = $threadId;
        $this->updateThread();
    }

    #[On('posted-comment')]
    public function updateThread()
    {
        $this->thread = Thread::with(['comments.user', 'user'])->find($this->threadId);
    }

    public function render()
    {
        return view('livewire.thread-detail', ['thread' => $this->thread]);
    }
}
