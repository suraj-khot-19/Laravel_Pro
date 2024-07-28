<form action="userlog" method="POST">
    {{-- csrf if not include page is expired 419 error is comming --}}
    @csrf
    {{-- need to pass it for delete method   --}}
    {{method_field('DELETE')}}
    <input type="text" name="username" placeholder="enter name"><br><br>
    <input type="text" name="password" placeholder="enter password"><br><br>
    <button type="submit">login</button>
</form>