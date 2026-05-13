<?php


if (!isset($page_title))  $page_title  = "Virex Social – Expert Digital Marketing Services";
if (!isset($active_page)) $active_page = "home";

$base_url = "/Virex-web/";

function nav_active($page, $current) {
    return ($page === $current) ? ' active' : '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Clash+Display:wght@400;500;600;700&family=Syne:wght@400;500;600;700;800&family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="assets/theme.css">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

html { scroll-behavior: smooth; }
body {
    font-family: 'Manrope', sans-serif;
    color: var(--text);
    background: var(--page-bg);
    overflow-x: hidden;
}
h1,h2,h3,h4,h5,h6 {
    font-family: 'Clash Display', 'Syne', sans-serif;
    font-weight: 700;
    color: var(--text-strong);
}
a { text-decoration: none; color: inherit; }
.container { max-width: 1220px; margin: 0 auto; padding: 0 32px; width: 100%; }

/* ── Gradient text ── */
.grad-text {
    background: var(--grad-main);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.grad-text-warm {
    background: var(--grad-warm2);
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

/* ══ BUTTONS ══ */
.btn-grad {
    display: inline-flex; align-items: center; gap: 10px;
    background: var(--grad-btn); color: #fff;
    font-family: 'Clash Display', sans-serif; font-weight: 700; font-size: 14.5px;
    padding: 16px 34px; border-radius: 50px;
    transition: all 0.3s; box-shadow: 0 4px 25px rgba(123,77,255,.35);
    position: relative; overflow: hidden;
}
.btn-grad::after {
    content:''; position:absolute; inset:0;
    background:linear-gradient(135deg, rgba(255,255,255,0.2), transparent);
    opacity:0; transition:opacity 0.3s;
}
.btn-grad:hover { transform:translateY(-3px); box-shadow:0 10px 40px rgba(123,77,255,.5); }
.btn-grad:hover::after { opacity:1; }
.btn-grad svg { width:18px;height:18px;stroke:white;stroke-width:2.5;fill:none;flex-shrink:0; }

.btn-warm {
    display: inline-flex; align-items: center; gap: 10px;
    background: var(--grad-warm2); color: #fff;
    font-family: 'Clash Display', sans-serif; font-weight: 700; font-size: 14.5px;
    padding: 16px 34px; border-radius: 50px;
    transition: all 0.3s; box-shadow: 0 4px 25px rgba(255,138,101,.3);
}
.btn-warm:hover { transform:translateY(-3px); box-shadow:0 10px 40px rgba(255,138,101,.5); }
.btn-warm svg { width:18px;height:18px;stroke:white;stroke-width:2.5;fill:none;flex-shrink:0; }

.btn-ghost {
    display: inline-flex; align-items: center; gap: 10px;
    background: rgba(255,255,255,0.85); border: 1.5px solid rgba(123,77,255,0.25);
    color: var(--text-strong);
    font-family: 'Clash Display', sans-serif; font-weight: 700; font-size: 14.5px;
    padding: 15px 30px; border-radius: 50px; transition: all 0.3s;
    backdrop-filter: blur(10px);
    box-shadow: 0 4px 16px rgba(123,77,255,0.1);
}
.btn-ghost:hover {
    background:rgba(255,255,255,1); border-color:rgba(123,77,255,0.45);
    transform:translateY(-2px); box-shadow:0 8px 28px rgba(123,77,255,0.15);
}

.btn-outline {
    display: inline-flex; align-items: center; gap: 8px;
    border: 1.5px solid rgba(123,77,255,0.25);
    background: rgba(255,255,255,0.8); color: var(--text-strong);
    font-family: 'Clash Display', sans-serif; font-weight: 700; font-size: 13px;
    padding: 14px 34px; border-radius: 50px; transition: all .3s;
    backdrop-filter: blur(10px);
}
.btn-outline:hover {
    border-color:rgba(123,77,255,0.5); background:rgba(255,255,255,1);
    box-shadow:0 4px 20px rgba(123,77,255,.12); transform:translateY(-2px);
}

/* ══ SECTION COMMONS ══ */
.section-label {
    display:inline-flex; align-items:center; gap:9px;
    font-family:'Manrope',sans-serif; font-weight:700;
    font-size:11px; letter-spacing:3px; text-transform:uppercase;
    margin-bottom:14px; color: var(--purple);
}
.sl-dot { display:flex; gap:3px; }
.sl-dot span {
    width:5px; height:5px; border-radius:50%;
    background:currentColor; animation:dotBlink 1.5s infinite; display:inline-block;
}
.sl-dot span:nth-child(2) { animation-delay:0.2s; }
.sl-dot span:nth-child(3) { animation-delay:0.4s; }

.section-title {
    font-family:'Clash Display',sans-serif;
    font-size:clamp(28px,4.2vw,50px);
    line-height:1.12; margin-bottom:18px;
    letter-spacing:-0.5px; color:var(--text-strong); font-weight:800;
}
.section-desc {
    font-size:17px; line-height:1.85;
    color:var(--text-mid); max-width:520px; margin-bottom:60px;
}

/* ══════════════════════════════════════
   NAVBAR  —  Light "Copilot" theme
   (same as index.php)
══════════════════════════════════════ */
.navbar {
    position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
    background: rgba(253, 248, 246, 0.88);
    backdrop-filter: blur(28px) saturate(200%);
    border-bottom: 1px solid rgba(123,77,255,0.10);
    transition: all 0.4s ease;
}
.navbar.scrolled {
    background: rgba(253, 248, 246, 0.97);
    box-shadow: 0 4px 40px rgba(123,77,255,0.12);
}
.navbar::before {
    content: ''; position: absolute; top: 0; left: 0; right: 0; height: 2.5px;
    background: var(--grad-main);
}

.nav-inner {
    display: flex; align-items: center; justify-content: space-between;
    height: 72px;
}

/* Logo */
.nav-logo {
    font-family: 'Clash Display', sans-serif; font-weight: 800; font-size: 24px;
    letter-spacing: -0.5px; display: flex; align-items: center; gap: 10px;
}
.logo-icon {
    width: 38px; height: 38px; background: var(--grad-main); border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    font-size: 17px; font-weight: 900; color: white;
    box-shadow: 0 4px 20px rgba(123,77,255,0.35); flex-shrink: 0;
}
.logo-v    { background:var(--grad-main); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text; }
.logo-rest { color: var(--text-strong); }

/* Nav pill wrapper */
.nav-links {
    display: flex; gap: 2px; align-items: center;
    background: rgba(255,255,255,0.70);
    border: 1px solid rgba(123,77,255,0.15);
    border-radius: 50px; padding: 5px;
    backdrop-filter: blur(10px);
}

/* Regular links */
.nav-links > a {
    font-size: 13.5px; font-weight: 600; color: var(--text-mid);
    padding: 8px 18px; border-radius: 50px; transition: all 0.25s;
    white-space: nowrap; font-family: 'Manrope', sans-serif;
}
.nav-links > a:hover { color:var(--text-strong); background:rgba(123,77,255,0.08); }
.nav-links > a.active {
    color: var(--text-strong); background: white;
    box-shadow: 0 2px 12px rgba(123,77,255,0.18);
}

/* Dropdown */
.nav-dropdown { position: relative; }

.nav-drop-toggle {
    display: inline-flex; align-items: center; gap: 6px;
    font-size: 13.5px; font-weight: 600; color: var(--text-mid);
    padding: 8px 18px; border-radius: 50px; transition: all 0.25s;
    white-space: nowrap; font-family: 'Manrope', sans-serif;
    background: none; border: none; outline: none; cursor: pointer;
}
.nav-drop-toggle:hover { color:var(--text-strong); background:rgba(123,77,255,0.08); }

/* Services active */
.nav-dropdown.services-active > .nav-drop-toggle {
    color: var(--text-strong); background: white;
    box-shadow: 0 2px 12px rgba(123,77,255,0.18);
}

/* Chevron — dark for light bg */
.chevron { width: 13px; height: 13px; transition: transform 0.3s; }
.chevron path { stroke: var(--text-mid); stroke-width: 2; fill: none; stroke-linecap: round; stroke-linejoin: round; }
.nav-dropdown.services-active .chevron path { stroke: var(--text-strong); }
.nav-dropdown:hover .chevron { transform: rotate(180deg); }

/* ── DARK MEGA MENU (unchanged — always dark) ── */
.mega-menu {
    position: absolute;
    top: calc(100% + 18px);
    left: 50%;
    transform: translateX(-50%) translateY(-8px);
    width: 760px;
    background: var(--dd-bg);
    border-radius: 18px;
    border: 1px solid var(--dd-border);
    box-shadow:
        0 30px 80px rgba(0,0,0,0.6),
        0 0 0 1px rgba(99,102,241,0.08),
        inset 0 1px 0 rgba(255,255,255,0.05);
    padding: 32px 36px 30px;
    opacity: 0; visibility: hidden; pointer-events: none;
    transition: opacity 0.25s ease, transform 0.25s ease, visibility 0.25s;
    z-index: 999;
    overflow: hidden;
}
.mega-menu::before {
    content: '';
    position: absolute; top: 0; left: 10%; right: 10%; height: 1px;
    background: linear-gradient(90deg, transparent, rgba(99,102,241,0.5), transparent);
}
.mega-menu::after {
    content: '';
    position: absolute; top: -6px; left: 50%;
    width: 12px; height: 12px;
    background: var(--dd-bg);
    border-left: 1px solid rgba(255,255,255,0.07);
    border-top: 1px solid rgba(255,255,255,0.07);
    transform: translateX(-50%) rotate(45deg);
    border-radius: 2px 0 0 0;
}
.nav-dropdown:hover .mega-menu {
    opacity: 1; visibility: visible; pointer-events: all;
    transform: translateX(-50%) translateY(0);
}

.mega-grid { display:grid; grid-template-columns:1fr 1fr 1fr; gap:0; }
.mega-col { padding-right: 32px; }
.mega-col:last-child { padding-right: 0; }
.mega-col + .mega-col { padding-left:32px; border-left:1px solid var(--dd-divider); }

.mega-col-label {
    font-family:'Manrope',sans-serif;
    font-size:10px; font-weight:700; letter-spacing:3px; text-transform:uppercase;
    color:var(--dd-label); margin-bottom:18px; padding-bottom:12px;
    border-bottom:1px solid var(--dd-divider);
}

.mega-item {
    display:flex; align-items:center; gap:12px;
    padding:9px 8px; border-radius:8px;
    transition: background 0.18s, padding-left 0.18s, color 0.18s;
    color:var(--dd-text); font-family:'Manrope',sans-serif;
    font-size:13.8px; font-weight:600; text-decoration:none; margin-bottom:2px;
}
.mega-item:hover { background:rgba(99,102,241,0.10); color:#fff; padding-left:14px; }
.mega-item.active { background:rgba(99,102,241,0.18); color:#fff; padding-left:14px; }
.mega-item.active .mega-dot { background:#a5b4fc; box-shadow:0 0 12px rgba(165,180,252,0.9); }

.mega-dot {
    width:8px; height:8px; border-radius:50%;
    background:var(--dd-dot); flex-shrink:0;
    box-shadow:0 0 7px rgba(99,102,241,0.7); transition:box-shadow 0.2s;
}
.mega-item:hover .mega-dot { box-shadow:0 0 12px rgba(129,140,248,0.9); background:#818cf8; }

/* Nav Right */
.nav-right { display:flex; align-items:center; gap:12px; }

.nav-badge {
    display:flex; align-items:center; gap:6px;
    background:rgba(255,181,74,0.12); border:1px solid rgba(255,181,74,0.3);
    color:#E8904A; font-size:11px; font-weight:700;
    padding:5px 12px; border-radius:50px; letter-spacing:0.5px;
}
.nav-badge-dot { width:6px; height:6px; border-radius:50%; background:var(--c-orange); animation:pulse 1.5s infinite; }

.nav-cta {
    background: var(--grad-btn); color: white;
    font-family:'Clash Display',sans-serif; font-weight:700; font-size:13.5px;
    padding:11px 26px; border-radius:50px; transition:all 0.3s;
    box-shadow:0 4px 20px rgba(123,77,255,0.35); white-space:nowrap;
}
.nav-cta:hover { transform:translateY(-2px); box-shadow:0 8px 30px rgba(123,77,255,0.45); }

/* Hamburger */
.hamburger {
    display:none; flex-direction:column; gap:5px; cursor:pointer;
    background:none; border:none; padding:6px;
}
.hamburger span {
    display:block; width:24px; height:2px;
    background: var(--text-mid);   /* dark for light navbar */
    border-radius:2px; transition:all 0.3s;
}
.hamburger.open span:nth-child(1) { transform:rotate(45deg) translate(5px,5px); }
.hamburger.open span:nth-child(2) { opacity:0; }
.hamburger.open span:nth-child(3) { transform:rotate(-45deg) translate(5px,-5px); }

/* Mobile Menu — keep dark for contrast */
.mobile-menu {
    display:none; flex-direction:column;
    background: rgba(253,248,246,0.98);
    border-top:1px solid rgba(123,77,255,0.10);
    padding:16px 20px 20px;
    backdrop-filter:blur(20px);
}
.mobile-menu.open { display:flex; }

.mob-services-row {
    display:flex; align-items:center;
    border-bottom:1px solid rgba(123,77,255,0.08);
}
.mob-services-link {
    flex:1; color:var(--text-mid); font-size:15px; font-weight:600;
    padding:12px 0; font-family:'Manrope',sans-serif; transition:color 0.2s;
}
.mob-services-link:hover,
.mob-services-link.active { color:var(--text-strong); }

.mobile-acc-toggle {
    background:none; border:none; cursor:pointer;
    padding:12px 4px; display:flex; align-items:center;
}

.mobile-menu > a {
    color:var(--text-mid); font-size:15px; font-weight:600;
    padding:12px 0; border-bottom:1px solid rgba(123,77,255,0.08);
    font-family:'Manrope',sans-serif; transition:color 0.2s;
    display:flex; align-items:center; justify-content:space-between;
}
.mobile-menu > a:hover,
.mobile-menu > a.active { color:var(--text-strong); }

.mob-chevron { width:16px; height:16px; transition:transform 0.3s; }
.mob-chevron path { stroke:var(--text-mid); stroke-width:2; fill:none; stroke-linecap:round; stroke-linejoin:round; }
.mobile-acc-toggle.open .mob-chevron { transform:rotate(180deg); }

.mobile-services-panel {
    display:none; flex-direction:column;
    background:rgba(123,77,255,0.04); border-radius:10px;
    margin:4px 0 8px; overflow:hidden;
    border:1px solid rgba(123,77,255,0.12);
}
.mobile-services-panel.open { display:flex; }

.mob-svc-group-label {
    font-size:9px; font-weight:800; letter-spacing:2.5px;
    text-transform:uppercase; color:var(--muted);
    padding:12px 16px 4px;
}
.mobile-services-panel a {
    font-size:13.5px; font-weight:500; color:var(--text-mid);
    padding:9px 16px; transition:all 0.2s; font-family:'Manrope',sans-serif;
    display:flex; align-items:center; gap:10px;
    border-bottom:1px solid rgba(123,77,255,0.06);
}
.mobile-services-panel a:last-child { border-bottom:none; }
.mobile-services-panel a:hover { color:var(--text-strong); background:rgba(123,77,255,0.08); padding-left:22px; }
.mobile-services-panel a.active { color:var(--text-strong); background:rgba(123,77,255,0.12); padding-left:22px; }
.mob-dot-sm { width:7px; height:7px; border-radius:50%; background:var(--purple); flex-shrink:0; box-shadow:0 0 5px rgba(123,77,255,0.5); }

/* ── Shared Animations ── */
@keyframes pulse     { 0%,100%{opacity:1;transform:scale(1)} 50%{opacity:.6;transform:scale(1.4)} }
@keyframes dotBlink  { 0%,100%{opacity:0.3} 50%{opacity:1} }
@keyframes orbFloat  { 0%,100%{transform:translateY(0) scale(1)} 50%{transform:translateY(-28px) scale(1.04)} }
@keyframes floatY    { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-14px)} }
@keyframes scrollLeft  { from{transform:translateX(0)} to{transform:translateX(-50%)} }
@keyframes scrollRight { from{transform:translateX(-50%)} to{transform:translateX(0)} }
@keyframes pillShift { 0%,100%{filter:hue-rotate(0deg)} 50%{filter:hue-rotate(60deg)} }

/* ── Responsive ── */
@media(max-width:1100px) { .mega-menu { width:680px; } }
@media(max-width:992px)  { .nav-links { display:none; } .hamburger { display:flex; } .nav-badge { display:none; } }
@media(max-width:480px)  { .nav-cta { padding:10px 18px; font-size:12.5px; } }
@media(max-width:600px)  { .container { padding:0 20px; } }
    </style>
</head>
<body>

<svg width="0" height="0" style="position:absolute">
    <defs>
        <linearGradient id="gradStroke" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" stop-color="#e040fb"/>
            <stop offset="40%" stop-color="#7c3aed"/>
            <stop offset="80%" stop-color="#2563eb"/>
            <stop offset="100%" stop-color="#f97316"/>
        </linearGradient>
    </defs>
</svg>

<!-- ══════════════════════════════════════════
     NAVBAR
══════════════════════════════════════════ -->
<nav class="navbar" id="mainNav">
    <div class="container">
        <div class="nav-inner">

            <!-- Logo -->
            <a href="<?php echo $base_url; ?>" class="nav-logo">
                <div class="logo-icon">V</div>
                <span><span class="logo-v">Virex </span><span class="logo-rest">Social</span></span>
            </a>

            <!-- Desktop Nav -->
            <div class="nav-links" id="desktopNav">

                <a href="<?php echo $base_url; ?>" data-page="home">Home</a>

                <a href="<?php echo $base_url; ?>about.php" data-page="about">About</a>

                <!-- ── Services Mega Dropdown ── -->
                <div class="nav-dropdown" id="servicesDropdown">
                    <a href="<?php echo $base_url; ?>services.php" class="nav-drop-toggle" data-page="services" aria-haspopup="true">
                        Services
                        <svg class="chevron" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6l4 4 4-4"/>
                        </svg>
                    </a>

                    <div class="mega-menu" role="menu">
                        <div class="mega-grid">

                            <!-- WEB & SEO -->
                            <div class="mega-col">
                                <div class="mega-col-label">Web &amp; SEO</div>
                                <a href="<?php echo $base_url; ?>services/web-development.php"         class="mega-item"><span class="mega-dot"></span>Web Development</a>
                                <a href="<?php echo $base_url; ?>services/seo.php"                     class="mega-item"><span class="mega-dot"></span>Search Engine Optimization</a>
                                <a href="<?php echo $base_url; ?>services/website-maintenance.php"     class="mega-item"><span class="mega-dot"></span>Website Maintenance</a>
                                <a href="<?php echo $base_url; ?>services/website-speed.php"           class="mega-item"><span class="mega-dot"></span>Website Speed Optimization</a>
                                <a href="<?php echo $base_url; ?>services/ui-ux-designing.php"         class="mega-item"><span class="mega-dot"></span>UI/UX Designing</a>
                            </div>

                            <!-- MARKETING & ADS -->
                            <div class="mega-col">
                                <div class="mega-col-label">Marketing &amp; Ads</div>
                                <a href="<?php echo $base_url; ?>services/pay-per-click.php"           class="mega-item"><span class="mega-dot"></span>Pay Per Click</a>
                                <a href="<?php echo $base_url; ?>services/social-media-marketing.php"  class="mega-item"><span class="mega-dot"></span>Social Media Marketing</a>
                                <a href="<?php echo $base_url; ?>services/social-media-management.php" class="mega-item"><span class="mega-dot"></span>Social Media Management</a>
                                <a href="<?php echo $base_url; ?>services/snapchat-management.php"     class="mega-item"><span class="mega-dot"></span>Snapchat Management</a>
                                <a href="<?php echo $base_url; ?>services/email-marketing.php"         class="mega-item"><span class="mega-dot"></span>Email Marketing</a>
                            </div>

                            <!-- CREATIVE & APPS -->
                            <div class="mega-col">
                                <div class="mega-col-label">Creative &amp; Apps</div>
                                <a href="<?php echo $base_url; ?>services/content-writing.php"         class="mega-item"><span class="mega-dot"></span>Content Writing</a>
                                <a href="<?php echo $base_url; ?>services/script-writing.php"          class="mega-item"><span class="mega-dot"></span>Script Writing</a>
                                <a href="<?php echo $base_url; ?>services/graphic-designing.php"       class="mega-item"><span class="mega-dot"></span>Graphic Designing</a>
                                <a href="<?php echo $base_url; ?>services/video-editing.php"           class="mega-item"><span class="mega-dot"></span>Video Editing</a>
                                <a href="<?php echo $base_url; ?>services/mobile-app.php"              class="mega-item"><span class="mega-dot"></span>Mobile App Development</a>
                                <a href="<?php echo $base_url; ?>services/online-reputation.php"       class="mega-item"><span class="mega-dot"></span>Online Reputation Mgmt</a>
                            </div>

                        </div><!-- /.mega-grid -->
                    </div><!-- /.mega-menu -->
                </div><!-- /.nav-dropdown -->

                <a href="<?php echo $base_url; ?>blog.php" data-page="blog">Blog</a>

                <a href="<?php echo $base_url; ?>faqs.php" data-page="faqs">FAQs</a>

            </div><!-- /.nav-links -->

            <!-- Right -->
            <div class="nav-right">
             
                <a href="<?php echo $base_url; ?>contact-us.php" class="nav-cta">Contact Today</a>
                <button class="hamburger" id="hamburger" aria-label="Open menu">
                    <span></span><span></span><span></span>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <a href="<?php echo $base_url; ?>" data-mob-page="home">Home</a>
        <a href="<?php echo $base_url; ?>about.php" data-mob-page="about">About</a>

        <div class="mob-services-row">
            <a href="<?php echo $base_url; ?>services.php" class="mob-services-link" data-mob-page="services">Services</a>
            <button class="mobile-acc-toggle" id="mobServicesToggle" aria-label="Toggle services menu">
                <svg class="mob-chevron" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6l4 4 4-4"/>
                </svg>
            </button>
        </div>
        <div class="mobile-services-panel" id="mobServicesPanel">

            <div class="mob-svc-group-label">Web &amp; SEO</div>
            <a href="<?php echo $base_url; ?>services/web-development.php"><span class="mob-dot-sm"></span>Web Development</a>
            <a href="<?php echo $base_url; ?>services/seo.php"><span class="mob-dot-sm"></span>Search Engine Optimization</a>
            <a href="<?php echo $base_url; ?>services/website-maintenance.php"><span class="mob-dot-sm"></span>Website Maintenance</a>
            <a href="<?php echo $base_url; ?>services/website-speed.php"><span class="mob-dot-sm"></span>Website Speed Optimization</a>
            <a href="<?php echo $base_url; ?>services/ui-ux-designing.php"><span class="mob-dot-sm"></span>UI/UX Designing</a>

            <div class="mob-svc-group-label">Marketing &amp; Ads</div>
            <a href="<?php echo $base_url; ?>services/pay-per-click.php"><span class="mob-dot-sm"></span>Pay Per Click</a>
            <a href="<?php echo $base_url; ?>services/social-media-marketing.php"><span class="mob-dot-sm"></span>Social Media Marketing</a>
            <a href="<?php echo $base_url; ?>services/social-media-management.php"><span class="mob-dot-sm"></span>Social Media Management</a>
            <a href="<?php echo $base_url; ?>services/snapchat-management.php"><span class="mob-dot-sm"></span>Snapchat Management</a>
            <a href="<?php echo $base_url; ?>services/email-marketing.php"><span class="mob-dot-sm"></span>Email Marketing</a>

            <div class="mob-svc-group-label">Creative &amp; Apps</div>
            <a href="<?php echo $base_url; ?>services/content-writing.php"><span class="mob-dot-sm"></span>Content Writing</a>
            <a href="<?php echo $base_url; ?>services/script-writing.php"><span class="mob-dot-sm"></span>Script Writing</a>
            <a href="<?php echo $base_url; ?>services/graphic-designing.php"><span class="mob-dot-sm"></span>Graphic Designing</a>
            <a href="<?php echo $base_url; ?>services/video-editing.php"><span class="mob-dot-sm"></span>Video Editing</a>
            <a href="<?php echo $base_url; ?>services/mobile-app.php"><span class="mob-dot-sm"></span>Mobile App Development</a>
            <a href="<?php echo $base_url; ?>services/online-reputation.php"><span class="mob-dot-sm"></span>Online Reputation Mgmt</a>
        </div>

        <a href="<?php echo $base_url; ?>blog.php" data-mob-page="blog">Blog</a>
        <a href="<?php echo $base_url; ?>faqs.php" data-mob-page="faqs">FAQs</a>
        <a href="<?php echo $base_url; ?>contact-us.php">Contact Today</a>
    </div>
</nav>

<script>
(function(){
    /* ══════════════════════════════════════════
       1. Scroll effect
    ══════════════════════════════════════════ */
    const nav = document.getElementById('mainNav');
    window.addEventListener('scroll', function(){
        nav.classList.toggle('scrolled', window.scrollY > 30);
    });

    /* ══════════════════════════════════════════
       2. Hamburger toggle
    ══════════════════════════════════════════ */
    const hamburger  = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');
    hamburger.addEventListener('click', function(){
        hamburger.classList.toggle('open');
        mobileMenu.classList.toggle('open');
    });

    /* ══════════════════════════════════════════
       3. Mobile services accordion
    ══════════════════════════════════════════ */
    const mobToggle = document.getElementById('mobServicesToggle');
    const mobPanel  = document.getElementById('mobServicesPanel');
    if (mobToggle && mobPanel) {
        mobToggle.addEventListener('click', function(){
            mobToggle.classList.toggle('open');
            mobPanel.classList.toggle('open');
        });
    }

    /* ══════════════════════════════════════════
       4. ACTIVE TAB — JS-based URL detection
       Compares current window.location.pathname
       with each link's href to set .active class.
    ══════════════════════════════════════════ */
    const currentPath = window.location.pathname;

    // ── Helper: normalize path (remove trailing slash, lowercase) ──
    function normalizePath(p) {
        return p.replace(/\/$/, '').toLowerCase() || '/';
    }

    const norm = normalizePath(currentPath);

    // ── Desktop: main nav links + services toggle link ──
    document.querySelectorAll('#desktopNav > a[data-page], #desktopNav .nav-drop-toggle[data-page]').forEach(function(link){
        const linkPath = normalizePath(new URL(link.href).pathname);
        if (norm === linkPath) {
            link.classList.add('active');
        }
    });

    // ── Desktop: mega-menu items ──
    const servicesDropdown = document.getElementById('servicesDropdown');
    let servicePageActive  = false;

    document.querySelectorAll('.mega-item').forEach(function(item){
        const linkPath = normalizePath(new URL(item.href).pathname);
        if (norm === linkPath) {
            item.classList.add('active');
            servicePageActive = true;
        }
    });

    // If we're on services.php or any /services/* page, highlight Services toggle
    if (servicePageActive || norm.includes('/services')) {
        servicesDropdown.classList.add('services-active');
    }

    // ── Mobile: main nav links ──
    document.querySelectorAll('#mobileMenu > a[data-mob-page]').forEach(function(link){
        const linkPath = normalizePath(new URL(link.href).pathname);
        if (norm === linkPath) {
            link.classList.add('active');
        }
    });

    // ── Mobile: services main link ──
    const mobServicesLink = document.querySelector('.mob-services-link');
    if (mobServicesLink) {
        const svcLinkPath = normalizePath(new URL(mobServicesLink.href).pathname);
        if (norm === svcLinkPath) {
            mobServicesLink.classList.add('active');
        }
    }

    // ── Mobile: service sub-links ──
    let mobServiceActive = false;
    document.querySelectorAll('#mobServicesPanel a').forEach(function(link){
        const linkPath = normalizePath(new URL(link.href).pathname);
        if (norm === linkPath) {
            link.classList.add('active');
            mobServiceActive = true;
        }
    });

    // Auto-open mobile services panel if we're on a service page
    if (mobServiceActive) {
        mobToggle.classList.add('open');
        mobPanel.classList.add('open');
    }

    // ── Close mobile menu when any link is clicked ──
    mobileMenu.querySelectorAll('a').forEach(function(link){
        link.addEventListener('click', function(){
            hamburger.classList.remove('open');
            mobileMenu.classList.remove('open');
        });
    });

})();
</script>
<!-- ══ END NAVBAR ══ -->