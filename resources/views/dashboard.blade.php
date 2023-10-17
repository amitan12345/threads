@extends('main-contents-template')

@section('main-contents')
<div class="h-[10vh] m-1">
    <div class="bold text-4xl">
        {{ \Auth::user()->name }}
    </div>
    <div class="font-thin text-lg m-1">
        ID:{{ \Auth::id() }}
    </div>
</div>
<livewire:switch-thread-and-tweet-view />
<livewire:create-thread-button />
<livewire:post-tweet-button />
@endsection