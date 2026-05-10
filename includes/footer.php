<?php
$year = date('Y');
?>


<!-- ========== FOOTER ========== -->
<footer class="footer">
    <div class="container">
        <div class="footer-inner">
            <div>
              <div class="footer-logo">
    <span class="logo-v">V</span><span class="logo-rest">irex</span>
    <span class="logo-s">S</span><span class="logo-rest">ocial</span>
</div>
                <p class="footer-about">Virex Social is a digital agency that serves as a strategic partner, using creativity and innovation to enhance your online presence and drive impactful results.</p>
                <div class="footer-social">
                    <a href="#" class="social-btn">in</a>
                    <a href="#" class="social-btn">f</a>
                    <a href="#" class="social-btn">ig</a>
                </div>
            </div>
            <div>
                <h4 class="footer-heading">Quick Links</h4>
                <div class="footer-links">
                    <a href="index.php">Home</a>
                    <a href="about-our-company/">About Us</a>
                    <a href="careers/">Careers</a>
                    <a href="blogs/">Blog</a>
                    <a href="faq/">FAQs</a>
                    <a href="contact-us/">Contact Us</a>
                </div>
            </div>
            <div>
                <h4 class="footer-heading">Services</h4>
                <div class="footer-links">
                    <a href="web-development-service/">Web Design</a>
                    <a href="seo-services/">SEO</a>
                    <a href="ppc-services/">Pay Per Click</a>
                    <a href="smm-services/">Social Media</a>
                    <a href="video-editing-agency/">Video Editing</a>
                    <a href="app-development-service/">App Development</a>
                </div>
            </div>
            <div>
                <h4 class="footer-heading">Reach Us At</h4>
                <div class="footer-links">
                    <a href="mailto:contact@virexsocial.com">📧 contact@virexsocial.com</a>
                    <a href="#">📍 Dubai, UAE</a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>© Virex Social 2026 — All Rights Reserved.</p>
            <div class="footer-bottom-links">
                <a href="privacy-policy/">Privacy Policy</a>
                <a href="contact-us/">Contact Us</a>
            </div>
        </div>
    </div>
</footer>
<style> /* ─── FOOTER ─── */
        .footer { background:var(--dark); padding:80px 0 0; }
        .footer-inner { display:grid; grid-template-columns:1.5fr 1fr 1fr 1fr; gap:50px; margin-bottom:60px; }
       .footer-logo {
    font-family:'Syne',sans-serif;
    font-weight:800;
    font-size:28px;
    display:inline-block;
    margin-bottom:16px;
}
.footer-logo .logo-v {
    color:#f4b400;
}
.footer-logo .logo-s {
    color:#00c8cc;
}
.footer-logo .logo-rest {
    color:#ffffff;
}
        .footer-about { font-size:14px; line-height:1.8; color:rgba(255,255,255,.45); }
        .footer-heading { font-family:'Nunito',sans-serif; font-weight:800; font-size:16px; color:white; margin-bottom:20px; }
        .footer-links { display:flex; flex-direction:column; gap:12px; }
        .footer-links a { font-size:14px; color:rgba(255,255,255,.45); transition:color .3s; display:flex; align-items:center; gap:8px; }
        .footer-links a::before { content:''; width:0; height:1.5px; background:var(--purple-light); transition:width .3s; display:inline-block; vertical-align:middle; }
        .footer-links a:hover::before { width:12px; }
        .footer-links a:hover { color:var(--purple-light); padding-left:4px; }

        .footer-social { display:flex; gap:12px; margin-top:20px; }
        .social-btn {
            width:40px; height:40px; background:rgba(255,255,255,.08);
            border-radius:10px; display:flex; align-items:center; justify-content:center; transition:all .3s;
        }
        .social-btn svg { width:18px; height:18px; stroke:rgba(255,255,255,.5); stroke-width:1.8; fill:none; transition:stroke .3s; }
        .social-btn:hover { background:var(--purple); }
        .social-btn:hover svg { stroke:white; }

        .footer-bottom {
            border-top:1px solid rgba(255,255,255,.08); padding:24px 0;
            display:flex; align-items:center; justify-content:space-between;
        }
        .footer-bottom p { font-size:14px; color:rgba(255,255,255,.35); }
        .footer-bottom-links { display:flex; gap:24px; }
        .footer-bottom-links a { font-size:14px; color:rgba(255,255,255,.35); transition:color .3s; }
        .footer-bottom-links a:hover { color:var(--purple-light); }

        /* ─── BACK TO TOP ─── */
        #back-to-top {
            position:fixed; bottom:40px; right:40px;
            width:48px; height:48px;
            background:linear-gradient(135deg,var(--purple-light),var(--purple));
            color:white; border:none; border-radius:12px;
            cursor:pointer; display:none; align-items:center; justify-content:center;
            box-shadow:0 8px 24px rgba(98,84,231,.4); z-index:999; transition:all .3s;
        }
        #back-to-top svg { width:20px; height:20px; stroke:white; stroke-width:2.5; }
        #back-to-top.visible { display:flex; }
        #back-to-top:hover { transform:translateY(-4px); }
</style>