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

    <!-- NAVBAR ISOLATION: Must come LAST to override all page stylesheets -->
    <style>
        /* ── Mega Menu: nuclear override ── */
        #mainNav .mega-menu                          { background: #13111e !important; }
        #mainNav .mega-menu a,
        #mainNav .mega-menu a:link,
        #mainNav .mega-menu a:visited,
        #mainNav .mega-menu .mega-item               {
            background:       transparent !important;
            background-color: transparent !important;
            border:           none        !important;
            box-shadow:       none        !important;
            color:            rgba(255,255,255,0.62) !important;
            padding:          8px 10px   !important;
            border-radius:    10px       !important;
            font-size:        13.5px     !important;
            font-weight:      500        !important;
            display:          flex       !important;
            align-items:      center     !important;
            gap:              10px       !important;
            text-decoration:  none       !important;
            transform:        none       !important;
            margin-bottom:    2px        !important;
        }
        #mainNav .mega-menu a:hover,
        #mainNav .mega-menu a:focus,
        #mainNav .mega-menu .mega-item:hover         {
            background:       rgba(123,77,255,0.14)  !important;
            background-color: rgba(123,77,255,0.14)  !important;
            color:            #fff   !important;
            padding-left:     16px   !important;
            border:           none   !important;
            box-shadow:       none   !important;
            transform:        none   !important;
        }
        #mainNav .mega-menu a.active,
        #mainNav .mega-menu .mega-item.active        {
            background:       rgba(123,77,255,0.20)  !important;
            background-color: rgba(123,77,255,0.20)  !important;
            color:            #fff   !important;
            padding-left:     16px   !important;
        }
        #mainNav .mega-menu .mega-dot                {
            width:            6px    !important;
            height:           6px    !important;
            min-width:        6px    !important;
            min-height:       6px    !important;
            border-radius:    50%    !important;
            background:       rgba(123,77,255,0.55)  !important;
            background-color: rgba(123,77,255,0.55)  !important;
            border:           none   !important;
            box-shadow:       none   !important;
            flex-shrink:      0      !important;
            display:          inline-block !important;
        }
        #mainNav .mega-menu a:hover .mega-dot,
        #mainNav .mega-menu .mega-item:hover .mega-dot,
        #mainNav .mega-menu a.active .mega-dot       {
            background:       #a78bfa !important;
            background-color: #a78bfa !important;
            box-shadow:       0 0 8px rgba(167,139,250,0.7) !important;
        }
        #mainNav .mega-col-label                     {
            color:      rgba(255,255,255,0.28) !important;
            background: transparent !important;
        }
    </style>
</head>
<body>

