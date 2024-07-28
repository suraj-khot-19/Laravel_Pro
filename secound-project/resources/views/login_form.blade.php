<h1 style="text-align: center">Login To Our Website</h1>

<form action="userContoller" method="POST">
    @csrf
    <input type="text" name="username" placeholder="enter your name"><br><br>
    <input type="password" name="password" placeholder="enter your password"><br><br>
    <button type="submit">Login</button>
</form>