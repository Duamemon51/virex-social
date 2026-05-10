<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virex Social – Expert Digital Marketing Services</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            /* Copilot-style gradient colors: pink → purple → blue → teal */
            --pink:    #d63bfc;
            --purple:  #7c3aed;
            --blue:    #2563eb;
            --teal:    #06b6d4;
            --orange:  #f97316;

            /* LIGHT THEME */
            --dark:    #ffffff;
            --dark2:   #f4f2ff;
            --surface: #f8f7ff;
            --surface2:#eeeaff;
            --text:    #5c5470;
            --text-strong: #1e1240;
            --white:   #1e1240;
            --glass:   rgba(124,58,237,0.06);
            --glass-border: rgba(124,58,237,0.15);

            --grad-main:   linear-gradient(135deg, #d63bfc 0%, #7c3aed 35%, #2563eb 65%, #06b6d4 100%);
            --grad-btn:    linear-gradient(135deg, #d63bfc, #7c3aed, #2563eb);
            --grad-card:   linear-gradient(135deg, rgba(214,59,252,0.06), rgba(124,58,237,0.06), rgba(37,99,235,0.05));
            --grad-soft:   linear-gradient(135deg, #fdf4ff 0%, #f0ecff 50%, #eff6ff 100%);
        }

        html { scroll-behavior: smooth; }
        body {
            font-family: 'Outfit', sans-serif;
            color: var(--text);
            background: #fafafa;
            overflow-x: hidden;
        }
        h1,h2,h3,h4,h5,h6 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 800;
            color: var(--text-strong);
        }
        a { text-decoration: none; color: inherit; }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 30px; width: 100%; }

        .grad-text {
            background: var(--grad-main);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* ─── NAVBAR ─── */
        .navbar {
            position: fixed; top: 0; left: 0; right: 0; z-index: 100;
            background: rgba(255,255,255,0.92);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(124,58,237,0.1);
            padding: 16px 0;
        }
        .nav-inner { display: flex; align-items: center; justify-content: space-between; }
        .nav-logo {
            font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 900; font-size: 24px;
        }
        .logo-v { background: var(--grad-main); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .logo-rest { color: var(--text-strong); }
        .nav-links { display: flex; gap: 32px; align-items: center; }
        .nav-links a { font-size: 14px; font-weight: 600; color: var(--text); transition: color .3s; }
        .nav-links a:hover { color: var(--purple); }
        .nav-cta {
            background: var(--grad-btn);
            color: white; font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 700; font-size: 14px;
            padding: 10px 24px; border-radius: 10px; transition: all .3s;
            box-shadow: 0 4px 20px rgba(124,58,237,0.3);
        }
        .nav-cta:hover { transform: translateY(-2px); box-shadow: 0 8px 30px rgba(124,58,237,0.4); }

        /* ─── HERO ─── */
        .hero {
            min-height: 100vh;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            padding: 130px 0 80px;
            background: var(--grad-soft);
        }

        .hero-orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            pointer-events: none;
        }
        .orb-1 { width: 500px; height: 500px; background: rgba(214,59,252,0.12); top: -100px; right: -100px; }
        .orb-2 { width: 400px; height: 400px; background: rgba(37,99,235,0.1); bottom: -80px; left: -80px; }
        .orb-3 { width: 300px; height: 300px; background: rgba(6,182,212,0.1); top: 40%; right: 20%; }

        .hero-inner {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            position: relative; z-index: 2;
        }

        .hero-badge {
            display: inline-flex; align-items: center; gap: 10px;
            background: rgba(124,58,237,0.08);
            border: 1px solid rgba(124,58,237,0.2);
            color: var(--purple);
            font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 700;
            font-size: 12px; letter-spacing: 2px; text-transform: uppercase;
            padding: 8px 18px; border-radius: 50px; margin-bottom: 24px;
        }
        .badge-dot {
            width: 8px; height: 8px; border-radius: 50%;
            background: var(--grad-main);
            animation: pulse 1.5s infinite;
        }
        @keyframes pulse { 0%,100%{opacity:1;transform:scale(1)} 50%{opacity:.6;transform:scale(1.5)} }

        .hero-title {
            font-size: clamp(36px, 5vw, 60px);
            line-height: 1.08;
            margin-bottom: 20px;
            letter-spacing: -1px;
            color: var(--text-strong);
        }
        .typed-wrapper { display: block; min-height: 1.15em; }

        .hero-desc { font-size: 17px; line-height: 1.8; color: #6b7280; max-width: 460px; margin-bottom: 40px; font-weight: 400; }

        .hero-actions { display: flex; gap: 16px; align-items: center; flex-wrap: wrap; }

        .btn-grad {
            display: inline-flex; align-items: center; gap: 10px;
            background: var(--grad-btn);
            color: #fff; font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 700; font-size: 15px;
            padding: 16px 36px; border-radius: 12px;
            transition: all .3s; box-shadow: 0 4px 25px rgba(124,58,237,.3);
            position: relative; overflow: hidden;
        }
        .btn-grad:hover { transform: translateY(-3px); box-shadow: 0 8px 40px rgba(124,58,237,.45); }
        .btn-grad svg { width:18px; height:18px; stroke:white; stroke-width:2.5; flex-shrink:0; }

        .btn-ghost {
            display: inline-flex; align-items: center; gap: 10px;
            background: white;
            border: 1.5px solid rgba(124,58,237,0.25);
            color: var(--purple); font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 600; font-size: 15px;
            padding: 15px 32px; border-radius: 12px;
            transition: all .3s;
        }
        .btn-ghost:hover { background: rgba(124,58,237,0.06); border-color: rgba(124,58,237,0.5); }

        .hero-stats {
            display: flex; gap: 40px; margin-top: 52px;
            padding-top: 36px;
            border-top: 1px solid rgba(124,58,237,0.15);
        }
        .stat-number {
            font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 900;
            font-size: 40px; line-height: 1;
        }
        .stat-number sup { font-size: 22px; }
        .stat-label { font-size: 13px; color: #9ca3af; margin-top: 5px; }

        /* Hero Right */
        .hero-right { position: relative; height: 580px; }

        .hero-img-main {
            position: absolute; top: 0; left: 50%; transform: translateX(-50%);
            width: 250px; height: 330px; border-radius: 24px; overflow: hidden;
            box-shadow: 0 20px 60px rgba(124,58,237,.2); z-index: 3;
            border: 2px solid rgba(124,58,237,0.15);
        }
        .hero-img-left {
            position: absolute; left: 0; top: 60px;
            width: 205px; height: 270px; border-radius: 20px; overflow: hidden;
            box-shadow: 0 15px 50px rgba(37,99,235,.15); z-index: 2;
            border: 2px solid rgba(37,99,235,0.12);
        }
        .hero-img-right {
            position: absolute; right: 0; top: 120px;
            width: 195px; height: 250px; border-radius: 20px; overflow: hidden;
            box-shadow: 0 15px 50px rgba(6,182,212,.15); z-index: 2;
            border: 2px solid rgba(6,182,212,0.12);
        }
        .hero-img-main img, .hero-img-left img, .hero-img-right img {
            width: 100%; height: 100%; object-fit: cover; display: block;
        }

        .hero-ring {
            position: absolute; top: -40px; left: 50%; transform: translateX(-50%);
            width: 360px; height: 360px; border-radius: 50%;
            background: conic-gradient(from 180deg, #d63bfc, #7c3aed, #2563eb, #06b6d4, #d63bfc);
            padding: 2px; z-index: 1;
            animation: rotateSlow 12s linear infinite;
            opacity: 0.6;
        }
        .hero-ring-inner {
            width: 100%; height: 100%; border-radius: 50%;
            background: var(--grad-soft);
        }
        @keyframes rotateSlow { from{transform:translateX(-50%) rotate(0deg)} to{transform:translateX(-50%) rotate(360deg)} }

        .float-el { position: absolute; z-index: 10; animation: floatY 4s ease-in-out infinite; }
        @keyframes floatY { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-14px)} }
        .float-rocket { top: 8px; right: 16px; animation-delay: .4s; }
        .float-lamp   { left: 8px; bottom: 95px; animation-delay: 1s; }

        .float-card {
            position: absolute; bottom: 28px; left: 50%; transform: translateX(-50%);
            background: white;
            border: 1.5px solid rgba(124,58,237,0.15);
            border-radius: 18px;
            padding: 14px 22px;
            box-shadow: 0 8px 40px rgba(124,58,237,.15);
            display: flex; align-items: center; gap: 14px; white-space: nowrap;
            animation: floatY 3s ease-in-out infinite .3s; z-index: 10;
        }
        .float-card-icon {
            width: 44px; height: 44px;
            background: var(--grad-btn);
            border-radius: 12px; display: flex; align-items: center; justify-content: center;
        }
        .float-card-icon svg { width:22px; height:22px; stroke:white; stroke-width:2; }
        .float-card-text strong { display:block; font-family:'Plus Jakarta Sans',sans-serif; font-weight:800; font-size:17px; color:var(--text-strong); }
        .float-card-text span { font-size:12px; color:#9ca3af; }

        /* ─── BRANDS ─── */
        .brands-section {
            padding: 36px 0;
            background: white;
            border-top: 1px solid rgba(124,58,237,0.08);
            border-bottom: 1px solid rgba(124,58,237,0.08);
            position: relative; z-index: 2;
        }
        .brands-inner { display:flex; align-items:center; justify-content:space-between; gap:24px; flex-wrap:wrap; }
        .brand-logo {
            font-family:'Plus Jakarta Sans',sans-serif; font-weight:800; font-size:16px;
            color: #d1c4e9; letter-spacing:1px; transition:all .3s;
        }
        .brand-logo:hover { color: var(--purple); }

        /* ─── SECTION COMMONS ─── */
        .section-label {
            display: inline-flex; align-items: center; gap: 8px;
            font-family:'Plus Jakarta Sans',sans-serif; font-weight:700;
            font-size:12px; letter-spacing:2.5px; text-transform:uppercase;
            margin-bottom:14px; color: var(--purple);
        }
        .section-label::before {
            content: '';
            display: inline-block; width: 20px; height: 2px;
            background: var(--grad-main); border-radius: 2px;
        }
        .section-title { font-size:clamp(28px,4vw,46px); line-height:1.15; margin-bottom:18px; letter-spacing:-0.5px; color: var(--text-strong); }
        .section-desc { font-size:17px; line-height:1.8; color:#6b7280; max-width:500px; margin-bottom:60px; }

        /* ─── SERVICES ─── */
        .services-section { padding: 110px 0; position: relative; z-index: 2; background: white; }

        .services-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:20px; }

        .service-card {
            background: #fafafa;
            border: 1.5px solid rgba(124,58,237,0.1);
            border-radius: 24px; padding: 36px 30px;
            transition: all .4s cubic-bezier(.4,0,.2,1);
            position: relative; overflow: hidden;
            cursor: default;
        }
        .service-card::before {
            content:''; position:absolute; inset:0; border-radius:24px;
            background: var(--grad-card);
            opacity:0; transition:opacity .4s;
        }
        .service-card:hover { transform:translateY(-8px); box-shadow:0 20px 50px rgba(124,58,237,.12); border-color: rgba(124,58,237,0.3); }
        .service-card:hover::before { opacity: 1; }
        .service-card > * { position:relative; z-index:1; }

        .service-icon {
            width: 60px; height: 60px;
            background: rgba(124,58,237,0.08);
            border: 1.5px solid rgba(124,58,237,0.15);
            border-radius: 16px;
            display: flex; align-items: center; justify-content: center;
            margin-bottom: 22px; transition: all .4s;
        }
        .service-icon svg { width:28px; height:28px; stroke:url(#gradStroke); stroke-width:1.8; fill:none; }
        .service-card:hover .service-icon { background: var(--grad-btn); border-color: transparent; }
        .service-card:hover .service-icon svg { stroke: white; }

        .service-title { font-size:20px; margin-bottom:12px; color: var(--text-strong); }
        .service-desc { font-size:14px; line-height:1.75; color:#6b7280; }

        .services-cta { text-align:center; margin-top:52px; }
        .btn-outline {
            display:inline-flex; align-items:center; gap:8px;
            border: 1.5px solid rgba(124,58,237,0.25);
            background: white;
            color: var(--purple);
            font-family:'Plus Jakarta Sans',sans-serif; font-weight:700; font-size:13px;
            padding:14px 32px; border-radius:12px; transition:all .3s;
            letter-spacing:.5px; text-transform:uppercase;
        }
        .btn-outline:hover { border-color: var(--purple); background: rgba(124,58,237,0.06); box-shadow:0 4px 20px rgba(124,58,237,.1); }

        /* ─── SCROLLING TEXT ─── */
        .scrolling-section {
            position: relative; overflow: hidden;
            background: var(--grad-soft);
        }
        .scrolling-section::before,
        .scrolling-section::after {
            content: ''; position: absolute; top:0; bottom:0; width:120px; z-index:2; pointer-events:none;
        }
        .scrolling-section::before { left:0; background:linear-gradient(to right, #f8f7ff, transparent); }
        .scrolling-section::after  { right:0; background:linear-gradient(to left, #f8f7ff, transparent); }

        .scrolling-track-wrap {
            border-top: 1px solid rgba(124,58,237,0.1);
            border-bottom: 1px solid rgba(124,58,237,0.1);
            overflow: hidden;
        }

        .scrolling-track {
            display:flex; gap:0; padding:26px 0; white-space:nowrap;
            animation:scrollLeft 28s linear infinite;
        }
        @keyframes scrollLeft { from{transform:translateX(0)} to{transform:translateX(-50%)} }

        .scroll-item {
            font-family:'Plus Jakarta Sans',sans-serif; font-weight:800;
            font-size:clamp(16px,2.5vw,24px); letter-spacing:3px; text-transform:uppercase;
            color: #c4b5e8; flex-shrink:0; padding:0 28px;
        }
        .scroll-sep {
            display:inline-flex; align-items:center; justify-content:center;
            width:32px; height:32px; border-radius:50%; flex-shrink:0; margin:0 12px;
            background: var(--grad-main);
            vertical-align: middle; position: relative; top: -1px;
        }
        .scroll-sep svg { width:12px; height:12px; fill:white; }

        /* ─── PROCESS ─── */
        .process-section {
            padding:110px 0 160px;
            position:relative; overflow:hidden; z-index:2;
            background: white;
        }

        .orb-bg {
            position:absolute; border-radius:50%; filter:blur(100px); pointer-events:none;
        }
        .orb-bg-1 { width:400px;height:400px; background:rgba(37,99,235,.06); top:-100px; right:-50px; }
        .orb-bg-2 { width:300px;height:300px; background:rgba(6,182,212,.05); bottom:0; left:-50px; }

        .process-grid { display:grid; grid-template-columns:repeat(4,1fr); gap:24px; margin-top:60px; position:relative; }

        .process-connector {
            position:absolute; top:52px; left:calc(12.5% + 40px); right:calc(12.5% + 40px); height:1px; z-index:0;
            background: repeating-linear-gradient(90deg, rgba(124,58,237,.2) 0, rgba(124,58,237,.2) 8px, transparent 8px, transparent 18px);
        }

        .process-card { text-align:center; position:relative; z-index:1; }
        .process-num {
            position:absolute; top:-10px; right:12px;
            font-family:'Plus Jakarta Sans',sans-serif; font-weight:900; font-size:64px;
            line-height:1; pointer-events:none;
            background: var(--grad-main);
            -webkit-background-clip: text; -webkit-text-fill-color: transparent;
            opacity: .07;
        }
        .process-icon-wrap {
            width:84px; height:84px;
            background: rgba(124,58,237,0.06);
            border: 1.5px solid rgba(124,58,237,0.15);
            border-radius:22px;
            display:flex; align-items:center; justify-content:center;
            margin:0 auto 20px;
            transition:all .35s;
        }
        .process-icon-wrap svg { width:34px; height:34px; stroke: var(--purple); stroke-width:1.6; }
        .process-card:hover .process-icon-wrap {
            background: var(--grad-btn);
            border-color:transparent;
            box-shadow: 0 10px 40px rgba(124,58,237,.3);
        }
        .process-card:hover .process-icon-wrap svg { stroke:white; }
        .process-title { font-size:17px; color:var(--text-strong); margin-bottom:10px; }
        .process-desc { font-size:14px; color:#6b7280; line-height:1.75; }

        /* ─── ABOUT ─── */
        .about-section { padding:110px 0; position:relative; z-index:2; background: var(--grad-soft); }

        .about-inner { display:grid; grid-template-columns:1fr 1fr; gap:80px; align-items:center; }

        .about-img-wrap { position:relative; }
        .about-img-main {
            width:100%; border-radius:24px; overflow:hidden;
            box-shadow:0 20px 60px rgba(124,58,237,.15);
            border:2px solid rgba(124,58,237,0.12);
        }
        .about-img-main img { width:100%; height:500px; object-fit:cover; display:block; }

        .about-img-badge {
            position:absolute; bottom:-20px; right:-20px;
            background: var(--grad-btn);
            color:white; font-family:'Plus Jakarta Sans',sans-serif; font-weight:900;
            padding:24px 28px; border-radius:20px; text-align:center;
            box-shadow:0 15px 40px rgba(124,58,237,.35);
        }
        .about-img-badge .num { font-size:40px; line-height:1; }
        .about-img-badge .lbl { font-size:12px; font-weight:600; opacity:.9; margin-top:4px; }

        .about-features { display:grid; grid-template-columns:1fr 1fr; gap:20px; margin-bottom:40px; }
        .about-feature {
            display:flex; align-items:flex-start; gap:14px;
            background: white; border:1.5px solid rgba(124,58,237,0.12);
            border-radius:16px; padding:18px;
            transition:all .3s;
        }
        .about-feature:hover { border-color:rgba(124,58,237,0.3); transform:translateY(-2px); box-shadow:0 8px 25px rgba(124,58,237,.1); }
        .feature-icon {
            width:44px; height:44px;
            background: var(--grad-btn);
            border-radius:12px; display:flex; align-items:center; justify-content:center; flex-shrink:0;
        }
        .feature-icon svg { width:22px; height:22px; stroke:white; stroke-width:1.8; }
        .feature-text strong { display:block; font-family:'Plus Jakarta Sans',sans-serif; font-weight:800; font-size:15px; color:var(--text-strong); margin-bottom:3px; }
        .feature-text span { font-size:13px; color:#9ca3af; }

        /* ─── TESTIMONIALS ─── */
        .testimonials-section { padding:110px 0; position:relative; z-index:2; background: white; }

        .testimonials-header { text-align:center; max-width:600px; margin:0 auto 60px; }
        .testimonials-header .section-label { justify-content:center; color: var(--orange); }
        .testimonials-header .section-label::before { display:none; }
        .testimonials-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:20px; }

        .testimonial-card {
            background: #fafafa;
            border: 1.5px solid rgba(124,58,237,0.1);
            border-radius: 24px; padding: 36px;
            transition: all .35s;
            position: relative; overflow: hidden;
        }
        .testimonial-card::before {
            content: ''; position: absolute; top:0; left:0; right:0; height:3px;
            background: var(--grad-main); opacity:0; transition:opacity .35s;
        }
        .testimonial-card:hover { transform:translateY(-6px); box-shadow:0 20px 50px rgba(124,58,237,.1); border-color: rgba(124,58,237,0.25); }
        .testimonial-card:hover::before { opacity:1; }

        .testimonial-quote svg { width:32px; height:32px; fill:rgba(124,58,237,.15); margin-bottom:14px; }
        .testimonial-stars { display:flex; gap:3px; margin-bottom:16px; }
        .testimonial-stars svg { width:16px; height:16px; fill:#f97316; stroke:none; }
        .testimonial-text { font-size:15px; line-height:1.85; color:#6b7280; font-style:italic; margin-bottom:26px; }

        .testimonial-author { display:flex; align-items:center; gap:14px; }
        .author-avatar {
            width:48px; height:48px; border-radius:50%;
            background: var(--grad-btn);
            display:flex; align-items:center; justify-content:center;
            font-family:'Plus Jakarta Sans',sans-serif; font-weight:900; font-size:16px; color:white; flex-shrink:0;
        }
        .author-info strong { display:block; font-family:'Plus Jakarta Sans',sans-serif; font-weight:800; font-size:15px; color:var(--text-strong); }
        .author-info span { font-size:13px; color:#9ca3af; }

        /* ─── FAQ ─── */
        .faq-section { padding:110px 0; position:relative; z-index:2; background: var(--grad-soft); }

        .faq-inner { display:grid; grid-template-columns:1fr 1fr; gap:80px; align-items:start; }
        .faq-list { display:flex; flex-direction:column; gap:12px; }

        .faq-item {
            background: white;
            border: 1.5px solid rgba(124,58,237,0.1);
            border-radius:18px; overflow:hidden; transition:all .3s;
        }
        .faq-item:hover { border-color:rgba(124,58,237,0.25); }
        .faq-item.open { border-color:rgba(124,58,237,0.4); box-shadow:0 4px 20px rgba(124,58,237,.08); }

        .faq-question {
            padding:22px 24px; display:flex; justify-content:space-between; align-items:center;
            cursor:pointer; font-family:'Plus Jakarta Sans',sans-serif; font-weight:700; font-size:16px;
            color:var(--text-strong); user-select:none; gap:16px;
        }
        .faq-toggle {
            width:34px; height:34px;
            background:rgba(124,58,237,0.06);
            border:1.5px solid rgba(124,58,237,0.15);
            border-radius:50%; display:flex; align-items:center; justify-content:center;
            flex-shrink:0; transition:all .35s;
        }
        .faq-toggle svg { width:14px; height:14px; stroke: var(--purple); stroke-width:2.5; transition:all .35s; }
        .faq-item.open .faq-toggle { background:var(--grad-btn); border-color:transparent; transform:rotate(45deg); }
        .faq-item.open .faq-toggle svg { stroke:white; }

        .faq-answer {
            max-height:0; overflow:hidden; transition:max-height .4s ease,padding .3s;
            font-size:15px; line-height:1.8; color:#6b7280; padding:0 24px;
        }
        .faq-item.open .faq-answer { max-height:300px; padding:0 24px 22px; }

        .faq-img-side img { width:100%; border-radius:24px; box-shadow:0 20px 60px rgba(124,58,237,.12); border:2px solid rgba(124,58,237,0.1); }

        /* ─── CONTACT ─── */
        .contact-section { padding:110px 0; position:relative; z-index:2; background: white; }

        .contact-inner { display:grid; grid-template-columns:1fr 1fr; gap:80px; align-items:center; }

        .contact-form-wrap {
            background: #fafafa;
            border:1.5px solid rgba(124,58,237,0.12);
            border-radius:28px; padding:48px 40px;
        }
        .form-grid { display:grid; grid-template-columns:1fr 1fr; gap:18px; margin-bottom:18px; }
        .form-group { display:flex; flex-direction:column; gap:8px; }
        .form-group.full { grid-column:1/-1; }
        .form-group label {
            font-family:'Plus Jakarta Sans',sans-serif; font-weight:700;
            font-size:12px; color:#9ca3af; letter-spacing:.5px; text-transform:uppercase;
        }
        .form-control {
            background: white;
            border:1.5px solid rgba(124,58,237,0.15);
            border-radius:12px; padding:14px 16px;
            font-family:'Outfit',sans-serif; font-size:15px;
            color:var(--text-strong); outline:none; transition:all .3s; width:100%;
        }
        .form-control:focus { border-color:rgba(124,58,237,0.6); box-shadow:0 0 0 3px rgba(124,58,237,.1); }
        .form-control::placeholder { color:#d1c4e9; }
        textarea.form-control { resize:none; height:120px; }
        select.form-control option { background: white; color: var(--text-strong); }

        .btn-submit {
            width:100%; background:var(--grad-btn);
            color:white; border:none; font-family:'Plus Jakarta Sans',sans-serif;
            font-weight:800; font-size:16px; padding:18px; border-radius:14px;
            cursor:pointer; transition:all .3s;
            box-shadow:0 4px 25px rgba(124,58,237,.3); margin-top:8px;
            display:flex; align-items:center; justify-content:center; gap:10px;
        }
        .btn-submit:hover { transform:translateY(-3px); box-shadow:0 8px 40px rgba(124,58,237,.4); }
        .btn-submit svg { width:18px; height:18px; stroke:white; stroke-width:2.5; }

        .contact-items { display:flex; flex-direction:column; gap:20px; margin-top:40px; }
        .contact-item {
            display:flex; align-items:center; gap:16px;
            background:#fafafa; border:1.5px solid rgba(124,58,237,0.1);
            border-radius:16px; padding:18px 20px; transition:all .3s;
        }
        .contact-item:hover { border-color:rgba(124,58,237,0.3); transform:translateX(4px); box-shadow:0 4px 20px rgba(124,58,237,.08); }
        .contact-item-icon {
            width:48px; height:48px;
            background: var(--grad-btn);
            border-radius:14px; display:flex; align-items:center; justify-content:center; flex-shrink:0;
        }
        .contact-item-icon svg { width:22px; height:22px; stroke:white; stroke-width:1.8; }
        .contact-item-text strong { display:block; font-family:'Plus Jakarta Sans',sans-serif; font-weight:800; font-size:15px; color:var(--text-strong); }
        .contact-item-text span { font-size:14px; color:#9ca3af; }

        /* ─── NEWSLETTER ─── */
        .newsletter-section { padding: 0 0 80px; position:relative; z-index:2; background: white; }
        .newsletter-inner-wrap {
            background: var(--grad-main);
            border-radius:28px; padding:64px 60px;
            position:relative; overflow:hidden;
        }
        .newsletter-inner-wrap::before {
            content:''; position:absolute; inset:0; border-radius:28px;
            background: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.08'/%3E%3C/svg%3E");
            background-size: 200px 200px; pointer-events:none;
        }
        .newsletter-inner { display:flex; align-items:center; justify-content:space-between; gap:40px; position:relative; z-index:1; }
        .newsletter-text h2 { color:white; margin-bottom:8px; }
        .newsletter-text p { color:rgba(255,255,255,.75); font-size:16px; }
        .newsletter-form { display:flex; flex-shrink:0; }
        .newsletter-input {
            background:rgba(255,255,255,0.2);
            border:1.5px solid rgba(255,255,255,0.35); border-right:none;
            border-radius:12px 0 0 12px;
            padding:16px 24px; font-family:'Outfit',sans-serif; font-size:15px;
            color:white; outline:none; width:300px; transition:all .3s;
        }
        .newsletter-input:focus { border-color:rgba(255,255,255,0.7); background: rgba(255,255,255,0.25); }
        .newsletter-input::placeholder { color:rgba(255,255,255,.6); }
        .newsletter-btn {
            background:white; border:none; border-radius:0 12px 12px 0;
            padding:16px 28px; font-family:'Plus Jakarta Sans',sans-serif; font-weight:800;
            font-size:15px; color:var(--purple); cursor:pointer; transition:all .3s; white-space:nowrap;
            display:flex; align-items:center; gap:8px;
        }
        .newsletter-btn:hover { background:rgba(255,255,255,.9); }
        .newsletter-btn svg { width:16px; height:16px; stroke:var(--purple); stroke-width:2.5; }

        /* ─── FOOTER ─── */
        .footer {
            background: var(--text-strong);
            padding:80px 0 0; position:relative; z-index:2;
        }
        .footer-inner { display:grid; grid-template-columns:1.6fr 1fr 1fr 1fr; gap:50px; margin-bottom:60px; }

        .footer-logo {
            font-family:'Plus Jakarta Sans',sans-serif;
            font-weight:900; font-size:28px; display:inline-block; margin-bottom:16px;
        }
        .logo-v-f { background:var(--grad-main); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text; }
        .logo-rest-f { color: rgba(255,255,255,.9); }

        .footer-about { font-size:14px; line-height:1.85; color:rgba(255,255,255,.35); }
        .footer-heading { font-family:'Plus Jakarta Sans',sans-serif; font-weight:800; font-size:16px; color:rgba(255,255,255,.9); margin-bottom:22px; }
        .footer-links { display:flex; flex-direction:column; gap:12px; }
        .footer-links a {
            font-size:14px; color:rgba(255,255,255,.35); transition:all .3s;
            display:flex; align-items:center; gap:8px;
        }
        .footer-links a:hover { color:rgba(255,255,255,.85); padding-left:8px; }

        .footer-social { display:flex; gap:10px; margin-top:22px; }
        .social-btn {
            width:40px; height:40px;
            background:rgba(255,255,255,.08);
            border:1px solid rgba(255,255,255,.12);
            border-radius:10px; display:flex; align-items:center; justify-content:center;
            transition:all .3s; font-size:14px; color:rgba(255,255,255,.4); font-weight:700;
        }
        .social-btn:hover { background:var(--grad-btn); border-color:transparent; color:white; }

        .footer-bottom {
            border-top:1px solid rgba(255,255,255,.07); padding:24px 0;
            display:flex; align-items:center; justify-content:space-between;
        }
        .footer-bottom p { font-size:14px; color:rgba(255,255,255,.25); }
        .footer-bottom-links { display:flex; gap:24px; }
        .footer-bottom-links a { font-size:14px; color:rgba(255,255,255,.25); transition:color .3s; }
        .footer-bottom-links a:hover { color:rgba(255,255,255,.7); }

        /* ─── BACK TO TOP ─── */
        #back-to-top {
            position:fixed; bottom:40px; right:40px;
            width:50px; height:50px;
            background:var(--grad-btn);
            color:white; border:none; border-radius:14px;
            cursor:pointer; display:none; align-items:center; justify-content:center;
            box-shadow:0 4px 25px rgba(124,58,237,.4); z-index:999; transition:all .3s;
            font-size:20px;
        }
        #back-to-top.visible { display:flex; }
        #back-to-top:hover { transform:translateY(-4px); box-shadow:0 8px 40px rgba(124,58,237,.5); }

        /* ─── RESPONSIVE ─── */
        @media(max-width:992px){
            .hero-inner,.about-inner,.faq-inner,.contact-inner { grid-template-columns:1fr; }
            .hero-right { height:400px; }
            .services-grid,.process-grid { grid-template-columns:repeat(2,1fr); }
            .testimonials-grid { grid-template-columns:1fr; }
            .footer-inner { grid-template-columns:1fr 1fr; }
            .newsletter-inner { flex-direction:column; text-align:center; }
            .process-connector { display:none; }
            .nav-links { display:none; }
        }
        @media(max-width:600px){
            .services-grid,.process-grid,.footer-inner { grid-template-columns:1fr; }
            .hero-right { display:none; }
            .form-grid { grid-template-columns:1fr; }
            .hero-stats { flex-wrap:wrap; gap:20px; }
            .newsletter-inner-wrap { padding:36px 24px; }
            .newsletter-form { flex-direction:column; width:100%; }
            .newsletter-input { border-right:1.5px solid rgba(255,255,255,.35); border-radius:12px; width:100%; }
            .newsletter-btn { border-radius:12px; justify-content:center; }
        }
    </style>
</head>
<body>

<!-- Hidden SVG gradient defs for icon strokes -->
<svg width="0" height="0" style="position:absolute">
    <defs>
        <linearGradient id="gradStroke" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%"   stop-color="#d63bfc"/>
            <stop offset="50%"  stop-color="#7c3aed"/>
            <stop offset="100%" stop-color="#06b6d4"/>
        </linearGradient>
    </defs>
</svg>

<!-- ════ NAVBAR ════ -->
<nav class="navbar">
    <div class="container">
        <div class="nav-inner">
            <div class="nav-logo">
                <span class="logo-v">Virex </span><span class="logo-rest">Social</span>
            </div>
            <div class="nav-links">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Blog</a>
                <a href="#">FAQs</a>
                <a href="#" class="nav-cta">Contact Today</a>
            </div>
        </div>
    </div>
</nav>

<!-- ════ HERO ════ -->
<section class="hero">
    <div class="hero-orb orb-1"></div>
    <div class="hero-orb orb-2"></div>
    <div class="hero-orb orb-3"></div>
    <div class="container">
        <div class="hero-inner">
            <div class="hero-left">
                <div class="hero-badge">
                    <span class="badge-dot"></span>
                    Digital Marketing Agency
                </div>
                <h1 class="hero-title">
                    Expert Digital<br>Marketing Services<br>
                    <span class="typed-wrapper grad-text" id="typed-text">for Growth</span>
                </h1>
                <p class="hero-desc">Our results-driven digital marketing services connect you with the right audience and fuel sustainable business growth.</p>
                <div class="hero-actions">
                    <a href="contact-us/" class="btn-grad">
                        Contact Today
                        <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    <a href="services/" class="btn-ghost">Our Services</a>
                </div>
                <div class="hero-stats">
                    <div class="stat-item">
                        <div class="stat-number grad-text" data-count="6">0<sup>+</sup></div>
                        <div class="stat-label">Services</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number grad-text" data-count="50">0<sup>+</sup></div>
                        <div class="stat-label">Professionals</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number grad-text" data-count="1200">0<sup>+</sup></div>
                        <div class="stat-label">Happy Clients</div>
                    </div>
                </div>
            </div>

            <div class="hero-right">
                <div class="hero-ring"><div class="hero-ring-inner"></div></div>

                <div class="hero-img-main">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=500&fit=crop&crop=face" alt="Marketing Professional">
                </div>
                <div class="hero-img-left">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=300&h=400&fit=crop" alt="Team">
                </div>
                <div class="hero-img-right">
                    <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?w=300&h=360&fit=crop" alt="Strategy">
                </div>

                <!-- Floating Rocket -->
                <div class="float-el float-rocket">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none">
                        <path d="M55 8 Q60 32 40 50" stroke="#7c3aed" stroke-width="1.5" stroke-dasharray="4 4" opacity="0.4"/>
                        <path d="M32 10 C32 10 44 14 46 28 L36 38 L26 38 L16 28 C18 14 32 10 32 10Z" stroke="rgba(124,58,237,.5)" stroke-width="1.8" fill="rgba(124,58,237,0.08)"/>
                        <circle cx="32" cy="26" r="5" stroke="#d63bfc" stroke-width="1.8" fill="rgba(214,59,252,0.1)"/>
                        <path d="M16 28 L10 36 L20 34" stroke="rgba(124,58,237,.4)" stroke-width="1.8" fill="none"/>
                        <path d="M46 28 L52 36 L42 34" stroke="rgba(124,58,237,.4)" stroke-width="1.8" fill="none"/>
                        <path d="M26 38 Q29 48 32 44 Q35 48 38 38" stroke="#f97316" stroke-width="2" fill="none"/>
                    </svg>
                </div>

                <!-- Floating Bulb -->
                <div class="float-el float-lamp">
                    <svg width="70" height="90" viewBox="0 0 70 90" fill="none">
                        <path d="M30 80 Q10 85 15 70 Q20 55 35 65" stroke="#06b6d4" stroke-width="1.5" stroke-dasharray="4 4" opacity="0.5"/>
                        <line x1="35" y1="4" x2="35" y2="1"  stroke="rgba(124,58,237,.4)" stroke-width="1.8" stroke-linecap="round"/>
                        <line x1="48" y1="8"  x2="50" y2="6"  stroke="rgba(124,58,237,.4)" stroke-width="1.8" stroke-linecap="round"/>
                        <line x1="22" y1="8"  x2="20" y2="6"  stroke="rgba(124,58,237,.4)" stroke-width="1.8" stroke-linecap="round"/>
                        <line x1="55" y1="18" x2="58" y2="17" stroke="rgba(124,58,237,.4)" stroke-width="1.8" stroke-linecap="round"/>
                        <line x1="15" y1="18" x2="12" y2="17" stroke="rgba(124,58,237,.4)" stroke-width="1.8" stroke-linecap="round"/>
                        <path d="M22 30 C22 20 28 14 35 14 C42 14 48 20 48 30 C48 36 45 40 42 43 L42 50 L28 50 L28 43 C25 40 22 36 22 30Z" stroke="rgba(124,58,237,.35)" stroke-width="1.8" fill="rgba(124,58,237,0.07)"/>
                        <path d="M30 44 L30 38 Q33 35 35 38 Q37 41 35 38 Q37 35 40 38 L40 44" stroke="#d63bfc" stroke-width="1.5" fill="none"/>
                        <line x1="28" y1="51" x2="42" y2="51" stroke="rgba(124,58,237,.35)" stroke-width="1.8" stroke-linecap="round"/>
                        <line x1="29" y1="55" x2="41" y2="55" stroke="rgba(124,58,237,.35)" stroke-width="1.8" stroke-linecap="round"/>
                        <line x1="31" y1="59" x2="39" y2="59" stroke="rgba(124,58,237,.35)" stroke-width="1.8" stroke-linecap="round"/>
                    </svg>
                </div>

                <!-- Float Card -->
                <div class="float-card">
                    <div class="float-card-icon">
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

<!-- ════ BRANDS ════ -->
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

<!-- ════ SERVICES ════ -->
<section class="services-section">
    <div class="container">
        <div class="section-label">Our Services</div>
        <h2 class="section-title">Everything You Need to <span class="grad-text">Dominate Online</span></h2>
        <p class="section-desc">From SEO to social media, we provide end-to-end digital marketing solutions that drive real, measurable results.</p>

        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                </div>
                <h3 class="service-title">Meta Ads</h3>
                <p class="service-desc">Boost your online presence with our Meta Ads services. We drive targeted traffic, maximize your ROI, and optimize your online reputation.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/><polyline points="7 8 10 11 7 14"/><line x1="13" y1="14" x2="17" y2="14"/></svg>
                </div>
                <h3 class="service-title">Website Development</h3>
                <p class="service-desc">Custom, responsive websites that look great and work seamlessly. We handle development, maintenance, and speed optimization.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="8" y1="11" x2="14" y2="11"/><line x1="11" y1="8" x2="11" y2="14"/></svg>
                </div>
                <h3 class="service-title">SEO Services</h3>
                <p class="service-desc">Boost your Google ranking with keyword-optimized, engaging content that drives sustained organic traffic and enhances site performance.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24"><path d="M12 2C8 2 5 5 5 9v1c0 1-1 2-2 2.5.5.5 1 1 1 2 0 1-2 1.5-2 2 0 .8 1.5 1.2 3 1.5.3.8.8 1 1.5 1 .5 0 1-.2 1.5-.5.5.5 1.5 1 3 1s2.5-.5 3-1c.5.3 1 .5 1.5.5.7 0 1.2-.2 1.5-1 1.5-.3 3-.7 3-1.5 0-.5-2-1-2-2 0-1 .5-1.5 1-2C20 13 19 12 19 11V9c0-4-3-7-7-7z"/></svg>
                </div>
                <h3 class="service-title">Snapchat Management</h3>
                <p class="service-desc">We transform your Snapchat Stories into a high-earning asset with custom content creation and strategic audience growth management.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24"><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2"/></svg>
                </div>
                <h3 class="service-title">Video Editing</h3>
                <p class="service-desc">From reels to brand promos, our editing team tells your story with style — making sure your videos stand out and drive engagement.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <svg viewBox="0 0 24 24"><path d="M4 4h16v16H4z"/><path d="M8 8h8"/><path d="M8 12h6"/><path d="M8 16h4"/></svg>
                </div>
                <h3 class="service-title">Meta Content Creation</h3>
                <p class="service-desc">We craft engaging and creative meta content that strengthens your brand presence, boosts audience engagement, and drives better digital visibility.</p>
            </div>
        </div>

        <div class="services-cta">
            <a href="services/" class="btn-outline">View More Services</a>
        </div>
    </div>
</section>

<!-- ════ SCROLLING TEXT ════ -->
<section class="scrolling-section">
    <div class="scrolling-track-wrap">
        <div class="scrolling-track" id="scrollTrack"></div>
    </div>
</section>

<!-- ════ PROCESS ════ -->
<section class="process-section">
    <div class="orb-bg orb-bg-1"></div>
    <div class="orb-bg orb-bg-2"></div>
    <div class="container">
        <div class="section-label" style="color:#06b6d4">Work Process</div>
        <h2 class="section-title">How We Streamline<br><span class="grad-text">Our Design Workflow</span></h2>
        <div class="process-grid">
            <div class="process-connector"></div>
            <div class="process-card">
                <div class="process-num">01</div>
                <div class="process-icon-wrap">
                    <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><line x1="10" y1="9" x2="8" y2="9"/></svg>
                </div>
                <h3 class="process-title">Preparation of Contract</h3>
                <p class="process-desc">We understand your goals and expectations, then set a clear roadmap for a confident start.</p>
            </div>
            <div class="process-card">
                <div class="process-num">02</div>
                <div class="process-icon-wrap">
                    <svg viewBox="0 0 24 24"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/><line x1="2" y1="20" x2="22" y2="20"/></svg>
                </div>
                <h3 class="process-title">Data Analysis</h3>
                <p class="process-desc">We analyze your audience, competitors, and market trends to shape strategies backed by real data.</p>
            </div>
            <div class="process-card">
                <div class="process-num">03</div>
                <div class="process-icon-wrap">
                    <svg viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                </div>
                <h3 class="process-title">Progress Report</h3>
                <p class="process-desc">Stay informed with regular updates and performance metrics — growth thrives on collaboration.</p>
            </div>
            <div class="process-card">
                <div class="process-num">04</div>
                <div class="process-icon-wrap">
                    <svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/></svg>
                </div>
                <h3 class="process-title">Satisfied Customers</h3>
                <p class="process-desc">We deliver results that make clients stay — that's why we're the best digital marketing company.</p>
            </div>
        </div>
    </div>
</section>

<!-- ════ ABOUT ════ -->
<section class="about-section">
    <div class="container">
        <div class="about-inner">
            <div class="about-img-wrap">
                <div class="about-img-main">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=600&h=500&fit=crop" alt="About Us">
                </div>
                <div class="about-img-badge">
                    <div class="num">10+</div>
                    <div class="lbl">Years of<br>Experience</div>
                </div>
            </div>
            <div class="about-content">
                <div class="section-label" style="color:#7c3aed">About Us</div>
                <h2 class="section-title">Outstanding <span class="grad-text">Digital Experience</span></h2>
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
                <a href="about-our-company/" class="btn-grad">
                    Discover More
                    <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ════ TESTIMONIALS ════ -->
<section class="testimonials-section">
    <div class="container">
        <div class="testimonials-header">
            <div class="section-label">Testimonials</div>
            <h2 class="section-title">What People <span class="grad-text">Say About Us</span></h2>
        </div>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-quote">
                    <svg viewBox="0 0 24 24"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/></svg>
                </div>
                <div class="testimonial-stars">
                    <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
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
                    <svg viewBox="0 0 24 24"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/></svg>
                </div>
                <div class="testimonial-stars">
                    <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
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
                    <svg viewBox="0 0 24 24"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/></svg>
                </div>
                <div class="testimonial-stars">
                    <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
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

<!-- ════ FAQ ════ -->
<section class="faq-section">
    <div class="container">
        <div class="faq-inner">
            <div>
                <div class="section-label" style="color:#06b6d4">FAQs</div>
                <h2 class="section-title">Most Popular <span class="grad-text">Questions</span></h2>
                <p style="color:#6b7280;margin-bottom:36px;line-height:1.8;font-size:16px;">Everything you need to know about our digital marketing services and how we work with you.</p>
                <div class="faq-list">
                    <div class="faq-item open">
                        <div class="faq-question" onclick="toggleFaq(this)">
                            What services does Virex Social offer?
                            <div class="faq-toggle"><svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></div>
                        </div>
                        <div class="faq-answer">We offer a full range of digital marketing services, including SEO, social media marketing, PPC, web development, branding, and video editing — all customized to help your brand grow online.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFaq(this)">
                            How do I get started with Virex Social?
                            <div class="faq-toggle"><svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></div>
                        </div>
                        <div class="faq-answer">Just reach out through our contact form, email, or WhatsApp. We'll schedule a free discovery call to understand your goals and suggest the right strategy.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFaq(this)">
                            Do you manage all social media platforms?
                            <div class="faq-toggle"><svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></div>
                        </div>
                        <div class="faq-answer">Yes! We create and manage content for Instagram, Facebook, LinkedIn, TikTok, and more — tailored to your target audience and business goals.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFaq(this)">
                            Do you build custom websites?
                            <div class="faq-toggle"><svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></div>
                        </div>
                        <div class="faq-answer">Definitely. We design responsive, user-friendly websites that reflect your brand and drive results — whether it's a landing page or a full e-commerce site.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFaq(this)">
                            What industries do you work with?
                            <div class="faq-toggle"><svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></div>
                        </div>
                        <div class="faq-answer">We work with businesses across all industries — real estate, tech, fitness, food, healthcare, and more. Our digital marketing services adapt to any niche.</div>
                    </div>
                </div>
            </div>
            <div class="faq-img-side">
                <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?w=600&h=700&fit=crop" alt="FAQ">
            </div>
        </div>
    </div>
</section>

<!-- ════ CONTACT ════ -->
<section class="contact-section">
    <div class="container">
        <div class="contact-inner">
            <div class="contact-info">
                <div class="section-label">Get In Touch</div>
                <h2 class="section-title">Let's Build Something <span class="grad-text">Amazing</span></h2>
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
                <form onsubmit="return false;">
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

<!-- ════ NEWSLETTER ════ -->
<section class="newsletter-section">
    <div class="container">
        <div class="newsletter-inner-wrap">
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

<!-- ════ FOOTER ════ -->
<footer class="footer">
    <div class="container">
        <div class="footer-inner">
            <div>
                <div class="footer-logo">
                    <span class="logo-v-f">Virex </span><span class="logo-rest-f">Social</span>
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
                    <a href="#">Home</a>
                    <a href="#">About Us</a>
                    <a href="#">Careers</a>
                    <a href="#">Blog</a>
                    <a href="#">FAQs</a>
                    <a href="#">Contact Us</a>
                </div>
            </div>
            <div>
                <h4 class="footer-heading">Services</h4>
                <div class="footer-links">
                    <a href="#">Web Design</a>
                    <a href="#">SEO</a>
                    <a href="#">Pay Per Click</a>
                    <a href="#">Social Media</a>
                    <a href="#">Video Editing</a>
                    <a href="#">App Development</a>
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
                <a href="#">Privacy Policy</a>
                <a href="#">Contact Us</a>
            </div>
        </div>
    </div>
</footer>

<button id="back-to-top" onclick="window.scrollTo({top:0,behavior:'smooth'})">↑</button>

<script>
// ── TYPED TEXT ──
const typedEl = document.getElementById('typed-text');
const words = ['for Growth', 'for Success', 'for Results'];
let wordIdx = 0, charIdx = 0, deleting = false;
function typeEffect() {
    const current = words[wordIdx];
    if (!deleting) {
        typedEl.textContent = current.substring(0, charIdx + 1);
        charIdx++;
        if (charIdx === current.length) { deleting = true; setTimeout(typeEffect, 1600); return; }
    } else {
        typedEl.textContent = current.substring(0, charIdx - 1);
        charIdx--;
        if (charIdx === 0) { deleting = false; wordIdx = (wordIdx + 1) % words.length; }
    }
    setTimeout(typeEffect, deleting ? 55 : 95);
}
typeEffect();

// ── COUNTERS ──
function animateCounter(el) {
    const target = parseInt(el.dataset.count);
    const suffix = el.querySelector('sup').outerHTML;
    let start = 0;
    const step = target / (2000 / 16);
    const t = setInterval(() => {
        start = Math.min(start + step, target);
        el.innerHTML = Math.floor(start).toLocaleString() + suffix;
        if (start >= target) clearInterval(t);
    }, 16);
}
const observer = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) { animateCounter(e.target); observer.unobserve(e.target); } });
}, { threshold: 0.5 });
document.querySelectorAll('[data-count]').forEach(c => observer.observe(c));

// ── SCROLLING TRACK ──
(function(){
    const items = ['Website Designing','WordPress Development','Digital Marketing','SEO Services','UI/UX Design','Brand Strategy'];
    const dot = `<span class="scroll-sep" aria-hidden="true"><svg viewBox="0 0 10 10" fill="white"><polygon points="5,0 6.5,3.5 10,3.8 7.5,6.2 8.3,10 5,8.2 1.7,10 2.5,6.2 0,3.8 3.5,3.5"/></svg></span>`;
    let h = '';
    for(let r=0;r<4;r++) items.forEach(s => h += `<span class="scroll-item">${s}</span>${dot}`);
    const t = document.getElementById('scrollTrack');
    t.innerHTML = h + h;
})();

// ── FAQ ──
function toggleFaq(q) {
    const item = q.parentElement;
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item.open').forEach(i => i.classList.remove('open'));
    if (!isOpen) item.classList.add('open');
}

// ── BACK TO TOP ──
const btn = document.getElementById('back-to-top');
window.addEventListener('scroll', () => btn.classList.toggle('visible', window.scrollY > 400));

// ── SCROLL REVEAL ──
const revealObs = new IntersectionObserver(entries => {
    entries.forEach((e, i) => {
        if (e.isIntersecting) {
            setTimeout(() => { e.target.style.opacity='1'; e.target.style.transform='translateY(0)'; }, i * 80);
            revealObs.unobserve(e.target);
        }
    });
}, { threshold: 0.08 });
document.querySelectorAll('.service-card, .process-card, .testimonial-card, .faq-item, .about-feature, .contact-item').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(28px)';
    el.style.transition = 'opacity .6s ease, transform .6s ease';
    revealObs.observe(el);
});
</script>

</body>
</html>