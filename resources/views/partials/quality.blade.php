{{-- ═══ QUALITY PROCESS ═══ --}}
<section id="quality" class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 reveal">
            <span class="text-gold-500 text-sm font-semibold uppercase tracking-[0.15em]">Our Quality</span>
            <h2 class="text-3xl lg:text-4xl font-serif font-bold text-navy-900 mt-3 mb-4">5-Stage Quality Assurance</h2>
            <p class="text-slate-600 max-w-2xl mx-auto">Every product passes through our rigorous inspection pipeline before it reaches your port. No exceptions, no shortcuts.</p>
        </div>

        {{-- Timeline --}}
        <div class="relative">
            {{-- Desktop horizontal timeline --}}
            <div class="hidden lg:block">
                <div class="flex items-start justify-between relative">
                    {{-- Connecting line --}}
                    <div class="absolute top-8 left-[10%] right-[10%] h-0.5 bg-slate-200">
                        <div class="timeline-line h-full bg-gradient-to-r from-gold-500 to-gold-300 reveal" style="transition-delay:0.3s"></div>
                    </div>

                    @foreach([
                        ['M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4','Raw Material Testing','Incoming materials inspected for purity, moisture, foreign matter, and compliance with specifications.'],
                        ['M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z','In-Process Sampling','Random batch sampling during processing to ensure consistent quality throughout production.'],
                        ['M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z','Pre-Packing QC','Final quality check before packaging. Weight, colour, size grading verified against buyer specs.'],
                        ['M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z','Third-Party Lab','Independent lab testing for safety, chemical residues, heavy metals, and microbiology.'],
                        ['M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4','Shipping Audit','Container inspection, fumigation certification, and documentation review before dispatch.']
                    ] as $idx => $step)
                    <div class="timeline-step reveal flex flex-col items-center text-center w-1/5 relative z-10" style="transition-delay:{{ $idx * 0.15 }}s">
                        <div class="w-16 h-16 rounded-full bg-white border-4 border-gold-500 flex items-center justify-center mb-4 shadow-lg">
                            <svg class="w-7 h-7 text-gold-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $step[0] }}"/></svg>
                        </div>
                        <span class="text-xs font-bold text-gold-500 uppercase tracking-wider mb-2">Step {{ $idx + 1 }}</span>
                        <h4 class="text-sm font-bold text-navy-900 mb-2">{{ $step[1] }}</h4>
                        <p class="text-xs text-slate-500 leading-relaxed px-2">{{ $step[2] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Mobile vertical timeline --}}
            <div class="lg:hidden space-y-8">
                @foreach([
                    ['Raw Material Testing','Incoming materials inspected for purity, moisture, foreign matter, and compliance.'],
                    ['In-Process Sampling','Random batch sampling during processing for consistent quality.'],
                    ['Pre-Packing QC','Final quality check — weight, colour, size grading verified.'],
                    ['Third-Party Lab','Independent testing for safety, residues, heavy metals.'],
                    ['Shipping Audit','Container inspection, fumigation, documentation review.']
                ] as $idx => $step)
                <div class="flex gap-4 items-start reveal" style="transition-delay:{{ $idx * 0.1 }}s">
                    <div class="flex flex-col items-center shrink-0">
                        <div class="w-10 h-10 rounded-full bg-gold-500 text-white flex items-center justify-center font-bold text-sm shadow-lg">{{ $idx + 1 }}</div>
                        @if($idx < 4)<div class="w-0.5 h-full bg-gold-300/30 mt-2 min-h-[2rem]"></div>@endif
                    </div>
                    <div class="pb-4">
                        <h4 class="font-bold text-navy-900 mb-1">{{ $step[0] }}</h4>
                        <p class="text-sm text-slate-500">{{ $step[1] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Compliance badges --}}
        <div class="flex flex-wrap justify-center gap-6 mt-16 reveal" style="transition-delay:0.4s">
            @foreach(['FSSAI Compliant', 'ISO 22000', 'APEDA Registered', 'HACCP Standards'] as $badge)
            <div class="flex items-center gap-2 px-5 py-2.5 bg-green-50 border border-green-200 rounded-full">
                <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span class="text-sm font-semibold text-green-700">{{ $badge }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>
