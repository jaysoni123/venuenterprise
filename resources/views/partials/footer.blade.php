{{-- ═══ FOOTER ═══ --}}
<footer class="bg-navy-900 pt-16 pb-6 border-t border-white/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
            {{-- About --}}
            <div>
                <div class="flex items-center gap-2 mb-5">
                    <div class="w-10 h-10 rounded-full bg-gold-500 flex items-center justify-center">
                        <span class="text-white font-serif font-bold text-lg">V</span>
                    </div>
                    <div>
                        <span class="text-lg font-serif font-bold text-white">VENU</span>
                        <span class="block text-[9px] uppercase tracking-[0.2em] text-gold-300 -mt-1">Enterprise</span>
                    </div>
                </div>
                <p class="text-slate-400 text-sm leading-relaxed mb-5">Your trusted partner in global trade. Premium Indian agro products, spices, and engineering goods — exported with confidence.</p>
                <div class="flex gap-3">
                    @foreach(['M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z','M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z','M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.897 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.897-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03z'] as $icon)
                    <a href="#" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center hover:bg-gold-500 transition-colors group">
                        <svg class="w-4 h-4 text-slate-400 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24"><path d="{{ $icon }}"/></svg>
                    </a>
                    @endforeach
                </div>
            </div>

            {{-- Quick Links --}}
            <div>
                <h4 class="text-white font-semibold mb-5">Quick Links</h4>
                <ul class="space-y-3">
                    @foreach(['Home' => '#home', 'About Us' => '#about', 'Products' => '#products', 'Our Quality' => '#quality', 'Certifications' => '#certifications', 'Blog' => '#blog', 'Contact' => '#contact'] as $label => $href)
                    <li><a href="{{ $href }}" class="text-slate-400 text-sm hover:text-gold-400 transition-colors">{{ $label }}</a></li>
                    @endforeach
                </ul>
            </div>

            {{-- Products --}}
            <div>
                <h4 class="text-white font-semibold mb-5">Our Products</h4>
                <ul class="space-y-3">
                    @foreach(['Basmati Rice','Red Onion','Groundnuts','Turmeric Powder','Red Chili','Cumin Seeds','Steel Fasteners','Brass Fittings','Industrial Valves'] as $product)
                    <li><a href="#products" class="text-slate-400 text-sm hover:text-gold-400 transition-colors">{{ $product }}</a></li>
                    @endforeach
                </ul>
            </div>

            {{-- Contact + Map --}}
            <div>
                <h4 class="text-white font-semibold mb-5">Contact Info</h4>
                <div class="space-y-3 text-sm text-slate-400 mb-5">
                    <p>📍 712, 7th Floor, Meghmalhar Complex, Sector-11, Gandhinagar, Gujarat 382010</p>
                    <p>📞 +91 79903 40545</p>
                    <p>✉️ info@venuindia.com</p>
                </div>
                {{-- Map embed --}}
                <div class="rounded-xl overflow-hidden border border-white/10 h-32">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.6!2d72.65!3d23.22!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDEzJzEyLjAiTiA3MsKwMzknMDAuMCJF!5e0!3m2!1sen!2sin!4v1" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="opacity-70"></iframe>
                </div>
            </div>
        </div>

        {{-- Newsletter --}}
        <div class="border-t border-white/10 pt-8 pb-6 mb-6">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                <div>
                    <h4 class="text-white font-semibold">Stay Updated</h4>
                    <p class="text-slate-400 text-sm">Subscribe for new products, price updates, and trade insights.</p>
                </div>
                <div class="flex gap-2 w-full sm:w-auto">
                    <input type="email" placeholder="Your email" class="flex-1 sm:w-64 px-4 py-2.5 rounded-lg bg-white/10 border border-white/10 text-white text-sm outline-none focus:border-gold-500 placeholder-slate-500">
                    <button type="button" class="px-6 py-2.5 bg-gold-500 text-white text-sm font-semibold rounded-lg hover:bg-gold-400 transition-colors">Subscribe</button>
                </div>
            </div>
        </div>

        {{-- Bottom --}}
        <div class="border-t border-white/10 pt-6 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-slate-500 text-sm">© 2026 Venu Enterprise. All rights reserved.</p>
            <div class="flex gap-6 text-sm text-slate-500">
                <a href="#" class="hover:text-gold-400 transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-gold-400 transition-colors">Terms & Conditions</a>
            </div>
        </div>
    </div>
</footer>
