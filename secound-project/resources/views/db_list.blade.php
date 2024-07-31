<h1>db List</h1>
{{-- {{$data}} --}}

<table border="3">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>City</th>
    </tr>
    @foreach ($data as $value)
        <tr>
            <td>{{ $value['id'] }}</td>
            <td>{{ $value['name'] }}</td>
            <td>{{ $value['email'] }}</td>
            <td>{{ $value['age'] }}</td>
            <td>{{ $value['city'] }}</td>
        </tr>
    @endforeach
</table>
{{-- to display previus next buttton --}}
<span>
    {{ $data->links() }}
</span>

{{-- to add basic css  --}}
<style>
    .w-5 {
        /*
        display: none;
         */

        height: 2rem;
        vertical-align: -14px
    }
</style>
