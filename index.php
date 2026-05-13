<?php include 'includes/header.php'; ?>
<style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    /* ══════════════════════════════════════════
       COPILOT-INSPIRED GRADIENT THEME
       Smooth, light, pastel: blue→green→yellow→orange→pink→purple
    ══════════════════════════════════════════ */
    :root {
   
    /* Main focused palette */
    --c-purple: #7B4DFF;
    --c-magenta: #D85BFF;
    --c-pink: #FF6FB5;
    --c-orange: #FF9A57;

    /* Soft supporting shades */
    --c-lavender: #B79CFF;
    --c-peach: #FFC29B;

    /* Backgrounds */
    --bg: #FDF8FF;
    --bg2: #FFF4EF;
    --bg3: #F7F2FF;

    --surface: #FFFFFF;
    --surface2: rgba(255,255,255,0.75);

    /* Text */
    --text: #5D4B78;
    --text-strong: #2E1F4D;
    --text-mid: #85739A;
    --muted: #B2A4C2;

    --border: rgba(123,77,255,0.12);

    /* Main Copilot Theme Gradient */
    --grad-copilot: linear-gradient(135deg,
        #7B4DFF 0%,
        #A855F7 20%,
        #D85BFF 40%,
        #FF6FB5 65%,
        #FF9A57 100%
    );

    /* Reverse gradient */
    --grad-copilot-r: linear-gradient(135deg,
        #FF9A57 0%,
        #FF6FB5 30%,
        #D85BFF 60%,
        #7B4DFF 100%
    );

    /* UI gradients */
    --grad-soft: linear-gradient(135deg,
        #B79CFF 0%,
        #D85BFF 50%,
        #FF6FB5 100%
    );

    --grad-warm: linear-gradient(135deg,
        #FFB084 0%,
        #FF8FB1 45%,
        #D85BFF 100%
    );

    --grad-btn: linear-gradient(135deg,
        #7B4DFF 0%,
        #D85BFF 50%,
        #FF8C7A 100%
    );

    /* Page background */
    --page-bg: linear-gradient(160deg,
        #F8F2FF 0%,
        #FFF4FA 35%,
        #FFF2EB 70%,
        #FDF8FF 100%
    );
}
    html { scroll-behavior: smooth; }
    body {
        font-family: 'DM Sans', 'Manrope', sans-serif;
        color: var(--text);
        background: var(--page-bg);
        overflow-x: hidden;
    }
    h1,h2,h3,h4,h5,h6 {
        font-family: 'Plus Jakarta Sans', 'Clash Display', sans-serif;
        font-weight: 700;
        color: var(--text-strong);
    }
    a { text-decoration: none; color: inherit; }
    .container { max-width: 1200px; margin: 0 auto; padding: 0 32px; width: 100%; }

    /* ── Gradient text ── */
    .grad-text {
        background: var(--grad-copilot);
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
    .grad-text-cool {
        background: var(--grad-cool);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* ══ NAVBAR ══ */
    .navbar {
        position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
        background: rgba(253, 248, 246, 0.88);
        backdrop-filter: blur(28px) saturate(200%);
        border-bottom: 1px solid rgba(149,117,205,0.1);
        transition: all 0.4s ease;
    }
    .navbar.scrolled {
        background: rgba(253, 248, 246, 0.97);
        box-shadow: 0 4px 40px rgba(149,117,205,0.12);
    }
    .navbar::before {
        content: '';
        position: absolute; top: 0; left: 0; right: 0; height: 2.5px;
        background: var(--grad-copilot);
    }
    .nav-inner {
        display: flex; align-items: center; justify-content: space-between;
        height: 72px;
    }
    .nav-logo {
        font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 800; font-size: 24px;
        letter-spacing: -0.5px; display: flex; align-items: center; gap: 10px;
    }
    .logo-icon {
        width: 38px; height: 38px;
        background: var(--grad-copilot);
        border-radius: 12px;
        display: flex; align-items: center; justify-content: center;
        font-size: 17px; font-weight: 900; color: white;
        box-shadow: 0 4px 20px rgba(149,117,205,0.35);
        flex-shrink: 0;
    }
    .logo-v { background: var(--grad-copilot); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    .logo-rest { color: var(--text-strong); }

    .nav-links {
        display: flex; gap: 2px; align-items: center;
        background: rgba(255,255,255,0.7);
        border: 1px solid rgba(149,117,205,0.15);
        border-radius: 50px; padding: 5px;
        backdrop-filter: blur(10px);
    }
    .nav-links a {
        font-size: 13.5px; font-weight: 600; color: var(--text-mid);
        padding: 8px 18px; border-radius: 50px; transition: all 0.25s;
        white-space: nowrap;
    }
    .nav-links a:hover { color: var(--text-strong); background: rgba(149,117,205,0.08); }
    .nav-links a.active {
        color: var(--text-strong);
        background: white;
        box-shadow: 0 2px 12px rgba(149,117,205,0.18);
    }
    .nav-right { display: flex; align-items: center; gap: 12px; }
    .nav-badge {
        display: flex; align-items: center; gap: 6px;
        background: rgba(255,181,74,0.12);
        border: 1px solid rgba(255,181,74,0.3);
        color: #E8904A; font-size: 11px; font-weight: 700;
        padding: 5px 12px; border-radius: 50px; letter-spacing: 0.5px;
    }
    .nav-badge-dot { width: 6px; height: 6px; border-radius: 50%; background: var(--c-orange); animation: pulse 1.5s infinite; }
    .nav-cta {
        background: var(--grad-btn);
        color: white; font-weight: 700; font-size: 13.5px;
        padding: 11px 26px; border-radius: 50px; transition: all 0.3s;
        box-shadow: 0 4px 20px rgba(79,195,247,0.35);
        white-space: nowrap;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }
    .nav-cta:hover { transform: translateY(-2px); box-shadow: 0 8px 30px rgba(79,195,247,0.45); }

    /* Hamburger */
    .hamburger {
        display: none; flex-direction: column; gap: 5px; cursor: pointer;
        background: none; border: none; padding: 6px;
    }
    .hamburger span {
        display: block; width: 24px; height: 2px;
        background: var(--text-mid); border-radius: 2px; transition: all 0.3s;
    }
    .hamburger.open span:nth-child(1) { transform: rotate(45deg) translate(5px, 5px); }
    .hamburger.open span:nth-child(2) { opacity: 0; }
    .hamburger.open span:nth-child(3) { transform: rotate(-45deg) translate(5px, -5px); }
    .mobile-menu {
        display: none; flex-direction: column;
        background: rgba(253,248,246,0.98); border-top: 1px solid rgba(149,117,205,0.1);
        padding: 16px 20px 20px;
        backdrop-filter: blur(20px);
    }
    .mobile-menu.open { display: flex; }
    .mobile-menu a {
        color: var(--text-mid); font-size: 15px; font-weight: 600;
        padding: 12px 0; border-bottom: 1px solid rgba(149,117,205,0.08);
        transition: color 0.2s;
    }
    .mobile-menu a:last-child { border-bottom: none; }
    .mobile-menu a:hover { color: var(--text-strong); }

    @keyframes pulse { 0%,100%{opacity:1;transform:scale(1)} 50%{opacity:.6;transform:scale(1.4)} }

    /* ══ HERO ══ */
    .hero {
        min-height: 100vh;
        position: relative; overflow: hidden;
        display: flex; align-items: center;
        padding: 140px 0 100px;
    }

    /* Copilot-style mesh background */
    .hero::before {
        content: '';
        position: absolute; inset: 0;
        background:
            radial-gradient(ellipse at 20% 50%, rgba(79,195,247,0.18) 0%, transparent 55%),
            radial-gradient(ellipse at 80% 20%, rgba(186,104,200,0.15) 0%, transparent 50%),
            radial-gradient(ellipse at 60% 80%, rgba(255,181,74,0.12) 0%, transparent 45%),
            radial-gradient(ellipse at 40% 30%, rgba(129,199,132,0.12) 0%, transparent 40%);
        pointer-events: none;
    }

    /* Floating orbs with Copilot colors */
    .hero-orb { position: absolute; border-radius: 50%; filter: blur(80px); pointer-events: none; }
    .orb-1 { width:520px;height:520px; background:radial-gradient(circle, rgba(79,195,247,0.22), rgba(77,208,225,0.15), transparent); top:-200px; right:-100px; animation:orbFloat 9s ease-in-out infinite; }
    .orb-2 { width:420px;height:420px; background:radial-gradient(circle, rgba(186,104,200,0.2), rgba(149,117,205,0.12), transparent); bottom:-150px; left:-80px; animation:orbFloat 11s ease-in-out infinite reverse; }
    .orb-3 { width:350px;height:350px; background:radial-gradient(circle, rgba(255,213,79,0.18), rgba(255,181,74,0.1), transparent); top:30%; right:20%; animation:orbFloat 7s ease-in-out infinite 2s; }
    .orb-4 { width:280px;height:280px; background:radial-gradient(circle, rgba(240,98,146,0.15), rgba(229,115,115,0.08), transparent); top:15%; left:30%; animation:orbFloat 8s ease-in-out infinite 1s; }
    .orb-5 { width:200px;height:200px; background:radial-gradient(circle, rgba(129,199,132,0.18), transparent); bottom:20%; right:35%; animation:orbFloat 6s ease-in-out infinite 3s; }
    @keyframes orbFloat { 0%,100%{transform:translateY(0) scale(1)} 50%{transform:translateY(-28px) scale(1.04)} }

    .hero-inner { display:grid; grid-template-columns:1fr 1fr; gap:70px; align-items:center; position:relative; z-index:2; }

    .hero-badge {
        display: inline-flex; align-items: center; gap: 10px;
        background: rgba(255,255,255,0.85);
        border: 1px solid rgba(149,117,205,0.2);
        color: var(--text-mid); font-weight: 700;
        font-size: 11px; letter-spacing: 2.5px; text-transform: uppercase;
        padding: 8px 18px; border-radius: 50px; margin-bottom: 28px;
        box-shadow: 0 4px 16px rgba(149,117,205,0.1);
        backdrop-filter: blur(10px);
    }
    .badge-pill {
        width: 18px; height: 10px; border-radius: 5px;
        background: var(--grad-copilot);
        flex-shrink: 0;
        animation: pillShift 3s ease-in-out infinite;
    }
    @keyframes pillShift { 0%,100%{filter:hue-rotate(0deg)} 50%{filter:hue-rotate(60deg)} }

    .hero-title {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: clamp(36px, 5.2vw, 62px);
        line-height: 1.06; margin-bottom: 22px;
        letter-spacing: -1.5px; color: var(--text-strong);
        font-weight: 800;
    }
    .typed-wrapper { display: block; min-height: 1.12em; }
    .hero-desc { font-size:17px; line-height:1.85; color:var(--text-mid); max-width:480px; margin-bottom:42px; font-weight:400; }
    .hero-actions { display:flex; gap:14px; align-items:center; flex-wrap:wrap; }

    .btn-grad {
        display: inline-flex; align-items: center; gap: 10px;
        background: var(--grad-btn); color: #fff;
        font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 700; font-size: 14.5px;
        padding: 16px 34px; border-radius: 50px;
        transition: all 0.3s; box-shadow: 0 4px 25px rgba(79,195,247,.35);
        position: relative; overflow: hidden;
    }
    .btn-grad::after { content:''; position:absolute; inset:0; background:linear-gradient(135deg, rgba(255,255,255,0.2), transparent); opacity:0; transition:opacity 0.3s; }
    .btn-grad:hover { transform:translateY(-3px); box-shadow:0 10px 40px rgba(79,195,247,.5); }
    .btn-grad:hover::after { opacity:1; }
    .btn-grad svg { width:18px;height:18px;stroke:white;stroke-width:2.5;flex-shrink:0; fill:none;}

    .btn-warm {
        display: inline-flex; align-items: center; gap: 10px;
        background: var(--grad-warm2); color: #fff;
        font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 700; font-size: 14.5px;
        padding: 16px 34px; border-radius: 50px;
        transition: all 0.3s; box-shadow: 0 4px 25px rgba(255,138,101,.3);
    }
    .btn-warm:hover { transform:translateY(-3px); box-shadow:0 10px 40px rgba(255,138,101,.5); }
    .btn-warm svg { width:18px;height:18px;stroke:white;stroke-width:2.5;flex-shrink:0; fill:none;}

    .btn-ghost {
        display: inline-flex; align-items: center; gap: 10px;
        background: rgba(255,255,255,0.85); border: 1.5px solid rgba(149,117,205,0.25);
        color: var(--text-strong); font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 700; font-size: 14.5px;
        padding: 15px 30px; border-radius: 50px; transition: all 0.3s;
        backdrop-filter: blur(10px);
        box-shadow: 0 4px 16px rgba(149,117,205,0.1);
    }
    .btn-ghost:hover { background:rgba(255,255,255,1); border-color:rgba(149,117,205,0.45); transform:translateY(-2px); box-shadow:0 8px 28px rgba(149,117,205,0.15); }

    .hero-stats {
        display: flex; gap: 40px; margin-top: 54px;
        padding-top: 36px; border-top: 1px solid rgba(149,117,205,0.12); flex-wrap: wrap;
    }
    .stat-number { font-family:'Plus Jakarta Sans',sans-serif; font-weight:800; font-size:42px; line-height:1; }
    .stat-number sup { font-size:20px; }
    .stat-label { font-size:12px; color:var(--muted); margin-top:5px; font-weight:500; letter-spacing:0.3px; }

    /* ── Hero Right ── */
    .hero-right { position:relative; height:580px; }
    .hero-ring {
        position:absolute; top:-40px; left:50%; transform:translateX(-50%);
        width:380px; height:380px; border-radius:50%;
        padding: 2px; z-index:1;
        background: conic-gradient(from 180deg, #4FC3F7,#81C784,#FFD54F,#FFB74D,#FF8A65,#F06292,#BA68C8,#9575CD,#4FC3F7);
        animation:rotateSlow 16s linear infinite;
        opacity: 0.45;
    }
    .hero-ring-inner { width:100%;height:100%;border-radius:50%;background: var(--page-bg); }
    @keyframes rotateSlow { from{transform:translateX(-50%) rotate(0deg)} to{transform:translateX(-50%) rotate(360deg)} }

    .hero-img-main { position:absolute; top:0; left:50%; transform:translateX(-50%); width:255px; height:340px; border-radius:28px; overflow:hidden; box-shadow:0 24px 70px rgba(149,117,205,.2); z-index:3; border:2.5px solid rgba(255,255,255,0.9); }
    .hero-img-left { position:absolute; left:0; top:65px; width:205px; height:270px; border-radius:22px; overflow:hidden; box-shadow:0 16px 55px rgba(79,195,247,.18); z-index:2; border:2.5px solid rgba(255,255,255,0.9); }
    .hero-img-right { position:absolute; right:0; top:120px; width:200px; height:255px; border-radius:22px; overflow:hidden; box-shadow:0 16px 55px rgba(255,138,101,.18); z-index:2; border:2.5px solid rgba(255,255,255,0.9); }
    .hero-img-main img, .hero-img-left img, .hero-img-right img { width:100%;height:100%;object-fit:cover;display:block; }

    .float-el { position:absolute; z-index:10; animation:floatY 4s ease-in-out infinite; }
    @keyframes floatY { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-14px)} }
    .float-rocket { top:6px; right:14px; animation-delay:.4s; }
    .float-lamp   { left:6px; bottom:100px; animation-delay:1s; }

    .float-card {
        position: absolute; bottom: 24px; left: 50%; transform: translateX(-50%);
        background: rgba(255,255,255,0.92);
        border: 1.5px solid rgba(149,117,205,0.15);
        border-radius: 20px; padding: 14px 22px;
        box-shadow: 0 10px 45px rgba(149,117,205,.15);
        display: flex; align-items: center; gap: 14px; white-space: nowrap;
        animation: floatY 3s ease-in-out infinite .3s; z-index: 10;
        backdrop-filter: blur(16px);
    }
    .float-card-icon { width:46px;height:46px;background:var(--grad-copilot);border-radius:13px;display:flex;align-items:center;justify-content:center; }
    .float-card-icon svg { width:22px;height:22px;stroke:white;stroke-width:2;fill:none; }
    .float-card-text strong { display:block;font-family:'Plus Jakarta Sans',sans-serif;font-weight:800;font-size:18px;color:var(--text-strong); }
    .float-card-text span { font-size:12px;color:var(--muted); }

    .float-tag {
        position: absolute; top: 30px; left: 10px; z-index: 10;
        background: var(--grad-warm); color: white;
        font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 700; font-size: 11px;
        padding: 7px 14px; border-radius: 50px; white-space: nowrap;
        box-shadow: 0 6px 20px rgba(255,138,101,0.35);
        animation: floatY 5s ease-in-out infinite 0.8s;
    }

    /* ══ BRANDS SECTION ══ */
    .brands-section {
        padding: 60px 0;
        background: rgba(255,255,255,0.7);
        border-top: 1px solid rgba(149,117,205,0.08);
        border-bottom: 1px solid rgba(149,117,205,0.08);
        position: relative; overflow: hidden;
        backdrop-filter: blur(10px);
    }
    .brands-section::before {
        content: '';
        position: absolute; inset: 0;
        background: radial-gradient(ellipse at 50%, rgba(149,117,205,0.04) 0%, transparent 70%);
    }
    .brands-label {
        text-align: center; font-size: 11px; font-weight: 700; letter-spacing: 3px;
        text-transform: uppercase; color: var(--muted); margin-bottom: 40px;
        position: relative;
    }
    .brands-label::before, .brands-label::after {
        content: ''; display: inline-block; width: 40px; height: 1px;
        background: linear-gradient(90deg, transparent, rgba(149,117,205,0.4));
        vertical-align: middle; margin: 0 14px;
    }
    .brands-label::after { background: linear-gradient(90deg, rgba(149,117,205,0.4), transparent); }

    .brands-grid { display: grid; grid-template-columns: repeat(5,1fr); gap: 14px; }
    .brand-card {
        display: flex; flex-direction: column; align-items: center; justify-content: center;
        gap: 10px; padding: 28px 20px;
        background: rgba(255,255,255,0.85);
        border: 1.5px solid rgba(149,117,205,0.1);
        border-radius: 20px; transition: all 0.35s;
        cursor: default; position: relative; overflow: hidden;
        min-height: 120px; backdrop-filter: blur(10px);
    }
    .brand-card:hover { transform: translateY(-6px); box-shadow: 0 16px 40px rgba(149,117,205,0.15); border-color: rgba(149,117,205,0.3); background: rgba(255,255,255,1); }

    /* Each brand card gets a different gradient accent */
    .brand-card:nth-child(1) .brand-icon { background: linear-gradient(135deg, #4FC3F7, #4DD0E1); }
    .brand-card:nth-child(2) .brand-icon { background: linear-gradient(135deg, #81C784, #AED581); }
    .brand-card:nth-child(3) .brand-icon { background: linear-gradient(135deg, #FFD54F, #FFB74D); }
    .brand-card:nth-child(4) .brand-icon { background: linear-gradient(135deg, #FF8A65, #F06292); }
    .brand-card:nth-child(5) .brand-icon { background: linear-gradient(135deg, #BA68C8, #9575CD); }

    .brand-icon { width:44px;height:44px;border-radius:12px;display:flex;align-items:center;justify-content:center;font-family:'Plus Jakarta Sans',sans-serif;font-weight:700;font-size:17px;color:white;flex-shrink:0;transition:transform 0.35s; }
    .brand-card:hover .brand-icon { transform: rotate(-8deg) scale(1.1); }
    .brand-name { font-family:'Plus Jakarta Sans',sans-serif; font-weight:600; font-size:14px; color:var(--text-strong); text-align:center; line-height:1.3; }
    .brand-tag { font-size:10px; font-weight:600; letter-spacing:0.5px; color:var(--muted); text-transform:uppercase; }

    /* ══ SECTION COMMONS ══ */
    .section-label { display:inline-flex; align-items:center; gap:9px; font-weight:700; font-size:11px; letter-spacing:3px; text-transform:uppercase; margin-bottom:14px; }
    .sl-dot span { width:5px;height:5px;border-radius:50%;background:currentColor;animation:dotBlink 1.5s infinite;display:inline-block;margin:0 2px; }
    .sl-dot span:nth-child(2) { animation-delay:0.2s; }
    .sl-dot span:nth-child(3) { animation-delay:0.4s; }
    @keyframes dotBlink { 0%,100%{opacity:0.3} 50%{opacity:1} }
    .section-title { font-family:'Plus Jakarta Sans',sans-serif; font-size:clamp(28px,4.2vw,50px); line-height:1.12; margin-bottom:18px; letter-spacing:-0.5px; color:var(--text-strong); font-weight:800; }
    .section-desc { font-size:17px; line-height:1.85; color:var(--text-mid); max-width:520px; margin-bottom:60px; }

    /* ══ SERVICES ══ */
    .services-section { padding:120px 0; position:relative; z-index:2; background:transparent; }
    .services-section::before {
        content:''; position:absolute; inset:0;
        background: linear-gradient(180deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0.6) 50%, rgba(255,255,255,0) 100%);
        pointer-events:none;
    }
    .services-section .container { position:relative; z-index:1; }
    .services-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:20px; }
    .service-card {
        background: rgba(255,255,255,0.8);
        border: 1.5px solid rgba(149,117,205,0.1);
        border-radius: 28px; padding: 38px 32px;
        transition: all 0.45s; position: relative; overflow: hidden;
        cursor: default; backdrop-filter: blur(16px);
    }
    .service-card::before {
        content:''; position:absolute; top:0; left:0; right:0; height:3px;
        background: var(--grad-copilot); opacity:0; transition:opacity .4s;
    }

    /* Different bottom glow per card */
    .service-card:nth-child(1)::after { content:''; position:absolute; bottom:-60px; right:-60px; width:140px; height:140px; border-radius:50%; background: radial-gradient(circle, rgba(79,195,247,0.15), transparent); transition: all 0.5s; transform:scale(0.5); }
    .service-card:nth-child(2)::after { content:''; position:absolute; bottom:-60px; right:-60px; width:140px; height:140px; border-radius:50%; background: radial-gradient(circle, rgba(129,199,132,0.15), transparent); transition: all 0.5s; transform:scale(0.5); }
    .service-card:nth-child(3)::after { content:''; position:absolute; bottom:-60px; right:-60px; width:140px; height:140px; border-radius:50%; background: radial-gradient(circle, rgba(255,213,79,0.15), transparent); transition: all 0.5s; transform:scale(0.5); }
    .service-card:nth-child(4)::after { content:''; position:absolute; bottom:-60px; right:-60px; width:140px; height:140px; border-radius:50%; background: radial-gradient(circle, rgba(255,138,101,0.15), transparent); transition: all 0.5s; transform:scale(0.5); }
    .service-card:nth-child(5)::after { content:''; position:absolute; bottom:-60px; right:-60px; width:140px; height:140px; border-radius:50%; background: radial-gradient(circle, rgba(240,98,146,0.15), transparent); transition: all 0.5s; transform:scale(0.5); }
    .service-card:nth-child(6)::after { content:''; position:absolute; bottom:-60px; right:-60px; width:140px; height:140px; border-radius:50%; background: radial-gradient(circle, rgba(186,104,200,0.15), transparent); transition: all 0.5s; transform:scale(0.5); }

    .service-card:hover { transform:translateY(-10px); box-shadow:0 24px 60px rgba(149,117,205,.12); border-color:rgba(149,117,205,0.25); background:rgba(255,255,255,0.97); }
    .service-card:hover::before { opacity:1; }
    .service-card:hover::after { transform:scale(1.5); }
    .service-card > * { position:relative; z-index:1; }

    /* Service icon colors per position */
    .service-card:nth-child(1) .service-icon { background:rgba(79,195,247,0.1); border-color:rgba(79,195,247,0.2); }
    .service-card:nth-child(1) .service-icon svg { stroke:#4FC3F7; }
    .service-card:nth-child(2) .service-icon { background:rgba(129,199,132,0.1); border-color:rgba(129,199,132,0.2); }
    .service-card:nth-child(2) .service-icon svg { stroke:#66BB6A; }
    .service-card:nth-child(3) .service-icon { background:rgba(255,213,79,0.1); border-color:rgba(255,213,79,0.2); }
    .service-card:nth-child(3) .service-icon svg { stroke:#FFC107; }
    .service-card:nth-child(4) .service-icon { background:rgba(255,138,101,0.1); border-color:rgba(255,138,101,0.2); }
    .service-card:nth-child(4) .service-icon svg { stroke:#FF7043; }
    .service-card:nth-child(5) .service-icon { background:rgba(240,98,146,0.12); border-color:rgba(240,98,146,0.2); }
    .service-card:nth-child(5) .service-icon svg { stroke:#E91E8C; }
    .service-card:nth-child(6) .service-icon { background:rgba(186,104,200,0.1); border-color:rgba(186,104,200,0.2); }
    .service-card:nth-child(6) .service-icon svg { stroke:#BA68C8; }

    .service-icon { width:62px;height:62px;border:1.5px solid;border-radius:18px;display:flex;align-items:center;justify-content:center;margin-bottom:24px;transition:all 0.4s; }
    .service-icon svg { width:28px;height:28px;stroke-width:1.7;fill:none; }
    .service-card:hover .service-icon { background:var(--grad-copilot) !important;border-color:transparent !important;transform:rotate(-6deg) scale(1.08); }
    .service-card:hover .service-icon svg { stroke:white !important; }
    .service-title { font-family:'Plus Jakarta Sans',sans-serif;font-size:19px;margin-bottom:12px;color:var(--text-strong);font-weight:700; }
    .service-desc { font-size:14px;line-height:1.8;color:var(--text-mid); }
    .service-arrow { display:inline-flex;align-items:center;gap:6px;font-size:12px;font-weight:700;margin-top:18px;opacity:0;transform:translateX(-8px);transition:all 0.3s; }
    .service-arrow svg { width:14px;height:14px;stroke:currentColor;stroke-width:2.5;fill:none; }
    .service-card:nth-child(1) .service-arrow { color:#4FC3F7; }
    .service-card:nth-child(2) .service-arrow { color:#66BB6A; }
    .service-card:nth-child(3) .service-arrow { color:#FFC107; }
    .service-card:nth-child(4) .service-arrow { color:#FF7043; }
    .service-card:nth-child(5) .service-arrow { color:#E91E8C; }
    .service-card:nth-child(6) .service-arrow { color:#BA68C8; }
    .service-card:hover .service-arrow { opacity:1;transform:translateX(0); }
    .services-cta { text-align:center;margin-top:56px; }
    .btn-outline { display:inline-flex;align-items:center;gap:8px;border:1.5px solid rgba(149,117,205,0.25);background:rgba(255,255,255,0.8);color:var(--text-strong);font-family:'Plus Jakarta Sans',sans-serif;font-weight:700;font-size:13px;padding:14px 34px;border-radius:50px;transition:all .3s;letter-spacing:.3px;backdrop-filter:blur(10px); }
    .btn-outline:hover { border-color:rgba(149,117,205,0.5);background:rgba(255,255,255,1);box-shadow:0 4px 20px rgba(149,117,205,.12);transform:translateY(-2px); }

    /* ══ SCROLLING MARQUEE ══ */
    .scrolling-section {
        position: relative; overflow: hidden; padding: 0;
        background: linear-gradient(135deg, #F5F0FF 0%, #EFF8FF 30%, #FFF5F0 60%, #FFF0F8 100%);
    }
    .scrolling-section::before { content:''; position:absolute; top:0; left:0; right:0; height:1.5px; background:var(--grad-copilot); opacity:0.6; }
    .scrolling-section::after  { content:''; position:absolute; bottom:0; left:0; right:0; height:1.5px; background:var(--grad-copilot); opacity:0.6; }
    .marquee-fade-left  { position:absolute;top:0;bottom:0;left:0;width:140px;z-index:2;pointer-events:none;background:linear-gradient(to right,#F5F0FF 0%,transparent 100%); }
    .marquee-fade-right { position:absolute;top:0;bottom:0;right:0;width:140px;z-index:2;pointer-events:none;background:linear-gradient(to left,#FFF0F8 0%,transparent 100%); }
    .marquee-orb { position:absolute;border-radius:50%;filter:blur(80px);pointer-events:none; }
    .m-orb-1 { width:300px;height:300px;background:rgba(79,195,247,0.12);top:-100px;left:20%; }
    .m-orb-2 { width:250px;height:250px;background:rgba(240,98,146,0.1);bottom:-80px;right:30%; }
    .scrolling-tracks-wrap { padding:0;overflow:hidden; }
    .scrolling-track-1 { display:flex;gap:0;padding:32px 0 20px;white-space:nowrap;animation:scrollLeft 30s linear infinite; }
    .scrolling-track-2 { display:flex;gap:0;padding:20px 0 32px;white-space:nowrap;animation:scrollRight 25s linear infinite; }
    @keyframes scrollLeft  { from{transform:translateX(0)} to{transform:translateX(-50%)} }
    @keyframes scrollRight { from{transform:translateX(-50%)} to{transform:translateX(0)} }
    .scroll-item { display:inline-flex;align-items:center;gap:14px;flex-shrink:0;padding:0 8px; }
    .scroll-pill { display:inline-flex;align-items:center;gap:10px;padding:10px 22px;border-radius:50px;font-family:'Plus Jakarta Sans',sans-serif;font-weight:700;font-size:clamp(13px,1.6vw,15px);letter-spacing:0.3px;white-space:nowrap; }
    .scroll-pill.style-a { background:rgba(79,195,247,0.12);border:1.5px solid rgba(79,195,247,0.25);color:#2196A0; }
    .scroll-pill.style-b { background:rgba(129,199,132,0.12);border:1.5px solid rgba(129,199,132,0.25);color:#388E3C; }
    .scroll-pill.style-c { background:rgba(255,213,79,0.15);border:1.5px solid rgba(255,213,79,0.3);color:#F57F17; }
    .scroll-pill.style-d { background:rgba(255,138,101,0.12);border:1.5px solid rgba(255,138,101,0.25);color:#BF360C; }
    .scroll-pill.style-e { background:rgba(186,104,200,0.12);border:1.5px solid rgba(186,104,200,0.25);color:#6A1B9A; }
    .scroll-pill-icon { width:22px;height:22px;border-radius:6px;display:flex;align-items:center;justify-content:center;flex-shrink:0; }
    .scroll-pill-icon svg { width:13px;height:13px; }
    .style-a .scroll-pill-icon { background:rgba(79,195,247,0.2); } .style-a .scroll-pill-icon svg { stroke:#4FC3F7;stroke-width:2;fill:none; }
    .style-b .scroll-pill-icon { background:rgba(129,199,132,0.2); } .style-b .scroll-pill-icon svg { stroke:#66BB6A;stroke-width:2;fill:none; }
    .style-c .scroll-pill-icon { background:rgba(255,213,79,0.2); } .style-c .scroll-pill-icon svg { stroke:#FFC107;stroke-width:2;fill:none; }
    .style-d .scroll-pill-icon { background:rgba(255,138,101,0.2); } .style-d .scroll-pill-icon svg { stroke:#FF7043;stroke-width:2;fill:none; }
    .style-e .scroll-pill-icon { background:rgba(186,104,200,0.2); } .style-e .scroll-pill-icon svg { stroke:#BA68C8;stroke-width:2;fill:none; }
    .scroll-sep-star { font-size:16px;color:rgba(149,117,205,0.2);flex-shrink:0;margin:0 6px; }

    /* ══ PROCESS ══ */
    .process-section { padding:120px 0 160px;position:relative;overflow:hidden;z-index:2; }
    .process-section::before {
        content:''; position:absolute; inset:0;
        background:
            radial-gradient(ellipse at 80% 20%, rgba(79,195,247,0.08) 0%, transparent 50%),
            radial-gradient(ellipse at 10% 80%, rgba(255,138,101,0.06) 0%, transparent 40%);
        pointer-events:none;
    }
    .process-grid { display:grid;grid-template-columns:repeat(4,1fr);gap:28px;margin-top:64px;position:relative; }
    .process-connector { position:absolute;top:52px;left:calc(12.5% + 42px);right:calc(12.5% + 42px);height:1px;z-index:0;background:repeating-linear-gradient(90deg,rgba(149,117,205,0.2) 0,rgba(149,117,205,0.2) 8px,transparent 8px,transparent 18px); }
    .process-card { text-align:center;position:relative;z-index:1; }
    .process-num { position:absolute;top:-12px;right:8px;font-family:'Plus Jakarta Sans',sans-serif;font-weight:800;font-size:68px;line-height:1;pointer-events:none;background:var(--grad-copilot);-webkit-background-clip:text;-webkit-text-fill-color:transparent;opacity:.07; }
    .process-icon-wrap { width:86px;height:86px;background:rgba(255,255,255,0.85);border:1.5px solid rgba(149,117,205,0.15);border-radius:24px;display:flex;align-items:center;justify-content:center;margin:0 auto 22px;transition:all .35s;box-shadow:0 4px 20px rgba(149,117,205,0.08); }
    .process-card:nth-child(2) .process-icon-wrap svg { stroke:#4FC3F7; }
    .process-card:nth-child(3) .process-icon-wrap svg { stroke:#FFB74D; }
    .process-card:nth-child(4) .process-icon-wrap svg { stroke:#F06292; }
    .process-card:nth-child(5) .process-icon-wrap svg { stroke:#BA68C8; }
    .process-icon-wrap svg { width:34px;height:34px;stroke:#81C784;stroke-width:1.6;fill:none;transition:stroke .35s; }
    .process-card:hover .process-icon-wrap { background:var(--grad-copilot);border-color:transparent;box-shadow:0 12px 40px rgba(149,117,205,.25);transform:translateY(-4px); }
    .process-card:hover .process-icon-wrap svg { stroke:white; }
    .process-title { font-family:'Plus Jakarta Sans',sans-serif;font-size:17px;color:var(--text-strong);margin-bottom:10px;font-weight:700; }
    .process-desc { font-size:14px;color:var(--text-mid);line-height:1.8; }

    /* ══ ABOUT ══ */
    .about-section { padding:120px 0;position:relative;z-index:2; }
    .about-section::before {
        content:''; position:absolute; inset:0;
        background: linear-gradient(135deg, rgba(255,255,255,0.6) 0%, rgba(240,248,255,0.7) 50%, rgba(255,245,255,0.5) 100%);
        pointer-events:none;
    }
    .about-inner { display:grid;grid-template-columns:1fr 1fr;gap:90px;align-items:center;position:relative;z-index:1; }
    .about-img-wrap { position:relative; }
    .about-img-main { width:100%;border-radius:28px;overflow:hidden;box-shadow:0 24px 70px rgba(149,117,205,.16);border:2.5px solid rgba(255,255,255,0.9); }
    .about-img-main img { width:100%;height:500px;object-fit:cover;display:block; }
    .about-img-badge { position:absolute;bottom:-24px;right:-24px;background:var(--grad-warm);color:white;font-family:'Plus Jakarta Sans',sans-serif;font-weight:700;padding:26px 30px;border-radius:24px;text-align:center;box-shadow:0 16px 45px rgba(255,138,101,.3); }
    .about-img-badge .num { font-size:42px;line-height:1; }
    .about-img-badge .lbl { font-size:11.5px;font-weight:600;opacity:.9;margin-top:4px;letter-spacing:0.3px; }
    .about-features { display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:42px; }
    .about-feature { display:flex;align-items:flex-start;gap:14px;background:rgba(255,255,255,0.85);border:1.5px solid rgba(149,117,205,0.1);border-radius:18px;padding:20px;transition:all .3s;backdrop-filter:blur(10px); }
    .about-feature:hover { border-color:rgba(149,117,205,0.28);transform:translateY(-3px);box-shadow:0 10px 28px rgba(149,117,205,.1); }
    .feature-icon { width:46px;height:46px;border-radius:13px;display:flex;align-items:center;justify-content:center;flex-shrink:0; }
    .feature-icon.f1 { background:linear-gradient(135deg,#4FC3F7,#4DD0E1); }
    .feature-icon.f2 { background:linear-gradient(135deg,#FFD54F,#FFB74D); }
    .feature-icon.f3 { background:linear-gradient(135deg,#FF8A65,#F06292); }
    .feature-icon.f4 { background:linear-gradient(135deg,#BA68C8,#9575CD); }
    .feature-icon svg { width:22px;height:22px;stroke:white;stroke-width:1.8;fill:none; }
    .feature-text strong { display:block;font-family:'Plus Jakarta Sans',sans-serif;font-weight:700;font-size:15px;color:var(--text-strong);margin-bottom:3px; }
    .feature-text span { font-size:13px;color:var(--muted); }

    /* ══ TESTIMONIALS ══ */
    .testimonials-section { padding:120px 0;position:relative;z-index:2;overflow:hidden; }
    .testimonials-section::before {
        content:''; position:absolute; inset:0;
        background: linear-gradient(135deg, #F8F0FF 0%, #EDF5FF 35%, #FFF5F0 70%, #FFF0F8 100%);
        pointer-events:none;
    }

    /* ══ CONTACT SECTION OVERRIDE ══ */
    .git-section {
        background: linear-gradient(135deg, #F5F0FF 0%, #EFF8FF 40%, #FFF5F0 70%, #FFF0F8 100%) !important;
    }
    .git-info-side {
        background: linear-gradient(145deg, #2D1B4E 0%, #1A3A6E 50%, #1B2A5E 100%) !important;
    }

    /* ══ FAQ SECTION OVERRIDE ══ */
    .faq-section-v2 {
        background: linear-gradient(135deg, #FFF8F6 0%, #F0F8FF 40%, #FFF5FF 100%) !important;
    }
    .faq2-item.open { border-color:rgba(79,195,247,0.4) !important; box-shadow: 0 8px 32px rgba(79,195,247,0.1) !important; }
    .faq2-item.open .faq2-toggle { background: var(--grad-btn) !important; }
    .faq2-cta-card { background: linear-gradient(145deg, #2D1B4E 0%, #1A3A6E 55%, #1B2A5E 100%) !important; }
    .faq2-stat-num { background:var(--grad-copilot) !important; -webkit-background-clip:text !important; -webkit-text-fill-color:transparent !important; background-clip:text !important; }

    /* ══ BACK TO TOP ══ */
    #back-to-top { position:fixed;bottom:40px;left:40px;width:52px;height:52px;background:var(--grad-copilot);color:white;border:none;border-radius:15px;cursor:pointer;display:none;align-items:center;justify-content:center;box-shadow:0 4px 25px rgba(149,117,205,.4);z-index:999;transition:all .3s;font-size:20px; }
    #back-to-top.visible { display:flex; }
    #back-to-top:hover { transform:translateY(-4px);box-shadow:0 8px 40px rgba(149,117,205,.5); }

    /* ══ CHAT WIDGET OVERRIDE ══ */
    .chat-toggle-btn { background:var(--grad-btn) !important; }
    .chat-toggle-btn::before, .chat-toggle-btn::after { background:var(--grad-btn) !important; }
    .chat-popup-header { background:var(--grad-btn) !important; }

    /* ══ RESPONSIVE ══ */
    @media(max-width:1100px){ .brands-grid{grid-template-columns:repeat(3,1fr);} }
    @media(max-width:992px){
        .hero-inner,.about-inner { grid-template-columns:1fr; }
        .hero-right { height:400px; }
        .services-grid,.process-grid { grid-template-columns:repeat(2,1fr); }
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
        .brands-grid { grid-template-columns:1fr 1fr; }
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
    <div class="hero-orb orb-5"></div>
    <div class="container">
        <div class="hero-inner">
            <div class="hero-left">
                <div class="hero-badge">
                    <span class="badge-pill"></span>
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
                        <div class="stat-number grad-text-cool" data-count="6">0<sup>+</sup></div>
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
                <div class="float-tag">🚀 #1 Agency 2026</div>
                <div class="float-el float-rocket">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none">
                        <path d="M55 8 Q60 32 40 50" stroke="#9575CD" stroke-width="1.5" stroke-dasharray="4 4" opacity="0.4"/>
                        <path d="M32 10 C32 10 44 14 46 28 L36 38 L26 38 L16 28 C18 14 32 10 32 10Z" stroke="rgba(79,195,247,.5)" stroke-width="1.8" fill="rgba(79,195,247,0.08)"/>
                        <circle cx="32" cy="26" r="5" stroke="#4FC3F7" stroke-width="1.8" fill="rgba(79,195,247,0.1)"/>
                        <path d="M16 28 L10 36 L20 34" stroke="rgba(149,117,205,.4)" stroke-width="1.8" fill="none"/>
                        <path d="M46 28 L52 36 L42 34" stroke="rgba(149,117,205,.4)" stroke-width="1.8" fill="none"/>
                        <path d="M26 38 Q29 48 32 44 Q35 48 38 38" stroke="#FFB74D" stroke-width="2" fill="none"/>
                    </svg>
                </div>
                <div class="float-el float-lamp">
                    <svg width="70" height="90" viewBox="0 0 70 90" fill="none">
                        <line x1="35" y1="4" x2="35" y2="1" stroke="rgba(255,213,79,.5)" stroke-width="1.8" stroke-linecap="round"/>
                        <line x1="48" y1="8" x2="50" y2="6" stroke="rgba(255,138,101,.4)" stroke-width="1.8" stroke-linecap="round"/>
                        <line x1="22" y1="8" x2="20" y2="6" stroke="rgba(255,138,101,.4)" stroke-width="1.8" stroke-linecap="round"/>
                        <path d="M22 30 C22 20 28 14 35 14 C42 14 48 20 48 30 C48 36 45 40 42 43 L42 50 L28 50 L28 43 C25 40 22 36 22 30Z" stroke="rgba(255,213,79,.4)" stroke-width="1.8" fill="rgba(255,213,79,0.08)"/>
                        <line x1="28" y1="51" x2="42" y2="51" stroke="rgba(255,138,101,.35)" stroke-width="1.8" stroke-linecap="round"/>
                        <line x1="29" y1="55" x2="41" y2="55" stroke="rgba(255,138,101,.35)" stroke-width="1.8" stroke-linecap="round"/>
                        <line x1="31" y1="59" x2="39" y2="59" stroke="rgba(255,138,101,.35)" stroke-width="1.8" stroke-linecap="round"/>
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
        <div class="section-label" style="color:#4FC3F7">
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
    <div class="container">
        <div class="section-label" style="color:#4DD0E1">
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
                <div class="section-label" style="color:#FF8A65">
                    <span class="sl-dot"><span></span><span></span><span></span></span>
                    About Us
                </div>
                <h2 class="section-title">Outstanding <span class="grad-text">Digital Experience</span></h2>
                <p class="section-desc">Great design is just the beginning. Our digital marketing services create powerful online experiences that connect and convert. We help brands tell their story in ways that feel real and unforgettable.</p>
                <div class="about-features">
                    <div class="about-feature">
                        <div class="feature-icon f1"><svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg></div>
                        <div class="feature-text"><strong>Targeted Campaigns</strong><span>Reach the right audience every time</span></div>
                    </div>
                    <div class="about-feature">
                        <div class="feature-icon f2"><svg viewBox="0 0 24 24" fill="none"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></div>
                        <div class="feature-text"><strong>Proven Results</strong><span>Data-driven strategies that work</span></div>
                    </div>
                    <div class="about-feature">
                        <div class="feature-icon f3"><svg viewBox="0 0 24 24" fill="none"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></div>
                        <div class="feature-text"><strong>Fast Execution</strong><span>Quick turnaround without compromise</span></div>
                    </div>
                    <div class="about-feature">
                        <div class="feature-icon f4"><svg viewBox="0 0 24 24" fill="none"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
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

<!-- Typed.js animation override -->
<script>
(function(){
    var words = ['for Growth', 'that Converts', 'that Scales', 'with Impact'];
    var i = 0, j = 0, del = false, el = document.getElementById('typed-text');
    if(!el) return;
    function type(){
        var word = words[i % words.length];
        if(!del){
            el.textContent = word.slice(0, ++j);
            if(j === word.length){ del = true; setTimeout(type, 1800); return; }
        } else {
            el.textContent = word.slice(0, --j);
            if(j === 0){ del = false; i++; setTimeout(type, 400); return; }
        }
        setTimeout(type, del ? 60 : 90);
    }
    type();
})();
</script>