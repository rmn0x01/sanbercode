<h1>  {{$pertanyaan->judul}} </h1>
<h3> {{$pertanyaan->isi}} </h3>
<br><br><br>
<h2>Jawab</h2>
<form action="/jawaban/{{$pertanyaan->id}}" method="post">
    {{ csrf_field() }}
    <input type="text" name="isi" id="isi"> <br>
    <input type="submit" value="submit">
</form>