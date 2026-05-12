<?php include 'includes/header.php'; ?>
<style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
        --pink:     #e040fb;
        --purple:   #7c3aed;
        --blue:     #2563eb;
        --teal:     #06b6d4;
        --orange:   #f97316;
        --yellow:   #fbbf24;
        --gold:     #f59e0b;

        --bg:       #fdfcff;
        --bg2:      #f5f3ff;
        --surface:  #ffffff;
        --surface2: #f0ecff;
        --text:     #4b4570;
        --text-strong: #1a0f3c;
        --muted:    #9ca3af;
        --border:   rgba(124,58,237,0.12);

        --grad-main:    linear-gradient(135deg, #e040fb 0%, #7c3aed 28%, #2563eb 55%, #06b6d4 75%, #f97316 90%, #fbbf24 100%);
        --grad-warm:    linear-gradient(135deg, #f97316 0%, #fbbf24 50%, #e040fb 100%);
        --grad-cool:    linear-gradient(135deg, #e040fb 0%, #7c3aed 50%, #2563eb 100%);
        --grad-fire:    linear-gradient(135deg, #fbbf24 0%, #f97316 50%, #e040fb 100%);
        --grad-btn:     linear-gradient(135deg, #e040fb, #7c3aed, #2563eb);
        --grad-btn-warm:linear-gradient(135deg, #f97316, #fbbf24, #e040fb);
        --grad-card:    linear-gradient(135deg, rgba(224,64,251,0.05), rgba(124,58,237,0.04), rgba(37,99,235,0.04), rgba(249,115,22,0.03));
        --grad-soft:    linear-gradient(135deg, #fff8f0 0%, #fdf4ff 35%, #eff6ff 70%, #f0fdf4 100%);
        --grad-header:  linear-gradient(135deg, #0d0520 0%, #130a35 40%, #0a1a40 70%, #0d0a2e 100%);
    }

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

    /* ══ NAVBAR ══ */
    .navbar {
        position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
        background: rgba(13, 5, 32, 0.92);
        backdrop-filter: blur(24px) saturate(180%);
        border-bottom: 1px solid rgba(255,255,255,0.06);
        transition: all 0.4s ease;
    }
    .navbar.scrolled {
        background: rgba(13, 5, 32, 0.97);
        box-shadow: 0 4px 40px rgba(0,0,0,0.4), 0 0 80px rgba(124,58,237,0.08);
    }
    .nav-inner {
        display: flex; align-items: center; justify-content: space-between;
        height: 74px;
    }
    .nav-logo {
        font-family: 'Clash Display', sans-serif; font-weight: 700; font-size: 26px;
        letter-spacing: -0.5px; display: flex; align-items: center; gap: 10px;
    }
    .logo-icon {
        width: 38px; height: 38px;
        background: var(--grad-main);
        border-radius: 10px;
        display: flex; align-items: center; justify-content: center;
        font-size: 18px; font-weight: 900; color: white;
        font-family: 'Clash Display', sans-serif;
        box-shadow: 0 4px 20px rgba(124,58,237,0.4);
        flex-shrink: 0;
    }
    .logo-v { background: var(--grad-main); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    .logo-rest { color: rgba(255,255,255,0.92); }

    .nav-links {
        display: flex; gap: 4px; align-items: center;
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(255,255,255,0.07);
        border-radius: 50px; padding: 5px;
    }
    .nav-links a {
        font-size: 13.5px; font-weight: 600; color: rgba(255,255,255,0.55);
        padding: 8px 18px; border-radius: 50px; transition: all 0.25s;
        white-space: nowrap; font-family: 'Manrope', sans-serif;
    }
    .nav-links a:hover { color: rgba(255,255,255,0.92); background: rgba(255,255,255,0.07); }
    .nav-links a.active { color: white; background: rgba(124,58,237,0.35); }

    .nav-right { display: flex; align-items: center; gap: 12px; }
    .nav-badge {
        display: flex; align-items: center; gap: 6px;
        background: rgba(249,115,22,0.12);
        border: 1px solid rgba(249,115,22,0.3);
        color: #fbbf24; font-size: 11px; font-weight: 700;
        padding: 5px 12px; border-radius: 50px; letter-spacing: 0.5px;
    }
    .nav-badge-dot { width: 6px; height: 6px; border-radius: 50%; background: #f97316; animation: pulse 1.5s infinite; }
    .nav-cta {
        background: var(--grad-btn);
        color: white; font-family: 'Clash Display', sans-serif; font-weight: 600; font-size: 13.5px;
        padding: 11px 26px; border-radius: 50px; transition: all 0.3s;
        box-shadow: 0 4px 20px rgba(124,58,237,0.4);
        white-space: nowrap;
    }
    .nav-cta:hover { transform: translateY(-2px); box-shadow: 0 8px 30px rgba(124,58,237,0.5); }
    .navbar::before {
        content: '';
        position: absolute; top: 0; left: 0; right: 0; height: 2px;
        background: var(--grad-main);
    }

    /* Hamburger */
    .hamburger {
        display: none; flex-direction: column; gap: 5px; cursor: pointer;
        background: none; border: none; padding: 6px;
    }
    .hamburger span {
        display: block; width: 24px; height: 2px;
        background: rgba(255,255,255,0.7); border-radius: 2px; transition: all 0.3s;
    }
    .hamburger.open span:nth-child(1) { transform: rotate(45deg) translate(5px, 5px); }
    .hamburger.open span:nth-child(2) { opacity: 0; }
    .hamburger.open span:nth-child(3) { transform: rotate(-45deg) translate(5px, -5px); }

    .mobile-menu {
        display: none; flex-direction: column; gap: 0;
        background: rgba(13,5,32,0.98); border-top: 1px solid rgba(255,255,255,0.06);
        padding: 16px 20px 20px;
    }
    .mobile-menu.open { display: flex; }
    .mobile-menu a {
        color: rgba(255,255,255,0.65); font-size: 15px; font-weight: 600;
        padding: 12px 0; border-bottom: 1px solid rgba(255,255,255,0.05);
        font-family: 'Manrope', sans-serif; transition: color 0.2s;
    }
    .mobile-menu a:last-child { border-bottom: none; }
    .mobile-menu a:hover { color: white; }

    @keyframes pulse { 0%,100%{opacity:1;transform:scale(1)} 50%{opacity:.6;transform:scale(1.4)} }

    /* ══ HERO ══ */
    .hero {
        min-height: 100vh;
        position: relative; overflow: hidden;
        display: flex; align-items: center;
        padding: 140px 0 90px;
        background: var(--grad-soft);
    }
    .hero::before {
        content: '';
        position: absolute; inset: 0;
        background: radial-gradient(ellipse at 70% 30%, rgba(224,64,251,0.07) 0%, transparent 60%),
                    radial-gradient(ellipse at 20% 80%, rgba(249,115,22,0.06) 0%, transparent 50%),
                    radial-gradient(ellipse at 50% 50%, rgba(37,99,235,0.05) 0%, transparent 70%);
        pointer-events: none;
    }
    .hero-orb { position: absolute; border-radius: 50%; filter: blur(90px); pointer-events: none; }
    .orb-1 { width:550px;height:550px; background:rgba(224,64,251,0.1); top:-150px; right:-80px; animation:orbFloat 8s ease-in-out infinite; }
    .orb-2 { width:420px;height:420px; background:rgba(37,99,235,0.09); bottom:-100px; left:-80px; animation:orbFloat 10s ease-in-out infinite reverse; }
    .orb-3 { width:320px;height:320px; background:rgba(249,115,22,0.08); top:35%; right:18%; animation:orbFloat 7s ease-in-out infinite 2s; }
    .orb-4 { width:200px;height:200px; background:rgba(251,191,36,0.07); top:20%; left:30%; animation:orbFloat 9s ease-in-out infinite 1s; }
    @keyframes orbFloat { 0%,100%{transform:translateY(0) scale(1)} 50%{transform:translateY(-30px) scale(1.05)} }

    .hero-inner { display:grid; grid-template-columns:1fr 1fr; gap:60px; align-items:center; position:relative; z-index:2; }
    .hero-badge {
        display: inline-flex; align-items: center; gap: 10px;
        background: rgba(249,115,22,0.08); border: 1px solid rgba(249,115,22,0.25);
        color: #f97316; font-family: 'Manrope', sans-serif; font-weight: 700;
        font-size: 11px; letter-spacing: 2.5px; text-transform: uppercase;
        padding: 8px 18px; border-radius: 50px; margin-bottom: 28px;
    }
    .badge-dot { width:8px;height:8px;border-radius:50%;background:var(--grad-warm);animation:pulse 1.5s infinite; }

    .hero-title {
        font-family: 'Clash Display', sans-serif;
        font-size: clamp(36px, 5.5vw, 64px);
        line-height: 1.06; margin-bottom: 22px;
        letter-spacing: -1.5px; color: var(--text-strong);
    }
    .typed-wrapper { display: block; min-height: 1.12em; }
    .hero-desc { font-size:17px; line-height:1.85; color:#6b7280; max-width:470px; margin-bottom:42px; font-weight:400; }
    .hero-actions { display:flex; gap:14px; align-items:center; flex-wrap:wrap; }

    .btn-grad {
        display: inline-flex; align-items: center; gap: 10px;
        background: var(--grad-btn); color: #fff;
        font-family: 'Clash Display', sans-serif; font-weight: 600; font-size: 14.5px;
        padding: 16px 34px; border-radius: 50px;
        transition: all 0.3s; box-shadow: 0 4px 25px rgba(124,58,237,.35);
        position: relative; overflow: hidden;
    }
    .btn-grad::after { content:''; position:absolute; inset:0; background:linear-gradient(135deg, rgba(255,255,255,0.15), transparent); opacity:0; transition:opacity 0.3s; }
    .btn-grad:hover { transform:translateY(-3px); box-shadow:0 10px 40px rgba(124,58,237,.5); }
    .btn-grad:hover::after { opacity:1; }
    .btn-grad svg { width:18px;height:18px;stroke:white;stroke-width:2.5;flex-shrink:0; }

    .btn-warm {
        display: inline-flex; align-items: center; gap: 10px;
        background: var(--grad-btn-warm); color: #fff;
        font-family: 'Clash Display', sans-serif; font-weight: 600; font-size: 14.5px;
        padding: 16px 34px; border-radius: 50px;
        transition: all 0.3s; box-shadow: 0 4px 25px rgba(249,115,22,.35);
    }
    .btn-warm:hover { transform:translateY(-3px); box-shadow:0 10px 40px rgba(249,115,22,.5); }
    .btn-warm svg { width:18px;height:18px;stroke:white;stroke-width:2.5;flex-shrink:0; }

    .btn-ghost {
        display: inline-flex; align-items: center; gap: 10px;
        background: white; border: 1.5px solid rgba(124,58,237,0.2);
        color: var(--purple); font-family: 'Clash Display', sans-serif; font-weight: 600; font-size: 14.5px;
        padding: 15px 30px; border-radius: 50px; transition: all 0.3s;
    }
    .btn-ghost:hover { background:rgba(124,58,237,0.05); border-color:rgba(124,58,237,0.45); transform:translateY(-2px); }

    .hero-stats {
        display: flex; gap: 44px; margin-top: 54px;
        padding-top: 36px; border-top: 1px solid rgba(124,58,237,0.12); flex-wrap: wrap;
    }
    .stat-number { font-family:'Clash Display',sans-serif; font-weight:700; font-size:44px; line-height:1; }
    .stat-number sup { font-size:22px; }
    .stat-label { font-size:12px; color:#9ca3af; margin-top:5px; font-weight:500; letter-spacing:0.3px; }

    .hero-right { position:relative; height:590px; }
    .hero-img-main { position:absolute; top:0; left:50%; transform:translateX(-50%); width:255px; height:340px; border-radius:28px; overflow:hidden; box-shadow:0 24px 70px rgba(124,58,237,.22); z-index:3; border:2px solid rgba(255,255,255,0.7); }
    .hero-img-left { position:absolute; left:0; top:65px; width:210px; height:275px; border-radius:22px; overflow:hidden; box-shadow:0 16px 55px rgba(37,99,235,.16); z-index:2; border:2px solid rgba(255,255,255,0.7); }
    .hero-img-right { position:absolute; right:0; top:125px; width:200px; height:255px; border-radius:22px; overflow:hidden; box-shadow:0 16px 55px rgba(249,115,22,.16); z-index:2; border:2px solid rgba(255,255,255,0.7); }
    .hero-img-main img, .hero-img-left img, .hero-img-right img { width:100%;height:100%;object-fit:cover;display:block; }

    .hero-ring { position:absolute; top:-45px; left:50%; transform:translateX(-50%); width:375px; height:375px; border-radius:50%; background:conic-gradient(from 180deg,#e040fb,#7c3aed,#2563eb,#06b6d4,#f97316,#fbbf24,#e040fb); padding:2px; z-index:1; animation:rotateSlow 14s linear infinite; opacity:0.55; }
    .hero-ring-inner { width:100%;height:100%;border-radius:50%;background:var(--grad-soft); }
    @keyframes rotateSlow { from{transform:translateX(-50%) rotate(0deg)} to{transform:translateX(-50%) rotate(360deg)} }

    .float-el { position:absolute; z-index:10; animation:floatY 4s ease-in-out infinite; }
    @keyframes floatY { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-14px)} }
    .float-rocket { top:6px; right:14px; animation-delay:.4s; }
    .float-lamp   { left:6px; bottom:100px; animation-delay:1s; }

    .float-card {
        position: absolute; bottom: 24px; left: 50%; transform: translateX(-50%);
        background: white; border: 1.5px solid rgba(124,58,237,0.14);
        border-radius: 20px; padding: 14px 22px;
        box-shadow: 0 10px 45px rgba(124,58,237,.15);
        display: flex; align-items: center; gap: 14px; white-space: nowrap;
        animation: floatY 3s ease-in-out infinite .3s; z-index: 10;
    }
    .float-card-icon { width:46px;height:46px;background:var(--grad-main);border-radius:13px;display:flex;align-items:center;justify-content:center; }
    .float-card-icon svg { width:22px;height:22px;stroke:white;stroke-width:2; }
    .float-card-text strong { display:block;font-family:'Clash Display',sans-serif;font-weight:700;font-size:18px;color:var(--text-strong); }
    .float-card-text span { font-size:12px;color:#9ca3af; }

    .float-tag {
        position: absolute; top: 30px; left: 10px; z-index: 10;
        background: var(--grad-fire); color: white;
        font-family: 'Clash Display', sans-serif; font-weight: 700; font-size: 11px;
        padding: 7px 14px; border-radius: 50px; white-space: nowrap;
        box-shadow: 0 6px 20px rgba(249,115,22,0.4);
        animation: floatY 5s ease-in-out infinite 0.8s;
        display: flex; align-items: center; gap: 6px;
    }

    /* ══ BRANDS ══ */
    .brands-section { padding:56px 0; background:#ffffff; border-top:1px solid rgba(124,58,237,0.07); border-bottom:1px solid rgba(124,58,237,0.07); position:relative; overflow:hidden; }
    .brands-section::before { content:''; position:absolute; inset:0; background:radial-gradient(ellipse at 50% 50%, rgba(124,58,237,0.03) 0%, transparent 70%); pointer-events:none; }
    .brands-label { text-align:center; font-family:'Manrope',sans-serif; font-size:11px; font-weight:700; letter-spacing:3px; text-transform:uppercase; color:#a78bfa; margin-bottom:40px; position:relative; }
    .brands-label::before, .brands-label::after { content:''; display:inline-block; width:40px; height:1px; background:linear-gradient(90deg,transparent,#a78bfa); vertical-align:middle; margin:0 14px; }
    .brands-label::after { background:linear-gradient(90deg,#a78bfa,transparent); }
    .brands-grid { display:grid; grid-template-columns:repeat(5,1fr); gap:16px; align-items:stretch; }
    .brand-card { display:flex; flex-direction:column; align-items:center; justify-content:center; gap:10px; padding:28px 20px; background:#fafafa; border:1.5px solid rgba(124,58,237,0.08); border-radius:20px; transition:all 0.35s cubic-bezier(.4,0,.2,1); cursor:default; position:relative; overflow:hidden; min-height:120px; }
    .brand-card::before { content:''; position:absolute; inset:0; border-radius:20px; background:var(--grad-main); opacity:0; transition:opacity 0.35s; }
    .brand-card:hover { transform:translateY(-6px); box-shadow:0 16px 40px rgba(124,58,237,0.12); border-color:rgba(124,58,237,0.3); }
    .brand-card:hover::before { opacity:0.04; }
    .brand-icon { width:44px;height:44px;border-radius:12px;background:var(--grad-main);display:flex;align-items:center;justify-content:center;font-family:'Clash Display',sans-serif;font-weight:700;font-size:17px;color:white;flex-shrink:0;position:relative;z-index:1;transition:transform 0.35s; }
    .brand-card:nth-child(2) .brand-icon { background:var(--grad-warm); }
    .brand-card:nth-child(3) .brand-icon { background:linear-gradient(135deg,#06b6d4,#2563eb); }
    .brand-card:nth-child(4) .brand-icon { background:linear-gradient(135deg,#10b981,#06b6d4); }
    .brand-card:nth-child(5) .brand-icon { background:linear-gradient(135deg,#f97316,#fbbf24); }
    .brand-card:hover .brand-icon { transform:rotate(-8deg) scale(1.1); }
    .brand-name { font-family:'Clash Display',sans-serif; font-weight:600; font-size:14px; color:var(--text-strong); text-align:center; line-height:1.3; position:relative; z-index:1; transition:color 0.3s; }
    .brand-card:hover .brand-name { color:var(--purple); }
    .brand-tag { font-size:10px; font-weight:600; letter-spacing:0.5px; color:#9ca3af; position:relative; z-index:1; text-transform:uppercase; }

    /* ══ SECTION COMMONS ══ */
    .section-label { display:inline-flex; align-items:center; gap:9px; font-family:'Manrope',sans-serif; font-weight:700; font-size:11px; letter-spacing:3px; text-transform:uppercase; margin-bottom:14px; color:var(--purple); }
    .section-label .sl-dot { display:flex; gap:3px; }
    .section-label .sl-dot span { width:5px;height:5px;border-radius:50%;background:currentColor;animation:dotBlink 1.5s infinite; }
    .section-label .sl-dot span:nth-child(2) { animation-delay:0.2s; }
    .section-label .sl-dot span:nth-child(3) { animation-delay:0.4s; }
    @keyframes dotBlink { 0%,100%{opacity:0.3} 50%{opacity:1} }
    .section-title { font-family:'Clash Display',sans-serif; font-size:clamp(28px,4.2vw,50px); line-height:1.12; margin-bottom:18px; letter-spacing:-0.5px; color:var(--text-strong); }
    .section-desc { font-size:17px; line-height:1.85; color:#6b7280; max-width:520px; margin-bottom:60px; }

    /* ══ SERVICES ══ */
    .services-section { padding:120px 0; position:relative; z-index:2; background:white; }
    .services-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:22px; }
    .service-card { background:#fafafa; border:1.5px solid rgba(124,58,237,0.09); border-radius:28px; padding:38px 32px; transition:all 0.45s cubic-bezier(.4,0,.2,1); position:relative; overflow:hidden; cursor:default; }
    .service-card::before { content:''; position:absolute; inset:0; border-radius:28px; background:var(--grad-card); opacity:0; transition:opacity .4s; }
    .service-card::after { content:''; position:absolute; bottom:-60px; right:-60px; width:160px; height:160px; border-radius:50%; background:var(--grad-warm); opacity:0.04; transition:all 0.5s; transform:scale(0.5); }
    .service-card:hover { transform:translateY(-10px); box-shadow:0 24px 60px rgba(124,58,237,.12); border-color:rgba(124,58,237,0.28); }
    .service-card:hover::before { opacity:1; }
    .service-card:hover::after { opacity:0.08; transform:scale(1); }
    .service-card > * { position:relative; z-index:1; }
    .service-icon { width:62px;height:62px;background:rgba(124,58,237,0.07);border:1.5px solid rgba(124,58,237,0.14);border-radius:18px;display:flex;align-items:center;justify-content:center;margin-bottom:24px;transition:all 0.4s; }
    .service-icon svg { width:28px;height:28px;stroke:var(--purple);stroke-width:1.7;fill:none; }
    .service-card:hover .service-icon { background:var(--grad-main);border-color:transparent;transform:rotate(-6deg) scale(1.08); }
    .service-card:hover .service-icon svg { stroke:white; }
    .service-title { font-family:'Clash Display',sans-serif;font-size:20px;margin-bottom:12px;color:var(--text-strong); }
    .service-desc { font-size:14px;line-height:1.8;color:#6b7280; }
    .service-arrow { display:inline-flex;align-items:center;gap:6px;font-size:12px;font-weight:700;color:var(--purple);margin-top:18px;opacity:0;transform:translateX(-8px);transition:all 0.3s;font-family:'Manrope',sans-serif; }
    .service-arrow svg { width:14px;height:14px;stroke:currentColor;stroke-width:2.5; }
    .service-card:hover .service-arrow { opacity:1;transform:translateX(0); }
    .services-cta { text-align:center;margin-top:56px; }
    .btn-outline { display:inline-flex;align-items:center;gap:8px;border:1.5px solid rgba(124,58,237,0.25);background:white;color:var(--purple);font-family:'Clash Display',sans-serif;font-weight:600;font-size:13px;padding:14px 34px;border-radius:50px;transition:all .3s;letter-spacing:.5px;text-transform:uppercase; }
    .btn-outline:hover { border-color:var(--purple);background:rgba(124,58,237,0.06);box-shadow:0 4px 20px rgba(124,58,237,.12);transform:translateY(-2px); }

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

    /* ══ PROCESS ══ */
    .process-section { padding:120px 0 170px;position:relative;overflow:hidden;z-index:2;background:white; }
    .orb-bg { position:absolute;border-radius:50%;filter:blur(100px);pointer-events:none; }
    .orb-bg-1 { width:400px;height:400px;background:rgba(37,99,235,.05);top:-100px;right:-50px; }
    .orb-bg-2 { width:300px;height:300px;background:rgba(249,115,22,.04);bottom:0;left:-50px; }
    .process-grid { display:grid;grid-template-columns:repeat(4,1fr);gap:28px;margin-top:64px;position:relative; }
    .process-connector { position:absolute;top:52px;left:calc(12.5% + 42px);right:calc(12.5% + 42px);height:1px;z-index:0;background:repeating-linear-gradient(90deg,rgba(124,58,237,.2) 0,rgba(124,58,237,.2) 8px,transparent 8px,transparent 18px); }
    .process-card { text-align:center;position:relative;z-index:1; }
    .process-num { position:absolute;top:-12px;right:8px;font-family:'Clash Display',sans-serif;font-weight:700;font-size:68px;line-height:1;pointer-events:none;background:var(--grad-main);-webkit-background-clip:text;-webkit-text-fill-color:transparent;opacity:.06; }
    .process-icon-wrap { width:86px;height:86px;background:rgba(124,58,237,0.06);border:1.5px solid rgba(124,58,237,0.14);border-radius:24px;display:flex;align-items:center;justify-content:center;margin:0 auto 22px;transition:all .35s; }
    .process-icon-wrap svg { width:34px;height:34px;stroke:var(--purple);stroke-width:1.6;fill:none; }
    .process-card:hover .process-icon-wrap { background:var(--grad-main);border-color:transparent;box-shadow:0 12px 40px rgba(124,58,237,.3);transform:translateY(-4px); }
    .process-card:hover .process-icon-wrap svg { stroke:white; }
    .process-title { font-family:'Clash Display',sans-serif;font-size:17px;color:var(--text-strong);margin-bottom:10px; }
    .process-desc { font-size:14px;color:#6b7280;line-height:1.8; }

    /* ══ ABOUT ══ */
    .about-section { padding:120px 0;position:relative;z-index:2;background:linear-gradient(135deg,#fdf8ff 0%,#fff8f0 50%,#f0f9ff 100%); }
    .about-inner { display:grid;grid-template-columns:1fr 1fr;gap:90px;align-items:center; }
    .about-img-wrap { position:relative; }
    .about-img-main { width:100%;border-radius:28px;overflow:hidden;box-shadow:0 24px 70px rgba(124,58,237,.16);border:2px solid rgba(255,255,255,0.8); }
    .about-img-main img { width:100%;height:500px;object-fit:cover;display:block; }
    .about-img-badge { position:absolute;bottom:-24px;right:-24px;background:var(--grad-fire);color:white;font-family:'Clash Display',sans-serif;font-weight:700;padding:26px 30px;border-radius:24px;text-align:center;box-shadow:0 16px 45px rgba(249,115,22,.4); }
    .about-img-badge .num { font-size:42px;line-height:1; }
    .about-img-badge .lbl { font-size:11.5px;font-weight:600;opacity:.9;margin-top:4px;letter-spacing:0.3px; }
    .about-features { display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:42px; }
    .about-feature { display:flex;align-items:flex-start;gap:14px;background:white;border:1.5px solid rgba(124,58,237,0.1);border-radius:18px;padding:20px;transition:all .3s; }
    .about-feature:hover { border-color:rgba(124,58,237,0.28);transform:translateY(-3px);box-shadow:0 10px 28px rgba(124,58,237,.1); }
    .feature-icon { width:46px;height:46px;background:var(--grad-main);border-radius:13px;display:flex;align-items:center;justify-content:center;flex-shrink:0; }
    .feature-icon.warm { background:var(--grad-warm); }
    .feature-icon svg { width:22px;height:22px;stroke:white;stroke-width:1.8;fill:none; }
    .feature-text strong { display:block;font-family:'Clash Display',sans-serif;font-weight:600;font-size:15px;color:var(--text-strong);margin-bottom:3px; }
    .feature-text span { font-size:13px;color:#9ca3af; }

    /* ══ TESTIMONIALS ══ */
    .testimonials-section { padding:120px 0;position:relative;z-index:2;background:white; }
    .testimonials-header { text-align:center;max-width:620px;margin:0 auto 64px; }
    .testimonials-grid { display:grid;grid-template-columns:repeat(3,1fr);gap:22px; }
    .testimonial-card { background:#fafafa;border:1.5px solid rgba(124,58,237,0.09);border-radius:28px;padding:38px;transition:all .35s;position:relative;overflow:hidden; }
    .testimonial-card::before { content:'';position:absolute;top:0;left:0;right:0;height:3px;background:var(--grad-main);opacity:0;transition:opacity .35s; }
    .testimonial-card::after { content:'"';position:absolute;top:20px;right:26px;font-size:100px;font-family:'Clash Display',sans-serif;font-weight:700;background:var(--grad-main);-webkit-background-clip:text;-webkit-text-fill-color:transparent;opacity:0.06;line-height:1; }
    .testimonial-card:hover { transform:translateY(-8px);box-shadow:0 24px 60px rgba(124,58,237,.1);border-color:rgba(124,58,237,0.25); }
    .testimonial-card:hover::before { opacity:1; }
    .testimonial-stars { display:flex;gap:3px;margin-bottom:18px; }
    .testimonial-stars svg { width:16px;height:16px;fill:var(--orange);stroke:none; }
    .testimonial-text { font-size:15px;line-height:1.9;color:#6b7280;font-style:italic;margin-bottom:28px;position:relative;z-index:1; }
    .testimonial-author { display:flex;align-items:center;gap:14px; }
    .author-avatar { width:50px;height:50px;border-radius:50%;background:var(--grad-main);display:flex;align-items:center;justify-content:center;font-family:'Clash Display',sans-serif;font-weight:700;font-size:16px;color:white;flex-shrink:0; }
    .author-info strong { display:block;font-family:'Clash Display',sans-serif;font-weight:600;font-size:15px;color:var(--text-strong); }
    .author-info span { font-size:13px;color:#9ca3af; }

    /* ══ CHAT WIDGET ══ */
    .floating-chat-widget { position:fixed;bottom:32px;right:32px;z-index:9999;display:flex;flex-direction:column;align-items:flex-end;gap:12px; }
    .chat-btn { position:relative;display:flex;align-items:center;gap:12px;padding:12px 18px 12px 12px;border-radius:50px;color:white;font-family:'Clash Display',sans-serif;font-weight:700;font-size:13px;cursor:pointer;border:none;outline:none;box-shadow:0 6px 25px rgba(0,0,0,0.18);transition:all 0.35s cubic-bezier(0.34,1.56,0.64,1);transform:translateX(80px) scale(0.8);opacity:0;pointer-events:none;white-space:nowrap;text-decoration:none; }
    .chat-btn.visible { transform:translateX(0) scale(1);opacity:1;pointer-events:all; }
    .chat-btn:hover { transform:translateX(-4px) scale(1.04); }
    .chat-btn-icon { width:40px;height:40px;border-radius:50%;background:rgba(255,255,255,0.22);display:flex;align-items:center;justify-content:center;flex-shrink:0; }
    .chat-btn-icon svg { width:22px;height:22px; }
    .chat-btn-text .chat-label { display:block;font-size:11px;opacity:0.7;margin-bottom:1px;font-weight:500; }
    .chat-btn-text .chat-name { font-size:14px;font-weight:800; }
    .chat-btn.whatsapp { background:linear-gradient(135deg,#25D366,#128C7E); }
    .chat-btn.whatsapp:hover { box-shadow:0 10px 35px rgba(37,211,102,0.45); }
    .chat-btn.messenger { background:linear-gradient(135deg,#0099FF,#A033FF); }
    .chat-btn.messenger:hover { box-shadow:0 10px 35px rgba(0,153,255,0.45); }
    .chat-btn-badge { position:absolute;top:-4px;left:-4px;width:18px;height:18px;border-radius:50%;background:var(--grad-fire);color:white;font-size:10px;font-weight:800;display:flex;align-items:center;justify-content:center;box-shadow:0 2px 8px rgba(249,115,22,0.5);animation:badgePop 2s ease-in-out infinite; }
    @keyframes badgePop { 0%,100%{transform:scale(1)} 50%{transform:scale(1.2)} }
    .chat-toggle-btn { width:62px;height:62px;border-radius:50%;background:var(--grad-main);border:none;cursor:pointer;display:flex;align-items:center;justify-content:center;box-shadow:0 6px 30px rgba(124,58,237,0.45);transition:all 0.35s cubic-bezier(0.34,1.56,0.64,1);position:relative;z-index:1;animation:ctaBounce 3s ease-in-out infinite 4s; }
    .chat-toggle-btn:hover { transform:scale(1.12);box-shadow:0 10px 40px rgba(124,58,237,0.55),0 0 0 8px rgba(124,58,237,0.12); }
    @keyframes ctaBounce { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-6px)} }
    .chat-toggle-icon { transition:all 0.4s; }
    .chat-toggle-icon.chat-icon { display:flex; }
    .chat-toggle-icon.close-icon { display:none; }
    .chat-toggle-btn.open .chat-toggle-icon.chat-icon { display:none; }
    .chat-toggle-btn.open .chat-toggle-icon.close-icon { display:flex; }
    .chat-toggle-btn.open { animation:none; }
    .chat-toggle-btn::before, .chat-toggle-btn::after { content:'';position:absolute;inset:0;border-radius:50%;background:var(--grad-main);opacity:0;animation:rippleChat 3s ease-out infinite; }
    .chat-toggle-btn::after { animation-delay:1.2s; }
    @keyframes rippleChat { 0%{opacity:0.4;transform:scale(1)} 100%{opacity:0;transform:scale(2.2)} }
    .chat-popup { position:absolute;bottom:78px;right:0;background:white;border-radius:22px;box-shadow:0 20px 60px rgba(0,0,0,0.14),0 0 0 1px rgba(0,0,0,0.04);width:310px;overflow:hidden;transform:scale(0.85) translateY(20px);opacity:0;pointer-events:none;transform-origin:bottom right;transition:all 0.4s cubic-bezier(0.34,1.56,0.64,1); }
    .chat-popup.visible { transform:scale(1) translateY(0);opacity:1;pointer-events:all; }
    .chat-popup-header { background:var(--grad-main);padding:22px 20px 28px;position:relative;overflow:hidden; }
    .chat-popup-avatar { width:52px;height:52px;border-radius:50%;background:rgba(255,255,255,0.2);border:2.5px solid rgba(255,255,255,0.4);display:flex;align-items:center;justify-content:center;margin-bottom:14px;position:relative;z-index:1;font-family:'Clash Display',sans-serif;font-weight:700;font-size:20px;color:white; }
    .popup-online { position:absolute;bottom:2px;right:2px;width:13px;height:13px;border-radius:50%;background:#25D366;border:2px solid white; }
    .chat-popup-title { font-family:'Clash Display',sans-serif;font-weight:700;font-size:17px;color:white;margin-bottom:4px;position:relative;z-index:1; }
    .chat-popup-status { font-size:12px;color:rgba(255,255,255,0.72);position:relative;z-index:1; }
    .chat-popup-body { padding:20px; }
    .chat-popup-msg { background:#f3f4f6;border-radius:16px 16px 16px 4px;padding:13px 16px;font-size:14px;color:#374151;line-height:1.6;margin-bottom:16px; }
    .chat-popup-channels { display:flex;flex-direction:column;gap:10px; }
    .chat-channel-btn { display:flex;align-items:center;gap:14px;padding:13px 16px;border-radius:14px;border:none;cursor:pointer;transition:all 0.25s;text-align:left;text-decoration:none;width:100%; }
    .chat-channel-btn.wa { background:#f0fdf4; }
    .chat-channel-btn.wa:hover { background:#dcfce7;transform:translateX(4px); }
    .chat-channel-btn.ms { background:#f0f4ff; }
    .chat-channel-btn.ms:hover { background:#e0e8ff;transform:translateX(4px); }
    .channel-icon { width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0; }
    .channel-icon.wa { background:linear-gradient(135deg,#25D366,#128C7E); }
    .channel-icon.ms { background:linear-gradient(135deg,#0099FF,#A033FF); }
    .channel-icon svg { width:20px;height:20px; }
    .channel-text .ch-label { display:block;font-size:11px;color:#9ca3af;font-weight:600; }
    .channel-text .ch-name { font-family:'Clash Display',sans-serif;font-weight:700;font-size:15px;color:#1f2937; }
    .channel-arrow { margin-left:auto; }
    .channel-arrow svg { width:16px;height:16px;stroke:#9ca3af;stroke-width:2.5; }

    /* ══ BACK TO TOP ══ */
    #back-to-top { position:fixed;bottom:40px;left:40px;width:52px;height:52px;background:var(--grad-main);color:white;border:none;border-radius:15px;cursor:pointer;display:none;align-items:center;justify-content:center;box-shadow:0 4px 25px rgba(124,58,237,.4);z-index:999;transition:all .3s;font-size:20px; }
    #back-to-top.visible { display:flex; }
    #back-to-top:hover { transform:translateY(-4px);box-shadow:0 8px 40px rgba(124,58,237,.55); }

    /* ══ RESPONSIVE ══ */
    @media(max-width:1100px){ .brands-grid{grid-template-columns:repeat(3,1fr);} }
    @media(max-width:992px){
        .hero-inner,.about-inner { grid-template-columns:1fr; }
        .hero-right { height:400px; }
        .services-grid,.process-grid { grid-template-columns:repeat(2,1fr); }
        .testimonials-grid { grid-template-columns:1fr; }
        .newsletter-inner { flex-direction:column;text-align:center; }
        .process-connector { display:none; }
        .nav-links { display:none; }
        .hamburger { display:flex; }
        .nav-badge { display:none; }
        .brands-grid { grid-template-columns:repeat(3,1fr); }
    }
    @media(max-width:768px){
        .brands-grid { grid-template-columns:repeat(2,1fr); }
        .about-img-badge { right:0;bottom:-20px; }
    }
    @media(max-width:600px){
        .services-grid,.process-grid { grid-template-columns:1fr; }
        .hero-right { display:none; }
        .hero-stats { flex-wrap:wrap;gap:20px; }
        .floating-chat-widget { bottom:20px;right:20px; }
        .chat-popup { width:280px; }
        .brands-grid { grid-template-columns:1fr 1fr; }
        .brand-card { padding:20px 14px;min-height:100px; }
        #back-to-top { bottom:20px;left:20px; }
        .testimonials-grid { grid-template-columns:1fr; }
        .about-features { grid-template-columns:1fr; }
        .marquee-fade-left, .marquee-fade-right { width:60px; }
    }
    @media(max-width:420px){
        .brands-grid { grid-template-columns:1fr; }
        .hero-actions { flex-direction:column;align-items:flex-start; }
    }
</style>

<!-- ══ HERO ══ -->
<section class="hero">
    <div class="hero-orb orb-1"></div>
    <div class="hero-orb orb-2"></div>
    <div class="hero-orb orb-3"></div>
    <div class="hero-orb orb-4"></div>
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
                    <a href="contact-us.php" class="btn-grad">
                        Contact Today
                        <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    <a href="services.php" class="btn-ghost">Our Services</a>
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
                        <div class="stat-number grad-text-warm" data-count="1200">0<sup>+</sup></div>
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
                <div class="float-tag">🔥 #1 Agency 2026</div>
                <div class="float-el float-rocket">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none">
                        <path d="M55 8 Q60 32 40 50" stroke="#7c3aed" stroke-width="1.5" stroke-dasharray="4 4" opacity="0.4"/>
                        <path d="M32 10 C32 10 44 14 46 28 L36 38 L26 38 L16 28 C18 14 32 10 32 10Z" stroke="rgba(224,64,251,.5)" stroke-width="1.8" fill="rgba(224,64,251,0.08)"/>
                        <circle cx="32" cy="26" r="5" stroke="#e040fb" stroke-width="1.8" fill="rgba(224,64,251,0.1)"/>
                        <path d="M16 28 L10 36 L20 34" stroke="rgba(124,58,237,.4)" stroke-width="1.8" fill="none"/>
                        <path d="M46 28 L52 36 L42 34" stroke="rgba(124,58,237,.4)" stroke-width="1.8" fill="none"/>
                        <path d="M26 38 Q29 48 32 44 Q35 48 38 38" stroke="#f97316" stroke-width="2" fill="none"/>
                    </svg>
                </div>
                <div class="float-el float-lamp">
                    <svg width="70" height="90" viewBox="0 0 70 90" fill="none">
                        <line x1="35" y1="4" x2="35" y2="1" stroke="rgba(251,191,36,.5)" stroke-width="1.8" stroke-linecap="round"/>
                        <line x1="48" y1="8" x2="50" y2="6" stroke="rgba(249,115,22,.4)" stroke-width="1.8" stroke-linecap="round"/>
                        <line x1="22" y1="8" x2="20" y2="6" stroke="rgba(249,115,22,.4)" stroke-width="1.8" stroke-linecap="round"/>
                        <path d="M22 30 C22 20 28 14 35 14 C42 14 48 20 48 30 C48 36 45 40 42 43 L42 50 L28 50 L28 43 C25 40 22 36 22 30Z" stroke="rgba(251,191,36,.4)" stroke-width="1.8" fill="rgba(251,191,36,0.08)"/>
                        <path d="M30 44 L30 38 Q33 35 35 38 Q37 41 35 38 Q37 35 40 38 L40 44" stroke="#fbbf24" stroke-width="1.5" fill="none"/>
                        <line x1="28" y1="51" x2="42" y2="51" stroke="rgba(249,115,22,.35)" stroke-width="1.8" stroke-linecap="round"/>
                        <line x1="29" y1="55" x2="41" y2="55" stroke="rgba(249,115,22,.35)" stroke-width="1.8" stroke-linecap="round"/>
                        <line x1="31" y1="59" x2="39" y2="59" stroke="rgba(249,115,22,.35)" stroke-width="1.8" stroke-linecap="round"/>
                    </svg>
                </div>
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

<!-- ══ BRANDS ══ -->
<section class="brands-section">
    <div class="container">
        <div class="brands-label">Trusted by Leading Brands</div>
        <div class="brands-grid">
            <div class="brand-card">
                <div class="brand-icon">E</div>
                <div class="brand-name">Endurance Blends</div>
                <div class="brand-tag">Supplements</div>
            </div>
            <div class="brand-card">
                <div class="brand-icon">✦</div>
                <div class="brand-name">XLNC</div>
                <div class="brand-tag">Excellence Brand</div>
            </div>
            <div class="brand-card">
                <div class="brand-icon">💍</div>
                <div class="brand-name">Personal Weddings</div>
                <div class="brand-tag">Events & Weddings</div>
            </div>
            <div class="brand-card">
                <div class="brand-icon">🎨</div>
                <div class="brand-name">King Murals</div>
                <div class="brand-tag">Art & Design</div>
            </div>
            <div class="brand-card">
                <div class="brand-icon">C</div>
                <div class="brand-name">Curby's</div>
                <div class="brand-tag">Lifestyle Brand</div>
            </div>
        </div>
    </div>
</section>

<!-- ══ SERVICES ══ -->
<section class="services-section">
    <div class="container">
        <div class="section-label" style="color:#7c3aed">
            <span class="sl-dot"><span></span><span></span><span></span></span>
            Our Services
        </div>
        <h2 class="section-title">Everything You Need to <span class="grad-text">Dominate Online</span></h2>
        <p class="section-desc">From SEO to social media, we provide end-to-end digital marketing solutions that drive real, measurable results.</p>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon"><svg viewBox="0 0 24 24" fill="none"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg></div>
                <h3 class="service-title">Meta Ads</h3>
                <p class="service-desc">Boost your online presence with our Meta Ads services. We drive targeted traffic, maximize your ROI, and optimize your online reputation.</p>
                <div class="service-arrow">Learn more <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
            </div>
            <div class="service-card">
                <div class="service-icon"><svg viewBox="0 0 24 24" fill="none"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/><polyline points="7 8 10 11 7 14"/><line x1="13" y1="14" x2="17" y2="14"/></svg></div>
                <h3 class="service-title">Website Development</h3>
                <p class="service-desc">Custom, responsive websites that look great and work seamlessly. We handle development, maintenance, and speed optimization.</p>
                <div class="service-arrow">Learn more <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
            </div>
            <div class="service-card">
                <div class="service-icon"><svg viewBox="0 0 24 24" fill="none"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="8" y1="11" x2="14" y2="11"/><line x1="11" y1="8" x2="11" y2="14"/></svg></div>
                <h3 class="service-title">SEO Services</h3>
                <p class="service-desc">Boost your Google ranking with keyword-optimized, engaging content that drives sustained organic traffic and enhances site performance.</p>
                <div class="service-arrow">Learn more <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
            </div>
            <div class="service-card">
                <div class="service-icon"><svg viewBox="0 0 24 24" fill="none"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
                <h3 class="service-title">Snapchat Management</h3>
                <p class="service-desc">We transform your Snapchat Stories into a high-earning asset with custom content creation and strategic audience growth management.</p>
                <div class="service-arrow">Learn more <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
            </div>
            <div class="service-card">
                <div class="service-icon"><svg viewBox="0 0 24 24" fill="none"><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2"/></svg></div>
                <h3 class="service-title">Video Editing</h3>
                <p class="service-desc">From reels to brand promos, our editing team tells your story with style — making sure your videos stand out and drive engagement.</p>
                <div class="service-arrow">Learn more <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
            </div>
            <div class="service-card">
                <div class="service-icon"><svg viewBox="0 0 24 24" fill="none"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg></div>
                <h3 class="service-title">Meta Content Creation</h3>
                <p class="service-desc">We craft engaging and creative meta content that strengthens your brand presence, boosts audience engagement, and drives better digital visibility.</p>
                <div class="service-arrow">Learn more <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
            </div>
        </div>
        <div class="services-cta">
            <a href="services.php" class="btn-outline">View More Services</a>
        </div>
    </div>
</section>

<!-- ══ SCROLLING MARQUEE ══ -->
<section class="scrolling-section">
    <div class="marquee-orb m-orb-1"></div>
    <div class="marquee-orb m-orb-2"></div>
    <div class="marquee-fade-left"></div>
    <div class="marquee-fade-right"></div>
    <div class="scrolling-tracks-wrap">
        <div class="scrolling-track-1" id="scrollTrack1"></div>
        <div class="scrolling-track-2" id="scrollTrack2"></div>
    </div>
</section>

<!-- ══ PROCESS ══ -->
<section class="process-section">
    <div class="orb-bg orb-bg-1"></div>
    <div class="orb-bg orb-bg-2"></div>
    <div class="container">
        <div class="section-label" style="color:#06b6d4">
            <span class="sl-dot"><span></span><span></span><span></span></span>
            Work Process
        </div>
        <h2 class="section-title">How We Streamline<br><span class="grad-text">Our Design Workflow</span></h2>
        <div class="process-grid">
            <div class="process-connector"></div>
            <div class="process-card">
                <div class="process-num">01</div>
                <div class="process-icon-wrap"><svg viewBox="0 0 24 24" fill="none"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><line x1="10" y1="9" x2="8" y2="9"/></svg></div>
                <h3 class="process-title">Preparation of Contract</h3>
                <p class="process-desc">We understand your goals and expectations, then set a clear roadmap for a confident start.</p>
            </div>
            <div class="process-card">
                <div class="process-num">02</div>
                <div class="process-icon-wrap"><svg viewBox="0 0 24 24" fill="none"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/><line x1="2" y1="20" x2="22" y2="20"/></svg></div>
                <h3 class="process-title">Data Analysis</h3>
                <p class="process-desc">We analyze your audience, competitors, and market trends to shape strategies backed by real data.</p>
            </div>
            <div class="process-card">
                <div class="process-num">03</div>
                <div class="process-icon-wrap"><svg viewBox="0 0 24 24" fill="none"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
                <h3 class="process-title">Progress Report</h3>
                <p class="process-desc">Stay informed with regular updates and performance metrics — growth thrives on collaboration.</p>
            </div>
            <div class="process-card">
                <div class="process-num">04</div>
                <div class="process-icon-wrap"><svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/></svg></div>
                <h3 class="process-title">Satisfied Customers</h3>
                <p class="process-desc">We deliver results that make clients stay — that's why we're the best digital marketing company.</p>
            </div>
        </div>
    </div>
</section>

<!-- ══ ABOUT ══ -->
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
                <div class="section-label" style="color:#f97316">
                    <span class="sl-dot"><span></span><span></span><span></span></span>
                    About Us
                </div>
                <h2 class="section-title">Outstanding <span class="grad-text">Digital Experience</span></h2>
                <p class="section-desc">Great design is just the beginning. Our digital marketing services create powerful online experiences that connect and convert. We help brands tell their story in ways that feel real and unforgettable.</p>
                <div class="about-features">
                    <div class="about-feature">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg></div>
                        <div class="feature-text"><strong>Targeted Campaigns</strong><span>Reach the right audience every time</span></div>
                    </div>
                    <div class="about-feature">
                        <div class="feature-icon warm"><svg viewBox="0 0 24 24" fill="none"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></div>
                        <div class="feature-text"><strong>Proven Results</strong><span>Data-driven strategies that work</span></div>
                    </div>
                    <div class="about-feature">
                        <div class="feature-icon warm"><svg viewBox="0 0 24 24" fill="none"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></div>
                        <div class="feature-text"><strong>Fast Execution</strong><span>Quick turnaround without compromise</span></div>
                    </div>
                    <div class="about-feature">
                        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
                        <div class="feature-text"><strong>Dedicated Support</strong><span>Your success is our priority</span></div>
                    </div>
                </div>
                <a href="#" class="btn-warm">Discover More<svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/testimonials-section.php'; ?>
<?php include 'includes/faq-section.php'; ?>
<?php include 'includes/contact-section.php'; ?>
<?php include 'includes/virex-floating-social.php'; ?>
<?php include 'includes/footer.php'; ?>