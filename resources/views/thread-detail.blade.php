@extends('template')

@section('contents')
<livewire:thread-detail :threadId="$threadId" />
<livewire:post-thread-comment-button :threadId="$threadId" />
@endsection