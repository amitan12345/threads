<h1>Account Registration</h1>
<form action="/register-account" method="POST">
    @csrf
    <div>
        <label for="name">Your name</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}">
        @error('name')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}">
        @error('email')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" value="{{ old('password') }}">
        @error('password')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <input type="submit" value="Register">
    </div>
</form>