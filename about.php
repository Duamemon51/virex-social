<?php include 'includes/header.php'; ?>
<style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }


    html { scroll-behavior: smooth; }
    body { font-family: 'Manrope', sans-serif; color: var(--text); background: var(--bg); overflow-x: hidden; }
    h1,h2,h3,h4,h5,h6 { font-family: 'Clash Display', 'Syne', sans-serif; font-weight: 700; color: var(--text-strong); }
    a { text-decoration: none; color: inherit; }
    .container { max-width: 1220px; margin: 0 auto; padding: 0 32px; width: 100%; }

    .grad-text { background: var(--grad-main); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    .grad-text-warm { background: var(--grad-warm); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }

    /* ══ SECTION COMMONS ══ */
    .section-label { display:inline-flex; align-items:center; gap:9px; font-family:'Manrope',sans-serif; font-weight:700; font-size:11px; letter-spacing:3px; text-transform:uppercase; margin-bottom:14px; color:var(--purple); }
    .section-label .sl-dot { display:flex; gap:3px; }
    .section-label .sl-dot span { width:5px;height:5px;border-radius:50%;background:currentColor;animation:dotBlink 1.5s infinite; }
    .section-label .sl-dot span:nth-child(2) { animation-delay:0.2s; }
    .section-label .sl-dot span:nth-child(3) { animation-delay:0.4s; }
    @keyframes dotBlink { 0%,100%{opacity:0.3} 50%{opacity:1} }
   .section-title {
  font-family: 'Clash Display', sans-serif;
  font-size: clamp(28px, 4.2vw, 50px);
  line-height: 1.12;
  margin-bottom: 18px;
  letter-spacing: -0.5px;
  color: BLACK;
}
  .section-title1 {
  font-family: 'Clash Display', sans-serif;
  font-size: clamp(28px, 4.2vw, 50px);
  line-height: 1.12;
  margin-bottom: 18px;
  letter-spacing: -0.5px;
  color: white;
}
    .section-desc { font-size:17px; line-height:1.85; color:#6b7280; max-width:520px; margin-bottom:60px; }

    @keyframes pulse { 0%,100%{opacity:1;transform:scale(1)} 50%{opacity:.6;transform:scale(1.4)} }
    @keyframes orbFloat { 0%,100%{transform:translateY(0) scale(1)} 50%{transform:translateY(-30px) scale(1.05)} }

 /* ══ PAGE HERO (COPILOT LIGHT THEME) ══ */
.page-hero {
    padding: 160px 0 0;
    position: relative;
    overflow: hidden;
    text-align: center;

    /* Light Copilot mesh background (same system as navbar/page-bg) */
    background: linear-gradient(155deg,
        #F0E8FF 0%,
        #F8F0FF 20%,
        #FFF0FA 40%,
        #FFF4F0 65%,
        #FFF9F0 85%,
        #FDF8FF 100%
    );
}

/* Soft floating color blobs (Copilot style) */
.page-hero::before {
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

/* Gradient top line (same brand system) */
.page-hero::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: var(--grad-main);
    z-index: 20;
}

/* Floating soft orbs */
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

/* Content */
.page-hero .hero-content {
    position: relative;
    z-index: 10;
    padding-bottom: 80px;
}

/* Badge (glass style like navbar pills) */
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

/* Title (dark text like Copilot light UI) */
.page-hero h1 {
    font-family: 'Plus Jakarta Sans', 'Clash Display', sans-serif;
    font-size: clamp(26px, 4vw, 45px);
    line-height: 1.1;
    letter-spacing: -1px;

    color: var(--text-strong);
    margin-bottom: 22px;
}

/* Description */
.page-hero p.ph-desc {
    color: var(--text-mid);
    font-size: 17px;
    line-height: 1.85;
    max-width: 920px;
    margin: 0 auto 40px;
}
    /* Hero image strip */
    .hero-img-strip {
        position: relative; z-index: 10;
        display: grid; grid-template-columns: 1fr 1.4fr 1fr;
        gap: 16px; padding: 0 40px;
        margin-top: 20px;
    }
    .hero-img-strip img {
        width: 100%; height: 260px; object-fit: cover;
        border-radius: 20px 20px 0 0;
        filter: brightness(0.75) saturate(1.1);
    }
    .hero-img-strip img.center { height: 320px; }

    /* Buttons */
    .btn-grad {
        display: inline-flex; align-items: center; gap: 10px;
        background: var(--grad-btn); color: #fff;
        font-family: 'Clash Display', sans-serif; font-weight: 600; font-size: 14.5px;
        padding: 16px 34px; border-radius: 50px;
        transition: all 0.3s; box-shadow: 0 4px 25px rgba(124,58,237,.35);
    }
    .btn-grad:hover { transform:translateY(-3px); box-shadow:0 10px 40px rgba(124,58,237,.5); }
    .btn-grad svg { width:18px;height:18px;stroke:white;stroke-width:2.5;fill:none;flex-shrink:0; }
    .btn-warm {
        display: inline-flex; align-items: center; gap: 10px;
        background: var(--grad-btn-warm); color: #fff;
        font-family: 'Clash Display', sans-serif; font-weight: 600; font-size: 14.5px;
        padding: 16px 34px; border-radius: 50px;
        transition: all 0.3s; box-shadow: 0 4px 25px rgba(249,115,22,.35);
    }
    .btn-warm:hover { transform:translateY(-3px); box-shadow:0 10px 40px rgba(249,115,22,.5); }
    .btn-warm svg { width:18px;height:18px;stroke:white;stroke-width:2.5;fill:none;flex-shrink:0; }
    .btn-outline {
        display: inline-flex; align-items: center; gap: 8px;
        border: 2px solid rgba(124,58,237,0.3); color: var(--purple);
        font-family: 'Clash Display', sans-serif; font-weight: 600; font-size: 14px;
        padding: 14px 28px; border-radius: 50px; transition: all 0.3s;
    }
    .btn-outline:hover { background: var(--purple); color: white; border-color: var(--purple); transform:translateY(-2px); }

    /* ══ ABOUT INTRO ══ */
    .about-intro-section { padding: 120px 0 100px; background: #ffffff; position: relative; z-index: 2; }
    .about-intro-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; }
    .about-intro-left p { font-size: 16px; line-height: 1.9; color: #6b7280; margin-bottom: 18px; }
    .about-intro-left p:last-of-type { margin-bottom: 36px; }
    .about-intro-img {
        border-radius: 32px; overflow: hidden; position: relative;
        box-shadow: 0 30px 80px rgba(124,58,237,0.15);
    }
    .about-intro-img img { width: 100%; height: 460px; object-fit: cover; display: block; }
    .about-intro-img-badge {
        position: absolute; bottom: 28px; left: 28px;
        background: rgba(13,5,32,0.85); backdrop-filter: blur(12px);
        border: 1px solid rgba(255,255,255,0.12);
        border-radius: 16px; padding: 16px 20px;
        display: flex; align-items: center; gap: 14px;
    }
    .aib-icon { width:46px;height:46px;border-radius:12px;background:var(--grad-btn);display:flex;align-items:center;justify-content:center;flex-shrink:0; }
    .aib-icon svg { width:22px;height:22px;stroke:white;stroke-width:2;fill:none; }
    .aib-text strong { display:block;font-family:'Clash Display',sans-serif;font-size:16px;color:white; }
    .aib-text span { font-size:12px;color:rgba(255,255,255,0.5); }

    /* ══ VALUES ══ */
    .values-section { padding:120px 0 100px; background:linear-gradient(135deg, #fdf8ff 0%, #fff8f0 60%, #f0f9ff 100%); position:relative; z-index:2; overflow:hidden; }
    .values-section::before { content:''; position:absolute; inset:0; background: radial-gradient(ellipse at 80% 20%, rgba(224,64,251,0.05) 0%, transparent 50%), radial-gradient(ellipse at 10% 80%, rgba(249,115,22,0.04) 0%, transparent 50%); pointer-events:none; }
    .values-grid { display:grid; grid-template-columns:repeat(4,1fr); gap:22px; margin-top:60px; position:relative; z-index:1; }
    .value-card { background:#ffffff; border:1.5px solid rgba(124,58,237,0.09); border-radius:28px; padding:38px 28px; transition:all 0.45s cubic-bezier(.4,0,.2,1); position:relative; overflow:hidden; cursor:default; }
    .value-card::before { content:''; position:absolute; top:0; left:0; width:3px; height:100%; background:var(--grad-main); border-radius:3px 0 0 3px; transform:scaleY(0); transition:transform 0.4s; }
    .value-card:hover { transform:translateY(-10px); box-shadow:0 24px 60px rgba(124,58,237,.12); border-color:rgba(124,58,237,0.28); }
    .value-card:hover::before { transform:scaleY(1); }
    .value-icon { width:56px; height:56px; border-radius:18px; display:flex; align-items:center; justify-content:center; margin-bottom:22px; }
    .value-icon svg { width:24px; height:24px; stroke-width:1.8; fill:none; }
    .vi-purple { background:rgba(124,58,237,0.08); border:1.5px solid rgba(124,58,237,0.15); }
    .vi-purple svg { stroke:var(--purple); }
    .vi-orange { background:rgba(249,115,22,0.08); border:1.5px solid rgba(249,115,22,0.18); }
    .vi-orange svg { stroke:var(--orange); }
    .vi-teal { background:rgba(6,182,212,0.08); border:1.5px solid rgba(6,182,212,0.18); }
    .vi-teal svg { stroke:var(--teal); }
    .vi-pink { background:rgba(224,64,251,0.08); border:1.5px solid rgba(224,64,251,0.18); }
    .vi-pink svg { stroke:var(--pink); }
    .value-card h3 { font-family:'Clash Display',sans-serif; font-size:19px; color:var(--text-strong); margin-bottom:12px; }
    .value-card p { font-size:14px; line-height:1.8; color:#6b7280; }

    /* ══ MISSION / VALUES TABS ══ */
    .about-tabs-section {
        padding: 120px 0 100px;
        background: #f8f7ff;
        position: relative; z-index: 2;
        overflow: hidden;
    }
    .about-tabs-section::before {
        content: '';
        position: absolute; inset: 0;
        background: radial-gradient(ellipse at 80% 0%, rgba(124,58,237,0.06) 0%, transparent 50%),
                    radial-gradient(ellipse at 5% 100%, rgba(249,115,22,0.04) 0%, transparent 50%);
        pointer-events: none;
    }
    /* Scattered dots background */
    .tabs-bg-dots { position:absolute; inset:0; pointer-events:none; overflow:hidden; }
    .tabs-bg-dots span {
        position:absolute; border-radius:50%;
        width:7px; height:7px;
    }
    .tabs-header { text-align:center; margin-bottom:48px; }

    /* Tab switcher — exactly like screenshot */
    .tab-switcher-wrap { text-align:center; margin-bottom:56px; }
    .tab-switcher-row {
        display: inline-flex;
        gap: 0;
        position: relative;
    }
    .tab-btn-v2 {
        display: flex; flex-direction: column; align-items: center; justify-content: center;
        gap: 0; cursor: pointer; border: none; outline: none;
        background: transparent; padding: 0;
        position: relative; transition: all 0.35s;
    }
    .tab-btn-v2 .tbc-box {
        width: 200px; height: 160px;
        border-radius: 18px;
        display: flex; flex-direction: column; align-items: center; justify-content: center;
        gap: 16px;
        border: 1.5px solid rgba(124,58,237,0.12);
        background: #fff;
        transition: all 0.35s cubic-bezier(.4,0,.2,1);
        position: relative; overflow: hidden;
    }
    .tab-btn-v2 .tbc-box svg { width:52px; height:52px; stroke-width:1.2; }
    .tab-btn-v2 .tbc-label {
        font-family:'Clash Display',sans-serif; font-weight:700;
        font-size:15px; color:var(--text-strong);
        transition: color 0.3s;
    }
    /* Arrow/caret under active */
    .tab-btn-v2 .tbc-arrow {
        width:0; height:0;
        border-left: 14px solid transparent;
        border-right: 14px solid transparent;
        border-top: 16px solid transparent;
        transition: border-top-color 0.3s;
        margin-top: -2px;
    }
    /* Active tab */
    .tab-btn-v2.active .tbc-box {
        background: #6c63e0;
        border-color: #6c63e0;
        box-shadow: 0 16px 50px rgba(108,99,224,0.35);
    }
    .tab-btn-v2.active .tbc-box svg { stroke: white; }
    .tab-btn-v2.active .tbc-label { color: #6c63e0; }
    .tab-btn-v2.active .tbc-arrow { border-top-color: #6c63e0; }

    /* Inactive hover */
    .tab-btn-v2:not(.active):hover .tbc-box { border-color: rgba(124,58,237,0.3); box-shadow: 0 8px 30px rgba(124,58,237,0.1); }

    /* Orange accent tab (Mission) */
    .tab-btn-v2.tab-orange.active .tbc-box { background: #f97316; border-color:#f97316; box-shadow:0 16px 50px rgba(249,115,22,0.35); }
    .tab-btn-v2.tab-orange.active .tbc-label { color:#f97316; }
    .tab-btn-v2.tab-orange.active .tbc-arrow { border-top-color:#f97316; }
    .tab-btn-v2.tab-orange .tbc-box svg { stroke:#f97316; }
    .tab-btn-v2.tab-orange.active .tbc-box svg { stroke:white; }

    /* Gap between tabs */
    .tab-switcher-gap { width: 60px; }

    /* Tab panels */
    .tab-panel-v2 { display: none; }
    .tab-panel-v2.active { display: block; animation: tabFadeIn 0.4s ease; }
    @keyframes tabFadeIn { from{opacity:0; transform:translateY(12px)} to{opacity:1; transform:translateY(0)} }

    .tab-content-grid-v2 {
        display: grid; grid-template-columns: 1fr 1fr;
        gap: 70px; align-items: center;
    }
    .tab-text-v2 h3 {
        font-family:'Clash Display',sans-serif; font-size:clamp(24px,2.8vw,36px);
        color:var(--text-strong); margin-bottom:18px; line-height:1.15;
    }
    .tab-text-v2 > p { font-size:15px; line-height:1.85; color:#6b7280; margin-bottom:30px; }
    .tab-point-v2 { display:flex; gap:16px; align-items:flex-start; margin-bottom:22px; }
    .tpv-icon {
        width:44px; height:44px; border-radius:12px; flex-shrink:0;
        display:flex; align-items:center; justify-content:center;
    }
    .tpv-icon svg { width:20px; height:20px; fill:none; stroke-width:2; }
    .tpv-purple { background:rgba(108,99,224,0.1); border:1.5px solid rgba(108,99,224,0.2); }
    .tpv-purple svg { stroke:#6c63e0; }
    .tpv-orange { background:rgba(249,115,22,0.1); border:1.5px solid rgba(249,115,22,0.2); }
    .tpv-orange svg { stroke:#f97316; }
    .tpv-green { background:rgba(16,185,129,0.1); border:1.5px solid rgba(16,185,129,0.2); }
    .tpv-green svg { stroke:#10b981; }
    .tab-point-v2 strong { display:block; font-family:'Clash Display',sans-serif; font-size:15px; color:var(--text-strong); margin-bottom:4px; }
    .tab-point-v2 p { font-size:13.5px; line-height:1.7; color:#6b7280; margin:0; }

    .btn-outline-purple {
        display:inline-flex; align-items:center; gap:8px;
        border:2px solid #6c63e0; color:#6c63e0;
        font-family:'Clash Display',sans-serif; font-weight:700; font-size:14px;
        padding:13px 28px; border-radius:50px; transition:all 0.3s; margin-top:10px;
    }
    .btn-outline-purple:hover { background:#6c63e0; color:white; transform:translateY(-2px); }
    .btn-outline-purple svg { width:14px;height:14px;stroke:currentColor;stroke-width:2.5;fill:none;transition:all 0.3s; }

    .tab-real-img {
        border-radius: 24px; overflow: hidden;
        box-shadow: 0 24px 70px rgba(108,99,224,0.15);
        position: relative;
    }
    .tab-real-img img { width:100%; height:420px; object-fit:cover; display:block; }
    .tab-real-img-badge {
        position:absolute; bottom:22px; right:22px;
        background:rgba(13,5,32,0.82); backdrop-filter:blur(10px);
        border:1px solid rgba(255,255,255,0.12);
        border-radius:14px; padding:14px 18px;
        display:flex; align-items:center; gap:12px;
    }
    .trib-dot { width:10px;height:10px;border-radius:50%;background:#22c55e;animation:pulse 1.5s infinite; }
    .trib-text strong { display:block;font-family:'Clash Display',sans-serif;font-size:14px;color:white; }
    .trib-text span { font-size:11px;color:rgba(255,255,255,0.5); }

    /* ══ NEW: PROCESS SECTION ══ */
    .process-section {
        padding: 120px 0;
        background: var(--grad-header);
        position: relative; overflow: hidden; z-index: 2;
    }
    .process-section::after { content:''; position:absolute; top:0; left:0; right:0; height:2px; background:var(--grad-main); }
    .process-section::before { content:''; position:absolute; inset:0; background: radial-gradient(ellipse at 80% 20%, rgba(224,64,251,0.12) 0%, transparent 55%), radial-gradient(ellipse at 15% 80%, rgba(6,182,212,0.1) 0%, transparent 50%); pointer-events:none; }
    .process-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; margin-top: 60px; position: relative; z-index: 1; }
    .process-img { border-radius: 28px; overflow: hidden; position: relative; }
    .process-img img { width: 100%; height: 520px; object-fit: cover; display: block; filter: brightness(0.85); }
    .process-img::after { content:''; position:absolute; inset:0; background:linear-gradient(135deg, rgba(124,58,237,0.3) 0%, rgba(6,182,212,0.15) 100%); }
    .process-steps { display: flex; flex-direction: column; gap: 28px; }
    .process-step {
        display: flex; gap: 22px; align-items: flex-start;
        padding: 26px 28px;
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 20px;
        transition: all 0.3s;
    }
    .process-step:hover { background: rgba(255,255,255,0.09); border-color: rgba(124,58,237,0.5); transform: translateX(8px); }
    .ps-num {
        font-family:'Clash Display',sans-serif; font-weight:700; font-size:32px;
        line-height:1; flex-shrink:0; min-width:48px;
        background: var(--grad-main); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;
    }
    .ps-body h4 { font-family:'Clash Display',sans-serif; font-size:18px; color:white; margin-bottom:8px; }
    .ps-body p { font-size:14px; line-height:1.75; color:rgba(255,255,255,0.55); }

    /* ══ NEW: STATS SECTION ══ */
    .stats-section {
        padding: 0;
        background: #ffffff;
        position: relative; z-index: 2;
    }
    .stats-img-wrap { position: relative; overflow: hidden; height: 420px; }
    .stats-img-wrap img { width: 100%; height: 100%; object-fit: cover; }
    .stats-img-wrap::after { content:''; position:absolute; inset:0; background: linear-gradient(to right, rgba(13,5,32,0.92) 40%, rgba(13,5,32,0.3) 100%); }
    .stats-content-over {
        position: absolute; inset: 0;
        display: flex; align-items: center;
        z-index: 2; padding: 0 80px;
    }
    .stats-inner { width: 100%; }
    .stats-inner .section-title { color: white; margin-bottom: 40px; }
    .stats-row { display: grid; grid-template-columns: repeat(4, 1fr); gap: 0; }
    .stat-item { padding: 0 40px 0 0; border-right: 1px solid rgba(255,255,255,0.12); }
    .stat-item:last-child { border-right: none; }
    .stat-num { font-family:'Clash Display',sans-serif; font-weight:700; font-size:52px; line-height:1; margin-bottom:8px; background:var(--grad-main); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text; }
    .stat-num sup { font-size:26px; }
    .stat-lbl { font-size:14px; color:rgba(255,255,255,0.5); font-weight:500; }

    /* ══ NEW: WHY US SECTION ══ */
    .why-section {
        padding: 120px 0;
        background: linear-gradient(135deg, #fdf8ff 0%, #fff8f0 60%, #f0f9ff 100%);
        position: relative; z-index: 2;
    }
    .why-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; }
    .why-img { border-radius: 28px; overflow: hidden; position: relative; box-shadow: 0 30px 80px rgba(124,58,237,0.15); }
    .why-img img { width: 100%; height: 500px; object-fit: cover; display: block; }
    .why-list { display: flex; flex-direction: column; gap: 22px; margin-top: 36px; }
    .why-item { display: flex; gap: 18px; align-items: flex-start; }
    .wi-icon { width:50px;height:50px;border-radius:15px;display:flex;align-items:center;justify-content:center;flex-shrink:0; }
    .wi-icon svg { width:22px;height:22px;stroke-width:2;fill:none; }
    .wii-p { background:rgba(124,58,237,0.1);border:1.5px solid rgba(124,58,237,0.2); }
    .wii-p svg { stroke:var(--purple); }
    .wii-o { background:rgba(249,115,22,0.1);border:1.5px solid rgba(249,115,22,0.2); }
    .wii-o svg { stroke:var(--orange); }
    .wii-t { background:rgba(6,182,212,0.1);border:1.5px solid rgba(6,182,212,0.2); }
    .wii-t svg { stroke:var(--teal); }
    .wii-g { background:rgba(16,185,129,0.1);border:1.5px solid rgba(16,185,129,0.2); }
    .wii-g svg { stroke:#10b981; }
    .wi-body h4 { font-family:'Clash Display',sans-serif; font-size:17px; color:var(--text-strong); margin-bottom:6px; }
    .wi-body p { font-size:14px; line-height:1.75; color:#6b7280; }

    /* ══ NEW: TEAM ══ */
    .team-section { padding: 120px 0; background:#ffffff; position: relative; z-index: 2; }
    .team-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; margin-top: 60px; }
    .team-card { background: white; border: 1.5px solid rgba(124,58,237,0.09); border-radius: 28px; overflow: hidden; transition: all 0.4s cubic-bezier(.4,0,.2,1); }
    .team-card:hover { transform:translateY(-10px); box-shadow:0 24px 60px rgba(124,58,237,.12); border-color:rgba(124,58,237,0.25); }
    .team-avatar { height: 220px; overflow: hidden; position: relative; }
    .team-avatar img { width:100%; height:100%; object-fit:cover; display:block; transition:transform 0.5s; }
    .team-card:hover .team-avatar img { transform:scale(1.06); }
    .team-overlay { position:absolute; inset:0; background:linear-gradient(to top, rgba(13,5,32,0.7) 0%, transparent 60%); opacity:0; transition:opacity 0.4s; }
    .team-card:hover .team-overlay { opacity:1; }
    .team-card-body { padding: 22px 24px 26px; }
    .team-card-body h4 { font-family:'Clash Display',sans-serif; font-size:18px; color:var(--text-strong); margin-bottom:5px; }
    .team-role { font-size:12px; font-weight:700; letter-spacing:1.5px; text-transform:uppercase; margin-bottom:12px; }
    .tr-1 { color:var(--purple); }
    .tr-2 { color:var(--orange); }
    .tr-3 { color:var(--teal); }
    .tr-4 { color:#10b981; }
    .team-card-body p { font-size:13.5px; line-height:1.7; color:#6b7280; }
    .team-socials { display:flex; gap:10px; margin-top:16px; }
    .team-social-btn { width:34px;height:34px;border-radius:10px;display:flex;align-items:center;justify-content:center;background:rgba(124,58,237,0.06);border:1.5px solid rgba(124,58,237,0.1);transition:all 0.3s; }
    .team-social-btn:hover { background:var(--grad-main); border-color:transparent; }
    .team-social-btn svg { width:14px;height:14px;stroke:var(--purple);stroke-width:2;fill:none;transition:stroke 0.3s; }
    .team-social-btn:hover svg { stroke:white; }

    /* ══ NEW: TOOLS/SKILLS SECTION ══ */
    .skills-section {
        padding: 120px 0;
        background: linear-gradient(135deg, #fdf8ff 0%, #fff8f0 60%, #f0f9ff 100%);
        position: relative; z-index: 2;
    }
    .skills-layout { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; }
    .skills-img { border-radius: 28px; overflow: hidden; box-shadow: 0 30px 80px rgba(124,58,237,0.12); }
    .skills-img img { width:100%;height:500px;object-fit:cover;display:block; }
    .skill-bar { margin-bottom: 24px; }
    .skill-bar-top { display:flex;justify-content:space-between;align-items:center;margin-bottom:10px; }
    .skill-name { display:flex;align-items:center;gap:9px;font-family:'Clash Display',sans-serif;font-weight:600;font-size:15px;color:var(--text-strong); }
    .skill-name svg { width:18px;height:18px;flex-shrink:0; }
    .skill-pct { font-family:'Clash Display',sans-serif;font-weight:700;font-size:14px;color:var(--purple); }
    .skill-track { height:10px;background:rgba(124,58,237,0.1);border-radius:10px;overflow:hidden; }
    .skill-fill { height:100%;border-radius:10px;width:var(--w);background:var(--grad-main);animation:barGrow 1.2s cubic-bezier(.4,0,.2,1) forwards; }
    .skill-fill.orange { background:var(--grad-warm); }
    .skill-fill.green { background:linear-gradient(135deg,#10b981,#06b6d4); }
    .skill-fill.cyan { background:linear-gradient(135deg,#06b6d4,#2563eb); }
    @keyframes barGrow { from{width:0} to{width:var(--w)} }

    /* ══ SCROLLING MARQUEE ══ */
    .scrolling-section { position:relative;overflow:hidden;padding:0;background:linear-gradient(135deg,#0d0520 0%,#130a35 40%,#0a1a40 70%,#0d0a2e 100%); }
    .scrolling-section::before { content:'';position:absolute;top:0;left:0;right:0;height:1px;background:var(--grad-main);opacity:0.5; }
    .scrolling-section::after { content:'';position:absolute;bottom:0;left:0;right:0;height:1px;background:var(--grad-main);opacity:0.5; }
    .marquee-fade-left, .marquee-fade-right { position:absolute;top:0;bottom:0;width:180px;z-index:2;pointer-events:none; }
    .marquee-fade-left { left:0;background:linear-gradient(to right,#0d0520 0%,transparent 100%); }
    .marquee-fade-right { right:0;background:linear-gradient(to left,#0d0a2e 0%,transparent 100%); }
    .scrolling-tracks-wrap { padding:0;overflow:hidden; }
    .scrolling-track-1 { display:flex;gap:0;padding:32px 0 20px;white-space:nowrap;animation:scrollLeft 30s linear infinite; }
    .scrolling-track-2 { display:flex;gap:0;padding:20px 0 32px;white-space:nowrap;animation:scrollRight 25s linear infinite; }
    @keyframes scrollLeft { from{transform:translateX(0)} to{transform:translateX(-50%)} }
    @keyframes scrollRight { from{transform:translateX(-50%)} to{transform:translateX(0)} }
    .scroll-item { display:inline-flex;align-items:center;gap:14px;flex-shrink:0;padding:0 8px; }
    .scroll-pill { display:inline-flex;align-items:center;gap:10px;padding:10px 24px;border-radius:50px;font-family:'Clash Display',sans-serif;font-weight:600;font-size:clamp(13px,1.6vw,16px);letter-spacing:0.5px;white-space:nowrap; }
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

    /* ══ NEW: AWARDS/RECOGNITION SECTION ══ */
    .awards-section {
        padding: 120px 0;
        background: var(--grad-header);
        position: relative; z-index: 2; overflow: hidden;
    }
    .awards-section::after { content:''; position:absolute; top:0; left:0; right:0; height:2px; background:var(--grad-main); }
    .awards-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; margin-top: 60px; position: relative; z-index: 1; }
    .awards-img { border-radius: 28px; overflow: hidden; position: relative; }
    .awards-img img { width:100%;height:480px;object-fit:cover;display:block;filter:brightness(0.8); }
    .awards-img::before { content:''; position:absolute; inset:0; background:linear-gradient(135deg, rgba(124,58,237,0.35) 0%, rgba(6,182,212,0.2) 100%); z-index:1; }
    .awards-list { display: flex; flex-direction: column; gap: 20px; }
    .award-item {
        display: flex; gap: 20px; align-items: flex-start;
        padding: 24px 26px;
        background: rgba(255,255,255,0.06);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 18px; transition: all 0.3s;
    }
    .award-item:hover { background: rgba(255,255,255,0.1); border-color: rgba(124,58,237,0.4); }
    .award-icon { width:48px;height:48px;border-radius:14px;background:var(--grad-main);display:flex;align-items:center;justify-content:center;flex-shrink:0; }
    .award-icon svg { width:22px;height:22px;stroke:white;stroke-width:2;fill:none; }
    .award-body h4 { font-family:'Clash Display',sans-serif;font-size:17px;color:white;margin-bottom:5px; }
    .award-body p { font-size:13.5px;line-height:1.7;color:rgba(255,255,255,0.5); }

    /* ══ TESTIMONIAL — original dark style ══ */
    .testimonial-section {
        padding: 120px 0;
        background: var(--grad-header);
        position: relative; overflow: hidden; z-index: 2;
    }
    .testimonial-section::before {
        content:''; position:absolute; inset:0;
        background:
            radial-gradient(ellipse at 80% 20%, rgba(224,64,251,0.15) 0%, transparent 55%),
            radial-gradient(ellipse at 15% 80%, rgba(249,115,22,0.1) 0%, transparent 50%);
        pointer-events:none;
    }
    .testimonial-section::after { content:''; position:absolute; top:0; left:0; right:0; height:2px; background:var(--grad-main); }
    .testimonial-section > .container { position:relative; z-index:2; }
    .testimonial-card {
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 32px;
        padding: 50px 50px;
        position: relative;
        max-width: 780px;
        margin: 60px auto 0;
    }
    .testimonial-quote {
        font-family:'Clash Display',sans-serif; font-size:120px; line-height:0.6;
        background: var(--grad-main);
        -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
        opacity: 0.3; margin-bottom: 8px; display:block;
    }
    .testimonial-text {
        font-family:'Manrope',sans-serif; font-size:18px; line-height:1.9;
        color: rgba(255,255,255,0.75); font-style: italic; margin-bottom: 32px;
    }
    .testimonial-author { display:flex; align-items:center; gap:16px; }
    .ta-avatar {
        width:50px; height:50px; border-radius:50%;
        background: var(--grad-main);
        display:flex; align-items:center; justify-content:center;
        font-family:'Clash Display',sans-serif; font-weight:700; font-size:18px; color:white; flex-shrink:0;
    }
    .ta-info h5 { font-family:'Clash Display',sans-serif; font-size:16px; color:white; margin-bottom:3px; }
    .ta-info span { font-size:13px; color:rgba(255,255,255,0.45); }

    /* ══ CTA BANNER ══ */
    .cta-section { padding: 120px 0; text-align:center; background: var(--grad-header); position:relative; overflow:hidden; z-index:2; }
    .cta-section::after { content:''; position:absolute; top:0; left:0; right:0; height:2px; background:var(--grad-main); }
    .cta-section::before { content:''; position:absolute; inset:0; background: radial-gradient(ellipse at 80% 20%, rgba(224,64,251,0.15) 0%, transparent 55%), radial-gradient(ellipse at 15% 80%, rgba(249,115,22,0.1) 0%, transparent 50%); pointer-events:none; }
    .cta-section > .container { position:relative; z-index:2; }
    .cta-section h2 { font-family:'Clash Display',sans-serif; font-size:clamp(28px,4vw,52px); color:white; letter-spacing:-0.5px; margin-bottom:18px; }
    .cta-section p { color:rgba(255,255,255,0.6); font-size:17px; line-height:1.8; max-width:580px; margin:0 auto 44px; }
    .cta-btns { display:flex; gap:16px; justify-content:center; flex-wrap:wrap; }
    .cta-img-row { display:grid; grid-template-columns:repeat(3,1fr); gap:20px; margin-top:60px; }
    .cta-img-row img { width:100%;height:180px;object-fit:cover;border-radius:18px;opacity:0.6; }

    /* ══ FAQ ══ */
    .faq-section-v2 { padding: 120px 0; background: linear-gradient(135deg, #fdf8ff 0%, #fff8f0 60%, #f0f9ff 100%); position: relative; z-index: 2; overflow: hidden; }
    .faq2-header { text-align: center; max-width: 560px; margin: 0 auto 64px; position: relative; z-index: 1; }
    .faq2-subtitle { font-size: 17px; line-height: 1.85; color: #6b7280; }
    .faq2-body { display: grid; grid-template-columns: 1fr 380px; gap: 50px; align-items: start; position: relative; z-index: 1; }
    .faq2-list { display: flex; flex-direction: column; gap: 12px; }
    .faq2-item { background: white; border: 1.5px solid rgba(124,58,237,0.09); border-radius: 20px; overflow: hidden; transition: all 0.3s; }
    .faq2-item:hover { border-color: rgba(124,58,237,0.25); }
    .faq2-item.open { border-color: rgba(124,58,237,0.4); background:rgba(124,58,237,0.03); }
    .faq2-question { padding: 22px 26px; display: flex; justify-content: space-between; align-items: center; cursor: pointer; user-select: none; gap: 16px; }
    .faq2-q-inner { display: flex; align-items: center; gap: 14px; font-family: 'Clash Display', sans-serif; font-weight: 600; font-size: 16px; color: var(--text-strong); flex: 1; }
    .faq2-num { font-family: 'Clash Display', sans-serif; font-weight: 700; font-size: 11px; letter-spacing: 1px; background: linear-gradient(135deg, #e040fb, #7c3aed); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; flex-shrink: 0; min-width: 22px; }
    .faq2-toggle { width: 36px; height: 36px; flex-shrink: 0; background: rgba(124,58,237,0.07); border: 1.5px solid rgba(124,58,237,0.15); border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.35s; }
    .faq2-toggle svg { width: 14px; height: 14px; stroke: var(--purple); stroke-width: 2.5; transition: all 0.35s; }
    .faq2-item.open .faq2-toggle { background: var(--grad-main); border-color: transparent; transform: rotate(45deg); }
    .faq2-item.open .faq2-toggle svg { stroke: white; }
    .faq2-answer { max-height: 0; overflow: hidden; transition: max-height 0.4s ease, padding 0.3s; font-size: 15px; line-height: 1.85; color: #6b7280; padding: 0 26px 0 62px; }
    .faq2-item.open .faq2-answer { max-height: 300px; padding: 0 26px 24px 62px; }
    .faq2-side { display: flex; flex-direction: column; gap: 20px; }
    .faq2-cta-card { background: var(--grad-header); border: 1.5px solid rgba(255,255,255,0.1); border-radius: 28px; padding: 40px 36px; position: relative; overflow: hidden; }
    .faq2-cta-card::before { content: ''; position: absolute; inset: 0; background: radial-gradient(ellipse at 80% 10%, rgba(124,58,237,0.4) 0%, transparent 60%); pointer-events: none; }
    .faq2-cta-card::after { content:''; position:absolute; top:0; left:0; right:0; height:2px; background:var(--grad-main); }
    .faq2-cta-card > * { position: relative; z-index: 1; }
    .faq2-cta-icon { width: 54px; height: 54px; background: var(--grad-main); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; box-shadow: 0 8px 30px rgba(124,58,237,0.4); }
    .faq2-cta-icon svg { width: 24px; height: 24px; }
    .faq2-cta-title { font-family: 'Clash Display', sans-serif; font-weight: 700; font-size: 22px; color: white; margin-bottom: 10px; }
    .faq2-cta-desc { font-size: 14px; line-height: 1.75; color: rgba(255,255,255,0.5); margin-bottom: 28px; }
    .faq2-cta-btn { display: flex; align-items: center; justify-content: center; gap: 10px; background: linear-gradient(135deg, #25D366, #128C7E); color: white; font-family: 'Clash Display', sans-serif; font-weight: 700; font-size: 14px; padding: 14px 24px; border-radius: 50px; text-decoration: none; transition: all 0.3s; box-shadow: 0 4px 20px rgba(37,211,102,0.35); margin-bottom: 12px; }
    .faq2-cta-btn:hover { transform: translateY(-2px); box-shadow: 0 8px 30px rgba(37,211,102,0.5); }
    .faq2-cta-btn-outline { display: flex; align-items: center; justify-content: center; gap: 10px; background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.15); color: rgba(255,255,255,0.75); font-family: 'Clash Display', sans-serif; font-weight: 600; font-size: 14px; padding: 13px 24px; border-radius: 50px; text-decoration: none; transition: all 0.3s; }
    .faq2-cta-btn-outline:hover { background: rgba(255,255,255,0.12); color: white; transform: translateY(-2px); }
    .faq2-stats { background: white; border: 1.5px solid rgba(124,58,237,0.12); border-radius: 24px; padding: 30px 28px; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 8px 40px rgba(124,58,237,0.07); }
    .faq2-stat { text-align: center; flex: 1; }
    .faq2-stat-num { font-family:'Clash Display',sans-serif; font-weight:700; font-size:30px; line-height:1; margin-bottom:6px; }
    .faq2-stat-num sup { font-size:16px; }
    .faq2-stat-lbl { font-size:11px; font-weight:600; color:var(--muted); letter-spacing:0.3px; }
    .faq2-stat-divider { width:1px; height:48px; background:rgba(124,58,237,0.12); flex-shrink:0; }

    /* ══ BACK TO TOP ══ */
    #back-to-top { position:fixed;bottom:40px;left:40px;width:52px;height:52px;background:var(--grad-main);color:white;border:none;border-radius:15px;cursor:pointer;display:none;align-items:center;justify-content:center;box-shadow:0 4px 25px rgba(124,58,237,.4);z-index:999;transition:all .3s;font-size:20px; }
    #back-to-top.visible { display:flex; }
    #back-to-top:hover { transform:translateY(-4px);box-shadow:0 8px 40px rgba(124,58,237,.55); }

    /* ══ RESPONSIVE ══ */
    @media(max-width:1100px){ .faq2-body { grid-template-columns: 1fr 300px; gap:36px; } }
    @media(max-width:992px){
        .about-intro-grid,.process-grid,.why-grid,.skills-layout,.awards-grid,.testimonial-grid,.mission-grid { grid-template-columns:1fr; gap:50px; }
        .values-grid { grid-template-columns:repeat(2,1fr); }
        .team-grid { grid-template-columns:repeat(2,1fr); }
        .faq2-body { grid-template-columns: 1fr; }
        .faq2-side { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
        .stats-content-over { padding: 0 40px; }
        .stats-row { grid-template-columns: repeat(2,1fr); gap:30px; }
        .stat-item { border-right:none; }
        .cta-img-row { grid-template-columns:1fr 1fr; }
        .hero-img-strip { grid-template-columns:1fr 1fr; }
        .hero-img-strip img.center { height:260px; }
    }
    @media(max-width:768px){
        .values-grid { grid-template-columns:1fr; }
        .team-grid { grid-template-columns:1fr 1fr; }
        .cta-btns { flex-direction:column; align-items:center; }
        .cta-img-row { grid-template-columns:1fr; }
        .stats-img-wrap { height: auto; }
        .stats-img-wrap img { height:600px; }
        .stats-content-over { padding:60px 32px; position:relative; }
        .stats-row { grid-template-columns:repeat(2,1fr); }
        .hero-img-strip { display:none; }
        .page-hero .hero-content { padding-bottom:80px; }
    }
    @media(max-width:600px){
        .team-grid { grid-template-columns:1fr; }
        .faq2-side { grid-template-columns: 1fr; }
        .faq2-q-inner { font-size: 14.5px; }
        .faq2-answer { padding: 0 20px 0 50px; }
        .faq2-item.open .faq2-answer { padding: 0 20px 20px 50px; }
        #back-to-top { bottom:20px;left:20px; }
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
            Digital Marketing Agency
        </div>
        <h1>About Our Company—Driven by Passion, Built on Trust</h1>
        <p class="ph-desc">We're more than a digital agency — we're a team that believes in purpose, partnership, and performance. Learn the 3 things clients love about our company.</p>
        <a href="contact.php" class="btn-grad">
            Contact Us
            <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
    </div>
  
</section>

<!-- ══ ABOUT INTRO ══ -->
<section class="about-intro-section">
    <div class="container">
        <div class="about-intro-grid">
            <div class="about-intro-left">
                <div class="section-label" style="color:#7c3aed">
                    <span class="sl-dot"><span></span><span></span><span></span></span>
                    About Us
                </div>
                <h2 class="section-title">Learn All About <span class="grad-text">
Virex Social</span></h2>
                <p>We're more than a digital agency — we're a team that believes in purpose, partnership, and performance. Our clients love us for 3 key reasons: we listen, we innovate, and we deliver.</p>
                <p>At 
Virex Social, we create digital experiences that excite and inspire. Every project is unique — our team uses fresh ideas and the latest tools to make your brand stand out. From sleek designs to full marketing strategies, we help businesses of all sizes bring their vision to life.</p>
                <a href="contact.php" class="btn-grad">
                    Contact Us
                    <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>
            <div class="about-intro-right">
                <div class="about-intro-img">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=900&q=80" alt="
Virex Social Office">
                    <div class="about-intro-img-badge">
                        <div class="aib-icon">
                            <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══ VALUES / MISSION TABS ══ -->
<section class="about-tabs-section">
    <div class="tabs-bg-dots">
        <span style="top:8%;left:3%;background:#6c63e0;opacity:0.5;"></span>
        <span style="top:15%;left:18%;background:#f97316;opacity:0.4;width:5px;height:5px;"></span>
        <span style="top:5%;right:10%;background:#fbbf24;opacity:0.6;"></span>
        <span style="top:30%;right:3%;background:#06b6d4;opacity:0.45;width:6px;height:6px;"></span>
        <span style="bottom:10%;left:8%;background:#e040fb;opacity:0.4;"></span>
        <span style="bottom:20%;right:12%;background:#f97316;opacity:0.5;width:5px;height:5px;"></span>
        <span style="top:50%;left:1%;background:#22c55e;opacity:0.4;width:5px;height:5px;"></span>
        <span style="top:70%;right:5%;background:#6c63e0;opacity:0.35;"></span>
    </div>
    <div class="container">
        <div class="tabs-header">
            <div class="section-label" style="color:#7c3aed; justify-content:center;">
                <span class="sl-dot"><span></span><span></span><span></span></span>
                Driven by Purpose
            </div>
            <h2 class="section-title">Empowering Brands<br>in the <span class="grad-text">Digital Age</span></h2>
            <p style="font-size:16px;line-height:1.8;color:#6b7280;max-width:560px;margin:0 auto;">When you learn about our company, you'll see we blend creativity, strategy, and technology to help brands connect with people, build trust, and get real results.</p>
        </div>

        <!-- Tab buttons — exactly like screenshot -->
        <div class="tab-switcher-wrap">
            <div class="tab-switcher-row">
                <button class="tab-btn-v2 active" onclick="switchTabV2('values', this)">
                    <div class="tbc-box">
                        <!-- Chess/Strategy icon -->
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 6h6M9 18h6M10 4h4M10 20h4M12 4v2M12 18v2M8 10h8M8 14h8M7 10v4M17 10v4"/>
                        </svg>
                        <span class="tbc-label">Our Values</span>
                    </div>
                    <div class="tbc-arrow"></div>
                </button>

                <div class="tab-switcher-gap"></div>

                <button class="tab-btn-v2 tab-orange" onclick="switchTabV2('mission', this)">
                    <div class="tbc-box">
                        <!-- Analytics/Chart icon -->
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2"/>
                            <path d="M8 21h8M12 17v4"/>
                            <polyline points="7 10 10 7 13 10 17 6"/>
                            <circle cx="17" cy="6" r="1.5" fill="currentColor"/>
                        </svg>
                        <span class="tbc-label">Our Mission</span>
                    </div>
                    <div class="tbc-arrow"></div>
                </button>
            </div>
        </div>

        <!-- VALUES PANEL -->
        <div class="tab-panel-v2 active" id="tabv2-values">
            <div class="tab-content-grid-v2">
                <div class="tab-text-v2">
                    <h3>Building Digital Experiences That Drive Results</h3>
                    <p>At 
Virex Social, our core values guide everything we do. From how we treat our clients to how we approach every campaign — integrity, innovation, and impact are at the heart of it all.</p>
                    <div class="tab-point-v2">
                        <div class="tpv-icon tpv-purple">
                            <svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                        </div>
                        <div>
                            <strong>Client First, Always</strong>
                            <p>We put our clients first. Your goals guide every step of our strategy and creative process.</p>
                        </div>
                    </div>
                    <div class="tab-point-v2">
                        <div class="tpv-icon tpv-orange">
                            <svg viewBox="0 0 24 24"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/><line x1="2" y1="20" x2="22" y2="20"/></svg>
                        </div>
                        <div>
                            <strong>Results Over Everything</strong>
                            <p>We use data and insights to make better choices and deliver measurable, meaningful outcomes.</p>
                        </div>
                    </div>
                    <div class="tab-point-v2">
                        <div class="tpv-icon tpv-green">
                            <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        </div>
                        <div>
                            <strong>Constant Innovation</strong>
                            <p>We stay current with the latest tools and trends so your brand always stays a step ahead.</p>
                        </div>
                    </div>
                    <a href="services.php" class="btn-outline-purple">
                        View Our Services
                        <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
                <div class="tab-real-img">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=900&q=80" alt="Our Values — team at work">
                    <div class="tab-real-img-badge">
                        <div class="trib-dot"></div>
                        <div class="trib-text">
                            <strong>Client Satisfaction</strong>
                            <span>98% retention rate</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MISSION PANEL -->
        <div class="tab-panel-v2" id="tabv2-mission">
            <div class="tab-content-grid-v2">
                <div class="tab-real-img">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=900&q=80" alt="Our Mission — digital team">
                    <div class="tab-real-img-badge">
                        <div class="trib-dot" style="background:#f97316;"></div>
                        <div class="trib-text">
                            <strong>10+ Years Strong</strong>
                            <span>UAE's leading digital agency</span>
                        </div>
                    </div>
                </div>
                <div class="tab-text-v2">
                    <h3>Do You Know About Our Company?</h3>
                    <p>We are 
Virex Social. We help brands grow, connect, and inspire. Our mission is simple — help businesses achieve digital success through creative thinking and smart execution.</p>
                    <div class="tab-point-v2">
                        <div class="tpv-icon tpv-purple">
                            <svg viewBox="0 0 24 24"><path d="M22 17H2a3 3 0 0 0 3-3V9a7 7 0 0 1 14 0v5a3 3 0 0 0 3 3zm-8.27 4a2 2 0 0 1-3.46 0"/></svg>
                        </div>
                        <div>
                            <strong>Future-Ready Solutions</strong>
                            <p>We push creative and tech limits to deliver smart, future-ready digital solutions for every client.</p>
                        </div>
                    </div>
                    <div class="tab-point-v2">
                        <div class="tpv-icon tpv-orange">
                            <svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                        </div>
                        <div>
                            <strong>Real Human Connections</strong>
                            <p>We tell real stories that build authentic human connections between brands and their audiences.</p>
                        </div>
                    </div>
                    <div class="tab-point-v2">
                        <div class="tpv-icon tpv-green">
                            <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                        </div>
                        <div>
                            <strong>Global Impact</strong>
                            <p>We aim to be the region's leading digital agency and grow our influence worldwide.</p>
                        </div>
                    </div>
                    <a href="services.php" class="btn-outline-purple" style="border-color:#f97316;color:#f97316;">
                        View Our Services
                        <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- ══ WHY CHOOSE US (NEW SECTION) ══ -->
<section class="why-section">
    <div class="container">
        <div class="why-grid">
            <div>
                <div class="section-label" style="color:#7c3aed">
                    <span class="sl-dot"><span></span><span></span><span></span></span>
                    Why Choose Us
                </div>
                <h2 class="section-title">What Makes <span class="grad-text">Us Different</span></h2>
                <p style="font-size:16px;line-height:1.85;color:#6b7280;margin-bottom:10px;">In a crowded market, 
Virex Social stands out because we combine creative passion with data-driven precision. We don't just run campaigns — we build relationships and long-term growth engines for your brand.</p>
                <div class="why-list">
                    <div class="why-item">
                        <div class="wi-icon wii-p">
                            <svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                        </div>
                        <div class="wi-body">
                            <h4>Client-First Philosophy</h4>
                            <p>Your success is our success. Every decision we make is guided by your goals, your audience, and your vision.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="wi-icon wii-o">
                            <svg viewBox="0 0 24 24"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/><line x1="2" y1="20" x2="22" y2="20"/></svg>
                        </div>
                        <div class="wi-body">
                            <h4>Measurable Results</h4>
                            <p>We track every metric and report transparently. No fluff — just real data showing what's working and what's growing.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="wi-icon wii-t">
                            <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                        </div>
                        <div class="wi-body">
                            <h4>Always Up-to-Date</h4>
                            <p>Digital moves fast. Our team stays ahead of algorithm changes, platform updates, and industry trends so you never fall behind.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="wi-icon wii-g">
                            <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                        </div>
                        <div class="wi-body">
                            <h4>Global Reach, Local Expertise</h4>
                            <p>We understand the UAE market deeply while having the skills and tools to scale your brand to a worldwide audience.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="why-img">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=900&q=80" alt="Why choose 
Virex Social">
            </div>
        </div>
    </div>
</section>

<!-- ══ SKILLS (EXISTING SECTION WITH REAL IMAGE) ══ -->
<section class="skills-section">
    <div class="container">
        <div class="skills-layout">
            <div class="skills-img">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=900&q=80" alt="Our digital skills">
            </div>
            <div>
                <div class="section-label" style="color:#7c3aed">
                    <span class="sl-dot"><span></span><span></span><span></span></span>
                    Our Expertise
                </div>
                <h2 class="section-title">Skills That Make<br>the <span class="grad-text">Difference</span></h2>
                <p style="font-size:16px;line-height:1.85;color:#6b7280;margin-bottom:36px;">We combine technical expertise with creative thinking. Every skill we have is sharpened to give your brand a competitive edge in the digital world.</p>

                <div class="skill-bar">
                    <div class="skill-bar-top">
                        <div class="skill-name">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#6254e7" stroke-width="2"><circle cx="13.5" cy="6.5" r=".5" fill="#6254e7"/><circle cx="17.5" cy="10.5" r=".5" fill="#6254e7"/><circle cx="8.5" cy="7.5" r=".5" fill="#6254e7"/><circle cx="6.5" cy="12.5" r=".5" fill="#6254e7"/><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z"/></svg>
                            Creative & Design Tools
                        </div>
                        <div class="skill-pct">99%</div>
                    </div>
                    <div class="skill-track"><div class="skill-fill" style="--w:99%"></div></div>
                </div>
                <div class="skill-bar">
                    <div class="skill-bar-top">
                        <div class="skill-name">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#ff7426" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            Email Marketing
                        </div>
                        <div class="skill-pct">89%</div>
                    </div>
                    <div class="skill-track"><div class="skill-fill orange" style="--w:89%"></div></div>
                </div>
                <div class="skill-bar">
                    <div class="skill-bar-top">
                        <div class="skill-name">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                            SEO & Web Performance
                        </div>
                        <div class="skill-pct">92%</div>
                    </div>
                    <div class="skill-track"><div class="skill-fill green" style="--w:92%"></div></div>
                </div>
                <div class="skill-bar">
                    <div class="skill-bar-top">
                        <div class="skill-name">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#6254e7" stroke-width="2"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>
                            Social Media Strategy
                        </div>
                        <div class="skill-pct">95%</div>
                    </div>
                    <div class="skill-track"><div class="skill-fill" style="--w:95%"></div></div>
                </div>
                <div class="skill-bar">
                    <div class="skill-bar-top">
                        <div class="skill-name">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#06b6d4" stroke-width="2"><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/></svg>
                            Video & Content Creation
                        </div>
                        <div class="skill-pct">88%</div>
                    </div>
                    <div class="skill-track"><div class="skill-fill cyan" style="--w:88%"></div></div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- ══ TESTIMONIAL ══ -->
<section class="testimonial-section">
    <div class="container">
        <div class="section-label" style="color:#7c3aed">
            <span class="sl-dot"><span></span><span></span><span></span></span>
            Testimonials
        </div>
        <h2 class="section-title1">What Our <span class="grad-text">Clients Say</span></h2>
        <div class="testimonial-grid">
           
            <div class="testimonial-card">
                <span class="testimonial-quote">"</span>
                <p class="testimonial-text">The team at 
Virex Social turned our vision into a brand that truly connects with our audience. From logo design to content strategy, everything was done with care and delivered on time. Our online sales jumped 3x within 6 months!</p>
                <div class="testimonial-author">
                    <div class="ta-avatar">T</div>
                    <div class="ta-info">
                        <h5>Tommy Dents</h5>
                        <span>CEO, RetailPro Dubai</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══ FAQ ══ -->
<section class="faq-section-v2">
    <div class="container">
        <div class="faq2-header">
            <div class="section-label" style="color:#f97316; justify-content:center;">
                <span class="sl-dot"><span></span><span></span><span></span></span>
                FAQ
            </div>
            <h2 class="section-title">Most Popular <span class="grad-text">Questions</span></h2>
            <p class="faq2-subtitle">Have questions about 
Virex Social? We've got answers.</p>
        </div>
        <div class="faq2-body">
            <div class="faq2-list">
                <div class="faq2-item open">
                    <div class="faq2-question" onclick="toggleFaq2(this)">
                        <div class="faq2-q-inner"><span class="faq2-num">01</span><span>What services does 
Virex Social offer?</span></div>
                        <div class="faq2-toggle"><svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></div>
                    </div>
                    <div class="faq2-answer">We provide many digital services — branding, social media marketing, website design, SEO, content writing, paid ads, and event coverage. We help your business grow online.</div>
                </div>
                <div class="faq2-item">
                    <div class="faq2-question" onclick="toggleFaq2(this)">
                        <div class="faq2-q-inner"><span class="faq2-num">02</span><span>How do I get started with 
Virex Social?</span></div>
                        <div class="faq2-toggle"><svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></div>
                    </div>
                    <div class="faq2-answer">Contact us by form, email, or WhatsApp. We will talk with you, understand your goals, and suggest the best plan for your business.</div>
                </div>
                <div class="faq2-item">
                    <div class="faq2-question" onclick="toggleFaq2(this)">
                        <div class="faq2-q-inner"><span class="faq2-num">03</span><span>Can you design and build custom websites?</span></div>
                        <div class="faq2-toggle"><svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></div>
                    </div>
                    <div class="faq2-answer">Yes. We create modern, mobile-friendly websites — from small landing pages to full e-commerce or business sites.</div>
                </div>
                <div class="faq2-item">
                    <div class="faq2-question" onclick="toggleFaq2(this)">
                        <div class="faq2-q-inner"><span class="faq2-num">04</span><span>Do you manage social media for all platforms?</span></div>
                        <div class="faq2-toggle"><svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></div>
                    </div>
                    <div class="faq2-answer">Yes. We make and manage content for Instagram, Facebook, LinkedIn, TikTok, YouTube, and more — all tailored to your brand voice.</div>
                </div>
                <div class="faq2-item">
                    <div class="faq2-question" onclick="toggleFaq2(this)">
                        <div class="faq2-q-inner"><span class="faq2-num">05</span><span>What industries do you work with?</span></div>
                        <div class="faq2-toggle"><svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></div>
                    </div>
                    <div class="faq2-answer">We work with many fields — fashion, food, real estate, tech, hospitality, healthcare, e-commerce, and more. Every industry welcome.</div>
                </div>
            </div>
            <div class="faq2-side">
                <div class="faq2-cta-card">
                    <div class="faq2-cta-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                    </div>
                    <h3 class="faq2-cta-title">Still have questions?</h3>
                    <p class="faq2-cta-desc">Can't find the answer you're looking for? Our team is ready to help within 2 hours.</p>
                    <a href="https://wa.me/971000000000" target="_blank" class="faq2-cta-btn">
                        <svg viewBox="0 0 24 24" fill="white" width="18" height="18"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        Chat on WhatsApp
                    </a>
                    <a href="mailto:contact@hashtagmedia.ae" class="faq2-cta-btn-outline">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" width="18" height="18"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        Send an Email
                    </a>
                </div>
                <div class="faq2-stats">
                    <div class="faq2-stat">
                        <div class="faq2-stat-num grad-text">1,200<sup>+</sup></div>
                        <div class="faq2-stat-lbl">Happy Clients</div>
                    </div>
                    <div class="faq2-stat-divider"></div>
                    <div class="faq2-stat">
                        <div class="faq2-stat-num grad-text-warm">10<sup>+</sup></div>
                        <div class="faq2-stat-lbl">Years Exp.</div>
                    </div>
                    <div class="faq2-stat-divider"></div>
                    <div class="faq2-stat">
                        <div class="faq2-stat-num grad-text">50<sup>+</sup></div>
                        <div class="faq2-stat-lbl">Experts</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══ BACK TO TOP ══ -->
<button id="back-to-top" onclick="window.scrollTo({top:0,behavior:'smooth'})">↑</button>

<script>
/* ── Tab Switcher Fix ── */
function switchTabV2(tabName, clickedBtn) {
  /* 1. Saare panels hide karo */
  document.querySelectorAll('.tab-panel-v2').forEach(function(p) {
    p.classList.remove('active');
  });

  /* 2. Saare buttons se active class hatao */
  document.querySelectorAll('.tab-btn-v2').forEach(function(b) {
    b.classList.remove('active');
  });

  /* 3. Selected panel show karo */
  var panel = document.getElementById('tabv2-' + tabName);
  if (panel) panel.classList.add('active');

  /* 4. Clicked button ko active karo */
  if (clickedBtn) clickedBtn.classList.add('active');
}

/* ── FAQ Toggle ── */
function toggleFaq2(q) {
  var item = q.parentElement;
  var isOpen = item.classList.contains('open');
  document.querySelectorAll('.faq2-item.open').forEach(function(i) {
    i.classList.remove('open');
  });
  if (!isOpen) item.classList.add('open');
}

/* ── Scrolling Marquee Builder ── */
(function() {
  var t1 = [
    {text:'Passion & Purpose', style:'b', icon:'<svg viewBox="0 0 24 24" fill="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" stroke="currentColor" stroke-width="2"/></svg>'},
    {text:'Creative Strategies', style:'d', icon:'<svg viewBox="0 0 24 24" fill="none"><path d="M12 20h9" stroke="currentColor" stroke-width="2"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z" stroke="currentColor" stroke-width="2"/></svg>'},
    {text:'Client-First Approach', style:'e', icon:'<svg viewBox="0 0 24 24" fill="none"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" stroke="currentColor" stroke-width="2"/></svg>'},
    {text:'Data-Driven Results', style:'c', icon:'<svg viewBox="0 0 24 24" fill="none"><line x1="18" y1="20" x2="18" y2="10" stroke="currentColor" stroke-width="2"/><line x1="12" y1="20" x2="12" y2="4" stroke="currentColor" stroke-width="2"/><line x1="6" y1="20" x2="6" y2="14" stroke="currentColor" stroke-width="2"/></svg>'},
    {text:'10+ Years Experience', style:'a', icon:'<svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><polyline points="12 6 12 12 16 14" stroke="currentColor" stroke-width="2"/></svg>'},
    {text:'1,200+ Happy Clients', style:'b', icon:'<svg viewBox="0 0 24 24" fill="none"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2"/><circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2"/></svg>'},
    {text:"UAE's Leading Agency", style:'d', icon:'<svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><line x1="2" y1="12" x2="22" y2="12" stroke="currentColor" stroke-width="2"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" stroke="currentColor" stroke-width="2"/></svg>'},
    {text:'Full-Service Digital', style:'e', icon:'<svg viewBox="0 0 24 24" fill="none"><rect x="2" y="3" width="20" height="14" rx="2" stroke="currentColor" stroke-width="2"/><line x1="8" y1="21" x2="16" y2="21" stroke="currentColor" stroke-width="2"/></svg>'}
  ];
  var t2 = [
    {text:'Brand Identity', style:'c', icon:'<svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/></svg>'},
    {text:'Social Media', style:'b', icon:'<svg viewBox="0 0 24 24" fill="none"><circle cx="18" cy="5" r="3" stroke="currentColor" stroke-width="2"/><circle cx="6" cy="12" r="3" stroke="currentColor" stroke-width="2"/><circle cx="18" cy="19" r="3" stroke="currentColor" stroke-width="2"/></svg>'},
    {text:'SEO & Growth', style:'a', icon:'<svg viewBox="0 0 24 24" fill="none"><circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/><line x1="21" y1="21" x2="16.65" y2="16.65" stroke="currentColor" stroke-width="2"/></svg>'},
    {text:'Web Development', style:'d', icon:'<svg viewBox="0 0 24 24" fill="none"><polyline points="16 18 22 12 16 6" stroke="currentColor" stroke-width="2"/><polyline points="8 6 2 12 8 18" stroke="currentColor" stroke-width="2"/></svg>'},
    {text:'Video Editing', style:'e', icon:'<svg viewBox="0 0 24 24" fill="none"><polygon points="23 7 16 12 23 17 23 7" stroke="currentColor" stroke-width="2"/><rect x="1" y="5" width="15" height="14" rx="2" stroke="currentColor" stroke-width="2"/></svg>'},
    {text:'App Development', style:'b', icon:'<svg viewBox="0 0 24 24" fill="none"><rect x="5" y="2" width="14" height="20" rx="2" stroke="currentColor" stroke-width="2"/></svg>'},
    {text:'Paid Advertising', style:'c', icon:'<svg viewBox="0 0 24 24" fill="none"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18" stroke="currentColor" stroke-width="2"/></svg>'},
    {text:'Content Creation', style:'a', icon:'<svg viewBox="0 0 24 24" fill="none"><path d="M12 20h9" stroke="currentColor" stroke-width="2"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4z" stroke="currentColor" stroke-width="2"/></svg>'}
  ];
  function buildTrack(items, id) {
    var el = document.getElementById(id);
    if (!el) return;
    var doubled = items.concat(items);
    var html = doubled.map(function(item) {
      return '<div class="scroll-item"><div class="scroll-pill style-' + item.style + '"><div class="scroll-pill-icon">' + item.icon + '</div>' + item.text + '</div></div><span class="scroll-sep-star">✦</span>';
    }).join('');
    el.innerHTML = html;
  }
  buildTrack(t1, 'scrollTrack1');
  buildTrack(t2, 'scrollTrack2');
})();

/* ── Back to Top ── */
window.addEventListener('scroll', function() {
  var btn = document.getElementById('back-to-top');
  if (!btn) return;
  if (window.scrollY > 400) btn.classList.add('visible');
  else btn.classList.remove('visible');
});
</script>
<?php include 'includes/virex-floating-social.php'; ?>
<?php include 'includes/footer.php'; ?>