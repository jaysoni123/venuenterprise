{{-- ═══ BLOG / INSIGHTS ═══ --}}
<section id="blog" class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between mb-14 gap-4 reveal">
            <div>
                <span class="text-gold-500 text-sm font-semibold uppercase tracking-[0.15em]">Blog & Insights</span>
                <h2 class="text-3xl lg:text-4xl font-serif font-bold text-navy-900 mt-3">Latest from Our Desk</h2>
            </div>
            <a href="#" class="text-gold-500 font-semibold text-sm hover:text-gold-400 transition-colors flex items-center gap-1">
                View All Articles
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            {{-- Featured article --}}
            <div class="lg:col-span-2 reveal">
                <div class="bg-cream-50 rounded-2xl overflow-hidden group cursor-pointer border border-slate-100 hover:shadow-xl transition-all duration-500">
                    <div class="relative h-64 lg:h-80 overflow-hidden">
                        <img src="{{ asset('images/warehouse.png') }}" alt="Blog" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <span class="absolute top-4 left-4 px-3 py-1 bg-gold-500 text-white text-xs font-semibold rounded-full">Featured</span>
                    </div>
                    <div class="p-6 lg:p-8">
                        <div class="flex items-center gap-4 text-sm text-slate-400 mb-3">
                            <span class="px-3 py-1 bg-navy-900/5 rounded-full text-navy-900 font-medium text-xs">Logistics</span>
                            <span>June 10, 2026</span>
                            <span>5 min read</span>
                        </div>
                        <h3 class="text-xl lg:text-2xl font-bold text-navy-900 mb-3 group-hover:text-gold-500 transition-colors">How Indian Exporters Can Reduce Shipping Costs by 30% in 2026</h3>
                        <p class="text-slate-500 leading-relaxed">Discover the latest strategies Indian exporters are using to cut logistics costs — from consolidation techniques to new trade agreements that reduce duties and streamline customs clearance.</p>
                    </div>
                </div>
            </div>

            {{-- Side articles --}}
            <div class="space-y-6">
                @foreach([
                    ['quality-lab.png','Quality','June 5, 2026','3 min read','Understanding ISO 22000: What It Means for Your Food Imports','A breakdown of the ISO 22000 food safety management standard and why it matters for every buyer.'],
                    ['red-chili.png','Industry Insight','May 28, 2026','4 min read','Indian Spice Exports Hit Record High in 2025-26','India\'s spice exports crossed $4.5 billion, driven by strong demand from Middle East and Europe.']
                ] as $idx => $post)
                <div class="reveal group cursor-pointer" style="transition-delay:{{ ($idx + 1) * 0.1 }}s">
                    <div class="bg-cream-50 rounded-2xl overflow-hidden border border-slate-100 hover:shadow-xl transition-all duration-500">
                        <div class="relative h-40 overflow-hidden">
                            <img src="{{ asset('images/'.$post[0]) }}" alt="{{ $post[4] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        </div>
                        <div class="p-5">
                            <div class="flex items-center gap-3 text-xs text-slate-400 mb-2">
                                <span class="px-2 py-0.5 bg-navy-900/5 rounded-full text-navy-900 font-medium">{{ $post[1] }}</span>
                                <span>{{ $post[2] }}</span>
                                <span>{{ $post[3] }}</span>
                            </div>
                            <h3 class="font-bold text-navy-900 text-sm leading-snug group-hover:text-gold-500 transition-colors">{{ $post[4] }}</h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
