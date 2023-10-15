@extends('template')

@section('contents')
<div class="h-[10vh] bg-green-100"></div>
<livewire:switch-thread-and-tweet-view />
<livewire:create-thread-button />
<livewire:post-tweet-button />
@endsection