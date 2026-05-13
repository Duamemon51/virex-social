<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Let's Grow Your Business Together – Hashtag Media</title>
    <meta name="description" content="Have questions or ready to grow? Contact us today to connect with our digital marketing experts and start building your next success story.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    

        html { scroll-behavior: smooth; }
        body { font-family: 'Manrope', sans-serif; color: var(--text); background: var(--bg); overflow-x: hidden; }
        h1,h2,h3,h4,h5,h6 { font-family: 'Manrope', sans-serif; font-weight: 700; color: var(--text-strong); }
        a { text-decoration: none; color: inherit; }
        img { max-width: 100%; height: auto; display: block; }
        .container { max-width: 1220px; margin: 0 auto; padding: 0 32px; width: 100%; }

        .grad-text {
            background: var(--grad-main);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .grad-text-warm {
            background: var(--grad-warm);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* ── SECTION LABEL ── */
        .section-label {
            display: inline-flex; align-items: center; gap: 9px;
            font-family: 'Manrope', sans-serif; font-weight: 700;
            font-size: 11px; letter-spacing: 3px; text-transform: uppercase;
            margin-bottom: 14px; color: var(--purple);
        }
        .section-label .sl-dot { display: flex; gap: 3px; }
        .section-label .sl-dot span { width: 5px; height: 5px; border-radius: 50%; background: currentColor; animation: dotBlink 1.5s infinite; }
        .section-label .sl-dot span:nth-child(2) { animation-delay: 0.2s; }
        .section-label .sl-dot span:nth-child(3) { animation-delay: 0.4s; }
        @keyframes dotBlink { 0%,100%{opacity:0.3} 50%{opacity:1} }

        .section-title { font-family: 'Manrope', sans-serif; font-size: clamp(28px,4.2vw,50px); line-height: 1.12; margin-bottom: 18px; letter-spacing: -0.5px; color: var(--text-strong); }

        @keyframes pulse { 0%,100%{opacity:1;transform:scale(1)} 50%{opacity:.6;transform:scale(1.4)} }
        @keyframes orbFloat { 0%,100%{transform:translateY(0) scale(1)} 50%{transform:translateY(-30px) scale(1.05)} }

        /* ── BUTTONS ── */
        .btn-grad {
            display: inline-flex; align-items: center; gap: 10px;
            background: var(--grad-btn); color: #fff;
            font-family: 'Manrope', sans-serif; font-weight: 600; font-size: 14.5px;
            padding: 16px 34px; border-radius: 50px;
            transition: all 0.3s; box-shadow: 0 4px 25px rgba(124,58,237,.35);
            position: relative; overflow: hidden; border: none; cursor: pointer;
        }
        .btn-grad::after { content:''; position:absolute; inset:0; background:linear-gradient(135deg, rgba(255,255,255,0.15), transparent); opacity:0; transition:opacity 0.3s; }
        .btn-grad:hover { transform:translateY(-3px); box-shadow:0 10px 40px rgba(124,58,237,.5); }
        .btn-grad:hover::after { opacity:1; }
        .btn-grad svg { width:18px;height:18px;stroke:white;stroke-width:2.5;flex-shrink:0; }
        .btn-warm {
            display: inline-flex; align-items: center; gap: 10px;
            background: var(--grad-btn-warm); color: #fff;
            font-family: 'Manrope', sans-serif; font-weight: 600; font-size: 14.5px;
            padding: 16px 34px; border-radius: 50px;
            transition: all 0.3s; box-shadow: 0 4px 25px rgba(249,115,22,.35); border: none; cursor: pointer;
        }
        .btn-warm:hover { transform:translateY(-3px); box-shadow:0 10px 40px rgba(249,115,22,.5); }
        .btn-warm svg { width:18px;height:18px;stroke:white;stroke-width:2.5;flex-shrink:0; }

        /* ── HERO ── */
      /* ── CONTACT HERO (Copilot Style Unified) ── */
.contact-hero {
    padding: 160px 0 0;
    position: relative;
    overflow: hidden;
    text-align: center;

    /* same Copilot mesh background */
    background: linear-gradient(155deg,
        #F0E8FF 0%,
        #F8F0FF 20%,
        #FFF0FA 40%,
        #FFF4F0 65%,
        #FFF9F0 85%,
        #FDF8FF 100%
    );
}

/* soft mesh blobs */
.contact-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
        radial-gradient(ellipse 70% 60% at 10% 40%, rgba(123,77,255,0.14) 0%, transparent 60%),
        radial-gradient(ellipse 60% 70% at 90% 30%, rgba(216,91,255,0.12) 0%, transparent 55%),
        radial-gradient(ellipse 55% 60% at 50% 90%, rgba(255,154,87,0.10) 0%, transparent 60%);
    pointer-events: none;
    z-index: 0;
}

/* top gradient line */
.contact-hero::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: var(--grad-main);
    z-index: 5;
}