<!-- Hidden SVG gradient defs for stroke usage throughout the page -->
<svg width="0" height="0" style="position:absolute;overflow:hidden" aria-hidden="true">
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
<nav class="navbar" id="mainNav" role="navigation" aria-label="Main navigation">
    <div class="container">
        <div class="nav-inner">

            <!-- ── Logo ── -->
            <a href="<?php echo $base_url; ?>" class="nav-logo" aria-label="Virex Social – Home">
                <div class="logo-icon" aria-hidden="true">V</div>
                <span>
                    <span class="logo-v">Virex </span><span class="logo-rest">Social</span>
                </span>
            </a>

            <!-- ── Desktop Nav ── -->
            <div class="nav-links" id="desktopNav" role="menubar">

                <a href="<?php echo $base_url; ?>" data-page="home" role="menuitem">Home</a>
                <a href="<?php echo $base_url; ?>about" data-page="about" role="menuitem">About</a>

                <!-- Services Mega Dropdown -->
                <div class="nav-dropdown" id="servicesDropdown">
                    <a
                        href="<?php echo $base_url; ?>services"
                        class="nav-drop-toggle"
                        data-page="services"
                        aria-haspopup="true"
                        aria-expanded="false"
                        id="servicesToggleBtn"
                        role="menuitem"
                    >
                        Services
                        <svg class="chevron" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M4 6l4 4 4-4"/>
                        </svg>
                    </a>

                    <div class="mega-menu" role="menu" aria-label="Services submenu">
  <span class="mega-caret" aria-hidden="true"></span> 
                        <!-- Header bar -->
                        <div class="mega-header">
                            <span class="mega-header-title">All Services</span>
                            <span class="mega-header-pill">
                                <span class="mega-header-pill-dot"></span>
                                16 Services
                            </span>
                        </div>

                        <!-- 3-column grid -->
                        <div class="mega-body">

                            <!-- Col 1: Web & SEO -->
                            <div class="mega-col">
                                <div class="mega-col-label">Web &amp; SEO</div>

                                <a href="<?php echo $base_url; ?>single-service?service=web-development" class="mega-item" role="menuitem">
                                    <span class="mega-dot" aria-hidden="true"></span>Web Development
                                </a>
                                <a href="<?php echo $base_url; ?>single-service?service=seo" class="mega-item" role="menuitem">
                                    <span class="mega-dot" aria-hidden="true"></span>Search Engine Optimization
                                </a>
                                <a href="<?php echo $base_url; ?>single-service?service=website-maintenance" class="mega-item" role="menuitem">
                                    <span class="mega-dot" aria-hidden="true"></span>Website Maintenance
                                </a>
                                <a href="<?php echo $base_url; ?>single-service?service=website-speed-optimization-service" class="mega-item" role="menuitem">
                                    <span class="mega-dot" aria-hidden="true"></span>Website Speed Optimization
                                </a>
                                <a href="<?php echo $base_url; ?>single-service?service=ui-ux-design" class="mega-item" role="menuitem">
                                    <span class="mega-dot" aria-hidden="true"></span>UI / UX Design
                                </a>
                            </div>

                            <!-- Col 2: Marketing & Ads -->
                            <div class="mega-col">
                                <div class="mega-col-label">Marketing &amp; Ads</div>

                                <a href="<?php echo $base_url; ?>single-service?service=ppc-services" class="mega-item" role="menuitem">
                                    <span class="mega-dot" aria-hidden="true"></span>Pay Per Click
                                </a>
                                <a href="<?php echo $base_url; ?>single-service?service=social-media-marketing" class="mega-item" role="menuitem">
                                    <span class="mega-dot" aria-hidden="true"></span>Social Media Marketing
                                </a>
                                <a href="<?php echo $base_url; ?>single-service?service=smm-services" class="mega-item" role="menuitem">
                                    <span class="mega-dot" aria-hidden="true"></span>Social Media Management
                                </a>
                                <a href="<?php echo $base_url; ?>single-service?service=snapchat-management" class="mega-item" role="menuitem">
                                    <span class="mega-dot" aria-hidden="true"></span>Snapchat Management
                                </a>
                                <a href="<?php echo $base_url; ?>single-service?service=email-marketing" class="mega-item" role="menuitem">
                                    <span class="mega-dot" aria-hidden="true"></span>Email Marketing
                                </a>
                            </div>

                            <!-- Col 3: Creative & Apps -->
                            <div class="mega-col">
                                <div class="mega-col-label">Creative &amp; Apps</div>

                                <a href="<?php echo $base_url; ?>single-service?service=seo-content-writing" class="mega-item" role="menuitem">
                                    <span class="mega-dot" aria-hidden="true"></span>Content Writing
                                </a>
                                <a href="<?php echo $base_url; ?>single-service?service=script-writing-service" class="mega-item" role="menuitem">
                                    <span class="mega-dot" aria-hidden="true"></span>Script Writing
                                </a>
                                <a href="<?php echo $base_url; ?>single-service?service=graphic-designing-services" class="mega-item" role="menuitem">
                                    <span class="mega-dot" aria-hidden="true"></span>Graphic Designing
                                </a>
                                <a href="<?php echo $base_url; ?>single-service?service=video-editing-agency" class="mega-item" role="menuitem">
                                    <span class="mega-dot" aria-hidden="true"></span>Video Editing
                                </a>
                                <a href="<?php echo $base_url; ?>single-service?service=app-development-service" class="mega-item" role="menuitem">
                                    <span class="mega-dot" aria-hidden="true"></span>Mobile App Development
                                </a>
                                <a href="<?php echo $base_url; ?>single-service?service=online-reputation-management-service" class="mega-item" role="menuitem">
                                    <span class="mega-dot" aria-hidden="true"></span>Online Reputation Management
                                </a>
                            </div>

                        </div><!-- /.mega-body -->
                    </div><!-- /.mega-menu -->
                </div><!-- /.nav-dropdown -->

                <a href="<?php echo $base_url; ?>blog"  data-page="blog"  role="menuitem">Blog</a>
                <a href="<?php echo $base_url; ?>faqs"  data-page="faqs"  role="menuitem">FAQs</a>

            </div><!-- /#desktopNav -->

            <!-- ── Right side ── -->
            <div class="nav-right">
                <a href="<?php echo $base_url; ?>contact-us" class="nav-cta">Contact Today</a>
                <button
                    class="hamburger"
                    id="hamburger"
                    aria-label="Open navigation menu"
                    aria-expanded="false"
                    aria-controls="mobileMenu"
                >
                    <span></span><span></span><span></span>
                </button>
            </div>

        </div><!-- /.nav-inner -->
    </div><!-- /.container -->

    <!-- ══ MOBILE MENU ══ -->
    <div
        class="mobile-menu"
        id="mobileMenu"
        role="navigation"
        aria-label="Mobile navigation"
        aria-hidden="true"
    >
        <a href="<?php echo $base_url; ?>"           data-mob-page="home">Home</a>
        <a href="<?php echo $base_url; ?>about"  data-mob-page="about">About</a>

        <!-- Services accordion row -->
        <div class="mob-services-row">
            <a href="<?php echo $base_url; ?>services" class="mob-services-link" data-mob-page="services">
                Services
            </a>
            <button
                class="mobile-acc-toggle"
                id="mobServicesToggle"
                aria-label="Toggle services submenu"
                aria-expanded="false"
                aria-controls="mobServicesPanel"
            >
                <svg class="mob-chevron" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M4 6l4 4 4-4"/>
                </svg>
            </button>
        </div>

        <!-- Services sub-panel -->
        <div class="mobile-services-panel" id="mobServicesPanel" aria-hidden="true">

            <div class="mob-svc-group-label">Web &amp; SEO</div>
            <a href="<?php echo $base_url; ?>single-service.?service=web-development">
                <span class="mob-dot-sm" aria-hidden="true"></span>Web Development
            </a>
            <a href="<?php echo $base_url; ?>single-service?service=seo">
                <span class="mob-dot-sm" aria-hidden="true"></span>Search Engine Optimization
            </a>
            <a href="<?php echo $base_url; ?>single-service?service=website-maintenance">
                <span class="mob-dot-sm" aria-hidden="true"></span>Website Maintenance
            </a>
            <a href="<?php echo $base_url; ?>single-service?service=website-speed-optimization-service">
                <span class="mob-dot-sm" aria-hidden="true"></span>Website Speed Optimization
            </a>
            <a href="<?php echo $base_url; ?>single-servic?service=ui-ux-design">
                <span class="mob-dot-sm" aria-hidden="true"></span>UI / UX Design
            </a>

            <div class="mob-svc-group-label">Marketing &amp; Ads</div>
            <a href="<?php echo $base_url; ?>single-service?service=ppc-services">
                <span class="mob-dot-sm" aria-hidden="true"></span>Pay Per Click
            </a>
            <a href="<?php echo $base_url; ?>single-service?service=social-media-marketing">
                <span class="mob-dot-sm" aria-hidden="true"></span>Social Media Marketing
            </a>
            <a href="<?php echo $base_url; ?>single-service?service=smm-services">
                <span class="mob-dot-sm" aria-hidden="true"></span>Social Media Management
            </a>
            <a href="<?php echo $base_url; ?>single-service?service=snapchat-management">
                <span class="mob-dot-sm" aria-hidden="true"></span>Snapchat Management
            </a>
            <a href="<?php echo $base_url; ?>single-service?service=email-marketing">
                <span class="mob-dot-sm" aria-hidden="true"></span>Email Marketing
            </a>

            <div class="mob-svc-group-label">Creative &amp; Apps</div>
            <a href="<?php echo $base_url; ?>single-service?service=seo-content-writing">
                <span class="mob-dot-sm" aria-hidden="true"></span>Content Writing
            </a>
            <a href="<?php echo $base_url; ?>single-service?service=script-writing-service">
                <span class="mob-dot-sm" aria-hidden="true"></span>Script Writing
            </a>
            <a href="<?php echo $base_url; ?>single-service?service=graphic-designing-services">
                <span class="mob-dot-sm" aria-hidden="true"></span>Graphic Designing
            </a>
            <a href="<?php echo $base_url; ?>single-service?service=video-editing-agency">
                <span class="mob-dot-sm" aria-hidden="true"></span>Video Editing
            </a>
            <a href="<?php echo $base_url; ?>single-service?service=app-development-service">
                <span class="mob-dot-sm" aria-hidden="true"></span>Mobile App Development
            </a>
            <a href="<?php echo $base_url; ?>single-service?service=online-reputation-management-service">
                <span class="mob-dot-sm" aria-hidden="true"></span>Online Reputation Management
            </a>

        </div><!-- /#mobServicesPanel -->

        <a href="<?php echo $base_url; ?>blog" data-mob-page="blog">Blog</a>
        <a href="<?php echo $base_url; ?>faqs" data-mob-page="faqs">FAQs</a>
        <a href="<?php echo $base_url; ?>contact-us" class="mob-cta">Contact Today</a>

    </div><!-- /#mobileMenu -->
