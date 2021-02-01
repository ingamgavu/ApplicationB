<h1>Add Members</h1>

<form action="add" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Please Enter your name"><br><br>
    <input type="text" name="email" placeholder="Please Enter your email"><br><br>
    <input type="text" name="address" placeholder="Please Enter your Address"><br><br>
   
    <Button type="submit">Add Member</Button>
</form> 