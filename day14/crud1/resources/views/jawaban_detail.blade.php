<h1>List Jawaban untuk pertanyaan id= <a href="/pertanyaan/{{$q_id}}">{{$q_id}}</a> </h1>
<br>

<ol>
    @foreach($list_jawaban as $jawaban)
    <li><a href="/jawaban/{{$jawaban->pertanyaan_id}}">{{ $jawaban->isi }}</a></li>
    @endforeach
</ol>