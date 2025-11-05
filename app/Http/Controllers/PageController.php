<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Progress;

class PageController extends Controller
{
    public function welcome(): View {
        return view('welcome');
    }

    public function dashboard(): View {
        $progress = Progress::where('user_id', auth()->user()->id)->first();
        $menus = [
            [
                'name' => 'Apersepsi',
                'route' => 'apersepsi',
            ],
            [
                'name' => 'Rekonstruksi',
                'route' => 'rekonstruksi',
            ],
            [
                'name' => 'Menyelesaikan Masalaah',
                'route' => 'masalah',
            ],
            [
                'name' => 'Evaluasi',
                'route' => 'evaluasi',
            ],
        ];


        return view('pages.dashboard', [
            'progress' => $progress,
            'menus' => $menus
        ]);
    }

    public function apersepsi(): View {
        return view('pages.apersepsi');
    }

    public function students(): View {
        return view('pages.students.index');
    }

    public function rekonstruksi(): View {
        return view('layouts.rekonstruksi');
    }

    public function masalah(): View {
        return view('layouts.masalah');
    }

    public function evaluasi(): View {
        return view('layouts.evaluasi');
    }
}
