<?php

namespace App\Livewire;

use App\Models\Tweet;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PostTweetButton extends Component
{
    public string $tweet;

    public function postTweet()
    {
        if (empty($this->tweet)) {
            return;
        }

        $userId = Auth::user()->id;

        Tweet::create([
            'user_id' => $userId,
            'text' => $this->tweet,
        ]);

        $this->tweet = '';

        $this->dispatch('posted-tweet');
        $this->dispatch('activate-tweets');
    }

    public function render()
    {
        return view('livewire.post-tweet-button');
    }
}
