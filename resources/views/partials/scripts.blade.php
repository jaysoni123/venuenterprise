{{-- ═══ ALL JAVASCRIPT ═══ --}}
<script>
document.addEventListener('DOMContentLoaded', function() {

    // ── Scroll Reveal ────────────────────────────────
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .timeline-step').forEach(el => {
        revealObserver.observe(el);
    });

    // ── Navbar scroll effect ─────────────────────────
    const navbar = document.getElementById('navbar');
    const topBar = document.getElementById('top-bar');
    const logoText = document.getElementById('nav-logo-text');
    function updateNavbar() {
        if (window.scrollY > 80) {
            navbar.classList.add('bg-navy-900/95', 'backdrop-blur-xl', 'shadow-xl', 'border-b', 'border-white/5');
            navbar.classList.remove('bg-transparent');
            if(topBar) topBar.classList.add('opacity-0', '-translate-y-full', 'absolute');
        } else {
            navbar.classList.remove('bg-navy-900/95', 'backdrop-blur-xl', 'shadow-xl', 'border-b', 'border-white/5');
            navbar.classList.add('bg-transparent');
            if(topBar) topBar.classList.remove('opacity-0', '-translate-y-full', 'absolute');
        }
    }
    updateNavbar();
    window.addEventListener('scroll', updateNavbar);

    // ── Mobile menu ──────────────────────────────────
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const drawer = document.getElementById('mobile-drawer');
    const iconOpen = document.getElementById('menu-icon-open');
    const iconClose = document.getElementById('menu-icon-close');
    mobileBtn.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();
        const isOpen = !drawer.classList.contains('translate-x-full');
        
        if (!isOpen) {
            // Open it
            drawer.classList.remove('translate-x-full');
            drawer.classList.add('translate-x-0');
            iconOpen.classList.add('hidden');
            iconClose.classList.remove('hidden');
        } else {
            // Close it
            drawer.classList.add('translate-x-full');
            drawer.classList.remove('translate-x-0');
            iconOpen.classList.remove('hidden');
            iconClose.classList.add('hidden');
        }
    });

    document.querySelectorAll('.mobile-nav-link').forEach(link => {
        link.addEventListener('click', () => {
            drawer.classList.add('translate-x-full');
            drawer.classList.remove('translate-x-0');
            iconOpen.classList.remove('hidden');
            iconClose.classList.add('hidden');
        });
    });

    // ── Counter animation ────────────────────────────
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const target = parseInt(el.dataset.target);
                if (!target || el.dataset.counted) return;
                el.dataset.counted = 'true';
                const duration = 2000;
                const steps = 60;
                const increment = target / steps;
                let current = 0;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    el.textContent = Math.floor(current).toLocaleString() + (target >= 100 ? '+' : '+');
                }, duration / steps);
                counterObserver.unobserve(el);
            }
        });
    }, { threshold: 0.5 });

    document.querySelectorAll('.counter-value').forEach(el => counterObserver.observe(el));

    // ── Product tabs ─────────────────────────────────
    document.querySelectorAll('.product-tab').forEach(tab => {
        tab.addEventListener('click', () => {
            const cat = tab.dataset.category;
            document.querySelectorAll('.product-tab').forEach(t => {
                t.classList.remove('bg-navy-900', 'text-white', 'shadow-lg');
                t.classList.add('bg-white', 'text-slate-600', 'border', 'border-slate-200');
            });
            tab.classList.add('bg-navy-900', 'text-white', 'shadow-lg');
            tab.classList.remove('bg-white', 'text-slate-600', 'border', 'border-slate-200');

            document.querySelectorAll('.product-card').forEach(card => {
                if (cat === 'all' || card.dataset.category === cat) {
                    card.style.display = '';
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        card.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 50);
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // ── Product modal ────────────────────────────────
    const products = [
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
    const modal = document.getElementById('product-modal');

    document.querySelectorAll('.product-detail-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const idx = parseInt(btn.dataset.product);
            const p = products[idx];
            if (!p) return;
            document.getElementById('modal-img').src = '/images/' + p[2] + '.png';
            document.getElementById('modal-img').alt = p[0];
            document.getElementById('modal-category').textContent = p[1].toUpperCase();
            document.getElementById('modal-name').textContent = p[0];
            document.getElementById('modal-desc').textContent = p[3];
            document.getElementById('modal-variety').textContent = p[5];
            document.getElementById('modal-packaging').textContent = p[6];
            document.getElementById('modal-hs').textContent = p[7];
            document.getElementById('modal-shipping').textContent = p[8];
            document.getElementById('modal-moq').textContent = p[9];
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    });

    document.getElementById('modal-close').addEventListener('click', () => {
        modal.classList.remove('active');
        document.body.style.overflow = '';
    });
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.remove('active');
            document.body.style.overflow = '';
        }
    });

    // ── Back to top ──────────────────────────────────
    const backBtn = document.getElementById('back-to-top');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 600) {
            backBtn.classList.remove('opacity-0', 'pointer-events-none');
            backBtn.classList.add('opacity-100');
        } else {
            backBtn.classList.add('opacity-0', 'pointer-events-none');
            backBtn.classList.remove('opacity-100');
        }
    });

    // ── Testimonials carousel ────────────────────────
    let currentTestimonial = 0;
    const totalTestimonials = 5;
    const track = document.getElementById('testimonial-track');

    window.goToTestimonial = function(idx) {
        currentTestimonial = idx;
        track.style.transform = `translateX(-${idx * 100}%)`;
        document.querySelectorAll('.testimonial-dot').forEach((dot, i) => {
            dot.classList.toggle('bg-gold-500', i === idx);
            dot.classList.toggle('w-8', i === idx);
            dot.classList.toggle('bg-slate-300', i !== idx);
            dot.classList.toggle('w-2.5', i !== idx);
        });
    };

    window.moveTestimonial = function(dir) {
        let next = currentTestimonial + dir;
        if (next < 0) next = totalTestimonials - 1;
        if (next >= totalTestimonials) next = 0;
        goToTestimonial(next);
    };

    // Auto-rotate testimonials
    setInterval(() => moveTestimonial(1), 6000);

}); // end DOMContentLoaded

// ── Accordion ────────────────────────────────────
function toggleAccordion(btn) {
    const content = btn.nextElementSibling;
    const icon = btn.querySelector('.accordion-icon');
    const isOpen = content.style.maxHeight && content.style.maxHeight !== '0px';

    // Close all
    document.querySelectorAll('.accordion-content').forEach(c => { c.style.maxHeight = '0px'; });
    document.querySelectorAll('.accordion-icon').forEach(i => { i.style.transform = 'rotate(0deg)'; });

    if (!isOpen) {
        content.style.maxHeight = content.scrollHeight + 'px';
        icon.style.transform = 'rotate(180deg)';
    }
}

// ── Lightbox ─────────────────────────────────────
function openLightbox(src, caption) {
    document.getElementById('lightbox-img').src = src;
    document.getElementById('lightbox-caption').textContent = caption;
    document.getElementById('lightbox').classList.add('active');
    document.body.style.overflow = 'hidden';
}
function closeLightbox() {
    document.getElementById('lightbox').classList.remove('active');
    document.body.style.overflow = '';
}
</script>
