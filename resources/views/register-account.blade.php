@extends('template')

@section('contents')
<div class="m-1 text-2xl bold">Account Registration</div>
<form action="/register-account" method="POST" class="m-2 p-2 bg-blue-100 rounded w-80">
    @csrf
    <div class="m-1">
        <label for="name">Your name</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" class="border-2 border-black rounded">
        @error('name')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
    </div>
    <div class="m-1">
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" class="border-2 border-black rounded">
        @error('email')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
    </div>
    <div class="m-1">
        <label for="password">Password</label>
        <input id="password" type="password" name="password" value="{{ old('password') }}" class="border-2 border-black rounded">
        @error('password')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
    </div>
    <div class="m-1">
        <input type="submit" value="Register" class="border-2 border-black bg-gray-200 hover:bg-gray-300 rounded">
    </div>
    <div class="m-1">
        <a href="/login" class="text-blue-700 hover:text-blue-900">
            To Login Page
        </a>
    </div>
</form>
@endsection