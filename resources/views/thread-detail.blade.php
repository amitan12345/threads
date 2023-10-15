@extends('template')

@section('contents')
<livewire:thread-detail :threadId="$threadId" />
@endsection