{{-- ═══ OPERATIONS GALLERY ═══ --}}
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 reveal">
            <span class="text-gold-500 text-sm font-semibold uppercase tracking-[0.15em]">Our Operations</span>
            <h2 class="text-3xl lg:text-4xl font-serif font-bold text-navy-900 mt-3 mb-4">Global Scale, Local Excellence</h2>
            <p class="text-slate-600 max-w-2xl mx-auto">From our state-of-the-art facilities, we manage sourcing, quality control, packaging, and logistics with precision.</p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach([
                ['warehouse.png','Warehousing','lg:col-span-2 lg:row-span-2','h-48 lg:h-full'],
                ['quality-lab.png','Quality Lab','','h-48'],
                ['basmati-rice.png','Grain Processing','','h-48'],
                ['steel-fasteners.png','Engineering','','h-48'],
                ['turmeric.png','Spice Processing','','h-48'],
            ] as $idx => $img)
            <div class="gallery-item {{ $img[2] }} reveal group relative overflow-hidden rounded-2xl cursor-pointer" style="transition-delay:{{ $idx * 0.08 }}s" onclick="openLightbox('{{ asset('images/'.$img[0]) }}','{{ $img[1] }}')">
                <img src="{{ asset('images/'.$img[0]) }}" alt="{{ $img[1] }}" class="w-full {{ $img[3] }} object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-navy-900/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-5">
                    <div>
                        <p class="text-white font-semibold">{{ $img[1] }}</p>
                        <p class="text-white/60 text-sm">Click to expand</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Lightbox --}}
<div id="lightbox" class="lightbox-overlay fixed inset-0 z-[60] bg-black/90 flex items-center justify-center p-4" onclick="closeLightbox()">
    <button class="absolute top-6 right-6 text-white/70 hover:text-white transition-colors" onclick="closeLightbox()">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
    </button>
    <img id="lightbox-img" src="" alt="" class="max-w-full max-h-[85vh] object-contain rounded-lg" onclick="event.stopPropagation()">
    <p id="lightbox-caption" class="absolute bottom-8 left-1/2 -translate-x-1/2 text-white text-lg font-medium"></p>
</div>
