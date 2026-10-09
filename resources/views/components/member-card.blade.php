@props(['member', 'featured' => false, 'index' => 0])

@php
    $m = is_array($member) ? (object) $member : $member;
    $rawPhoto = $m->photo_primary ?? '';
    $photoSrc = !empty($rawPhoto)
        ? (\Illuminate\Support\Str::startsWith($rawPhoto, 'http') ? $rawPhoto : asset($rawPhoto))
        : 'https://placehold.co/400x500/334EAC/FFF?text=' . urlencode($m->name ?? 'Anggota');
    $tasks = is_array($m->tupoksi ?? null) ? $m->tupoksi : [];
@endphp

<article id="member-{{ $index }}"
         class="group flex h-full scroll-mt-32 flex-col gap-4 rounded-2xl border bg-white p-4 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl md:gap-5 md:p-6 {{ $featured ? 'border-[#334EAC]/40 ring-1 ring-[#334EAC]/15 md:col-span-2 md:mx-auto md:w-full md:max-w-xl' : 'border-slate-200 hover:border-[#334EAC]/40' }}">
    <div class="flex items-center gap-4 md:flex-col md:items-stretch">
        <img src="{{ $photoSrc }}" alt="{{ $m->name }}" loading="lazy"
             class="aspect-[3/4] w-24 shrink-0 rounded-xl border border-slate-200 object-cover object-[center_20%] sm:w-28 md:aspect-[4/5] md:w-full">
        <div class="flex min-w-0 flex-col gap-1">
            <p class="text-xs font-medium uppercase tracking-wider text-[#334EAC]">{{ $m->role }}</p>
            <h3 class="text-lg font-semibold break-words text-slate-900 md:text-xl">{{ $m->name }}</h3>
        </div>
    </div>
    @if(!empty($tasks))
    <div class="mt-auto border-t border-slate-200 pt-4">
        <p class="mb-2 text-xs font-semibold uppercase tracking-wider text-slate-500">Detail Tugas</p>
        <ul class="list-disc space-y-2 pl-5 text-sm text-slate-600 marker:text-[#334EAC]">
            @foreach($tasks as $task)
                <li>{{ $task }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</article>
