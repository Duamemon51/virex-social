<?php
/**
 * ╔══════════════════════════════════════════════╗
 * ║   VIREX SOCIAL — includes/header.php        ║
 * ║   Usage: <?php include 'includes/header.php'; ?> ║
 * ╚══════════════════════════════════════════════╝
 *
 * CONFIG — edit these at the top of each page BEFORE including:
 *   $page_title    = "Page Title | Virex Social";
 *   $active_page   = "home"; // home | about | services | blog | faqs
 */

// Defaults (override before including this file)
// Defaults (override before including this file)
if (!isset($page_title))  $page_title  = "Virex Social – Expert Digital Marketing Services";
if (!isset($active_page)) $active_page = "home";

// Base URL
$base_url = "/Virex-web/";

// Helper: returns "active" class if page matches
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

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Clash+Display:wght@400;500;600;700&family=Syne:wght@400;500;600;700;800&family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Global Styles -->
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

            --bg:          #fdfcff;
            --bg2:         #f5f3ff;
            --surface:     #ffffff;
            --surface2:    #f0ecff;
            --text:        #4b4570;
            --text-strong: #1a0f3c;
            --muted:       #9ca3af;
            --border:      rgba(124,58,237,0.12);

            --grad-main:     linear-gradient(135deg, #e040fb 0%, #7c3aed 28%, #2563eb 55%, #06b6d4 75%, #f97316 90%, #fbbf24 100%);
            --grad-warm:     linear-gradient(135deg, #f97316 0%, #fbbf24 50%, #e040fb 100%);
            --grad-cool:     linear-gradient(135deg, #e040fb 0%, #7c3aed 50%, #2563eb 100%);
            --grad-fire:     linear-gradient(135deg, #fbbf24 0%, #f97316 50%, #e040fb 100%);
            --grad-btn:      linear-gradient(135deg, #e040fb, #7c3aed, #2563eb);
            --grad-btn-warm: linear-gradient(135deg, #f97316, #fbbf24, #e040fb);
            --grad-card:     linear-gradient(135deg, rgba(224,64,251,0.05), rgba(124,58,237,0.04), rgba(37,99,235,0.04), rgba(249,115,22,0.03));
            --grad-soft:     linear-gradient(135deg, #fff8f0 0%, #fdf4ff 35%, #eff6ff 70%, #f0fdf4 100%);
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

        /* ══ BUTTONS (shared across pages) ══ */
        .btn-grad {
            display: inline-flex; align-items: center; gap: 10px;
            background: var(--grad-btn);
            color: #fff; font-family: 'Clash Display', sans-serif; font-weight: 600; font-size: 14.5px;
            padding: 16px 34px; border-radius: 50px;
            transition: all 0.3s; box-shadow: 0 4px 25px rgba(124,58,237,.35);
            position: relative; overflow: hidden;
        }
        .btn-grad::after { content: ''; position: absolute; inset: 0; background: linear-gradient(135deg, rgba(255,255,255,0.15), transparent); opacity: 0; transition: opacity 0.3s; }
        .btn-grad:hover { transform: translateY(-3px); box-shadow: 0 10px 40px rgba(124,58,237,.5); }
        .btn-grad:hover::after { opacity: 1; }
        .btn-grad svg { width:18px; height:18px; stroke:white; stroke-width:2.5; flex-shrink:0; fill:none; }

        .btn-warm {
            display: inline-flex; align-items: center; gap: 10px;
            background: var(--grad-btn-warm);
            color: #fff; font-family: 'Clash Display', sans-serif; font-weight: 600; font-size: 14.5px;
            padding: 16px 34px; border-radius: 50px;
            transition: all 0.3s; box-shadow: 0 4px 25px rgba(249,115,22,.35);
        }
        .btn-warm:hover { transform: translateY(-3px); box-shadow: 0 10px 40px rgba(249,115,22,.5); }
        .btn-warm svg { width:18px; height:18px; stroke:white; stroke-width:2.5; flex-shrink:0; fill:none; }

        .btn-ghost {
            display: inline-flex; align-items: center; gap: 10px;
            background: white; border: 1.5px solid rgba(124,58,237,0.2);
            color: var(--purple); font-family: 'Clash Display', sans-serif; font-weight: 600; font-size: 14.5px;
            padding: 15px 30px; border-radius: 50px; transition: all 0.3s;
        }
        .btn-ghost:hover { background: rgba(124,58,237,0.05); border-color: rgba(124,58,237,0.45); transform: translateY(-2px); }

        .btn-outline {
            display:inline-flex; align-items:center; gap:8px;
            border: 1.5px solid rgba(124,58,237,0.25); background: white; color: var(--purple);
            font-family:'Clash Display',sans-serif; font-weight:600; font-size:13px;
            padding:14px 34px; border-radius:50px; transition:all .3s;
            letter-spacing:.5px; text-transform:uppercase;
        }
        .btn-outline:hover { border-color: var(--purple); background: rgba(124,58,237,0.06); box-shadow:0 4px 20px rgba(124,58,237,.12); transform: translateY(-2px); }

        /* ══ SECTION COMMONS ══ */
        .section-label {
            display: inline-flex; align-items: center; gap: 9px;
            font-family:'Manrope',sans-serif; font-weight:700;
            font-size:11px; letter-spacing:3px; text-transform:uppercase;
            margin-bottom:14px; color: var(--purple);
        }
        .section-label .sl-dot { display: flex; gap: 3px; }
        .section-label .sl-dot span { width: 5px; height: 5px; border-radius: 50%; background: currentColor; animation: dotBlink 1.5s infinite; }
        .section-label .sl-dot span:nth-child(2) { animation-delay: 0.2s; }
        .section-label .sl-dot span:nth-child(3) { animation-delay: 0.4s; }
        @keyframes dotBlink { 0%,100%{opacity:0.3} 50%{opacity:1} }

        .section-title { font-family: 'Clash Display', sans-serif; font-size:clamp(28px,4.2vw,50px); line-height:1.12; margin-bottom:18px; letter-spacing:-0.5px; color: var(--text-strong); }
        .section-desc { font-size:17px; line-height:1.85; color:#6b7280; max-width:520px; margin-bottom:60px; }

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
        .navbar::before {
            content: '';
            position: absolute; top: 0; left: 0; right: 0; height: 2px;
            background: var(--grad-main);
        }
        .nav-inner {
            display: flex; align-items: center; justify-content: space-between;
            height: 74px;
        }
        .nav-logo {
            font-family: 'Clash Display', sans-serif; font-weight: 700; font-size: 26px;
            letter-spacing: -0.5px; display: flex; align-items: center; gap: 10px;
            text-decoration: none;
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
        .logo-v    { background: var(--grad-main); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
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

        /* Responsive navbar */
        @media(max-width:992px) {
            .nav-links { display: none; }
            .hamburger { display: flex; }
            .nav-badge  { display: none; }
        }
        @media(max-width:480px) {
            .nav-cta { padding: 10px 18px; font-size: 12.5px; }
        }
    </style>
</head>
<body>

<!-- SVG Gradient Defs (used by service icons etc.) -->
<svg width="0" height="0" style="position:absolute">
    <defs>
        <linearGradient id="gradStroke" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%"   stop-color="#e040fb"/>
            <stop offset="40%"  stop-color="#7c3aed"/>
            <stop offset="80%"  stop-color="#2563eb"/>
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

            <!-- Desktop Nav Links -->
           <div class="nav-links">
    <a href="<?php echo $base_url; ?>" class="<?php echo nav_active('home', $active_page); ?>">Home</a>

    <a href="<?php echo $base_url; ?>about.php"
       class="<?php echo nav_active('about', $active_page); ?>">
       About
    </a>

    <a href="<?php echo $base_url; ?>services.php"
       class="<?php echo nav_active('services', $active_page); ?>">
       Services
    </a>

    <a href="<?php echo $base_url; ?>blog.php"
       class="<?php echo nav_active('blog', $active_page); ?>">
       Blog
    </a>

    <a href="<?php echo $base_url; ?>faqs.php"
       class="<?php echo nav_active('faqs', $active_page); ?>">
       FAQs
    </a>
</div>

            <!-- Right Side -->
            <div class="nav-right">
                <div class="nav-badge">
                    <span class="nav-badge-dot"></span>
                    Now Available
                </div>
               <a href="<?php echo $base_url; ?>contact-us.php" class="nav-cta">
    Contact Today
</a>
                <button class="hamburger" id="hamburger" aria-label="Open menu">
                    <span></span><span></span><span></span>
                </button>
            </div>

        </div>
    </div>

  <div class="mobile-menu" id="mobileMenu">
    <a href="<?php echo $base_url; ?>">Home</a>
    <a href="<?php echo $base_url; ?>about.php">About</a>
    <a href="<?php echo $base_url; ?>services.php">Services</a>
    <a href="<?php echo $base_url; ?>blog.php">Blog</a>
    <a href="<?php echo $base_url; ?>faqs.php">FAQs</a>
    <a href="<?php echo $base_url; ?>contact.php">Contact Today</a>
</div>
</nav>

<!-- Navbar JS (inline so it's self-contained with the header) -->
<script>
(function(){
    // Scroll effect
    const nav = document.getElementById('mainNav');
    window.addEventListener('scroll', function(){
        nav.classList.toggle('scrolled', window.scrollY > 30);
    });

    // Hamburger toggle
    const hamburger  = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');
    hamburger.addEventListener('click', function(){
        hamburger.classList.toggle('open');
        mobileMenu.classList.toggle('open');
    });

    // Close mobile menu on link click
    mobileMenu.querySelectorAll('a').forEach(function(link){
        link.addEventListener('click', function(){
            hamburger.classList.remove('open');
            mobileMenu.classList.remove('open');
        });
    });
})();
</script>
<!-- ══ END NAVBAR ══ -->