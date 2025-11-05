  <!DOCTYPE html>
  <html lang="id">
  <head>
      <!-- Sertakan meta tag dan CSS lainnya -->
      <link href="{{ asset('css/utama.css') }}" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
  </head>
  <body>
  @extends('layouts.dashboard')

  @section('content')
  <div class="rounded-3 ">
    <div class="w-100">
      <!-- Sidebar: Mulai -->
      
        <!-- Sidebar: Akhir -->

        <!-- Konten Utama: Mulai -->
        <main role="main" class="">
        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif

              <!-- Accordion untuk aktivitas -->
          <div class="accordion" id="accordionAktivitas">
            <div class="card">
            <div class="px-3">
              <div class="card-header">
              <!--<h5 class="card-title text-center">Quiz</h5> -->
              </div>
              <div class="evaluasi" id="evaluasi">
                  <!-- @include('pages.materi.evaluasi.index') -->
                  <div class="container-fluid">
                    <h1>{{ $quiz['title'] }}</h1>

                    <form action="{{ route('quiz.result', ['quizKey' => $quizKey]) }}" method="POST">
                        @csrf
                        @foreach($quiz['questions'] as $question)
                          <div class="card my-3">
                              <div class="card-body">
                                  <h5>{{ $loop->iteration }}. {!! $question['question'] !!}</h5>
                                  
                                  @if(isset($question['image']))
                                      <div class="my-3 text-center">
                                          <img src="{{ asset($question['image']) }}" alt="Question Image" class="img-fluid">
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

                    <div class="mb-4">
                      <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </div>
                    </form>
                </div>
              </div>
              </div>
            </div>
                  <!-- Tambah aktivitas lain sesuai kebutuhan -->
          </div>

          </main>
          <!-- Konten Utama: Akhir -->
      </div>
  </div>
  @endsection

    <!-- Skrip -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  </body>
  </html>


  <script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.querySelector('form');
        const submitButton = document.querySelector('button[type="submit"]');

        form.addEventListener('submit', function (e) {
            const questions = document.querySelectorAll('.card-body');
            let allAnswered = true;

            questions.forEach((question) => {
                const options = question.querySelectorAll('input[type="radio"]');
                const isAnswered = Array.from(options).some((option) => option.checked);

                if (!isAnswered) {
                    allAnswered = false;
                }
            });

            if (!allAnswered) {
                e.preventDefault(); // Mencegah pengiriman formulir
                alert('Harap jawab semua pertanyaan sebelum mengirimkan!');
            }
        });
    });
</script>
