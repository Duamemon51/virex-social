<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Let's Grow Your Business Together – Hashtag Media</title>
    <meta name="description" content="Have questions or ready to grow? Contact us today to connect with our digital marketing experts and start building your next success story.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
            --purple: #6254e7;
            --purple-light: #9289f1;
            --dark: #3b3663;
            --orange: #ff7426;
            --text: #7a7a7a;
            --white: #fff;
        }
        html { scroll-behavior: smooth; }
        body { font-family: 'Rubik', sans-serif; color: var(--text); background: var(--white); overflow-x: hidden; }
        h1,h2,h3,h4,h5,h6 { font-family: 'Nunito', sans-serif; font-weight: 800; color: var(--dark); }
        a { text-decoration: none; color: inherit; transition: all .2s; }
        p { color: var(--text); line-height: 1.65; }
        img { max-width: 100%; height: auto; display: block; }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 30px; width: 100%; }

        /* ═══════════════ HERO ═══════════════ */
        .contact-hero {
            position: relative;
            overflow: hidden;
            padding: 160px 0 130px;
            text-align: center;
            background: #3a3af0;
        }
        .contact-hero::before {
            content: '';
            position: absolute; inset: 0;
            background:
                radial-gradient(ellipse 80% 80% at 0% 50%, #5b3de8 0%, transparent 60%),
                radial-gradient(ellipse 60% 100% at 100% 30%, #8b2fc9 0%, transparent 55%),
                radial-gradient(ellipse 70% 60% at 50% 100%, #2222cc 0%, transparent 60%),
                linear-gradient(135deg, #3535e8 0%, #4c2bc4 40%, #7b1fa2 100%);
            z-index: 0;
        }
        .blob { position: absolute; z-index: 1; }
        .blob-1 { width: 65%; height: 200%; top: -60%; left: -15%; background: linear-gradient(140deg, rgba(0,180,220,0.55) 0%, rgba(40,120,255,0.35) 50%, transparent 80%); border-radius: 60% 40% 70% 30% / 50% 60% 40% 50%; transform: rotate(-15deg); filter: blur(2px); }
        .blob-2 { width: 55%; height: 180%; top: -40%; left: -5%; background: linear-gradient(160deg, rgba(0,210,240,0.3) 0%, rgba(20,100,220,0.2) 60%, transparent 90%); border-radius: 45% 55% 60% 40% / 60% 40% 60% 40%; transform: rotate(-10deg); filter: blur(1px); }
        .blob-3 { width: 50%; height: 150%; top: -25%; right: -10%; background: radial-gradient(ellipse 80% 80% at 60% 40%, rgba(160,40,200,0.75) 0%, rgba(120,20,180,0.5) 40%, transparent 75%); border-radius: 50% 50% 40% 60% / 40% 60% 40% 60%; }
        .blob-4 { width: 70%; height: 60%; bottom: -20%; left: 50%; transform: translateX(-50%); background: radial-gradient(ellipse 60% 60% at 50% 80%, rgba(40,40,180,0.6) 0%, transparent 70%); }
        .blob-5 { width: 45%; height: 130%; top: -15%; left: 5%; background: linear-gradient(150deg, rgba(0,230,255,0.18) 0%, rgba(0,180,220,0.1) 50%, transparent 80%); border-radius: 30% 70% 50% 50% / 50% 50% 50% 50%; transform: rotate(-5deg); filter: blur(0.5px); z-index: 2; }
        .hero-content { position: relative; z-index: 10; }
        .hero-badge {
            display: inline-flex; align-items: center; gap: 8px;
            background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.25);
            color: rgba(255,255,255,0.9); font-family: 'Nunito',sans-serif; font-weight: 700;
            font-size: 12px; letter-spacing: 2.5px; text-transform: uppercase;
            padding: 8px 20px; border-radius: 50px; margin-bottom: 28px;
        }
        .hero-badge-dot { width: 7px; height: 7px; background: var(--orange); border-radius: 50%; animation: pulse-dot 1.6s infinite; }
        @keyframes pulse-dot { 0%,100%{opacity:1;transform:scale(1);} 50%{opacity:.4;transform:scale(.8);} }
        .contact-hero h1 {
            font-family: 'Nunito', sans-serif; font-size: clamp(30px,5vw,58px);
            font-weight: 900; line-height: 1.1; color: #fff; margin-bottom: 20px;
            letter-spacing: -1px;
        }
        .contact-hero h1 span { color: var(--orange); }
        .contact-hero p.lead {
            color: rgba(255,255,255,0.78) !important; font-size: 17px;
            max-width: 580px; margin: 0 auto 40px; line-height: 1.75; font-weight: 400;
        }
        .btn-hero {
            background: rgba(255,255,255,0.15); color: #fff;
            border: 1.5px solid rgba(255,255,255,0.4); padding: 14px 40px;
            border-radius: 8px; font-family: 'Nunito',sans-serif; font-weight: 800;
            font-size: 15px; transition: all 0.3s; display: inline-block; letter-spacing: .3px;
        }
        .btn-hero:hover { background: rgba(255,255,255,0.28); border-color: rgba(255,255,255,0.7); transform: translateY(-3px); color: #fff; }
        /* floating particles in hero */
        .hero-particles { position: absolute; inset: 0; z-index: 3; pointer-events: none; overflow: hidden; }
        .particle {
            position: absolute; border-radius: 50%; opacity: .18;
            animation: float-particle linear infinite;
        }
        @keyframes float-particle {
            0% { transform: translateY(100vh) scale(0); opacity: 0; }
            10% { opacity: .18; }
            90% { opacity: .18; }
            100% { transform: translateY(-20vh) scale(1.2); opacity: 0; }
        }

        /* hero stats strip */
        .hero-stats {
            position: relative; z-index: 10;
            display: flex; justify-content: center; gap: 60px;
            margin-top: 60px; flex-wrap: wrap;
        }
        .hero-stat { text-align: center; }
        .hero-stat-num { font-family: 'Nunito',sans-serif; font-weight: 900; font-size: 32px; color: #fff; line-height: 1; }
        .hero-stat-label { font-size: 13px; color: rgba(255,255,255,0.6); margin-top: 4px; letter-spacing: .5px; }

        /* ═══════════════ INTRO SECTION ═══════════════ */
        .intro-section { padding: 100px 0 80px; background: #fff; }
        .intro-inner { max-width: 680px; margin: 0 auto; text-align: center; }
        .section-label {
            font-family: 'Nunito',sans-serif; font-weight: 700; font-size: 12px;
            letter-spacing: 3px; text-transform: uppercase; color: var(--purple);
            margin-bottom: 14px; display: block;
        }
        .intro-inner h2 { font-size: clamp(26px,3vw,38px); line-height: 1.2; margin-bottom: 18px; }
        .intro-inner p { font-size: 16px; color: var(--text); line-height: 1.8; }

        /* ═══════════════ BANNER IMAGE ═══════════════ */
        .banner-section { padding: 0 30px 80px; max-width: 1200px; margin: 0 auto; }
        .banner-img-wrap {
            border-radius: 24px; overflow: hidden;
            box-shadow: 0 30px 80px rgba(98,84,231,0.18);
            position: relative;
        }
        .banner-img-wrap img { width: 100%; display: block; }
        .banner-img-placeholder {
            width: 100%; height: 380px;
            background: linear-gradient(135deg, #3b3663 0%, #6254e7 50%, #9289f1 100%);
            display: flex; align-items: center; justify-content: center;
            flex-direction: column; gap: 16px;
        }
        .banner-img-placeholder svg { opacity: .4; }
        .banner-img-placeholder p { color: rgba(255,255,255,0.5) !important; font-size: 14px; }

        /* ═══════════════ CONTACT SPLIT ═══════════════ */
        .contact-split { padding: 0; position: relative; overflow: hidden; }
        .split-wrap { display: grid; grid-template-columns: 1fr 1.2fr; min-height: 720px; }

        /* LEFT dark panel */
        .split-left {
            background: linear-gradient(145deg, #1e1b40 0%, #2e2b60 45%, #3b2fa0 100%);
            padding: 80px 56px;
            position: relative; overflow: hidden;
            display: flex; flex-direction: column; justify-content: center;
        }
        .split-left::before {
            content: '';
            position: absolute; top: -100px; right: -100px;
            width: 380px; height: 380px;
            background: radial-gradient(circle, rgba(146,137,241,0.2) 0%, transparent 70%);
            border-radius: 50%;
        }
        .split-left::after {
            content: '';
            position: absolute; bottom: -80px; left: -80px;
            width: 300px; height: 300px;
            background: radial-gradient(circle, rgba(255,116,38,0.12) 0%, transparent 70%);
            border-radius: 50%;
        }
        .sl-inner { position: relative; z-index: 2; }
        .sl-badge {
            display: inline-flex; align-items: center; gap: 8px;
            background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.16);
            color: rgba(255,255,255,0.85); font-family: 'Nunito',sans-serif; font-weight: 700;
            font-size: 11px; letter-spacing: 2.5px; text-transform: uppercase;
            padding: 7px 16px; border-radius: 50px; margin-bottom: 28px;
        }
        .sl-badge-dot { width: 6px; height: 6px; background: var(--orange); border-radius: 50%; animation: pulse-dot 1.6s infinite; }
        .sl-title { font-family: 'Nunito',sans-serif; font-weight: 900; font-size: clamp(26px,3vw,42px); color: #fff; line-height: 1.12; margin-bottom: 16px; }
        .sl-title span { color: var(--orange); }
        .sl-desc { font-size: 15px; line-height: 1.8; color: rgba(255,255,255,0.62); margin-bottom: 44px; max-width: 340px; }
        .sl-items { display: flex; flex-direction: column; gap: 24px; margin-bottom: 44px; }
        .sl-item { display: flex; align-items: flex-start; gap: 16px; }
        .sl-icon {
            width: 48px; height: 48px; border-radius: 14px;
            background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.14);
            display: flex; align-items: center; justify-content: center; flex-shrink: 0;
            margin-top: 2px;
        }
        .sl-icon svg { width: 22px; height: 22px; stroke: rgba(255,255,255,0.8); fill: none; stroke-width: 1.8; stroke-linecap: round; stroke-linejoin: round; }
        .sl-item-title { font-family: 'Nunito',sans-serif; font-weight: 700; font-size: 14px; color: #fff; margin-bottom: 3px; }
        .sl-item-val { font-size: 13.5px; color: rgba(255,255,255,0.58); }
        .sl-divider { width: 52px; height: 2px; background: linear-gradient(90deg,var(--orange),transparent); border-radius: 2px; margin-bottom: 28px; }
        .sl-socials { display: flex; gap: 10px; }
        .sl-social {
            width: 40px; height: 40px; border-radius: 12px;
            background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.13);
            display: flex; align-items: center; justify-content: center; transition: all .25s;
        }
        .sl-social:hover { background: var(--purple); border-color: var(--purple); transform: translateY(-2px); }
        .sl-social svg { width: 17px; height: 17px; stroke: rgba(255,255,255,0.65); fill: none; stroke-width: 1.8; stroke-linecap: round; stroke-linejoin: round; }
        .sl-social:hover svg { stroke: #fff; }

        /* RIGHT form panel */
        .split-right {
            background: #f8f7ff;
            padding: 80px 60px;
            display: flex; flex-direction: column; justify-content: center;
        }
        .cr-label { font-family: 'Nunito',sans-serif; font-weight: 700; font-size: 11px; letter-spacing: 3px; text-transform: uppercase; color: var(--purple); margin-bottom: 10px; display: block; }
        .cr-title { font-family: 'Nunito',sans-serif; font-weight: 900; font-size: clamp(22px,2.5vw,34px); color: var(--dark); margin-bottom: 8px; line-height: 1.15; }
        .cr-sub { font-size: 15px; color: var(--text); line-height: 1.7; margin-bottom: 36px; }
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px; }
        .form-row.single { grid-template-columns: 1fr; }
        .fg { display: flex; flex-direction: column; gap: 7px; }
        .fg label { font-family: 'Nunito',sans-serif; font-weight: 700; font-size: 12px; color: var(--dark); letter-spacing: .3px; text-transform: uppercase; }
        .fg input, .fg select, .fg textarea {
            padding: 13px 16px;
            border: 1.5px solid rgba(98,84,231,0.16);
            border-radius: 10px;
            font-family: 'Rubik', sans-serif; font-size: 14.5px; color: var(--dark);
            background: #fff; outline: none;
            transition: border-color .22s, box-shadow .22s;
            -webkit-appearance: none;
        }
        .fg input::placeholder, .fg textarea::placeholder { color: #c0bcd8; }
        .fg input:focus, .fg select:focus, .fg textarea:focus {
            border-color: var(--purple);
            box-shadow: 0 0 0 4px rgba(98,84,231,0.1);
        }
        .fg textarea { resize: none; height: 120px; }
        .fg select { cursor: pointer; color: var(--dark); }
        .form-submit-row { margin-top: 22px; display: flex; align-items: center; gap: 20px; flex-wrap: wrap; }
        .btn-send {
            display: inline-flex; align-items: center; gap: 10px;
            background: linear-gradient(96deg, #9289f1 0%, #6254e7 55%, #9289f1 100%);
            background-size: 200% 100%;
            color: #fff; font-family: 'Nunito',sans-serif; font-weight: 800; font-size: 15px;
            padding: 15px 40px; border-radius: 10px; border: none; cursor: pointer;
            transition: all .35s; box-shadow: 0 12px 36px rgba(98,84,231,0.32);
            letter-spacing: .3px;
        }
        .btn-send:hover { background-position: 100% 0; transform: translateY(-3px); box-shadow: 0 18px 48px rgba(98,84,231,0.42); color: #fff; }
        .btn-send svg { width: 18px; height: 18px; transition: transform .3s; }
        .btn-send:hover svg { transform: translateX(4px); }
        .form-note { font-size: 13px; color: var(--text); line-height: 1.55; }
        .form-note strong { color: var(--dark); font-family: 'Nunito',sans-serif; font-weight: 700; }

        /* ═══════════════ MAP ═══════════════ */
        .map-section { width: 100%; }
        .map-section iframe { display: block; width: 100%; height: 420px; border: 0; filter: saturate(0.7) contrast(1.05); }

        /* ═══════════════ NEWSLETTER ═══════════════ */
        .newsletter-section {
            padding: 60px 0;
            background: linear-gradient(135deg, #f9f8ff 0%, #eef1ff 100%);
            border-top: 1px solid rgba(98,84,231,0.08);
        }
        .nl-inner { display: flex; align-items: center; gap: 60px; flex-wrap: wrap; }
        .nl-text { flex: 1; min-width: 260px; }
        .nl-icon-wrap { display: flex; align-items: center; gap: 18px; margin-bottom: 6px; }
        .nl-icon { width: 56px; height: 56px; border-radius: 16px; background: linear-gradient(135deg, #6254e7, #9289f1); display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
        .nl-icon svg { width: 26px; height: 26px; stroke: #fff; fill: none; stroke-width: 1.8; stroke-linecap: round; stroke-linejoin: round; }
        .nl-title { font-family: 'Nunito',sans-serif; font-weight: 900; font-size: 22px; color: var(--dark); }
        .nl-sub { font-size: 14.5px; color: var(--text); line-height: 1.6; margin-top: 4px; }
        .nl-discount { font-family: 'Nunito',sans-serif; font-weight: 800; color: var(--orange); font-size: 15px; }
        .nl-form { flex: 1; min-width: 300px; display: flex; gap: 12px; }
        .nl-form input {
            flex: 1; padding: 14px 18px;
            border: 1.5px solid rgba(98,84,231,0.2); border-radius: 10px;
            font-family: 'Rubik',sans-serif; font-size: 14.5px; color: var(--dark);
            background: #fff; outline: none; transition: border-color .22s, box-shadow .22s;
        }
        .nl-form input:focus { border-color: var(--purple); box-shadow: 0 0 0 4px rgba(98,84,231,0.1); }
        .nl-form input::placeholder { color: #c0bcd8; }
        .nl-form button {
            padding: 14px 30px;
            background: linear-gradient(96deg, #9289f1 0%, #6254e7 51%, #9289f1 100%);
            background-size: 200% 100%;
            color: #fff; font-family: 'Nunito',sans-serif; font-weight: 800; font-size: 14px;
            border: none; border-radius: 10px; cursor: pointer; white-space: nowrap;
            transition: all .3s; box-shadow: 0 8px 24px rgba(98,84,231,0.28);
        }
        .nl-form button:hover { background-position: 100% 0; transform: translateY(-2px); }

        /* ═══════════════ FOOTER ═══════════════ */
        .site-footer { background: var(--dark); padding: 60px 0 0; }
        .footer-top { display: grid; grid-template-columns: 1.4fr 1fr 1fr 1.2fr; gap: 48px; padding-bottom: 48px; border-bottom: 1px solid rgba(255,255,255,0.08); }
        .footer-logo { font-family: 'Nunito',sans-serif; font-weight: 900; font-size: 24px; color: #fff; margin-bottom: 14px; }
        .footer-logo span { color: var(--orange); }
        .footer-desc { font-size: 14px; color: rgba(255,255,255,0.5); line-height: 1.75; }
        .footer-col h5 { font-family: 'Nunito',sans-serif; font-weight: 800; font-size: 14px; color: #fff; letter-spacing: .5px; margin-bottom: 20px; }
        .footer-links { list-style: none; display: flex; flex-direction: column; gap: 10px; }
        .footer-links a { font-size: 14px; color: rgba(255,255,255,0.5); transition: color .2s; }
        .footer-links a:hover { color: var(--orange); }
        .footer-contact-items { display: flex; flex-direction: column; gap: 14px; }
        .footer-contact-item { display: flex; align-items: center; gap: 12px; }
        .footer-contact-item svg { width: 16px; height: 16px; stroke: var(--purple-light); fill: none; stroke-width: 2; stroke-linecap: round; stroke-linejoin: round; flex-shrink: 0; }
        .footer-contact-item span { font-size: 13.5px; color: rgba(255,255,255,0.5); }
        .footer-socials { display: flex; gap: 10px; margin-top: 20px; }
        .footer-social {
            width: 36px; height: 36px; border-radius: 10px;
            background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.1);
            display: flex; align-items: center; justify-content: center; transition: all .25s;
        }
        .footer-social:hover { background: var(--purple); border-color: var(--purple); transform: translateY(-2px); }
        .footer-social svg { width: 15px; height: 15px; stroke: rgba(255,255,255,0.6); fill: none; stroke-width: 1.8; stroke-linecap: round; stroke-linejoin: round; }
        .footer-social:hover svg { stroke: #fff; }
        .footer-bottom { padding: 20px 0; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px; }
        .footer-copy { font-size: 13px; color: rgba(255,255,255,0.35); }
        .footer-bottom-links { display: flex; gap: 20px; }
        .footer-bottom-links a { font-size: 13px; color: rgba(255,255,255,0.35); transition: color .2s; }
        .footer-bottom-links a:hover { color: rgba(255,255,255,0.7); }

        /* ═══════════════ RESPONSIVE ═══════════════ */
        @media(max-width:1024px) {
            .split-wrap { grid-template-columns: 1fr; }
            .split-left { padding: 60px 40px; min-height: auto; }
            .split-right { padding: 60px 40px; }
            .sl-desc { max-width: 100%; }
            .footer-top { grid-template-columns: 1fr 1fr; }
        }
        @media(max-width:768px) {
            .contact-hero { padding: 110px 0 90px; }
            .hero-stats { gap: 36px; }
            .intro-section { padding: 70px 0 60px; }
            .form-row { grid-template-columns: 1fr; }
            .split-left, .split-right { padding: 50px 24px; }
            .nl-inner { gap: 32px; }
            .nl-form { flex-direction: column; }
            .footer-top { grid-template-columns: 1fr; gap: 32px; }
            .footer-bottom { flex-direction: column; text-align: center; }
        }
    </style>
</head>
<body>
<?php include 'includes/header.php'; ?>
<!-- ═══════════════ HERO ═══════════════ -->
<section class="contact-hero">
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
    <div class="blob blob-3"></div>
    <div class="blob blob-4"></div>
    <div class="blob blob-5"></div>

    <!-- floating particles -->
    <div class="hero-particles" aria-hidden="true">
        <div class="particle" style="left:8%;width:6px;height:6px;background:#fff;animation-duration:18s;animation-delay:0s;"></div>
        <div class="particle" style="left:20%;width:4px;height:4px;background:#ff7426;animation-duration:14s;animation-delay:2s;"></div>
        <div class="particle" style="left:45%;width:8px;height:8px;background:#9289f1;animation-duration:20s;animation-delay:4s;"></div>
        <div class="particle" style="left:65%;width:5px;height:5px;background:#fff;animation-duration:16s;animation-delay:1s;"></div>
        <div class="particle" style="left:80%;width:6px;height:6px;background:#ff7426;animation-duration:22s;animation-delay:3s;"></div>
        <div class="particle" style="left:90%;width:4px;height:4px;background:#9289f1;animation-duration:12s;animation-delay:6s;"></div>
        <div class="particle" style="left:33%;width:5px;height:5px;background:#fff;animation-duration:17s;animation-delay:8s;"></div>
        <div class="particle" style="left:55%;width:7px;height:7px;background:#ff7426;animation-duration:15s;animation-delay:5s;"></div>
    </div>

    <div class="container hero-content">
      
        <h1>Let's Build <span>Something</span><br>Great Together</h1>
        <p class="lead">We'd love to hear from you. Whether you have a question, project idea, or need guidance — contact us and let's create digital success together.</p>
        <a href="#contact-form" class="btn-hero">Contact Us Now</a>
    </div>

    
</section>

<!-- ═══════════════ INTRO ═══════════════ -->
<section class="intro-section">
    <div class="container">
        <div class="intro-inner">
            <span class="section-label">business</span>
            <h2>Find the Perfect Solution for Your Business</h2>
            <p>At Hashtag Media, we believe every business is unique. That's why this page is the perfect place to start. Whether you're a startup looking to grow or an established brand ready to scale, we're here to listen. Our goal is to understand your needs and craft strategies that deliver real results. When you get in touch with us, you take the first step toward making your business smarter and stronger.</p>
        </div>
    </div>
</section>

<!-- ═══════════════ BANNER ═══════════════ -->
<div class="banner-section">
    <div class="banner-img-wrap">
        <img src="/Virex-web/public/contacts_01.webp" alt="Contact Banner" class="banner-img">
    </div>
</div>

<!-- ═══════════════ CONTACT SPLIT ═══════════════ -->
<section class="contact-split" id="contact-form">
    <div class="split-wrap">

        <!-- LEFT -->
        <div class="split-left">
            <div class="sl-inner">
                <div class="sl-badge"><span class="sl-badge-dot"></span> Get In Touch</div>
                <h2 class="sl-title">Contact<br><span>Us</span></h2>
                <p class="sl-desc">We'd love to hear from you! If you have a project in mind, need expert guidance, or just want to learn more about how we can help, contact us today. Our friendly team is ready to connect and provide the right support for your goals.</p>

                <div class="sl-items">
                    <div class="sl-item">
                        <div class="sl-icon">
                            <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.35 2 2 0 0 1 3.59 1h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L7.91 8.91a16 16 0 0 0 6 6l.42-.42a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 21 16.92z"/></svg>
                        </div>
                        <div>
                            <div class="sl-item-title">Phone</div>
                            <div class="sl-item-val">+971 50 915 9820</div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-icon">
                            <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </div>
                        <div>
                            <div class="sl-item-title">Send Email</div>
                            <div class="sl-item-val">contact@hashtagmedia.ae</div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-icon">
                            <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <div>
                            <div class="sl-item-title">Location</div>
                            <div class="sl-item-val">Dubai, UAE</div>
                        </div>
                    </div>
                </div>

                <div class="sl-divider"></div>

                <div class="sl-socials">
                    <a href="https://www.linkedin.com/company/hashtagmediadotae/" target="_blank" class="sl-social" aria-label="LinkedIn">
                        <svg viewBox="0 0 24 24"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                    <a href="https://www.facebook.com/share/1EPSHYUiM5/" target="_blank" class="sl-social" aria-label="Facebook">
                        <svg viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                    </a>
                    <a href="https://www.instagram.com/hashtagmediadotae" target="_blank" class="sl-social" aria-label="Instagram">
                        <svg viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- RIGHT FORM -->
        <div class="split-right">
            <span class="cr-label">Drop Us a Line</span>
            <h3 class="cr-title">Send Us a Message</h3>
            <p class="cr-sub">Looking for a digital marketing agency contact us form that's simple? You've found it. Just fill in your name, email, and message, and we'll get back to you as quickly as possible.</p>

            <form method="post" action="#" novalidate>
                <div class="form-row">
                    <div class="fg">
                        <label for="f-name">Name</label>
                        <input type="text" id="f-name" name="name" placeholder="Your full name" required>
                    </div>
                    <div class="fg">
                        <label for="f-email">Email</label>
                        <input type="email" id="f-email" name="email" placeholder="your@email.com" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="fg">
                        <label for="f-phone">Phone</label>
                        <input type="tel" id="f-phone" name="phone" placeholder="+971 00 000 0000" required>
                    </div>
                    <div class="fg">
                        <label for="f-service">Select a Service</label>
                        <select id="f-service" name="service" required>
                            <option value="">Choose a service...</option>
                            <option value="Web development">Web Development</option>
                            <option value="Search Engine Optimization">Search Engine Optimization</option>
                            <option value="Mobile App Development">Mobile App Development</option>
                            <option value="Website Maintenance">Website Maintenance</option>
                            <option value="Website Speed Optimization">Website Speed Optimization</option>
                            <option value="Pay Per Click">Pay Per Click</option>
                            <option value="Social Media Marketing">Social Media Marketing</option>
                            <option value="Social Media Management">Social Media Management</option>
                            <option value="Script Writing">Script Writing</option>
                            <option value="Online Reputation Management">Online Reputation Management</option>
                            <option value="Content Writing">Content Writing</option>
                            <option value="Email Marketing">Email Marketing</option>
                            <option value="Graphic Designing">Graphic Designing</option>
                            <option value="UI/UX">UI/UX</option>
                            <option value="Video Editing">Video Editing</option>
                        </select>
                    </div>
                </div>
                <div class="form-row single">
                    <div class="fg">
                        <label for="f-msg">Message</label>
                        <textarea id="f-msg" name="message" placeholder="Tell us about your project..." required></textarea>
                    </div>
                </div>
                <div class="form-submit-row">
                    <button class="btn-send" type="submit">
                        Send Message
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2L11 13"/><path d="M22 2L15 22 11 13 2 9l20-7z"/></svg>
                    </button>
                    <p class="form-note"><strong>No spam, ever.</strong><br>We reply within 24 hours.</p>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- ═══════════════ MAP ═══════════════ -->
<section class="map-section">
    <iframe
        src="https://maps.google.com/maps?q=Dubai&t=m&z=15&output=embed&iwloc=near"
        title="Hashtag Media – Dubai"
        aria-label="Dubai office location"
        loading="lazy"
    ></iframe>
</section>

<!-- ═══════════════ NEWSLETTER ═══════════════ -->
<section class="newsletter-section">
    <div class="container">
        <div class="nl-inner">
            <div class="nl-text">
                <div class="nl-icon-wrap">
                    <div class="nl-icon">
                        <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    </div>
                    <div class="nl-title">Sign up for Newsletter</div>
                </div>
                <div class="nl-sub">and receive <span class="nl-discount">20% discount</span> on first project</div>
            </div>
            <form class="nl-form" method="post" action="#" novalidate>
                <input type="email" name="nl_email" placeholder="Enter your email address" required>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>
</section>
<?php include 'includes/footer.php'; ?>
<!-- ═══════════════ FOOTER ═══════════════ */
<footer class="site-footer">
    <div class="container">
        <div class="footer-top">
            <div>
                <div class="footer-logo">#<span>Hashtag</span> Media</div>
                <p class="footer-desc">Hashtag Media is a digital agency that serves as a strategic partner, using creativity and innovation to enhance your online presence and drive impactful results.</p>
                <div class="footer-socials" style="margin-top:24px;">
                    <a href="https://www.linkedin.com/company/hashtagmediadotae/" target="_blank" class="footer-social" aria-label="LinkedIn">
                        <svg viewBox="0 0 24 24"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                    <a href="https://www.facebook.com/share/1EPSHYUiM5/" target="_blank" class="footer-social" aria-label="Facebook">
                        <svg viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                    </a>
                    <a href="https://www.instagram.com/hashtagmediadotae" target="_blank" class="footer-social" aria-label="Instagram">
                        <svg viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                    </a>
                </div>
            </div>

            <div class="footer-col">
                <h5>Quick Links</h5>
                <ul class="footer-links">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about-our-company/">About Us</a></li>
                    <li><a href="/careers/">Careers</a></li>
                    <li><a href="/blogs/">Blog</a></li>
                    <li><a href="/faq/">FAQs</a></li>
                    <li><a href="/contact-us/">Contact Us</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h5>Services</h5>
                <ul class="footer-links">
                    <li><a href="/web-development-service/">Web Design</a></li>
                    <li><a href="/seo-services/">Search Engine Optimization</a></li>
                    <li><a href="/ppc-services/">Pay Per Click</a></li>
                    <li><a href="/smm-services/">Social Media Marketing</a></li>
                    <li><a href="/video-editing-agency/">Video Editing</a></li>
                    <li><a href="/app-development-service/">Mobile App Development</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h5>Reach Us At</h5>
                <div class="footer-contact-items">
                    <div class="footer-contact-item">
                        <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        <span>contact@hashtagmedia.ae</span>
                    </div>
                    <div class="footer-contact-item">
                        <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        <span>Dubai, UAE</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p class="footer-copy">© Hashtag Media 2026 — All Rights Reserved.</p>
            <div class="footer-bottom-links">
                <a href="/privacy-policy/">Privacy Policy</a>
                <a href="/contact-us/">Contact Us</a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>