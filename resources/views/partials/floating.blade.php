{{-- ═══ FLOATING ELEMENTS ═══ --}}

{{-- WhatsApp Agent Widget --}}
<div class="fixed bottom-6 right-6 z-50 flex flex-col items-end gap-4 reveal">
    {{-- Chat Bubble (Hidden on very small screens) --}}
    <div class="bg-white rounded-2xl rounded-br-none shadow-2xl border border-slate-100 p-4 max-w-[260px] transform origin-bottom-right transition-all duration-500 animate-bounce hidden sm:block">
        <div class="flex items-start gap-3">
            <div class="w-8 h-8 rounded-full bg-navy-900 flex items-center justify-center shrink-0 shadow-inner">
                <span class="text-white text-xs font-serif font-bold">V</span>
            </div>
            <div>
                <p class="text-[13px] text-slate-600 leading-relaxed font-medium">👋 Hi, looking for premium Agro products or Spices? Chat with our Export Manager.</p>
            </div>
        </div>
    </div>
    
    {{-- WhatsApp Button with Ping --}}
    <a href="https://wa.me/917990340545?text=Hi%2C%20I%20am%20interested%20in%20your%20export%20products." target="_blank" class="w-14 h-14 bg-[#25D366] text-white rounded-full shadow-2xl hover:bg-[#1ebe5d] hover:scale-110 transition-all duration-300 flex items-center justify-center relative group cursor-pointer">
        <span class="absolute inline-flex h-full w-full rounded-full bg-[#25D366] opacity-40 animate-ping"></span>
        <svg class="w-7 h-7 relative z-10" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg>
    </a>
</div>

{{-- Back to Top --}}
<button id="back-to-top" class="fixed bottom-6 right-24 z-50 w-12 h-12 bg-navy-900 text-white rounded-full flex items-center justify-center shadow-xl opacity-0 pointer-events-none transition-all duration-300 hover:bg-navy-800 hover:scale-110" onclick="window.scrollTo({top:0,behavior:'smooth'})">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
</button>
