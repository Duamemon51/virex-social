<?php include 'includes/header.php'; ?>
<style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  
    html { scroll-behavior: smooth; }
    body {
        font-family: 'Manrope', sans-serif;
        color: var(--text);
        background: var(--bg);
        overflow-x: hidden;
    }
    h1,h2,h3,h4,h5,h6 {
        font-family: 'Clash Display', 'Syne', sans-serif;
        font-weight: 700;
        color: var(--text-strong);
    }
    a { text-decoration: none; color: inherit; }
    p { color: var(--text); }
    .container { max-width: 1220px; margin: 0 auto; padding: 0 32px; width: 100%; }

    .grad-text {
        background: var(--grad-main);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* ══ SECTION COMMONS ══ */
    .section-label { display:inline-flex; align-items:center; gap:9px; font-family:'Manrope',sans-serif; font-weight:700; font-size:11px; letter-spacing:3px; text-transform:uppercase; margin-bottom:14px; color:var(--purple); }
    .section-label .sl-dot { display:flex; gap:3px; }
    .section-label .sl-dot span { width:5px;height:5px;border-radius:50%;background:currentColor;animation:dotBlink 1.5s infinite; }
    .section-label .sl-dot span:nth-child(2) { animation-delay:0.2s; }
    .section-label .sl-dot span:nth-child(3) { animation-delay:0.4s; }
    @keyframes dotBlink { 0%,100%{opacity:0.3} 50%{opacity:1} }
    .section-title { font-family:'Clash Display',sans-serif; font-size:clamp(28px,4.2vw,50px); line-height:1.12; margin-bottom:18px; letter-spacing:-0.5px; color:var(--text-strong); }

    @keyframes pulse { 0%,100%{opacity:1;transform:scale(1)} 50%{opacity:.6;transform:scale(1.4)} }
    @keyframes orbFloat { 0%,100%{transform:translateY(0) scale(1)} 50%{transform:translateY(-30px) scale(1.05)} }

   /* ══ PAGE HERO (COPILOT LIGHT SYSTEM) ══ */
.page-hero {
    padding: 160px 0 100px;
    position: relative;
    overflow: hidden;
    text-align: center;

    /* Light Copilot gradient background */
    background: linear-gradient(155deg,
        #F0E8FF 0%,
        #F8F0FF 20%,
        #FFF0FA 40%,
        #FFF4F0 65%,
        #FFF9F0 85%,
        #FDF8FF 100%
    );
}

/* Soft glowing mesh */
.page-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
        radial-gradient(ellipse 70% 60% at 10% 45%, rgba(123,77,255,0.14) 0%, transparent 60%),
        radial-gradient(ellipse 60% 70% at 90% 30%, rgba(216,91,255,0.12) 0%, transparent 55%),
        radial-gradient(ellipse 55% 60% at 50% 95%, rgba(255,154,87,0.10) 0%, transparent 60%);
    pointer-events: none;
    z-index: 0;
}

/* Top gradient line (brand consistency) */
.page-hero::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: var(--grad-main);
    z-index: 5;
}

/* Floating orbs (soft glass effect) */
.ph-orb {
    position: absolute;
    border-radius: 50%;
    filter: blur(90px);
    pointer-events: none;
    z-index: 1;
}

.ph-orb-1 {
    width: 420px;
    height: 420px;
    background: rgba(123,77,255,0.10);
    top: -180px;
    right: -120px;
    animation: orbFloat 8s ease-in-out infinite;
}

.ph-orb-2 {
    width: 340px;
    height: 340px;
    background: rgba(216,91,255,0.09);
    bottom: -140px;
    left: -100px;
    animation: orbFloat 10s ease-in-out infinite reverse;
}

.ph-orb-3 {
    width: 260px;
    height: 260px;
    background: rgba(255,154,87,0.10);
    top: 30%;
    left: 10%;
    animation: orbFloat 7s ease-in-out infinite 1s;
}

.ph-orb-4 {
    width: 220px;
    height: 220px;
    background: rgba(255,111,181,0.10);
    top: 20%;
    right: 25%;
    animation: orbFloat 9s ease-in-out infinite 2s;
}

/* Content layer */
.page-hero .hero-content {
    position: relative;
    z-index: 10;
}

/* Badge (glass UI like navbar) */
.page-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 10px;

    background: rgba(255,255,255,0.75);
    border: 1px solid rgba(123,77,255,0.18);

    color: var(--text-mid);
    font-family: 'Manrope', sans-serif;
    font-weight: 700;
    font-size: 11px;
    letter-spacing: 2.5px;
    text-transform: uppercase;

    padding: 8px 20px;
    border-radius: 50px;
    margin-bottom: 28px;

    backdrop-filter: blur(10px);
    box-shadow: 0 4px 16px rgba(123,77,255,0.10);
}

.page-hero-badge .badge-dot {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: var(--orange);
    animation: pulse 1.5s infinite;
}

/* Title (dark for readability) */
.page-hero h1 {
    font-family: 'Plus Jakarta Sans', 'Clash Display', sans-serif;
    font-size: clamp(26px, 4vw, 48px);
    line-height: 1.1;
    letter-spacing: -1px;

    color: var(--text-strong);
    margin-bottom: 22px;
}

