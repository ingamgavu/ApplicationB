<h1>User Login Page</h1>

<form action="users" method="POST">
    @csrf
   <input type="text" name="user" placeholder="Enter Username"><br><br>
   <input type="password" name="password" placeholder="Enter Password"><br><br>
   <button type="submit">Login</button>
</form>