/* floating orbs (same system as page-hero) */
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
    right: -100px;
    animation: orbFloat 9s ease-in-out infinite;
}

.ph-orb-2 {
    width: 340px;
    height: 340px;
    background: rgba(216,91,255,0.09);
    bottom: -120px;
    left: -80px;
    animation: orbFloat 11s ease-in-out infinite reverse;
}

.ph-orb-3 {
    width: 260px;
    height: 260px;
    background: rgba(255,154,87,0.10);
    top: 30%;
    left: 10%;
    animation: orbFloat 8s ease-in-out infinite 1s;
}

.ph-orb-4 {
    width: 220px;
    height: 220px;
    background: rgba(255,111,181,0.10);
    top: 20%;
    right: 25%;
    animation: orbFloat 10s ease-in-out infinite 2s;
}

/* content layer */
.contact-hero .hero-content {
    position: relative;
    z-index: 10;
    padding-bottom: 80px;
}

/* badge (same glass style) */
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

/* title */
.contact-hero h1 {
    font-family: 'Plus Jakarta Sans', 'Manrope', sans-serif;
    font-size: clamp(26px, 4vw, 45px);
    line-height: 1.1;
    letter-spacing: -1px;

    color: var(--text-strong);
    margin-bottom: 22px;
}

/* description */
.contact-hero p.ph-desc {
    color: var(--text-mid);
    font-size: 17px;
    line-height: 1.85;
    max-width: 920px;
    margin: 0 auto 40px;
}

