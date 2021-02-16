<h1>Member List</h1>
{{-- to show all the items in the database --}}
<table border="1">
 <tr>
  <td>Id</td>
  <td>Name</td>
  <td>Email</td>
  <td>Address</td>
  <td>Operation</td>
  @foreach ($data as $items)
      <tr>
          <td>{{$items['Id']}}</td>
          <td>{{$items['Name']}}</td>
          <td>{{$items['Email']}}</td>
          <td>{{$items['Address']}}</td>
          <td><a href={{"delete/".$items['Id']}}>Delete</a>
            <a href={{"edit/".$items['Id']}}>Edit</a>
          </td>
      </tr>
  @endforeach
 </tr>
</table>
<style>
 .w-5{
     display:none;
 }
</style>