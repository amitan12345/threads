@extends('template')

@section('contents')
<div class="bold text-2xl m-1">Login Page</div>
<div class="bg-blue-100 rounded m-2 p-2 w-60">
    <form method="POST" action="/login" class="flex flex-col justify-center">
        @csrf
        <div class="m-1">
            <label for="email">email</label>
            <input type="email" id="email" name="email" class="w-32 border-2 border-black rounded">
        </div>
        <div class="m-1">
            <label for="password">password</label>
            <input type="password" id="password" name="password" class="w-32 border-2 border-black rounded">
        </div>
        <div class="m-1">
            <input type="submit" value="login" class="w-16 rounded bg-gray-200 border-2 border-black hover:bg-gray-300">
        </div>
    </form>
    <a href="/register-account" class="text-blue-700 hover:text-blue-900">Account Registration is here...</a>
</div>
@endsection
