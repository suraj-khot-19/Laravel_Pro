<h1>Fetch data from web</h1>

<table border=" solid">
    <tr>
        <td>id</td>
        <td>first name</td>
        <td>last name</td>
        <td>email</td>
        <td>avtar</td>
    </tr>
    @foreach ($dbdata as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['first_name']}}</td>
            <td>{{$item['last_name']}}</td>
            <td>{{$item['email']}}</td>
            <td><img src="{{$item['avatar']}}"/></td>
        </tr>
    @endforeach
</table>
