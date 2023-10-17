@extends('main-contents-template')

@section('main-contents')
<livewire:thread-detail :threadId="$threadId" />
<livewire:post-thread-comment-button :threadId="$threadId" />
@endsection