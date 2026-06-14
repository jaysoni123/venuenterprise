{{-- ═══ STICKY NAVBAR ═══ --}}
<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 flex flex-col">
    {{-- Top Authority Bar (Hidden on scroll) --}}
    <div id="top-bar" class="w-full bg-navy-950 text-white/70 py-2 border-b border-white/5 transition-all duration-300 origin-top hidden md:block">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center text-xs font-medium tracking-wide">
            <div class="flex items-center gap-6">
                <span class="flex items-center gap-2">
                    <svg class="w-3.5 h-3.5 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Exporting to 25+ Countries
                </span>
                <span class="flex items-center gap-2">
                    <svg class="w-3.5 h-3.5 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                    ISO 9001, APEDA & FSSAI Certified
                </span>
            </div>
            <div class="flex items-center">
                {{-- Language Selector Mockup --}}
                <div class="group relative cursor-pointer flex items-center gap-1.5 hover:text-white transition-colors">
                    <svg class="w-3.5 h-3.5 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path></svg>
                    <span>English</span>
                    <svg class="w-3 h-3 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    
                    {{-- Dropdown Menu --}}
                    <div class="absolute top-full right-0 mt-2 w-32 bg-white rounded-lg shadow-xl border border-slate-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 overflow-hidden z-50">
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-gold-50 hover:text-gold-600">English</a>
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-gold-50 hover:text-gold-600">العربية</a>
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-gold-50 hover:text-gold-600">Español</a>
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-gold-50 hover:text-gold-600">Français</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            {{-- Logo --}}
            <a href="#home" class="flex items-center gap-2 shrink-0">
                <div class="w-10 h-10 rounded-full bg-gold-500 flex items-center justify-center">
                    <span class="text-white font-serif font-bold text-lg">V</span>
                </div>
                <div>
                    <span id="nav-logo-text" class="text-xl font-serif font-bold text-white tracking-wide">VENU</span>
                    <span id="nav-logo-sub" class="block text-[10px] uppercase tracking-[0.2em] text-gold-300 -mt-1">Enterprise</span>
                </div>
            </a>

            {{-- Desktop Nav Links --}}
            <div class="hidden lg:flex items-center gap-8">
                <a href="#home" class="nav-link text-sm font-medium text-white/80 hover:text-gold-400 transition-colors">Home</a>
                <a href="#about" class="nav-link text-sm font-medium text-white/80 hover:text-gold-400 transition-colors">About Us</a>
                <a href="#products" class="nav-link text-sm font-medium text-white/80 hover:text-gold-400 transition-colors">Products</a>
                <a href="#quality" class="nav-link text-sm font-medium text-white/80 hover:text-gold-400 transition-colors">Our Quality</a>
                <a href="#certifications" class="nav-link text-sm font-medium text-white/80 hover:text-gold-400 transition-colors">Certifications</a>
                <a href="#blog" class="nav-link text-sm font-medium text-white/80 hover:text-gold-400 transition-colors">Blog</a>
                <a href="#contact" class="nav-link text-sm font-medium text-white/80 hover:text-gold-400 transition-colors">Contact</a>
            </div>

            {{-- Right side --}}
            <div class="hidden lg:flex items-center gap-4">
                <a href="tel:+917990340545" class="flex items-center gap-2 text-white/80 hover:text-gold-400 transition-colors text-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    +91 79903 40545
                </a>
                <a href="#contact" class="px-6 py-2.5 bg-gold-500 text-white text-sm font-semibold rounded-lg hover:bg-gold-400 transition-all duration-300 shadow-lg shadow-gold-500/20">
                    Get a Quote
                </a>
            </div>

            {{-- Mobile menu button --}}
            <button id="mobile-menu-btn" class="lg:hidden text-white p-2" aria-label="Toggle menu">
                <svg id="menu-icon-open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                <svg id="menu-icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
    </div>
</nav>

{{-- Mobile Drawer (Moved outside nav to fix stacking context issues) --}}
<div id="mobile-drawer" class="lg:hidden fixed inset-0 pt-20 bg-navy-900 transform translate-x-full transition-transform duration-300 z-40 shadow-2xl overflow-y-auto flex flex-col">
    <div class="flex flex-col p-6 gap-4">
        <a href="#home" class="mobile-nav-link text-lg font-medium text-white/80 hover:text-gold-400 py-3 border-b border-white/10">Home</a>
        <a href="#about" class="mobile-nav-link text-lg font-medium text-white/80 hover:text-gold-400 py-3 border-b border-white/10">About Us</a>
        <a href="#products" class="mobile-nav-link text-lg font-medium text-white/80 hover:text-gold-400 py-3 border-b border-white/10">Products</a>
        <a href="#quality" class="mobile-nav-link text-lg font-medium text-white/80 hover:text-gold-400 py-3 border-b border-white/10">Our Quality</a>
        <a href="#certifications" class="mobile-nav-link text-lg font-medium text-white/80 hover:text-gold-400 py-3 border-b border-white/10">Certifications</a>
        <a href="#blog" class="mobile-nav-link text-lg font-medium text-white/80 hover:text-gold-400 py-3 border-b border-white/10">Blog</a>
        <a href="#contact" class="mobile-nav-link text-lg font-medium text-white/80 hover:text-gold-400 py-3 border-b border-white/10">Contact</a>
        <a href="tel:+917990340545" class="flex items-center gap-2 text-gold-400 py-3 text-lg font-medium">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            +91 79903 40545
        </a>
        <a href="#contact" class="mt-2 px-6 py-3 bg-gold-500 text-white text-center font-semibold rounded-lg">Get a Quote</a>
    </div>
</div>
