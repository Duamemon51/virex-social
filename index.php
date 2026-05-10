<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virex Social – Expert Digital Marketing Services</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800;900&family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --purple: #6254e7;
            --purple-light: #9289f1;
            --dark: #3b3663;
            --orange: #ff7426;
            --text: #7a7a7a;
            --white: #fff;
            --bg: #f9f9fc;
        }

        body { font-family: 'Rubik', sans-serif; color: var(--text); background: var(--white); overflow-x: hidden; }
        h1,h2,h3,h4,h5,h6 { font-family: 'Nunito', sans-serif; font-weight: 800; color: var(--dark); }
        a { text-decoration: none; color: inherit; }

        .container { max-width: 1200px; margin: 0 auto; padding: 0 30px; width: 100%; }

        /* ─── SVG ICON BASE ─── */
        .svg-icon { display: inline-flex; align-items: center; justify-content: center; }
        .svg-icon svg { stroke-linecap: round; stroke-linejoin: round; fill: none; }

        /* ─── HERO ─── */
        .hero {
            min-height: 100vh;
            background: var(--white);
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            padding: 120px 0 60px;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: -200px; right: -200px;
            width: 600px; height: 600px;
            background: radial-gradient(circle, rgba(98,84,231,0.07) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }
        .hero-inner {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }
        .hero-left { position: relative; z-index: 2; }

        .hero-badge {
            display: inline-flex; align-items: center; gap: 10px;
            background: rgba(98,84,231,0.08);
            color: var(--purple);
            font-family: 'Nunito', sans-serif; font-weight: 700;
            font-size: 12px; letter-spacing: 2px; text-transform: uppercase;
            padding: 8px 18px; border-radius: 50px; margin-bottom: 24px;
        }
        .badge-dot { width: 8px; height: 8px; background: var(--purple); border-radius: 50%; animation: pulse 1.5s infinite; }
        @keyframes pulse { 0%,100%{opacity:1;transform:scale(1)} 50%{opacity:.5;transform:scale(1.4)} }

        .hero-title { font-size: clamp(34px,5vw,56px); line-height: 1.1; margin-bottom: 16px; }
        .typed-wrapper { display: block; color: var(--purple); min-height: 1.2em; }
        .hero-desc { font-size: 17px; line-height: 1.75; max-width: 460px; margin-bottom: 36px; }

        .hero-cta {
            display: inline-flex; align-items: center; gap: 10px;
            background: linear-gradient(96deg, #9289f1, #6254e7);
            color: #fff; font-family: 'Nunito', sans-serif; font-weight: 700; font-size: 15px;
            padding: 16px 36px; border-radius: 8px;
            transition: all .3s; box-shadow: 0 10px 30px rgba(98,84,231,.3);
        }
        .hero-cta:hover { transform: translateY(-3px); box-shadow: 0 15px 40px rgba(98,84,231,.45); }
        .hero-cta svg { width:18px; height:18px; stroke: white; stroke-width: 2.5; }

        .hero-stats {
            display: flex; gap: 40px; margin-top: 48px;
            padding-top: 32px; border-top: 1px solid rgba(98,84,231,.1);
        }
        .stat-number {
            font-family: 'Nunito', sans-serif; font-weight: 900;
            font-size: 38px; color: var(--dark); line-height: 1;
        }
        .stat-number sup { font-size: 22px; color: var(--orange); }
        .stat-label { font-size: 13px; color: var(--text); margin-top: 4px; }

        /* Hero Right */
        .hero-right { position: relative; height: 560px; }
        .hero-img-main {
            position: absolute; top: 0; left: 50%; transform: translateX(-50%);
            width: 240px; height: 320px; border-radius: 20px; overflow: hidden;
            box-shadow: 0 30px 80px rgba(0,0,0,.15); z-index: 3;
        }
        .hero-img-left {
            position: absolute; left: 0; top: 60px;
            width: 200px; height: 260px; border-radius: 16px; overflow: hidden;
            box-shadow: 0 20px 60px rgba(0,0,0,.12); z-index: 2;
        }
        .hero-img-right {
            position: absolute; right: 0; top: 120px;
            width: 190px; height: 240px; border-radius: 16px; overflow: hidden;
            box-shadow: 0 20px 60px rgba(0,0,0,.12); z-index: 2;
        }
        .hero-img-main img, .hero-img-left img, .hero-img-right img {
            width: 100%; height: 100%; object-fit: cover; display: block;
        }

        /* Floating SVG elements */
        .float-el {
            position: absolute; z-index: 10;
            animation: floatY 4s ease-in-out infinite;
        }
        @keyframes floatY { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-12px)} }

        .float-rocket { top: 10px; right: 20px; animation-delay: .5s; }
        .float-lamp   { left: 10px; bottom: 90px; animation-delay: 1s; }

        /* Dashed path decoration — same style as uploaded image */
        .deco-path {
            position: absolute;
            pointer-events: none;
        }
        .deco-path-lamp {
            left: -10px; bottom: 30px;
            width: 120px; height: 120px;
        }
        .deco-path-rocket {
            right: -10px; top: 50px;
            width: 100px; height: 100px;
        }

        .float-card {
            position: absolute;
            bottom: 30px; left: 50%; transform: translateX(-50%);
            background: white; border-radius: 16px;
            padding: 14px 20px; box-shadow: 0 20px 60px rgba(0,0,0,.15);
            display: flex; align-items: center; gap: 14px; white-space: nowrap;
            animation: floatY 3s ease-in-out infinite .3s; z-index: 10;
        }
        .float-card-icon {
            width: 42px; height: 42px;
            background: linear-gradient(135deg,#9289f1,#6254e7);
            border-radius: 10px; display: flex; align-items: center; justify-content: center;
        }
        .float-card-icon svg { width:22px; height:22px; stroke:white; stroke-width:2; }
        .float-card-text strong { display:block; font-family:'Nunito',sans-serif; font-weight:800; font-size:16px; color:var(--dark); }
        .float-card-text span { font-size:12px; color:var(--text); }

        .deco-circle {
            position: absolute; border-radius: 50%; pointer-events: none;
            width: 280px; height: 280px;
            border: 2px dashed rgba(98,84,231,.15);
            top: -30px; left: -30px;
            animation: rotateSlow 20s linear infinite;
        }
        @keyframes rotateSlow { from{transform:rotate(0deg)} to{transform:rotate(360deg)} }

        /* ─── BRANDS ─── */
        .brands-section {
            padding: 36px 0;
            border-top: 1px solid rgba(0,0,0,.06);
            border-bottom: 1px solid rgba(0,0,0,.06);
        }
        .brands-inner { display:flex; align-items:center; justify-content:space-between; gap:24px; flex-wrap:wrap; }
        .brand-logo { font-family:'Nunito',sans-serif; font-weight:800; font-size:17px; color:#ccc; letter-spacing:1px; transition:color .3s; }
        .brand-logo:hover { color:var(--purple); }

        /* ─── SECTION COMMONS ─── */
        .section-label {
            font-family:'Nunito',sans-serif; font-weight:700;
            font-size:12px; letter-spacing:2.5px; text-transform:uppercase;
            color:var(--purple); margin-bottom:12px;
        }
        .section-title { font-size:clamp(26px,4vw,42px); line-height:1.2; margin-bottom:16px; }
        .section-desc { font-size:17px; line-height:1.75; color:var(--text); max-width:500px; margin-bottom:60px; }

        /* ─── SERVICES ─── */
        .services-section { padding: 100px 0; background: var(--bg); }
        .services-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:24px; }

        .service-card {
            background: var(--white); border-radius: 20px; padding: 36px 30px;
            box-shadow: 0 4px 24px rgba(0,0,0,.06);
            transition: all .35s cubic-bezier(.4,0,.2,1);
            border: 1px solid rgba(98,84,231,.06);
            position: relative; overflow: hidden;
        }
        .service-card::before {
            content:''; position:absolute; inset:0;
            background: linear-gradient(135deg,#9289f1,#6254e7);
            opacity:0; transition:opacity .35s;
        }
        .service-card:hover::before { opacity:1; }
        .service-card:hover { transform:translateY(-8px); box-shadow:0 20px 60px rgba(98,84,231,.3); }
        .service-card > * { position:relative; z-index:1; }

        .service-icon {
            width: 60px; height: 60px;
            background: rgba(98,84,231,.1);
            border-radius: 16px;
            display: flex; align-items: center; justify-content: center;
            margin-bottom: 20px; transition: background .35s;
        }
        .service-icon svg { width:28px; height:28px; stroke:var(--purple); stroke-width:1.8; transition:stroke .35s; }
        .service-card:hover .service-icon { background: rgba(255,255,255,.2); }
        .service-card:hover .service-icon svg { stroke: white; }

        .service-title { font-size:20px; color:var(--dark); margin-bottom:12px; transition:color .35s; }
        .service-card:hover .service-title { color:white; }
        .service-desc { font-size:15px; line-height:1.7; transition:color .35s; }
        .service-card:hover .service-desc { color:rgba(255,255,255,.85); }

        .services-cta { text-align:center; margin-top:48px; }
        .btn-outline {
            display:inline-flex; align-items:center; gap:8px;
            border:2px solid var(--purple); color:var(--purple);
            font-family:'Nunito',sans-serif; font-weight:700; font-size:13px;
            padding:14px 32px; border-radius:8px; transition:all .3s;
            letter-spacing:.5px; text-transform:uppercase;
        }
        .btn-outline:hover { background:var(--purple); color:white; box-shadow:0 10px 30px rgba(98,84,231,.3); }

        /* ─── SCROLLING TEXT ─── */
        .scrolling-section { background:linear-gradient(96deg,#9289f1,#6254e7); overflow:hidden; }
        .scrolling-track {
            display:flex; gap:60px; padding:28px 0; white-space:nowrap;
            animation:scrollLeft 25s linear infinite;
        }
        @keyframes scrollLeft { from{transform:translateX(0)} to{transform:translateX(-50%)} }
        .scroll-item {
            font-family:'Nunito',sans-serif; font-weight:900;
            font-size:clamp(18px,3vw,28px); letter-spacing:2px; text-transform:uppercase;
            color:rgba(255,255,255,.3); flex-shrink:0;
        }
        .scroll-item em { color:rgba(255,255,255,.75); font-style:normal; margin: 0 40px; }

        /* ─── PROCESS ─── */
        .process-section {
            padding:100px 0 160px;
            background:linear-gradient(135deg,#3b3663,#2a2547);
            position:relative; overflow:hidden;
        }
        .process-section::after {
            content:'';
            position:absolute; bottom:0; left:0; right:0; height:100px;
            background:var(--bg);
            clip-path: ellipse(55% 100% at 50% 100%);
        }
        .process-section .section-title { color:white; }
        .process-section .section-label { color:var(--orange); }

        .process-grid { display:grid; grid-template-columns:repeat(4,1fr); gap:30px; margin-top:60px; position:relative; }

        /* connector line */
        .process-grid::before {
            content:'';
            position:absolute; top:40px; left:10%; right:10%; height:2px;
            background: repeating-linear-gradient(90deg, rgba(255,255,255,.2) 0, rgba(255,255,255,.2) 8px, transparent 8px, transparent 16px);
        }

        .process-card { text-align:center; position:relative; }

        .process-num {
            position:absolute; top:-12px; right:20px;
            font-family:'Nunito',sans-serif; font-weight:900; font-size:60px;
            color:rgba(255,255,255,.04); line-height:1; pointer-events:none;
        }

        .process-icon-wrap {
            width:80px; height:80px;
            background:rgba(255,255,255,.07);
            border:1.5px solid rgba(255,255,255,.12);
            border-radius:20px;
            display:flex; align-items:center; justify-content:center;
            margin:0 auto 20px;
            transition:all .3s;
        }
        .process-icon-wrap svg { width:34px; height:34px; stroke:rgba(255,255,255,.7); stroke-width:1.6; }
        .process-card:hover .process-icon-wrap { background:var(--purple); border-color:var(--purple); }
        .process-card:hover .process-icon-wrap svg { stroke:white; }

        .process-title { font-size:17px; color:white; margin-bottom:10px; }
        .process-desc { font-size:14px; color:rgba(255,255,255,.55); line-height:1.7; }

        /* ─── ABOUT ─── */
        .about-section { padding:100px 0; background:var(--bg); }
        .about-inner { display:grid; grid-template-columns:1fr 1fr; gap:80px; align-items:center; }

        .about-img-wrap { position:relative; }
        .about-img-main { width:100%; border-radius:20px; overflow:hidden; box-shadow:0 30px 80px rgba(0,0,0,.12); }
        .about-img-main img { width:100%; height:500px; object-fit:cover; display:block; }

        .about-img-badge {
            position:absolute; bottom:-20px; right:-20px;
            background:linear-gradient(135deg,var(--orange),#f0ac0e);
            color:white; font-family:'Nunito',sans-serif; font-weight:900;
            padding:24px; border-radius:20px; text-align:center;
            box-shadow:0 20px 50px rgba(255,116,38,.4);
        }
        .about-img-badge .num { font-size:40px; line-height:1; }
        .about-img-badge .lbl { font-size:12px; font-weight:600; opacity:.9; margin-top:4px; }

        .about-features { display:grid; grid-template-columns:1fr 1fr; gap:20px; margin-bottom:36px; }
        .about-feature { display:flex; align-items:flex-start; gap:14px; }

        .feature-icon {
            width:44px; height:44px; background:rgba(98,84,231,.1);
            border-radius:12px; display:flex; align-items:center; justify-content:center; flex-shrink:0;
        }
        .feature-icon svg { width:22px; height:22px; stroke:var(--purple); stroke-width:1.8; }
        .feature-text strong { display:block; font-family:'Nunito',sans-serif; font-weight:800; font-size:15px; color:var(--dark); margin-bottom:3px; }
        .feature-text span { font-size:13px; color:var(--text); }

        .btn-primary {
            display:inline-flex; align-items:center; gap:10px;
            background:linear-gradient(96deg,#9289f1,#6254e7);
            color:white; font-family:'Nunito',sans-serif; font-weight:700; font-size:15px;
            padding:16px 36px; border-radius:8px;
            transition:all .3s; box-shadow:0 10px 30px rgba(98,84,231,.25);
        }
        .btn-primary:hover { transform:translateY(-3px); box-shadow:0 15px 40px rgba(98,84,231,.4); }
        .btn-primary svg { width:18px; height:18px; stroke:white; stroke-width:2.5; }

        /* ─── TESTIMONIALS ─── */
        .testimonials-section { padding:100px 0; background:var(--white); }
        .testimonials-header { text-align:center; max-width:600px; margin:0 auto 60px; }
        .testimonials-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:24px; }

        .testimonial-card {
            background:var(--white); border:1px solid rgba(98,84,231,.1);
            border-radius:20px; padding:36px;
            box-shadow:0 4px 30px rgba(0,0,0,.05); transition:all .3s;
        }
        .testimonial-card:hover { box-shadow:0 20px 60px rgba(98,84,231,.12); transform:translateY(-4px); border-color:rgba(98,84,231,.25); }

        .testimonial-quote { margin-bottom:16px; }
        .testimonial-quote svg { width:32px; height:32px; fill:rgba(98,84,231,.15); }

        .testimonial-stars { display:flex; gap:3px; margin-bottom:14px; }
        .testimonial-stars svg { width:16px; height:16px; fill:#f0ac0e; stroke:none; }

        .testimonial-text { font-size:15px; line-height:1.8; color:var(--text); font-style:italic; margin-bottom:24px; }

        .testimonial-author { display:flex; align-items:center; gap:14px; }
        .author-avatar {
            width:48px; height:48px; border-radius:50%;
            background:linear-gradient(135deg,var(--purple-light),var(--purple));
            display:flex; align-items:center; justify-content:center;
            font-family:'Nunito',sans-serif; font-weight:900; font-size:16px; color:white; flex-shrink:0;
        }
        .author-info strong { display:block; font-family:'Nunito',sans-serif; font-weight:800; font-size:15px; color:var(--dark); }
        .author-info span { font-size:13px; color:var(--text); }

        /* ─── FAQ ─── */
        .faq-section { padding:100px 0; background:var(--bg); }
        .faq-inner { display:grid; grid-template-columns:1fr 1fr; gap:80px; align-items:start; }
        .faq-list { display:flex; flex-direction:column; gap:16px; }

        .faq-item {
            background:var(--white); border-radius:16px;
            border:1px solid rgba(98,84,231,.08); overflow:hidden; transition:box-shadow .3s;
        }
        .faq-item:hover { box-shadow:0 8px 30px rgba(98,84,231,.1); }

        .faq-question {
            padding:22px 24px; display:flex; justify-content:space-between; align-items:center;
            cursor:pointer; font-family:'Nunito',sans-serif; font-weight:700; font-size:16px;
            color:var(--dark); user-select:none; gap:16px;
        }
        .faq-toggle {
            width:32px; height:32px; background:rgba(98,84,231,.1);
            border-radius:50%; display:flex; align-items:center; justify-content:center;
            flex-shrink:0; transition:all .3s;
        }
        .faq-toggle svg { width:14px; height:14px; stroke:var(--purple); stroke-width:2.5; transition:all .3s; }
        .faq-item.open .faq-toggle { background:var(--purple); transform:rotate(45deg); }
        .faq-item.open .faq-toggle svg { stroke:white; }

        .faq-answer {
            max-height:0; overflow:hidden; transition:max-height .4s ease,padding .3s;
            font-size:15px; line-height:1.75; color:var(--text); padding:0 24px;
        }
        .faq-item.open .faq-answer { max-height:300px; padding:0 24px 22px; }

        .faq-img-side img { width:100%; border-radius:20px; box-shadow:0 30px 80px rgba(0,0,0,.1); }

        /* ─── CONTACT ─── */
        .contact-section { padding:100px 0; background:var(--white); }
        .contact-inner { display:grid; grid-template-columns:1fr 1fr; gap:80px; align-items:center; }

        .contact-form-wrap {
            background:var(--bg); border-radius:24px; padding:48px 40px;
            border:1px solid rgba(98,84,231,.08);
        }
        .form-grid { display:grid; grid-template-columns:1fr 1fr; gap:20px; margin-bottom:20px; }
        .form-group { display:flex; flex-direction:column; gap:8px; }
        .form-group.full { grid-column:1/-1; }
        .form-group label { font-family:'Nunito',sans-serif; font-weight:700; font-size:13px; color:var(--dark); letter-spacing:.5px; }

        .form-control {
            background:white; border:1px solid rgba(98,84,231,.15);
            border-radius:10px; padding:14px 16px;
            font-family:'Rubik',sans-serif; font-size:15px; color:var(--dark);
            outline:none; transition:border-color .3s; width:100%;
        }
        .form-control:focus { border-color:var(--purple); box-shadow:0 0 0 3px rgba(98,84,231,.08); }
        .form-control::placeholder { color:#bbb; }
        textarea.form-control { resize:none; height:120px; }

        .btn-submit {
            width:100%; background:linear-gradient(96deg,#9289f1,#6254e7);
            color:white; border:none; font-family:'Nunito',sans-serif;
            font-weight:800; font-size:16px; padding:18px; border-radius:10px;
            cursor:pointer; transition:all .3s;
            box-shadow:0 10px 30px rgba(98,84,231,.25); margin-top:8px;
            display:flex; align-items:center; justify-content:center; gap:10px;
        }
        .btn-submit:hover { transform:translateY(-3px); box-shadow:0 15px 40px rgba(98,84,231,.4); }
        .btn-submit svg { width:18px; height:18px; stroke:white; stroke-width:2.5; }

        .contact-items { display:flex; flex-direction:column; gap:24px; margin-top:40px; }
        .contact-item { display:flex; align-items:center; gap:16px; }
        .contact-item-icon {
            width:52px; height:52px;
            background:rgba(98,84,231,.08);
            border-radius:14px; display:flex; align-items:center; justify-content:center; flex-shrink:0;
        }
        .contact-item-icon svg { width:24px; height:24px; stroke:var(--purple); stroke-width:1.8; }
        .contact-item-text strong { display:block; font-family:'Nunito',sans-serif; font-weight:800; font-size:15px; color:var(--dark); }
        .contact-item-text span { font-size:14px; color:var(--text); }

        /* ─── NEWSLETTER ─── */
        .newsletter-section {
            padding:80px 0; background:linear-gradient(135deg,#6254e7,#9289f1);
            position:relative; overflow:hidden;
        }
        .newsletter-section::before {
            content:''; position:absolute; top:-100px; right:-100px;
            width:400px; height:400px; background:rgba(255,255,255,.06); border-radius:50%;
        }
        .newsletter-inner { display:flex; align-items:center; justify-content:space-between; gap:40px; }
        .newsletter-text h2 { color:white; margin-bottom:8px; }
        .newsletter-text p { color:rgba(255,255,255,.8); font-size:16px; }
        .newsletter-form { display:flex; flex-shrink:0; }
        .newsletter-input {
            background:rgba(255,255,255,.15); border:1px solid rgba(255,255,255,.25);
            border-right:none; border-radius:10px 0 0 10px;
            padding:16px 24px; font-family:'Rubik',sans-serif; font-size:15px;
            color:white; outline:none; width:300px;
        }
        .newsletter-input::placeholder { color:rgba(255,255,255,.6); }
        .newsletter-btn {
            background:var(--orange); border:none; border-radius:0 10px 10px 0;
            padding:16px 28px; font-family:'Nunito',sans-serif; font-weight:800;
            font-size:15px; color:white; cursor:pointer; transition:background .3s; white-space:nowrap;
            display:flex; align-items:center; gap:8px;
        }
        .newsletter-btn:hover { background:#e06520; }
        .newsletter-btn svg { width:16px; height:16px; stroke:white; stroke-width:2.5; }

        /* ─── FOOTER ─── */
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

        /* ─── RESPONSIVE ─── */
        @media(max-width:992px){
            .hero-inner,.about-inner,.faq-inner,.contact-inner { grid-template-columns:1fr; }
            .hero-right { height:380px; }
            .services-grid,.process-grid { grid-template-columns:repeat(2,1fr); }
            .testimonials-grid { grid-template-columns:1fr; }
            .footer-inner { grid-template-columns:1fr 1fr; }
            .newsletter-inner { flex-direction:column; text-align:center; }
            .process-grid::before { display:none; }
        }
        @media(max-width:600px){
            .services-grid,.process-grid,.footer-inner { grid-template-columns:1fr; }
            .hero-right { display:none; }
            .form-grid { grid-template-columns:1fr; }
            .hero-stats { flex-wrap:wrap; gap:20px; }
        }
    </style>
</head>
<body>

<!-- ════════════════════════════════════════
     HERO
════════════════════════════════════════ -->
<section class="hero">
    <div class="container">
        <div class="hero-inner">

            <!-- Left -->
            <div class="hero-left">
                <div class="hero-badge">
                    <span class="badge-dot"></span>
                    Digital Marketing Agency
                </div>
                <h1 class="hero-title">
                    Expert Digital<br>Marketing Services<br>
                    <span class="typed-wrapper" id="typed-text">for Growth</span>
                </h1>
                <p class="hero-desc">Our results-driven digital marketing services connect you with the right audience and fuel sustainable business growth.</p>
                <a href="contact-us/" class="hero-cta">
                    Contact Today
                    <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <div class="hero-stats">
                    <div class="stat-item">
                        <div class="stat-number" data-count="6">0<sup>+</sup></div>
                        <div class="stat-label">Services</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-count="50">0<sup>+</sup></div>
                        <div class="stat-label">Professionals</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-count="1200">0<sup>+</sup></div>
                        <div class="stat-label">Happy Clients</div>
                    </div>
                </div>
            </div>

            <!-- Right — Image Grid -->
            <div class="hero-right">
                <div class="deco-circle"></div>

                <div class="hero-img-main">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=500&fit=crop&crop=face" alt="Marketing Professional">
                </div>
                <div class="hero-img-left">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=300&h=400&fit=crop" alt="Team">
                </div>
                <div class="hero-img-right">
                    <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?w=300&h=360&fit=crop" alt="Strategy">
                </div>

                <!-- Floating Rocket SVG -->
                <div class="float-el float-rocket">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- dashed path behind -->
                        <path d="M55 8 Q60 32 40 50" stroke="#6254e7" stroke-width="1.5" stroke-dasharray="4 4" fill="none" opacity="0.4"/>
                        <!-- rocket body -->
                        <path d="M32 10 C32 10 44 14 46 28 L36 38 L26 38 L16 28 C18 14 32 10 32 10Z" stroke="#3b3663" stroke-width="1.8" fill="white"/>
                        <!-- window -->
                        <circle cx="32" cy="26" r="5" stroke="#6254e7" stroke-width="1.8" fill="rgba(98,84,231,0.1)"/>
                        <!-- fins -->
                        <path d="M16 28 L10 36 L20 34" stroke="#3b3663" stroke-width="1.8" fill="none"/>
                        <path d="M46 28 L52 36 L42 34" stroke="#3b3663" stroke-width="1.8" fill="none"/>
                        <!-- flame -->
                        <path d="M26 38 Q29 48 32 44 Q35 48 38 38" stroke="#ff7426" stroke-width="1.8" fill="none"/>
                    </svg>
                </div>

                <!-- Floating Bulb SVG — same style as uploaded image -->
                <div class="float-el float-lamp">
                    <svg width="70" height="90" viewBox="0 0 70 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- dashed curved path -->
                        <path d="M30 80 Q10 85 15 70 Q20 55 35 65" stroke="#6254e7" stroke-width="1.5" stroke-dasharray="4 4" fill="none" opacity="0.5"/>
                        <!-- shine rays -->
                        <line x1="35" y1="4" x2="35" y2="1"  stroke="#3b3663" stroke-width="1.8" stroke-linecap="round"/>
                        <line x1="48" y1="8"  x2="50" y2="6"  stroke="#3b3663" stroke-width="1.8" stroke-linecap="round"/>
                        <line x1="22" y1="8"  x2="20" y2="6"  stroke="#3b3663" stroke-width="1.8" stroke-linecap="round"/>
                        <line x1="55" y1="18" x2="58" y2="17" stroke="#3b3663" stroke-width="1.8" stroke-linecap="round"/>
                        <line x1="15" y1="18" x2="12" y2="17" stroke="#3b3663" stroke-width="1.8" stroke-linecap="round"/>
                        <!-- bulb glass -->
                        <path d="M22 30 C22 20 28 14 35 14 C42 14 48 20 48 30 C48 36 45 40 42 43 L42 50 L28 50 L28 43 C25 40 22 36 22 30Z" stroke="#3b3663" stroke-width="1.8" fill="rgba(98,84,231,0.06)"/>
                        <!-- filament -->
                        <path d="M30 44 L30 38 Q33 35 35 38 Q37 41 35 38 Q37 35 40 38 L40 44" stroke="#6254e7" stroke-width="1.5" fill="none"/>
                        <!-- base bands -->
                        <line x1="28" y1="51" x2="42" y2="51" stroke="#3b3663" stroke-width="1.8" stroke-linecap="round"/>
                        <line x1="29" y1="55" x2="41" y2="55" stroke="#3b3663" stroke-width="1.8" stroke-linecap="round"/>
                        <line x1="31" y1="59" x2="39" y2="59" stroke="#3b3663" stroke-width="1.8" stroke-linecap="round"/>
                    </svg>
                </div>

                <!-- Floating card -->
                <div class="float-card">
                    <div class="float-card-icon">
                        <!-- trending up icon -->
                        <svg viewBox="0 0 24 24" fill="none"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
                    </div>
                    <div class="float-card-text">
                        <strong>1,200+</strong>
                        <span>Happy Clients</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     BRAND LOGOS
════════════════════════════════════════ -->
<section class="brands-section">
    <div class="container">
        <div class="brands-inner">
            <div class="brand-logo">ENDURANCE BLENDS</div>
            <div class="brand-logo">✦ XLNC</div>
            <div class="brand-logo">Personal Weddings</div>
            <div class="brand-logo">King Murals</div>
            <div class="brand-logo">Curby's</div>
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     SERVICES
════════════════════════════════════════ -->
<section class="services-section">
    <div class="container">
        <div class="section-label">Our Services</div>
        <h2 class="section-title">Everything You Need to<br>Dominate Online</h2>
        <p class="section-desc">From SEO to social media, we provide end-to-end digital marketing solutions that drive real, measurable results.</p>

        <div class="services-grid">

            <!-- Meta Ads -->
            <div class="service-card">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                </div>
                <h3 class="service-title">Meta Ads</h3>
                <p class="service-desc">Boost your online presence with our Meta Ads services. We drive targeted traffic, maximize your ROI, and optimize your online reputation.</p>
            </div>

            <!-- Web Development -->
            <div class="service-card">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/><polyline points="7 8 10 11 7 14"/><line x1="13" y1="14" x2="17" y2="14"/></svg>
                </div>
                <h3 class="service-title">Website Development</h3>
                <p class="service-desc">Custom, responsive websites that look great and work seamlessly. We handle development, maintenance, and speed optimization.</p>
            </div>

            <!-- SEO -->
            <div class="service-card">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="8" y1="11" x2="14" y2="11"/><line x1="11" y1="8" x2="11" y2="14"/></svg>
                </div>
                <h3 class="service-title">SEO Services</h3>
                <p class="service-desc">Boost your Google ranking with keyword-optimized, engaging content that drives sustained organic traffic and enhances site performance.</p>
            </div>

            <!-- Snapchat -->
            <div class="service-card">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24"><path d="M12 2C8 2 5 5 5 9v1c0 1-1 2-2 2.5.5.5 1 1 1 2 0 1-2 1.5-2 2 0 .8 1.5 1.2 3 1.5.3.8.8 1 1.5 1 .5 0 1-.2 1.5-.5.5.5 1.5 1 3 1s2.5-.5 3-1c.5.3 1 .5 1.5.5.7 0 1.2-.2 1.5-1 1.5-.3 3-.7 3-1.5 0-.5-2-1-2-2 0-1 .5-1.5 1-2C20 13 19 12 19 11V9c0-4-3-7-7-7z"/></svg>
                </div>
                <h3 class="service-title">Snapchat Management</h3>
                <p class="service-desc">We transform your Snapchat Stories into a high-earning asset with custom content creation and strategic audience growth management.</p>
            </div>

            <!-- Video Editing -->
            <div class="service-card">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24"><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2"/></svg>
                </div>
                <h3 class="service-title">Video Editing</h3>
                <p class="service-desc">From reels to brand promos, our editing team tells your story with style — making sure your videos stand out and drive engagement.</p>
            </div>

            <!-- UI/UX -->
            <div class="service-card">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                </div>
                <h3 class="service-title">UI/UX Designing</h3>
                <p class="service-desc">We create intuitive, user-friendly designs that elevate your brand with stunning visuals and an exceptional digital experience.</p>
            </div>

        </div>

        <div class="services-cta">
            <a href="services/" class="btn-outline">View More Services</a>
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     SCROLLING TEXT
════════════════════════════════════════ -->
<section class="scrolling-section">
    <div style="overflow:hidden">
        <div class="scrolling-track">
            <?php for($i=0;$i<6;$i++): ?>
            <span class="scroll-item">Website Designing <em>✦</em> WordPress Development <em>✦</em> Digital Marketing <em>✦</em> SEO Services <em>✦</em></span>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     PROCESS
════════════════════════════════════════ -->
<section class="process-section">
    <div class="container">
        <div class="section-label">Work Process</div>
        <h2 class="section-title">How We Streamline<br>Our Design Workflow</h2>

        <div class="process-grid">

            <div class="process-card">
                <div class="process-num">01</div>
                <div class="process-icon-wrap">
                    <!-- document / contract -->
                    <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><line x1="10" y1="9" x2="8" y2="9"/></svg>
                </div>
                <h3 class="process-title">Preparation of Contract</h3>
                <p class="process-desc">We understand your goals and expectations, then set a clear roadmap for a confident start.</p>
            </div>

            <div class="process-card">
                <div class="process-num">02</div>
                <div class="process-icon-wrap">
                    <!-- bar chart / analysis -->
                    <svg viewBox="0 0 24 24"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/><line x1="2" y1="20" x2="22" y2="20"/></svg>
                </div>
                <h3 class="process-title">Data Analysis</h3>
                <p class="process-desc">We analyze your audience, competitors, and market trends to shape strategies backed by real data.</p>
            </div>

            <div class="process-card">
                <div class="process-num">03</div>
                <div class="process-icon-wrap">
                    <!-- activity / progress -->
                    <svg viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                </div>
                <h3 class="process-title">Progress Report</h3>
                <p class="process-desc">Stay informed with regular updates and performance metrics — growth thrives on collaboration.</p>
            </div>

            <div class="process-card">
                <div class="process-num">04</div>
                <div class="process-icon-wrap">
                    <!-- award / satisfied -->
                    <svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/></svg>
                </div>
                <h3 class="process-title">Satisfied Customers</h3>
                <p class="process-desc">We deliver results that make clients stay — that's why we're the best digital marketing company.</p>
            </div>

        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     ABOUT
════════════════════════════════════════ -->
<section class="about-section">
    <div class="container">
        <div class="about-inner">
            <div class="about-img-wrap">
                <div class="about-img-main">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=600&h=500&fit=crop" alt="Outstanding Digital Experience">
                </div>
                <div class="about-img-badge">
                    <div class="num">10+</div>
                    <div class="lbl">Years of<br>Experience</div>
                </div>
            </div>

            <div class="about-content">
                <div class="section-label">About Us</div>
                <h2 class="section-title">Outstanding Digital<br>Experience</h2>
                <p class="section-desc">Great design is just the beginning. Our digital marketing services create powerful online experiences that connect and convert. We help brands tell their story in ways that feel real and unforgettable.</p>

                <div class="about-features">
                    <div class="about-feature">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                        </div>
                        <div class="feature-text">
                            <strong>Targeted Campaigns</strong>
                            <span>Reach the right audience every time</span>
                        </div>
                    </div>
                    <div class="about-feature">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
                        </div>
                        <div class="feature-text">
                            <strong>Proven Results</strong>
                            <span>Data-driven strategies that work</span>
                        </div>
                    </div>
                    <div class="about-feature">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                        </div>
                        <div class="feature-text">
                            <strong>Fast Execution</strong>
                            <span>Quick turnaround without compromise</span>
                        </div>
                    </div>
                    <div class="about-feature">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        </div>
                        <div class="feature-text">
                            <strong>Dedicated Support</strong>
                            <span>Your success is our priority</span>
                        </div>
                    </div>
                </div>

                <a href="about-our-company/" class="btn-primary">
                    Discover More
                    <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     TESTIMONIALS
════════════════════════════════════════ -->
<section class="testimonials-section">
    <div class="container">
        <div class="testimonials-header">
            <div class="section-label">Testimonials</div>
            <h2 class="section-title">What People Say</h2>
        </div>

        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-quote">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/></svg>
                </div>
                <div class="testimonial-stars">
                    <?php for($i=0;$i<5;$i++): ?><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><?php endfor; ?>
                </div>
                <p class="testimonial-text">"Working with Virex Social was one of the best decisions we made. Their team is responsive, innovative, and truly understands what works in the digital space."</p>
                <div class="testimonial-author">
                    <div class="author-avatar">AK</div>
                    <div class="author-info">
                        <strong>Ahmed Khan</strong>
                        <span>CEO, TechBrand UAE</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-quote">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/></svg>
                </div>
                <div class="testimonial-stars">
                    <?php for($i=0;$i<5;$i++): ?><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><?php endfor; ?>
                </div>
                <p class="testimonial-text">"We saw amazing results within weeks. The team delivered real value through targeted campaigns, creative strategies, and expert support. They're our go-to agency."</p>
                <div class="testimonial-author">
                    <div class="author-avatar">SR</div>
                    <div class="author-info">
                        <strong>Sara Rizwan</strong>
                        <span>Marketing Manager, Luxe Co</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-quote">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/></svg>
                </div>
                <div class="testimonial-stars">
                    <?php for($i=0;$i<5;$i++): ?><svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg><?php endfor; ?>
                </div>
                <p class="testimonial-text">"Professional, fast, and effective. Virex Social helped us grow online and become more visible. Easily the best digital marketing company we've worked with."</p>
                <div class="testimonial-author">
                    <div class="author-avatar">MJ</div>
                    <div class="author-info">
                        <strong>Michael John</strong>
                        <span>Founder, StartupX</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     FAQ
════════════════════════════════════════ -->
<section class="faq-section">
    <div class="container">
        <div class="faq-inner">
            <div>
                <div class="section-label">FAQs</div>
                <h2 class="section-title">Most Popular<br>Questions</h2>
                <p style="color:var(--text);margin-bottom:36px;line-height:1.75;font-size:16px;">Everything you need to know about our digital marketing services and how we work with you.</p>

                <div class="faq-list">
                    <?php
                    $faqs = [
                        ["What services does Virex Social offer?", "We offer a full range of digital marketing services, including SEO, social media marketing, PPC, web development, branding, and video editing — all customized to help your brand grow online."],
                        ["How do I get started with Virex Social?", "Just reach out through our contact form, email, or WhatsApp. We'll schedule a free discovery call to understand your goals and suggest the right strategy."],
                        ["Do you manage all social media platforms?", "Yes! We create and manage content for Instagram, Facebook, LinkedIn, TikTok, and more — tailored to your target audience and business goals."],
                        ["Do you build custom websites?", "Definitely. We design responsive, user-friendly websites that reflect your brand and drive results — whether it's a landing page or a full e-commerce site."],
                        ["What industries do you work with?", "We work with businesses across all industries — real estate, tech, fitness, food, healthcare, and more. Our digital marketing services adapt to any niche."],
                    ];
                    foreach($faqs as $i => $faq):
                    ?>
                    <div class="faq-item <?= $i===0?'open':'' ?>">
                        <div class="faq-question" onclick="toggleFaq(this)">
                            <?= $faq[0] ?>
                            <div class="faq-toggle">
                                <svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                            </div>
                        </div>
                        <div class="faq-answer"><?= $faq[1] ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="faq-img-side">
                <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?w=600&h=700&fit=crop" alt="FAQ">
            </div>
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     CONTACT
════════════════════════════════════════ -->
<section class="contact-section">
    <div class="container">
        <div class="contact-inner">
            <div class="contact-info">
                <div class="section-label">Get In Touch</div>
                <h2 class="section-title">Let's Get In<br>Touch</h2>
                <p class="section-desc">Ready to take your digital presence to the next level? Our team is here to help you achieve your goals.</p>

                <div class="contact-items">
                    <div class="contact-item">
                        <div class="contact-item-icon">
                            <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </div>
                        <div class="contact-item-text">
                            <strong>Email Us</strong>
                            <span>contact@virexsocial.com</span>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item-icon">
                            <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <div class="contact-item-text">
                            <strong>Location</strong>
                            <span>Dubai, UAE</span>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-item-icon">
                            <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                        <div class="contact-item-text">
                            <strong>Working Hours</strong>
                            <span>Mon – Sat, 9AM – 7PM</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form-wrap">
                <form method="post" action="">
                    <div class="form-grid">
                        <div class="form-group">
                            <label>Your Name</label>
                            <input type="text" class="form-control" placeholder="John Doe" required>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="john@example.com" required>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="tel" class="form-control" placeholder="+971 XX XXX XXXX">
                        </div>
                        <div class="form-group">
                            <label>Select Service</label>
                            <select class="form-control">
                                <option>Select a service</option>
                                <option>Web Development</option>
                                <option>SEO Services</option>
                                <option>Social Media Marketing</option>
                                <option>Meta Ads</option>
                                <option>Video Editing</option>
                                <option>UI/UX Design</option>
                            </select>
                        </div>
                        <div class="form-group full">
                            <label>Your Message</label>
                            <textarea class="form-control" placeholder="Tell us about your project..."></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn-submit">
                        Send Message
                        <svg viewBox="0 0 24 24" fill="none"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- ════════════════════════════════════════
     NEWSLETTER
════════════════════════════════════════ -->
<section class="newsletter-section">
    <div class="container">
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
</section>

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
<!-- Back to Top -->
<button id="back-to-top" onclick="window.scrollTo({top:0,behavior:'smooth'})">↑</button>

<script>
// ===== TYPED TEXT ANIMATION =====
const typedEl = document.getElementById('typed-text');
const words = ['for Growth', 'for Success', 'for Results'];
let wordIdx = 0, charIdx = 0, deleting = false;

function typeEffect() {
    const current = words[wordIdx];
    if (!deleting) {
        typedEl.textContent = current.substring(0, charIdx + 1);
        charIdx++;
        if (charIdx === current.length) {
            deleting = true;
            setTimeout(typeEffect, 1500);
            return;
        }
    } else {
        typedEl.textContent = current.substring(0, charIdx - 1);
        charIdx--;
        if (charIdx === 0) {
            deleting = false;
            wordIdx = (wordIdx + 1) % words.length;
        }
    }
    setTimeout(typeEffect, deleting ? 60 : 100);
}
typeEffect();

// ===== COUNTER ANIMATION =====
function animateCounter(el) {
    const target = parseInt(el.dataset.count);
    const suffix = el.querySelector('sup').outerHTML;
    let start = 0;
    const duration = 2000;
    const step = target / (duration / 16);
    const timer = setInterval(() => {
        start = Math.min(start + step, target);
        el.innerHTML = Math.floor(start).toLocaleString() + suffix;
        if (start >= target) clearInterval(timer);
    }, 16);
}

const counters = document.querySelectorAll('[data-count]');
const observer = new IntersectionObserver(entries => {
    entries.forEach(e => {
        if (e.isIntersecting) {
            animateCounter(e.target);
            observer.unobserve(e.target);
        }
    });
}, { threshold: 0.5 });

counters.forEach(c => observer.observe(c));

// ===== FAQ TOGGLE =====
function toggleFaq(questionEl) {
    const item = questionEl.parentElement;
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item.open').forEach(i => i.classList.remove('open'));
    if (!isOpen) item.classList.add('open');
}

// ===== BACK TO TOP =====
const backBtn = document.getElementById('back-to-top');
window.addEventListener('scroll', () => {
    backBtn.classList.toggle('visible', window.scrollY > 400);
});

// ===== SCROLL REVEAL (simple) =====
const revealEls = document.querySelectorAll('.service-card, .process-card, .testimonial-card, .faq-item');
const revealObs = new IntersectionObserver(entries => {
    entries.forEach((e, i) => {
        if (e.isIntersecting) {
            setTimeout(() => {
                e.target.style.opacity = '1';
                e.target.style.transform = 'translateY(0)';
            }, i * 80);
            revealObs.unobserve(e.target);
        }
    });
}, { threshold: 0.1 });

revealEls.forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(30px)';
    el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    revealObs.observe(el);
});
</script>

</body>
</html>