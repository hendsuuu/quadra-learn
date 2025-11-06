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
      @if(auth()->check() && auth()->user()->role === 'student')
      <li class="menu-item {{ Route::is('dashboard') ? 'active' : '' }}">
         <a href="{{ route('dashboard') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bxs-book-open"></i>
            <div data-i18n="Basic">Fungsi Kuadrat</div>
         </a>
      </li>
      @endif

      @if (auth()->user()->isStudent())
         @foreach($menus as $menu)
            @php
               $isLocked = $progress->progress < $menu['progress'];
               $isActive = Route::is($menu['route']) || 
                           (Route::is('quiz.show') && request()->route('quizKey') === $menu['key']);
            @endphp

            <li class="menu-item {{ $isActive ? 'active open' : '' }}">
               {{-- Menu Evaluasi tanpa submenu --}}
               @if ($menu['name'] === 'Evaluasi')
                  <a href="{{ route($menu['route']) }}" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-flag"></i>
                     <div data-i18n="Evaluasi">{{ $menu['name'] }}</div>
                  </a>
               @else
                  <a href="{{ $isLocked ? '#' : route($menu['route']) }}"
                     class="menu-link menu-toggle {{ $isLocked ? 'text-muted' : '' }}"
                     style="{{ $isLocked ? 'cursor: not-allowed;' : '' }}">
                     <i class="menu-icon tf-icons {{ $isLocked ? 'bx bx-lock-alt' : 'bx bx-book-open' }}"></i>
                     <div data-i18n="Materi">{{ $menu['name'] }}</div>
                  </a>

                  <!-- Submenu -->
                  <ul class="menu-sub">
                     <!-- Materi -->
                     <li class="menu-item {{ Route::is($menu['route']) ? 'active' : '' }}">
                        @if ($isLocked)
                           <div class="menu-link text-muted" style="cursor: not-allowed;">
                              <i class="bx bx-lock-alt me-2"></i>
                              <div data-i18n="Materi">Materi (Terkunci)</div>
                           </div>
                        @else
                           <a href="{{ route($menu['route']) }}" class="menu-link">
                              <i class="bx bx-book-open me-2"></i>
                              <div data-i18n="Materi">Materi</div>
                           </a>
                        @endif
                     </li>

                     <!-- Quiz -->
                     <li class="menu-item {{ Route::is('quiz.show') && request()->route('quizKey') === $menu['key'] ? 'active' : '' }}">
                        @if ($isLocked)
                           <div class="menu-link text-muted" style="cursor: not-allowed;">
                              <i class="bx bx-lock-alt me-2"></i>
                              <div data-i18n="Quiz">Quiz (Terkunci)</div>
                           </div>
                        @else
                           <a href="{{ route('quiz.show', ['quizKey' => $menu['key']]) }}" class="menu-link">
                              <i class="bx bx-edit me-2"></i>
                              <div data-i18n="Quiz">Quiz</div>
                           </a>
                        @endif
                     </li>
                  </ul>
               @endif
            </li>
         @endforeach
      @else
         <!-- Admin Section -->
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
