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

<header x-data="{ scrolled: false, open: false }"
        @scroll.window="scrolled = window.scrollY > 16"
        @click.outside="open = false"
        @keydown.escape.window="open = false"
        x-effect="document.body.style.overflow = open ? 'hidden' : ''"
        :class="scrolled ? 'bg-white/80 backdrop-blur-xl border-slate-200/80 shadow-sm' : 'bg-white/60 backdrop-blur-md border-transparent'"
        class="fixed inset-x-0 top-0 z-50 border-b transition duration-300">

    <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 md:h-20 md:px-8">

        {{-- Brand Block --}}
        <a href="{{ url('/') }}" class="focus:outline-none">
            <div x-data="{ logoFailed: false }" class="flex items-center gap-3">
                <img x-on:error="logoFailed = true" x-show="!logoFailed"
                     src="{{ asset('images/logo-unitas.png') }}" width="36" height="36"
                     alt="Unitas Sistem Informasi" class="h-9 w-auto md:h-10">
                <span x-show="logoFailed" style="display: none"
                      class="grid size-9 place-items-center rounded-xl bg-[#334EAC] text-xs font-semibold tracking-wider text-white">UN</span>
                <span class="sr-only">{{ $brand['name'] }}</span>
                <span class="hidden text-sm font-semibold text-slate-900 sm:block">Unitas SI</span>
            </div>
        </a>

        {{-- Desktop Navigation Links --}}
        <ul class="hidden items-center gap-1 xl:gap-2 text-xs xl:text-sm font-medium lg:flex">
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
                               class="relative flex items-center gap-1 px-3.5 py-2 rounded-full text-sm font-medium transition-all duration-200 focus:outline-none {{ $isCurrent ? 'text-[#334EAC]' : 'text-slate-600 hover:text-[#334EAC] hover:bg-[#334EAC]/5' }}"
                               @if($isCurrent) aria-current="page" @endif>
                                <span>{{ $item['name'] }}</span>
                                <svg class="w-3.5 h-3.5 text-slate-400 group-hover:text-[#334EAC] group-hover:rotate-180 transition-transform duration-200 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                                @if($isCurrent)
                                    <span class="absolute inset-x-3.5 -bottom-px h-0.5 rounded-full bg-[#334EAC]"></span>
                                @endif
                            </a>

                            {{-- DROPDOWN SUB-MENU --}}
                            <ul class="absolute left-0 mt-2 w-56 bg-white border border-slate-200 rounded-2xl shadow-xl shadow-slate-200/50 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-focus-within:opacity-100 group-focus-within:visible transition-all duration-200 z-50">
                                @foreach($item['dropdown'] as $sub)
                                    @php
                                        $subPath = ltrim(parse_url($sub['url'], PHP_URL_PATH) ?? '', '/');
                                        $isSubActive = request()->is($subPath);
                                    @endphp
                                    <li>
                                        <a href="{{ url($sub['url']) }}"
                                           class="block px-4 py-2.5 text-xs font-medium transition-colors {{ $isSubActive ? 'text-[#334EAC] bg-[#334EAC]/5' : 'text-slate-600 hover:text-[#334EAC] hover:bg-[#334EAC]/5' }}"
                                           @if($isSubActive) aria-current="page" @endif>
                                            {{ $sub['name'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @else
                        {{-- MENU BIASA --}}
                        <a href="{{ url($item['url']) }}"
                           class="relative flex items-center gap-1 px-3.5 py-2 rounded-full text-sm font-medium transition-all duration-200 focus:outline-none {{ $isCurrent ? 'text-[#334EAC]' : 'text-slate-600 hover:text-[#334EAC] hover:bg-[#334EAC]/5' }}"
                           @if($isCurrent) aria-current="page" @endif>
                            <span>{{ $item['name'] }}</span>
                            @if($isCurrent)
                                <span class="absolute inset-x-3.5 -bottom-px h-0.5 rounded-full bg-[#334EAC]"></span>
                            @endif
                        </a>
                    @endif
                </li>
            @endforeach
        </ul>

        {{-- Mobile Hamburger Button --}}
        <button type="button" @click="open = !open"
                :aria-expanded="open.toString()" aria-controls="mobile-menu" aria-label="Buka menu"
                class="grid size-11 place-items-center rounded-xl border border-slate-200 bg-white text-slate-900 transition lg:hidden">
            {{-- Hamburger icon --}}
            <svg x-show="!open" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            {{-- Close icon --}}
            <svg x-show="open" style="display: none" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    {{-- Mobile Dropdown Panel --}}
    <div id="mobile-menu" x-show="open" style="display: none"
         x-transition:enter="transition duration-200 ease-out"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition duration-150 ease-in"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="absolute inset-x-4 top-full mt-2 rounded-2xl border border-slate-200 bg-white/95 p-3 shadow-xl backdrop-blur-xl lg:hidden">
        <nav class="flex flex-col gap-1" aria-label="Navigasi Mobile">
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

                <a href="{{ url($item['url']) }}" @click="open = false"
                   class="block rounded-xl px-4 py-3 text-base font-medium transition {{ $isCurrent ? 'bg-[#334EAC]/5 text-[#334EAC]' : 'text-slate-700 hover:bg-[#334EAC]/5 hover:text-[#334EAC]' }}"
                   @if($isCurrent) aria-current="page" @endif>
                    {{ $item['name'] }}
                </a>

                @if($hasDropdown)
                    <div class="flex flex-col gap-0.5 pl-4 pb-1">
                        @foreach($item['dropdown'] as $sub)
                            @php
                                $subPath = ltrim(parse_url($sub['url'], PHP_URL_PATH) ?? '', '/');
                                $isSubActive = request()->is($subPath);
                            @endphp
                            <a href="{{ url($sub['url']) }}" @click="open = false"
                               class="block rounded-lg px-3 py-2 text-sm font-medium transition {{ $isSubActive ? 'text-[#334EAC] bg-[#334EAC]/5' : 'text-slate-500 hover:text-[#334EAC] hover:bg-[#334EAC]/5' }}"
                               @if($isSubActive) aria-current="page" @endif>
                                {{ $sub['name'] }}
                            </a>
                        @endforeach
                    </div>
                @endif
            @endforeach
        </nav>
    </div>
</header>