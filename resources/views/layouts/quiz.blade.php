<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $quiz->title ?? 'Quiz' }}</title>
    <link href="{{ asset('css/utama.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

    <style>
/* 🌟 Floating Progress Wrapper — sekarang benar-benar center di area konten */
.quiz-progress-wrapper {
    position: sticky; /* biar ikut scroll tapi tetap di konteks kontainer */
    top: 20px;
    z-index: 1050;
    width: 100%;
    max-width: 800px; /* sesuaikan lebar maksimum konten quiz */
    margin: 0 auto; /* 🔥 center di tengah area konten */
    padding: 10px 20px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    transition: all 0.4s ease-in-out;
    opacity: 0;
}

.quiz-progress-wrapper.active {
    opacity: 1;
    top: 30px;
}
.quiz-progress {
    background-color: #e9ecef;
    border-radius: 10px;
    overflow: hidden;
    height: 30px; /* lebih tinggi dikit */
    display: flex;
    align-items: center; /* teks benar-benar tengah vertikal */
}

.quiz-progress-bar {
    height: 100%;
    width: 0%;
    display: flex; /* aktifkan flexbox */
    align-items: center; /* 🔥 teks di tengah vertikal */
    justify-content: center; /* 🔥 teks di tengah horizontal */
    color: #fff;
    font-weight: 700;
    font-size: 0.95rem;
    letter-spacing: 0.3px;
    border-radius: 10px;
    transition: width 0.4s ease, background-color 0.3s ease;
}



    </style>
</head>

<body>
@extends('layouts.dashboard')

@section('content')
<div class="rounded-3">
    <div class="w-100">

        <main role="main" class="container-fluid mt-4">

            {{-- ⚠️ Error Message --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Judul dan Progress Bar --}}
            <h2 class="fw-bold text-center mb-4">Quiz {{ $quiz->title }}</h2>

            <div id="quizProgressWrapper" 
                class="quiz-progress-wrapper shadow-sm bg-white p-2 rounded d-none">
                <div class="quiz-progress" style="height: 18px;">
                    <div id="quiz-progress-bar" 
                        class="quiz-progress-bar bg-primary" 
                        style="width: 0%;">
                        0%
                    </div>
                </div>
            </div>

            {{-- Form Quiz --}}
            <form id="quizForm" action="{{ route('quiz.result', ['quizKey' => $quizKey]) }}" method="POST">
                @csrf

                @forelse($quiz->questions as $question)
                    <div class="card my-3 shadow-sm question-card">
                        <div class="card-body">
                            <h5>{{ $loop->iteration }}. {!! $question->question !!}</h5>

                            @if($question->image)
                                <div class="my-3 text-center">
                                    <img src="{{ asset($question->image) }}" 
                                         alt="Question Image" 
                                         class="img-fluid rounded shadow-sm" 
                                         style="max-height: 250px;">
                                </div>
                            @endif

                            @php
                                $options = [
                                    'a' => $question->option_a,
                                    'b' => $question->option_b,
                                    'c' => $question->option_c,
                                    'd' => $question->option_d,
                                ];
                            @endphp

                            @foreach($options as $key => $option)
                                @if($option)
                                    <div class="form-check my-2">
                                        <input type="radio"
                                            name="question_{{ $question->id }}"
                                            value="{{ $key }}"
                                            id="option_{{ $key }}_{{ $question->id }}"
                                            class="form-check-input answer-option">
                                        <label for="option_{{ $key }}_{{ $question->id }}" class="form-check-label">
                                            <strong>{{ strtoupper($key) }}.</strong> {!! $option !!}
                                        </label>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @empty
                    <div class="alert alert-warning text-center">
                        Belum ada pertanyaan untuk kuis ini.
                    </div>
                @endforelse

                <div class="text-center my-4">
                    <button type="submit" class="btn btn-primary px-4 py-2">Kirim Jawaban</button>
                </div>
            </form>
        </main>
    </div>
</div>
@endsection
<script>
document.addEventListener('DOMContentLoaded', function () {
    const progressWrapper = document.getElementById('quizProgressWrapper');
    const progressBar = document.getElementById('quiz-progress-bar');
    const form = document.getElementById('quizForm');
    const totalQuestions = document.querySelectorAll('.question-card').length;

    form.addEventListener('change', updateProgress);

    function updateProgress() {
        const answered = Array.from(document.querySelectorAll('.question-card')).filter(card =>
            Array.from(card.querySelectorAll('input[type="radio"]')).some(opt => opt.checked)
        ).length;

        const percent = Math.round((answered / totalQuestions) * 100);
        progressBar.style.width = percent + '%';
        progressBar.textContent = percent + '%';
        progressBar.setAttribute('aria-valuenow', percent);

        // Warna dinamis
        progressBar.classList.remove('bg-primary', 'bg-warning', 'bg-success');
        if (percent < 50) progressBar.classList.add('bg-primary');
        else if (percent < 100) progressBar.classList.add('bg-warning');
        else progressBar.classList.add('bg-success');

        if (answered > 0) {
            progressWrapper.classList.remove('d-none');
            setTimeout(() => progressWrapper.classList.add('active'), 100);
        }
    }

});
</script>


</body>
</html>
