<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class SwitchThreadAndTweetView extends Component
{
    public bool $isThreadActive = true;
    public bool $isTweetActive = false;

    public int $userId;

    public function mount(int $userId)
    {
        $this->userId = $userId;
    }

    #[On('activate-threads')]
    public function activateThread()
    {
        $this->isThreadActive = true;
        $this->isTweetActive = false;
    }

    #[On('activate-tweets')]
    public function activateTweet()
    {
        $this->isThreadActive = false;
        $this->isTweetActive = true;
    }

    public function render()
    {
        return view('livewire.switch-thread-and-tweet-view');
    }
}
