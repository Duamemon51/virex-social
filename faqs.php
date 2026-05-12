<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Marketing FAQs | Answers You Can Trust</title>
    <meta name="description" content="Find clear answers to common digital marketing FAQs. Get expert insights on SEO, PPC, social media & more—all in one easy-to-read guide.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
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
            --grad-btn:     linear-gradient(135deg, #e040fb, #7c3aed, #2563eb);
            --grad-btn-warm:linear-gradient(135deg, #f97316, #fbbf24, #e040fb);
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
            font-family: 'Manrope', sans-serif;
            font-weight: 800;
            color: var(--text-strong);
        }
        a { text-decoration: none; color: inherit; }
        p { color: var(--text); }
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
        .section-title { font-family:'Manrope',sans-serif; font-size:clamp(28px,4.2vw,50px); font-weight:800; line-height:1.12; margin-bottom:18px; letter-spacing:-0.5px; color:var(--text-strong); }

        @keyframes pulse { 0%,100%{opacity:1;transform:scale(1)} 50%{opacity:.6;transform:scale(1.4)} }
        @keyframes orbFloat { 0%,100%{transform:translateY(0) scale(1)} 50%{transform:translateY(-30px) scale(1.05)} }

        /* ══ PAGE HERO ══ */
        .page-hero {
            padding: 160px 0 100px;
            position: relative; overflow: hidden;
            background: var(--grad-header);
            text-align: center;
        }
        .page-hero::before {
            content: '';
            position: absolute; inset: 0;
            background:
                radial-gradient(ellipse 70% 60% at 0% 50%, rgba(0,180,220,0.45) 0%, transparent 60%),
                radial-gradient(ellipse 55% 80% at 100% 30%, rgba(160,40,200,0.65) 0%, transparent 55%),
                radial-gradient(ellipse 60% 50% at 50% 100%, rgba(30,30,200,0.4) 0%, transparent 60%);
            pointer-events: none; z-index: 0;
        }
        .ph-orb { position:absolute; border-radius:50%; filter:blur(90px); pointer-events:none; z-index:1; }
        .ph-orb-1 { width:500px;height:500px; background:rgba(224,64,251,0.12); top:-200px; right:-100px; animation:orbFloat 8s ease-in-out infinite; }
        .ph-orb-2 { width:380px;height:380px; background:rgba(37,99,235,0.1); bottom:-120px; left:-80px; animation:orbFloat 10s ease-in-out infinite reverse; }
        .ph-orb-3 { width:280px;height:280px; background:rgba(6,182,212,0.18); top:30%; left:10%; animation:orbFloat 7s ease-in-out infinite 1s; }
        .ph-orb-4 { width:220px;height:220px; background:rgba(249,115,22,0.1); top:20%; right:25%; animation:orbFloat 9s ease-in-out infinite 2s; }
        .page-hero .hero-content { position:relative; z-index:10; }
        .page-hero-badge {
            display: inline-flex; align-items: center; gap: 10px;
            background: rgba(249,115,22,0.1); border: 1px solid rgba(249,115,22,0.28);
            color: #fbbf24; font-family:'Manrope',sans-serif; font-weight:700;
            font-size:11px; letter-spacing:2.5px; text-transform:uppercase;
            padding: 8px 20px; border-radius:50px; margin-bottom:28px;
        }
        .page-hero-badge .badge-dot { width:7px;height:7px;border-radius:50%;background:#f97316;animation:pulse 1.5s infinite; }
        .page-hero h1 {
            font-family:'Manrope',sans-serif;
           font-size: clamp(26px, 4vw, 45px);
            font-weight: 800;
            line-height: 1.1;
            letter-spacing:-1px;
            color: #fff;
            margin-bottom: 22px;
        }
        .page-hero p.ph-desc {
            color: rgba(255,255,255,0.72) !important;
            font-size: 17px; line-height: 1.85;
            max-width: 680px; margin: 0 auto 40px;
        }
        .btn-grad {
            display: inline-flex; align-items: center; gap: 10px;
            background: var(--grad-btn); color: #fff;
            font-family: 'Manrope', sans-serif; font-weight: 700; font-size: 14.5px;
            padding: 16px 34px; border-radius: 50px;
            transition: all 0.3s; box-shadow: 0 4px 25px rgba(124,58,237,.35);
            position: relative; overflow: hidden;
        }
        .btn-grad::after { content:''; position:absolute; inset:0; background:linear-gradient(135deg, rgba(255,255,255,0.15), transparent); opacity:0; transition:opacity 0.3s; }
        .btn-grad:hover { transform:translateY(-3px); box-shadow:0 10px 40px rgba(124,58,237,.5); color:#fff; }
        .btn-grad:hover::after { opacity:1; }
        .btn-grad svg { width:18px;height:18px;stroke:white;stroke-width:2.5;flex-shrink:0; }
        .page-hero::after {
            content: '';
            position: absolute; top: 0; left: 0; right: 0; height: 2px;
            background: var(--grad-main); z-index: 20;
        }

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
        .scroll-pill { display:inline-flex;align-items:center;gap:10px;padding:10px 24px;border-radius:50px;font-family:'Manrope',sans-serif;font-weight:600;font-size:clamp(13px,1.6vw,16px);letter-spacing:0.5px;white-space:nowrap;transition:all 0.3s; }
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

        /* ══ FAQ SECTION v2 ══ */
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
            background: white;
            border: 1.5px solid rgba(124,58,237,0.1);
            border-radius: 20px; overflow: hidden;
            transition: all 0.3s cubic-bezier(.4,0,.2,1);
            box-shadow: 0 2px 8px rgba(0,0,0,0.03);
        }
        .faq2-item:hover { border-color: rgba(124,58,237,0.25); box-shadow: 0 6px 24px rgba(124,58,237,0.08); }
        .faq2-item.open {
            border-color: rgba(124,58,237,0.35);
            box-shadow: 0 8px 32px rgba(124,58,237,0.1);
        }
        .faq2-question {
            padding: 22px 26px;
            display: flex; justify-content: space-between; align-items: center;
            cursor: pointer; user-select: none; gap: 16px;
        }
        .faq2-q-inner {
            display: flex; align-items: center; gap: 14px;
            font-family: 'Manrope', sans-serif; font-weight: 700;
            font-size: 15.5px; color: var(--text-strong); flex: 1;
        }
        .faq2-num {
            font-family: 'Manrope', sans-serif; font-weight: 800;
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
        .faq2-item.open .faq2-toggle {
            background: var(--grad-main); border-color: transparent; transform: rotate(45deg);
        }
        .faq2-item.open .faq2-toggle svg { stroke: white; }
        .faq2-answer {
            max-height: 0; overflow: hidden;
            transition: max-height 0.4s ease, padding 0.3s;
            font-size: 15px; line-height: 1.85; color: #6b7280;
            padding: 0 26px 0 62px;
        }
        .faq2-item.open .faq2-answer { max-height: 400px; padding: 0 26px 24px 62px; }
        .faq2-answer ul, .faq2-answer ol { margin: 10px 0 10px 20px; }
        .faq2-answer li { margin-bottom: 6px; font-size: 15px; color: #6b7280; }
        .faq2-answer li strong { color: var(--text-strong); font-weight: 700; }

        /* ── Side panel ── */
        .faq2-side { display: flex; flex-direction: column; gap: 20px; }
        .faq2-cta-card {
            background: linear-gradient(145deg, #0d0520 0%, #130a35 55%, #0a1a40 100%);
            border-radius: 28px; padding: 40px 36px;
            position: relative; overflow: hidden;
        }
        .faq2-cta-card::before {
            content: '';
            position: absolute; inset: 0;
            background: radial-gradient(ellipse at 80% 10%, rgba(124,58,237,0.35) 0%, transparent 60%),
                        radial-gradient(ellipse at 10% 90%, rgba(249,115,22,0.15) 0%, transparent 50%);
            pointer-events: none;
        }
        .faq2-cta-card > * { position: relative; z-index: 1; }
        .faq2-cta-icon {
            width: 54px; height: 54px;
            background: var(--grad-main); border-radius: 16px;
            display: flex; align-items: center; justify-content: center;
            margin-bottom: 20px;
            box-shadow: 0 8px 30px rgba(124,58,237,0.4);
        }
        .faq2-cta-icon svg { width: 24px; height: 24px; }
        .faq2-cta-title {
            font-family: 'Manrope', sans-serif; font-weight: 800;
            font-size: 22px; color: white; margin-bottom: 10px;
        }
        .faq2-cta-desc {
            font-size: 14px; line-height: 1.75;
            color: rgba(255,255,255,0.55); margin-bottom: 28px;
        }
        .faq2-cta-btn {
            display: flex; align-items: center; justify-content: center; gap: 10px;
            background: var(--grad-btn);
            color: white; font-family: 'Manrope', sans-serif;
            font-weight: 700; font-size: 14px;
            padding: 14px 24px; border-radius: 50px;
            text-decoration: none; transition: all 0.3s;
            box-shadow: 0 4px 20px rgba(124,58,237,0.35);
            margin-bottom: 12px;
        }
        .faq2-cta-btn:hover { transform: translateY(-2px); box-shadow: 0 8px 30px rgba(124,58,237,0.5); }
        .faq2-cta-btn-outline {
            display: flex; align-items: center; justify-content: center; gap: 10px;
            background: rgba(255,255,255,0.07);
            border: 1px solid rgba(255,255,255,0.15);
            color: rgba(255,255,255,0.75);
            font-family: 'Manrope', sans-serif; font-weight: 600; font-size: 14px;
            padding: 13px 24px; border-radius: 50px;
            text-decoration: none; transition: all 0.3s;
        }
        .faq2-cta-btn-outline:hover { background: rgba(255,255,255,0.12); color: white; transform: translateY(-2px); }
        .faq2-stats {
            background: white;
            border: 1.5px solid rgba(124,58,237,0.1);
            border-radius: 24px; padding: 30px 28px;
            display: flex; align-items: center; justify-content: space-between;
            box-shadow: 0 4px 20px rgba(124,58,237,0.06);
        }
        .faq2-stat { text-align: center; flex: 1; }
        .faq2-stat-num {
            font-family: 'Manrope', sans-serif;
            font-weight: 800; font-size: 30px; line-height: 1;
            margin-bottom: 6px;
        }
        .faq2-stat-num sup { font-size: 16px; }
        .faq2-stat-lbl { font-size: 11px; font-weight: 600; color: #9ca3af; letter-spacing: 0.3px; }
        .faq2-stat-divider { width: 1px; height: 48px; background: rgba(124,58,237,0.1); flex-shrink: 0; }

        /* ══ GET IN TOUCH / CONTACT SECTION ══ */
        .contact-section {
            padding: 0;
            position: relative; overflow: hidden;
        }
        .contact-section::before {
            content: '';
            position: absolute; top: 0; left: 0; right: 0; height: 2px;
            background: var(--grad-main); z-index: 20;
        }
        .contact-wrap {
            display: grid;
            grid-template-columns: 1fr 1.15fr;
            min-height: 680px;
        }

        /* LEFT dark panel */
        .contact-left {
            background: linear-gradient(145deg, #0d0520 0%, #130a35 55%, #0a1a40 100%);
            padding: 80px 56px;
            position: relative; overflow: hidden;
            display: flex; flex-direction: column; justify-content: center;
        }
        .contact-left::before {
            content: '';
            position: absolute; inset: 0;
            background:
                radial-gradient(ellipse at 80% 10%, rgba(124,58,237,0.3) 0%, transparent 60%),
                radial-gradient(ellipse at 10% 90%, rgba(249,115,22,0.12) 0%, transparent 50%),
                radial-gradient(ellipse 70% 60% at 0% 50%, rgba(0,180,220,0.2) 0%, transparent 60%);
            pointer-events: none;
        }
        .cl-inner { position: relative; z-index: 2; }
        .cl-badge {
            display: inline-flex; align-items: center; gap: 8px;
            background: rgba(249,115,22,0.1); border: 1px solid rgba(249,115,22,0.28);
            color: #fbbf24; font-family:'Manrope',sans-serif; font-weight:700;
            font-size: 11px; letter-spacing: 2.5px; text-transform: uppercase;
            padding: 7px 16px; border-radius: 50px; margin-bottom: 28px;
        }
        .cl-badge span { width: 6px; height: 6px; background: #f97316; border-radius: 50%; animation: pulse 1.6s infinite; }
        .cl-title {
            font-family: 'Manrope', sans-serif; font-weight: 900;
            font-size: clamp(28px,3vw,44px); color: #fff; line-height: 1.1; margin-bottom: 18px;
        }
        .cl-title span { background: var(--grad-main); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .cl-desc { font-size: 15px; line-height: 1.75; color: rgba(255,255,255,0.58); margin-bottom: 44px; max-width: 340px; }
        .cl-items { display: flex; flex-direction: column; gap: 22px; margin-bottom: 44px; }
        .cl-item { display: flex; align-items: center; gap: 16px; }
        .cl-icon {
            width: 46px; height: 46px; border-radius: 14px;
            background: rgba(255,255,255,0.07);
            border: 1px solid rgba(255,255,255,0.12);
            display: flex; align-items: center; justify-content: center; flex-shrink: 0;
        }
        .cl-icon svg { width: 22px; height: 22px; stroke: rgba(255,255,255,0.75); fill: none; stroke-width: 1.8; stroke-linecap: round; stroke-linejoin: round; }
        .cl-item-title { font-family: 'Manrope',sans-serif; font-weight: 700; font-size: 14px; color: #fff; margin-bottom: 2px; }
        .cl-item-val { font-size: 13.5px; color: rgba(255,255,255,0.50); }
        .cl-divider { width: 48px; height: 2px; background: var(--grad-main); border-radius: 2px; margin-bottom: 28px; }
        .cl-socials { display: flex; gap: 10px; }
        .cl-social {
            width: 38px; height: 38px; border-radius: 10px;
            background: rgba(255,255,255,0.06);
            border: 1px solid rgba(255,255,255,0.12);
            display: flex; align-items: center; justify-content: center; transition: all .25s;
        }
        .cl-social:hover { background: var(--grad-btn); border-color: transparent; transform: translateY(-2px); }
        .cl-social svg { width: 17px; height: 17px; stroke: rgba(255,255,255,0.65); fill: none; stroke-width: 1.8; stroke-linecap: round; stroke-linejoin: round; }
        .cl-social:hover svg { stroke: #fff; }

        /* RIGHT form panel */
        .contact-right {
            background: linear-gradient(135deg, #fdf8ff 0%, #fff8f0 60%, #f0f9ff 100%);
            padding: 80px 56px;
            display: flex; flex-direction: column; justify-content: center;
            position: relative;
        }
        .contact-right::before {
            content: '';
            position: absolute; inset: 0;
            background:
                radial-gradient(ellipse at 90% 10%, rgba(124,58,237,0.06) 0%, transparent 50%),
                radial-gradient(ellipse at 10% 90%, rgba(249,115,22,0.04) 0%, transparent 50%);
            pointer-events: none;
        }
        .contact-right > * { position: relative; z-index: 1; }
        .cr-label {
            font-family: 'Manrope',sans-serif; font-weight: 700;
            font-size: 11px; letter-spacing: 2.5px; text-transform: uppercase;
            color: var(--purple); margin-bottom: 10px; display: block;
        }
        .cr-title {
            font-family: 'Manrope',sans-serif; font-weight: 900;
            font-size: clamp(24px,2.5vw,36px); color: var(--text-strong);
            margin-bottom: 8px; line-height: 1.15;
        }
        .cr-sub { font-size: 15px; color: var(--text); line-height: 1.65; margin-bottom: 36px; }
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px; }
        .form-row.single { grid-template-columns: 1fr; }
        .fg { display: flex; flex-direction: column; gap: 7px; }
        .fg label {
            font-family: 'Manrope',sans-serif; font-weight: 700;
            font-size: 12.5px; color: var(--text-strong); letter-spacing: 0.2px;
        }
        .fg input, .fg select, .fg textarea {
            padding: 13px 16px;
            border: 1.5px solid rgba(124,58,237,0.15);
            border-radius: 12px;
            font-family: 'Manrope', sans-serif; font-size: 14.5px; color: var(--text-strong);
            background: #fff; outline: none;
            transition: border-color .22s, box-shadow .22s;
            -webkit-appearance: none;
        }
        .fg input::placeholder, .fg textarea::placeholder { color: #c4b5fd; opacity: 0.7; }
        .fg input:focus, .fg select:focus, .fg textarea:focus {
            border-color: var(--purple);
            box-shadow: 0 0 0 4px rgba(124,58,237,0.1);
        }
        .fg textarea { resize: none; height: 110px; }
        .fg select { cursor: pointer; color: var(--text-strong); }
        .form-submit-row { margin-top: 20px; display: flex; align-items: center; gap: 18px; flex-wrap: wrap; }
        .btn-send {
            display: inline-flex; align-items: center; gap: 10px;
            background: var(--grad-btn);
            background-size: 200% 100%;
            color: #fff; font-family: 'Manrope',sans-serif; font-weight: 800; font-size: 15px;
            padding: 15px 38px; border-radius: 50px; border: none; cursor: pointer;
            transition: all .35s; box-shadow: 0 12px 32px rgba(124,58,237,0.32);
            letter-spacing: 0.2px;
        }
        .btn-send:hover { transform: translateY(-3px); box-shadow: 0 18px 44px rgba(124,58,237,0.42); }
        .btn-send svg { width: 18px; height: 18px; transition: transform .3s; }
        .btn-send:hover svg { transform: translateX(4px); }
        .form-note { font-size: 13px; color: var(--text); line-height: 1.5; }
        .form-note strong { color: var(--text-strong); font-family: 'Manrope',sans-serif; font-weight: 700; }

        /* ══ BACK TO TOP ══ */
        #back-to-top {
            position:fixed;bottom:40px;left:40px;width:52px;height:52px;
            background:var(--grad-main);color:white;border:none;border-radius:15px;
            cursor:pointer;display:none;align-items:center;justify-content:center;
            box-shadow:0 4px 25px rgba(124,58,237,.4);z-index:999;transition:all .3s;font-size:20px;
        }
        #back-to-top.visible { display:flex; }
        #back-to-top:hover { transform:translateY(-4px);box-shadow:0 8px 40px rgba(124,58,237,.55); }

        /* ══ RESPONSIVE ══ */
        @media(max-width:1100px) {
            .faq2-body { grid-template-columns: 1fr 320px; gap: 36px; }
        }
        @media(max-width:900px) {
            .faq2-body { grid-template-columns: 1fr; }
            .faq2-side { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
            .contact-wrap { grid-template-columns: 1fr; }
            .contact-left { padding: 60px 36px; }
            .contact-right { padding: 60px 36px; }
            .cl-desc { max-width: 100%; }
        }
        @media(max-width:768px) {
            .page-hero { padding: 100px 0 80px; }
            .faq-section-v2 { padding: 80px 0; }
            .marquee-fade-left,.marquee-fade-right { width:60px; }
        }
        @media(max-width:600px) {
            .form-row { grid-template-columns: 1fr; }
            .contact-left, .contact-right { padding: 50px 24px; }
            .faq2-side { grid-template-columns: 1fr; }
            .faq2-q-inner { font-size: 14.5px; }
            .faq2-answer { padding: 0 20px 0 50px; }
            .faq2-item.open .faq2-answer { padding: 0 20px 20px 50px; }
            .faq2-cta-card { padding: 30px 24px; }
            #back-to-top { bottom:20px;left:20px; }
        }
    </style>
</head>
<body>
<?php include 'includes/header.php'; ?>

<!-- ═══════════════ HERO ═══════════════ -->
<section class="page-hero">
    <div class="ph-orb ph-orb-1"></div>
    <div class="ph-orb ph-orb-2"></div>
    <div class="ph-orb ph-orb-3"></div>
    <div class="ph-orb ph-orb-4"></div>
    <div class="container hero-content">
        <div class="page-hero-badge">
            <span class="badge-dot"></span>
            Frequently Asked Questions
        </div>
        <h1>We've Got Answers</h1>
        <p class="ph-desc">
            We've compiled the most common digital marketing FAQs and answered them in plain language—so you feel confident and informed before we even speak.
        </p>
        <a href="contact-us/" class="btn-grad">
            Contact Us
            <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
    </div>
</section>



<!-- ═══════════════ FAQ SECTION ═══════════════ -->
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
            <p class="faq2-subtitle">Everything you need to know about our digital marketing services and how we work with you.</p>
        </div>

        <div class="faq2-body">

            <!-- LEFT: Accordion -->
            <div class="faq2-list">

                <div class="faq2-item open">
                    <div class="faq2-question" onclick="toggleFaq2(this)">
                        <div class="faq2-q-inner">
                            <span class="faq2-num">01</span>
                            <span>What services does Hashtag Media offer?</span>
                        </div>
                        <div class="faq2-toggle">
                            <svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        </div>
                    </div>
                    <div class="faq2-answer">
                        Our digital marketing agency offers a wide variety of services to help your business grow. Our core services include:
                        <ul style="margin-top:10px;">
                            <li><strong>Web Development</strong> – responsive, user-friendly websites</li>
                            <li><strong>SEO Services</strong> – improve rankings and organic traffic</li>
                            <li><strong>PPC Management</strong> – targeted ad campaigns with measurable ROI</li>
                            <li><strong>SMM Services</strong> – social media strategy, content, and ads</li>
                            <li><strong>Video Editing</strong> – professional edits for ads, social, and YouTube</li>
                            <li><strong>App Development</strong> – iOS, Android, and cross-platform apps</li>
                        </ul>
                    </div>
                </div>

                <div class="faq2-item">
                    <div class="faq2-question" onclick="toggleFaq2(this)">
                        <div class="faq2-q-inner">
                            <span class="faq2-num">02</span>
                            <span>How can I get started with your team?</span>
                        </div>
                        <div class="faq2-toggle">
                            <svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        </div>
                    </div>
                    <div class="faq2-answer">
                        It's pretty simple — just reach out through our website form, email, or WhatsApp. We'll arrange a free call to discuss your needs, then our team will create an individualized proposal and schedule tailored to your project.
                    </div>
                </div>

                <div class="faq2-item">
                    <div class="faq2-question" onclick="toggleFaq2(this)">
                        <div class="faq2-q-inner">
                            <span class="faq2-num">03</span>
                            <span>Do you manage Facebook, Instagram, and TikTok campaigns?</span>
                        </div>
                        <div class="faq2-toggle">
                            <svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        </div>
                    </div>
                    <div class="faq2-answer">
                        Yes! Strategy, content creation, and paid advertising are the main focuses of our SMM services. We work across TikTok, Facebook, LinkedIn, Instagram, and Snapchat. Our team customizes every campaign to fit your audience and brand identity.
                    </div>
                </div>

                <div class="faq2-item">
                    <div class="faq2-question" onclick="toggleFaq2(this)">
                        <div class="faq2-q-inner">
                            <span class="faq2-num">04</span>
                            <span>Do you offer a full package or individual services?</span>
                        </div>
                        <div class="faq2-toggle">
                            <svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        </div>
                    </div>
                    <div class="faq2-answer">
                        You can choose exactly what you need:
                        <ul style="margin-top:10px;">
                            <li><strong>Full-service package</strong> – an all-in-one marketing approach</li>
                            <li><strong>Individual services</strong> – pick only what you need: SEO, PPC, SMM, web, app, or video editing</li>
                        </ul>
                    </div>
                </div>

                <div class="faq2-item">
                    <div class="faq2-question" onclick="toggleFaq2(this)">
                        <div class="faq2-q-inner">
                            <span class="faq2-num">05</span>
                            <span>How do you report on progress?</span>
                        </div>
                        <div class="faq2-toggle">
                            <svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        </div>
                    </div>
                    <div class="faq2-answer">
                        We believe in full transparency. For all services — SEO, PPC, SMM, and beyond — we send regular reports showing:
                        <ul style="margin-top:10px;">
                            <li>Campaign performance</li>
                            <li>Key metrics: traffic, clicks, and conversions</li>
                            <li>Insights and recommendations for ongoing improvements</li>
                        </ul>
                    </div>
                </div>

                <div class="faq2-item">
                    <div class="faq2-question" onclick="toggleFaq2(this)">
                        <div class="faq2-q-inner">
                            <span class="faq2-num">06</span>
                            <span>What is the timeline for a mobile app project?</span>
                        </div>
                        <div class="faq2-toggle">
                            <svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        </div>
                    </div>
                    <div class="faq2-answer">
                        Most mobile app development projects take 8–12 weeks depending on complexity, features, and platform (iOS, Android, or both). You'll receive a clear timeline and milestone plan before we start, so there are no surprises.
                    </div>
                </div>

                <div class="faq2-item">
                    <div class="faq2-question" onclick="toggleFaq2(this)">
                        <div class="faq2-q-inner">
                            <span class="faq2-num">07</span>
                            <span>How much does it cost to develop an app?</span>
                        </div>
                        <div class="faq2-toggle">
                            <svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        </div>
                    </div>
                    <div class="faq2-answer">
                        App development cost depends on platform (iOS, Android, or cross-platform), features and integrations, and design complexity. We'll provide a detailed, no-obligation quote after discussing your requirements.
                    </div>
                </div>

                <div class="faq2-item">
                    <div class="faq2-question" onclick="toggleFaq2(this)">
                        <div class="faq2-q-inner">
                            <span class="faq2-num">08</span>
                            <span>Can you edit video content I've already shot?</span>
                        </div>
                        <div class="faq2-toggle">
                            <svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        </div>
                    </div>
                    <div class="faq2-answer">
                        Absolutely! Our video editing services work with your existing footage to create professional, compelling videos — ready for ads, social media, YouTube, or your website.
                    </div>
                </div>

                <div class="faq2-item">
                    <div class="faq2-question" onclick="toggleFaq2(this)">
                        <div class="faq2-q-inner">
                            <span class="faq2-num">09</span>
                            <span>Will you help me launch my digital campaigns?</span>
                        </div>
                        <div class="faq2-toggle">
                            <svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        </div>
                    </div>
                    <div class="faq2-answer">
                        Definitely. From SEO to PPC and SMM, we handle everything from setup through launch — and we keep optimizing for better results over time. You'll never be left wondering what's happening with your campaigns.
                    </div>
                </div>

            </div>

            <!-- RIGHT: Side panel -->
            <div class="faq2-side">

                <div class="faq2-cta-card">
                    <div class="faq2-cta-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                    </div>
                    <h3 class="faq2-cta-title">Still have questions?</h3>
                    <p class="faq2-cta-desc">Can't find the answer you're looking for? Our team is ready to help — we respond within 24 hours.</p>
                    <a href="contact-us/" class="faq2-cta-btn">
                        <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" width="18" height="18"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        Contact Us
                    </a>
                    <a href="mailto:contact@hashtagmedia.ae" class="faq2-cta-btn-outline">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" width="18" height="18"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        Send an Email
                    </a>
                </div>

                <div class="faq2-stats">
                    <div class="faq2-stat">
                        <div class="faq2-stat-num grad-text">500<sup>+</sup></div>
                        <div class="faq2-stat-lbl">Happy Clients</div>
                    </div>
                    <div class="faq2-stat-divider"></div>
                    <div class="faq2-stat">
                        <div class="faq2-stat-num grad-text-warm">8<sup>+</sup></div>
                        <div class="faq2-stat-lbl">Years Experience</div>
                    </div>
                    <div class="faq2-stat-divider"></div>
                    <div class="faq2-stat">
                        <div class="faq2-stat-num grad-text">30<sup>+</sup></div>
                        <div class="faq2-stat-lbl">Professionals</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include 'includes/contact-section.php'; ?>

<button id="back-to-top" onclick="window.scrollTo({top:0,behavior:'smooth'})">↑</button>

<script>
/* ── FAQ Toggle ── */
function toggleFaq2(q) {
    var item   = q.parentElement;
    var isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq2-item.open').forEach(function(i){ i.classList.remove('open'); });
    if (!isOpen) item.classList.add('open');
}

/* ── Marquee ── */
(function(){
    var t1 = [
        {text:'SEO Services',style:'d',icon:'<svg viewBox="0 0 24 24" fill="none"><circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/><line x1="21" y1="21" x2="16.65" y2="16.65" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'Content Writing',style:'b',icon:'<svg viewBox="0 0 24 24" fill="none"><path d="M12 20h9" stroke="currentColor" stroke-width="2"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'Social Media',style:'c',icon:'<svg viewBox="0 0 24 24" fill="none"><circle cx="18" cy="5" r="3" stroke="currentColor" stroke-width="2"/><circle cx="6" cy="12" r="3" stroke="currentColor" stroke-width="2"/><circle cx="18" cy="19" r="3" stroke="currentColor" stroke-width="2"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49" stroke="currentColor" stroke-width="2"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'PPC & Google Ads',style:'e',icon:'<svg viewBox="0 0 24 24" fill="none"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'Web Development',style:'a',icon:'<svg viewBox="0 0 24 24" fill="none"><polyline points="16 18 22 12 16 6" stroke="currentColor" stroke-width="2"/><polyline points="8 6 2 12 8 18" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'Video Editing',style:'b',icon:'<svg viewBox="0 0 24 24" fill="none"><polygon points="23 7 16 12 23 17 23 7" stroke="currentColor" stroke-width="2"/><rect x="1" y="5" width="15" height="14" rx="2" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'Meta Ads',style:'c',icon:'<svg viewBox="0 0 24 24" fill="none"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'UI/UX Design',style:'d',icon:'<svg viewBox="0 0 24 24" fill="none"><rect x="3" y="3" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2"/><path d="M3 9h18M9 21V9" stroke="currentColor" stroke-width="2"/></svg>'},
    ];
    var t2 = [
        {text:'Email Marketing',style:'a',icon:'<svg viewBox="0 0 24 24" fill="none"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" stroke="currentColor" stroke-width="2"/><polyline points="22,6 12,13 2,6" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'Brand Strategy',style:'c',icon:'<svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path d="M8 12h8M12 8v8" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'E-Commerce',style:'e',icon:'<svg viewBox="0 0 24 24" fill="none"><circle cx="9" cy="21" r="1" stroke="currentColor" stroke-width="2"/><circle cx="20" cy="21" r="1" stroke="currentColor" stroke-width="2"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'App Development',style:'b',icon:'<svg viewBox="0 0 24 24" fill="none"><rect x="5" y="2" width="14" height="20" rx="2" stroke="currentColor" stroke-width="2"/><line x1="12" y1="18" x2="12.01" y2="18" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'Analytics',style:'d',icon:'<svg viewBox="0 0 24 24" fill="none"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'Optimization',style:'a',icon:'<svg viewBox="0 0 24 24" fill="none"><line x1="18" y1="20" x2="18" y2="10" stroke="currentColor" stroke-width="2"/><line x1="12" y1="20" x2="12" y2="4" stroke="currentColor" stroke-width="2"/><line x1="6" y1="20" x2="6" y2="14" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'Local SEO',style:'c',icon:'<svg viewBox="0 0 24 24" fill="none"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke="currentColor" stroke-width="2"/><circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2"/></svg>'},
        {text:'Keyword Research',style:'e',icon:'<svg viewBox="0 0 24 24" fill="none"><circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/><line x1="21" y1="21" x2="16.65" y2="16.65" stroke="currentColor" stroke-width="2"/><line x1="8" y1="11" x2="14" y2="11" stroke="currentColor" stroke-width="2"/><line x1="11" y1="8" x2="11" y2="14" stroke="currentColor" stroke-width="2"/></svg>'},
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

/* ── Back to top ── */
window.addEventListener('scroll', function(){
    var btn = document.getElementById('back-to-top');
    if(window.scrollY > 400) btn.classList.add('visible');
    else btn.classList.remove('visible');
});
</script>
<?php include 'includes/virex-floating-social.php'; ?>
<?php include 'includes/footer.php'; ?>
</body>
</html>