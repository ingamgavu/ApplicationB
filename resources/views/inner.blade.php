<h3>List of stores</h3>
<table border="2">
  <tr>
      <td>Id</td>
      <td>Name</td>
      <td>Email</td>
      <td>Address</td>
  </tr>
  @foreach ($stores as $store)
      <tr>
      <td>{{$store['id']}}</td>
      <td>{{$store['name']}}</td>
      <td>{{$store['email']}}</td>
      <td>{{$store['phone']}}</td>
      </tr> 
  @endforeach
</table>