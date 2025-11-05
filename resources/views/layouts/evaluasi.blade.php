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
<div class="container-fluid">
  <div class="row">

      <!-- Konten Utama: Mulai -->
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        
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
            <div class="card-header">
            <h5 class="card-title text-center">Evaluasi</h5>
            </div>
            <div class="evaluasi" id="evaluasi">
                <!-- @include('pages.materi.evaluasi.index') -->
                @include('pages.materi.evaluasi.index2')
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
