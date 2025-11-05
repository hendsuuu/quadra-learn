<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Menampilkan halaman materi berdasarkan parameter URL.
     *
     * @param string $page Parameter dari rute, contohnya 'a', 'b', atau 'c'.
     * @return \Illuminate\View\View
     */
    public function show($page)
    {
        // Konstruksi nama view.
        // Karena rute sekarang adalah /karakteristik/{page},
        // kita akan mencari file di 'pages.materi.karakteristik.<page>'
        $viewName = "pages.materi.karakteristik.$page";

        // Periksa apakah view tersebut ada sebelum menampilkannya
        if (view()->exists($viewName)) {
            return view($viewName);
        } else {
            // Jika view tidak ditemukan, kembalikan halaman 404
            abort(404, "Halaman materi '$viewName' tidak ditemukan.");
        }
    }
}