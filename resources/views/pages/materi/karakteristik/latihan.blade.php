<div style="padding: 30px 30px 0 30px;" class="mb-5">
    <span class="border border-primary p-2 rounded">Latihan Soal: </span>
    <form id="latihanForm" onsubmit="return false;">
    <ol type="1">
        <li class="mt-3">
            Perhatikan gambar di bawah ini. Skatepark yang digunakan untuk bermain skateboard berbentuk lintasan parabola.
            <div class="text-center">
                <img src="{{ asset('assets/img/app/karakteristik5.png') }}" alt="Contoh grafik fungsi kuadrat berbentuk parabola" class="img-fluid">
                <p>Gambar 1.2 Skatepark membentuk lintasan parabola</p>
            </div>
            <p>
                Berdasarkan gambar di atas, grafik terbuka ke 
                <input type="text" id="fungsi_terbuka1" name="fungsi_terbuka1" class="form-control d-inline w-auto" style="width: 80px !important;"> 
                jika anak tersebut meluncurkan skateboard, maka nilai \( a \)
                <input type="text" id="nilai1" name="nilai1" class="form-control d-inline w-auto" style="width: 80px !important;">.
            </p>
        </li>
        <li class="mt-3">
            Perhatikan gambar di bawah ini. Ketika tali diayunkan ke atas maka membentuk parabola fungsi kuadrat.
            <div class="text-center">
                <img src="{{ asset('assets/img/app/karakteristik6.png') }}" alt="Contoh grafik fungsi kuadrat berbentuk parabola" class="img-fluid">
                <p>Gambar 1.3 Tali diayunkan membentuk parabola fungsi kuadrat</p>
            </div>
            <p>
                Berdasarkan gambar di atas, grafik terbuka ke 
                <input type="text" id="fungsi_terbuka2" name="fungsi_terbuka2" class="form-control d-inline w-auto" style="width: 80px !important;"> 
                jika tali diayunkan kebawah, maka nilai \( a \)
                <input type="text" id="nilai2" name="nilai2" class="form-control d-inline w-auto" style="width: 80px !important;">.
            </p>
        </li>
        <div class="my-4">
            <div class="text-center">
                <button type="button" class="btn btn-primary" onclick="cekLatihan()">Periksa Jawaban</button>
            </div>
        </div>
    </form>
</div>

<script>
// Jawaban benar
const kunci = {
    fungsi_terbuka1: 'atas',
    nilai1: 'positif',
    fungsi_terbuka2: 'bawah',
    nilai2: 'negatif'
};

function cekLatihan() {
    // Ambil dan cek masing-masing isian
    Object.keys(kunci).forEach(id => {
        const input = document.getElementById(id);
        if(!input) return;
        // Bandingkan dengan jawaban benar (case-insensitive)
        if(input.value.trim().toLowerCase() === kunci[id]) {
            input.style.backgroundColor = '#90EE90';   // hijau muda
            input.style.color = '#1A4D1A';
        } else {
            input.style.backgroundColor = '#FFCCCC';   // merah muda
            input.style.color = '#B10000';
        }
    });
}
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  // 🎯 Kunci jawaban benar
  const correctAnswers = {
   

    "fungsi_terbuka1": "atas",
    "fungsi_terbuka2": "bawah",
    "nilai1": "positif",
    "nilai2": "negatif",
  };

  // 🌱 Tambahkan event listener untuk semua input yang ada di kunci jawaban
  Object.keys(correctAnswers).forEach(name => {
    const input = document.querySelector(`[name="${name}"]`);
    if (!input) return; // skip jika tidak ditemukan
    
    input.addEventListener("input", function() {
      const userAnswer = input.value.trim().toLowerCase();
      const correct = correctAnswers[name].toLowerCase();

      // reset styling dulu
      input.style.borderColor = "";
      input.style.backgroundColor = "";

      // jika benar
      if (userAnswer === correct) {
        input.style.borderColor = "green";
        input.style.backgroundColor = "#e8ffe8";
      } 
      // jika salah tapi belum kosong
      else if (userAnswer.length > 0) {
        input.style.borderColor = "red";
        input.style.backgroundColor = "#ffe8e8";
      } 
      // jika kosong
      else {
        input.style.borderColor = "";
        input.style.backgroundColor = "";
      }
    });
  });

  // 🌟 Optional: pesan sukses jika semua benar
  const form = document.querySelector('form[action="{{route('quiz.evaluate')}}"]');
  if (form) {
    form.addEventListener("submit", function(e) {
      e.preventDefault();

      let allCorrect = true;
      Object.keys(correctAnswers).forEach(name => {
        const input = document.querySelector(`[name="${name}"]`);
        if (input && input.value.trim().toLowerCase() !== correctAnswers[name].toLowerCase()) {
          allCorrect = false;
        }
      });

      if (allCorrect) {
        Swal.fire({
          icon: 'success',
          title: 'Hebat! 🎉',
          text: 'Semua jawaban kamu benar.',
          confirmButtonText: 'Lanjut'
        });
      } else {
        Swal.fire({
          icon: 'info',
          title: 'Masih ada yang salah 😅',
          text: 'Periksa lagi kolom yang berwarna merah.',
          confirmButtonText: 'Oke'
        });
      }
    });
  }
});
</script>
</div>