<h1>User Login</h1>

@if(isset($_GET['submit']))
@for($i=0;$i<10;$i++)
  <h4>number {{$i}}</h4>
  <h4>number {{$i}}</h4>
@endfor
@endif
<form action="users" method="GET">
   @csrf
   <input type="text" name="username" placeholder="enter name"><br><br>
   <input type="password" name="password" placeholder="enter password"><br><br>
   <input type="submit" name="submit">
   <button type="submit">Login</button>
</form>

