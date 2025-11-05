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
                <input type="text" id="fungsi_terbuka1" class="form-control d-inline w-auto" style="width: 80px !important;"> 
                jika anak tersebut meluncurkan skateboard, maka nilai \( a \)
                <input type="text" id="nilai1" class="form-control d-inline w-auto" style="width: 80px !important;">.
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
                <input type="text" id="fungsi_terbuka2" class="form-control d-inline w-auto" style="width: 80px !important;"> 
                jika tali diayunkan kebawah, maka nilai \( a \)
                <input type="text" id="nilai2" class="form-control d-inline w-auto" style="width: 80px !important;">.
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
</div>