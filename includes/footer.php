<?php
/**
 * ╔══════════════════════════════════════════════╗
 * ║   VIREX SOCIAL — includes/footer.php        ║
 * ║   Usage: <?php include 'includes/footer.php'; ?> ║
 * ╚══════════════════════════════════════════════╝
 *
 * Include this at the VERY BOTTOM of every page,
 * just before </body>. It closes the body/html tags.
 *
 * Also includes:
 *  - Newsletter strip (above footer)
 *  - Full 4-col footer
 *  - Page-reveal animations (shared JS)
 *  - Counter animation (shared JS)
 *  - FAQ toggle (shared JS)
 *  - Scrolling marquee builder (shared JS)
 */
?>

<!-- ══════════════════════════════════════════
     NEWSLETTER SECTION
══════════════════════════════════════════ -->
<section class="newsletter-section">
    <div class="container">
        <div class="newsletter-inner-wrap">
            <div class="newsletter-orb n-orb-1"></div>
            <div class="newsletter-orb n-orb-2"></div>
            <div class="newsletter-inner">
                <div class="newsletter-text">
                    <h2>Newsletter Signup</h2>
                    <p>Stay updated with the latest trends, offers, and digital marketing insights.</p>
                </div>
                <form class="newsletter-form" onsubmit="return false;">
                    <input type="email" class="newsletter-input" placeholder="Enter your email address">
                    <button type="submit" class="newsletter-btn">
                        Subscribe
                        <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     FOOTER
══════════════════════════════════════════ -->
<footer class="footer">

    <!-- Background Orbs -->
    <div class="footer-orb f-orb-1"></div>
    <div class="footer-orb f-orb-2"></div>
    <div class="footer-orb f-orb-3"></div>

    <!-- Top Bar: Logo + Tagline + Socials -->
    <div class="footer-top-bar">
        <div class="container">
            <div class="footer-top-inner">
                <div class="footer-logo-wrap">
                    <div class="footer-logo-icon">V</div>
                    <div class="footer-logo-text">
                        <span class="logo-v-f">Virex </span><span class="logo-rest-f">Social</span>
                    </div>
                </div>
                <p class="footer-tagline">A strategic digital partner using creativity and innovation to enhance your online presence and drive real results.</p>
                <div class="footer-socials">
                    <a href="https://linkedin.com/company/virexsocial"  target="_blank" class="footer-social-btn" aria-label="LinkedIn">in</a>
                    <a href="https://facebook.com/virexsocial"           target="_blank" class="footer-social-btn" aria-label="Facebook">f</a>
                    <a href="https://instagram.com/virexsocial"          target="_blank" class="footer-social-btn" aria-label="Instagram">ig</a>
                    <a href="https://twitter.com/virexsocial"            target="_blank" class="footer-social-btn" aria-label="Twitter">tw</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main 4-Column Grid -->
    <div class="footer-main">
        <div class="container">
            <div class="footer-inner">

                <!-- Col 1: Newsletter -->
                <div>
                    <h4 class="footer-heading">Stay Updated</h4>
                    <p class="footer-about">Subscribe to our newsletter for the latest digital marketing tips, trends, and exclusive offers delivered straight to your inbox.</p>
                    <div class="footer-newsletter-mini">
                        <input type="email" class="footer-newsletter-input" placeholder="your@email.com">
                        <button class="footer-newsletter-btn">Subscribe</button>
                    </div>
                </div>

                <!-- Col 2: Quick Links -->
                <div>
                    <h4 class="footer-heading">Quick Links</h4>
                    <div class="footer-links">
                        <a href="/"><span class="fl-arrow"><svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>Home</a>
                        <a href="/about.php"><span class="fl-arrow"><svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>About Us</a>
                        <a href="/careers.php"><span class="fl-arrow"><svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>Careers</a>
                        <a href="/blog.php"><span class="fl-arrow"><svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>Blog</a>
                        <a href="/faqs.php"><span class="fl-arrow"><svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>FAQs</a>
                        <a href="/contact.php"><span class="fl-arrow"><svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>Contact Us</a>
                    </div>
                </div>

                <!-- Col 3: Services -->
                <div>
                    <h4 class="footer-heading">Services</h4>
                    <div class="footer-links">
                        <a href="/services/web-design.php"><span class="fl-arrow"><svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>Web Design</a>
                        <a href="/services/seo.php"><span class="fl-arrow"><svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>SEO</a>
                        <a href="/services/ppc.php"><span class="fl-arrow"><svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>Pay Per Click</a>
                        <a href="/services/social-media.php"><span class="fl-arrow"><svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>Social Media</a>
                        <a href="/services/video-editing.php"><span class="fl-arrow"><svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>Video Editing</a>
                        <a href="/services/app-development.php"><span class="fl-arrow"><svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>App Development</a>
                    </div>
                </div>

                <!-- Col 4: Contact -->
                <div>
                    <h4 class="footer-heading">Contact Us</h4>
                    <div class="footer-contact-item">
                        <div class="fci-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </div>
                        <div class="fci-text"><strong>Email</strong>contact@virexsocial.com</div>
                    </div>
                    <div class="footer-contact-item">
                        <div class="fci-icon warm">
                            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <div class="fci-text"><strong>Location</strong>Dubai, UAE</div>
                    </div>
                    <div class="footer-contact-item">
                        <div class="fci-icon warm">
                            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                        <div class="fci-text"><strong>Working Hours</strong>Mon – Sat, 9AM – 7PM</div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Gradient Divider -->
    <div class="footer-grad-line"></div>

    <!-- Bottom Bar -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-inner">
                <div class="footer-bottom-left">
                    <p>© Virex Social <?php echo date('Y'); ?> — All Rights Reserved.</p>
                    <div class="footer-bottom-badge">
                        <span class="footer-bottom-badge-dot"></span>
                        Proudly Based in UAE
                    </div>
                </div>
                <div class="footer-bottom-links">
                    <a href="/privacy.php">Privacy Policy</a>
                    <a href="/terms.php">Terms of Service</a>
                    <a href="/contact.php">Contact Us</a>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- ══ END FOOTER ══ -->

