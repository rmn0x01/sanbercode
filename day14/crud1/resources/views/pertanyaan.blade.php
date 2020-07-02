<h1>List Pertanyaan</h1>
<br>
<a href="/pertanyaan/create">Tambah pertanyaan</a>

<ol>
    @foreach($list_pertanyaan as $pertanyaan)
    <li><a href="/pertanyaan/{{$pertanyaan->id}}">{{ $pertanyaan->judul }}</a></li>
    @endforeach
</ol>