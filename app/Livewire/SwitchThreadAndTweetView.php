<?php

namespace App\Livewire;

use Livewire\Component;

class SwitchThreadAndTweetView extends Component
{
    public bool $isThreadActive = true;
    public bool $isTweetActive = false;

    public function activateThread()
    {
        $this->isThreadActive = true;
        $this->isTweetActive = false;
    }

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