<div>
    <h1>UPLODE FILE</h1>
    <form action="file" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <button type="submit">Uplode File</button>
    </form>
</div>