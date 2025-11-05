<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
   <div class="app-brand demo">
      <a href="{{ route('welcome') }}" class="app-brand-link">
         <span class="app-brand-logo demo">
            <img src="{{ asset('fk.png') }}" alt="Fungsi Kuadrat" width="30" style="border-radius: 150px" />
         </span>
         <span class="app-brand-text menu-text fw-bold ms-2 fs-5">QuadraLearn</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
         <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
   </div>

   <div class="menu-inner-shadow"></div>

   <ul class="menu-inner py-1">
      <!-- Dashboards -->
      @if(auth()->check() && auth()->user()->role === 'student')
      <li class="menu-item {{ Route::is('dashboard') ? 'active' : '' }}">
         <a href="{{ route('dashboard') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bxs-book-open"></i>
            <div data-i18n="Basic">Fungsi Kuadrat</div>
         </a>
      </li>
      @endif

      <!-- Profile -->
      {{-- <li class="menu-item {{ Route::is('profile.*') ? 'active open' : '' }}">
         <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bxs-user"></i>
            <div data-i18n="Profil">Profil</div>
         </a>
         <ul class="menu-sub">
            <li class="menu-item {{ Route::is('profile.account') ? 'active' : '' }}">
               <a href="{{ route('profile.account') }}" class="menu-link">
                  <div data-i18n="Akun">Akun</div>
               </a>
            </li>
            <li class="menu-item {{ Route::is('profile.change-password') ? 'active' : '' }}">
               <a href="{{ route('profile.change-password') }}" class="menu-link">
                  <div data-i18n="Ganti Password">Ganti Password</div>
               </a>
            </li>
         </ul>
      </li> --}}


      @if (auth()->user()->isStudent())
         @foreach($menus as $menu)
   <li class="menu-item {{ (Route::is($menu['route']) || (Route::is('quiz.show') && request()->route('quizKey') === $menu['key'])) ? 'active open' : '' }}">
      
      {{-- Jika menu adalah Evaluasi --}}
      @if ($menu['name'] === 'Evaluasi')
         <a href="{{ route($menu['route']) }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-book-open"></i>
            <div data-i18n="Siswa">{{ $menu['name'] }}</div>
         </a>
      
      {{-- Selain Evaluasi --}}
      @else
         <a href="{{ $progress->progress < $menu['progress'] ? '#' : route($menu['route']) }}" 
            class="menu-link menu-toggle {{ $progress->progress < $menu['progress'] ? 'text-muted' : '' }}">
            <i class="menu-icon tf-icons bx bx-book-open"></i>
            <div data-i18n="Siswa">{{ $menu['name'] }}</div>
         </a>

         <!-- Submenu -->
         <ul class="menu-sub">
            <!-- Materi -->
            <li class="menu-item {{ Route::is($menu['route']) ? 'active' : '' }}">
               @if ($progress->progress < $menu['progress'])
                  <div class="menu-link text-muted" style="cursor: not-allowed;">
                     <div data-i18n="Materi">Materi</div>
                  </div>
               @else
                  <a href="{{ route($menu['route']) }}" class="menu-link">
                     <div data-i18n="Materi">Materi</div>
                  </a>
               @endif
            </li>

            <!-- Quiz -->
            <li class="menu-item {{ Route::is('quiz.show') && request()->route('quizKey') === $menu['key'] ? 'active' : '' }}">
               @if ($progress->progress < $menu['progress'])
                  <div class="menu-link text-muted" style="cursor: not-allowed;">
                     <div data-i18n="Quiz">Quiz</div>
                  </div>
               @else
                  <a href="{{ route('quiz.show', ['quizKey' => $menu['key']]) }}" class="menu-link">
                     <div data-i18n="Quiz">Quiz</div>
                  </a>
               @endif
            </li>
         </ul>
      @endif
   </li>
@endforeach

      @else
         <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Data Master</span>
         </li>

         <li class="menu-item {{ Route::is('students.*') ? 'active' : '' }}">
            <a href="{{ route('students.index') }}" class="menu-link">
               <i class="menu-icon tf-icons bx bx-user"></i>
               <div data-i18n="Siswa">Siswa</div>
            </a>
         </li>
      @endif
   </ul>
</aside>
