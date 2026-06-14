{{-- ═══ HERO SECTION ═══ --}}
<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden">
    {{-- Background --}}
    <div class="absolute inset-0">
        <img src="{{ asset('images/hero-bg.png') }}" alt="Global trade" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-navy-900/95 via-navy-900/80 to-navy-900/60"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-navy-900 via-transparent to-transparent"></div>
    </div>

    {{-- Floating particles (decorative) --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute w-2 h-2 bg-gold-500/20 rounded-full top-[20%] left-[10%] animate-pulse"></div>
        <div class="absolute w-1.5 h-1.5 bg-gold-400/15 rounded-full top-[40%] left-[80%] animate-pulse" style="animation-delay:1s"></div>
        <div class="absolute w-2.5 h-2.5 bg-gold-300/10 rounded-full top-[70%] left-[30%] animate-pulse" style="animation-delay:2s"></div>
        <div class="absolute w-1 h-1 bg-white/10 rounded-full top-[15%] left-[60%] animate-pulse" style="animation-delay:0.5s"></div>
        <div class="absolute w-2 h-2 bg-gold-500/15 rounded-full top-[55%] left-[90%] animate-pulse" style="animation-delay:1.5s"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center lg:text-left w-full">
        <div class="max-w-3xl lg:max-w-2xl">
            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full mb-8 reveal">
                <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                <span class="text-sm text-white/90 font-medium">Trusted by Importers in 25+ Countries</span>
            </div>

            {{-- Heading --}}
            <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-[5rem] font-serif font-bold text-white leading-[1.1] mb-6 reveal tracking-tight" style="transition-delay:0.1s">
                Your Trusted Partner in
                <span class="text-gold-400 block mt-2">Global Trade</span>
            </h1>

            {{-- Subheading --}}
            <p class="text-base sm:text-xl text-white/70 leading-relaxed mb-10 max-w-xl reveal mx-auto lg:mx-0" style="transition-delay:0.2s">
                Premium Indian agro products, spices, and engineering goods — sourced with care, exported with confidence to buyers worldwide.
            </p>

            {{-- CTAs --}}
            <div class="flex flex-col sm:flex-row gap-4 mb-12 reveal" style="transition-delay:0.3s">
                <a href="#products" class="px-8 py-4 bg-gold-500 text-white font-semibold rounded-lg hover:bg-gold-400 transition-all duration-300 shadow-xl shadow-gold-500/25 text-center text-lg">
                    Explore Products
                </a>
                <a href="#contact" class="px-8 py-4 border-2 border-white/30 text-white font-semibold rounded-lg hover:bg-white/10 hover:border-white/50 transition-all duration-300 text-center text-lg">
                    Get a Quote
                </a>
            </div>

            {{-- Stats row --}}
            <div class="flex flex-wrap justify-center lg:justify-start gap-8 reveal" style="transition-delay:0.4s">
                <div class="text-center lg:text-left">
                    <div class="text-3xl font-bold text-gold-400 counter-value" data-target="25">0</div>
                    <div class="text-sm text-white/60 mt-1">Countries Served</div>
                </div>
                <div class="w-px h-12 bg-white/20 hidden sm:block"></div>
                <div class="text-center lg:text-left">
                    <div class="text-3xl font-bold text-gold-400 counter-value" data-target="5000">0</div>
                    <div class="text-sm text-white/60 mt-1">MT Monthly Capacity</div>
                </div>
                <div class="w-px h-12 bg-white/20 hidden sm:block"></div>
                <div class="text-center lg:text-left">
                    <div class="text-3xl font-bold text-gold-400 counter-value" data-target="200">0</div>
                    <div class="text-sm text-white/60 mt-1">Global Partners</div>
                </div>
            </div>
        </div>
    </div>

    {{-- Scroll indicator --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 bounce-slow">
        <a href="#trust" class="flex flex-col items-center gap-2 text-white/40 hover:text-white/70 transition-colors">
            <span class="text-xs uppercase tracking-widest">Scroll</span>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
        </a>
    </div>
</section>
