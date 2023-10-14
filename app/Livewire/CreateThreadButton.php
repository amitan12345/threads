<?php

namespace App\Livewire;

use App\Models\Thread;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateThreadButton extends Component
{
    public string $threadName;
    public string $description;
    
    public function createThread()
    {
        if (empty($this->threadName) || empty($this->description)) {
            return;
        }

        $userId = Auth::user()->id;

        Thread::create([
            'user_id' => $userId,
            'name' => $this->threadName,
            'description' => $this->description,
        ]);

        $this->threadName = '';
        $this->description = '';

        $this->dispatch('thread-created');
        $this->dispatch('activate-threads');
    }

    public function render()
    {
        return view('livewire.create-thread-button');
    }
}
