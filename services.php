<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services — Virex Social | Digital Marketing Agency</title>
    <meta name="description" content="Full-service digital marketing — SEO, PPC, Web Development, Social Media, Video Editing & more. Built for impact, designed for growth.">

    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* ===== VARIABLES ===== */
        :root {
            --gold:   #f4b400;
            --teal:   #00c8cc;
            --violet: #6c3cff;
            --deep:   #1a0a4a;
            --ink:    #0d0d1a;
            --muted:  #5a5775;
            --border: rgba(108,60,255,0.10);
            --pill:   50px;
            --tr:     0.3s cubic-bezier(0.4,0,0.2,1);
        }
        *, *::before, *::after { margin:0; padding:0; box-sizing:border-box; }
        html { scroll-behavior: smooth; }
        body { font-family: 'DM Sans', sans-serif; background: #fff; color: var(--ink); overflow-x: hidden; }
        p { color: #7a7a7a; }
        a { text-decoration: none; }

        /* ===== HERO BANNER ===== */
        .svc-hero {
            position: relative;
            overflow: hidden;
            padding: 140px 0 120px;
            text-align: center;
            /* Base gradient background matching the screenshot */
            background: #3a3af0;
        }

        /* Main gradient backdrop */
        .svc-hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background:
                radial-gradient(ellipse 80% 80% at 0% 50%, #5b3de8 0%, transparent 60%),
                radial-gradient(ellipse 60% 100% at 100% 30%, #8b2fc9 0%, transparent 55%),
                radial-gradient(ellipse 70% 60% at 50% 100%, #2222cc 0%, transparent 60%),
                linear-gradient(135deg, #3535e8 0%, #4c2bc4 40%, #7b1fa2 100%);
            z-index: 0;
        }

        /* ===== BLOB SHAPES (matching screenshot) ===== */

        /* Large teal/cyan wave blob - left-center */
        .blob-1 {
            position: absolute;
            width: 65%;
            height: 200%;
            top: -60%;
            left: -15%;
            background: linear-gradient(140deg, rgba(0, 180, 220, 0.55) 0%, rgba(40, 120, 255, 0.35) 50%, transparent 80%);
            border-radius: 60% 40% 70% 30% / 50% 60% 40% 50%;
            transform: rotate(-15deg);
            z-index: 1;
            filter: blur(2px);
        }

        /* Secondary teal wave blob - overlapping */
        .blob-2 {
            position: absolute;
            width: 55%;
            height: 180%;
            top: -40%;
            left: -5%;
            background: linear-gradient(160deg, rgba(0, 210, 240, 0.3) 0%, rgba(20, 100, 220, 0.2) 60%, transparent 90%);
            border-radius: 45% 55% 60% 40% / 60% 40% 60% 40%;
            transform: rotate(-10deg);
            z-index: 1;
            filter: blur(1px);
        }

        /* Right purple/magenta orb blob */
        .blob-3 {
            position: absolute;
            width: 50%;
            height: 150%;
            top: -25%;
            right: -10%;
            background: radial-gradient(ellipse 80% 80% at 60% 40%, rgba(160, 40, 200, 0.75) 0%, rgba(120, 20, 180, 0.5) 40%, transparent 75%);
            border-radius: 50% 50% 40% 60% / 40% 60% 40% 60%;
            z-index: 1;
        }

        /* Bottom center glow */
        .blob-4 {
            position: absolute;
            width: 70%;
            height: 60%;
            bottom: -20%;
            left: 50%;
            transform: translateX(-50%);
            background: radial-gradient(ellipse 60% 60% at 50% 80%, rgba(40, 40, 180, 0.6) 0%, transparent 70%);
            z-index: 1;
        }

        /* Inner teal highlight arc */
        .blob-5 {
            position: absolute;
            width: 45%;
            height: 130%;
            top: -15%;
            left: 5%;
            background: linear-gradient(150deg, rgba(0, 230, 255, 0.18) 0%, rgba(0, 180, 220, 0.1) 50%, transparent 80%);
            border-radius: 30% 70% 50% 50% / 50% 50% 50% 50%;
            transform: rotate(-5deg);
            z-index: 2;
            filter: blur(0.5px);
        }

        .svc-hero .hero-content {
            position: relative;
            z-index: 10;
        }

        .svc-hero .badge-pill {
            display: none; /* not visible in screenshot */
        }

        .svc-hero h1 {
            font-family: 'Syne', sans-serif;
            font-size: clamp(28px, 4.5vw, 52px);
            font-weight: 800;
            line-height: 1.15;
            color: #fff;
            margin-bottom: 18px;
            letter-spacing: -0.5px;
        }

        /* No gradient span — plain white like screenshot */
        .svc-hero h1 span {
            color: #fff;
            background: none;
            -webkit-background-clip: unset;
            -webkit-text-fill-color: #fff;
            background-clip: unset;
        }

        .svc-hero p.lead {
            color: rgba(255,255,255,0.80) !important;
            font-size: 16px;
            max-width: 600px;
            margin: 0 auto 32px;
            line-height: 1.7;
            font-weight: 400;
        }

        /* Ghost / outlined button — matching screenshot exactly */
        .btn-hero {
            background: rgba(108,60,255,0.55);
            color: #fff;
            border: 1.5px solid rgba(255,255,255,0.45);
            padding: 12px 32px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 15px;
            transition: all var(--tr);
            display: inline-block;
            letter-spacing: 0.01em;
        }

        .btn-hero:hover {
            background: rgba(108,60,255,0.80);
            color: #fff;
            border-color: rgba(255,255,255,0.70);
            transform: translateY(-2px);
        }

        @media (max-width: 991px) {
            .svc-hero { padding: 100px 0 80px; }
            .blob-1 { width: 100%; left: -30%; }
            .blob-3 { width: 70%; right: -20%; }
        }
        @media (max-width: 767px) {
            .svc-hero { padding: 80px 0 70px; }
        }

        /* ===== WHY US ===== */
        .why-section {
            padding: 100px 0 80px;
            background: #f6f5ff;
        }
        .section-label {
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--violet);
            margin-bottom: 14px;
            display: block;
        }
        .section-title {
            font-family: 'Syne', sans-serif;
            font-size: clamp(28px, 4vw, 44px);
            font-weight: 800;
            color: var(--deep);
            line-height: 1.2;
            margin-bottom: 18px;
        }
        .why-card {
            background: #fff;
            border-radius: 20px;
            padding: 36px 32px;
            border: 1px solid var(--border);
            transition: all var(--tr);
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        .why-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0;
            width: 4px; height: 100%;
            background: linear-gradient(180deg, var(--violet), var(--teal));
            border-radius: 4px 0 0 4px;
            transform: scaleY(0);
            transition: transform var(--tr);
        }
        .why-card:hover { transform: translateY(-6px); box-shadow: 0 20px 50px rgba(108,60,255,0.12); }
        .why-card:hover::before { transform: scaleY(1); }
        .why-num {
            font-family: 'Syne', sans-serif;
            font-size: 42px;
            font-weight: 800;
            color: rgba(108,60,255,0.08);
            line-height: 1;
            margin-bottom: 10px;
        }
        .why-card h3 {
            font-family: 'Syne', sans-serif;
            font-size: 20px;
            font-weight: 700;
            color: var(--deep);
            margin-bottom: 12px;
        }
        .why-card p { font-size: 14.5px; line-height: 1.7; }

        /* ===== SERVICES GRID ===== */
        .svc-section {
            padding: 100px 0;
            background: #fff;
        }
        .svc-col-label {
            font-family: 'Syne', sans-serif;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--violet);
            margin-bottom: 28px;
            padding-bottom: 12px;
            border-bottom: 2px solid var(--border);
            display: block;
        }
        .svc-item {
            display: flex;
            align-items: flex-start;
            gap: 18px;
            padding: 24px 0;
            border-bottom: 1px solid var(--border);
            transition: all var(--tr);
            cursor: default;
        }
        .svc-item:last-child { border-bottom: none; }
        .svc-item:hover { padding-left: 8px; }
        .svc-icon-wrap {
            width: 52px; height: 52px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 22px;
        }
        .ic-purple { background: rgba(108,60,255,0.10); color: var(--violet); }
        .ic-gold   { background: rgba(244,180,0,0.12); color: #e0a500; }
        .ic-teal   { background: rgba(0,200,204,0.10); color: #00a8ac; }
        .ic-orange { background: rgba(255,116,38,0.12); color: #ff7426; }
        .ic-green  { background: rgba(97,206,112,0.12); color: #3ab54a; }
        .svc-item h4 {
            font-family: 'Syne', sans-serif;
            font-size: 17px;
            font-weight: 700;
            color: var(--deep);
            margin-bottom: 6px;
        }
        .svc-item p { font-size: 14px; line-height: 1.65; margin: 0; }

        /* ===== CTA BANNER ===== */
        .cta-section {
            padding: 100px 0;
            background: linear-gradient(135deg, var(--deep) 0%, #2d1578 60%, #1a0a4a 100%);
            position: relative;
            overflow: hidden;
            text-align: center;
        }
        .cta-section::before {
            content: '';
            position: absolute;
            width: 700px; height: 700px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(108,60,255,0.2) 0%, transparent 70%);
            top: -300px; right: -200px;
        }
        .cta-section h2 {
            font-family: 'Syne', sans-serif;
            font-size: clamp(28px, 4vw, 48px);
            font-weight: 800;
            color: #fff;
            margin-bottom: 16px;
            letter-spacing: -0.5px;
        }
        .cta-section p { color: rgba(255,255,255,0.65) !important; font-size: 17px; margin-bottom: 36px; }
        .btn-cta-white {
            background: #fff;
            color: var(--violet);
            font-weight: 700;
            padding: 14px 36px;
            border-radius: var(--pill);
            font-size: 15px;
            transition: all var(--tr);
            box-shadow: 0 8px 28px rgba(0,0,0,0.2);
            display: inline-block;
        }
        .btn-cta-white:hover { transform: translateY(-3px); box-shadow: 0 14px 36px rgba(0,0,0,0.3); color: var(--violet); }

        /* ===== FAQ ===== */
        .faq-section {
            padding: 100px 0;
            background: #f6f5ff;
        }
        .faq-accordion .accordion-item {
            border: none;
            border-bottom: 1px solid var(--border);
            background: transparent;
            border-radius: 0 !important;
        }
        .faq-accordion .accordion-button {
            font-family: 'Syne', sans-serif;
            font-size: 16px;
            font-weight: 700;
            color: var(--deep);
            background: transparent;
            padding: 22px 0;
            box-shadow: none;
        }
        .faq-accordion .accordion-button::after {
            filter: hue-rotate(220deg);
        }
        .faq-accordion .accordion-button:not(.collapsed) {
            color: var(--violet);
            background: transparent;
        }
        .faq-accordion .accordion-body {
            padding: 0 0 22px;
            font-size: 15px;
            color: #7a7a7a;
            line-height: 1.75;
        }
        .faq-q-tag {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 28px; height: 28px;
            background: var(--violet);
            color: #fff;
            border-radius: 7px;
            font-size: 12px;
            font-weight: 700;
            margin-right: 8px;
            flex-shrink: 0;
        }
        .faq-img-wrap img {
            width: 100%;
            max-width: 320px;
            border-radius: 24px;
            box-shadow: 0 20px 60px rgba(26,10,74,0.15);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 991px) {
            .why-section, .svc-section, .cta-section, .faq-section { padding: 70px 0; }
        }
        @media (max-width: 767px) {
            .faq-img-wrap { display: none; }
        }
    </style>
</head>
<body>

<?php include 'includes/header.php'; ?>

<!-- ===== HERO ===== -->
<section class="svc-hero">
    <!-- Abstract blob shapes matching the screenshot design -->
    <div class="blob-1"></div>
    <div class="blob-2"></div>
    <div class="blob-3"></div>
    <div class="blob-4"></div>
    <div class="blob-5"></div>

    <div class="container hero-content">
        <h1>Join Our Team—Start Your Career in Digital Marketing</h1>
        <p class="lead">
            A career in digital marketing offers exciting opportunities in a rapidly growing field, where creativity, analytics, and technology converge to shape the future of business and online communication.
        </p>
        <a href="contact.php" class="btn-hero">Contact Us</a>
    </div>
</section>

<!-- ===== WHY US ===== -->
<section class="why-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-7">
                <span class="section-label">Why Work With Us?</span>
                <h2 class="section-title">Why Work With Us?</h2>
                <p style="font-size:16px; line-height:1.75; max-width:580px;">
                    We're not here to throw buzzwords at you; our digital marketing services make your life easier.
                    From building a website to running ads or crafting a marketing plan, our focus is on making
                    things work for your business, not just look good on paper.
                </p>
                <p style="font-size:16px; margin-top:14px;">Here's what makes us different:</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="why-card">
                    <div class="why-num">01</div>
                    <h3>Tailored Strategies</h3>
                    <p>Your business is unique, and your marketing should reflect that. From web development services to SEO services, we make plans that fit your goals.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="why-card">
                    <div class="why-num">02</div>
                    <h3>Proven Expertise</h3>
                    <p>Our team blends creativity with data. From PPC management services or SMM services, we know how to get results that last.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="why-card">
                    <div class="why-num">03</div>
                    <h3>All-in-One Partner</h3>
                    <p>Skip the hassle of juggling multiple vendors. We handle it all, video editing services, app development services, and more, under one roof.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="why-card">
                    <div class="why-num">04</div>
                    <h3>Built for Growth</h3>
                    <p>We design every project to help your brand grow over time, not just for launch day.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SERVICES GRID ===== -->
<section class="svc-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8">
                <span class="section-label">Our Services</span>
                <h2 class="section-title">What We Offer: Full-Service<br>Digital Solutions</h2>
            </div>
        </div>
        <div class="row g-5">

            <!-- Column 1 -->
            <div class="col-lg-4">
                <span class="svc-col-label">Marketing & Ads</span>

                <div class="svc-item">
                    <div class="svc-icon-wrap ic-purple"><i class="bi bi-megaphone-fill"></i></div>
                    <div>
                        <h4>Paid Marketing</h4>
                        <p>Boost your online presence with our Meta Ads services. From social media marketing to email campaigns, we drive targeted traffic and optimize your online reputation. Let's get you the results you deserve!</p>
                    </div>
                </div>

                <div class="svc-item">
                    <div class="svc-icon-wrap ic-gold"><i class="bi bi-camera-video-fill"></i></div>
                    <div>
                        <h4>Video Editing</h4>
                        <p>Stand out online with scroll-stopping videos. Our video editing services turn your raw footage into polished content. We can help you with social media, ads, YouTube, and beyond.</p>
                    </div>
                </div>
            </div>

            <!-- Column 2 -->
            <div class="col-lg-4">
                <span class="svc-col-label">Web & SEO</span>

                <div class="svc-item">
                    <div class="svc-icon-wrap ic-green"><i class="bi bi-code-slash"></i></div>
                    <div>
                        <h4>Website Development</h4>
                        <p>Want a website that looks great and works seamlessly? We handle custom development, maintenance, and speed optimization to keep your site secure, fast, and ranking higher on Google. Together, we'll make your brand unstoppable.</p>
                    </div>
                </div>

                <div class="svc-item">
                    <div class="svc-icon-wrap ic-purple"><i class="bi bi-search"></i></div>
                    <div>
                        <h4>Search Engine Optimization</h4>
                        <p>Boost your Google ranking with our SEO services. We create keyword-optimized, engaging content that drives traffic and enhances site performance. Let's get you noticed!</p>
                    </div>
                </div>
            </div>

            <!-- Column 3 -->
            <div class="col-lg-4">
                <span class="svc-col-label">Design & Apps</span>

                <div class="svc-item">
                    <div class="svc-icon-wrap ic-orange"><i class="bi bi-phone-fill"></i></div>
                    <div>
                        <h4>Mobile App Development</h4>
                        <p>Have an app idea? We design and build high-performance mobile apps for iOS and Android. Our app development service covers everything from planning to launch, and beyond.</p>
                    </div>
                </div>

                <div class="svc-item">
                    <div class="svc-icon-wrap ic-teal"><i class="bi bi-layout-wtf"></i></div>
                    <div>
                        <h4>UI/UX Designing</h4>
                        <p>We create intuitive, user-friendly designs with our expert UI/UX and graphic design services. Our team brings your vision to life with stunning visuals, ensuring an exceptional digital experience that elevates your brand.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ===== CTA BANNER ===== -->
<section class="cta-section">
    <div class="container position-relative" style="z-index:2;">
        <h2>From Clicks to Conversions —<br>Digital Solutions That Deliver</h2>
        <p>All your digital needs, one expert team. From SEO and PPC to web and app development, we deliver results that matter.</p>
        <a href="contact.php" class="btn-cta-white">Get Started Now</a>
    </div>
</section>

<!-- ===== FAQ ===== -->
<section class="faq-section">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-6">
                <span class="section-label">FAQs</span>
                <h2 class="section-title">Most Popular Questions</h2>
                <p style="margin-bottom:36px;">Have questions about our digital marketing services? Let's talk.</p>

                <div class="accordion faq-accordion" id="faqAccordion">

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                <span class="faq-q-tag">Q</span>
                                Do I need all your services, or can I choose just one?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You can choose exactly what you need. From one of our digital marketing services, like SEO services or PPC management services, or a full package, it's up to you.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                <span class="faq-q-tag">Q</span>
                                Can you work with my existing website or app?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes! Our team can enhance your current web development service project or upgrade your existing app development service without starting from scratch.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                <span class="faq-q-tag">Q</span>
                                How quickly can you start my project?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Most marketing services start within a few days of signing the agreement. This includes SMM services, video editing services, or development work.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                <span class="faq-q-tag">Q</span>
                                Do you provide reports or updates?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Absolutely. For all digital marketing services, from SEO services to PPC management services, we provide regular reports. This way, you always know the results.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                <span class="faq-q-tag">Q</span>
                                Can you work with my budget?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we offer flexible packages for everything from video editing services to app development services. This makes it easy to get high-quality work within your budget.
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- FAQ Decorative Side -->
            <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center">
                <div class="faq-img-wrap text-center">
                    <div style="background: linear-gradient(135deg, var(--violet), #8a5cf6); border-radius: 28px; padding: 50px 40px; color: #fff; position: relative; overflow: hidden; max-width: 340px; margin: auto;">
                        <div style="position:absolute; top:-60px; right:-60px; width:160px; height:160px; border-radius:50%; background:rgba(255,255,255,0.07);"></div>
                        <div style="position:absolute; bottom:-40px; left:-40px; width:120px; height:120px; border-radius:50%; background:rgba(255,255,255,0.05);"></div>
                        <div style="font-size:48px; margin-bottom:20px;">🚀</div>
                        <h3 style="font-family:'Syne',sans-serif; font-size:24px; font-weight:800; margin-bottom:14px; color:#fff;">Ready to Grow?</h3>
                        <p style="color:rgba(255,255,255,0.75)!important; font-size:15px; margin-bottom:28px; line-height:1.6;">Let's talk about what digital marketing can do for your business today.</p>
                        <a href="contact.php" style="background:#fff; color:var(--violet); font-weight:700; padding:12px 28px; border-radius:50px; display:inline-block; font-size:14px; transition:all 0.3s;">Start Today →</a>
                        <div style="display:flex; gap:20px; margin-top:30px; padding-top:24px; border-top:1px solid rgba(255,255,255,0.15);">
                            <div style="flex:1; text-align:center;">
                                <div style="font-family:'Syne',sans-serif; font-size:26px; font-weight:800; color:#fff;">6+</div>
                                <div style="font-size:12px; color:rgba(255,255,255,0.6);">Services</div>
                            </div>
                            <div style="flex:1; text-align:center;">
                                <div style="font-family:'Syne',sans-serif; font-size:26px; font-weight:800; color:#fff;">50+</div>
                                <div style="font-size:12px; color:rgba(255,255,255,0.6);">Experts</div>
                            </div>
                            <div style="flex:1; text-align:center;">
                                <div style="font-family:'Syne',sans-serif; font-size:26px; font-weight:800; color:#fff;">1.2k+</div>
                                <div style="font-size:12px; color:rgba(255,255,255,0.6);">Clients</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
(function () {
    var trigger   = document.getElementById('servicesTrigger');
    var menu      = document.getElementById('megaMenu');
    var chevron   = document.getElementById('servicesChevron');
    var wrapper   = document.getElementById('servicesWrapper');
    var toggler   = document.getElementById('vsToggler');
    var navWrap   = document.getElementById('vsNavWrap');
    var toggleIcon= document.getElementById('vsToggleIcon');

    if (trigger && menu) {
        trigger.addEventListener('click', function (e) {
            e.preventDefault();
            var open = menu.classList.toggle('open');
            chevron.style.transform = open ? 'rotate(180deg)' : 'rotate(0)';
        });
        document.addEventListener('click', function (e) {
            if (!wrapper.contains(e.target)) {
                menu.classList.remove('open');
                chevron.style.transform = 'rotate(0)';
            }
        });
    }
    if (toggler && navWrap) {
        toggler.addEventListener('click', function () {
            var open = navWrap.classList.toggle('open');
            toggleIcon.className = open ? 'bi bi-x' : 'bi bi-list';
        });
    }
})();
</script>

</body>
</html>