/* Description (fix contrast issue) */
.page-hero p.ph-desc {
    color: var(--text-mid) !important;
    font-size: 17px;
    line-height: 1.85;

    max-width: 680px;
    margin: 0 auto 40px;
}
    .btn-grad {
        display: inline-flex; align-items: center; gap: 10px;
        background: var(--grad-btn); color: #fff;
        font-family: 'Clash Display', sans-serif; font-weight: 600; font-size: 14.5px;
        padding: 16px 34px; border-radius: 50px;
        transition: all 0.3s; box-shadow: 0 4px 25px rgba(124,58,237,.35);
        position: relative; overflow: hidden;
    }
    .btn-grad::after { content:''; position:absolute; inset:0; background:linear-gradient(135deg, rgba(255,255,255,0.15), transparent); opacity:0; transition:opacity 0.3s; }
    .btn-grad:hover { transform:translateY(-3px); box-shadow:0 10px 40px rgba(124,58,237,.5); color:#fff; }
    .btn-grad:hover::after { opacity:1; }
    .btn-grad svg { width:18px;height:18px;stroke:white;stroke-width:2.5;flex-shrink:0; }

    .page-hero::after {
        content: '';
        position: absolute; top: 0; left: 0; right: 0; height: 2px;
        background: var(--grad-main); z-index: 20;
    }

    /* ══ BLOG LISTING ══ */
    .blog-listing {
        padding: 120px 0;
        background: linear-gradient(135deg, #fdf8ff 0%, #fff8f0 60%, #f0f9ff 100%);
        position: relative; z-index: 2;
    }
    .blog-listing::before {
        content:''; position:absolute; inset:0;
        background: radial-gradient(ellipse at 80% 20%, rgba(224,64,251,0.05) 0%, transparent 50%),
                    radial-gradient(ellipse at 10% 80%, rgba(249,115,22,0.04) 0%, transparent 50%);
        pointer-events:none;
    }

    .blog-listing-header {
        margin-bottom: 60px;
    }

    /* ══ BLOG GRID ══ */
    .blog-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 28px;
        position: relative; z-index: 1;
    }

    @media (max-width: 1023px) {
        .blog-grid { grid-template-columns: 1fr 1fr; }
    }
    @media (max-width: 600px) {
        .blog-grid { grid-template-columns: 1fr; }
    }

    /* ══ BLOG CARD ══ */
    .blog-card {
        background: #ffffff;
        border: 1.5px solid rgba(124,58,237,0.09);
        border-radius: 28px;
        overflow: hidden;
        transition: all 0.45s cubic-bezier(0.4,0,0.2,1);
        display: flex;
        flex-direction: column;
        position: relative;
    }
    .blog-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 3px;
        background: var(--grad-main);
        border-radius: 3px 3px 0 0;
        transform: scaleX(0);
        transition: transform 0.4s;
        z-index: 2;
    }
    .blog-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 24px 60px rgba(124,58,237,0.13);
        border-color: rgba(124,58,237,0.28);
    }
    .blog-card:hover::before { transform: scaleX(1); }

    /* ══ THUMBNAIL — FIXED ══ */
    .blog-thumb {
        width: 100%;
        aspect-ratio: 4/3;
        overflow: hidden;
        display: block;
        background: #eee;
        position: relative;
        /* Top corners match card radius, bottom corners flat */
        border-radius: 26px 26px 0 0;
    }
    .blog-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.5s ease;
        /* Ensure image fills completely, no gap */
        border-radius: 0;
    }
    .blog-card:hover .blog-thumb img { transform: scale(1.05); }

    /* Category tags — image overlay removed, now in content area */
    .thumb-cat { display: none; }

    .card-cats {
        display: flex; gap: 6px; flex-wrap: wrap;
        margin-bottom: 10px;
    }
    .card-cats a {
        display: inline-flex; align-items: center; gap: 5px;
        font-family: 'Manrope', sans-serif;
        font-weight: 700; font-size: 9.5px;
        letter-spacing: 1.8px; text-transform: uppercase;
        color: var(--purple);
        background: rgba(124,58,237,0.08);
        border: 1px solid rgba(124,58,237,0.18);
        padding: 4px 11px; border-radius: 6px;
        transition: all 0.2s;
    }
    .card-cats a::before {
        content: '';
        width: 5px; height: 5px; border-radius: 50%;
        background: var(--purple);
        opacity: 0.7;
        flex-shrink: 0;
    }
    .card-cats a:hover {
        background: rgba(124,58,237,0.15);
        border-color: rgba(124,58,237,0.35);
        color: var(--purple);
    }

    /* Content */
    .blog-content {
        padding: 26px 28px 24px;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    /* Date meta */
    .listing-meta {
        display: flex;
        align-items: center;
        gap: 8px;
        font-family: 'Manrope', sans-serif;
        font-size: 12px;
        font-weight: 600;
        color: var(--muted);
        margin-bottom: 12px;
        letter-spacing: 0.3px;
    }
    .listing-meta .meta-icon {
        width: 16px; height: 16px;
        opacity: 0.5;
    }

    /* Title */
    .blog-title {
        font-family: 'Clash Display', sans-serif;
        font-size: 18px;
        font-weight: 700;
        color: var(--text-strong);
        line-height: 1.35;
        margin-bottom: 12px;
        transition: color 0.2s;
        display: block;
        letter-spacing: -0.2px;
    }
    .blog-title:hover { color: var(--purple); }

    /* Excerpt */
    .blog-excerpt {
        font-size: 14px;
        line-height: 1.8;
        color: #6b7280;
        margin-bottom: 22px;
        flex: 1;
    }

    /* Footer row */
    .card-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 16px;
        border-top: 1px solid rgba(124,58,237,0.08);
    }

    .read-more {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        font-family: 'Clash Display', sans-serif;
        font-weight: 600;
        font-size: 13px;
        color: var(--purple);
        transition: all 0.25s;
    }
    .read-more svg {
        width: 16px; height: 16px;
        stroke: currentColor;
        stroke-width: 2.5;
        transition: transform 0.25s;
    }
    .read-more:hover { color: var(--orange); }
    .read-more:hover svg { transform: translateX(4px); }

    /* Share links */
    .share-links { display: flex; gap: 6px; }
    .share-links a {
        width: 30px; height: 30px;
        border-radius: 10px;
        background: rgba(124,58,237,0.06);
        border: 1px solid rgba(124,58,237,0.1);
        display: flex; align-items: center; justify-content: center;
        font-size: 12px;
        color: var(--purple);
        font-family: serif;
        font-weight: bold;
        transition: all 0.25s;
    }
    .share-links a:hover {
        background: var(--grad-btn);
        border-color: transparent;
        color: #fff;
        transform: translateY(-2px);
    }

    /* ══ SCROLLING MARQUEE ══ */
    .scrolling-section { position:relative;overflow:hidden;padding:0;background:linear-gradient(135deg,#0d0520 0%,#130a35 40%,#0a1a40 70%,#0d0a2e 100%); }
    .scrolling-section::before { content:'';position:absolute;top:0;left:0;right:0;height:1px;background:var(--grad-main);opacity:0.5; }
    .scrolling-section::after { content:'';position:absolute;bottom:0;left:0;right:0;height:1px;background:var(--grad-main);opacity:0.5; }
    .marquee-fade-left, .marquee-fade-right { position:absolute;top:0;bottom:0;width:180px;z-index:2;pointer-events:none; }
    .marquee-fade-left { left:0;background:linear-gradient(to right,#0d0520 0%,transparent 100%); }
    .marquee-fade-right { right:0;background:linear-gradient(to left,#0d0a2e 0%,transparent 100%); }
    .marquee-orb { position:absolute;border-radius:50%;filter:blur(80px);pointer-events:none; }
    .m-orb-1 { width:300px;height:300px;background:rgba(124,58,237,0.15);top:-100px;left:20%; }
    .m-orb-2 { width:250px;height:250px;background:rgba(249,115,22,0.1);bottom:-80px;right:30%; }
    .scrolling-tracks-wrap { padding:0;overflow:hidden; }
    .scrolling-track-1 { display:flex;gap:0;padding:32px 0 20px;white-space:nowrap;animation:scrollLeft 30s linear infinite; }
    .scrolling-track-2 { display:flex;gap:0;padding:20px 0 32px;white-space:nowrap;animation:scrollRight 25s linear infinite; }
    @keyframes scrollLeft { from{transform:translateX(0)} to{transform:translateX(-50%)} }
    @keyframes scrollRight { from{transform:translateX(-50%)} to{transform:translateX(0)} }
    .scroll-item { display:inline-flex;align-items:center;gap:14px;flex-shrink:0;padding:0 8px; }
    .scroll-pill { display:inline-flex;align-items:center;gap:10px;padding:10px 24px;border-radius:50px;font-family:'Clash Display',sans-serif;font-weight:600;font-size:clamp(13px,1.6vw,16px);letter-spacing:0.5px;white-space:nowrap;transition:all 0.3s; }
    .scroll-pill.style-a { background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1);color:rgba(255,255,255,0.75); }
    .scroll-pill.style-b { background:rgba(124,58,237,0.2);border:1px solid rgba(124,58,237,0.35);color:#c4b5fd; }
    .scroll-pill.style-c { background:rgba(249,115,22,0.15);border:1px solid rgba(249,115,22,0.3);color:#fbbf24; }
    .scroll-pill.style-d { background:rgba(6,182,212,0.12);border:1px solid rgba(6,182,212,0.25);color:#67e8f9; }
    .scroll-pill.style-e { background:rgba(16,185,129,0.12);border:1px solid rgba(16,185,129,0.25);color:#6ee7b7; }
    .scroll-pill-icon { width:22px;height:22px;border-radius:6px;display:flex;align-items:center;justify-content:center;flex-shrink:0; }
    .scroll-pill-icon svg { width:13px;height:13px; }
    .style-a .scroll-pill-icon { background:rgba(255,255,255,0.1); }
    .style-a .scroll-pill-icon svg { stroke:rgba(255,255,255,0.7);stroke-width:2;fill:none; }
    .style-b .scroll-pill-icon { background:rgba(124,58,237,0.3); }
    .style-b .scroll-pill-icon svg { stroke:#c4b5fd;stroke-width:2;fill:none; }
    .style-c .scroll-pill-icon { background:rgba(249,115,22,0.3); }
    .style-c .scroll-pill-icon svg { stroke:#fbbf24;stroke-width:2;fill:none; }
    .style-d .scroll-pill-icon { background:rgba(6,182,212,0.2); }
    .style-d .scroll-pill-icon svg { stroke:#67e8f9;stroke-width:2;fill:none; }
    .style-e .scroll-pill-icon { background:rgba(16,185,129,0.2); }
    .style-e .scroll-pill-icon svg { stroke:#6ee7b7;stroke-width:2;fill:none; }
    .scroll-sep-star { font-size:18px;color:rgba(255,255,255,0.12);flex-shrink:0;margin:0 6px; }

    /* ══ BACK TO TOP ══ */
    #back-to-top { position:fixed;bottom:40px;left:40px;width:52px;height:52px;background:var(--grad-main);color:white;border:none;border-radius:15px;cursor:pointer;display:none;align-items:center;justify-content:center;box-shadow:0 4px 25px rgba(124,58,237,.4);z-index:999;transition:all .3s;font-size:20px; }
    #back-to-top.visible { display:flex; }
    #back-to-top:hover { transform:translateY(-4px);box-shadow:0 8px 40px rgba(124,58,237,.55); }

    /* ══ RESPONSIVE ══ */
    @media(max-width:768px){
        .blog-listing { padding: 80px 0; }
        .page-hero { padding: 100px 0 80px; }
        .marquee-fade-left,.marquee-fade-right { width:60px; }
    }
    @media(max-width:600px){
        #back-to-top { bottom:20px;left:20px; }
        .blog-content { padding: 20px; }
    }
</style>

<!-- ══ PAGE HERO ══ -->
<section class="page-hero">
    <div class="ph-orb ph-orb-1"></div>
    <div class="ph-orb ph-orb-2"></div>
    <div class="ph-orb ph-orb-3"></div>
    <div class="ph-orb ph-orb-4"></div>
    <div class="container hero-content">
        <div class="page-hero-badge">
            <span class="badge-dot"></span>
            Digital Marketing Blog
        </div>
        <h1>Digital Marketing Blog Full of Real Growth Insights</h1>
        <p class="ph-desc">
            Welcome to our digital marketing blog—your go-to source for actionable tips,
            expert advice, and fresh ideas to grow your brand in the digital world.
        </p>
        <a href="contact-us/" class="btn-grad">
            Contact Us
            <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
    </div>
</section>


<!-- ══ BLOG LISTING ══ -->
<section class="blog-listing">
    <div class="container">

        <div class="blog-listing-header">
            <div class="section-label" style="color:#f97316">
                <span class="sl-dot"><span></span><span></span><span></span></span>
                Latest Articles
            </div>
            <h2 class="section-title">Insights, Tips &amp; <span class="grad-text">Strategies</span></h2>
        </div>

        <?php
        $posts = [
            [
                "url"       => "shopify-seo-checklist/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2026/02/Grow-Your-Business-Online-Proven-Strategies-That-Actually-Work-2-768x576-540x405.png",
                "alt"       => "Grow Your Business Online Proven Strategies That Actually Work",
                "date"      => "February 6, 2026",
                "cats"      => [["SEO", "category/seo/"]],
                "title"     => "Shopify SEO Checklist: The Ultimate Guide to Optimize Your Store",
                "excerpt"   => "Running Shopify stores today is more competitive than ever. You can have the best products and still struggle with...",
                "fb_url"    => "https://hashtagmedia.ae/shopify-seo-checklist/",
                "tw_url"    => "https://hashtagmedia.ae/shopify-seo-checklist/",
                "tw_title"  => "Shopify SEO Checklist: The Ultimate Guide to Optimize Your Store",
            ],
            [
                "url"       => "best-time-to-post-on-social-media/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2026/01/Person-holding-a-clock-with-social-media-icons-floating-around-them-768x488-540x343.webp",
                "alt"       => "Person holding a clock with social media icons floating around them.",
                "date"      => "February 4, 2026",
                "cats"      => [["Social Media", "category/social-media/"]],
                "title"     => "The Best Time to Post on Social Media: A Platform-Specific Guide to Boost Engagement",
                "excerpt"   => "You can never win on social media if you don't know your users and audience. Whenever you're working on growing a...",
                "fb_url"    => "https://hashtagmedia.ae/best-time-to-post-on-social-media/",
                "tw_url"    => "https://hashtagmedia.ae/best-time-to-post-on-social-media/",
                "tw_title"  => "The Best Time to Post on Social Media",
            ],
            [
                "url"       => "grow-your-business-online/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2026/01/a-professional-male-working-on-PC-graph-on-screen-coffee-mug-glasses-calculator-on-the-table-768x561-540x394.webp",
                "alt"       => "a professional male working on PC, graph on screen, coffee mug, glasses, calculator on the table",
                "date"      => "February 2, 2026",
                "cats"      => [["Branding", "category/branding/"], ["Marketing", "category/marketing/"]],
                "title"     => "Grow Your Business Online: Proven Strategies That Actually Work",
                "excerpt"   => "Running an online business may seem like an easy way to make money, but it's not as simple as it looks. It's not...",
                "fb_url"    => "https://hashtagmedia.ae/grow-your-business-online/",
                "tw_url"    => "https://hashtagmedia.ae/grow-your-business-online/",
                "tw_title"  => "Grow Your Business Online: Proven Strategies That Actually Work",
            ],
            [
                "url"       => "google-ads-vs-social-media-ads/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2026/01/Comparison-infographic-of-Google-Ads-vs-Social-Media-Ads-with-statistics-and-key-insights-768x432-540x303.webp",
                "alt"       => "Comparison infographic of Google Ads vs Social Media Ads with statistics and key insights",
                "date"      => "January 30, 2026",
                "cats"      => [["PPC", "category/ppc/"]],
                "title"     => "Google Ads vs Social Media Ads: Pros, Cons, and Which Is Right for Your Business",
                "excerpt"   => "With the rise of digital trends, a brand's future is shaped by social media and the internet. No matter where...",
                "fb_url"    => "https://hashtagmedia.ae/google-ads-vs-social-media-ads/",
                "tw_url"    => "https://hashtagmedia.ae/google-ads-vs-social-media-ads/",
                "tw_title"  => "Google Ads vs Social Media Ads",
            ],
            [
                "url"       => "ranking-by-seo/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2026/01/Laptop-displaying-an-SEO-dashboard-with-graphs-and-charts-on-a-desk._11zon-768x518-540x364.webp",
                "alt"       => "Laptop displaying an SEO dashboard with graphs and charts on a desk.",
                "date"      => "January 28, 2026",
                "cats"      => [["SEO", "category/seo/"]],
                "title"     => "How Ranking by SEO Helps You Reach Google's First Page",
                "excerpt"   => "We all want to reach the holy grail of the internet—Google's First Page. It's where the traffic, visibility, and clicks...",
                "fb_url"    => "https://hashtagmedia.ae/ranking-by-seo/",
                "tw_url"    => "https://hashtagmedia.ae/ranking-by-seo/",
                "tw_title"  => "How Ranking by SEO Helps You Reach Google's First Page",
            ],
            [
                "url"       => "what-are-meta-ads/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2026/01/An-image-of-a-smartphone-displaying-the-Meta-Ads-Manager-app-with-the-Meta-logo-in-the-background-768x403-540x283.webp",
                "alt"       => "What Are Meta Ads and How Can They Boost Your Marketing?",
                "date"      => "January 26, 2026",
                "cats"      => [["Marketing", "category/marketing/"], ["PPC", "category/ppc/"], ["Social Media", "category/social-media/"]],
                "title"     => "What Are Meta Ads and How Can They Boost Your Marketing?",
                "excerpt"   => "If you're in the world of social media marketing, you've likely heard the buzz about Meta Ads. But here's the real...",
                "fb_url"    => "https://hashtagmedia.ae/what-are-meta-ads/",
                "tw_url"    => "https://hashtagmedia.ae/what-are-meta-ads/",
                "tw_title"  => "What Are Meta Ads and How Can They Boost Your Marketing?",
            ],
            [
                "url"       => "voice-search-for-seo/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2026/01/How-Voice-Search-for-SEO-is-Shaping-the-Future-of-Search-Engine-Optimization-768x576-540x405.png",
                "alt"       => "How Voice Search for SEO is Shaping the Future of Search Engine Optimization",
                "date"      => "January 22, 2026",
                "cats"      => [["SEO", "category/seo/"]],
                "title"     => "How Voice Search for SEO is Shaping the Future of Search Engine Optimization",
                "excerpt"   => "Voice search isn't some sci-fi concept anymore – it's here, and it's changing the game in ways we can't ignore. I remember...",
                "fb_url"    => "https://hashtagmedia.ae/voice-search-for-seo/",
                "tw_url"    => "https://hashtagmedia.ae/voice-search-for-seo/",
                "tw_title"  => "How Voice Search for SEO is Shaping the Future",
            ],
            [
                "url"       => "how-to-write-emails-that-convert/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2026/01/A-close-up-view-of-a-Gmail-inbox-on-a-laptop-screen-showing-various-email-folders-like-Inbox-Starred-and-Snoozed-768x512-540x360.webp",
                "alt"       => "A close-up view of a Gmail inbox on a laptop screen.",
                "date"      => "January 20, 2026",
                "cats"      => [["Marketing", "category/marketing/"]],
                "title"     => "How to Write Emails That Convert: Tips for Crafting Effective Email Campaigns",
                "excerpt"   => "Email marketing is one of the most powerful tools for businesses of any size, but here's the million-dollar...",
                "fb_url"    => "https://hashtagmedia.ae/how-to-write-emails-that-convert/",
                "tw_url"    => "https://hashtagmedia.ae/how-to-write-emails-that-convert/",
                "tw_title"  => "How to Write Emails That Convert",
            ],
            [
                "url"       => "types-of-email-marketing-campaigns-which-one-is-right-for-your-business/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/12/A-person-is-analyzing-website-performance-data-on-a-laptop-showcasing-metrics-like-user-acquisition-behavior-and-conversions-768x476-540x334.webp",
                "alt"       => "A person is analyzing website performance data on a laptop.",
                "date"      => "December 29, 2025",
                "cats"      => [["Marketing", "category/marketing/"]],
                "title"     => "Types of Email Marketing Campaigns: Which One is Right for Your Business?",
                "excerpt"   => "Email marketing is one of the most effective ways to connect with your audience, promote your products, and drive...",
                "fb_url"    => "https://hashtagmedia.ae/types-of-email-marketing-campaigns-which-one-is-right-for-your-business/",
                "tw_url"    => "https://hashtagmedia.ae/types-of-email-marketing-campaigns-which-one-is-right-for-your-business/",
                "tw_title"  => "Types of Email Marketing Campaigns",
            ],
            [
                "url"       => "key-advantages-of-a-responsive-website/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/12/Web-design-displayed-on-mobile-tablet-and-laptop-768x512-540x360.webp",
                "alt"       => "Web design displayed on mobile, tablet, and laptop",
                "date"      => "December 26, 2025",
                "cats"      => [["Web", "category/web/"]],
                "title"     => "The Key Advantages of a Responsive Website for Mobile and Desktop Users",
                "excerpt"   => "Have you ever visited a website on your phone and struggled to navigate it? Maybe the text was too small, or the images...",
                "fb_url"    => "https://hashtagmedia.ae/key-advantages-of-a-responsive-website/",
                "tw_url"    => "https://hashtagmedia.ae/key-advantages-of-a-responsive-website/",
                "tw_title"  => "Key Advantages of a Responsive Website",
            ],
            [
                "url"       => "best-free-software-for-ui-ux-design/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/12/Illustration-of-two-people-painting-the-UX-letters-540x405.webp",
                "alt"       => "Illustration of two people painting the 'UX' letters.",
                "date"      => "December 24, 2025",
                "cats"      => [["Design", "category/design/"]],
                "title"     => "Best Free Software for UI/UX Design: Top Tools for Designers on a Budget",
                "excerpt"   => "UI/UX design is at the heart of every great digital experience, and let's face it—it's what makes users stick...",
                "fb_url"    => "https://hashtagmedia.ae/best-free-software-for-ui-ux-design/",
                "tw_url"    => "https://hashtagmedia.ae/best-free-software-for-ui-ux-design/",
                "tw_title"  => "Best Free Software for UI/UX Design",
            ],
            [
                "url"       => "ui-ux-design-with-figma/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/12/an-asian-UI-UX-designer-working-on-a-design-768x493-540x346.webp",
                "alt"       => "an asian UI UX designer working on a design",
                "date"      => "December 22, 2025",
                "cats"      => [["Design", "category/design/"]],
                "title"     => "UI/UX Design with Figma: How to Streamline Your Design Process",
                "excerpt"   => "As a UI/UX designer, your creative journey can be full of twists and turns. You need a tool that helps you navigate all...",
                "fb_url"    => "https://hashtagmedia.ae/ui-ux-design-with-figma/",
                "tw_url"    => "https://hashtagmedia.ae/ui-ux-design-with-figma/",
                "tw_title"  => "UI/UX Design with Figma",
            ],
            [
                "url"       => "seo-audit-agency/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/12/A-3D-architectural-blueprint-with-furniture-surrounded-by-drawing-tools-768x439-540x308.webp",
                "alt"       => "A 3D architectural blueprint with furniture, surrounded by drawing tools.",
                "date"      => "December 19, 2025",
                "cats"      => [["SEO", "category/seo/"]],
                "title"     => "How an SEO Audit Agency Creates an In-Depth SEO Audit Report",
                "excerpt"   => "In today's digital jungle, having a website that stands out on search engines is the key to unlocking business success....",
                "fb_url"    => "https://hashtagmedia.ae/seo-audit-agency/",
                "tw_url"    => "https://hashtagmedia.ae/seo-audit-agency/",
                "tw_title"  => "How an SEO Audit Agency Creates an In-Depth SEO Audit Report",
            ],
            [
                "url"       => "best-image-optimizer-for-wordpress/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/12/a-cycle-image-being-optimized-768x576-540x405.webp",
                "alt"       => "a cycle image being optimized",
                "date"      => "December 17, 2025",
                "cats"      => [["Optimization", "category/optimization/"]],
                "title"     => "Best Image Optimizer for WordPress: Top Tools to Boost Your Site's Speed",
                "excerpt"   => "Have you ever noticed that some websites load very slowly and get stuck? It's frustrating, right? High-resolution images...",
                "fb_url"    => "https://hashtagmedia.ae/best-image-optimizer-for-wordpress/",
                "tw_url"    => "https://hashtagmedia.ae/best-image-optimizer-for-wordpress/",
                "tw_title"  => "Best Image Optimizer for WordPress",
            ],
            [
                "url"       => "seo-and-geo-services/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/12/SEO-VS-GEO-with-icons-on-a-dark-background-768x432-540x303.webp",
                "alt"       => "SEO-VS-GEO with icons on a dark background",
                "date"      => "December 15, 2025",
                "cats"      => [["SEO", "category/seo/"]],
                "title"     => "SEO and GEO Services: Key Differences and How They Work Together",
                "excerpt"   => "In today's fast-paced digital world, staying ahead of the curve can feel like a constant race. Every business is trying to...",
                "fb_url"    => "https://hashtagmedia.ae/seo-and-geo-services/",
                "tw_url"    => "https://hashtagmedia.ae/seo-and-geo-services/",
                "tw_title"  => "SEO and GEO Services: Key Differences",
            ],
            [
                "url"       => "what-is-the-use-of-google-my-business/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/12/A-close-up-of-the-Google-My-Business-website-showing-the-main-menu-options-768x432-540x303.webp",
                "alt"       => "A close-up of the Google My Business website showing the main menu options.",
                "date"      => "December 13, 2025",
                "cats"      => [["SEO", "category/seo/"]],
                "title"     => "What Is the Use of Google My Business? Why Every Business Needs It",
                "excerpt"   => "In today's digital world, Google My Business (GMB) has quickly become one of my must-have tools as a business...",
                "fb_url"    => "https://hashtagmedia.ae/what-is-the-use-of-google-my-business/",
                "tw_url"    => "https://hashtagmedia.ae/what-is-the-use-of-google-my-business/",
                "tw_title"  => "What Is the Use of Google My Business?",
            ],
            [
                "url"       => "seo-vs-sem/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/Hand-changing-wooden-blocks-from-SEO-to-SEM-1-768x493-540x346.jpeg",
                "alt"       => "Hand changing wooden blocks from 'SEO' to 'SEM'",
                "date"      => "December 9, 2025",
                "cats"      => [["SEO", "category/seo/"]],
                "title"     => "SEO vs SEM: Understanding the Difference and When to Use Each",
                "excerpt"   => "When I first started exploring ways to grow my online presence, I kept running into two terms everywhere: SEO (Search...",
                "fb_url"    => "https://hashtagmedia.ae/seo-vs-sem/",
                "tw_url"    => "https://hashtagmedia.ae/seo-vs-sem/",
                "tw_title"  => "SEO vs SEM: Understanding the Difference",
            ],
            [
                "url"       => "sme-in-digital-marketing/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/3-blocks-of-SME-adjusted-on-coins-768x512-540x360.webp",
                "alt"       => "3 blocks of SME adjusted on coins",
                "date"      => "December 9, 2025",
                "cats"      => [["Marketing", "category/marketing/"]],
                "title"     => "SME in Digital Marketing: What It Means and Why It Matters",
                "excerpt"   => "So, here's the million-dollar question: What's that one thing that can help your small or medium-sized business really...",
                "fb_url"    => "https://hashtagmedia.ae/sme-in-digital-marketing/",
                "tw_url"    => "https://hashtagmedia.ae/sme-in-digital-marketing/",
                "tw_title"  => "SME in Digital Marketing",
            ],
            [
                "url"       => "seo-and-ppc-services/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/A-comparison-of-SEO-magnifying-glass-and-PPC-dollar-signs-strategies-768x402-540x282.webp",
                "alt"       => "A comparison of SEO (magnifying glass) and PPC (dollar signs) strategies",
                "date"      => "December 5, 2025",
                "cats"      => [["PPC", "category/ppc/"], ["SEO", "category/seo/"]],
                "title"     => "SEO and PPC Services: How They Work Together to Maximize Results",
                "excerpt"   => "In the fast-evolving world of digital marketing, I bet you're constantly looking for ways to boost your online presence,...",
                "fb_url"    => "https://hashtagmedia.ae/seo-and-ppc-services/",
                "tw_url"    => "https://hashtagmedia.ae/seo-and-ppc-services/",
                "tw_title"  => "SEO and PPC Services",
            ],
            [
                "url"       => "writing-a-script-for-a-video-guide/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/view-of-hands-typing-on-laptop-keyboard-highlighter-and-pen-on-paper-a-cup-of-coffee-768x421-540x296.webp",
                "alt"       => "view of hands typing on laptop keyboard, highlighter and pen on paper, a cup of coffee",
                "date"      => "December 5, 2025",
                "cats"      => [["Content Writing", "category/content-writing/"]],
                "title"     => "Writing a Script for a Video: A Step-by-Step Guide for Beginners",
                "excerpt"   => "You know what can really mess things up in video-making? When you create a video that just goes on and on without any...",
                "fb_url"    => "https://hashtagmedia.ae/writing-a-script-for-a-video-guide/",
                "tw_url"    => "https://hashtagmedia.ae/writing-a-script-for-a-video-guide/",
                "tw_title"  => "Writing a Script for a Video",
            ],
            [
                "url"       => "future-of-ai-in-digital-marketing/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/A-person-using-a-smartphone-with-digital-icons-floating-around-768x512-540x360.jpg",
                "alt"       => "A person using a smartphone with digital icons floating around",
                "date"      => "December 1, 2025",
                "cats"      => [["Marketing", "category/marketing/"]],
                "title"     => "The Future of AI in Digital Marketing: Trends You Can't Ignore",
                "excerpt"   => "Sometimes, I'll be honest, I find AI a bit intimidating. It can seem like it's taking over everything, and honestly, that...",
                "fb_url"    => "https://hashtagmedia.ae/future-of-ai-in-digital-marketing/",
                "tw_url"    => "https://hashtagmedia.ae/future-of-ai-in-digital-marketing/",
                "tw_title"  => "The Future of AI in Digital Marketing",
            ],
            [
                "url"       => "types-of-social-media-content/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/illustration-of-different-people-working-and-social-media-icons-768x370-540x260.webp",
                "alt"       => "types of social media content icons",
                "date"      => "December 1, 2025",
                "cats"      => [["Marketing", "category/marketing/"]],
                "title"     => "Types of Social Media Content: What to Post for Maximum Impact",
                "excerpt"   => "Modern businesses thrive on meaningful content. It's no longer about filling your social feeds with random videos...",
                "fb_url"    => "https://hashtagmedia.ae/types-of-social-media-content/",
                "tw_url"    => "https://hashtagmedia.ae/types-of-social-media-content/",
                "tw_title"  => "Types of Social Media Content",
            ],
            [
                "url"       => "how-to-make-a-website-load-faster/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/Computer-with-a-globe-and-digital-data-streams-symbolizing-fast-internet-540x288.webp",
                "alt"       => "Computer with a globe and digital data streams, symbolizing fast internet",
                "date"      => "November 28, 2025",
                "cats"      => [["Optimization", "category/optimization/"]],
                "title"     => "How to Make a Website Load Faster: Essential Tips for Boosting Speed",
                "excerpt"   => "In today's fast-paced digital world, waiting for a slow website to load is like waiting for a kettle to boil—frustrating,...",
                "fb_url"    => "https://hashtagmedia.ae/how-to-make-a-website-load-faster/",
                "tw_url"    => "https://hashtagmedia.ae/how-to-make-a-website-load-faster/",
                "tw_title"  => "How to Make a Website Load Faster",
            ],
            [
                "url"       => "types-of-content-writing/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/A-person-writing-Types-of-Content-Writing-in-a-notebook-with-a-cup-of-coffee-nearby-768x432-540x303.jpg",
                "alt"       => "A person writing Types of Content Writing in a notebook with a cup of coffee nearby",
                "date"      => "November 28, 2025",
                "cats"      => [["Content Writing", "category/content-writing/"]],
                "title"     => "What Are the Types of Content Writing? A Guide to Creating Effective Content",
                "excerpt"   => "As a content writer, I face challenges like finding the right tone for different types of content writing and dealing with...",
                "fb_url"    => "https://hashtagmedia.ae/types-of-content-writing/",
                "tw_url"    => "https://hashtagmedia.ae/types-of-content-writing/",
                "tw_title"  => "Types of Content Writing",
            ],
            [
                "url"       => "why-hire-a-content-writer/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/A-person-writing-in-a-notebook-with-a-pen-while-sitting-at-a-desk-with-a-laptop-and-a-cup-of-coffee-768x480-540x337.webp",
                "alt"       => "A person writing in a notebook with a pen while sitting at a desk with a laptop and a cup of coffee",
                "date"      => "November 26, 2025",
                "cats"      => [["Content Writing", "category/content-writing/"]],
                "title"     => "Why You Should Hire a Content Writer for Your Website's Success",
                "excerpt"   => "Ever wondered what makes a website truly stand out in a sea of competition? It's not just the sleek design or eye-catching...",
                "fb_url"    => "https://hashtagmedia.ae/why-hire-a-content-writer/",
                "tw_url"    => "https://hashtagmedia.ae/why-hire-a-content-writer/",
                "tw_title"  => "Why You Should Hire a Content Writer",
            ],
            [
                "url"       => "types-of-social-media-posts/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/People-using-smartphones-with-social-media-likes-comments-and-notifications-appearing-on-screen-768x471-540x331.webp",
                "alt"       => "People using smartphones with social media likes, comments, and notifications appearing on screen",
                "date"      => "November 26, 2025",
                "cats"      => [["Marketing", "category/marketing/"]],
                "title"     => "The Best Types of Social Media Posts to Boost Engagement and Reach",
                "excerpt"   => "Let's be real—social media can feel like a lot to handle. There are endless things you could post, but only a few will...",
                "fb_url"    => "https://hashtagmedia.ae/types-of-social-media-posts/",
                "tw_url"    => "https://hashtagmedia.ae/types-of-social-media-posts/",
                "tw_title"  => "Best Types of Social Media Posts",
            ],
            [
                "url"       => "website-content-creation/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/A-person-typing-on-a-laptop-in-WordPress-while-writing-a-blog-post-titled-How-I-promote-my-new-blog-posts-768x512-540x360.webp",
                "alt"       => "A person typing on a laptop in WordPress while writing a blog post",
                "date"      => "November 24, 2025",
                "cats"      => [["Web", "category/web/"]],
                "title"     => "Why Website Content Creation is Key to Increasing Traffic and Engagement",
                "excerpt"   => "When I think about building a successful website, the first thing that stands out to me is content—because let's face it,...",
                "fb_url"    => "https://hashtagmedia.ae/website-content-creation/",
                "tw_url"    => "https://hashtagmedia.ae/website-content-creation/",
                "tw_title"  => "Why Website Content Creation is Key",
            ],
            [
                "url"       => "google-ads-management/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/phone-in-hands-with-google-ads-opened-a-cup-of-coffee-keyboard-on-table-540x324.webp",
                "alt"       => "phone in hands with google ads opened, a cup of coffee, keyboard on table",
                "date"      => "November 24, 2025",
                "cats"      => [["PPC", "category/ppc/"]],
                "title"     => "How Google Ads Management Can Transform Your Marketing Strategy",
                "excerpt"   => "If you're putting all your energy into creating great content but still struggling to get noticed, you're not...",
                "fb_url"    => "https://hashtagmedia.ae/google-ads-management/",
                "tw_url"    => "https://hashtagmedia.ae/google-ads-management/",
                "tw_title"  => "How Google Ads Management Can Transform Your Marketing Strategy",
            ],
            [
                "url"       => "seo-vs-google-ads/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/SEO-and-Google-Ads-written-on-gray-background-768x461-540x324.webp",
                "alt"       => "SEO vs Google Ads written on gray background",
                "date"      => "November 21, 2025",
                "cats"      => [["SEO", "category/seo/"]],
                "title"     => "SEO vs Google Ads: Which One Should You Choose for Your Business?",
                "excerpt"   => "Trying to get your business noticed in today's digital world can feel like a huge challenge, right? With so many...",
                "fb_url"    => "https://hashtagmedia.ae/seo-vs-google-ads/",
                "tw_url"    => "https://hashtagmedia.ae/seo-vs-google-ads/",
                "tw_title"  => "SEO vs Google Ads",
            ],
            [
                "url"       => "google-ads-vs-google-adwords/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/The-image-shows-a-comparison-of-the-Google-AdWords-logo-left-and-the-Google-Ads-logo-right-768x480-540x337.webp",
                "alt"       => "Comparison of the Google AdWords logo and the Google Ads logo",
                "date"      => "November 21, 2025",
                "cats"      => [["PPC", "category/ppc/"]],
                "title"     => "Google Ads vs Google AdWords: Understanding the Key Differences",
                "excerpt"   => "If you've ever thought about running online ads, you've likely heard of Google Ads and Google AdWords. You...",
                "fb_url"    => "https://hashtagmedia.ae/google-ads-vs-google-adwords/",
                "tw_url"    => "https://hashtagmedia.ae/google-ads-vs-google-adwords/",
                "tw_title"  => "Google Ads vs Google AdWords",
            ],
            [
                "url"       => "what-do-seo-experts-do/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/A-person-using-a-smartphone-with-a-search-bar-graphic-on-the-screen-768x346-540x243.jpg",
                "alt"       => "A person using a smartphone with a search bar graphic on the screen.",
                "date"      => "November 13, 2025",
                "cats"      => [["SEO", "category/seo/"]],
                "title"     => "What Do SEO Experts Do to Improve Your Website's Ranking?",
                "excerpt"   => "SEO (Search Engine Optimization) is essential for any business that wants to succeed online. But I totally get it – you...",
                "fb_url"    => "https://hashtagmedia.ae/what-do-seo-experts-do/",
                "tw_url"    => "https://hashtagmedia.ae/what-do-seo-experts-do/",
                "tw_title"  => "What Do SEO Experts Do?",
            ],
            [
                "url"       => "local-seo-agency-market-domination/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/local-SEO-agency-concept-768x403-540x283.jpg",
                "alt"       => "Why Your Business Needs a Local SEO Agency to Dominate Your Market",
                "date"      => "November 13, 2025",
                "cats"      => [["SEO", "category/seo/"]],
                "title"     => "Why Your Business Needs a Local SEO Agency to Dominate Your Market",
                "excerpt"   => "Who doesn't want their business to be the go-to choice for locals in the area? Setting up a business is no small...",
                "fb_url"    => "https://hashtagmedia.ae/local-seo-agency-market-domination/",
                "tw_url"    => "https://hashtagmedia.ae/local-seo-agency-market-domination/",
                "tw_title"  => "Why Your Business Needs a Local SEO Agency",
            ],
            [
                "url"       => "benefits-of-seo-in-digital-marketing/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/SEO-icons-on-a-dark-background-768x576-540x405.webp",
                "alt"       => "SEO icons on a dark background",
                "date"      => "November 13, 2025",
                "cats"      => [["SEO", "category/seo/"]],
                "title"     => "The Key Benefits of SEO in Digital Marketing: Why It's Essential for Your Business",
                "excerpt"   => "Running a business today isn't easy. You've got a lot to juggle, from customer service to sales to marketing. And while...",
                "fb_url"    => "https://hashtagmedia.ae/benefits-of-seo-in-digital-marketing/",
                "tw_url"    => "https://hashtagmedia.ae/benefits-of-seo-in-digital-marketing/",
                "tw_title"  => "Key Benefits of SEO in Digital Marketing",
            ],
            [
                "url"       => "https-vs-http-for-seo/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/An-illustration-comparing-HTTP-and-HTTPS-with-a-padlock-symbol-and-an-upward-SEO-graph-768x432-540x303.png",
                "alt"       => "An illustration comparing HTTP and HTTPS with a padlock symbol and an upward SEO graph",
                "date"      => "November 13, 2025",
                "cats"      => [["SEO", "category/seo/"]],
                "title"     => "HTTPS vs HTTP for SEO: Which One Should You Choose for Better Rankings?",
                "excerpt"   => "When it comes to optimizing your website and boosting your online success, one of the key decisions you'll face is...",
                "fb_url"    => "https://hashtagmedia.ae/https-vs-http-for-seo/",
                "tw_url"    => "https://hashtagmedia.ae/https-vs-http-for-seo/",
                "tw_title"  => "HTTPS vs HTTP for SEO",
            ],
            [
                "url"       => "seo-packages-cost/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/A-person-working-on-a-computer-with-SEO-graphics-on-the-screen-768x384-540x270.webp",
                "alt"       => "A person working on a computer with SEO graphics on the screen",
                "date"      => "November 13, 2025",
                "cats"      => [["SEO", "category/seo/"]],
                "title"     => "SEO Packages Cost: What You Need to Know Before Investing",
                "excerpt"   => "You know what, when it comes to growing your online presence and driving traffic to your website, one of the first things...",
                "fb_url"    => "https://hashtagmedia.ae/seo-packages-cost/",
                "tw_url"    => "https://hashtagmedia.ae/seo-packages-cost/",
                "tw_title"  => "SEO Packages Cost",
            ],
            [
                "url"       => "video-editing-rates/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/a-video-editor-working-on-a-project-768x432-540x303.jpg",
                "alt"       => "a video editor working on a project",
                "date"      => "November 13, 2025",
                "cats"      => [["Video Editing", "category/video-editing/"]],
                "title"     => "Video Editing Rates Explained: What's Fair for Your Project?",
                "excerpt"   => "Video editing has pretty much become a must-have in today's digital world. Seriously, no matter the size of your business,...",
                "fb_url"    => "https://hashtagmedia.ae/video-editing-rates/",
                "tw_url"    => "https://hashtagmedia.ae/video-editing-rates/",
                "tw_title"  => "Video Editing Rates Explained",
            ],
            [
                "url"       => "creative-video-editing-ideas/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/representation-of-video-editing-in-3-different-screens-768x437-540x307.jpg",
                "alt"       => "representation of video editing in 3 different screens",
                "date"      => "November 13, 2025",
                "cats"      => [["Video Editing", "category/video-editing/"]],
                "title"     => "10 Must-Try Video Editing Ideas to Enhance Your Content",
                "excerpt"   => "Are you like me, someone who wants to become a pro at video editing but isn't quite sure where to start? Well,...",
                "fb_url"    => "https://hashtagmedia.ae/creative-video-editing-ideas/",
                "tw_url"    => "https://hashtagmedia.ae/creative-video-editing-ideas/",
                "tw_title"  => "10 Must-Try Video Editing Ideas",
            ],
        ];
        ?>

        <div class="blog-grid">
            <?php foreach ($posts as $post): ?>
            <article class="blog-card">

                <a href="single-post.php?slug=<?php echo urlencode(rtrim($post['url'], '/')); ?>" class="blog-thumb">
                    <img
                        src="<?php echo htmlspecialchars($post['img']); ?>"
                        alt="<?php echo htmlspecialchars($post['alt']); ?>"
                        loading="lazy"
                    >
                    <div class="thumb-cat">
                        <?php foreach ($post['cats'] as $cat): ?>
                            <a href="<?php echo htmlspecialchars($cat[1]); ?>"><?php echo htmlspecialchars($cat[0]); ?></a>
                        <?php endforeach; ?>
                    </div>
                </a>

                <div class="blog-content">

                    <div class="card-cats">
                        <?php foreach ($post['cats'] as $cat): ?>
                            <a href="<?php echo htmlspecialchars($cat[1]); ?>"><?php echo htmlspecialchars($cat[0]); ?></a>
                        <?php endforeach; ?>
                    </div>

                    <div class="listing-meta">
                        <svg class="meta-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                        <?php echo $post['date']; ?>
                    </div>

                    <a href="single-post.php?slug=<?php echo urlencode(rtrim($post['url'], '/')); ?>" class="blog-title">
                        <?php echo htmlspecialchars($post['title']); ?>
                    </a>

                    <p class="blog-excerpt"><?php echo htmlspecialchars($post['excerpt']); ?></p>

                    <div class="card-footer">
                        <a href="single-post.php?slug=<?php echo urlencode(rtrim($post['url'], '/')); ?>" class="read-more">
                            Read More
                            <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </a>
                        <div class="share-links">
                            <a
                                href="https://www.facebook.com/share.php?u=<?php echo urlencode($post['fb_url']); ?>"
                                target="_blank" rel="noopener" aria-label="Share on Facebook"
                            >f</a>
                            <a
                                href="https://twitter.com/intent/tweet?text=<?php echo urlencode($post['tw_title']); ?>&url=<?php echo urlencode($post['tw_url']); ?>"
                                target="_blank" rel="noopener" aria-label="Share on Twitter"
                            >𝕏</a>
                            <a
                                href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode($post['tw_url']); ?>"
                                target="_blank" rel="noopener" aria-label="Share on LinkedIn"
                            >in</a>
                            <a
                                href="mailto:?subject=<?php echo urlencode($post['tw_title']); ?>&body=<?php echo urlencode($post['tw_url']); ?>"
                                aria-label="Share via Email"
                            >✉</a>
                        </div>
                    </div>

                </div>
            </article>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- ══ BACK TO TOP ══ -->
<button id="back-to-top" onclick="window.scrollTo({top:0,behavior:'smooth'})">↑</button>

<script>
(function(){
    var t1 = [
        {text:'SEO Services',style:'d',icon:'<svg viewBox="0 0 24 24" fill="none"><circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/><line x1="21" y1="21" x2="16.65" y2="16.65" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'Content Writing',style:'b',icon:'<svg viewBox="0 0 24 24" fill="none"><path d="M12 20h9" stroke="currentColor" stroke-width="2"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'Social Media',style:'c',icon:'<svg viewBox="0 0 24 24" fill="none"><circle cx="18" cy="5" r="3" stroke="currentColor" stroke-width="2"/><circle cx="6" cy="12" r="3" stroke="currentColor" stroke-width="2"/><circle cx="18" cy="19" r="3" stroke="currentColor" stroke-width="2"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49" stroke="currentColor" stroke-width="2"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'PPC & Google Ads',style:'e',icon:'<svg viewBox="0 0 24 24" fill="none"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'Web Development',style:'a',icon:'<svg viewBox="0 0 24 24" fill="none"><polyline points="16 18 22 12 16 6" stroke="currentColor" stroke-width="2"/><polyline points="8 6 2 12 8 18" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'Video Editing',style:'b',icon:'<svg viewBox="0 0 24 24" fill="none"><polygon points="23 7 16 12 23 17 23 7" stroke="currentColor" stroke-width="2"/><rect x="1" y="5" width="15" height="14" rx="2" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'Meta Ads',style:'c',icon:'<svg viewBox="0 0 24 24" fill="none"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'UI/UX Design',style:'d',icon:'<svg viewBox="0 0 24 24" fill="none"><rect x="3" y="3" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2"/><path d="M3 9h18M9 21V9" stroke="currentColor" stroke-width="2"/></svg>'},
    ];
    var t2 = [
        {text:'Email Marketing',style:'a',icon:'<svg viewBox="0 0 24 24" fill="none"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" stroke="currentColor" stroke-width="2"/><polyline points="22,6 12,13 2,6" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'Brand Strategy',style:'c',icon:'<svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path d="M8 12h8M12 8v8" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'E-Commerce',style:'e',icon:'<svg viewBox="0 0 24 24" fill="none"><circle cx="9" cy="21" r="1" stroke="currentColor" stroke-width="2"/><circle cx="20" cy="21" r="1" stroke="currentColor" stroke-width="2"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'App Development',style:'b',icon:'<svg viewBox="0 0 24 24" fill="none"><rect x="5" y="2" width="14" height="20" rx="2" stroke="currentColor" stroke-width="2"/><line x1="12" y1="18" x2="12.01" y2="18" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'Analytics',style:'d',icon:'<svg viewBox="0 0 24 24" fill="none"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'Optimization',style:'a',icon:'<svg viewBox="0 0 24 24" fill="none"><line x1="18" y1="20" x2="18" y2="10" stroke="currentColor" stroke-width="2"/><line x1="12" y1="20" x2="12" y2="4" stroke="currentColor" stroke-width="2"/><line x1="6" y1="20" x2="6" y2="14" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'Local SEO',style:'c',icon:'<svg viewBox="0 0 24 24" fill="none"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke="currentColor" stroke-width="2"/><circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'Keyword Research',style:'e',icon:'<svg viewBox="0 0 24 24" fill="none"><circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/><line x1="21" y1="21" x2="16.65" y2="16.65" stroke="currentColor" stroke-width="2"/><line x1="8" y1="11" x2="14" y2="11" stroke="currentColor" stroke-width="2"/><line x1="11" y1="8" x2="11" y2="14" stroke="currentColor" stroke-width="2"/></svg>'},
    ];

    function buildTrack(items, id) {
        var el = document.getElementById(id);
        if(!el) return;
        var doubled = items.concat(items);
        var html = doubled.map(function(item){
            return '<div class="scroll-item"><div class="scroll-pill style-'+item.style+'"><div class="scroll-pill-icon">'+item.icon+'</div>'+item.text+'</div></div><span class="scroll-sep-star">✦</span>';
        }).join('');
        el.innerHTML = html;
    }
    buildTrack(t1, 'scrollTrack1');
    buildTrack(t2, 'scrollTrack2');
})();

window.addEventListener('scroll', function(){
    var btn = document.getElementById('back-to-top');
    if(window.scrollY > 400) btn.classList.add('visible');
    else btn.classList.remove('visible');
});
</script>

<?php include 'includes/virex-floating-social.php'; ?>
<?php include 'includes/footer.php'; ?>