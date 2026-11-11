<?php

declare(strict_types=1);
?>
<!-- FOOTER (Biru Brand Konsisten #076aa7) -->
<footer class="bg-primary-container text-white border-t border-primary/20 docked full-width bottom-0 mt-auto">
    <div class="w-full max-w-[1240px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop py-space-xl">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 pb-12 border-b border-white/20">
            <!-- Brand identity kolom 4 -->
            <div class="lg:col-span-4 space-y-4">
                <div class="bg-white px-4 py-3 inline-flex items-center gap-3.5 rounded-xl shadow-sm">
                    <img
                        alt=""
                        aria-hidden="true"
                        class="h-9 w-auto shrink-0 object-contain"
                        height="36"
                        src="<?= e(app_url('/images/brand/logo-dpp.png')) ?>"
                        width="52"
                    />
                    <div>
                        <span class="text-base font-headline-sm text-text-body tracking-tight uppercase block leading-tight font-extrabold">Dunia Pool &amp; Pond</span>
                        <span class="text-[11px] text-text-muted tracking-wide font-semibold block">The Pool Specialist — Est. 1997</span>
                    </div>
                </div>
                <p class="text-sm text-white/90 leading-relaxed">
                    Spesialis konstruksi kolam renang, perancangan hidrolika, pengadaan peralatan filter, dan pemeliharaan air profesional.
                </p>
                <div class="text-xs text-white/85 space-y-1.5 pt-1">
                    <p class="flex items-start gap-2">
                        <span aria-hidden="true" class="material-symbols-outlined text-[15px] text-primary-fixed mt-0.5 shrink-0">location_on</span>
                        <a class="hover:text-white underline decoration-primary-fixed/50 hover:decoration-white transition-colors" href="https://www.google.com/maps/place/Alat+Kolam+Renang+Bandung+Barat/data=!4m2!3m1!1s0x2e68e331a6058d93:0x6f8552486c06e786?sa=X&amp;ved=1t:242&amp;hl=id&amp;ictx=111" rel="noopener noreferrer" target="_blank">Padalarang, Kabupaten Bandung Barat, Jawa Barat</a>
                    </p>
                    <p class="flex items-center gap-2">
                        <span aria-hidden="true" class="material-symbols-outlined text-[15px] text-primary-fixed">schedule</span>
                        <span>Senin – Sabtu, 08:00 – 17:00 WIB</span>
                    </p>
                    <p class="flex items-center gap-2">
                        <span aria-hidden="true" class="material-symbols-outlined text-[15px] text-primary-fixed">call</span>
                        <span>WhatsApp: +6282118075560</span>
                    </p>
                </div>
            </div>
            <!-- Kolom Navigasi Cepat -->
            <div class="lg:col-span-2 space-y-3">
                <p class="text-xs font-bold uppercase tracking-widest text-white">Navigasi</p>
                <ul class="space-y-2 text-sm text-white/85">
                    <li><a class="hover:text-white transition-colors" href="<?= e(app_url('/')) ?>">Beranda</a></li>
                    <li><a class="hover:text-white transition-colors" href="<?= e(app_url('/#tentang-kami')) ?>">Tentang Kami</a></li>
                    <li><a class="hover:text-white transition-colors" href="<?= e(app_url('/layanan')) ?>">Layanan Hidrolika</a></li>
                    <li><a class="hover:text-white transition-colors" href="<?= e(app_url('/#proyek')) ?>">Dokumentasi Proyek</a></li>
                    <li><a class="hover:text-white transition-colors" href="<?= e(app_url('/#manajemen-proyek')) ?>">Manajemen Proyek</a></li>
                    <li><a class="hover:text-white transition-colors" href="<?= e(app_url('/produk')) ?>">Katalog Produk</a></li>
                    <li><a class="hover:text-white transition-colors" href="<?= e(app_url('/#kontak')) ?>">Kontak Teknis</a></li>
                </ul>
            </div>
            <!-- Kolom Layanan Spesifik -->
            <div class="lg:col-span-3 space-y-3">
                <p class="text-xs font-bold uppercase tracking-widest text-white">Layanan &amp; Produk</p>
                <ul class="space-y-2 text-sm text-white/85">
                    <li><a class="hover:text-white transition-colors" href="<?= e(app_url('/#layanan')) ?>">Desain &amp; Konsultasi</a></li>
                    <li><a class="hover:text-white transition-colors" href="<?= e(app_url('/#layanan')) ?>">Konstruksi Kolam Renang</a></li>
                    <li><a class="hover:text-white transition-colors" href="<?= e(app_url('/#layanan')) ?>">Renovasi &amp; Perbaikan</a></li>
                    <li><a class="hover:text-white transition-colors" href="<?= e(app_url('/layanan')) ?>">Sistem Sirkulasi &amp; Filtrasi</a></li>
                    <li><a class="hover:text-white transition-colors" href="<?= e(app_url('/produk#pompa')) ?>">Pompa Sirkulasi Kolam</a></li>
                    <li><a class="hover:text-white transition-colors" href="<?= e(app_url('/produk#chemical')) ?>">Perawatan &amp; Bahan Kimia</a></li>
                </ul>
            </div>
            <!-- Kolom Legal & Saluran Resmi -->
            <div class="lg:col-span-3 space-y-3">
                <p class="text-xs font-bold uppercase tracking-widest text-white">Kontak &amp; Sosial</p>
                <p class="text-sm text-white/90 leading-relaxed">
                    WhatsApp Resmi:<br />
                    <a class="text-white font-bold underline decoration-primary-fixed/70 hover:decoration-white" href="https://wa.me/6282118075560" rel="noopener noreferrer" target="_blank">
                        0821-1807-5560
                    </a>
                </p>
                <p class="text-sm text-white/90">
                    Instagram:<br />
                    <a class="text-white font-bold underline decoration-primary-fixed/70 hover:decoration-white" href="https://www.instagram.com/duniapoolnpond/" rel="noopener noreferrer" target="_blank">
                        @duniapoolnpond
                    </a>
                </p>
                <div class="pt-2 text-xs text-white/80 leading-relaxed">
                    Tersedia untuk konsultasi teknis spesifik &amp; pemeriksaan hidrolika di wilayah Bandung Raya, Jawa Barat &amp; proyek khusus antar kota.
                </div>
            </div>
        </div>
        <!-- Copyright Bottom Bar -->
        <div class="pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-white/85 gap-4">
            <p>© 1997–<?= e(date('Y')) ?> Dunia Pool &amp; Pond. The Pool Specialist. Padalarang, Bandung Barat.</p>
            <div class="flex space-x-6">
                <a class="hover:text-white transition-colors" href="<?= e(app_url('/kebijakan-privasi')) ?>">Kebijakan Privasi</a>
                <a class="hover:text-white transition-colors" href="<?= e(app_url('/ketentuan-layanan')) ?>">Ketentuan Layanan</a>
            </div>
        </div>
    </div>
</footer>
<!-- Back to top button -->
<button
    aria-label="Kembali ke atas halaman"
    class="fixed bottom-6 right-6 z-40 w-11 h-11 rounded-full bg-primary-container hover:bg-action-hover text-white border border-white/30 shadow-lg flex items-center justify-center opacity-0 pointer-events-none translate-y-2 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary-container focus:ring-offset-2"
    id="backToTopBtn"
    title="Kembali ke atas"
    type="button"
>
    <span aria-hidden="true" class="material-symbols-outlined text-xl">keyboard_arrow_up</span>
</button>
<script>
    (function () {
        const mobileBtn = document.getElementById('mobileMenuBtn');
        const mobileNav = document.getElementById('mobileMenu');
        if (mobileBtn && mobileNav) {
            mobileBtn.addEventListener('click', () => {
                const isHidden = mobileNav.classList.toggle('hidden');
                mobileBtn.setAttribute('aria-expanded', String(!isHidden));
            });
            mobileNav.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileNav.classList.add('hidden');
                    mobileBtn.setAttribute('aria-expanded', 'false');
                });
            });
        }

        const backToTopBtn = document.getElementById('backToTopBtn');
        if (backToTopBtn) {
            const toggleBackToTop = () => {
                if (window.scrollY > 420) {
                    backToTopBtn.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-2');
                    backToTopBtn.classList.add('opacity-100', 'translate-y-0');
                } else {
                    backToTopBtn.classList.add('opacity-0', 'pointer-events-none', 'translate-y-2');
                    backToTopBtn.classList.remove('opacity-100', 'translate-y-0');
                }
            };
            window.addEventListener('scroll', toggleBackToTop, { passive: true });
            toggleBackToTop();
            backToTopBtn.addEventListener('click', () => {
                window.scrollTo({ top: 0, behavior: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 'auto' : 'smooth' });
            });
        }

        const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        const desktopNav = document.getElementById('desktopNav');
        const navSlider = document.getElementById('navActiveSlider');
        const desktopLinks = desktopNav ? Array.from(desktopNav.querySelectorAll('.nav-link')) : [];
        const mobileLinks = Array.from(document.querySelectorAll('.mobile-nav-link'));
        let activeNavKey = desktopNav ? (desktopNav.getAttribute('data-initial-active') || '') : '';

        if (navSlider && prefersReduced) {
            navSlider.classList.remove('transition-all', 'duration-200', 'ease-out');
        }

        function positionNavSlider(targetLink) {
            if (!desktopNav || !navSlider) return;
            if (!targetLink || desktopNav.offsetParent === null) {
                navSlider.style.opacity = '0';
                return;
            }
            const left = targetLink.offsetLeft;
            const width = targetLink.offsetWidth;
            navSlider.style.transform = `translateX(${left}px)`;
            navSlider.style.width = `${width}px`;
            navSlider.style.opacity = '1';
        }

        function setActiveNav(key) {
            if (!key && activeNavKey === '') {
                positionNavSlider(null);
                return;
            }
            activeNavKey = key;
            let activeDesktopLink = null;

            desktopLinks.forEach(link => {
                const isMatch = link.getAttribute('data-nav-key') === key;
                link.classList.remove('border-primary', 'dark:border-inverse-primary');
                link.classList.add('border-transparent');
                if (isMatch) {
                    link.classList.remove('text-text-muted', 'dark:text-outline-variant');
                    link.classList.add('text-primary', 'dark:text-inverse-primary', 'font-semibold');
                    link.setAttribute('aria-current', 'page');
                    activeDesktopLink = link;
                } else {
                    link.classList.remove('text-primary', 'dark:text-inverse-primary', 'font-semibold');
                    link.classList.add('text-text-muted', 'dark:text-outline-variant');
                    link.removeAttribute('aria-current');
                }
            });

            mobileLinks.forEach(link => {
                const isMatch = link.getAttribute('data-nav-key') === key;
                if (isMatch) {
                    link.classList.remove('text-text-body', 'border-transparent');
                    link.classList.add('text-primary', 'border-primary', 'font-semibold');
                    link.setAttribute('aria-current', 'page');
                } else {
                    link.classList.remove('text-primary', 'border-primary', 'font-semibold');
                    link.classList.add('text-text-body', 'border-transparent');
                    link.removeAttribute('aria-current');
                }
            });

            requestAnimationFrame(() => positionNavSlider(activeDesktopLink));
        }

        if (desktopLinks.length > 0) {
            setActiveNav(activeNavKey);
            window.addEventListener('resize', () => {
                const currentLink = desktopLinks.find(l => l.getAttribute('data-nav-key') === activeNavKey) || null;
                positionNavSlider(currentLink);
            });
            if (document.fonts && document.fonts.ready) {
                document.fonts.ready.then(() => {
                    const currentLink = desktopLinks.find(l => l.getAttribute('data-nav-key') === activeNavKey) || null;
                    positionNavSlider(currentLink);
                });
            }
        }

        const sectionMappings = [
            { id: 'beranda', key: 'beranda' },
            { id: 'tentang-kami', key: 'tentang' },
            { id: 'layanan', key: 'layanan' },
            { id: 'proyek', key: 'proyek' },
            { id: 'manajemen-proyek', key: 'manajemen' },
            { id: 'produk', key: 'produk' },
            { id: 'konsultasi', key: 'kontak' },
        ].map(item => ({
            key: item.key,
            el: document.getElementById(item.id),
        })).filter(item => item.el !== null);

        if (sectionMappings.length > 1) {
            const headerEl = document.querySelector('header');
            let scrollTicking = false;

            const updateScrollSpy = () => {
                scrollTicking = false;
                const headerHeight = headerEl ? headerEl.offsetHeight : 80;
                const triggerOffset = headerHeight + 56;
                const nearBottom = (window.innerHeight + window.scrollY) >= (document.documentElement.scrollHeight - 40);

                let nextKey = sectionMappings[0].key;
                if (nearBottom) {
                    nextKey = sectionMappings[sectionMappings.length - 1].key;
                } else {
                    for (let i = 0; i < sectionMappings.length; i++) {
                        const rect = sectionMappings[i].el.getBoundingClientRect();
                        if (rect.top <= triggerOffset) {
                            nextKey = sectionMappings[i].key;
                        }
                    }
                }

                if (nextKey !== activeNavKey) {
                    setActiveNav(nextKey);
                }
            };

            window.addEventListener('scroll', () => {
                if (!scrollTicking) {
                    scrollTicking = true;
                    requestAnimationFrame(updateScrollSpy);
                }
            }, { passive: true });
            window.addEventListener('hashchange', () => setTimeout(updateScrollSpy, 60));
            window.addEventListener('load', updateScrollSpy);
            updateScrollSpy();
        }

        const sectionParam = new URLSearchParams(window.location.search).get('section');
        if (sectionParam) {
            const targetSection = document.getElementById(sectionParam);
            if (targetSection) {
                requestAnimationFrame(() => targetSection.scrollIntoView({ behavior: prefersReduced ? 'auto' : 'smooth' }));
            }
        }

        const revealEls = document.querySelectorAll('.reveal-item');
        if (!prefersReduced && 'IntersectionObserver' in window && revealEls.length > 0) {
            const observer = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove('is-hidden-reveal');
                        entry.target.classList.add('is-visible-reveal');
                        obs.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.08, rootMargin: '0px 0px -30px 0px' });

            revealEls.forEach(el => {
                const rect = el.getBoundingClientRect();
                if (rect.top > window.innerHeight * 0.95) {
                    el.classList.add('is-hidden-reveal');
                    observer.observe(el);
                } else {
                    el.classList.add('is-visible-reveal');
                }
            });
        }
    })();
</script>
<?php if (!empty($pageScripts)): ?>
    <?= $pageScripts ?>
<?php endif; ?>
</body>
</html>

