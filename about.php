<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Our Company – Virex Social</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --purple:       #6254e7;
            --purple-light: #9289f1;
            --dark:         #3b3663;
            --orange:       #ff7426;
            --text:         #7a7a7a;
            --white:        #fff;
            --bg:           #f9f9fc;
        }

        body {
            font-family: 'Rubik', sans-serif;
            color: var(--text);
            background: var(--white);
            overflow-x: hidden;
        }
        h1,h2,h3,h4,h5,h6 { font-family: 'Nunito', sans-serif; font-weight: 800; color: var(--dark); }
        a { text-decoration: none; color: inherit; }
        p { color: var(--text); }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 30px; width: 100%; }

        /* ─── SECTION LABELS ─── */
        .section-label {
            font-family: 'Nunito', sans-serif; font-weight: 700; font-size: 13px;
            letter-spacing: 2px; text-transform: uppercase; color: var(--purple); margin-bottom: 12px;
        }
        .section-title { font-size: clamp(28px,4vw,42px); color: var(--dark); margin-bottom: 16px; line-height: 1.2; }
        .section-desc  { font-size: 17px; color: var(--text); line-height: 1.7; }

        /* ─────────────────────────────────────────
           HERO — same style as blog page
        ───────────────────────────────────────── */
        .about-hero {
            position: relative;
            overflow: hidden;
            padding: 140px 0 120px;
            text-align: center;
            background: #3a3af0;
        }
        .about-hero::before {
            content: '';
            position: absolute; inset: 0;
            background:
                radial-gradient(ellipse 80% 80% at 0% 50%, #5b3de8 0%, transparent 60%),
                radial-gradient(ellipse 60% 100% at 100% 30%, #8b2fc9 0%, transparent 55%),
                radial-gradient(ellipse 70% 60% at 50% 100%, #2222cc 0%, transparent 60%),
                linear-gradient(135deg, #3535e8 0%, #4c2bc4 40%, #7b1fa2 100%);
            z-index: 0;
        }
        .blob-1 { position:absolute; width:65%; height:200%; top:-60%; left:-15%; background:linear-gradient(140deg,rgba(0,180,220,.55) 0%,rgba(40,120,255,.35) 50%,transparent 80%); border-radius:60% 40% 70% 30%/50% 60% 40% 50%; transform:rotate(-15deg); z-index:1; filter:blur(2px); }
        .blob-2 { position:absolute; width:55%; height:180%; top:-40%; left:-5%; background:linear-gradient(160deg,rgba(0,210,240,.3) 0%,rgba(20,100,220,.2) 60%,transparent 90%); border-radius:45% 55% 60% 40%/60% 40% 60% 40%; transform:rotate(-10deg); z-index:1; filter:blur(1px); }
        .blob-3 { position:absolute; width:50%; height:150%; top:-25%; right:-10%; background:radial-gradient(ellipse 80% 80% at 60% 40%,rgba(160,40,200,.75) 0%,rgba(120,20,180,.5) 40%,transparent 75%); border-radius:50% 50% 40% 60%/40% 60% 40% 60%; z-index:1; }
        .blob-4 { position:absolute; width:70%; height:60%; bottom:-20%; left:50%; transform:translateX(-50%); background:radial-gradient(ellipse 60% 60% at 50% 80%,rgba(40,40,180,.6) 0%,transparent 70%); z-index:1; }
        .blob-5 { position:absolute; width:45%; height:130%; top:-15%; left:5%; background:linear-gradient(150deg,rgba(0,230,255,.18) 0%,rgba(0,180,220,.1) 50%,transparent 80%); border-radius:30% 70% 50% 50%/50% 50% 50% 50%; transform:rotate(-5deg); z-index:2; filter:blur(.5px); }

        .hero-content { position:relative; z-index:10; }

        .about-hero h1 {
            font-family: 'Nunito', sans-serif;
            font-size: clamp(28px,4.5vw,52px);
            font-weight: 800;
            line-height: 1.15;
            color: #fff;
            margin-bottom: 18px;
            letter-spacing: -0.5px;
        }
        .about-hero p.lead {
            color: rgba(255,255,255,0.80) !important;
            font-size: 16px;
            max-width: 640px;
            margin: 0 auto 32px;
            line-height: 1.7;
            font-weight: 400;
        }
        .hero-stats {
            display: flex;
            gap: 40px;
            justify-content: center;
            margin-bottom: 36px;
            flex-wrap: wrap;
        }
        .hero-stat { text-align: center; }
        .stat-number {
            font-family: 'Nunito', sans-serif; font-weight: 900;
            font-size: 36px; color: #fff; line-height: 1;
        }
        .stat-number sup { font-size: 20px; color: var(--orange); }
        .stat-label { font-size: 13px; color: rgba(255,255,255,0.65); margin-top: 4px; }

        .btn-hero {
            background: rgba(108,60,255,0.55);
            color: #fff;
            border: 1.5px solid rgba(255,255,255,0.45);
            padding: 14px 36px;
            border-radius: 8px;
            font-family: 'Nunito', sans-serif;
            font-weight: 700;
            font-size: 15px;
            transition: all 0.3s;
            display: inline-block;
        }
        .btn-hero:hover {
            background: rgba(108,60,255,0.85);
            color: #fff;
            border-color: rgba(255,255,255,0.70);
            transform: translateY(-2px);
        }

        /* ─────────────────────────────────────────
           WHO WE ARE
        ───────────────────────────────────────── */
        .about-intro { padding: 100px 0; position: relative; overflow: hidden; background: linear-gradient(160deg,#f9f9fc 0%,#efe9ff 50%,#f9f9fc 100%); }

        .intro-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; }

        /* Animated lottie-style illustration placeholder */
        .intro-illus-wrap {
            position: relative;
            display: flex; align-items: center; justify-content: center;
        }
        .intro-illus-wrap img {
            width: 100%;
            max-width: 460px;
            display: block;
            animation: floatY 5s ease-in-out infinite;
            border-radius: 20px;
        }
        @keyframes floatY { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-14px)} }

        .intro-badge {
            position: absolute; bottom: -20px; right: -10px;
            background: linear-gradient(135deg,var(--orange),#f0ac0e);
            color: white; font-family: 'Nunito',sans-serif; font-weight: 900;
            padding: 22px; border-radius: 18px; text-align: center;
            box-shadow: 0 20px 50px rgba(255,116,38,0.35);
        }
        .intro-badge .num { font-size: 38px; line-height: 1; }
        .intro-badge .lbl { font-size: 12px; font-weight: 600; opacity:.9; }

        .intro-features { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 36px; }

        .intro-feature { display: flex; align-items: flex-start; gap: 14px; }
        .feature-icon {
            width: 48px; height: 48px;
            background: rgba(98,84,231,0.1);
            border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            flex-shrink: 0;
        }
        .feature-icon svg { width: 24px; height: 24px; }
        .feature-text strong { display: block; font-family:'Nunito',sans-serif; font-weight:800; font-size:15px; color:var(--dark); margin-bottom:4px; }
        .feature-text span { font-size:13px; color:var(--text); }

        .btn-primary {
            display: inline-flex; align-items: center; gap: 10px;
            background: linear-gradient(96deg,#9289f1,#6254e7);
            color: white; font-family:'Nunito',sans-serif; font-weight:700; font-size:15px;
            padding: 16px 36px; border-radius: 8px; transition: all .3s;
            box-shadow: 0 10px 30px rgba(98,84,231,0.25);
        }
        .btn-primary:hover { transform:translateY(-3px); box-shadow:0 15px 40px rgba(98,84,231,0.4); }

        /* ─────────────────────────────────────────
           MARQUEE
        ───────────────────────────────────────── */
        .scrolling-section { background: linear-gradient(96deg,#9289f1,#6254e7); overflow:hidden; padding:0; }
        .scrolling-track { display:flex; gap:60px; animation:scrollLeft 22s linear infinite; padding:28px 0; white-space:nowrap; }
        @keyframes scrollLeft { from{transform:translateX(0)} to{transform:translateX(-50%)} }
        .scroll-item { font-family:'Nunito',sans-serif; font-weight:900; font-size:clamp(16px,2.5vw,26px); color:rgba(255,255,255,0.35); letter-spacing:2px; text-transform:uppercase; flex-shrink:0; }
        .scroll-item span { color:rgba(255,255,255,0.85); margin-right:60px; }

        /* ─────────────────────────────────────────
           TABS — VALUES / MISSION
        ───────────────────────────────────────── */
        .about-tabs { padding:100px 0; background: linear-gradient(135deg,#fff 0%,#f3f0ff 60%,#fff 100%); }
        .tabs-header { text-align:center; margin-bottom:50px; }
        .tabs-header .section-desc { max-width:540px; margin:0 auto; }

        .tab-switcher {
            display:inline-flex; background:white; border:1px solid rgba(98,84,231,0.1);
            border-radius:50px; padding:5px; margin-bottom:56px;
            box-shadow:0 4px 20px rgba(98,84,231,0.08);
        }
        .tab-btn {
            display:inline-flex; align-items:center; gap:8px;
            padding:11px 28px; border-radius:50px; border:none; background:transparent;
            font-family:'Nunito',sans-serif; font-size:14px; font-weight:700; color:var(--text);
            cursor:pointer; transition:all .3s;
        }
        .tab-btn.active { background:linear-gradient(96deg,#9289f1,#6254e7); color:white; box-shadow:0 6px 20px rgba(98,84,231,0.3); }
        .tab-btn svg { width:16px; height:16px; }

        .tab-panel { display:none; }
        .tab-panel.active { display:block; }

        .tab-content-grid { display:grid; grid-template-columns:1fr 1fr; gap:60px; align-items:center; }
        .tab-text h3 { font-size:clamp(22px,3vw,32px); color:var(--dark); margin-bottom:16px; line-height:1.2; }
        .tab-text p  { font-size:15.5px; color:var(--text); line-height:1.72; margin-bottom:26px; }

        .tab-point { display:flex; gap:14px; align-items:flex-start; margin-bottom:20px; }
        .tab-point-icon { width:40px; height:40px; border-radius:11px; display:flex; align-items:center; justify-content:center; flex-shrink:0; }
        .tab-point-icon svg { width:20px; height:20px; }
        .tpi-purple { background:rgba(98,84,231,0.1); }
        .tpi-orange  { background:rgba(255,116,38,0.1); }
        .tpi-green   { background:rgba(34,197,94,0.1); }
        .tab-point strong { display:block; font-family:'Nunito',sans-serif; font-weight:800; font-size:14.5px; color:var(--dark); margin-bottom:3px; }
        .tab-point p { font-size:13.5px; color:var(--text); line-height:1.6; margin:0; }
        .tab-img img { width:100%; border-radius:20px; box-shadow:0 24px 70px rgba(0,0,0,0.1); display:block; animation: floatY 6s ease-in-out infinite; }

        .btn-outline {
            display:inline-flex; align-items:center; gap:8px;
            border:2px solid var(--purple); color:var(--purple);
            font-family:'Nunito',sans-serif; font-weight:700; font-size:14px;
            padding:14px 32px; border-radius:8px; transition:all .3s;
            text-transform:uppercase; letter-spacing:.5px; margin-top:8px;
        }
        .btn-outline:hover { background:var(--purple); color:white; box-shadow:0 10px 30px rgba(98,84,231,0.3); }

        /* ─────────────────────────────────────────
           SERVICES
        ───────────────────────────────────────── */
        .about-services { padding:100px 0; background:linear-gradient(160deg,#f9f9fc 0%,#eef5ff 50%,#f9f9fc 100%); }
        .services-header { text-align:center; margin-bottom:56px; }
        .services-header .section-desc { max-width:520px; margin:0 auto; }
        .services-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:24px; }

        .service-card {
            background:white; border-radius:20px; padding:36px 30px;
            box-shadow:0 4px 24px rgba(0,0,0,0.06); transition:all .35s cubic-bezier(.4,0,.2,1);
            border:1px solid rgba(98,84,231,0.06); position:relative; overflow:hidden;
        }
        .service-card::before { content:''; position:absolute; inset:0; background:linear-gradient(135deg,#9289f1,#6254e7); opacity:0; transition:opacity .35s; }
        .service-card:hover::before { opacity:1; }
        .service-card:hover { transform:translateY(-8px); box-shadow:0 20px 60px rgba(98,84,231,0.3); }
        .service-card > * { position:relative; z-index:1; }

        .service-icon {
            width:64px; height:64px; border-radius:16px;
            display:flex; align-items:center; justify-content:center;
            margin-bottom:20px; background:rgba(98,84,231,0.08); transition:all .35s;
        }
        .service-icon svg { width:30px; height:30px; transition: all .35s; }
        .service-title { font-size:20px; font-weight:800; color:var(--dark); margin-bottom:12px; transition:color .35s; }
        .service-card:hover .service-title { color:white; }
        .service-desc  { font-size:15px; line-height:1.7; color:var(--text); transition:color .35s; }
        .service-card:hover .service-desc  { color:rgba(255,255,255,0.85); }
        .service-card:hover .service-icon svg { stroke: white; }

        /* ─────────────────────────────────────────
           SKILLS
        ───────────────────────────────────────── */
        .about-skills { padding:100px 0; background:#fff; }
        .skills-grid { display:grid; grid-template-columns:1fr 1fr; gap:80px; align-items:center; }
        .skills-img img { width:100%; border-radius:20px; box-shadow:0 24px 70px rgba(0,0,0,0.1); display:block; animation:floatY 5.5s ease-in-out infinite; }
        .skills-content .section-desc { margin-bottom:40px; max-width:480px; }

        .skill-bar { margin-bottom:28px; }
        .skill-bar-top { display:flex; justify-content:space-between; margin-bottom:10px; }
        .skill-name { font-family:'Nunito',sans-serif; font-weight:700; font-size:14px; color:var(--dark); display:flex; align-items:center; gap:8px; }
        .skill-name svg { width:16px; height:16px; }
        .skill-pct  { font-family:'Nunito',sans-serif; font-weight:800; font-size:14px; color:var(--purple); }
        .skill-track { height:8px; background:rgba(98,84,231,0.1); border-radius:50px; overflow:hidden; }
        .skill-fill { height:100%; border-radius:50px; background:linear-gradient(90deg,#9289f1,#6254e7); width:0; transition:width 1.4s cubic-bezier(.4,0,.2,1); }
        .skill-fill.orange { background:linear-gradient(90deg,#f0ac0e,#ff7426); }
        .skill-fill.green  { background:linear-gradient(90deg,#22c55e,#16a34a); }
        .skill-fill.cyan   { background:linear-gradient(90deg,#06b6d4,#0891b2); }
        .skill-fill.animate{ width:var(--w); }

        /* ─────────────────────────────────────────
           TEAM
        ───────────────────────────────────────── */
        .about-team { padding:100px 0; background:linear-gradient(160deg,#f3f0ff 0%,#f9f9fc 50%,#f0f7ff 100%); }
        .team-header { text-align:center; margin-bottom:56px; }
        .team-header .section-desc { max-width:520px; margin:0 auto; }
        .team-grid { display:grid; grid-template-columns:repeat(4,1fr); gap:26px; }

        .team-card {
            background:white; border-radius:20px; border:1px solid rgba(98,84,231,0.08);
            overflow:hidden; box-shadow:0 4px 24px rgba(0,0,0,0.06); transition:all .32s;
        }
        .team-card:hover { transform:translateY(-8px); box-shadow:0 20px 60px rgba(98,84,231,0.15); border-color:rgba(98,84,231,0.2); }
        .team-card-img { width:100%; height:230px; object-fit:cover; display:block; transition:transform .5s; }
        .team-card:hover .team-card-img { transform:scale(1.05); }
        .team-card-body { padding:20px 22px; }
        .team-card-name { font-family:'Nunito',sans-serif; font-size:17px; font-weight:800; color:var(--dark); margin-bottom:4px; }
        .team-card-role { font-size:13px; color:var(--purple); font-weight:500; margin-bottom:14px; }
        .team-socials { display:flex; gap:8px; }
        .tsocial { width:30px; height:30px; border-radius:8px; background:var(--bg); display:flex; align-items:center; justify-content:center; transition:all .25s; }
        .tsocial svg { width:14px; height:14px; }
        .tsocial:hover { background:var(--purple); }
        .tsocial:hover svg { stroke: white; }

        .team-cta-box { text-align:center; margin-top:50px; padding:44px 40px; background:white; border-radius:24px; border:1px solid rgba(98,84,231,0.1); box-shadow:0 8px 40px rgba(98,84,231,0.08); }
        .team-cta-box h4 { font-size:22px; margin-bottom:10px; }
        .team-cta-box p  { font-size:15px; color:var(--text); margin-bottom:22px; max-width:400px; margin-left:auto; margin-right:auto; line-height:1.65; }

        /* ─────────────────────────────────────────
           TESTIMONIALS
        ───────────────────────────────────────── */
        .about-testimonials { padding:100px 0; position:relative; overflow:hidden; background:linear-gradient(135deg,#3b3663 0%,#2a2547 100%); }
        .test-header { text-align:center; margin-bottom:56px; position:relative; z-index:2; }
        .test-header .section-title { color:white; }
        .test-header .section-label { color:var(--orange); }

        .testimonials-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:24px; position:relative; z-index:2; }
        .testimonial-card {
            background:rgba(255,255,255,0.06); border:1px solid rgba(255,255,255,0.1);
            border-radius:20px; padding:36px; transition:all .3s; backdrop-filter:blur(10px);
        }
        .testimonial-card:hover { background:rgba(255,255,255,0.1); border-color:rgba(255,255,255,0.2); transform:translateY(-5px); }
        .testimonial-stars { color:#f0ac0e; font-size:16px; margin-bottom:18px; letter-spacing:2px; }
        .quote-icon { font-size:42px; color:var(--purple-light); opacity:.6; font-family:Georgia,serif; line-height:1; margin-bottom:14px; }
        .testimonial-text { font-size:15px; line-height:1.8; color:rgba(255,255,255,0.80); font-style:italic; margin-bottom:24px; }
        .testimonial-author { display:flex; align-items:center; gap:14px; }
        .author-avatar { width:50px; height:50px; border-radius:50%; background:linear-gradient(135deg,var(--purple-light),var(--purple)); display:flex; align-items:center; justify-content:center; font-family:'Nunito',sans-serif; font-weight:900; font-size:18px; color:white; flex-shrink:0; }
        .author-info strong { display:block; font-family:'Nunito',sans-serif; font-weight:800; font-size:15px; color:white; }
        .author-info span { font-size:13px; color:rgba(255,255,255,0.5); }

        /* ─────────────────────────────────────────
           WHY CHOOSE US
        ───────────────────────────────────────── */
        .about-why { padding:100px 0; background:#fff; }
        .why-grid { display:grid; grid-template-columns:1fr 1fr; gap:80px; align-items:center; }
        .why-img { position:relative; }
        .why-img img { width:100%; border-radius:20px; box-shadow:0 30px 80px rgba(0,0,0,0.1); display:block; animation:floatY 6s ease-in-out infinite; }
        .why-badge {
            position:absolute; top:30px; left:-20px;
            background:linear-gradient(135deg,var(--orange),#f0ac0e);
            color:white; font-family:'Nunito',sans-serif; font-weight:900;
            padding:20px 22px; border-radius:16px; text-align:center;
            box-shadow:0 16px 40px rgba(255,116,38,0.4);
        }
        .why-badge .num { font-size:34px; line-height:1; }
        .why-badge .lbl { font-size:12px; font-weight:600; opacity:.9; }
        .why-content .section-desc { margin-bottom:36px; max-width:500px; }
        .why-item { display:flex; gap:18px; align-items:flex-start; margin-bottom:24px; padding:20px 22px; border-radius:16px; border:1px solid transparent; transition:all .3s; }
        .why-item:hover { border-color:rgba(98,84,231,0.15); box-shadow:0 8px 30px rgba(98,84,231,0.08); transform:translateX(6px); background:white; }
        .why-num { width:44px; height:44px; border-radius:12px; background:linear-gradient(135deg,#9289f1,#6254e7); display:flex; align-items:center; justify-content:center; font-family:'Nunito',sans-serif; font-size:17px; font-weight:900; color:white; flex-shrink:0; box-shadow:0 6px 18px rgba(98,84,231,0.3); }
        .why-item h5 { font-size:16px; color:var(--dark); margin-bottom:5px; }
        .why-item p  { font-size:14px; color:var(--text); line-height:1.6; margin:0; }

        /* ─────────────────────────────────────────
           PROCESS
        ───────────────────────────────────────── */
        .about-process { padding:100px 0 160px; position:relative; overflow:hidden; background:linear-gradient(135deg,#3b3663 0%,#2a2547 100%); }
        .about-process::after { content:''; position:absolute; bottom:0; left:0; right:0; height:120px; background:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 120'%3E%3Cpath fill='%23ffffff' d='M0,60L1440,0L1440,120L0,120Z'/%3E%3C/svg%3E") no-repeat bottom; background-size:cover; z-index:2; }
        .process-header { text-align:center; margin-bottom:60px; position:relative; z-index:3; }
        .process-header .section-title { color:white; }
        .process-header .section-label { color:var(--orange); }
        .process-grid { display:grid; grid-template-columns:repeat(4,1fr); gap:30px; position:relative; z-index:3; }
        .process-card { text-align:center; position:relative; }
        .process-card::after { content:'→'; position:absolute; top:36px; right:-18px; color:rgba(255,255,255,0.2); font-size:24px; }
        .process-card:last-child::after { display:none; }
        .process-icon { width:80px; height:80px; background:rgba(255,255,255,0.07); border:2px solid rgba(255,255,255,0.1); border-radius:20px; display:flex; align-items:center; justify-content:center; margin:0 auto 20px; transition:all .3s; }
        .process-icon svg { width:38px; height:38px; stroke:rgba(255,255,255,0.7); transition:all .3s; }
        .process-card:hover .process-icon { background:var(--purple); border-color:var(--purple); }
        .process-card:hover .process-icon svg { stroke:white; }
        .process-title { font-size:18px; color:white; margin-bottom:10px; }
        .process-desc  { font-size:14px; color:rgba(255,255,255,0.6); line-height:1.7; }

        /* ─────────────────────────────────────────
           FAQ
        ───────────────────────────────────────── */
        .about-faq { padding:100px 0; background:linear-gradient(160deg,#f0fff8 0%,#f9f9fc 50%,#f0f4ff 100%); }
        .faq-inner { display:grid; grid-template-columns:1fr 1fr; gap:80px; align-items:start; }
        .faq-left h3 { font-size:clamp(26px,3vw,36px); margin-bottom:16px; }
        .faq-left p  { font-size:15px; color:var(--text); line-height:1.7; margin-bottom:32px; }
        .faq-contact-box { background:linear-gradient(135deg,#6254e7,#9289f1); border-radius:20px; padding:28px; color:white; }
        .faq-contact-box h5 { font-size:18px; margin-bottom:10px; color:#fff; }
        .faq-contact-box p  { font-size:14px; color:rgba(255,255,255,0.75) !important; margin-bottom:20px; line-height:1.6; }
        .btn-faq { display:inline-flex; align-items:center; gap:8px; background:white; color:var(--purple); font-family:'Nunito',sans-serif; font-size:13.5px; font-weight:700; padding:12px 24px; border-radius:50px; transition:all .3s; }
        .btn-faq svg { width:14px; height:14px; }
        .btn-faq:hover { background:var(--orange); color:white; }

        .faq-list { display:flex; flex-direction:column; gap:14px; }
        .faq-item { background:white; border-radius:16px; border:1px solid rgba(98,84,231,0.08); overflow:hidden; transition:box-shadow .3s; box-shadow:0 2px 12px rgba(0,0,0,0.04); }
        .faq-item:hover { box-shadow:0 8px 30px rgba(98,84,231,0.1); }
        .faq-question { padding:20px 22px; display:flex; justify-content:space-between; align-items:center; cursor:pointer; font-family:'Nunito',sans-serif; font-weight:700; font-size:15px; color:var(--dark); gap:14px; user-select:none; }
        .faq-toggle { width:32px; height:32px; background:rgba(98,84,231,0.1); border-radius:50%; display:flex; align-items:center; justify-content:center; flex-shrink:0; color:var(--purple); font-size:20px; font-weight:700; transition:all .3s; }
        .faq-item.open .faq-toggle { background:var(--purple); color:white; transform:rotate(45deg); }
        .faq-answer { max-height:0; overflow:hidden; transition:max-height .4s ease,padding .3s; font-size:14.5px; line-height:1.7; color:var(--text); padding:0 22px; }
        .faq-item.open .faq-answer { max-height:300px; padding:0 22px 20px; }

        /* ─────────────────────────────────────────
           BACK TO TOP
        ───────────────────────────────────────── */
        #back-to-top { position:fixed; bottom:40px; right:40px; width:48px; height:48px; background:linear-gradient(135deg,var(--purple-light),var(--purple)); color:white; border:none; border-radius:12px; cursor:pointer; display:none; align-items:center; justify-content:center; box-shadow:0 8px 24px rgba(98,84,231,0.4); z-index:999; transition:all .3s; }
        #back-to-top.visible { display:flex; }
        #back-to-top:hover { transform:translateY(-4px); }
        #back-to-top svg { width:20px; height:20px; }

        /* ─────────────────────────────────────────
           RESPONSIVE
        ───────────────────────────────────────── */
        @media(max-width:991px){
            .intro-grid,.tab-content-grid,.skills-grid,.why-grid,.faq-inner { grid-template-columns:1fr; }
            .intro-badge,.why-badge { display:none; }
            .services-grid { grid-template-columns:repeat(2,1fr); }
            .team-grid { grid-template-columns:repeat(2,1fr); }
            .testimonials-grid { grid-template-columns:1fr; }
            .process-grid { grid-template-columns:repeat(2,1fr); }
        }
        @media(max-width:600px){
            .services-grid,.process-grid { grid-template-columns:1fr; }
            .team-grid { grid-template-columns:1fr 1fr; }
            .intro-features { grid-template-columns:1fr; }
        }
        @media(max-width:420px){ .team-grid { grid-template-columns:1fr; } }
        @media(max-width:767px){
            .about-hero { padding:90px 0 80px; }
            .blob-1 { width:100%; left:-30%; }
            .blob-3 { width:70%; right:-20%; }
        }
    </style>
</head>
<body>

<!-- ═══════════════════════════════════
     HERO — Same UI as Blog Page
═══════════════════════════════════ -->
<section class="about-hero">
    <div class="blob-1"></div>
    <div class="blob-2"></div>
    <div class="blob-3"></div>
    <div class="blob-4"></div>
    <div class="blob-5"></div>

    <div class="container hero-content">
        <h1>About Our Company — Driven by Passion, Built on Trust</h1>
        <p class="lead">
            We're more than a digital agency — we're a team that believes in purpose, partnership, and performance.
            Learn the 3 things clients love about our company.
        </p>
    
        <a href="contact-us/" class="btn-hero">Contact Today</a>
    </div>
</section>

<!-- ═══════════════════════════════════
     WHO WE ARE
═══════════════════════════════════ -->
<section class="about-intro">
    <div class="container">
        <div class="intro-grid">
            <div class="intro-illus-wrap">
                <img src="https://illustrations.popsy.co/amber/team-work.svg" alt="Our Team">
                <div class="intro-badge">
                    <div class="num">10+</div>
                    <div class="lbl">Years of<br>Experience</div>
                </div>
            </div>
            <div class="intro-content">
                <div class="section-label">About Us</div>
                <h2 class="section-title">Outstanding Digital<br>Experience</h2>
                <p class="section-desc" style="margin-bottom:32px;">
                    Great design is just the beginning. Our digital marketing services are built to create smooth, powerful online experiences that connect and convert. We help brands tell their story in ways that feel real, engaging, and unforgettable.
                </p>
                <div class="intro-features">
                    <div class="intro-feature">
                        <div class="feature-icon">
                            <!-- Target / Bullseye icon -->
                            <svg viewBox="0 0 24 24" fill="none" stroke="#6254e7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
                        </div>
                        <div class="feature-text">
                            <strong>Targeted Campaigns</strong>
                            <span>Reach the right audience every time</span>
                        </div>
                    </div>
                    <div class="intro-feature">
                        <div class="feature-icon">
                            <!-- Chart bar icon -->
                            <svg viewBox="0 0 24 24" fill="none" stroke="#6254e7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/><line x1="2" y1="20" x2="22" y2="20"/></svg>
                        </div>
                        <div class="feature-text">
                            <strong>Proven Results</strong>
                            <span>Data-driven strategies that work</span>
                        </div>
                    </div>
                    <div class="intro-feature">
                        <div class="feature-icon">
                            <!-- Lightning / Zap icon -->
                            <svg viewBox="0 0 24 24" fill="none" stroke="#6254e7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                        </div>
                        <div class="feature-text">
                            <strong>Fast Execution</strong>
                            <span>Quick turnaround without compromise</span>
                        </div>
                    </div>
                    <div class="intro-feature">
                        <div class="feature-icon">
                            <!-- Handshake / Users icon -->
                            <svg viewBox="0 0 24 24" fill="none" stroke="#6254e7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        </div>
                        <div class="feature-text">
                            <strong>Dedicated Support</strong>
                            <span>Your success is our priority</span>
                        </div>
                    </div>
                </div>
                <a href="about-our-company/" class="btn-primary">Discover More
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════
     MARQUEE
═══════════════════════════════════ -->
<section class="scrolling-section">
    <div style="overflow:hidden;">
        <div class="scrolling-track">
            <?php for($i=0;$i<6;$i++): ?>
            <span class="scroll-item"><span>Website Designing</span> ✦ WordPress Development ✦ <span>Digital Marketing</span> ✦ SEO Services ✦</span>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════
     TABS — VALUES / MISSION
═══════════════════════════════════ -->
<section class="about-tabs">
    <div class="container">
        <div class="tabs-header">
            <div class="section-label">Driven by Purpose</div>
            <h2 class="section-title">Empowering Brands<br>in the Digital Age</h2>
            <p class="section-desc">When you learn about our company, you'll see we blend creativity, strategy, and technology to help brands connect with people, build trust, and get real results.</p>
        </div>

        <div style="text-align:center;">
            <div class="tab-switcher">
                <button class="tab-btn active" onclick="switchTab('values',this)">
                    <!-- Diamond icon -->
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    Our Values
                </button>
                <button class="tab-btn" onclick="switchTab('mission',this)">
                    <!-- Crosshair icon -->
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="22" y1="12" x2="18" y2="12"/><line x1="6" y1="12" x2="2" y2="12"/><line x1="12" y1="6" x2="12" y2="2"/><line x1="12" y1="22" x2="12" y2="18"/></svg>
                    Our Mission
                </button>
            </div>
        </div>

        <!-- VALUES -->
        <div class="tab-panel active" id="tab-values">
            <div class="tab-content-grid">
                <div class="tab-text">
                    <h3>Building Digital Experiences That Drive Results</h3>
                    <p>At Virex Social, our core values guide everything we do. From how we treat our clients to how we approach every campaign — integrity, innovation, and impact are at the heart of it all.</p>
                    <div class="tab-point">
                        <div class="tab-point-icon tpi-purple">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#6254e7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                        </div>
                        <div><strong>Client First, Always</strong><p>We put our clients first. Your goals guide every step of our strategy and creative process.</p></div>
                    </div>
                    <div class="tab-point">
                        <div class="tab-point-icon tpi-orange">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#ff7426" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/><line x1="2" y1="20" x2="22" y2="20"/></svg>
                        </div>
                        <div><strong>Results Over Everything</strong><p>We use data and insights to make better choices and deliver measurable, meaningful outcomes.</p></div>
                    </div>
                    <div class="tab-point">
                        <div class="tab-point-icon tpi-green">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                        </div>
                        <div><strong>Constant Innovation</strong><p>We stay current with the latest tools and trends so your brand always stays a step ahead.</p></div>
                    </div>
                    <a href="services/" class="btn-outline">View Our Services
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
                <div class="tab-img">
                    <img src="https://illustrations.popsy.co/amber/success.svg" alt="Our Values">
                </div>
            </div>
        </div>

        <!-- MISSION -->
        <div class="tab-panel" id="tab-mission">
            <div class="tab-content-grid">
                <div class="tab-img">
                    <img src="https://illustrations.popsy.co/amber/remote-work.svg" alt="Our Mission">
                </div>
                <div class="tab-text">
                    <h3>Do You Know About Our Company?</h3>
                    <p>We are Virex Social. We help brands grow, connect, and inspire. Our mission is simple — help businesses achieve digital success through creative thinking and smart execution.</p>
                    <div class="tab-point">
                        <div class="tab-point-icon tpi-purple">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#6254e7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 17H2a3 3 0 0 0 3-3V9a7 7 0 0 1 14 0v5a3 3 0 0 0 3 3zm-8.27 4a2 2 0 0 1-3.46 0"/></svg>
                        </div>
                        <div><strong>Future-Ready Solutions</strong><p>We push creative and tech limits to deliver smart, future-ready digital solutions for every client.</p></div>
                    </div>
                    <div class="tab-point">
                        <div class="tab-point-icon tpi-orange">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#ff7426" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                        </div>
                        <div><strong>Real Human Connections</strong><p>We tell real stories that build authentic human connections between brands and their audiences.</p></div>
                    </div>
                    <div class="tab-point">
                        <div class="tab-point-icon tpi-green">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                        </div>
                        <div><strong>Global Impact</strong><p>We aim to be the region's leading digital agency and grow our influence worldwide.</p></div>
                    </div>
                    <a href="services/" class="btn-outline">View Our Services
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════
     SKILLS
═══════════════════════════════════ -->
<section class="about-skills">
    <div class="container">
        <div class="skills-grid">
            <div class="skills-img">
                <img src="https://illustrations.popsy.co/amber/app-launch.svg" alt="Our Skills">
            </div>
            <div class="skills-content">
                <div class="section-label">Our Expertise</div>
                <h2 class="section-title">Skills That Make<br>the Difference</h2>
                <p class="section-desc">We combine technical expertise with creative thinking. Every skill we have is sharpened to give your brand a competitive edge in the digital world.</p>
                <?php
                $skills = [
                    ['Creative & Design Tools',  99, '', '<svg viewBox="0 0 24 24" fill="none" stroke="#6254e7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="13.5" cy="6.5" r=".5" fill="#6254e7"/><circle cx="17.5" cy="10.5" r=".5" fill="#6254e7"/><circle cx="8.5" cy="7.5" r=".5" fill="#6254e7"/><circle cx="6.5" cy="12.5" r=".5" fill="#6254e7"/><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z"/></svg>'],
                    ['Email Marketing',          89, 'orange', '<svg viewBox="0 0 24 24" fill="none" stroke="#ff7426" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>'],
                    ['SEO & Web Performance',    92, 'green', '<svg viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>'],
                    ['Social Media Strategy',    95, '', '<svg viewBox="0 0 24 24" fill="none" stroke="#6254e7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>'],
                    ['Video & Content Creation', 88, 'cyan', '<svg viewBox="0 0 24 24" fill="none" stroke="#06b6d4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/></svg>'],
                ];
                foreach($skills as $sk): ?>
                <div class="skill-bar">
                    <div class="skill-bar-top">
                        <div class="skill-name"><?= $sk[3] ?> <?= $sk[0] ?></div>
                        <div class="skill-pct"><?= $sk[1] ?>%</div>
                    </div>
                    <div class="skill-track">
                        <div class="skill-fill <?= $sk[2] ?>" style="--w:<?= $sk[1] ?>%;"></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════
     TESTIMONIALS
═══════════════════════════════════ -->
<section class="about-testimonials">
    <div class="container">
        <div class="test-header">
            <div class="section-label">Testimonials</div>
            <h2 class="section-title">What People Say</h2>
        </div>
        <div class="testimonials-grid">
            <?php
            $tests = [
                ['"Working with Virex Social was one of the best decisions we made. Their team is responsive, innovative, and truly understands what works in the digital space."',
                 'Ahmed Khan',    'CEO, TechBrand UAE',       'AK'],
                ['"We saw amazing results within weeks. The team delivered real value through targeted campaigns, creative strategies, and expert support. They\'re our go-to."',
                 'Sara Rizwan',   'Marketing Manager, Luxe Co','SR'],
                ['"Professional, fast, and effective. Virex Social helped us grow online and become more visible. Easily the best digital marketing company we\'ve worked with."',
                 'Michael John',  'Founder, StartupX',        'MJ'],
            ];
            foreach($tests as $t): ?>
            <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <div class="quote-icon">"</div>
                <p class="testimonial-text"><?= $t[0] ?></p>
                <div class="testimonial-author">
                    <div class="author-avatar"><?= $t[3] ?></div>
                    <div class="author-info">
                        <strong><?= $t[1] ?></strong>
                        <span><?= $t[2] ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════
     WHY CHOOSE US
═══════════════════════════════════ -->
<section class="about-why">
    <div class="container">
        <div class="why-grid">
            <div class="why-img">
                <img src="https://illustrations.popsy.co/amber/work-from-home.svg" alt="Why Choose Us">
                <div class="why-badge">
                    <div class="num">10+</div>
                    <div class="lbl">Years of<br>Excellence</div>
                </div>
            </div>
            <div class="why-content">
                <div class="section-label">Why Choose Us</div>
                <h2 class="section-title">Smarter Strategies,<br>Faster Growth</h2>
                <p class="section-desc">Choosing the right digital partner makes all the difference. Here's why hundreds of businesses trust Virex Social to deliver real results.</p>
                <div class="why-list">
                    <?php
                    $reasons = [
                        ['Creative & Strategic Thinking',   'We mix fresh ideas with smart planning. Every campaign is built to stand out and make a lasting impact on your audience.'],
                        ['Full-Service Digital Solutions',  'From branding and web design to SEO, social media, and ads — we handle everything under one roof for your convenience.'],
                        ['Results That Matter',             'We focus on what works. Whether it\'s more leads, boosting sales, or improving visibility — we track and deliver real results.'],
                        ['Transparent Communication',       'No jargon, no surprises. We keep you informed at every step with clear reporting and honest, straightforward updates.'],
                    ];
                    foreach($reasons as $idx=>$r): ?>
                    <div class="why-item">
                        <div class="why-num"><?= $idx+1 ?></div>
                        <div>
                            <h5><?= $r[0] ?></h5>
                            <p><?= $r[1] ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="contact-us/" class="btn-primary" style="margin-top:12px;">Start Working Together
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════
     PROCESS
═══════════════════════════════════ -->
<section class="about-process">
    <div class="container">
        <div class="process-header">
            <div class="section-label">Work Process</div>
            <h2 class="section-title">This is How We Streamline<br>Our Design Workflow</h2>
        </div>
        <div class="process-grid">
            <?php
            $steps = [
                [
                    'title' => 'Preparation of Contract',
                    'desc'  => 'We start by understanding your goals and expectations. Once aligned, we set a clear roadmap — confident start.',
                    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>',
                ],
                [
                    'title' => 'Data Analysis',
                    'desc'  => 'We analyze your audience, competitors, and market trends to shape strategies backed by real data.',
                    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/><line x1="2" y1="20" x2="22" y2="20"/></svg>',
                ],
                [
                    'title' => 'Progress Report',
                    'desc'  => 'Stay informed with regular updates, performance metrics, and open communication — growth thrives on collaboration.',
                    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>',
                ],
                [
                    'title' => 'Satisfied Customers',
                    'desc'  => 'We deliver results that make clients stay. That\'s why we\'re the best digital marketing company you can count on.',
                    'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
                ],
            ];
            foreach($steps as $s): ?>
            <div class="process-card">
                <div class="process-icon"><?= $s['icon'] ?></div>
                <h3 class="process-title"><?= $s['title'] ?></h3>
                <p class="process-desc"><?= $s['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════════
     FAQ
═══════════════════════════════════ -->
<section class="about-faq">
    <div class="container">
        <div class="faq-inner">
            <div class="faq-left">
                <div class="section-label">FAQs</div>
                <h3>Most Popular<br>Questions</h3>
                <p>Everything you need to know about our digital marketing services and how we work.</p>
                <div class="faq-contact-box">
                    <h5>Still have questions?</h5>
                    <p>Our team is ready to help. Drop us a message and we'll get back to you within 24 hours.</p>
                    <a href="contact-us/" class="btn-faq">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        Contact Us Now
                    </a>
                </div>
            </div>
            <div class="faq-list">
                <?php
                $faqs = [
                    ['What services does Virex Social offer?',       'We offer a full range of digital marketing services, including SEO, social media marketing, PPC, web development, branding, and video editing — customized to help your brand grow online.'],
                    ['How do I get started with Virex Social?',       'Just reach out through our contact form, email, or WhatsApp. We\'ll schedule a free discovery call to understand your goals and suggest the right digital marketing strategy.'],
                    ['Do you manage all social media platforms?',     'Yes! We create and manage content for Instagram, Facebook, LinkedIn, TikTok, and more — based on your target audience and business goals.'],
                    ['Do you build custom websites?',                 'Definitely. We design responsive, user-friendly websites that reflect your brand and drive results — whether it\'s a landing page or a full site.'],
                    ['What industries do you work with?',             'We work with businesses in all industries — real estate, tech, fitness, food, healthcare, and more. Our digital marketing services adapt to any niche.'],
                ];
                foreach($faqs as $i=>$faq):
                $open = $i===0 ? ' open' : '';
                ?>
                <div class="faq-item<?= $open ?>">
                    <div class="faq-question" onclick="toggleFaqItem(this.parentElement)">
                        <?= htmlspecialchars($faq[0]) ?>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer"><?= htmlspecialchars($faq[1]) ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<?php include 'footer.php'; ?>

<!-- Back to Top -->
<button id="back-to-top" onclick="window.scrollTo({top:0,behavior:'smooth'})" aria-label="Back to top">
    <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 15l-6-6-6 6"/></svg>
</button>

<script>
// TAB SWITCHER
function switchTab(tab, btn) {
    document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
    document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
    document.getElementById('tab-' + tab).classList.add('active');
    btn.classList.add('active');
}

// FAQ
function toggleFaqItem(item) {
    var isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item.open').forEach(i => i.classList.remove('open'));
    if (!isOpen) item.classList.add('open');
}

// COUNTER ANIMATION
function animateCounter(el) {
    var target = parseInt(el.dataset.count);
    var suffix = el.querySelector('sup').outerHTML;
    var start  = 0;
    var step   = target / (2000 / 16);
    var timer  = setInterval(function() {
        start = Math.min(start + step, target);
        el.innerHTML = Math.floor(start).toLocaleString() + suffix;
        if (start >= target) clearInterval(timer);
    }, 16);
}
var counters = document.querySelectorAll('[data-count]');
var cObs = new IntersectionObserver(function(entries) {
    entries.forEach(function(e){ if (e.isIntersecting){ animateCounter(e.target); cObs.unobserve(e.target); } });
}, { threshold: 0.5 });
counters.forEach(c => cObs.observe(c));

// SKILL BARS
var skillSec = document.querySelector('.about-skills');
if (skillSec) {
    var triggered = false;
    window.addEventListener('scroll', function() {
        if (!triggered && skillSec.getBoundingClientRect().top < window.innerHeight * 0.85) {
            triggered = true;
            document.querySelectorAll('.skill-fill').forEach(bar => bar.classList.add('animate'));
        }
    });
}

// SCROLL REVEAL
var revEls = document.querySelectorAll('.service-card,.process-card,.testimonial-card,.faq-item,.team-card,.why-item');
var revObs = new IntersectionObserver(function(entries) {
    entries.forEach(function(e, i) {
        if (e.isIntersecting) {
            setTimeout(() => { e.target.style.opacity='1'; e.target.style.transform='translateY(0)'; }, i * 80);
            revObs.unobserve(e.target);
        }
    });
}, { threshold: 0.1 });
revEls.forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(30px)';
    el.style.transition = 'opacity .6s ease, transform .6s ease';
    revObs.observe(el);
});

// BACK TO TOP
var btt = document.getElementById('back-to-top');
window.addEventListener('scroll', () => btt.classList.toggle('visible', window.scrollY > 400));
</script>

</body>
</html>