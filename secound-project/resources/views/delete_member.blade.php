<?php
if (session()->has('message')) {
  echo Session::get('message');
}
?>

<table border="3px">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>email</th>
        <th>age</th>
        <th>city</th>
        <th>operation</th>
    </tr>
    @foreach ($data as $value)
        <tr>
            <td>{{ $value['id'] }}</td>
            <td>{{ $value['name'] }}</td>
            <td>{{ $value['email'] }}</td>
            <td>{{ $value['age'] }}</td>
            <td>{{ $value['city'] }}</td>
            <td>
                <a href={{ 'deleting/' . $value['id'] }}
                    onclick="return confirm('are you sure to delete id:{{ $value['id'] }} with name:{{ $value['name'] }}?')">
                    <button type="button" class="btn btn-danger">Delete</button>
                </a>
            </td>
        </tr>
    @endforeach
</table>
