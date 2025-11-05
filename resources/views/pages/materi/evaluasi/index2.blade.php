<div class="container">
    <h1>Evaluasi</h1>
    <form action="{{ route('dashboard.evaluasi.result') }}" method="POST">
        @csrf
        @foreach($questions as $question)
        <div class="card my-3">
            <div class="card-body">
                <h5>{{ $loop->iteration }}. {!! $question['question'] !!}</h5>
                @if (isset($question['image']))
                <div class="my-3">
                    <img src="{{ asset($question['image']) }}" alt="Gambar Soal" class="img-fluid">
                </div>
                @endif
                @foreach($question['options'] as $key => $option)
                <div class="form-check">
                    <input type="radio" name="question_{{ $question['id'] }}" value="{{ $key }}" id="option_{{ $key }}_{{ $question['id'] }}" class="form-check-input">
                        <label for="option_{{ $key }}_{{ $question['id'] }}" class="form-check-label">
                            <strong>{{ strtoupper($key) }}.</strong> {!! $option !!}
                        </label>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Selesai</button>
    </form>
</div>