<div class="container">
    <h1>Hasil Evaluasi</h1>
    <p><strong>Nilai Anda:</strong> {{ $score }}/{{ count($results) }}</p>
    <ul class="list-group">
        @foreach($results as $result)
        <li class="list-group-item">
            <strong>Soal:</strong> {!! $result['question'] !!} <br>
            @if ($result['image'])
            <div class="my-2">
                <img src="{{ asset($result['image']) }}" alt="Gambar Soal" class="img-fluid">
            </div>
            @endif
            <strong>Jawaban Anda:</strong> {{ $result['user_answer'] ?? 'Tidak Dijawab' }} <br>
            <strong>Jawaban Benar:</strong> {{ $result['correct_answer'] }} <br>
            <strong>Status:</strong> 
            {!! $result['is_correct'] ? '<span class="text-success">Benar</span>' : '<span class="text-danger">Salah</span>' !!}
        </li>
        @endforeach
    </ul>
    <a href="{{ route('dashboard.evaluasi') }}" class="btn btn-primary mt-3">Ulangi Evaluasi</a>
</div>