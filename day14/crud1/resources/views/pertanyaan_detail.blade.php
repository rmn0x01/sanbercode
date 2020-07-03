<h1>Judul:  {{$pertanyaan->judul}} </h1>
<h2>Isi:  {{$pertanyaan->isi}} </h3>
<h3>Tanggal dibuat: {{$pertanyaan->created_at}}</h3>
<h3>Tanggal diperbarui: {{$pertanyaan->updated_at}}</h3>


<br><br><br>
<h2>Jawab</h2>
<form action="/jawaban/{{$pertanyaan->id}}" method="post">
    {{ csrf_field() }}
    <input type="text" name="isi" id="isi"> <br>
    <input type="submit" value="submit">
</form>