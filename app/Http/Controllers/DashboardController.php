<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\Progress;

class DashboardController extends Controller
{
    protected array $menus = [
        [
            'name' => 'Karakteristik',
            'route' => 'dashboard.karakteristik',
            'progress' => 0,
            'key' => 'karakteristik',
        ],
        [
            'name' => 'Rekonstruksi',
            'route' => 'dashboard.rekonstruksi',
            'progress' => 1,
            'key' => 'rekonstruksi',
        ],
        [
            'name' => 'Menyelesaikan Masalah',
            'route' => 'dashboard.masalah',
            'progress' => 2,
            'key' => 'masalah',
        ],
        [
            'name' => 'Evaluasi',
            'route' => 'dashboard.evaluasi',
            'progress' => 3,
            'key' => 'evaluasi',
        ],
    ];

    protected function renderView(string $viewPath): View
    {
        return view($viewPath, [
            'progress' => $this->getProgress(),
            'menus' => $this->menus
        ]);
    }

    protected function getProgress()
    {
        return Progress::where('user_id', auth()->id())->first();
    }

    public function index(): View 
    {
        return $this->renderView('pages.dashboard');
    }

    public function karakteristik(): View 
    {
        return $this->renderView('layouts.karakteristik');
    }
    // public function karakteristik2(): View 
    // {
    //     return $this->renderView('layouts.karakteristik2');
    // }

    public function rekonstruksi(): View 
    {
        return $this->renderView('layouts.rekonstruksi');
    }

    public function masalah(): View 
    {
        return $this->renderView('layouts.masalah');
    }

    public function evaluasi(): View 
    {
        // arahkan ke file blade yang ingin ditampilkan
        return $this->renderView('layouts.evaluasi');
    }
}
