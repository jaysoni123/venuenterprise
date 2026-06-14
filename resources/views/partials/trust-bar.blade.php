{{-- ═══ TRUST BAR ═══ --}}
<section id="trust" class="py-8 bg-cream-50 border-y border-slate-200/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-center text-xs uppercase tracking-[0.2em] text-slate-400 mb-6 font-medium">Certified & Trusted By</p>
    </div>
    <div class="overflow-hidden relative">
        <div class="absolute left-0 top-0 bottom-0 w-24 bg-gradient-to-r from-cream-50 to-transparent z-10"></div>
        <div class="absolute right-0 top-0 bottom-0 w-24 bg-gradient-to-l from-cream-50 to-transparent z-10"></div>
        <div class="marquee-track flex items-center gap-16 whitespace-nowrap">
            @for ($i = 0; $i < 2; $i++)
            <div class="flex items-center gap-16 shrink-0 px-8">
                @foreach([
                    ['APEDA','bg-green-100','text-green-700','M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5'],
                    ['FSSAI','bg-blue-100','text-blue-700','M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
                    ['ISO 22000','bg-amber-100','text-amber-700','M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z'],
                    ['IEC','bg-indigo-100','text-indigo-700','M21 12a9 9 0 11-18 0 9 9 0 0118 0zM3.055 11H5a2 2 0 012 2v1a2 2 0 002 2'],
                    ['BIS','bg-red-100','text-red-700','M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'],
                    ['FIEO','bg-teal-100','text-teal-700','M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1']
                ] as $cert)
                <div class="flex items-center gap-3 opacity-50 hover:opacity-100 transition-opacity">
                    <div class="w-10 h-10 rounded-lg {{ $cert[1] }} flex items-center justify-center">
                        <svg class="w-6 h-6 {{ $cert[2] }}" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $cert[3] }}"/></svg>
                    </div>
                    <span class="text-sm font-semibold text-slate-600 tracking-wide">{{ $cert[0] }}</span>
                </div>
                @endforeach
            </div>
            @endfor
        </div>
    </div>
</section>
