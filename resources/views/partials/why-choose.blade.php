{{-- ═══ WHY CHOOSE US ═══ --}}
<section class="py-20 lg:py-28 bg-navy-900 relative overflow-hidden">
    {{-- Decorative dots --}}
    <div class="absolute inset-0 opacity-5" style="background-image:radial-gradient(circle, #C4963A 1px, transparent 1px); background-size:32px 32px;"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 reveal">
            <span class="text-gold-400 text-sm font-semibold uppercase tracking-[0.15em]">Why Choose Us</span>
            <h2 class="text-3xl lg:text-4xl font-serif font-bold text-white mt-3 mb-4">The Venu Enterprise Advantage</h2>
            <p class="text-slate-400 max-w-2xl mx-auto">What sets us apart from every other exporter you'll meet.</p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
                ['M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z','Global Logistics','End-to-end shipping management across 25+ countries. CIF, FOB, and CNF terms — we handle it all.'],
                ['M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z','Quality Certified','ISO 22000, FSSAI, APEDA certified. Every consignment passes 5-stage quality testing.'],
                ['M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z','Competitive Pricing','Direct sourcing eliminates middlemen. You get the best quality at the most competitive rates.'],
                ['M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0z','24/7 Support','Dedicated account manager for every client. Real-time shipment tracking and instant communication.']
            ] as $idx => $feat)
            <div class="reveal glass-card rounded-2xl p-8 text-center hover:bg-white/12 transition-all duration-500 group" style="transition-delay:{{ $idx * 0.1 }}s">
                <div class="w-16 h-16 mx-auto mb-6 rounded-2xl bg-gold-500/15 flex items-center justify-center group-hover:bg-gold-500/25 transition-colors">
                    <svg class="w-8 h-8 text-gold-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $feat[0] }}"/></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-3">{{ $feat[1] }}</h3>
                <p class="text-slate-400 text-sm leading-relaxed">{{ $feat[2] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
