<?php
$current = basename($_SERVER['PHP_SELF']);
include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers – Start Your Career in Digital Marketing | Virex Social</title>
    <meta name="description" content="Want to build your career in digital marketing? Join our creative team and work on real projects that drive results and inspire growth.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        :root {
            --purple:       #6254e7;
            --purple-light: #9289f1;
            --dark:         #3b3663;
            --orange:       #ff7426;
            --orange-mid:   #f0ac0e;
            --text:         #7a7a7a;
            --white:        #fff;
            --bg:           #f9f9fc;
            --border:       rgba(98,84,231,0.10);
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Rubik', sans-serif;
            color: var(--text);
            background: var(--white);
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Nunito', sans-serif;
            font-weight: 800;
            color: var(--dark);
            margin: 0; padding: 0;
        }

        a { text-decoration: none; color: inherit; transition: all .25s; }
        p { line-height: 1.7; color: var(--text); }

        .section-label {
            font-family: 'Nunito', sans-serif;
            font-weight: 700;
            font-size: 12px;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            color: var(--purple);
            margin-bottom: 10px;
            display: block;
        }

        /* ---- Buttons ---- */
        .btn-grad {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(96deg, #9289f1, #6254e7 51%, #9289f1 100%);
            background-size: 150% 100%;
            color: #fff;
            font-family: 'Nunito', sans-serif;
            font-weight: 700;
            font-size: 15px;
            padding: 14px 34px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            transition: all .4s ease;
            box-shadow: 0 10px 28px rgba(98,84,231,.28);
        }
        .btn-grad:hover {
            background-position: 100% 0;
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 16px 40px rgba(98,84,231,.4);
        }

        .btn-ghost-white {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: 2px solid rgba(255,255,255,.35);
            color: #fff;
            font-family: 'Nunito', sans-serif;
            font-weight: 700;
            font-size: 14px;
            padding: 12px 28px;
            border-radius: 8px;
            background: transparent;
            transition: all .3s;
        }
        .btn-ghost-white:hover {
            background: rgba(255,255,255,.12);
            border-color: rgba(255,255,255,.6);
            color: #fff;
        }

        /* ============================
           HERO
        ============================ */
        .careers-hero {
            min-height: 88vh;
           background: linear-gradient(135deg, rgba(26, 10, 74, 0.85) 0%, rgba(108, 60, 255, 0.2) 50%, rgba(13, 13, 26, 0.9) 100%), 
                url('public/pic_paralax_2.webp');
    
    /* Background Properties */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: scroll; /* Change to 'fixed' if you want a parallax effect */
    
    position: relative;
    overflow: hidden;
    padding: 140px 0 120px; /* Increased padding slightly for better visual balance */
    text-align: center;
        }

      
        .hero-inner {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 70px;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255,255,255,.08);
            border: 1px solid rgba(255,255,255,.15);
            color: rgba(255,255,255,.85);
            font-family: 'Nunito', sans-serif;
            font-weight: 700;
            font-size: 12px;
            letter-spacing: 2px;
            text-transform: uppercase;
            padding: 8px 18px;
            border-radius: 50px;
            margin-bottom: 22px;
        }

        .hero-badge .live-dot {
            width: 7px; height: 7px;
            background: var(--orange);
            border-radius: 50%;
            animation: blink 1.6s infinite;
        }

        @keyframes blink { 0%,100%{opacity:1;} 50%{opacity:.25;} }

        .hero-title {
            font-size: clamp(34px, 4.8vw, 56px);
            color: #fff;
            line-height: 1.1;
            margin-bottom: 20px;
        }

        .hero-title .accent {
            background: linear-gradient(90deg, #f0ac0e, #ff7426);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-desc {
            font-size: 17px;
            color: rgba(255,255,255,.65);
            line-height: 1.78;
            max-width: 460px;
            margin-bottom: 36px;
        }

        .hero-actions { display: flex; gap: 14px; flex-wrap: wrap; }

        .hero-stats {
            display: flex;
            gap: 40px;
            margin-top: 52px;
            padding-top: 36px;
            border-top: 1px solid rgba(255,255,255,.1);
            flex-wrap: wrap;
        }

        .h-stat-num {
            font-family: 'Nunito', sans-serif;
            font-weight: 900;
            font-size: 38px;
            color: #fff;
            line-height: 1;
        }

        .h-stat-num sup { font-size: 20px; color: var(--orange); }
        .h-stat-lbl { font-size: 13px; color: rgba(255,255,255,.42); margin-top: 5px; }

        /* ---- Hero Right Card ---- */
        .hero-illus {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .illus-card {
            background: rgba(255,255,255,.07);
            border: 1px solid rgba(255,255,255,.12);
            border-radius: 28px;
            padding: 40px;
            backdrop-filter: blur(16px);
            width: 100%;
            max-width: 420px;
            animation: floatCard 5s ease-in-out infinite;
        }

        @keyframes floatCard {
            0%,100% { transform: translateY(0); }
            50%      { transform: translateY(-14px); }
        }

        /* avatar stack */
        .avatar-row {
            display: flex;
            margin-bottom: 26px;
        }

        .av {
            width: 48px; height: 48px;
            border-radius: 50%;
            border: 3px solid rgba(255,255,255,.18);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Nunito', sans-serif;
            font-weight: 900;
            font-size: 15px;
            color: #fff;
            margin-left: -10px;
            flex-shrink: 0;
        }

        .av:first-child { margin-left: 0; }
        .av-purple { background: linear-gradient(135deg, var(--purple-light), var(--purple)); }
        .av-orange { background: linear-gradient(135deg, #f0ac0e, #ff7426); }
        .av-teal   { background: linear-gradient(135deg, #00c8cc, #0891b2); }
        .av-green  { background: linear-gradient(135deg, #22c55e, #16a34a); }
        .av-more   {
            background: rgba(255,255,255,.15);
            font-size: 12px;
            font-weight: 800;
        }

        .card-title {
            font-family: 'Nunito', sans-serif;
            font-weight: 900;
            font-size: 21px;
            color: #fff;
            margin-bottom: 8px;
        }

        .card-sub {
            font-size: 14px;
            color: rgba(255,255,255,.52);
            line-height: 1.65;
            margin-bottom: 28px;
        }

        .pill-row { display: flex; flex-wrap: wrap; gap: 8px; }

        .pill {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            background: rgba(255,255,255,.09);
            border: 1px solid rgba(255,255,255,.14);
            border-radius: 50px;
            padding: 7px 16px;
            font-family: 'Nunito', sans-serif;
            font-size: 13px;
            font-weight: 700;
            color: rgba(255,255,255,.82);
        }

        .pill i { font-size: 14px; }
        .pill-p i { color: var(--purple-light); }
        .pill-o i { color: var(--orange); }
        .pill-g i { color: #22c55e; }
        .pill-t i { color: #00c8cc; }

        /* floating badges */
        .float-badge {
            position: absolute;
            background: #fff;
            border-radius: 14px;
            padding: 13px 18px;
            box-shadow: 0 18px 50px rgba(0,0,0,.14);
            display: flex;
            align-items: center;
            gap: 12px;
            z-index: 5;
            white-space: nowrap;
        }

        .fb-icon {
            width: 40px; height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 19px;
            color: #fff;
            flex-shrink: 0;
        }

        .fb-icon-purple { background: linear-gradient(135deg, var(--purple-light), var(--purple)); }
        .fb-icon-orange { background: linear-gradient(135deg, var(--orange-mid), var(--orange)); }

        .float-badge strong {
            display: block;
            font-family: 'Nunito', sans-serif;
            font-weight: 800;
            font-size: 14px;
            color: var(--dark);
        }

        .float-badge span { font-size: 12px; color: var(--text); }

        .fb-tl { top: 20px; left: -28px; animation: fb1 4s ease-in-out infinite; }
        .fb-br { bottom: 30px; right: -28px; animation: fb2 5s ease-in-out infinite; }

        @keyframes fb1 { 0%,100%{transform:translateY(0) rotate(-2deg);} 50%{transform:translateY(-10px) rotate(2deg);} }
        @keyframes fb2 { 0%,100%{transform:translateY(0) rotate(2deg);} 50%{transform:translateY(10px) rotate(-2deg);} }

        /* ============================
           JOB LISTINGS
        ============================ */
        .careers-jobs {
            padding: 100px 0;
            background: var(--bg);
        }

        .jobs-header {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            margin-bottom: 50px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .jobs-header h2 { font-size: clamp(28px,4vw,40px); line-height: 1.2; }
        .jobs-header p  { font-size: 16px; max-width: 420px; line-height: 1.65; margin-top: 10px; }

        .job-card {
            background: var(--white);
            border-radius: 20px;
            border: 1px solid var(--border);
            padding: 28px 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 28px;
            margin-bottom: 16px;
            box-shadow: 0 2px 16px rgba(0,0,0,.04);
            transition: all .32s cubic-bezier(.4,0,.2,1);
        }

        .job-card:hover {
            border-color: rgba(98,84,231,.22);
            box-shadow: 0 14px 44px rgba(98,84,231,.1);
            transform: translateY(-4px);
        }

        .job-icon-wrap {
            width: 56px; height: 56px;
            border-radius: 14px;
            background: rgba(98,84,231,.07);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: var(--purple);
            flex-shrink: 0;
            transition: all .3s;
        }

        .job-card:hover .job-icon-wrap {
            background: var(--purple);
            color: #fff;
        }

        .job-left { flex: 1; min-width: 0; }

        .job-title {
            font-family: 'Nunito', sans-serif;
            font-size: 19px;
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 8px;
            transition: color .25s;
        }

        .job-card:hover .job-title { color: var(--purple); }

        .job-desc {
            font-size: 14.5px;
            line-height: 1.65;
            margin-bottom: 14px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            overflow: hidden;
        }

        .job-meta { display: flex; align-items: center; gap: 12px; flex-wrap: wrap; }

        .job-tag {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            font-family: 'Nunito', sans-serif;
            font-size: 12px;
            font-weight: 700;
            padding: 5px 14px;
            border-radius: 50px;
        }

        .tag-type {
            background: rgba(98,84,231,.08);
            color: var(--purple);
            border: 1px solid rgba(98,84,231,.15);
        }

        .tag-loc {
            background: rgba(255,116,38,.08);
            color: var(--orange);
            border: 1px solid rgba(255,116,38,.15);
        }

        .job-right { flex-shrink: 0; }

        /* ============================
           WHY JOIN US
        ============================ */
        .careers-why {
            padding: 100px 0;
            background: var(--white);
        }

        .why-header { text-align: center; margin-bottom: 56px; }
        .why-header h2 { font-size: clamp(28px,4vw,40px); margin-bottom: 12px; }
        .why-header p  { font-size: 16px; max-width: 520px; margin: 0 auto; }

        .why-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }

        .why-card {
            background: var(--bg);
            border-radius: 20px;
            border: 1px solid var(--border);
            padding: 38px 28px;
            text-align: center;
            transition: all .32s;
            position: relative;
            overflow: hidden;
        }

        .why-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, #9289f1, #6254e7);
            opacity: 0;
            transition: opacity .32s;
        }

        .why-card:hover::before { opacity: 1; }
        .why-card:hover { transform: translateY(-8px); box-shadow: 0 22px 60px rgba(98,84,231,.28); }
        .why-card > * { position: relative; z-index: 1; }

        .why-icon {
            width: 70px; height: 70px;
            border-radius: 18px;
            background: rgba(98,84,231,.1);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            color: var(--purple);
            margin: 0 auto 20px;
            transition: background .32s, color .32s;
        }

        .why-card:hover .why-icon { background: rgba(255,255,255,.18); color: #fff; }

        .why-num {
            font-family: 'Nunito', sans-serif;
            font-weight: 900;
            font-size: 12px;
            letter-spacing: 2.5px;
            color: var(--purple);
            margin-bottom: 8px;
            transition: color .32s;
        }

        .why-card:hover .why-num { color: rgba(255,255,255,.55); }

        .why-title {
            font-size: 17px;
            color: var(--dark);
            margin-bottom: 10px;
            transition: color .32s;
        }

        .why-card:hover .why-title { color: #fff; }

        .why-text {
            font-size: 14px;
            line-height: 1.72;
            transition: color .32s;
        }

        .why-card:hover .why-text { color: rgba(255,255,255,.75); }

        /* ============================
           MARQUEE
        ============================ */
        .marquee-section { background: linear-gradient(96deg, #9289f1, #6254e7); overflow: hidden; }

        .marquee-track {
            display: flex;
            gap: 60px;
            animation: scrollLeft 22s linear infinite;
            padding: 24px 0;
            white-space: nowrap;
        }

        @keyframes scrollLeft {
            from { transform: translateX(0); }
            to   { transform: translateX(-50%); }
        }

        .marquee-item {
            font-family: 'Nunito', sans-serif;
            font-weight: 900;
            font-size: clamp(15px, 2.2vw, 22px);
            color: rgba(255,255,255,.3);
            letter-spacing: 2px;
            text-transform: uppercase;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .marquee-item .m-sep { color: rgba(255,255,255,.2); font-size: 18px; }
        .marquee-item .m-hi  { color: rgba(255,255,255,.85); }

        /* ============================
           FEATURES (Talent section)
        ============================ */
        .careers-features {
            padding: 100px 0;
            background: var(--bg);
        }

        .features-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
        }

        .features-img { position: relative; }

        .features-img-main {
            width: 100%;
            border-radius: 24px;
            box-shadow: 0 30px 80px rgba(0,0,0,.12);
            display: block;
        }

        .features-img-badge {
            position: absolute;
            bottom: -22px; right: -22px;
            background: linear-gradient(135deg, var(--orange), var(--orange-mid));
            color: #fff;
            font-family: 'Nunito', sans-serif;
            font-weight: 900;
            padding: 22px 26px;
            border-radius: 18px;
            text-align: center;
            box-shadow: 0 20px 50px rgba(255,116,38,.38);
        }

        .features-img-badge .num { font-size: 38px; line-height: 1; }
        .features-img-badge .lbl { font-size: 12px; font-weight: 600; opacity: .88; margin-top: 4px; }

        .feature-item {
            display: flex;
            gap: 18px;
            align-items: flex-start;
            margin-bottom: 24px;
            padding: 20px 22px;
            border-radius: 16px;
            border: 1px solid transparent;
            transition: all .3s;
        }

        .feature-item:hover {
            border-color: var(--border);
            box-shadow: 0 8px 30px rgba(98,84,231,.08);
            transform: translateX(6px);
        }

        .feature-num {
            width: 46px; height: 46px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--purple-light), var(--purple));
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Nunito', sans-serif;
            font-weight: 900;
            font-size: 17px;
            color: #fff;
            flex-shrink: 0;
            box-shadow: 0 6px 18px rgba(98,84,231,.28);
        }

        .feature-item h5 { font-size: 15.5px; color: var(--dark); margin-bottom: 4px; }
        .feature-item p  { font-size: 14px; line-height: 1.65; margin: 0; }

        /* ============================
           DARK BANNER
        ============================ */
        .careers-banner {
            padding: 100px 0;
            background: linear-gradient(135deg, #3b3663 0%, #2a2547 100%);
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .careers-banner::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: radial-gradient(rgba(255,255,255,.03) 1px, transparent 1px);
            background-size: 32px 32px;
        }

        .careers-banner::after {
            content: '';
            position: absolute;
            width: 500px; height: 500px;
            background: radial-gradient(circle, rgba(98,84,231,.18) 0%, transparent 70%);
            bottom: -150px; left: -80px;
            border-radius: 50%;
        }

        .banner-inner { position: relative; z-index: 2; }

        .banner-label {
            font-family: 'Nunito', sans-serif;
            font-weight: 700;
            font-size: 12px;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            color: var(--orange);
            margin-bottom: 16px;
            display: block;
        }

        .banner-title {
            font-size: clamp(28px, 4.5vw, 50px);
            color: #fff;
            line-height: 1.15;
            margin-bottom: 20px;
            max-width: 680px;
            margin-left: auto;
            margin-right: auto;
        }

        .banner-desc {
            font-size: 17px;
            color: rgba(255,255,255,.62);
            line-height: 1.75;
            max-width: 500px;
            margin: 0 auto 36px;
        }

        /* ============================
           TESTIMONIALS
        ============================ */
        .careers-testi {
            padding: 100px 0;
            background: var(--white);
        }

        .testi-header { text-align: center; margin-bottom: 56px; }
        .testi-header h2 { font-size: clamp(28px,4vw,40px); margin-bottom: 12px; }
        .testi-header p  { font-size: 16px; max-width: 500px; margin: 0 auto; }

        .testi-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .testi-card {
            background: var(--bg);
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 36px;
            transition: all .3s;
        }

        .testi-card:hover {
            border-color: rgba(98,84,231,.2);
            box-shadow: 0 16px 50px rgba(98,84,231,.1);
            transform: translateY(-5px);
        }

        .testi-stars {
            display: flex;
            gap: 4px;
            color: var(--orange-mid);
            font-size: 15px;
            margin-bottom: 18px;
        }

        .testi-quote-icon {
            width: 42px; height: 42px;
            border-radius: 10px;
            background: rgba(98,84,231,.08);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: var(--purple);
            margin-bottom: 16px;
        }

        .testi-text {
            font-size: 15px;
            line-height: 1.8;
            font-style: italic;
            margin-bottom: 24px;
        }

        .testi-author { display: flex; align-items: center; gap: 14px; }

        .testi-avatar {
            width: 48px; height: 48px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--purple-light), var(--purple));
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Nunito', sans-serif;
            font-weight: 900;
            font-size: 17px;
            color: #fff;
            flex-shrink: 0;
        }

        .testi-author strong { display: block; font-family: 'Nunito',sans-serif; font-weight: 800; font-size: 15px; color: var(--dark); }
        .testi-author span   { font-size: 13px; }

        /* ============================
           BACK TO TOP
        ============================ */
        #back-to-top {
            position: fixed;
            bottom: 40px; right: 40px;
            width: 48px; height: 48px;
            background: linear-gradient(135deg, var(--purple-light), var(--purple));
            color: #fff;
            border: none;
            border-radius: 12px;
            font-size: 20px;
            cursor: pointer;
            display: none;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 24px rgba(98,84,231,.4);
            z-index: 999;
            transition: all .3s;
        }

        #back-to-top.visible { display: flex; }
        #back-to-top:hover   { transform: translateY(-4px); }

        /* ============================
           RESPONSIVE
        ============================ */
        @media (max-width: 1199px) {
            .why-grid { grid-template-columns: repeat(2,1fr); }
        }

        @media (max-width: 991px) {
            .hero-inner, .features-grid { grid-template-columns: 1fr; }
            .hero-illus { margin-top: 40px; }
            .fb-tl, .fb-br { display: none; }
            .testi-grid { grid-template-columns: 1fr 1fr; }
            .features-img-badge { display: none; }
            .job-card { flex-direction: column; align-items: flex-start; gap: 16px; }
            .job-icon-wrap { display: none; }
        }

        @media (max-width: 767px) {
            .why-grid, .testi-grid { grid-template-columns: 1fr; }
            .jobs-header { flex-direction: column; align-items: flex-start; }
            .hero-stats { flex-wrap: wrap; gap: 24px; }
            .hero-actions { flex-direction: column; }
        }
    </style>
</head>
<body>

<!-- ========== HERO ========== -->
<section class="careers-hero">
    <div class="container">
        <div class="hero-inner">

            <div>
                <div class="hero-badge">
                    <span class="live-dot"></span>
                    We Are Hiring
                </div>

                <h1 class="hero-title">
                    Join Our Team —<br>
                    Start Your <span class="accent">Career in</span><br>
                    <span class="accent">Digital Marketing</span>
                </h1>

                <p class="hero-desc">
                    A career in digital marketing offers exciting opportunities in a rapidly growing field, where creativity, analytics, and technology converge to shape the future of business and online communication.
                </p>

                <div class="hero-actions">
                    <a href="#open-positions" class="btn-grad">
                        View Open Positions <i class="bi bi-arrow-down-short"></i>
                    </a>
                    <a href="contact.php" class="btn-ghost-white">
                        Contact Us <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="hero-stats">
                    <div>
                        <div class="h-stat-num" data-count="5">0<sup>+</sup></div>
                        <div class="h-stat-lbl">Open Positions</div>
                    </div>
                    <div>
                        <div class="h-stat-num" data-count="300">0<sup>+</sup></div>
                        <div class="h-stat-lbl">Happy Clients</div>
                    </div>
                    <div>
                        <div class="h-stat-num" data-count="98">0<sup>%</sup></div>
                        <div class="h-stat-lbl">Team Satisfaction</div>
                    </div>
                </div>
            </div>

            <!-- Right illustration card -->
            <div class="hero-illus">
                <div class="float-badge fb-tl">
                    <div class="fb-icon fb-icon-purple">
                        <i class="bi bi-award-fill"></i>
                    </div>
                    <div>
                        <strong>Top Rated</strong>
                        <span>Workplace 2025</span>
                    </div>
                </div>

                <div class="illus-card">
                    <div class="avatar-row">
                        <div class="av av-purple">A</div>
                        <div class="av av-orange">B</div>
                        <div class="av av-teal">C</div>
                        <div class="av av-green">D</div>
                        <div class="av av-more">+12</div>
                    </div>

                    <div class="card-title">Grow With Our Team</div>
                    <div class="card-sub">Work on exciting real projects, build skills fast, and be part of a team that values creativity, results, and your growth.</div>

                    <div class="pill-row">
                        <span class="pill pill-p"><i class="bi bi-clock"></i> Full Time</span>
                        <span class="pill pill-o"><i class="bi bi-geo-alt"></i> Islamabad</span>
                        <span class="pill pill-g"><i class="bi bi-brush"></i> Creative</span>
                        <span class="pill pill-t"><i class="bi bi-code-slash"></i> Tech</span>
                    </div>
                </div>

                <div class="float-badge fb-br">
                    <div class="fb-icon fb-icon-orange">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>
                    <div>
                        <strong>Career Growth</strong>
                        <span>Fast-track program</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ========== MARQUEE ========== -->
<div class="marquee-section">
    <div class="marquee-track">
        <?php for($i=0;$i<8;$i++): ?>
        <div class="marquee-item">
            <span class="m-hi">Digital Marketing</span>
            <i class="bi bi-diamond-fill m-sep" style="font-size:8px;"></i>
            Web Development
            <i class="bi bi-diamond-fill m-sep" style="font-size:8px;"></i>
            <span class="m-hi">Video Editing</span>
            <i class="bi bi-diamond-fill m-sep" style="font-size:8px;"></i>
            UI/UX Design
            <i class="bi bi-diamond-fill m-sep" style="font-size:8px;"></i>
            <span class="m-hi">SEO Services</span>
            <i class="bi bi-diamond-fill m-sep" style="font-size:8px;"></i>
            Graphic Design
            <i class="bi bi-diamond-fill m-sep" style="font-size:8px;"></i>
        </div>
        <?php endfor; ?>
    </div>
</div>

<!-- ========== JOB LISTINGS ========== -->
<section class="careers-jobs" id="open-positions">
    <div class="container">
        <div class="jobs-header">
            <div>
                <span class="section-label">Open Positions</span>
                <h2>Hiring Just Got Easy Now</h2>
                <p>We are looking for passionate people to join us on our mission. We value flat hierarchies, clear communication, and full ownership and responsibility.</p>
            </div>
            <a href="contact.php" class="btn-grad">
                Send Your CV <i class="bi bi-send"></i>
            </a>
        </div>

        <?php
        $jobs = [
            [
                'icon'  => 'bi-camera-video',
                'title' => 'After Effects Video Editor',
                'desc'  => 'The ideal candidate should have extensive experience and strong skills in After Effects, along with proficiency in Adobe Premiere Pro, Photoshop, and other relevant editing software.',
                'loc'   => 'Gulberg Greens, Islamabad',
                'type'  => 'Full Time',
                'link'  => 'careers/after-effects-video-editor.php',
            ],
            [
                'icon'  => 'bi-collection-play',
                'title' => 'Video Editing Team Lead',
                'desc'  => 'This role requires both creative vision and strong leadership, ensuring the team maintains consistent output, meets deadlines, and continuously improves skills and workflows.',
                'loc'   => 'Gulberg Greens, Islamabad',
                'type'  => 'Full Time',
                'link'  => 'careers/video-editing-team-lead.php',
            ],
            [
                'icon'  => 'bi-person-badge',
                'title' => 'HR Assistant',
                'desc'  => 'This role requires strong communication skills, a proactive mindset, and the ability to handle confidential information responsibly while ensuring smooth HR processes across the organization.',
                'loc'   => 'Gulberg Greens, Islamabad',
                'type'  => 'Full Time',
                'link'  => 'careers/hr-assistant.php',
            ],
            [
                'icon'  => 'bi-code-square',
                'title' => 'WordPress Developer',
                'desc'  => 'The ideal candidate will have a strong understanding of WordPress architecture, custom theme development, plugin integration, and optimization techniques ensuring every project delivers top-tier user experience.',
                'loc'   => 'Gulberg Greens, Islamabad',
                'type'  => 'Full Time',
                'link'  => 'careers/wordpress-developer.php',
            ],
            [
                'icon'  => 'bi-megaphone',
                'title' => 'Google & Meta Ads Specialist',
                'desc'  => 'This role requires a blend of analytical thinking and creative flair, with the goal of driving qualified traffic, generating leads, and maximizing ROI through strategic ad placements and audience targeting.',
                'loc'   => 'Gulberg Greens, Islamabad',
                'type'  => 'Full Time',
                'link'  => 'careers/google-meta-ads-specialist.php',
            ],
        ];
        foreach ($jobs as $job):
        ?>
        <div class="job-card">
            <div class="job-icon-wrap">
                <i class="bi <?= $job['icon'] ?>"></i>
            </div>
            <div class="job-left">
                <div class="job-title"><?= htmlspecialchars($job['title']) ?></div>
                <p class="job-desc"><?= htmlspecialchars($job['desc']) ?></p>
                <div class="job-meta">
                    <span class="job-tag tag-type">
                        <i class="bi bi-clock"></i>
                        <?= htmlspecialchars($job['type']) ?>
                    </span>
                    <span class="job-tag tag-loc">
                        <i class="bi bi-geo-alt"></i>
                        <?= htmlspecialchars($job['loc']) ?>
                    </span>
                </div>
            </div>
            <div class="job-right">
                <a href="<?= htmlspecialchars($job['link']) ?>" class="btn-grad">
                    Apply Now <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
        <?php endforeach; ?>

    </div>
</section>

<!-- ========== WHY JOIN US ========== -->
<section class="careers-why">
    <div class="container">
        <div class="why-header">
            <span class="section-label">Why Join Us</span>
            <h2>Why Join Virex Social?</h2>
            <p>From a custom site to full build, here's what makes working with us truly rewarding.</p>
        </div>

        <div class="why-grid">
            <?php
            $reasons = [
                ['bi-mortarboard',      '01', 'Grow Your Skills',         'We\'re big on learning here. You\'ll get training, workshops, and real-world projects that help you level up fast.'],
                ['bi-lightning-charge', '02', 'Work on Exciting Projects', 'Boring work? Not here. You\'ll get to dive into creative campaigns and big ideas that keep things fresh.'],
                ['bi-people',           '03', 'Supportive Team Culture',   'Think of us as your work family. We listen, we collaborate, and we\'ve always got your back.'],
                ['bi-bar-chart-line',   '04', 'Room to Build Your Career', 'Ready to take the next step? We\'ll help you grow into the role you\'ve been aiming for.'],
            ];
            foreach ($reasons as $r):
            ?>
            <div class="why-card">
                <div class="why-icon"><i class="bi <?= $r[0] ?>"></i></div>
                <div class="why-num"><?= $r[1] ?></div>
                <div class="why-title"><?= $r[2] ?></div>
                <p class="why-text"><?= $r[3] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== WHERE TALENT CREATES REAL IMPACT ========== -->
<section class="careers-features">
    <div class="container">
        <div class="features-grid">

            <div class="features-img">
                <img
                    class="features-img-main"
                    src="https://illustrations.popsy.co/amber/team-work.svg"
                    alt="Where Talent Creates Real Impact"
                >
                <div class="features-img-badge">
                    <div class="num">300+</div>
                    <div class="lbl">Clients<br>Served</div>
                </div>
            </div>

            <div class="features-content">
                <span class="section-label">Your Vision, Our Execution</span>
                <h2 style="font-size:clamp(26px,3.5vw,38px);margin-bottom:16px;line-height:1.2;">
                    Where Your Talent Creates Real Impact
                </h2>
                <p style="font-size:16px;line-height:1.78;margin-bottom:28px;">
                    At Virex Social, we believe in more than just jobs — we believe in building careers that matter. Our management makes work fun. Here, your skills, ideas, and passion turn into real projects that inspire, connect, and deliver results.
                </p>
                <p style="font-size:16px;line-height:1.78;margin-bottom:36px;">
                    A standout quality we bring is our culture. We are collaborative, creative, and growth-focused. Our team works together, supports each other, and celebrates wins as a team.
                </p>

                <?php
                $perks = [
                    ['bi-megaphone',       'Creative Promotion',      'Work on exciting campaigns that boost brands and tell stories people remember.'],
                    ['bi-palette',         'Visual Content & Design', 'Turn ideas into eye-catching visuals and infographics that speak louder than words.'],
                    ['bi-graph-up-arrow',  'Real Career Growth',      'We invest in your skills, training, and goals so you can level up fast.'],
                    ['bi-people-fill',     'Collaborative Culture',   'A team that listens, supports, and celebrates every win together.'],
                ];
                foreach ($perks as $i => $p):
                ?>
                <div class="feature-item">
                    <div class="feature-num">
                        <i class="bi <?= $p[0] ?>" style="font-size:18px;"></i>
                    </div>
                    <div>
                        <h5><?= $p[1] ?></h5>
                        <p><?= $p[2] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>

                <a href="about.php" class="btn-grad" style="margin-top:12px;">
                    Discover More <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ========== BANNER ========== -->
<section class="careers-banner">
    <div class="container">
        <div class="banner-inner">
            <span class="banner-label">Build Your Future With Us</span>
            <h2 class="banner-title">
                Join a team that values creativity,<br>growth, and making an impact.
            </h2>
            <p class="banner-desc">
                Where Talent Meets Opportunity! We're always looking for passionate people ready to make a difference in the digital world.
            </p>
            <a href="contact.php" class="btn-grad">
                Contact Us Today <i class="bi bi-send"></i>
            </a>
        </div>
    </div>
</section>

<!-- ========== TEAM TESTIMONIALS ========== -->
<section class="careers-testi">
    <div class="container">
        <div class="testi-header">
            <span class="section-label">Team Stories</span>
            <h2>What Our Team Says</h2>
            <p>Hear from the people who make Virex Social a great place to grow your career.</p>
        </div>

        <div class="testi-grid">
            <?php
            $testis = [
                [
                    'text' => 'Working at Virex Social has been a game changer for my career. I joined as a junior editor and within a year I was leading my own campaigns. The team culture is incredible.',
                    'name' => 'Sara Ahmed',
                    'role' => 'Video Editor',
                    'init' => 'SA',
                ],
                [
                    'text' => 'The environment here is super collaborative. Everyone is willing to help and share knowledge. I\'ve learned more in 6 months here than I did in 2 years elsewhere.',
                    'name' => 'Hamza Malik',
                    'role' => 'WordPress Developer',
                    'init' => 'HM',
                ],
                [
                    'text' => 'What I love most is that my ideas are actually heard and implemented. Management really invests in you and your growth. Proud to be part of this team.',
                    'name' => 'Aisha Khan',
                    'role' => 'Digital Marketing Specialist',
                    'init' => 'AK',
                ],
            ];
            foreach ($testis as $t):
            ?>
            <div class="testi-card">
                <div class="testi-stars">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <div class="testi-quote-icon">
                    <i class="bi bi-chat-quote-fill"></i>
                </div>
                <p class="testi-text"><?= htmlspecialchars($t['text']) ?></p>
                <div class="testi-author">
                    <div class="testi-avatar"><?= $t['init'] ?></div>
                    <div>
                        <strong><?= htmlspecialchars($t['name']) ?></strong>
                        <span><?= htmlspecialchars($t['role']) ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<button id="back-to-top" onclick="window.scrollTo({top:0,behavior:'smooth'})">
    <i class="bi bi-arrow-up"></i>
</button>

<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Counter animation
function animateCounter(el) {
    var target = parseInt(el.dataset.count);
    var suffix = el.querySelector('sup').outerHTML;
    var start  = 0;
    var step   = target / (1800 / 16);
    var timer  = setInterval(function() {
        start = Math.min(start + step, target);
        el.innerHTML = Math.floor(start).toLocaleString() + suffix;
        if (start >= target) clearInterval(timer);
    }, 16);
}
var cObs = new IntersectionObserver(function(entries) {
    entries.forEach(function(e) {
        if (e.isIntersecting) { animateCounter(e.target); cObs.unobserve(e.target); }
    });
}, { threshold: 0.5 });
document.querySelectorAll('[data-count]').forEach(function(c){ cObs.observe(c); });

// Scroll reveal
var revObs = new IntersectionObserver(function(entries) {
    entries.forEach(function(e, i) {
        if (e.isIntersecting) {
            setTimeout(function(){ e.target.style.opacity='1'; e.target.style.transform='translateY(0)'; }, i * 70);
            revObs.unobserve(e.target);
        }
    });
}, { threshold: 0.1 });
document.querySelectorAll('.job-card, .why-card, .testi-card, .feature-item').forEach(function(el) {
    el.style.opacity = '0';
    el.style.transform = 'translateY(28px)';
    el.style.transition = 'opacity .55s ease, transform .55s ease';
    revObs.observe(el);
});

// Back to top
var btt = document.getElementById('back-to-top');
window.addEventListener('scroll', function(){ btt.classList.toggle('visible', window.scrollY > 400); });
</script>
</body>
</html>