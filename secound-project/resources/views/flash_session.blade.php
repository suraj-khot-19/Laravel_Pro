<form method="POST" action="addmember">
    {{-- checking user key stored in flash session  --}}
    @if (session()->has('user'))
        <h2 style="color: chocolate">{{session('user')}} added to member list</h2>
    @endif
    
    @csrf
    <input type="text" name="username" placeholder="enter user name"><br><br>
    <input type="password" name="password" placeholder="enter user password"><br><br>
    <input type="text" name="email" placeholder="enter user email"><br><br>
    <button type="submit">Add Member</button>
</form>