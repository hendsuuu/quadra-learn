<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Progress;

class CheckProgress
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        // Kalau bukan student, langsung lanjut
        if (!$user || !$user->isStudent()) {
            return $next($request);
        }

        // Ambil progress user dari tabel progress
        $userProgress = Progress::where('user_id', $user->id)->value('progress') ?? 0;

        // Mapping route => progress minimal
        $requiredProgress = match (true) {
            $request->routeIs('dashboard.karakteristik') => 0,
            $request->routeIs('dashboard.rekonstruksi') => 1,
            $request->routeIs('dashboard.masalah') => 2,
            $request->routeIs('dashboard.evaluasi') => 3,
            default => 0, // default tanpa batasan
        };

        // Jika belum memenuhi progress minimal
        if ($userProgress < $requiredProgress) {
            return redirect()
                ->route('dashboard')
                ->with('error', '🚫 Kamu belum bisa mengakses materi ini. Selesaikan materi sebelumnya dulu.');
        }

        return $next($request);
    }
}
