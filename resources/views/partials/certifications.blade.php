{{-- ═══ CERTIFICATIONS ═══ --}}
<section id="certifications" class="py-20 lg:py-28 bg-cream-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 reveal">
            <span class="text-gold-500 text-sm font-semibold uppercase tracking-[0.15em]">Certifications & Licenses</span>
            <h2 class="text-3xl lg:text-4xl font-serif font-bold text-navy-900 mt-3 mb-4">Trust Built on Credentials</h2>
            <p class="text-slate-600 max-w-2xl mx-auto">Every certification we hold is a promise to our buyers — verified quality, legal compliance, and international readiness.</p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                ['IEC','Import Export Code','bg-indigo-100','text-indigo-600','DGFT-certified IEC holder enabling direct international trade. Registered with the Directorate General of Foreign Trade, Government of India.','IEC-XXXXXXXXXX','Active'],
                ['FSSAI','Food Safety License','bg-blue-100','text-blue-600','Licensed under the Food Safety and Standards Authority of India. All food products meet stringent safety and hygiene standards for export.','FSSAI-XXXXXXXXXX','Valid till 2028'],
                ['ISO 22000','Food Safety Management','bg-amber-100','text-amber-600','Internationally recognized food safety management certification. Our processes comply with global HACCP-based standards.','ISO 22000:2018','Certified'],
                ['APEDA','Agricultural Export Authority','bg-green-100','text-green-600','Registered with Agricultural & Processed Food Products Export Development Authority for all agro and food product exports.','APEDA-RCMC-XXXX','Active'],
                ['BIS','Bureau of Indian Standards','bg-red-100','text-red-600','BIS certification for engineering goods and industrial products, ensuring compliance with Indian manufacturing quality standards.','IS:XXXXX','Certified'],
                ['FIEO','Federation of Exporters','bg-teal-100','text-teal-600','Member of the Federation of Indian Export Organisations — India\'s apex body for export promotion and international trade facilitation.','FIEO-XXXX-GJ','Active Member']
            ] as $idx => $cert)
            <div class="reveal group" style="transition-delay:{{ $idx * 0.08 }}s">
                <div class="bg-white rounded-2xl border border-slate-100 p-8 hover:shadow-xl hover:border-gold-300/50 transition-all duration-500 h-full">
                    <div class="flex items-start justify-between mb-5">
                        <div class="w-14 h-14 rounded-2xl {{ $cert[2] }} flex items-center justify-center">
                            <span class="text-lg font-bold {{ $cert[3] }}">{{ substr($cert[0], 0, 2) }}</span>
                        </div>
                        <span class="px-3 py-1 bg-green-50 text-green-600 text-xs font-semibold rounded-full">{{ $cert[6] }}</span>
                    </div>
                    <h3 class="text-lg font-bold text-navy-900 mb-1">{{ $cert[0] }}</h3>
                    <p class="text-sm text-gold-500 font-medium mb-3">{{ $cert[1] }}</p>
                    <p class="text-sm text-slate-500 leading-relaxed mb-4">{{ $cert[4] }}</p>
                    <div class="pt-4 border-t border-slate-100">
                        <span class="text-xs text-slate-400">Certificate No.</span>
                        <p class="text-sm font-mono text-navy-900 font-medium">{{ $cert[5] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
