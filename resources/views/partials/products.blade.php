{{-- ═══ PRODUCT SHOWCASE ═══ --}}
<section id="products" class="py-20 lg:py-28 bg-cream-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Header --}}
        <div class="text-center mb-14 reveal">
            <span class="text-gold-500 text-sm font-semibold uppercase tracking-[0.15em]">Our Products</span>
            <h2 class="text-3xl lg:text-4xl font-serif font-bold text-navy-900 mt-3 mb-4">
                Explore Our Premium Range
            </h2>
            <p class="text-slate-600 max-w-2xl mx-auto">Carefully sourced and processed to meet international standards. Each product backed by quality certifications and rigorous testing.</p>
        </div>

        {{-- Category tabs --}}
        <div class="flex overflow-x-auto pb-4 mb-10 reveal scrollbar-hide w-full max-w-full justify-start md:justify-center gap-3 px-2 snap-x" style="transition-delay:0.1s">
            @foreach(['all' => 'All Products', 'agro' => 'Agro Products', 'spices' => 'Spices', 'engineering' => 'Engineering'] as $key => $label)
            <button class="product-tab shrink-0 snap-center px-6 py-3 rounded-full text-sm font-semibold transition-all duration-300 {{ $key === 'all' ? 'bg-navy-900 text-white shadow-lg shadow-navy-900/20' : 'bg-white text-slate-600 hover:bg-navy-900 hover:text-white border border-slate-200' }}" data-category="{{ $key }}">
                {{ $label }}
            </button>
            @endforeach
        </div>

        {{-- Product grid --}}
        <div id="product-grid" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            @php
            $products = [
                ['Basmati Rice','agro','basmati-rice','Premium long-grain Basmati rice, aged and aromatic. Sourced directly from the finest paddy fields of Punjab and Haryana.','Quality Assured,Bulk Available,Export Grade','1121 Sella / Steam / Raw / Golden Sella','25kg / 50kg PP Bags, Jute Bags','1006.30','Available in 20ft and 40ft containers','Min 15 MT'],
                ['Red Onion','agro','red-onion','Fresh Indian red onions known for their pungent flavour and long shelf life. Carefully sorted and graded for export.','Farm Fresh,Sorted & Graded,Long Shelf Life','Nashik Red / Bangalore Rose','10kg / 25kg Mesh Bags','0703.10','Reefer containers available','Min 10 MT'],
                ['Groundnuts','agro','groundnuts','High-quality Indian groundnuts (peanuts) — bold and java varieties. Perfect for oil extraction and direct consumption.','High Oil Content,Aflatoxin Free,Bold Kernels','Bold / Java / TJ / Runner','25kg / 50kg PP Bags, Vacuum Packs','1202.42','Standard containers','Min 15 MT'],
                ['Turmeric Powder','spices','turmeric','Premium Indian turmeric with high curcumin content. Sourced from Salem and Erode — India\'s finest turmeric-growing regions.','High Curcumin,Aromatic,Lab Tested','Salem / Erode / Alleppey Finger','5kg / 10kg / 25kg Poly Bags','0910.30','Moisture-proof packaging','Min 5 MT'],
                ['Red Chili','spices','red-chili','Dried red chili and ground chili powder with rich colour and consistent heat levels. ASTA colour value certified.','High ASTA Value,Consistent Heat,No Additives','Teja / S17 / Byadgi / 334','10kg / 25kg Poly Bags, Kraft Bags','0904.21','Moisture-controlled packaging','Min 5 MT'],
                ['Cumin Seeds','spices','cumin-seeds','Whole cumin seeds (jeera) from the farms of Gujarat and Rajasthan. Clean, uniform, and highly aromatic.','99% Purity,Machine Cleaned,Uniform Size','Singapore / Europe Quality','10kg / 25kg PP Bags, Jute Bags','0909.31','Fumigation certified','Min 5 MT'],
                ['Steel Fasteners','engineering','steel-fasteners','Precision-manufactured steel fasteners — bolts, nuts, screws, and washers. Meeting DIN, ISO, and ASTM standards.','ISO Certified,Durable,Custom Specs','SS 304/316, MS, Alloy Steel','Industrial packaging with VCI protection','7318.15','Custom specifications available','Min 1 MT'],
                ['Brass Fittings','engineering','brass-fittings','High-quality brass pipe fittings and valves for plumbing, industrial, and marine applications. CNC-machined to precision.','CNC Machined,Corrosion Resistant,Marine Grade','CZ121 / CZ131 / HPb59-1','Individual packaging with foam protection','7412.20','Custom threading available','Min 500 KG'],
                ['Industrial Valves','engineering','industrial-valves','Gate valves, ball valves, and check valves in cast iron, stainless steel, and brass. Pressure-tested and certified.','Pressure Tested,API Certified,Wide Range','CI / SS / Brass / CS','Wooden crate packaging','8481.80','Size range: 1/2" to 24"','Min 500 KG']
            ];
            @endphp

            @foreach($products as $idx => $p)
            <div class="product-card reveal" data-category="{{ $p[1] }}" style="transition-delay:{{ ($idx % 3) * 0.1 }}s">
                <div class="bg-white rounded-3xl overflow-hidden shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] hover:shadow-[0_20px_40px_-12px_rgba(0,0,0,0.15)] transition-all duration-500 group border border-slate-100/50 flex flex-col h-full">
                    {{-- Image --}}
                    <div class="relative h-56 overflow-hidden">
                        <img src="{{ asset('images/'.$p[2].'.png') }}" alt="{{ $p[0] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <button class="product-detail-btn absolute bottom-4 right-4 w-10 h-10 bg-gold-500 text-white rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0 transition-all duration-300 shadow-lg" data-product="{{ $idx }}">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                        </button>
                        <span class="absolute top-4 left-4 px-3 py-1 bg-navy-900/80 text-white text-xs font-medium rounded-full backdrop-blur-sm capitalize">{{ $p[1] }}</span>
                    </div>
                    {{-- Content --}}
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-navy-900 mb-2">{{ $p[0] }}</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-4 line-clamp-2">{{ $p[3] }}</p>
                        <div class="flex flex-wrap gap-2 mb-5">
                            @foreach(explode(',', $p[4]) as $tag)
                            <span class="px-2.5 py-1 bg-cream-50 text-slate-600 text-xs rounded-full border border-slate-100">{{ $tag }}</span>
                            @endforeach
                        </div>
                        <div class="flex gap-3">
                            <button class="product-detail-btn flex-1 px-4 py-2.5 border-2 border-navy-900 text-navy-900 text-sm font-semibold rounded-lg hover:bg-navy-900 hover:text-white transition-all duration-300" data-product="{{ $idx }}">View Details</button>
                            <a href="#contact" class="flex-1 px-4 py-2.5 bg-gold-500 text-white text-sm font-semibold rounded-lg hover:bg-gold-400 transition-all duration-300 text-center">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══ PRODUCT DETAIL MODAL ═══ --}}
