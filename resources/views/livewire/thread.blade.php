<div>
    <div>
        <label for="user-name">ユーザー名</label>
        <select id="user-name" wire:model.live="userId">
            @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="thread-name">スレッド名</label>
        <select id="thread-name" wire:model.live="threadId">
            @foreach($threads as $thread)
                <option value="{{$thread->id}}" @if($thread->id === $threadId) selected @endif>{{$thread->name}}</option>
            @endforeach
        </select>
    </div>

    <div>
        <form wire:submit="createThread">
            <input type="text" wire:model="threadName">
            <input type="submit" value="スレッドを作成">
        </form>
    </div>

    <div>
        <form wire:submit="postComment">
            <input type="text" wire:model="message">
            <input type="submit" value="コメントを投稿">
        </form>
    </div>

    <ul>
        @foreach($comments as $comment)
            <li style="overflow-wrap: break-word;">{{$comment->message}} : by {{$comment->user->name}} {{$comment->created_at}}</li>
        @endforeach
    </ul>
</div>
