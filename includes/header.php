<?php $current = basename($_SERVER['PHP_SELF']); ?>

<style>
/* ===== NAVBAR CSS ===== */
.custom-navbar {
    background: rgba(255,255,255,0.96);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    position: sticky;
    top: 0;
    z-index: 1000;
    border-bottom: 1px solid rgba(108,60,255,0.10);
    box-shadow: 0 2px 20px rgba(13,13,26,0.06);
    padding: 0;
}

.custom-navbar .container {
    height: 78px;
    display: flex;
    align-items: center;
}

/* Logo */
.navbar-brand {
    font-family: 'Syne', sans-serif;
    font-size: 26px;
    font-weight: 800;
    text-decoration: none;
    display: flex;
    align-items: center;
    flex-shrink: 0;
}
.logo-v    { color: #f4b400; }
.logo-s    { color: #00c8cc; }
.logo-rest { color: #1a0a4a; }

/* Toggler */
.vs-toggler {
    border: none;
    outline: none;
    box-shadow: none;
    background: #f6f5ff;
    border-radius: 10px;
    width: 42px;
    height: 42px;
    display: none;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    margin-left: auto;
    flex-shrink: 0;
}
.vs-toggler .bi { font-size: 22px; color: #6c3cff; }

/* Nav wrapper */
.vs-nav-wrap {
    display: flex;
    align-items: center;
    margin-left: auto;
}

/* Nav list */
.vs-nav {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    gap: 2px;
}

.vs-nav .nav-link {
    font-family: 'DM Sans', sans-serif;
    font-size: 15px;
    font-weight: 500;
    color: #5a5775;
    padding: 8px 13px !important;
    border-radius: 10px;
    transition: color 0.28s ease, background 0.28s ease;
    text-decoration: none;
    display: block;
    white-space: nowrap;
}
.vs-nav .nav-link:hover,
.vs-nav .nav-link.active {
    color: #6c3cff;
    background: rgba(108,60,255,0.07);
}

/* CTA */
.nav-cta {
    background: #1a0a4a !important;
    color: #fff !important;
    padding: 10px 22px !important;
    border-radius: 50px !important;
    font-weight: 600 !important;
    font-size: 13px !important;
    letter-spacing: 0.04em;
    text-transform: uppercase;
    box-shadow: 0 4px 16px rgba(26,10,74,0.18);
    margin-left: 12px;
}
.nav-cta:hover {
    background: #6c3cff !important;
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(108,60,255,0.35) !important;
}

/* Chevron */
.dropdown-icon {
    font-size: 11px;
    transition: transform 0.28s ease;
    display: inline-block;
    margin-left: 3px;
}

/* ===== MEGA MENU ===== */
.mega-wrapper { position: static; }

.mega-menu {
    display: none;
    position: fixed;
    top: 78px;
    left: 50%;
    transform: translateX(-50%);
    width: min(820px, 96vw);
    background: #fff;
    border-radius: 20px;
    box-shadow:
        0 0 0 1px rgba(0,0,0,0.07),
        0 20px 60px rgba(13,13,26,0.14);
    z-index: 9999;
    opacity: 0;
    transition: opacity 0.22s ease;
}

.mega-menu.open {
    display: block;
    opacity: 1;
}

.mega-menu-inner {
    padding: 32px 36px 34px;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 0 24px;
}

.mega-col:not(:last-child) {
    border-right: 1px solid rgba(108,60,255,0.07);
    padding-right: 24px;
}

.mega-col-header {
    display: flex;
    align-items: center;
    gap: 9px;
    margin-bottom: 14px;
    padding-bottom: 12px;
    border-bottom: 1px solid rgba(108,60,255,0.09);
}

.mega-col-icon {
    width: 30px;
    height: 30px;
    background: linear-gradient(135deg, rgba(108,60,255,0.10), rgba(0,200,204,0.08));
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #6c3cff;
    font-size: 14px;
    flex-shrink: 0;
}

.mega-col-title {
    font-family: 'Syne', sans-serif;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: #6c3cff;
}

.mega-link {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: #555;
    font-size: 14px;
    font-weight: 400;
    padding: 6px 0;
    line-height: 1.4;
    transition: color 0.22s ease, gap 0.22s ease;
    gap: 0;
}

.mega-link-arrow {
    font-size: 17px;
    opacity: 0;
    color: #6c3cff;
    transition: opacity 0.22s ease, transform 0.22s ease;
    transform: translateX(-6px);
    flex-shrink: 0;
    margin-right: 2px;
}

.mega-link:hover { color: #6c3cff; gap: 2px; }
.mega-link:hover .mega-link-arrow { opacity: 1; transform: translateX(0); }

.mega-cta {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    margin-top: 16px;
    padding: 9px 16px;
    background: linear-gradient(135deg, #6c3cff, #8a5cf6);
    color: #fff !important;
    border-radius: 50px;
    font-size: 12.5px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.22s ease;
    box-shadow: 0 4px 14px rgba(108,60,255,0.28);
}
.mega-cta:hover { transform: translateY(-2px); box-shadow: 0 8px 22px rgba(108,60,255,0.42); }
.mega-cta .bi { transition: transform 0.22s ease; }
.mega-cta:hover .bi { transform: translateX(3px); }

/* ===== RESPONSIVE ===== */
@media (max-width: 991px) {
    .custom-navbar .container { height: auto; padding-top: 14px; padding-bottom: 14px; flex-wrap: wrap; }
    .vs-toggler { display: flex; }
    .vs-nav-wrap {
        display: none;
        width: 100%;
        margin-left: 0;
        margin-top: 14px;
        padding-top: 14px;
        border-top: 1px solid rgba(108,60,255,0.10);
    }
    .vs-nav-wrap.open { display: block; }
    .vs-nav { flex-direction: column; align-items: stretch; gap: 0; width: 100%; }
    .vs-nav .nav-link { padding: 10px 14px !important; }
    .nav-cta { margin-left: 14px; margin-top: 8px; display: inline-block; }
    .mega-menu {
        position: relative !important;
        top: auto !important;
        left: auto !important;
        transform: none !important;
        width: 100% !important;
        border-radius: 14px;
        margin-top: 6px;
    }
    .mega-menu-inner { grid-template-columns: 1fr; gap: 0; padding: 18px 20px; }
    .mega-col:not(:last-child) {
        border-right: none;
        border-bottom: 1px solid rgba(108,60,255,0.07);
        padding-right: 0;
        padding-bottom: 14px;
        margin-bottom: 14px;
    }
}
</style>

<nav class="custom-navbar">
    <div class="container flex-wrap">

        <a class="navbar-brand" href="index.php">
            <span class="logo-v">V</span><span class="logo-rest">irex</span>&thinsp;<span class="logo-s">S</span><span class="logo-rest">ocial</span>
        </a>

        <button class="vs-toggler" id="vsToggler" aria-label="Toggle navigation">
            <i class="bi bi-list" id="vsToggleIcon"></i>
        </button>

        <div class="vs-nav-wrap" id="vsNavWrap">
            <ul class="vs-nav">

                <li><a class="nav-link <?= ($current === 'index.php') ? 'active' : '' ?>" href="index.php">Home</a></li>
                <li><a class="nav-link <?= ($current === 'about.php') ? 'active' : '' ?>" href="about.php">About Us</a></li>

                <li class="mega-wrapper" id="servicesWrapper">
                    <a class="nav-link" href="services.php" id="servicesTrigger" style="display:flex;align-items:center;">
                        Services <i class="bi bi-chevron-down dropdown-icon" id="servicesChevron"></i>
                    </a>
                    <div class="mega-menu" id="megaMenu">
                        <div class="mega-menu-inner">

                            <div class="mega-col">
                                <div class="mega-col-header">
                                    <span class="mega-col-icon"><i class="bi bi-code-slash"></i></span>
                                    <span class="mega-col-title">Development</span>
                                </div>
                                <a href="services/web-development.php" class="mega-link"><i class="bi bi-arrow-right-short mega-link-arrow"></i>Web Development</a>
                                <a href="services/seo.php" class="mega-link"><i class="bi bi-arrow-right-short mega-link-arrow"></i>Search Engine Optimization</a>
                                <a href="services/mobile-app.php" class="mega-link"><i class="bi bi-arrow-right-short mega-link-arrow"></i>Mobile App Development</a>
                                <a href="services/maintenance.php" class="mega-link"><i class="bi bi-arrow-right-short mega-link-arrow"></i>Website Maintenance</a>
                                <a href="services/speed-optimization.php" class="mega-link"><i class="bi bi-arrow-right-short mega-link-arrow"></i>Website Speed Optimization</a>
                            </div>

                            <div class="mega-col">
                                <div class="mega-col-header">
                                    <span class="mega-col-icon"><i class="bi bi-megaphone"></i></span>
                                    <span class="mega-col-title">Marketing</span>
                                </div>
                                <a href="services/ppc.php" class="mega-link"><i class="bi bi-arrow-right-short mega-link-arrow"></i>Pay Per Click</a>
                                <a href="services/smm.php" class="mega-link"><i class="bi bi-arrow-right-short mega-link-arrow"></i>Social Media Marketing</a>
                                <a href="services/social-management.php" class="mega-link"><i class="bi bi-arrow-right-short mega-link-arrow"></i>Social Media Management</a>
                                <a href="services/snapchat.php" class="mega-link"><i class="bi bi-arrow-right-short mega-link-arrow"></i>Snapchat Management</a>
                                <a href="services/script-writing.php" class="mega-link"><i class="bi bi-arrow-right-short mega-link-arrow"></i>Script Writing</a>
                                <a href="services/email-marketing.php" class="mega-link"><i class="bi bi-arrow-right-short mega-link-arrow"></i>Email Marketing</a>
                            </div>

                            <div class="mega-col">
                                <div class="mega-col-header">
                                    <span class="mega-col-icon"><i class="bi bi-palette"></i></span>
                                    <span class="mega-col-title">Creative</span>
                                </div>
                                <a href="services/content-writing.php" class="mega-link"><i class="bi bi-arrow-right-short mega-link-arrow"></i>Content Writing</a>
                                <a href="services/orm.php" class="mega-link"><i class="bi bi-arrow-right-short mega-link-arrow"></i>Online Reputation Management</a>
                                <a href="services/graphic-design.php" class="mega-link"><i class="bi bi-arrow-right-short mega-link-arrow"></i>Graphic Designing</a>
                                <a href="services/ui-ux.php" class="mega-link"><i class="bi bi-arrow-right-short mega-link-arrow"></i>UI/UX Designing</a>
                                <a href="services/video-editing.php" class="mega-link"><i class="bi bi-arrow-right-short mega-link-arrow"></i>Video Editing</a>
                                <a href="contact-us.php" class="mega-cta">Let's Work Together <i class="bi bi-arrow-right"></i></a>
                            </div>

                        </div>
                    </div>
                </li>

                <li><a class="nav-link <?= ($current === 'careers.php') ? 'active' : '' ?>" href="careers.php">Careers</a></li>
                <li><a class="nav-link <?= ($current === 'blog.php') ? 'active' : '' ?>" href="blog.php">Blog</a></li>
                <li><a class="nav-link <?= ($current === 'faqs.php') ? 'active' : '' ?>" href="faqs.php">FAQs</a></li>
                <li><a href="contact-us.php" class="nav-link nav-cta">Get In Touch</a></li>

            </ul>
        </div>
    </div>
</nav>

<script>
(function () {

    var menu = document.getElementById('megaMenu');
    var chevron = document.getElementById('servicesChevron');
    var wrapper = document.getElementById('servicesWrapper');

    var toggler = document.getElementById('vsToggler');
    var navWrap = document.getElementById('vsNavWrap');
    var toggleIcon = document.getElementById('vsToggleIcon');

    // Hover dropdown
    wrapper.addEventListener('mouseenter', function () {
        menu.classList.add('open');
        chevron.style.transform = 'rotate(180deg)';
    });

    wrapper.addEventListener('mouseleave', function () {
        menu.classList.remove('open');
        chevron.style.transform = 'rotate(0)';
    });

    // Mobile menu
    toggler.addEventListener('click', function () {
        var open = navWrap.classList.toggle('open');
        toggleIcon.className = open ? 'bi bi-x' : 'bi bi-list';
    });

})();
</script>