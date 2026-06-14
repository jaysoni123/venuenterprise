{{-- ═══ GLOBAL REACH ═══ --}}
<section class="py-20 lg:py-28 bg-navy-900 relative overflow-hidden">
    <div class="absolute inset-0 opacity-5" style="background-image:radial-gradient(circle, #C4963A 1px, transparent 1px); background-size:40px 40px;"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 reveal">
            <span class="text-gold-400 text-sm font-semibold uppercase tracking-[0.15em]">Global Reach</span>
            <h2 class="text-3xl lg:text-4xl font-serif font-bold text-white mt-3 mb-4">Exporting Excellence Worldwide</h2>
            <p class="text-slate-400 max-w-2xl mx-auto">From our base in Gujarat, India, we supply premium products to importers across the globe.</p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center">
            {{-- SVG Map --}}
            <div class="reveal-left">
                <svg viewBox="0 0 800 450" class="w-full" xmlns="http://www.w3.org/2000/svg">
                    {{-- Simplified world outline --}}
                    <rect width="800" height="450" fill="none"/>
                    {{-- Continents simplified --}}
                    <g opacity="0.15" fill="#C4963A">
                        {{-- North America --}}
                        <ellipse cx="200" cy="150" rx="120" ry="80"/>
                        {{-- South America --}}
                        <ellipse cx="240" cy="310" rx="60" ry="90"/>
                        {{-- Europe --}}
                        <ellipse cx="420" cy="130" rx="60" ry="50"/>
                        {{-- Africa --}}
                        <ellipse cx="430" cy="270" rx="70" ry="90"/>
                        {{-- Asia --}}
                        <ellipse cx="580" cy="170" rx="120" ry="80"/>
                        {{-- Australia --}}
                        <ellipse cx="660" cy="350" rx="50" ry="35"/>
                    </g>
                    {{-- India marker (origin) --}}
                    <circle cx="540" cy="220" r="8" fill="#C4963A" class="animate-pulse"/>
                    <circle cx="540" cy="220" r="16" fill="none" stroke="#C4963A" stroke-width="1" opacity="0.5" class="animate-ping" style="animation-duration:2s"/>
                    <text x="540" y="245" fill="#C4963A" font-size="11" text-anchor="middle" font-weight="600">INDIA</text>
                    {{-- Trade routes --}}
                    @foreach([
                        [460,180,'UAE','#E8C97A'],
                        [420,130,'Europe','#D4A94E'],
                        [440,300,'East Africa','#C4963A'],
                        [610,190,'SE Asia','#E8C97A'],
                        [380,260,'West Africa','#D4A94E'],
                        [200,150,'North America','#C4963A'],
                    ] as $dest)
                    <line x1="540" y1="220" x2="{{ $dest[0] }}" y2="{{ $dest[1] }}" stroke="{{ $dest[3] }}" stroke-width="1" stroke-dasharray="4,4" opacity="0.4"/>
                    <circle cx="{{ $dest[0] }}" cy="{{ $dest[1] }}" r="5" fill="{{ $dest[3] }}"/>
                    <text x="{{ $dest[0] }}" y="{{ $dest[1] - 10 }}" fill="#94a3b8" font-size="9" text-anchor="middle">{{ $dest[2] }}</text>
                    @endforeach
                </svg>
            </div>

            {{-- Stats & regions --}}
            <div class="reveal-right space-y-6">
                <div class="grid grid-cols-2 gap-4">
                    @foreach([
                        ['25+','Countries'],['5000+','MT/Month'],['3','Continents'],['150+','Active Buyers']
                    ] as $stat)
                    <div class="glass-card rounded-xl p-5 text-center">
                        <div class="text-2xl font-bold text-gold-400">{{ $stat[0] }}</div>
                        <div class="text-sm text-slate-400 mt-1">{{ $stat[1] }}</div>
                    </div>
                    @endforeach
                </div>
                <div class="space-y-3">
                    @foreach([
                        ['🇦🇪','Middle East','UAE, Saudi Arabia, Oman, Qatar, Kuwait'],
                        ['🇬🇧','Europe','UK, Netherlands, Germany, Belgium'],
                        ['🇰🇪','Africa','Kenya, Tanzania, Ethiopia, South Africa'],
                        ['🇸🇬','Southeast Asia','Singapore, Malaysia, Vietnam, Indonesia']
                    ] as $region)
                    <div class="glass-card rounded-xl px-5 py-4 flex items-center gap-4 hover:bg-white/12 transition-colors">
                        <span class="text-2xl">{{ $region[0] }}</span>
                        <div>
                            <h4 class="text-white font-semibold text-sm">{{ $region[1] }}</h4>
                            <p class="text-slate-400 text-xs">{{ $region[2] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
