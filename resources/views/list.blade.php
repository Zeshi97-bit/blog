This section is for candidate
<table border="1">
  <tr>
    <td>Id</td>
    <td>Name</td>
    <td>email</td>
    <td>address</td>
    <td>Operations</td>

  </tr>
  @foreach ($members as $member)
  <tr>
    <td>{{$member['id']}}</td>
    <td>{{$member['name']}}</td>
    <td>{{$member['email']}}</td>
    <td>{{$member['address']}}</td>
    <td>
      <a href="{{"delete/".$member['id']}}">Delete</a>
      <a href="{{"edit/".$member['id']}}">Edit</a>
    </td>
  </tr>
  @endforeach
</table>
