<h1>Tambah Pertanyaan</h1>

<form action="/pertanyaan" method="post">
    {{ csrf_field() }}
    judul
    <input type="text" name="judul" id="judul"> <br>
    isi
    <input type="text" name="isi" id="isi"> <br>
    <input type="submit" value="submit">
</form>
