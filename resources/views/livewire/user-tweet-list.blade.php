<div class="overflow-auto h-full">
    @foreach($tweets as $tweet)
        <div class="h-32 bg-blue-200 border-b-4 border-indigo-600">
            <div>{{ $tweet->text }}</div>
            <div>{{ $tweet->created_at }}</div>
        </div>
    @endforeach
</div>
