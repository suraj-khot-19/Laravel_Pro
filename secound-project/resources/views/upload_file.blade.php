<form action="upload_controller" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="myfile"><br><br>
    <button type="submit">Upload File</button>
</form>