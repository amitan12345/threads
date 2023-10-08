@extends('template')

@section('contents')
<livewire:header />
<div class="h-[10vh] bg-green-100"></div>
<div class="flex flex-row">
    <div class="bg-gray-100 w-20 text-center border-t-2 border-l-2 border-r-2 border-black">Threads</div>
    <div class="w-4"></div>
    <div class="bg-gray-100 w-20 text-center border-t-2 border-l-2 border-r-2 border-black">Tweets</div>
</div>
<div class="h-[80vh] bg-gray-100 border-2 border-black">
    <div class="h-full">
        <livewire:user-thread-list />
    </div>
    <div class="h-full">
        <livewire:user-tweet-list />
    </div>
</div>
@endsection