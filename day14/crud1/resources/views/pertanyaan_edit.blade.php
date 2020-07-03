<form action="/pertanyaan/editProcess" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{$pertanyaan->id}}">
    judul
    <input type="text" name="judul" id="judul" value="{{$pertanyaan->judul}}"> <br>
    isi
    <input type="text" name="isi" id="isi" value="{{$pertanyaan->isi}}"> <br>
    <input type="submit" value="submit">


</form>