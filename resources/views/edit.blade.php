<h1>Update Member</h1>
<form action="/ApplicationB/edit" method="POST">
    
    @csrf
    <input type="hidden" name="id" value={{$data['Id']}}>
    <input type="text" name="name"  value="{{$data['Name']}}"><br><br>
    <input type="text" name="email" value="{{$data['Email']}}"><br><br>
    <input type="text" name="address" value="{{$data['Address']}}"><br><br>
   
    <Button type="submit">update</Button>
</form>