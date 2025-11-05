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
<div class="rounded-3">
  <div class="w-100">
   

      <!-- Konten Utama: Mulai -->
      <main role="main" class="">
        

      <!-- Tujuan Pembelajaran -->
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">Menyelesaikan Masalah Dengan Fungsi Kuadrat</h5>
            <div class="konten-justify">
              <div id="content" class="accordion">
                <div class="accordion-item">
                  <h2 class="mb-0 accordion-header" id="headingSatu">
                    <button class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseSatu"
                      aria-expanded="false"
                      aria-controls="collapseSatu"
                    >
                       <img src="{{ asset('assets/img/app/tujuan-pembelajaran.png') }}" alt="" class="icon" width="200" height="80">
                    </button>
                  </h2>
                  <div 
                    id="collapseSatu"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingSatu"
                    data-bs-parent="#content"
                  >
                    <div class="accordion-body">
                      @include('pages.materi.masalah.tujuan')
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

            <!-- Accordion untuk aktivitas -->
        <div class="accordion" id="accordionAktivitas">
          <div class="card">
          <div class="px-3">
            <div class="card-header">
              
            </div>
            <div class="mengingat" id="mengingat">
              <p style="padding: 0 30px;">
                Menyelesaikan masalah dengan fungsi kuadrat artinya menggunakan fungsi
                kuadrat untuk memodelkan, menganalisis, dan menemukan solusi untuk
                berbagai jenis masalah dalam konteks matematika atau aplikasi dunia nyata.
                Berikut ini adalah beberapa contoh bagaimana penggunaaan fungsi kuadrat
                untuk menyelesaikan masalah yaitu:
              </p>
              <ol type="a">
                <li>
                  Menentukan titik maksimum dan minimum, ini berguna dalam optimisasi.
                  Misalnya untuk mencari keuntungan maksimal dan biaya minimal yang
                  dikeluarkan
                </li>
                <li>
                  Menentukan akar-akar persamaan, ini berguna dalam hal yang melibatkan
                  waktu jatuh suatu benda, titik potong lintasan objek, dan lain sebagainya
                </li>
                <li>
                  Memodelkan fenomena alam, ini berguna dalam hal ketika lintasan benda
                  yang dilempar atau bentuk kabel jembatan yang menyerupai parabola.
                </li>
                <li>
                  Analisis keuangan, ini berkaitain dengan memodelkan dan memprediksi
                  kinerja investasi, seperti harga saham atau hasil inventasi.
                </li>
                <li>
                  Geometris, berkaitan dengan menemukan area maksimum atau minimum
                  suatu bentuk, serta jarak terpendek antar dua titik pada kurva parabola.
                </li>
              </ol>
              @include('pages.materi.masalah.contoh')
              @include('pages.materi.masalah.latihan')
            </div>
          </div>

          <!-- <div class="accordion-item">
            <h2 class="accordion-header" id="kuisHead">
              <button
                class="accordion-button"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#kuisBody"
                aria-expanded="true"
                aria-controls="kuisBody"
              >
                <img
                  src="{{ asset('assets/img/app/kuis-3.png') }}"
                  alt="kuis 3"
                  class="icon"
                  width="200"
                />
              </button>
            </h2>
            <div 
              id="kuisBody" 
              class="accordion-collapse collapse"
              aria-labelledby="kuisHead"
              data-bs-parent="#content"
            >
              <div class="accordion-body">
                @include('pages.materi.masalah.kuis')
              </div>

            </div>
          </div> -->
                <!-- Tambah aktivitas lain sesuai kebutuhan -->
        </div>
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
