@props([
    'data' => null,
    'brand' => null,
    'navItems' => null,
])

@php
    if (!$data) {
        $jsonPath = base_path('data/unitas.json');
        $jsonData = file_exists($jsonPath) ? json_decode(file_get_contents($jsonPath), true) : [];
    } else {
        $jsonData = $data;
    }

    $brand = $brand ?? ($jsonData['brand'] ?? [
        'name' => 'Unitas Sistem Informasi',
        'short_name' => 'Unitas SI',
        'logo' => 'images/logo-unitas.svg',
        'alt' => 'Logo Unitas SI'
    ]);

    $navItems = $navItems ?? ($jsonData['navigation'] ?? []);
@endphp

<header class="w-full bg-white border-b border-gray-100 sticky top-0 z-50">
    <nav class="w-full max-w-[1440px] px-4 sm:px-6 lg:px-8 py-3.5 flex items-center justify-between mx-auto" aria-label="Navigasi Utama">
        
        {{-- Brand Logo --}}
        <a href="{{ url('/') }}" class="flex items-center gap-3 group focus:outline-none rounded-xl p-1 transition-transform duration-200 hover:scale-[1.02]">
            <img src="{{ asset('images/logo-unitas.svg') }}" alt="{{ $brand['alt'] ?? 'Logo Unitas SI' }}" class="h-9 sm:h-11 w-auto object-contain transition-transform duration-300 group-hover:rotate-2">
            <span class="sr-only">{{ $brand['name'] }}</span>
        </a>

        {{-- Desktop Navigation Menu (Presisi & Seragam 100%) --}}
        <ul class="hidden lg:flex items-center gap-1 xl:gap-2 text-xs xl:text-sm font-medium">
            @foreach($navItems as $item)
                @php
                    $urlPath = ltrim(parse_url($item['url'], PHP_URL_PATH) ?? '', '/');
                    $hasDropdown = !empty($item['dropdown']);
                    
                    // Logic Active State yang Presisi (Gak akan bocor ke hash /#)
                    if ($urlPath === '' || $urlPath === '/') {
                        $isCurrent = request()->is('/') && !request()->has('hash');
                    } else {
                        $isCurrent = request()->is($urlPath) || request()->is($urlPath . '/*');
                    }
                @endphp

                <li class="relative group">
                    @if($hasDropdown)
                        {{-- DROPDOWN MENU ITEM --}}
                        <div class="relative">
                            <a href="{{ url($item['url']) }}"
                               class="px-3.5 py-2 rounded-full transition-all duration-200 flex items-center gap-1 focus:outline-none {{ $isCurrent ? 'text-[#334EAC] font-black bg-blue-50 shadow-2xs' : 'text-slate-600 hover:text-[#334EAC] hover:bg-blue-50/80 font-bold' }}">
                                <span>{{ $item['name'] }}</span>
                                <svg class="w-3.5 h-3.5 text-slate-400 group-hover:text-[#334EAC] group-hover:rotate-180 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </a>

                            {{-- DROPDOWN SUB-MENU --}}
                            <ul class="absolute left-0 mt-2 w-52 bg-white border border-slate-100 rounded-2xl shadow-xl shadow-slate-200/50 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-focus-within:opacity-100 group-focus-within:visible transition-all duration-200 z-50">
                                @foreach($item['dropdown'] as $sub)
                                    @php
                                        $subPath = ltrim(parse_url($sub['url'], PHP_URL_PATH) ?? '', '/');
                                        $isSubActive = request()->is($subPath);
                                    @endphp
                                    <li>
                                        <a href="{{ url($sub['url']) }}" class="block px-4 py-2.5 text-xs font-bold transition-colors {{ $isSubActive ? 'text-[#334EAC] bg-blue-50' : 'text-slate-600 hover:text-[#334EAC] hover:bg-blue-50/60' }}">
                                            {{ $sub['name'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @else
                        {{-- MENU BIASA --}}
                        <a href="{{ url($item['url']) }}"
                           class="px-3.5 py-2 rounded-full transition-all duration-200 flex items-center gap-1 focus:outline-none {{ $isCurrent ? 'text-[#334EAC] font-black bg-blue-50 shadow-2xs' : 'text-slate-600 hover:text-[#334EAC] hover:bg-blue-50/80 font-bold' }}">
                            <span>{{ $item['name'] }}</span>
                        </a>
                    @endif
                </li>
            @endforeach
        </ul>

        {{-- Mobile Menu Hamburger Button --}}
        <button type="button"
                id="navbar-toggle-btn"
                class="lg:hidden inline-flex items-center justify-center p-2 rounded-xl text-slate-600 hover:text-[#334EAC] hover:bg-blue-50/80 focus:outline-none transition-all duration-200"
                aria-expanded="false"
                aria-controls="mobile-nav-menu">
            <svg id="hamburger-icon" class="w-6 h-6 block" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg id="close-icon" class="w-6 h-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </nav>

    {{-- Mobile Dropdown Menu --}}
    <nav id="mobile-nav-menu" class="hidden lg:hidden w-full border-t border-gray-100 bg-white px-6 pt-3 pb-6 shadow-xl">
        <ul class="space-y-1 w-full max-w-[1440px] mx-auto">
            @foreach($navItems as $item)
                @php
                    $urlPath = ltrim(parse_url($item['url'], PHP_URL_PATH) ?? '', '/');
                    $hasDropdown = !empty($item['dropdown']);
                    
                    if ($urlPath === '' || $urlPath === '/') {
                        $isCurrent = request()->is('/');
                    } else {
                        $isCurrent = request()->is($urlPath) || request()->is($urlPath . '/*');
                    }
                @endphp
                <li>
                    <a href="{{ url($item['url']) }}"
                       class="flex items-center justify-between px-4 py-2.5 rounded-xl text-sm font-bold transition-colors {{ $isCurrent ? 'text-[#334EAC] bg-blue-50' : 'text-slate-700 hover:text-[#334EAC] hover:bg-slate-50' }}">
                        <span>{{ $item['name'] }}</span>
                        @if($hasDropdown)
                            <svg class="w-4 h-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        @endif
                    </a>
                    @if($hasDropdown)
                        <ul class="pl-4 pr-2 py-1 space-y-1">
                            @foreach($item['dropdown'] as $sub)
                                @php
                                    $subPath = ltrim(parse_url($sub['url'], PHP_URL_PATH) ?? '', '/');
                                    $isSubActive = request()->is($subPath);
                                @endphp
                                <li>
                                    <a href="{{ url($sub['url']) }}" class="block px-3 py-2 rounded-lg text-xs font-bold transition-colors {{ $isSubActive ? 'text-[#334EAC] bg-blue-50' : 'text-slate-500 hover:text-[#334EAC] hover:bg-blue-50/60' }}">
                                        {{ $sub['name'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    </nav>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleBtn = document.getElementById('navbar-toggle-btn');
        const mobileMenu = document.getElementById('mobile-nav-menu');
        const hamburgerIcon = document.getElementById('hamburger-icon');
        const closeIcon = document.getElementById('close-icon');

        if (toggleBtn && mobileMenu) {
            toggleBtn.addEventListener('click', function() {
                const isExpanded = toggleBtn.getAttribute('aria-expanded') === 'true';
                toggleBtn.setAttribute('aria-expanded', !isExpanded);
                mobileMenu.classList.toggle('hidden');
                hamburgerIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });
        }
    });
</script>