<?php

namespace App\Livewire;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PostThreadCommentButton extends Component
{
    public string $comment;
    public int $threadId;

    public function mount(int $threadId)
    {
        $this->threadId = $threadId;
    }

    public function postComment()
    {
        if (empty($this->comment)) {
            return;
        }

        $userId = Auth::id();

        Comment::create([
            'user_id' => $userId,
            'thread_id' => $this->threadId,
            'message' => $this->comment,
        ]);

        $this->comment = '';

        $this->dispatch('posted-comment');
    }

    public function render()
    {
        return view('livewire.post-thread-comment-button');
    }
}
