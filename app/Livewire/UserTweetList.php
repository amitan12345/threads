<?php

namespace App\Livewire;

use App\Models\Tweet;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserTweetList extends Component
{
    public Collection $tweets;

    public function mount()
    {
        $this->tweets = Tweet::where('user_id', Auth::user()->id)->orderByDesc('created_at')->get();
    }

    public function render()
    {
        return view('livewire.user-tweet-list');
    }
}