/* button hover same system already good */

        /* hero stats bar */
        .hero-stats-bar {
            display: flex; justify-content: center; gap: 0;
            margin-top: 60px; position: relative; z-index: 10; flex-wrap: wrap;
        }
        .hsb-item {
            display: flex; flex-direction: column; align-items: center;
            padding: 0 48px;
            border-right: 1px solid rgba(255,255,255,0.1);
        }
        .hsb-item:last-child { border-right: none; }
        .hsb-num {
            font-family:'Manrope',sans-serif; font-weight:700; font-size:40px;
            line-height:1; background: var(--grad-main);
            -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;
        }
        .hsb-num sup { font-size:20px; }
        .hsb-lbl { font-size:12px; color:rgba(255,255,255,0.5); margin-top:6px; font-weight:500; }

        /* ── INTRO ── */
        .intro-section {
            padding: 100px 0 80px;
            background: linear-gradient(135deg, #fdf8ff 0%, #fff8f0 60%, #f0f9ff 100%);
            position: relative; z-index: 2;
        }
        .intro-inner { max-width: 680px; margin: 0 auto; text-align: center; }
        .intro-inner h2 { font-size: clamp(26px,3vw,42px); line-height: 1.15; margin-bottom: 18px; }
        .intro-inner p { font-size: 16px; color: var(--text); line-height: 1.85; }

        /* ── CONTACT SPLIT ── */
        .contact-split { position: relative; z-index: 2; }
        .split-wrap { display: grid; grid-template-columns: 1fr 1.25fr; min-height: 720px; }

        /* LEFT dark panel */
        .split-left {
            background: linear-gradient(145deg, #0d0520 0%, #130a35 45%, #0a1a40 100%);
            padding: 80px 56px;
            position: relative; overflow: hidden;
            display: flex; flex-direction: column; justify-content: center;
        }
        .split-left::before {
            content: '';
            position: absolute; inset: 0;
            background:
                radial-gradient(ellipse at 80% 10%, rgba(124,58,237,0.35) 0%, transparent 60%),
                radial-gradient(ellipse at 10% 90%, rgba(249,115,22,0.15) 0%, transparent 50%);
            pointer-events: none;
        }
        .split-left::after {
            content: ''; position: absolute; top: 0; left: 0; right: 0; height: 2px;
            background: var(--grad-main);
        }
        .sl-inner { position: relative; z-index: 2; }
        .sl-badge {
            display: inline-flex; align-items: center; gap: 10px;
            background: rgba(249,115,22,0.1); border: 1px solid rgba(249,115,22,0.28);
            color: #fbbf24; font-family:'Manrope',sans-serif; font-weight:700;
            font-size:11px; letter-spacing:2.5px; text-transform:uppercase;
            padding: 8px 20px; border-radius:50px; margin-bottom:28px;
        }
        .sl-badge-dot { width:7px;height:7px;border-radius:50%;background:#f97316;animation:pulse 1.5s infinite; }
        .sl-title { font-family:'Manrope',sans-serif; font-weight:800; font-size:clamp(26px,3vw,44px); color:#fff; line-height:1.1; margin-bottom:16px; letter-spacing:-0.5px; }
        .sl-title span { background: var(--grad-main); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text; }
        .sl-desc { font-size:15px; line-height:1.85; color:rgba(255,255,255,0.6); margin-bottom:44px; max-width:360px; }

        .sl-items { display:flex; flex-direction:column; gap:20px; margin-bottom:44px; }
        .sl-item { display:flex; align-items:flex-start; gap:16px; }
        .sl-icon {
            width:52px; height:52px; border-radius:16px;
            background: rgba(255,255,255,0.05); border: 1.5px solid rgba(255,255,255,0.12);
            display:flex; align-items:center; justify-content:center; flex-shrink:0;
            transition: all 0.3s;
        }
        .sl-icon:hover { background: var(--grad-main); border-color: transparent; }
        .sl-icon svg { width:22px; height:22px; stroke:rgba(255,255,255,0.75); fill:none; stroke-width:1.8; stroke-linecap:round; stroke-linejoin:round; }
        .sl-item-title { font-family:'Manrope',sans-serif; font-weight:700; font-size:14px; color:#fff; margin-bottom:3px; }
        .sl-item-val { font-size:13.5px; color:rgba(255,255,255,0.55); }

        .sl-divider {
            width: 100%; height: 1px;
            background: linear-gradient(90deg, rgba(124,58,237,0.4), rgba(249,115,22,0.3), transparent);
            margin-bottom: 28px;
        }
        .sl-socials { display:flex; gap:10px; }
        .sl-social {
            width:42px; height:42px; border-radius:13px;
            background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.12);
            display:flex; align-items:center; justify-content:center; transition:all .3s;
        }
        .sl-social:hover { background:var(--grad-btn); border-color:transparent; transform:translateY(-3px); box-shadow: 0 8px 24px rgba(124,58,237,0.4); }
        .sl-social svg { width:17px; height:17px; stroke:rgba(255,255,255,0.6); fill:none; stroke-width:1.8; stroke-linecap:round; stroke-linejoin:round; }
        .sl-social:hover svg { stroke:#fff; }

        /* RIGHT form panel */
        .split-right {
            background: linear-gradient(135deg, #fdf8ff 0%, #fff8f0 60%, #f0f9ff 100%);
            padding: 80px 64px;
            display: flex; flex-direction: column; justify-content: center;
            position: relative; overflow: hidden;
        }
        .split-right::before {
            content: ''; position: absolute; inset: 0;
            background:
                radial-gradient(ellipse at 90% 10%, rgba(124,58,237,0.06) 0%, transparent 50%),
                radial-gradient(ellipse at 10% 90%, rgba(249,115,22,0.04) 0%, transparent 50%);
            pointer-events: none;
        }
        .split-right > * { position: relative; z-index: 1; }

        .cr-label { font-family:'Manrope',sans-serif; font-weight:700; font-size:11px; letter-spacing:3px; text-transform:uppercase; color:var(--purple); margin-bottom:10px; display:block; }
        .cr-title { font-family:'Manrope',sans-serif; font-weight:800; font-size:clamp(22px,2.5vw,36px); color:var(--text-strong); margin-bottom:10px; line-height:1.12; letter-spacing:-0.5px; }
        .cr-sub { font-size:15px; color:var(--text); line-height:1.8; margin-bottom:36px; }

        .form-row { display:grid; grid-template-columns:1fr 1fr; gap:16px; margin-bottom:16px; }
        .form-row.single { grid-template-columns:1fr; }
        .fg { display:flex; flex-direction:column; gap:7px; }
        .fg label { font-family:'Manrope',sans-serif; font-weight:700; font-size:11px; color:var(--text-strong); letter-spacing:1.5px; text-transform:uppercase; }
        .fg input, .fg select, .fg textarea {
            padding: 14px 18px;
            border: 1.5px solid rgba(124,58,237,0.14);
            border-radius: 14px;
            font-family: 'Manrope', sans-serif; font-size: 14.5px; color: var(--text-strong);
            background: #fff; outline: none;
            transition: border-color .22s, box-shadow .22s;
            -webkit-appearance: none;
        }
        .fg input::placeholder, .fg textarea::placeholder { color: #c0bcd8; }
        .fg input:focus, .fg select:focus, .fg textarea:focus {
            border-color: var(--purple);
            box-shadow: 0 0 0 4px rgba(124,58,237,0.1);
        }
        .fg textarea { resize: none; height: 130px; }
        .fg select { cursor: pointer; }

        .form-submit-row { margin-top:24px; display:flex; align-items:center; gap:20px; flex-wrap:wrap; }
        .btn-send {
            display: inline-flex; align-items: center; gap: 10px;
            background: var(--grad-btn);
            background-size: 200% 100%;
            color: #fff; font-family: 'Manrope', sans-serif; font-weight: 700; font-size: 15px;
            padding: 16px 40px; border-radius: 50px; border: none; cursor: pointer;
            transition: all .35s; box-shadow: 0 8px 30px rgba(124,58,237,0.35);
        }
        .btn-send:hover { transform:translateY(-3px); box-shadow:0 16px 48px rgba(124,58,237,0.45); }
        .btn-send svg { width:18px; height:18px; transition:transform .3s; }
        .btn-send:hover svg { transform:translateX(4px); }
        .form-note { font-size:13px; color:var(--text); line-height:1.6; }
        .form-note strong { color:var(--text-strong); font-family:'Manrope',sans-serif; font-weight:700; }

        /* ── MAP ── */
        .map-section { width:100%; position:relative; z-index:2; }
        .map-section::before { content:''; display:block; height:3px; background:var(--grad-main); }
        .map-section iframe { display:block; width:100%; height:420px; border:0; filter:saturate(0.65) contrast(1.08); }

        /* ── NEWSLETTER ── */
        .newsletter-section {
            padding: 60px 0;
            background: var(--grad-header);
            position: relative; overflow: hidden; z-index: 2;
        }
        .newsletter-section::before {
            content: ''; position: absolute; inset: 0;
            background:
                radial-gradient(ellipse at 80% 20%, rgba(124,58,237,0.2) 0%, transparent 55%),
                radial-gradient(ellipse at 15% 80%, rgba(249,115,22,0.1) 0%, transparent 50%);
            pointer-events:none;
        }
        .newsletter-section::after { content:''; position:absolute; top:0; left:0; right:0; height:2px; background:var(--grad-main); }
        .nl-inner { display:flex; align-items:center; gap:60px; flex-wrap:wrap; position:relative; z-index:1; }
        .nl-text { flex:1; min-width:260px; }
        .nl-icon-wrap { display:flex; align-items:center; gap:18px; margin-bottom:8px; }
        .nl-icon { width:56px; height:56px; border-radius:16px; background:var(--grad-btn); display:flex; align-items:center; justify-content:center; flex-shrink:0; box-shadow:0 8px 30px rgba(124,58,237,0.4); }
        .nl-icon svg { width:26px; height:26px; stroke:#fff; fill:none; stroke-width:1.8; stroke-linecap:round; stroke-linejoin:round; }
        .nl-title { font-family:'Manrope',sans-serif; font-weight:800; font-size:22px; color:#fff; }
        .nl-sub { font-size:14.5px; color:rgba(255,255,255,0.55); line-height:1.6; margin-top:4px; }
        .nl-discount { font-family:'Manrope',sans-serif; font-weight:800; background:var(--grad-warm); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text; }
        .nl-form { flex:1; min-width:300px; display:flex; gap:12px; }
        .nl-form input {
            flex:1; padding:14px 20px;
            border:1.5px solid rgba(255,255,255,0.12); border-radius:50px;
            font-family:'Manrope',sans-serif; font-size:14.5px; color:#fff;
            background:rgba(255,255,255,0.07); outline:none;
            transition:border-color .22s, box-shadow .22s;
        }
        .nl-form input:focus { border-color:rgba(124,58,237,0.6); box-shadow:0 0 0 4px rgba(124,58,237,0.15); }
        .nl-form input::placeholder { color:rgba(255,255,255,0.3); }
        .nl-form button {
            padding:14px 30px;
            background:var(--grad-btn);
            color:#fff; font-family:'Manrope',sans-serif; font-weight:700; font-size:14px;
            border:none; border-radius:50px; cursor:pointer; white-space:nowrap;
            transition:all .3s; box-shadow:0 8px 24px rgba(124,58,237,0.35);
        }
        .nl-form button:hover { transform:translateY(-2px); box-shadow:0 14px 40px rgba(124,58,237,0.5); }

        /* ── FOOTER ── */
        .site-footer { background: #0d0520; padding:60px 0 0; position:relative; z-index:2; }
        .site-footer::before { content:''; display:block; position:absolute; top:0; left:0; right:0; height:2px; background:var(--grad-main); }
        .footer-top {
            display:grid; grid-template-columns:1.4fr 1fr 1fr 1.2fr; gap:48px;
            padding-bottom:48px; border-bottom:1px solid rgba(255,255,255,0.07);
        }
        .footer-logo { font-family:'Manrope',sans-serif; font-weight:800; font-size:22px; color:#fff; margin-bottom:14px; }
        .footer-logo span { background:var(--grad-main); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text; }
        .footer-desc { font-size:14px; color:rgba(255,255,255,0.45); line-height:1.8; }
        .footer-col h5 { font-family:'Manrope',sans-serif; font-weight:700; font-size:13px; color:#fff; letter-spacing:.5px; margin-bottom:20px; }
        .footer-links { list-style:none; display:flex; flex-direction:column; gap:10px; }
        .footer-links a { font-size:14px; color:rgba(255,255,255,0.45); transition:color .2s; }
        .footer-links a:hover { color:var(--yellow); }
        .footer-contact-items { display:flex; flex-direction:column; gap:14px; }
        .footer-contact-item { display:flex; align-items:center; gap:12px; }
        .footer-contact-item svg { width:16px; height:16px; stroke:var(--purple); fill:none; stroke-width:2; stroke-linecap:round; stroke-linejoin:round; flex-shrink:0; }
        .footer-contact-item span { font-size:13.5px; color:rgba(255,255,255,0.45); }
        .footer-socials { display:flex; gap:10px; margin-top:20px; }
        .footer-social {
            width:38px; height:38px; border-radius:12px;
            background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.1);
            display:flex; align-items:center; justify-content:center; transition:all .3s;
        }
        .footer-social:hover { background:var(--grad-btn); border-color:transparent; transform:translateY(-2px); box-shadow:0 6px 20px rgba(124,58,237,0.4); }
        .footer-social svg { width:15px; height:15px; stroke:rgba(255,255,255,0.55); fill:none; stroke-width:1.8; stroke-linecap:round; stroke-linejoin:round; }
        .footer-social:hover svg { stroke:#fff; }
        .footer-bottom { padding:20px 0; display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:12px; }
        .footer-copy { font-size:13px; color:rgba(255,255,255,0.3); }
        .footer-bottom-links { display:flex; gap:20px; }
        .footer-bottom-links a { font-size:13px; color:rgba(255,255,255,0.3); transition:color .2s; }
        .footer-bottom-links a:hover { color:rgba(255,255,255,0.7); }

        /* ── RESPONSIVE ── */
        @media(max-width:1024px) {
            .split-wrap { grid-template-columns:1fr; }
            .split-left { padding:60px 40px; min-height:auto; }
            .split-right { padding:60px 40px; }
            .footer-top { grid-template-columns:1fr 1fr; }
        }
        @media(max-width:768px) {
            .contact-hero { padding:110px 0 80px; }
            .hero-stats-bar { gap:0; }
            .hsb-item { padding:16px 24px; border-right:none; border-bottom:1px solid rgba(255,255,255,0.1); }
            .hsb-item:last-child { border-bottom:none; }
            .intro-section { padding:70px 0 60px; }
            .form-row { grid-template-columns:1fr; }
            .split-left, .split-right { padding:50px 24px; }
            .nl-inner { gap:32px; }
            .nl-form { flex-direction:column; }
            .footer-top { grid-template-columns:1fr; gap:32px; }
            .footer-bottom { flex-direction:column; text-align:center; }
        }
    </style>
</head>
<body>

<!-- ══ HERO ══ -->
<section class="contact-hero">
    <div class="ph-orb ph-orb-1"></div>
    <div class="ph-orb ph-orb-2"></div>
    <div class="ph-orb ph-orb-3"></div>
    <div class="ph-orb ph-orb-4"></div>

    <div class="hero-particles" aria-hidden="true">
        <div class="particle" style="left:8%;width:6px;height:6px;background:#e040fb;animation-duration:18s;animation-delay:0s;"></div>
        <div class="particle" style="left:20%;width:4px;height:4px;background:#fbbf24;animation-duration:14s;animation-delay:2s;"></div>
        <div class="particle" style="left:45%;width:8px;height:8px;background:#06b6d4;animation-duration:20s;animation-delay:4s;"></div>
        <div class="particle" style="left:65%;width:5px;height:5px;background:#fff;animation-duration:16s;animation-delay:1s;"></div>
        <div class="particle" style="left:80%;width:6px;height:6px;background:#f97316;animation-duration:22s;animation-delay:3s;"></div>
        <div class="particle" style="left:90%;width:4px;height:4px;background:#7c3aed;animation-duration:12s;animation-delay:6s;"></div>
        <div class="particle" style="left:33%;width:5px;height:5px;background:#e040fb;animation-duration:17s;animation-delay:8s;"></div>
        <div class="particle" style="left:55%;width:7px;height:7px;background:#fbbf24;animation-duration:15s;animation-delay:5s;"></div>
    </div>

    <div class="container hero-content">
        <div class="page-hero-badge">
            <span class="badge-dot"></span>
            Digital Marketing Agency
        </div>
        <h1>Let's Build Something Great Together</h1>
        <p class="ph-desc">We'd love to hear from you. Whether you have a question, project idea, or need guidance — contact us and let's create digital success together.</p>
        <a href="#contact-form" class="btn-grad">
            Contact Us Now
            <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
    </div>

   
</section>


<?php include 'includes/contact-section.php'; ?>



<?php include 'includes/virex-floating-social.php'; ?>
<?php include 'includes/footer.php'; ?>

</body>
</html>