<div id="product-modal" class="modal-overlay fixed inset-0 z-[60] flex items-center justify-center p-4 bg-black/60 backdrop-blur-sm">
    <div class="modal-content bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto shadow-2xl">
        <div class="relative">
            <img id="modal-img" src="" alt="" class="w-full h-64 object-cover rounded-t-2xl">
            <button id="modal-close" class="absolute top-4 right-4 w-10 h-10 bg-white/90 rounded-full flex items-center justify-center hover:bg-white transition-colors shadow-lg">
                <svg class="w-5 h-5 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
        <div class="p-8">
            <span id="modal-category" class="text-gold-500 text-sm font-semibold uppercase tracking-wider"></span>
            <h3 id="modal-name" class="text-2xl font-serif font-bold text-navy-900 mt-2 mb-4"></h3>
            <p id="modal-desc" class="text-slate-600 leading-relaxed mb-6"></p>
            <div class="grid grid-cols-2 gap-4 mb-6">
                <div class="p-4 bg-cream-50 rounded-xl"><span class="text-xs text-slate-400 uppercase">Varieties</span><p id="modal-variety" class="text-sm font-semibold text-navy-900 mt-1"></p></div>
                <div class="p-4 bg-cream-50 rounded-xl"><span class="text-xs text-slate-400 uppercase">Packaging</span><p id="modal-packaging" class="text-sm font-semibold text-navy-900 mt-1"></p></div>
                <div class="p-4 bg-cream-50 rounded-xl"><span class="text-xs text-slate-400 uppercase">HS Code</span><p id="modal-hs" class="text-sm font-semibold text-navy-900 mt-1"></p></div>
                <div class="p-4 bg-cream-50 rounded-xl"><span class="text-xs text-slate-400 uppercase">Shipping</span><p id="modal-shipping" class="text-sm font-semibold text-navy-900 mt-1"></p></div>
            </div>
            <div class="p-4 bg-navy-900/5 rounded-xl mb-6">
                <span class="text-xs text-slate-400 uppercase">Minimum Order</span>
                <p id="modal-moq" class="text-sm font-semibold text-navy-900 mt-1"></p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                <a href="#contact" class="px-6 py-3 bg-gold-500 text-white font-semibold rounded-lg hover:bg-gold-400 transition-colors text-center shadow-lg shadow-gold-500/20" onclick="document.getElementById('product-modal').classList.remove('active')">Get Quote</a>
                <a href="https://wa.me/917990340545?text=Hi%2C%20I%20am%20interested%20in%20your%20products" target="_blank" class="px-6 py-3 bg-green-500 text-white font-semibold rounded-lg hover:bg-green-600 transition-colors flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg>
                    WhatsApp
                </a>
                <button onclick="alert('Technical specs (PDF) will be downloaded in production.')" class="px-6 py-3 bg-navy-50 text-navy-900 border border-navy-100 font-semibold rounded-lg hover:bg-navy-100 transition-colors flex items-center justify-center gap-2">
                    <svg class="w-5 h-5 text-gold-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    Specs PDF
                </button>
            </div>
        </div>
    </div>
</div>
