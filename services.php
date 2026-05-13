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

    /* ══ SECTION COMMONS ══ */
    .section-label { display:inline-flex; align-items:center; gap:9px; font-family:'Manrope',sans-serif; font-weight:700; font-size:11px; letter-spacing:3px; text-transform:uppercase; margin-bottom:14px; color:var(--purple); }
    .section-label .sl-dot { display:flex; gap:3px; }
    .section-label .sl-dot span { width:5px;height:5px;border-radius:50%;background:currentColor;animation:dotBlink 1.5s infinite; }
    .section-label .sl-dot span:nth-child(2) { animation-delay:0.2s; }
    .section-label .sl-dot span:nth-child(3) { animation-delay:0.4s; }
    @keyframes dotBlink { 0%,100%{opacity:0.3} 50%{opacity:1} }
    .section-title { font-family:'Clash Display',sans-serif; font-size:clamp(28px,4.2vw,50px); line-height:1.12; margin-bottom:18px; letter-spacing:-0.5px; color:var(--text-strong); }
    .section-desc { font-size:17px; line-height:1.85; color:#6b7280; max-width:520px; margin-bottom:60px; }

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

/* Soft floating color layers */
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

/* Top gradient line */
.page-hero::after {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    background: var(--grad-main);
    z-index: 5;
}

/* Floating orbs (soft glass style) */
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

/* Content wrapper */
.page-hero .hero-content {
    position: relative;
    z-index: 10;
}

/* Badge (glass + navbar style match) */
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

/* Title (dark text for light UI) */
.page-hero h1 {
    font-family: 'Plus Jakarta Sans', 'Clash Display', sans-serif;
    font-size: clamp(26px, 4vw, 45px);
    line-height: 1.1;
    letter-spacing: -1px;

    color: var(--text-strong);
    margin-bottom: 22px;
}

/* Description (soft readable gray) */
.page-hero p.ph-desc {
    color: var(--text-mid);
    font-size: 17px;
    line-height: 1.85;
    max-width: 820px;
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

    /* Hero top navbar line */
    .page-hero::after {
        content: '';
        position: absolute; top: 0; left: 0; right: 0; height: 2px;
        background: var(--grad-main); z-index: 20;
    }

    /* Hero stats bar */
    .hero-stats-bar {
        display: flex; justify-content: center; gap: 0;
        margin-top: 60px; position: relative; z-index: 10;
        flex-wrap: wrap;
    }
    .hsb-item {
        display: flex; flex-direction: column; align-items: center;
        padding: 0 48px;
        border-right: 1px solid rgba(255,255,255,0.1);
    }
    .hsb-item:last-child { border-right: none; }
    .hsb-num {
        font-family:'Clash Display',sans-serif; font-weight:700; font-size:40px;
        line-height:1; background: var(--grad-main);
        -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;
    }
    .hsb-num sup { font-size:20px; }
    .hsb-lbl { font-size:12px; color:rgba(255,255,255,0.5); margin-top:6px; font-weight:500; }

    /* ══ WHY US ══ */
    .why-section { padding:120px 0 100px; background:#ffffff; position:relative; z-index:2; }
    .why-grid { display:grid; grid-template-columns:repeat(4,1fr); gap:22px; margin-top:60px; }
    .why-card {
        background:#fafafa; border:1.5px solid rgba(124,58,237,0.09); border-radius:28px;
        padding:38px 28px; transition:all 0.45s cubic-bezier(.4,0,.2,1);
        position:relative; overflow:hidden; cursor:default;
    }
    .why-card::before { content:''; position:absolute; top:0; left:0; width:3px; height:100%; background:var(--grad-main); border-radius:3px 0 0 3px; transform:scaleY(0); transition:transform 0.4s; }
    .why-card:hover { transform:translateY(-10px); box-shadow:0 24px 60px rgba(124,58,237,.12); border-color:rgba(124,58,237,0.28); }
    .why-card:hover::before { transform:scaleY(1); }
    .why-num { font-family:'Clash Display',sans-serif; font-weight:700; font-size:60px; line-height:1; margin-bottom:14px; background:var(--grad-main); -webkit-background-clip:text; -webkit-text-fill-color:transparent; opacity:0.1; }
    .why-card h3 { font-family:'Clash Display',sans-serif; font-size:19px; color:var(--text-strong); margin-bottom:12px; }
    .why-card p { font-size:14px; line-height:1.8; color:#6b7280; }

    /* ══ SERVICES GRID ══ */
    .svc-section { padding:120px 0; background:linear-gradient(135deg, #fdf8ff 0%, #fff8f0 60%, #f0f9ff 100%); position:relative; z-index:2; }
    .svc-section::before {
        content:''; position:absolute; inset:0;
        background: radial-gradient(ellipse at 80% 20%, rgba(224,64,251,0.05) 0%, transparent 50%),
                    radial-gradient(ellipse at 10% 80%, rgba(249,115,22,0.04) 0%, transparent 50%);
        pointer-events:none;
    }
    .svc-cols { display:grid; grid-template-columns:repeat(3,1fr); gap:40px; position:relative; z-index:1; }
    .svc-col-label {
        display:block; font-family:'Manrope',sans-serif; font-weight:700;
        font-size:10px; letter-spacing:3px; text-transform:uppercase;
        color:var(--purple); margin-bottom:28px; padding-bottom:14px;
        border-bottom:2px solid rgba(124,58,237,0.12);
    }
    .svc-item {
        display:flex; align-items:flex-start; gap:18px;
        padding:24px 0; border-bottom:1px solid rgba(124,58,237,0.08);
        transition:all 0.3s; cursor:default; position:relative;
    }
    .svc-item:last-child { border-bottom:none; }
    .svc-item:hover { padding-left:8px; }
    .svc-item::before { content:''; position:absolute; left:0; top:0; bottom:0; width:2px; background:var(--grad-main); transform:scaleY(0); transition:transform 0.3s; border-radius:2px; }
    .svc-item:hover::before { transform:scaleY(1); }
    .svc-icon-wrap {
        width:54px; height:54px; border-radius:16px;
        display:flex; align-items:center; justify-content:center;
        flex-shrink:0; transition:all 0.35s;
    }
    .svc-icon-wrap svg { width:24px; height:24px; stroke-width:1.7; fill:none; }
    .ic-purple { background:rgba(124,58,237,0.08); border:1.5px solid rgba(124,58,237,0.15); }
    .ic-purple svg { stroke:var(--purple); }
    .ic-gold   { background:rgba(245,158,11,0.08); border:1.5px solid rgba(245,158,11,0.18); }
    .ic-gold svg { stroke:#d97706; }
    .ic-teal   { background:rgba(6,182,212,0.08); border:1.5px solid rgba(6,182,212,0.18); }
    .ic-teal svg { stroke:var(--teal); }
    .ic-orange { background:rgba(249,115,22,0.08); border:1.5px solid rgba(249,115,22,0.18); }
    .ic-orange svg { stroke:var(--orange); }
    .ic-green  { background:rgba(16,185,129,0.08); border:1.5px solid rgba(16,185,129,0.18); }
    .ic-green svg { stroke:#10b981; }
    .ic-pink   { background:rgba(224,64,251,0.08); border:1.5px solid rgba(224,64,251,0.18); }
    .ic-pink svg { stroke:var(--pink); }
    .svc-item:hover .svc-icon-wrap { background:var(--grad-main); border-color:transparent; transform:rotate(-6deg) scale(1.08); }
    .svc-item:hover .svc-icon-wrap svg { stroke:white; }
    .svc-item h4 { font-family:'Clash Display',sans-serif; font-size:17px; color:var(--text-strong); margin-bottom:7px; }
    .svc-item p { font-size:14px; line-height:1.75; color:#6b7280; margin:0; }

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

    /* ══ CTA BANNER ══ */
    .cta-section {
        padding: 120px 0; text-align:center;
        background: var(--grad-header); position:relative; overflow:hidden; z-index:2;
    }
    .cta-section::before {
        content:''; position:absolute; inset:0;
        background:
            radial-gradient(ellipse at 80% 20%, rgba(224,64,251,0.15) 0%, transparent 55%),
            radial-gradient(ellipse at 15% 80%, rgba(249,115,22,0.1) 0%, transparent 50%);
        pointer-events:none;
    }
    .cta-section::after { content:''; position:absolute; top:0; left:0; right:0; height:2px; background:var(--grad-main); }
    .cta-section > .container { position:relative; z-index:2; }
    .cta-section h2 { font-family:'Clash Display',sans-serif; font-size:clamp(28px,4vw,50px); color:#fff; letter-spacing:-0.5px; margin-bottom:18px; }
    .cta-section p { color:rgba(255,255,255,0.65); font-size:17px; line-height:1.8; max-width:580px; margin:0 auto 44px; }
    .cta-btns { display:flex; gap:16px; justify-content:center; flex-wrap:wrap; }

    /* ══ FAQ v2 ══ */
    .faq-section-v2 {
        padding: 120px 0;
        background: linear-gradient(135deg, #fdf8ff 0%, #fff8f0 60%, #f0f9ff 100%);
        position: relative; z-index: 2; overflow: hidden;
    }
    .faq2-orb { position: absolute; border-radius: 50%; filter: blur(110px); pointer-events: none; }
    .faq2-orb-1 { width: 420px; height: 420px; background: rgba(124,58,237,0.07); top: -100px; right: -60px; }
    .faq2-orb-2 { width: 340px; height: 340px; background: rgba(249,115,22,0.06); bottom: -80px; left: -60px; }
    .faq2-grid-bg {
        position: absolute; inset: 0; pointer-events: none;
        background-image:
            linear-gradient(rgba(124,58,237,0.03) 1px, transparent 1px),
            linear-gradient(90deg, rgba(124,58,237,0.03) 1px, transparent 1px);
        background-size: 50px 50px;
        mask-image: radial-gradient(ellipse at 50% 0%, rgba(0,0,0,0.3) 0%, transparent 70%);
    }
    .faq2-header {
        text-align: center; max-width: 560px;
        margin: 0 auto 64px; position: relative; z-index: 1;
    }
    .faq2-subtitle { font-size: 17px; line-height: 1.85; color: #6b7280; }
    .faq2-body {
        display: grid; grid-template-columns: 1fr 380px;
        gap: 50px; align-items: start;
        position: relative; z-index: 1;
    }
    .faq2-list { display: flex; flex-direction: column; gap: 12px; }
    .faq2-item {
        background: white; border: 1.5px solid rgba(124,58,237,0.1);
        border-radius: 20px; overflow: hidden;
        transition: all 0.3s cubic-bezier(.4,0,.2,1);
        box-shadow: 0 2px 8px rgba(0,0,0,0.03);
    }
    .faq2-item:hover { border-color: rgba(124,58,237,0.25); box-shadow: 0 6px 24px rgba(124,58,237,0.08); }
    .faq2-item.open { border-color: rgba(124,58,237,0.35); box-shadow: 0 8px 32px rgba(124,58,237,0.1); }
    .faq2-question {
        padding: 22px 26px;
        display: flex; justify-content: space-between; align-items: center;
        cursor: pointer; user-select: none; gap: 16px;
    }
    .faq2-q-inner {
        display: flex; align-items: center; gap: 14px;
        font-family: 'Clash Display', sans-serif; font-weight: 600;
        font-size: 16px; color: var(--text-strong); flex: 1;
    }
    .faq2-num {
        font-family: 'Clash Display', sans-serif; font-weight: 700;
        font-size: 11px; letter-spacing: 1px;
        background: linear-gradient(135deg, #7c3aed, #2563eb);
        -webkit-background-clip: text; -webkit-text-fill-color: transparent;
        background-clip: text; flex-shrink: 0; min-width: 22px;
    }
    .faq2-toggle {
        width: 36px; height: 36px; flex-shrink: 0;
        background: rgba(124,58,237,0.06);
        border: 1.5px solid rgba(124,58,237,0.15);
        border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        transition: all 0.35s;
    }
    .faq2-toggle svg { width: 14px; height: 14px; stroke: var(--purple); stroke-width: 2.5; transition: all 0.35s; }
    .faq2-item.open .faq2-toggle { background: var(--grad-main); border-color: transparent; transform: rotate(45deg); }
    .faq2-item.open .faq2-toggle svg { stroke: white; }
    .faq2-answer {
        max-height: 0; overflow: hidden;
        transition: max-height 0.4s ease, padding 0.3s;
        font-size: 15px; line-height: 1.85; color: #6b7280;
        padding: 0 26px 0 62px;
    }
    .faq2-item.open .faq2-answer { max-height: 300px; padding: 0 26px 24px 62px; }

    /* Side panel */
    .faq2-side { display: flex; flex-direction: column; gap: 20px; }
    .faq2-cta-card {
        background: linear-gradient(145deg, #0d0520 0%, #130a35 55%, #0a1a40 100%);
        border-radius: 28px; padding: 40px 36px;
        position: relative; overflow: hidden;
    }
    .faq2-cta-card::before {
        content: ''; position: absolute; inset: 0;
        background: radial-gradient(ellipse at 80% 10%, rgba(124,58,237,0.35) 0%, transparent 60%),
                    radial-gradient(ellipse at 10% 90%, rgba(249,115,22,0.15) 0%, transparent 50%);
        pointer-events: none;
    }
    .faq2-cta-card > * { position: relative; z-index: 1; }
    .faq2-cta-icon {
        width: 54px; height: 54px;
        background: var(--grad-main); border-radius: 16px;
        display: flex; align-items: center; justify-content: center;
        margin-bottom: 20px; box-shadow: 0 8px 30px rgba(124,58,237,0.4);
    }
    .faq2-cta-icon svg { width: 24px; height: 24px; }
    .faq2-cta-title { font-family: 'Clash Display', sans-serif; font-weight: 700; font-size: 22px; color: white; margin-bottom: 10px; }
    .faq2-cta-desc { font-size: 14px; line-height: 1.75; color: rgba(255,255,255,0.55); margin-bottom: 28px; }
    .faq2-cta-btn {
        display: flex; align-items: center; justify-content: center; gap: 10px;
        background: linear-gradient(135deg, #25D366, #128C7E);
        color: white; font-family: 'Clash Display', sans-serif;
        font-weight: 700; font-size: 14px;
        padding: 14px 24px; border-radius: 50px;
        text-decoration: none; transition: all 0.3s;
        box-shadow: 0 4px 20px rgba(37,211,102,0.35); margin-bottom: 12px;
    }
    .faq2-cta-btn:hover { transform: translateY(-2px); box-shadow: 0 8px 30px rgba(37,211,102,0.5); }
    .faq2-cta-btn-outline {
        display: flex; align-items: center; justify-content: center; gap: 10px;
        background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.15);
        color: rgba(255,255,255,0.75);
        font-family: 'Clash Display', sans-serif; font-weight: 600; font-size: 14px;
        padding: 13px 24px; border-radius: 50px;
        text-decoration: none; transition: all 0.3s;
    }
    .faq2-cta-btn-outline:hover { background: rgba(255,255,255,0.12); color: white; transform: translateY(-2px); }
    .faq2-stats {
        background: white; border: 1.5px solid rgba(124,58,237,0.1);
        border-radius: 24px; padding: 30px 28px;
        display: flex; align-items: center; justify-content: space-between;
        box-shadow: 0 4px 20px rgba(124,58,237,0.06);
    }
    .faq2-stat { text-align: center; flex: 1; }
    .faq2-stat-num { font-family:'Clash Display',sans-serif; font-weight:700; font-size:30px; line-height:1; margin-bottom:6px; }
    .faq2-stat-num sup { font-size:16px; }
    .faq2-stat-lbl { font-size:11px; font-weight:600; color:#9ca3af; letter-spacing:0.3px; }
    .faq2-stat-divider { width:1px; height:48px; background:rgba(124,58,237,0.1); flex-shrink:0; }

    /* ══ BACK TO TOP ══ */
    #back-to-top { position:fixed;bottom:40px;left:40px;width:52px;height:52px;background:var(--grad-main);color:white;border:none;border-radius:15px;cursor:pointer;display:none;align-items:center;justify-content:center;box-shadow:0 4px 25px rgba(124,58,237,.4);z-index:999;transition:all .3s;font-size:20px; }
    #back-to-top.visible { display:flex; }
    #back-to-top:hover { transform:translateY(-4px);box-shadow:0 8px 40px rgba(124,58,237,.55); }

    /* ══ RESPONSIVE ══ */
    @media(max-width:1100px){ .faq2-body { grid-template-columns: 1fr 320px; gap: 36px; } }
    @media(max-width:992px){
        .why-grid { grid-template-columns:repeat(2,1fr); }
        .svc-cols { grid-template-columns:1fr; }
        .faq2-body { grid-template-columns: 1fr; }
        .faq2-side { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
        .hsb-item { padding:0 28px; }
    }
    @media(max-width:768px){
        .why-grid { grid-template-columns:1fr; }
        .hero-stats-bar { gap:0; }
        .hsb-item { padding:16px 24px; border-right:none; border-bottom:1px solid rgba(255,255,255,0.1); }
        .hsb-item:last-child { border-bottom:none; }
        .cta-btns { flex-direction:column; align-items:center; }
    }
    @media(max-width:600px){
        .faq-section-v2 { padding: 80px 0; }
        .faq2-side { grid-template-columns: 1fr; }
        .faq2-q-inner { font-size: 14.5px; }
        .faq2-answer { padding: 0 20px 0 50px; }
        .faq2-item.open .faq2-answer { padding: 0 20px 20px 50px; }
        .faq2-cta-card { padding: 30px 24px; }
        #back-to-top { bottom:20px;left:20px; }
        .marquee-fade-left,.marquee-fade-right { width:60px; }
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
        <h1>Our Digital Marketing Services Built for Impact</h1>
        <p class="ph-desc">We don’t just offer services—we deliver digital growth. From SEO to web development, PPC to video editing, our expert team has your brand fully covered.</p>
        <a href="contact.php" class="btn-grad">
            Contact Us
            <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      
    </div>
</section>

<!-- ══ WHY US ══ -->
<section class="why-section">
    <div class="container">
        <div class="section-label" style="color:#7c3aed">
            <span class="sl-dot"><span></span><span></span><span></span></span>
            Why Work With Us?
        </div>
        <h2 class="section-title">Why Work With <span class="grad-text">Us?</span></h2>
        <p class="section-desc">We're not here to throw buzzwords at you; our digital marketing services make your life easier. From building a website to running ads or crafting a marketing plan, our focus is on making things work for your business, not just look good on paper.</p>
        <div class="why-grid">
            <div class="why-card">
                <div class="why-num">01</div>
                <h3>Tailored Strategies</h3>
                <p>Your business is unique, and your marketing should reflect that. From web development services to SEO services, we make plans that fit your goals.</p>
            </div>
            <div class="why-card">
                <div class="why-num">02</div>
                <h3>Proven Expertise</h3>
                <p>Our team blends creativity with data. From PPC management services or SMM services, we know how to get results that last.</p>
            </div>
            <div class="why-card">
                <div class="why-num">03</div>
                <h3>All-in-One Partner</h3>
                <p>Skip the hassle of juggling multiple vendors. We handle it all — video editing services, app development services, and more, under one roof.</p>
            </div>
            <div class="why-card">
                <div class="why-num">04</div>
                <h3>Built for Growth</h3>
                <p>We design every project to help your brand grow over time, not just for launch day.</p>
            </div>
        </div>
    </div>
</section>

<!-- ══ SERVICES GRID ══ -->
<section class="svc-section">
    <div class="container">
        <div class="section-label" style="color:#f97316">
            <span class="sl-dot"><span></span><span></span><span></span></span>
            Our Services
        </div>
        <h2 class="section-title">What We Offer: Full-Service<br><span class="grad-text">Digital Solutions</span></h2>
        <div class="svc-cols">

            <!-- Column 1 — Marketing & Ads -->
            <div>
                <span class="svc-col-label">Marketing &amp; Ads</span>
                <div class="svc-item">
                    <div class="svc-icon-wrap ic-purple">
                        <svg viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                    </div>
                    <div>
                        <h4>Paid Marketing</h4>
                        <p>Boost your online presence with our Meta Ads services. From social media marketing to email campaigns, we drive targeted traffic and optimize your online reputation. Let's get you the results you deserve!</p>
                    </div>
                </div>
                <div class="svc-item">
                    <div class="svc-icon-wrap ic-gold">
                        <svg viewBox="0 0 24 24"><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2"/></svg>
                    </div>
                    <div>
                        <h4>Video Editing</h4>
                        <p>Stand out online with scroll-stopping videos. Our video editing services turn your raw footage into polished content. We can help you with social media, ads, YouTube, and beyond.</p>
                    </div>
                </div>
               
            </div>

            <!-- Column 2 — Web & SEO -->
            <div>
                <span class="svc-col-label">Web &amp; SEO</span>
                <div class="svc-item">
                    <div class="svc-icon-wrap ic-green">
                        <svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/><polyline points="7 8 10 11 7 14"/><line x1="13" y1="14" x2="17" y2="14"/></svg>
                    </div>
                    <div>
                        <h4>Website Development</h4>
                        <p>Want a website that looks great and works seamlessly? We handle custom development, maintenance, and speed optimization to keep your site secure, fast, and ranking higher on Google.</p>
                    </div>
                </div>
                <div class="svc-item">
                    <div class="svc-icon-wrap ic-purple">
                        <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="8" y1="11" x2="14" y2="11"/><line x1="11" y1="8" x2="11" y2="14"/></svg>
                    </div>
                    <div>
                        <h4>Search Engine Optimization</h4>
                        <p>Boost your Google ranking with our SEO services. We create keyword-optimized, engaging content that drives sustained organic traffic and enhances site performance.</p>
                    </div>
                </div>
               
            </div>

            <!-- Column 3 — Design & Apps -->
            <div>
                <span class="svc-col-label">Design &amp; Apps</span>
                <div class="svc-item">
                    <div class="svc-icon-wrap ic-orange">
                        <svg viewBox="0 0 24 24"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
                    </div>
                    <div>
                        <h4>Mobile App Development</h4>
                        <p>Have an app idea? We design and build high-performance mobile apps for iOS and Android. Our app development service covers everything from planning to launch, and beyond.</p>
                    </div>
                </div>
               <div class="svc-item">
                    <div class="svc-icon-wrap ic-pink">
                        <svg viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                    </div>
                    <div>
                        <h4>Meta Content Creation</h4>
                        <p>We craft engaging creative content that strengthens your brand presence, boosts audience engagement, and drives better digital visibility across all Meta platforms.</p>
                    </div>
                </div>
              
            </div>

        </div>
    </div>
</section>


<!-- ══ CTA BANNER ══ -->
<section class="cta-section">
    <div class="container">
        <div class="section-label" style="color:#fbbf24;justify-content:center;margin-bottom:24px">
            <span class="sl-dot"><span></span><span></span><span></span></span>
            Get Started Today
        </div>
        <h2>From Clicks to Conversions —<br>Digital Solutions That <span class="grad-text">Deliver</span></h2>
        <p>All your digital needs, one expert team. From SEO and PPC to web and app development, we deliver results that matter.</p>
        <div class="cta-btns">
            <a href="contact.php" class="btn-grad">
                Get Started Now
                <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="#services" class="btn-warm">
                View Services
                <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- ══ FAQ v2 ══ -->
<section class="faq-section-v2">
    <div class="faq2-orb faq2-orb-1"></div>
    <div class="faq2-orb faq2-orb-2"></div>
    <div class="faq2-grid-bg"></div>
    <div class="container">
        <div class="faq2-header">
            <div class="section-label" style="color:#06b6d4; justify-content:center;">
                <span class="sl-dot"><span></span><span></span><span></span></span>
                FAQs
            </div>
            <h2 class="section-title">Most Popular <span class="grad-text">Questions</span></h2>
            <p class="faq2-subtitle">Have questions about our digital marketing services? Let's talk.</p>
        </div>
        <div class="faq2-body">

            <!-- Left: Accordion -->
            <div class="faq2-list">

                <div class="faq2-item open">
                    <div class="faq2-question" onclick="toggleFaq2(this)">
                        <div class="faq2-q-inner">
                            <span class="faq2-num">01</span>
                            <span>Do I need all your services, or can I choose just one?</span>
                        </div>
                        <div class="faq2-toggle">
                            <svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        </div>
                    </div>
                    <div class="faq2-answer">
                        You can choose exactly what you need. From one of our digital marketing services, like SEO services or PPC management services, or a full package, it's up to you.
                    </div>
                </div>

                <div class="faq2-item">
                    <div class="faq2-question" onclick="toggleFaq2(this)">
                        <div class="faq2-q-inner">
                            <span class="faq2-num">02</span>
                            <span>Can you work with my existing website or app?</span>
                        </div>
                        <div class="faq2-toggle">
                            <svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        </div>
                    </div>
                    <div class="faq2-answer">
                        Yes! Our team can enhance your current web development service project or upgrade your existing app development service without starting from scratch.
                    </div>
                </div>

                <div class="faq2-item">
                    <div class="faq2-question" onclick="toggleFaq2(this)">
                        <div class="faq2-q-inner">
                            <span class="faq2-num">03</span>
                            <span>How quickly can you start my project?</span>
                        </div>
                        <div class="faq2-toggle">
                            <svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        </div>
                    </div>
                    <div class="faq2-answer">
                        Most marketing services start within a few days of signing the agreement. This includes SMM services, video editing services, or development work.
                    </div>
                </div>

                <div class="faq2-item">
                    <div class="faq2-question" onclick="toggleFaq2(this)">
                        <div class="faq2-q-inner">
                            <span class="faq2-num">04</span>
                            <span>Do you provide reports or updates?</span>
                        </div>
                        <div class="faq2-toggle">
                            <svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        </div>
                    </div>
                    <div class="faq2-answer">
                        Absolutely. For all digital marketing services, from SEO services to PPC management services, we provide regular reports. This way, you always know the results.
                    </div>
                </div>

                <div class="faq2-item">
                    <div class="faq2-question" onclick="toggleFaq2(this)">
                        <div class="faq2-q-inner">
                            <span class="faq2-num">05</span>
                            <span>Can you work with my budget?</span>
                        </div>
                        <div class="faq2-toggle">
                            <svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        </div>
                    </div>
                    <div class="faq2-answer">
                        Yes, we offer flexible packages for everything from video editing services to app development services. This makes it easy to get high-quality work within your budget.
                    </div>
                </div>

                <div class="faq2-item">
                    <div class="faq2-question" onclick="toggleFaq2(this)">
                        <div class="faq2-q-inner">
                            <span class="faq2-num">06</span>
                            <span>What industries do you work with?</span>
                        </div>
                        <div class="faq2-toggle">
                            <svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        </div>
                    </div>
                    <div class="faq2-answer">
                        We work with businesses across all industries — real estate, tech, fitness, food, healthcare, and more. Our digital marketing services adapt to any niche.
                    </div>
                </div>

            </div>

            <!-- Right: Side panel -->
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
                    <a href="mailto:contact@virexsocial.com" class="faq2-cta-btn-outline">
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

<!-- ══ MARQUEE JS (same as index.php) ══ -->
<script>
(function(){
    var t1 = [
        {text:'Meta Ads',style:'b',icon:'<svg viewBox="0 0 24 24" fill="none"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'SEO Services',style:'d',icon:'<svg viewBox="0 0 24 24" fill="none"><circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/><line x1="21" y1="21" x2="16.65" y2="16.65" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'Web Development',style:'e',icon:'<svg viewBox="0 0 24 24" fill="none"><polyline points="16 18 22 12 16 6" stroke="currentColor" stroke-width="2"/><polyline points="8 6 2 12 8 18" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'Video Editing',style:'c',icon:'<svg viewBox="0 0 24 24" fill="none"><polygon points="23 7 16 12 23 17 23 7" stroke="currentColor" stroke-width="2"/><rect x="1" y="5" width="15" height="14" rx="2" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'Snapchat Management',style:'a',icon:'<svg viewBox="0 0 24 24" fill="none"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'Content Creation',style:'b',icon:'<svg viewBox="0 0 24 24" fill="none"><path d="M12 20h9" stroke="currentColor" stroke-width="2"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'UI/UX Design',style:'d',icon:'<svg viewBox="0 0 24 24" fill="none"><rect x="3" y="3" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2"/><path d="M3 9h18M9 21V9" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'App Development',style:'e',icon:'<svg viewBox="0 0 24 24" fill="none"><rect x="5" y="2" width="14" height="20" rx="2" stroke="currentColor" stroke-width="2"/><line x1="12" y1="18" x2="12.01" y2="18" stroke="currentColor" stroke-width="2"/></svg>'},
    ];
    var t2 = [
        {text:'Brand Identity',style:'c',icon:'<svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path d="M8 12h8M12 8v8" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'Google Ads',style:'b',icon:'<svg viewBox="0 0 24 24" fill="none"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'Email Marketing',style:'a',icon:'<svg viewBox="0 0 24 24" fill="none"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" stroke="currentColor" stroke-width="2"/><polyline points="22,6 12,13 2,6" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'Social Media',style:'d',icon:'<svg viewBox="0 0 24 24" fill="none"><circle cx="18" cy="5" r="3" stroke="currentColor" stroke-width="2"/><circle cx="6" cy="12" r="3" stroke="currentColor" stroke-width="2"/><circle cx="18" cy="19" r="3" stroke="currentColor" stroke-width="2"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49" stroke="currentColor" stroke-width="2"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'PPC Management',style:'e',icon:'<svg viewBox="0 0 24 24" fill="none"><line x1="18" y1="20" x2="18" y2="10" stroke="currentColor" stroke-width="2"/><line x1="12" y1="20" x2="12" y2="4" stroke="currentColor" stroke-width="2"/><line x1="6" y1="20" x2="6" y2="14" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'Analytics & Reporting',style:'b',icon:'<svg viewBox="0 0 24 24" fill="none"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'E-Commerce',style:'c',icon:'<svg viewBox="0 0 24 24" fill="none"><circle cx="9" cy="21" r="1" stroke="currentColor" stroke-width="2"/><circle cx="20" cy="21" r="1" stroke="currentColor" stroke-width="2"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'Influencer Marketing',style:'a',icon:'<svg viewBox="0 0 24 24" fill="none"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2"/><circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2"/></svg>'},
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

function toggleFaq2(q) {
    var item = q.parentElement;
    var isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq2-item.open').forEach(function(i){ i.classList.remove('open'); });
    if(!isOpen) item.classList.add('open');
}

// Back to top
window.addEventListener('scroll', function(){
    var btn = document.getElementById('back-to-top');
    if(window.scrollY > 400) btn.classList.add('visible');
    else btn.classList.remove('visible');
});
</script>

<?php include 'includes/virex-floating-social.php'; ?>
<?php include 'includes/footer.php'; ?>