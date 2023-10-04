<form method="POST" action="/login">
    @csrf
    <div>
        <label for="email">email</label>
        <input type="email" id="email" name="email">
    </div>
    <div>
        <label for="password">password</label>
        <input type="password" id="password" name="password">
    </div>
    <input type="submit" value="ログイン">
</form>