@extends('main-contents-template')

@section('main-contents')
<div class="h-[10vh] m-1">
    <div class="bold text-4xl">
        {{ $user->name }}
    </div>
    <div class="font-thin text-lg m-1">
        ID:{{ $user->id }}
    </div>
</div>
<livewire:switch-thread-and-tweet-view :userId="$user->id" />
@endsection