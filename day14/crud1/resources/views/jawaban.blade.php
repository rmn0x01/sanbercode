<h1>List Jawaban</h1>
<br>

<ol>
    @foreach($list_jawaban as $jawaban)
    <li><a href="/jawaban/{{$jawaban->pertanyaan_id}}">{{ $jawaban->isi }}</a></li>
    @endforeach
</ol>