</nav>

<script>
(function () {
    /* ── 1. Scroll shadow ── */
    const nav = document.getElementById('mainNav');
    window.addEventListener('scroll', function () {
        nav.classList.toggle('scrolled', window.scrollY > 30);
    }, { passive: true });

    /* ── 2. Hamburger toggle ── */
    const hamburger  = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');

    hamburger.addEventListener('click', function () {
        const isOpen = hamburger.classList.toggle('open');
        mobileMenu.classList.toggle('open', isOpen);
        hamburger.setAttribute('aria-expanded', isOpen);
        mobileMenu.setAttribute('aria-hidden', !isOpen);
        document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    /* ── 3. Mobile services accordion ── */
    const mobToggle = document.getElementById('mobServicesToggle');
    const mobPanel  = document.getElementById('mobServicesPanel');

    if (mobToggle && mobPanel) {
        mobToggle.addEventListener('click', function () {
            const isOpen = mobToggle.classList.toggle('open');
            mobPanel.classList.toggle('open', isOpen);
            mobToggle.setAttribute('aria-expanded', isOpen);
            mobPanel.setAttribute('aria-hidden', !isOpen);
        });
    }

    /* ── 4. Desktop Services button aria-expanded ── */
    const servicesDropdown  = document.getElementById('servicesDropdown');
    const servicesToggleBtn = document.getElementById('servicesToggleBtn');
    const megaMenu          = servicesDropdown ? servicesDropdown.querySelector('.mega-menu') : null;

    if (servicesDropdown && servicesToggleBtn && megaMenu) {
        servicesDropdown.addEventListener('mouseenter', function () {
            servicesToggleBtn.setAttribute('aria-expanded', 'true');
        });
        servicesDropdown.addEventListener('mouseleave', function () {
            servicesToggleBtn.setAttribute('aria-expanded', 'false');
        });
        /* Keyboard: Enter/Space on button toggles mega menu */
        servicesToggleBtn.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                const expanded = servicesToggleBtn.getAttribute('aria-expanded') === 'true';
                servicesToggleBtn.setAttribute('aria-expanded', !expanded);
                megaMenu.style.opacity     = !expanded ? '1' : '';
                megaMenu.style.visibility  = !expanded ? 'visible' : '';
                megaMenu.style.pointerEvents = !expanded ? 'all' : '';
                megaMenu.style.transform   = !expanded
                    ? 'translateX(-50%) translateY(0)'
                    : '';
            }
        });
    }

    /* ── 5. Active tab — URL-based detection ── */
    function normalizePath(p) {
        return p.replace(/\/$/, '').toLowerCase() || '/';
    }

    const norm = normalizePath(window.location.pathname);

    /* Desktop main links */
    document.querySelectorAll('#desktopNav > a[data-page]').forEach(function (link) {
        if (normalizePath(new URL(link.href).pathname) === norm) {
            link.classList.add('active');
        }
    });

    /* Desktop mega items */
    let servicePageActive = false;
    document.querySelectorAll('.mega-item').forEach(function (item) {
        if (normalizePath(new URL(item.href).pathname) === norm) {
            item.classList.add('active');
            servicePageActive = true;
        }
    });

    if (servicePageActive || norm.includes('/services') || norm.includes('single-service')) {
        if (servicesDropdown) servicesDropdown.classList.add('services-active');
    }

    /* Mobile top-level links */
    document.querySelectorAll('#mobileMenu > a[data-mob-page]').forEach(function (link) {
        if (normalizePath(new URL(link.href).pathname) === norm) {
            link.classList.add('active');
        }
    });

    /* Mobile services link */
    const mobServicesLink = document.querySelector('.mob-services-link');
    if (mobServicesLink) {
        if (normalizePath(new URL(mobServicesLink.href).pathname) === norm) {
            mobServicesLink.classList.add('active');
        }
    }

    /* Mobile service sub-links */
    let mobServiceActive = false;
    document.querySelectorAll('#mobServicesPanel a').forEach(function (link) {
        if (normalizePath(new URL(link.href).pathname) === norm) {
            link.classList.add('active');
            mobServiceActive = true;
        }
    });

    /* Auto-open mobile panel if on a service page */
    if (mobServiceActive && mobToggle && mobPanel) {
        mobToggle.classList.add('open');
        mobPanel.classList.add('open');
        mobToggle.setAttribute('aria-expanded', 'true');
        mobPanel.setAttribute('aria-hidden', 'false');
    }

    /* ── 6. Close mobile menu when any link clicked ── */
    mobileMenu.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
            hamburger.classList.remove('open');
            mobileMenu.classList.remove('open');
            hamburger.setAttribute('aria-expanded', 'false');
            mobileMenu.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        });
    });

    /* ── 7. Close mobile menu on outside click ── */
    document.addEventListener('click', function (e) {
        if (
            mobileMenu.classList.contains('open') &&
            !mobileMenu.contains(e.target) &&
            !hamburger.contains(e.target)
        ) {
            hamburger.classList.remove('open');
            mobileMenu.classList.remove('open');
            hamburger.setAttribute('aria-expanded', 'false');
            mobileMenu.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }
    });

    /* ── 8. Close mega menu on Escape ── */
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            if (servicesToggleBtn) {
                servicesToggleBtn.setAttribute('aria-expanded', 'false');
            }
            if (hamburger.classList.contains('open')) {
                hamburger.classList.remove('open');
                mobileMenu.classList.remove('open');
                hamburger.setAttribute('aria-expanded', 'false');
                mobileMenu.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';
            }
        }
    });

})();
</script>
<!-- ══ END NAVBAR ══ -->