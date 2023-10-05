<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Tweet as TweetModel;

class Tweet extends Component
{
    public User $user;

    /** @var Collection<TweetModel> $tweets */
    public Collection $tweets;

    public string $tweetText = '';

    public function mount()
    {
        $this->user = Auth::user();
        $this->tweets = TweetModel::where('user_id', $this->user->id)->orderByDesc('created_at')->get();
    }

    public function postTweet()
    {
        TweetModel::create([
            'user_id' => $this->user->id,
            'text' => $this->tweetText,
        ]);

        $this->tweetText = '';
        
        $this->tweets = TweetModel::where('user_id', $this->user->id)->orderByDesc('created_at')->get();
    }

    public function render()
    {
        return view('livewire.tweet', ['user' => $this->user, 'tweets' => $this->tweets]);
    }
}
