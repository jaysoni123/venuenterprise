{{-- ═══ TESTIMONIALS ═══ --}}
<section class="py-20 lg:py-28 bg-cream-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 reveal">
            <span class="text-gold-500 text-sm font-semibold uppercase tracking-[0.15em]">Testimonials</span>
            <h2 class="text-3xl lg:text-4xl font-serif font-bold text-navy-900 mt-3 mb-4">What Our Buyers Say</h2>
            <p class="text-slate-600 max-w-2xl mx-auto">Trusted by importers across the globe — here's what our partners have to say about working with us.</p>
        </div>

        <div class="relative reveal" style="transition-delay:0.15s">
            <div id="testimonial-carousel" class="overflow-hidden">
                <div id="testimonial-track" class="flex transition-transform duration-500 ease-in-out">
                    @foreach([
                        ['Ahmed Al-Rashid','Al Rashid Trading LLC','🇦🇪','Dubai, UAE','We have been sourcing Basmati rice from Venu Enterprise for over 3 years. Their consistency in quality and timely delivery is unmatched. The packaging meets our market standards perfectly.',5],
                        ['Sarah Kimani','Nairobi Spice Imports','🇰🇪','Nairobi, Kenya','The cumin and turmeric we receive from Venu Enterprise is always top-grade. Their documentation is thorough, and customs clearance is never an issue. Highly recommend.',5],
                        ['Hans Mueller','EuroTrade GmbH','🇩🇪','Hamburg, Germany','Professional team, competitive pricing, and excellent quality control. The ISO certification gives us the confidence we need for our European market requirements.',5],
                        ['Raj Patel','Pacific Trading Co.','🇸🇬','Singapore','As a long-standing partner, I can vouch for their reliability. From groundnuts to engineering goods, every order is handled with care and precision. A true one-stop export partner.',5],
                        ['Fatima Owusu','Golden Gate Imports','🇬🇭','Accra, Ghana','Venu Enterprise made our first import from India seamless. Their team guided us through everything — from product selection to shipping terms. We are now regular buyers.',4]
                    ] as $idx => $t)
                    <div class="w-full shrink-0 px-4">
                        <div class="max-w-3xl mx-auto bg-white rounded-2xl p-8 lg:p-12 shadow-sm border border-slate-100">
                            {{-- Stars --}}
                            <div class="flex gap-1 mb-6">
                                @for($s = 0; $s < $t[5]; $s++)
                                <svg class="w-5 h-5 text-gold-500" fill="currentColor" viewBox="0 0 24 24"><path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
                                @endfor
                            </div>
                            {{-- Quote --}}
                            <p class="text-slate-600 text-lg leading-relaxed mb-8 italic">"{{ $t[4] }}"</p>
                            {{-- Author --}}
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-full bg-navy-900 flex items-center justify-center text-xl">{{ $t[2] }}</div>
                                <div>
                                    <h4 class="font-bold text-navy-900">{{ $t[0] }}</h4>
                                    <p class="text-sm text-slate-500">{{ $t[1] }} · {{ $t[3] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Navigation --}}
            <div class="flex justify-center gap-3 mt-8">
                <button onclick="moveTestimonial(-1)" class="w-10 h-10 rounded-full border border-slate-300 flex items-center justify-center hover:bg-navy-900 hover:text-white hover:border-navy-900 transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <div id="testimonial-dots" class="flex items-center gap-2">
                    @for($i = 0; $i < 5; $i++)
                    <button class="testimonial-dot w-2.5 h-2.5 rounded-full transition-all duration-300 {{ $i === 0 ? 'bg-gold-500 w-8' : 'bg-slate-300' }}" onclick="goToTestimonial({{ $i }})"></button>
                    @endfor
                </div>
                <button onclick="moveTestimonial(1)" class="w-10 h-10 rounded-full border border-slate-300 flex items-center justify-center hover:bg-navy-900 hover:text-white hover:border-navy-900 transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>
    </div>
</section>
