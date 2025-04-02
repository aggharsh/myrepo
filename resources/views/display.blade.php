<div>
    <h1>List Of All Images</h1>
    @foreach ($imgpath as $img)
    <img src="{{ url('storage/public/'.$img->path) }}">
    @endforeach
    <a href="lode">UPLOAD IMAGES</a>
    <h2>hello world</h2>
</div>
