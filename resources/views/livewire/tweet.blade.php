<div>
    <h1>{{ $user->name }}</h1>
    <form wire:submit="postTweet">
        <input type="text" wire:model="tweetText">
        <input type="submit" value="Tweet">
    </form>

    <ul>
        @foreach($tweets as $tweet)
            <li>{{ $tweet->text.' '.$tweet->created_at }}</li>
        @endforeach
    </ul>
</div>
