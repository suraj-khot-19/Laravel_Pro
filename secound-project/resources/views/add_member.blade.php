<form action="adding" method="POST">
    @csrf
    <input type="text" name="name" placeholder="enter name" required><br><br>
    <input type="text" name="email" placeholder="enter email" required><br><br>
    <input type="text" name="age" placeholder="enter age" required><br><br>
    <input type="text" name="city" placeholder="enter city" required><br><br>
    <button type="submit">Add Memebr</button>
</form>
