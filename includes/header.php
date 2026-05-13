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
 <link rel="stylesheet" href="assets/css/theme.css">
     <link rel="stylesheet" href="assets/css/header.css">
   <link rel="stylesheet" href="assets/css/faqs-page.css">
     <link rel="stylesheet" href="assets/css/services-page.css">
     
     <link rel="stylesheet" href="assets/css/blog.css">
     <link rel="stylesheet" href="assets/css/single-blog.css">
    <link rel="stylesheet" href="assets/css/index.css">
     <link rel="stylesheet" href="assets/css/contact-us.css">
  
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

                <a href="<?php echo $base_url; ?>single-service.php?service=web-development" class="mega-item">
                    <span class="mega-dot"></span>Web Development
                </a>

                <a href="<?php echo $base_url; ?>single-service.php?service=seo" class="mega-item">
                    <span class="mega-dot"></span>Search Engine Optimization
                </a>

                <a href="<?php echo $base_url; ?>single-service.php?service=website-maintenance" class="mega-item">
                    <span class="mega-dot"></span>Website Maintenance
                </a>

                <a href="<?php echo $base_url; ?>single-service.php?service=website-speed-optimization-service" class="mega-item">
                    <span class="mega-dot"></span>Website Speed Optimization
                </a>

                <a href="<?php echo $base_url; ?>single-service.php?service=ui-ux-design" class="mega-item">
                    <span class="mega-dot"></span>UI/UX Design
                </a>

            </div>

            <!-- MARKETING & ADS -->
            <div class="mega-col">
                <div class="mega-col-label">Marketing &amp; Ads</div>

                <a href="<?php echo $base_url; ?>single-service.php?service=ppc-services" class="mega-item">
                    <span class="mega-dot"></span>Pay Per Click
                </a>

                <a href="<?php echo $base_url; ?>single-service.php?service=social-media-marketing" class="mega-item">
                    <span class="mega-dot"></span>Social Media Marketing
                </a>

                <a href="<?php echo $base_url; ?>single-service.php?service=smm-services" class="mega-item">
                    <span class="mega-dot"></span>Social Media Management
                </a>

                <a href="<?php echo $base_url; ?>single-service.php?service=snapchat-management" class="mega-item">
                    <span class="mega-dot"></span>Snapchat Management
                </a>

                <a href="<?php echo $base_url; ?>single-service.php?service=email-marketing" class="mega-item">
                    <span class="mega-dot"></span>Email Marketing
                </a>

            </div>

            <!-- CREATIVE & APPS -->
            <div class="mega-col">
                <div class="mega-col-label">Creative &amp; Apps</div>

                <a href="<?php echo $base_url; ?>single-service.php?service=seo-content-writing" class="mega-item">
                    <span class="mega-dot"></span>Content Writing
                </a>

                <a href="<?php echo $base_url; ?>single-service.php?service=script-writing-service" class="mega-item">
                    <span class="mega-dot"></span>Script Writing
                </a>

                <a href="<?php echo $base_url; ?>single-service.php?service=graphic-designing-services" class="mega-item">
                    <span class="mega-dot"></span>Graphic Designing
                </a>

                <a href="<?php echo $base_url; ?>single-service.php?service=video-editing-agency" class="mega-item">
                    <span class="mega-dot"></span>Video Editing
                </a>

                <a href="<?php echo $base_url; ?>single-service.php?service=app-development-service" class="mega-item">
                    <span class="mega-dot"></span>Mobile App Development
                </a>

                <a href="<?php echo $base_url; ?>single-service.php?service=online-reputation-management-service" class="mega-item">
                    <span class="mega-dot"></span>Online Reputation Management
                </a>

            </div>

        </div>
    </div>
</div>
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