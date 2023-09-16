<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Models\Thread as ModelsThread;
use App\Models\User;
use App\Service\Comment\PostComment;
use App\Service\Thread\CreateThread;
use Illuminate\Support\Collection;
use Livewire\Component;

class Thread extends Component
{
    public Collection $users;

    public Collection $threads;

    public Collection $comments;

    public int $userId;

    public int $threadId;

    public string $threadName = '';

    public string $message = '';

    public function mount()
    {
        $this->users = User::get();
        $this->threads = ModelsThread::get();
        $this->comments = collect();

        if ($this->users->count()) {
            $this->userId = $this->users->first()->id;
        }

        if ($this->threads->count()) {
            $this->threadId = $this->threads->first()->id;
        }
    }

    public function render()
    {
        if (! empty($this->userId) && ! empty($this->threadId)) {
            $this->comments = Comment::where('thread_id', $this->threadId)->with('user')->get();
        }

        return view('livewire.thread');
    }

    public function createThread()
    {
        if (empty($this->userId)) {
            return;
        }

        $thread = app(CreateThread::class)($this->userId, $this->threadName);

        $this->threadName = '';

        $this->threads = ModelsThread::get();

        $this->threadId = $thread->id;
    }

    public function postComment()
    {
        if (empty($this->userId) || empty($this->threadId) || empty($this->message)) {
            return;
        }

        app(PostComment::class)($this->userId, $this->threadId, $this->message);

        $this->message = '';
    }
}
