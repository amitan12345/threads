<?php

namespace App\Livewire;

use App\Models\Tweet;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class UserTweetList extends Component
{
    public Collection $tweets;

    public int $userId;

    public function mount(int $userId)
    {
        $this->userId = $userId;
        $this->updateTweets();
    }

    #[On('posted-tweet')]
    public function updateTweets()
    {
        $this->tweets = Tweet::where('user_id', $this->userId)->orderByDesc('created_at')->get();
    }

    public function render()
    {
        return view('livewire.user-tweet-list');
    }
}
