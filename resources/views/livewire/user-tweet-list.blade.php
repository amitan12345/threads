<div class="overflow-auto">
    @foreach($tweets as $tweet)
        <div class="h-32 bg-yellow-400 border-b-4 border-indigo-400">
            <div>{{ $tweet->text }}</div>
            <div>{{ $tweet->created_at }}</div>
        </div>
    @endforeach
</div>