<!-- ══════════════════════════════════════════
     FOOTER + NEWSLETTER STYLES
══════════════════════════════════════════ -->
<style>
    /* ── Newsletter ── */
    .newsletter-section { padding: 0 0 90px; position:relative; z-index:2; background: white; }
    .newsletter-inner-wrap { background: var(--grad-main); border-radius:32px; padding:70px 70px; position:relative; overflow:hidden; }
    .newsletter-inner-wrap::before { content:''; position:absolute; inset:0; border-radius:32px; background: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.06'/%3E%3C/svg%3E"); background-size:200px 200px; pointer-events:none; }
    .newsletter-orb { position:absolute; border-radius:50%; filter:blur(60px); pointer-events:none; }
    .n-orb-1 { width:300px;height:300px; background:rgba(255,255,255,.1); top:-100px; right:-60px; }
    .n-orb-2 { width:200px;height:200px; background:rgba(251,191,36,.2); bottom:-80px; left:-40px; }
    .newsletter-inner { display:flex; align-items:center; justify-content:space-between; gap:50px; position:relative; z-index:1; }
    .newsletter-text h2 { color:white; margin-bottom:10px; font-size:clamp(24px,3vw,36px); font-family:'Clash Display',sans-serif; }
    .newsletter-text p { color:rgba(255,255,255,.85); font-size:16px; }
    .newsletter-form { display:flex; flex-shrink:0; box-shadow:0 8px 40px rgba(0,0,0,0.2); border-radius:14px; overflow:hidden; }
    .newsletter-input { background:rgba(255,255,255,0.18); border:none; border-right:1px solid rgba(255,255,255,0.15); padding:16px 26px; font-family:'Manrope',sans-serif; font-size:15px; color:white; outline:none; width:300px; transition:all .3s; }
    .newsletter-input:focus { background:rgba(255,255,255,0.25); }
    .newsletter-input::placeholder { color:rgba(255,255,255,.65); }
    .newsletter-btn { background:white; border:none; padding:16px 30px; font-family:'Clash Display',sans-serif; font-weight:700; font-size:15px; color:var(--purple); cursor:pointer; transition:all .3s; white-space:nowrap; display:flex; align-items:center; gap:8px; }
    .newsletter-btn:hover { background:rgba(255,255,255,.92); }
    .newsletter-btn svg { width:16px;height:16px; stroke:var(--purple); stroke-width:2.5; fill:none; }

    /* ── Footer wrapper ── */
    .footer { background: #0a061f; position:relative; z-index:2; overflow:hidden; }
    .footer-orb { position:absolute; border-radius:50%; filter:blur(120px); pointer-events:none; }
    .f-orb-1 { width:500px;height:500px; background:rgba(124,58,237,0.1);  top:-200px;   right:-100px; }
    .f-orb-2 { width:400px;height:400px; background:rgba(249,115,22,0.06); bottom:-150px; left:-100px;  }
    .f-orb-3 { width:300px;height:300px; background:rgba(37,99,235,0.07);  top:50%;       left:40%;     }

    /* ── Top bar ── */
    .footer-top-bar { border-bottom:1px solid rgba(255,255,255,0.05); padding:50px 0; }
    .footer-top-inner { display:flex; align-items:center; justify-content:space-between; gap:30px; flex-wrap:wrap; }
    .footer-logo-wrap { display:flex; align-items:center; gap:14px; }
    .footer-logo-icon { width:50px;height:50px; background:var(--grad-main); border-radius:14px; display:flex; align-items:center; justify-content:center; font-family:'Clash Display',sans-serif; font-weight:900; font-size:22px; color:white; box-shadow:0 6px 30px rgba(124,58,237,0.4); flex-shrink:0; }
    .footer-logo-text { font-family:'Clash Display',sans-serif; font-weight:700; font-size:28px; }
    .logo-v-f { background:var(--grad-main); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text; }
    .logo-rest-f { color:rgba(255,255,255,0.9); }

    /* ── FIXED: Footer tagline — was 0.35, now 0.65 ── */
    .footer-tagline { font-size:14px; color:rgba(255,255,255,0.65); max-width:340px; line-height:1.7; }

    .footer-socials { display:flex; gap:10px; }
    .footer-social-btn { width:46px;height:46px; background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.08); border-radius:13px; display:flex; align-items:center; justify-content:center; transition:all .3s; font-family:'Clash Display',sans-serif; font-weight:700; font-size:13px; color:rgba(255,255,255,.6); text-decoration:none; }
    .footer-social-btn:hover { background:var(--grad-main); border-color:transparent; color:white; transform:translateY(-3px); box-shadow:0 8px 25px rgba(124,58,237,.35); }

    /* ── Main grid ── */
    .footer-main { padding:60px 0; border-bottom:1px solid rgba(255,255,255,0.05); }
    .footer-inner { display:grid; grid-template-columns:2fr 1fr 1fr 1.3fr; gap:60px; position:relative; z-index:1; }
    .footer-heading { font-family:'Clash Display',sans-serif; font-weight:700; font-size:16px; color:rgba(255,255,255,.9); margin-bottom:24px; display:flex; align-items:center; gap:8px; }
    .footer-heading::before { content:''; width:14px; height:3px; background:var(--grad-main); border-radius:2px; display:block; }

    /* ── FIXED: About text — was 0.30, now 0.60 ── */
    .footer-about { font-size:14px; line-height:1.9; color:rgba(255,255,255,.60); margin-bottom:28px; }

    .footer-newsletter-mini { display:flex; overflow:hidden; border-radius:12px; border:1px solid rgba(255,255,255,0.1); }
    .footer-newsletter-input { flex:1; background:rgba(255,255,255,0.05); border:none; padding:13px 16px; font-family:'Manrope',sans-serif; font-size:13px; color:white; outline:none; }
    .footer-newsletter-input::placeholder { color:rgba(255,255,255,.4); }
    .footer-newsletter-btn { background:var(--grad-warm); border:none; padding:13px 18px; font-family:'Clash Display',sans-serif; font-weight:700; font-size:12px; color:white; cursor:pointer; transition:opacity .2s; white-space:nowrap; }
    .footer-newsletter-btn:hover { opacity:.88; }

    /* ── FIXED: Footer links — was 0.30, now 0.70 ── */
    .footer-links { display:flex; flex-direction:column; gap:14px; }
    .footer-links a { font-size:14px; color:rgba(255,255,255,.70); transition:all .3s; display:flex; align-items:center; gap:9px; text-decoration:none; }
    .footer-links a .fl-arrow { width:16px;height:16px; background:rgba(124,58,237,0.2); border-radius:4px; display:flex; align-items:center; justify-content:center; flex-shrink:0; transition:all .3s; }
    .footer-links a .fl-arrow svg { width:8px;height:8px; stroke:rgba(124,58,237,0.6); stroke-width:2.5; }
    .footer-links a:hover { color:white; padding-left:4px; }
    .footer-links a:hover .fl-arrow { background:var(--grad-main); }
    .footer-links a:hover .fl-arrow svg { stroke:white; }

    /* ── FIXED: Contact items — was 0.35, now 0.65 ── */
    .footer-contact-item { display:flex; align-items:flex-start; gap:12px; margin-bottom:18px; }
    .fci-icon { width:36px;height:36px; background:rgba(124,58,237,0.15); border-radius:10px; display:flex; align-items:center; justify-content:center; flex-shrink:0; }
    .fci-icon svg { width:16px;height:16px; stroke:rgba(164,120,255,0.8); }
    .fci-icon.warm { background:rgba(249,115,22,0.12); }
    .fci-icon.warm svg { stroke:rgba(249,180,100,0.8); }
    .fci-text { font-size:13.5px; color:rgba(255,255,255,.65); line-height:1.6; }

    /* ── FIXED: Contact strong labels — was 0.65, now 0.90 ── */
    .fci-text strong { display:block; color:rgba(255,255,255,.90); font-family:'Clash Display',sans-serif; font-size:13px; margin-bottom:2px; }

    /* ── Divider + Bottom ── */
    .footer-grad-line { height:2px; background:var(--grad-main); opacity:.4; }
    .footer-bottom { padding:28px 0; position:relative; z-index:1; }
    .footer-bottom-inner { display:flex; align-items:center; justify-content:space-between; gap:20px; flex-wrap:wrap; }
    .footer-bottom-left { display:flex; align-items:center; gap:20px; flex-wrap:wrap; }

    /* ── FIXED: Copyright text — was 0.20, now 0.50 ── */
    .footer-bottom p { font-size:13.5px; color:rgba(255,255,255,.50); }

    .footer-bottom-badge { display:flex; align-items:center; gap:7px; background:rgba(249,115,22,0.1); border:1px solid rgba(249,115,22,0.2); color:rgba(249,180,100,0.7); font-size:11px; font-weight:700; padding:5px 12px; border-radius:50px; letter-spacing:.5px; }
    .footer-bottom-badge-dot { width:5px;height:5px;border-radius:50%;background:#f97316;animation:pulse 2s infinite; }
    .footer-bottom-links { display:flex; gap:24px; flex-wrap:wrap; }

    /* ── FIXED: Bottom links — was 0.20, now 0.55 ── */
    .footer-bottom-links a { font-size:13px; color:rgba(255,255,255,.55); transition:color .3s; text-decoration:none; }
    .footer-bottom-links a:hover { color:rgba(255,255,255,.90); }

    /* ── Responsive ── */
    @media(max-width:1100px) { .footer-inner { grid-template-columns:1fr 1fr; gap:40px; } }
    @media(max-width:768px)  { .footer-top-inner { flex-direction:column; align-items:flex-start; } .newsletter-inner { flex-direction:column; text-align:center; } }
    @media(max-width:600px)  {
        .footer-inner { grid-template-columns:1fr; }
        .newsletter-inner-wrap { padding:40px 24px; }
        .newsletter-form { flex-direction:column; width:100%; }
        .newsletter-input { border-right:none; border-bottom:1px solid rgba(255,255,255,0.15); width:100%; }
        .newsletter-btn { justify-content:center; }
        .footer-bottom-inner { flex-direction:column; align-items:flex-start; }
    }
</style>

<!-- ══════════════════════════════════════════
     SHARED PAGE JS (counters, FAQ, reveal)
══════════════════════════════════════════ -->
<script>
// ── Counter animation
function animateCounter(el) {
    const target = parseInt(el.dataset.count);
    const supEl  = el.querySelector('sup');
    const suffix = supEl ? supEl.outerHTML : '';
    let start = 0;
    const step = target / (1800 / 16);
    const t = setInterval(function(){
        start = Math.min(start + step, target);
        el.innerHTML = Math.floor(start).toLocaleString() + suffix;
        if (start >= target) clearInterval(t);
    }, 16);
}
const counterObs = new IntersectionObserver(function(entries){
    entries.forEach(function(e){
        if (e.isIntersecting) { animateCounter(e.target); counterObs.unobserve(e.target); }
    });
}, { threshold: 0.5 });
document.querySelectorAll('[data-count]').forEach(function(c){ counterObs.observe(c); });

// ── FAQ accordion
function toggleFaq(q) {
    const item   = q.parentElement;
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item.open').forEach(function(i){ i.classList.remove('open'); });
    if (!isOpen) item.classList.add('open');
}

// ── Scroll reveal
const revealObs = new IntersectionObserver(function(entries){
    entries.forEach(function(e, i){
        if (e.isIntersecting) {
            setTimeout(function(){ e.target.style.opacity='1'; e.target.style.transform='translateY(0)'; }, i * 75);
            revealObs.unobserve(e.target);
        }
    });
}, { threshold: 0.07 });
document.querySelectorAll(
    '.service-card, .process-card, .testimonial-card, .faq-item, ' +
    '.about-feature, .contact-item, .footer-contact-item, .brand-card'
).forEach(function(el){
    el.style.opacity   = '0';
    el.style.transform = 'translateY(26px)';
    el.style.transition= 'opacity .65s ease, transform .65s ease';
    revealObs.observe(el);
});

// ── Scrolling Marquee (used on homepage — safe to call on all pages)
(function(){
    var t1 = document.getElementById('scrollTrack1');
    var t2 = document.getElementById('scrollTrack2');
    if (!t1 || !t2) return; // only runs if marquee exists on page

    var row1 = [
        { text:'Website Designing',     style:'style-b', icon:'<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>' },
        { text:'WordPress Development', style:'style-a', icon:'<rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/>' },
        { text:'Digital Marketing',     style:'style-c', icon:'<polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/>' },
        { text:'SEO Services',          style:'style-d', icon:'<circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>' },
        { text:'UI/UX Design',          style:'style-e', icon:'<path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/>' },
        { text:'Brand Strategy',        style:'style-b', icon:'<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>' },
        { text:'Social Media',          style:'style-c', icon:'<path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>' },
        { text:'Video Editing',         style:'style-a', icon:'<polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2"/>' },
    ];
    var row2 = [
        { text:'Meta Ads',             style:'style-c', icon:'<path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>' },
        { text:'Content Creation',     style:'style-d', icon:'<path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/>' },
        { text:'Email Marketing',      style:'style-b', icon:'<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>' },
        { text:'App Development',      style:'style-a', icon:'<rect x="5" y="2" width="14" height="20" rx="2"/><line x1="12" y1="18" x2="12.01" y2="18"/>' },
        { text:'PPC Advertising',      style:'style-e', icon:'<line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/>' },
        { text:'Online Reputation',    style:'style-c', icon:'<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>' },
        { text:'Graphic Design',       style:'style-b', icon:'<circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="3"/>' },
        { text:'Snapchat Management',  style:'style-d', icon:'<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>' },
    ];

    function buildRow(items) {
        var h = '';
        for (var r = 0; r < 4; r++) {
            items.forEach(function(item){
                h += '<div class="scroll-item">' +
                     '<span class="scroll-pill ' + item.style + '">' +
                     '<span class="scroll-pill-icon"><svg viewBox="0 0 24 24" fill="none">' + item.icon + '</svg></span>' +
                     item.text + '</span>' +
                     '<span class="scroll-sep-star">✦</span></div>';
            });
        }
        return h;
    }
    t1.innerHTML = buildRow(row1);
    t2.innerHTML = buildRow(row2);
})();
</script>

</body>
</html>