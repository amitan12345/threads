<div class="overflow-auto h-full">
    @foreach($threads as $thread)
        <div class="h-32 bg-yellow-300 border-b-4 border-indigo-600">
            <div>{{ $thread->name }}</div>
            <div>{{ $thread->description }}</div>
            <div>{{ $thread->created_at }}</div>
        </div>
    @endforeach
</div>
