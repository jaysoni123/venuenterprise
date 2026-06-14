{{-- ═══ ABOUT US ═══ --}}
<section id="about" class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            {{-- Left: Image collage --}}
            <div class="relative reveal-left">
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-4">
                        <img src="{{ asset('images/warehouse.png') }}" alt="Warehouse" class="rounded-2xl shadow-xl w-full h-48 object-cover">
                        <img src="{{ asset('images/quality-lab.png') }}" alt="Quality Lab" class="rounded-2xl shadow-xl w-full h-64 object-cover">
                    </div>
                    <div class="space-y-4 pt-8">
                        <img src="{{ asset('images/basmati-rice.png') }}" alt="Products" class="rounded-2xl shadow-xl w-full h-64 object-cover">
                        <img src="{{ asset('images/turmeric.png') }}" alt="Spices" class="rounded-2xl shadow-xl w-full h-48 object-cover">
                    </div>
                </div>
                {{-- Floating experience badge --}}
                <div class="absolute -bottom-6 -left-4 lg:-left-8 bg-gold-500 text-white px-6 py-4 rounded-2xl shadow-xl z-10">
                    <div class="text-3xl font-bold font-serif">10+</div>
                    <div class="text-sm font-medium opacity-90">Years of Excellence</div>
                </div>
            </div>

            {{-- Right: Content --}}
            <div class="reveal-right">
                <span class="text-gold-500 text-sm font-semibold uppercase tracking-[0.15em]">About Us</span>
                <h2 class="text-3xl lg:text-4xl font-serif font-bold text-navy-900 mt-3 mb-6 leading-tight">
                    Bridging Indian Quality with Global Markets
                </h2>
                <p class="text-slate-600 leading-relaxed mb-6">
                    Venu Enterprise is a trusted Indian exporter specializing in premium agro products, aromatic spices, and precision-engineered goods. Based in Gujarat, we've built a reputation for quality, reliability, and transparent trade practices that importers worldwide count on.
                </p>
                <p class="text-slate-600 leading-relaxed mb-8">
                    From farm to port, every product passes through our rigorous quality pipeline. We don't just export goods — we export trust, consistency, and a commitment to international standards that makes doing business with India effortless.
                </p>

                {{-- Stats grid --}}
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 mb-8">
                    @foreach([
                        ['25+','Countries','data-target=25'],
                        ['200+','Farms','data-target=200'],
                        ['5000+','MT Shipped','data-target=5000'],
                        ['150+','Partners','data-target=150']
                    ] as $stat)
                    <div class="text-center p-4 rounded-xl bg-cream-50 border border-slate-100">
                        <div class="text-2xl font-bold text-navy-900 counter-value" {{ $stat[2] }}>0</div>
                        <div class="text-xs text-slate-500 mt-1">{{ $stat[1] }}</div>
                    </div>
                    @endforeach
                </div>

                {{-- Accordion --}}
                <div class="space-y-3">
                    @foreach([
                        ['Precision Sourcing','We work directly with certified farmers and manufacturers across India, ensuring every product meets export-grade quality from the very first step.'],
                        ['Quality Assurance','Our 5-stage quality inspection process — from raw material testing to final shipping audit — guarantees that every consignment exceeds international standards.'],
                        ['Growth Commitment','We invest in long-term partnerships. Our dedicated support, transparent pricing, and consistent supply make us a partner you can scale with.']
                    ] as $idx => $item)
                    <div class="accordion-item border border-slate-200 rounded-xl overflow-hidden">
                        <button class="accordion-btn w-full flex items-center justify-between px-5 py-4 text-left font-semibold text-navy-900 hover:bg-cream-50 transition-colors" onclick="toggleAccordion(this)">
                            <span>{{ $item[0] }}</span>
                            <svg class="accordion-icon w-5 h-5 text-gold-500 transition-transform duration-300 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300">
                            <p class="px-5 pb-4 text-slate-600 text-sm leading-relaxed">{{ $item[1] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
