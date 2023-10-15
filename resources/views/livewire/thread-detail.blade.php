<div>
    <div class="w-full h-24">
        <div class="font-bold text-xl">{{ $thread->name }}</div>
        <div class="text-sm font-thin">by {{ $thread->user->name }}</div>
        <div class="text-sm font-thin">{{ $thread->created_at }}</div>
    </div>
    <div class="w-full h-[70vh] bg-gray-200 border-black border-2 overflow-auto">
        @foreach($thread->comments as $comment)
            <div class="w-full h-32 border-b-4 border-indigo-600 bg-yellow-100">
                <div>{{ $comment->message }}</div>
                <div class="text-sm font-thin">by {{ $comment->user->name }}</div>
                <div class="text-sm font-thin">{{ $comment->created_at }}</div>
            </div>
        @endforeach
    </div>
</div>
