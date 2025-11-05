<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Fungsi Kuadrat</title>
    <link rel="stylesheet" href="utama.css"> <!-- Link ke file CSS -->
</head>
<body>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Kata Kunci</th>
                    <th>Pertanyaan Pemantik</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Fungsi kuadrat, parabola, persamaan kuadrat, minimum dan maksimum, titik puncak, sumbu simetri, titik potong dengan sumbu, dan diskriminan.</td>
                    <td>
                        1. Apa yang termasuk dalam fungsi kuadrat?<br>
                        2. Bagaimana mengkonstruksi fungsi kuadrat?<br>
                        3. Bagaimana penerapan fungsi kuadrat untuk menyelesaikan masalah dalam kehidupan sehari-hari?
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="navigation">
            <!-- <a href="" class="next-btn" id="nextBtn">Next</a> Tambahkan ID di sini -->
        </div>
    </div>

    <script>
        document.getElementById('nextBtn').addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah tautan untuk mengikuti URL
            window.location.href = ''; // Menggunakan URL dari Laravel
        });
    </script>
</body>
</html>
