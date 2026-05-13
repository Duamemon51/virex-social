<?php
/**
 * content-service.php
 * Central content + theme registry for all service pages.
 *
 * HOW TO USE:
 *   In each service PHP file, set $service then include:
 *       $service = 'web-development';
 *       include 'content-service.php';
 *       include 'single-service.php';
 *
 * TO ADD A NEW SERVICE:
 *   Copy any existing block, change the key, update all strings.
 *   The theme sub-array controls every CSS variable injected by single-service.php.
 */

/* ════════════════════════════════════════════════
   SHARED CONTACT — override per-service if needed
════════════════════════════════════════════════ */
$_contact = [
    'whatsapp' => '971000000000',
    'email'    => 'contact@hashtagmedia.ae',
];

/* ════════════════════════════════════════════════
   SVG ICON HELPERS (reused across services)
════════════════════════════════════════════════ */
$_svg = [
    'code'     => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>',
    'search'   => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>',
    'monitor'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>',
    'shop'     => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>',
    'globe'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>',
    'eye'      => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M5 12s2.545-5 7-5c4.454 0 7 5 7 5s-2.546 5-7 5c-4.455 0-7-5-7-5z"/><circle cx="12" cy="12" r="3"/></svg>',
    'phone'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>',
    'shield'   => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
    'bolt'     => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><polyline points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>',
    'link'     => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>',
    'doc'      => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>',
    'chart'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>',
    'pin'      => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>',
    'message'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>',
    'share'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>',
    'target'   => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>',
    'trend'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>',
    'video'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/></svg>',
    'image'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>',
    'mail'     => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>',
    'pen'      => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>',
    'db'       => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg>',
];

/* ════════════════════════════════════════════════════════════════════
   $svc — MASTER CONTENT ARRAY
   Each key is the service slug used as $service in the page file.
════════════════════════════════════════════════════════════════════ */
$svc = [];


/* ──────────────────────────────────────────────
   1. WEB DEVELOPMENT
────────────────────────────────────────────── */
$svc['web-development'] = [
    'name'    => 'Web Development',
    'contact' => $_contact,

    /* THEME TOKENS */
    'theme' => [
        'grad_main'      => 'linear-gradient(135deg,#7c3aed,#d84bff)',
        'grad_warm'      => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'grad_secondary' => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'grad_tertiary'  => 'linear-gradient(135deg,#06b6d4,#0284c7)',
        'accent'         => '#7c3aed',
        'accent2'        => '#f97316',

        'hero_bg'        => 'linear-gradient(155deg,#F0E8FF 0%,#F8F0FF 20%,#FFF0FA 40%,#FFF4F0 65%,#FFF9F0 85%,#FDF8FF 100%)',
        'hero_radials'   => 'radial-gradient(ellipse 70% 60% at 10% 45%,rgba(123,77,255,0.14) 0%,transparent 60%),radial-gradient(ellipse 60% 70% at 90% 30%,rgba(216,91,255,0.12) 0%,transparent 55%),radial-gradient(ellipse 55% 60% at 50% 95%,rgba(255,154,87,0.10) 0%,transparent 60%)',
        'orb1'           => 'rgba(123,77,255,0.10)',
        'orb2'           => 'rgba(216,91,255,0.09)',
        'orb3'           => 'rgba(255,154,87,0.10)',
        'orb4'           => 'rgba(255,111,181,0.10)',
        'badge_border'   => 'rgba(123,77,255,0.18)',
        'badge_shadow'   => '0 4px 16px rgba(123,77,255,0.10)',
        'badge_dot'      => '#f97316',

        'btn_grad'             => 'linear-gradient(135deg,#7c3aed,#d84bff)',
        'btn_shadow'           => '0 4px 25px rgba(124,58,237,.35)',
        'btn_shadow_hover'     => '0 10px 40px rgba(124,58,237,.5)',
        'btn_warm'             => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'btn_warm_shadow'      => '0 4px 25px rgba(249,115,22,.35)',
        'btn_warm_shadow_hover'=> '0 10px 40px rgba(249,115,22,.5)',

        'card_border'       => 'rgba(124,58,237,0.09)',
        'card_border_hover' => 'rgba(124,58,237,0.28)',
        'card_shadow_hover' => '0 24px 60px rgba(124,58,237,.12)',
        'img_shadow'        => '0 30px 80px rgba(124,58,237,0.14)',
        'img_badge_border'  => 'rgba(124,58,237,0.15)',
        'icon_shadow'       => '0 6px 20px rgba(124,58,237,0.3)',
        'stat_border'       => 'rgba(124,58,237,0.09)',
        'stats_shadow'      => '0 4px 20px rgba(124,58,237,0.06)',

        'step_border'        => 'rgba(124,58,237,0.2)',
        'step_shadow'        => '0 8px 30px rgba(124,58,237,0.10)',
        'step_shadow_hover'  => '0 12px 40px rgba(124,58,237,0.35)',
        'connector_line'     => 'linear-gradient(90deg,rgba(124,58,237,0.2),rgba(124,58,237,0.6),rgba(124,58,237,0.2))',

        'section_alt_bg'     => 'linear-gradient(135deg,#fdf8ff 0%,#fff8f0 60%,#f0f9ff 100%)',
        'section_alt_radials'=> 'radial-gradient(ellipse at 80% 20%,rgba(224,64,251,0.05) 0%,transparent 50%),radial-gradient(ellipse at 10% 80%,rgba(249,115,22,0.04) 0%,transparent 50%)',

        'col_divider'  => 'rgba(124,58,237,0.12)',
        'item_divider' => 'rgba(124,58,237,0.08)',

        'ic_a_bg'=>'rgba(124,58,237,0.08)','ic_a_border'=>'rgba(124,58,237,0.15)','ic_a_color'=>'#7c3aed',
        'ic_b_bg'=>'rgba(245,158,11,0.08)','ic_b_border'=>'rgba(245,158,11,0.18)','ic_b_color'=>'#d97706',
        'ic_c_bg'=>'rgba(6,182,212,0.08)', 'ic_c_border'=>'rgba(6,182,212,0.18)', 'ic_c_color'=>'#06b6d4',
        'ic_d_bg'=>'rgba(249,115,22,0.08)','ic_d_border'=>'rgba(249,115,22,0.18)','ic_d_color'=>'#f97316',
        'ic_e_bg'=>'rgba(16,185,129,0.08)','ic_e_border'=>'rgba(16,185,129,0.18)','ic_e_color'=>'#10b981',
        'ic_f_bg'=>'rgba(224,64,251,0.08)','ic_f_border'=>'rgba(224,64,251,0.18)','ic_f_color'=>'#d84bff',

        'marquee_bg'   => 'linear-gradient(135deg,#0d0520 0%,#130a35 40%,#0a1a40 70%,#0d0a2e 100%)',
        'marquee_fade' => '#0d0520',
        'pill_b_bg'=>'rgba(124,58,237,0.2)', 'pill_b_border'=>'rgba(124,58,237,0.35)', 'pill_b_color'=>'#c4b5fd', 'pill_b_icon_bg'=>'rgba(124,58,237,0.3)',
        'pill_c_bg'=>'rgba(249,115,22,0.15)','pill_c_border'=>'rgba(249,115,22,0.3)', 'pill_c_color'=>'#fbbf24', 'pill_c_icon_bg'=>'rgba(249,115,22,0.3)',
        'pill_d_bg'=>'rgba(6,182,212,0.12)', 'pill_d_border'=>'rgba(6,182,212,0.25)', 'pill_d_color'=>'#67e8f9', 'pill_d_icon_bg'=>'rgba(6,182,212,0.2)',
        'pill_e_bg'=>'rgba(16,185,129,0.12)','pill_e_border'=>'rgba(16,185,129,0.25)','pill_e_color'=>'#6ee7b7','pill_e_icon_bg'=>'rgba(16,185,129,0.2)',

        'cta_bg'      => 'linear-gradient(135deg,#0d0520 0%,#130a35 55%,#0a1a40 100%)',
        'cta_radials' => 'radial-gradient(ellipse at 80% 20%,rgba(224,64,251,0.15) 0%,transparent 55%),radial-gradient(ellipse at 15% 80%,rgba(249,115,22,0.1) 0%,transparent 50%)',

        'faq_border'       => 'rgba(124,58,237,0.1)',
        'faq_border_hover' => 'rgba(124,58,237,0.25)',
        'faq_border_open'  => 'rgba(124,58,237,0.35)',
        'faq_shadow_hover' => '0 6px 24px rgba(124,58,237,0.08)',
        'faq_shadow_open'  => '0 8px 32px rgba(124,58,237,0.10)',
        'faq_card_bg'      => 'linear-gradient(145deg,#0d0520 0%,#130a35 55%,#0a1a40 100%)',
        'faq_card_radials' => 'radial-gradient(ellipse at 80% 10%,rgba(124,58,237,0.35) 0%,transparent 60%),radial-gradient(ellipse at 10% 90%,rgba(249,115,22,0.15) 0%,transparent 50%)',
        'faq_orb1'         => 'rgba(124,58,237,0.07)',
        'faq_orb2'         => 'rgba(249,115,22,0.06)',
        'grid_line'        => 'rgba(124,58,237,0.03)',
        'toggle_bg'        => 'rgba(124,58,237,0.06)',
        'toggle_border'    => 'rgba(124,58,237,0.15)',
        'cta_icon_shadow'  => '0 8px 30px rgba(124,58,237,0.4)',
    ],

    /* HERO */
    'hero' => [
        'badge'     => 'Web Development Service',
        'heading'   => 'Web Development Service That<br><span class="grad-text">Shapes Digital Experiences</span>',
        'desc'      => 'We don\'t just design websites — our web development service builds growth, credibility, and lasting impressions. From concept to launch, we create websites engineered for performance, scalability, and real results.',
        'cta_label' => 'Get Started',
    ],

    /* WHAT IS */
    'what' => [
        'img'             => 'web-development-about.jpg',
        'img_fallback_bg' => 'linear-gradient(135deg,#f0e8ff,#fff0f5)',
        'badge_icon'      => '<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>',
        'badge_title'     => 'Google\'s Web Performance Report',
        'badge_stat'      => 'Websites under 2s load time see 15% higher conversions',
        'label'           => 'What We Do',
        'heading'         => 'What is <span class="grad-text">Web Development?</span>',
        'desc'            => 'From concept to launch, our web development service creates websites engineered for performance, scalability, and growth. As a leading web development company in the UAE, we turn your ideas into powerful websites.',
        'checklist'       => [
            'Custom web design and development services tailored to your brand',
            'Fast, mobile-friendly, and fully secure websites',
            'Expert help from the best website development company in Dubai',
            'SEO-ready code structure built for Google rankings from day one',
        ],
        'stats' => [
            ['num'=>'500+','lbl'=>'Websites Built'],
            ['num'=>'98%', 'lbl'=>'Client Satisfaction'],
            ['num'=>'10+', 'lbl'=>'Years Experience'],
        ],
    ],

    /* HOW IT WORKS */
    'how' => [
        'label'   => 'Our Process',
        'heading' => 'Bringing Websites to Life —<br><span class="grad-text">The Right Way</span>',
        'desc'    => 'Every brand has a story. We help you craft yours through clean design, fast performance, and secure code.',
        'steps'   => [
            ['title'=>'Discovery & Strategy',   'desc'=>'We learn your business goals, target audience, and competitors to craft a bulletproof website strategy.'],
            ['title'=>'Design & Prototype',     'desc'=>'Our designers create stunning, user-friendly wireframes and prototypes that reflect your brand identity.'],
            ['title'=>'Development & Testing',  'desc'=>'Clean, optimized code. Cross-browser testing. Mobile-first responsive build. Speed and security baked in.'],
            ['title'=>'Launch & Support',        'desc'=>'We deploy your site and stay with you post-launch. Updates, maintenance, and support whenever you need.'],
        ],
    ],

    /* WHY US */
    'why' => [
        'label'   => 'Why Choose Us?',
        'heading' => 'Why Choose Us for<br><span class="grad-text">Web Development?</span>',
        'desc'    => 'With so many options out there, choosing the right web development company can be tough. Here\'s why we\'re the best website development company in Dubai for growing brands.',
        'cards'   => [
            ['title'=>'Tailored Services', 'desc'=>'We don\'t do one-size-fits-all. Every site is designed to match your brand and business goals — unique, purpose-built, and personal.'],
            ['title'=>'Clean Code, Always','desc'=>'From custom builds to CMS platforms, our code is fast, secure, and built to scale without breaking under pressure.'],
            ['title'=>'Built for Users',   'desc'=>'Great design meets smart UX. Your visitors will love using your site — and Google will love crawling it too.'],
            ['title'=>'Full Support',       'desc'=>'From launch to updates, we\'re here to keep your site running smoothly, always. No ghosting, no delays.'],
        ],
    ],

    /* SERVICES OFFERED */
    'offers' => [
        'label'   => 'What We Offer',
        'heading' => 'From Code to Conversion —<br><span class="grad-text">Full Web Solutions</span>',
        'columns' => [
            [
                'label' => 'Platform Development',
                'items' => [
                    ['title'=>'WordPress Development','desc'=>'Powerful, scalable WordPress sites that are easy to manage and built to grow. Perfect for businesses seeking the best website development.','ic'=>'ic-a','icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>'],
                    ['title'=>'Shopify Development',  'desc'=>'Clean, conversion-friendly Shopify stores that help you sell more. Backed by reliable web development service that understands e-commerce.','ic'=>'ic-b','icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>'],
                    ['title'=>'Framer & Webflow',     'desc'=>'Modern no-code solutions with high-end design. Ideal for startups and creatives who want fast, beautiful results.','ic'=>'ic-c','icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>'],
                ],
            ],
            [
                'label' => 'Custom Development',
                'items' => [
                    ['title'=>'Custom Code Builds',      'desc'=>'Beyond the basics — unique features built from scratch. Our team delivers custom sites with clean code tailored exactly to your brand.','ic'=>'ic-d','icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>'],
                    ['title'=>'UI/UX Design',             'desc'=>'Stunning, user-centered interfaces that look great on every device and guide visitors toward conversion naturally.','ic'=>'ic-e','icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M5 12s2.545-5 7-5c4.454 0 7 5 7 5s-2.546 5-7 5c-4.455 0-7-5-7-5z"/><circle cx="12" cy="12" r="3"/></svg>'],
                    ['title'=>'Mobile App Development',  'desc'=>'iOS and Android apps built for performance and scale — from planning to launch and ongoing support.','ic'=>'ic-f','icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>'],
                ],
            ],
            [
                'label' => 'Maintenance & Growth',
                'items' => [
                    ['title'=>'Website Maintenance', 'desc'=>'Keep your website secure, updated, and performing at peak levels — so you can focus on running your business.','ic'=>'ic-a','icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>'],
                    ['title'=>'Speed Optimization',   'desc'=>'Slow sites lose customers. We optimize load time, Core Web Vitals, and overall performance to keep visitors engaged.','ic'=>'ic-c','icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><polyline points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>'],
                    ['title'=>'SEO-Ready Development','desc'=>'We build with search engines in mind — clean structure, fast pages, and proper markup so your site ranks from launch.','ic'=>'ic-b','icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="8" y1="11" x2="14" y2="11"/><line x1="11" y1="8" x2="11" y2="14"/></svg>'],
                ],
            ],
        ],
    ],

    /* EXTRA — tech stack grid */
    'extra' => [
        'label'   => 'Technologies',
        'heading' => 'Tools & <span class="grad-text">Technologies We Use</span>',
        'desc'    => 'We work with the latest and most proven tech stack to deliver fast, secure, and scalable web solutions.',
        'type'    => 'tech',
        'items'   => [
            ['name'=>'React JS',       'icon_bg'=>'rgba(33,150,243,0.1)',  'icon_border'=>'rgba(33,150,243,0.2)',  'icon_color'=>'#2196F3', 'svg_inner'=>'<polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/>'],
            ['name'=>'Next.js',        'icon_bg'=>'rgba(0,0,0,0.05)',      'icon_border'=>'rgba(0,0,0,0.1)',       'icon_color'=>'#374151', 'svg_inner'=>'<rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 9h6M9 12h6M9 15h4"/>'],
            ['name'=>'Vue.js',         'icon_bg'=>'rgba(66,185,131,0.1)',  'icon_border'=>'rgba(66,185,131,0.2)',  'icon_color'=>'#42b883', 'svg_inner'=>'<polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/>'],
            ['name'=>'WordPress',      'icon_bg'=>'rgba(33,33,33,0.05)',   'icon_border'=>'rgba(33,33,33,0.12)',   'icon_color'=>'#555',    'svg_inner'=>'<path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>'],
            ['name'=>'Shopify',        'icon_bg'=>'rgba(149,88,179,0.1)',  'icon_border'=>'rgba(149,88,179,0.2)',  'icon_color'=>'#9558B3', 'svg_inner'=>'<path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/>'],
            ['name'=>'Webflow',        'icon_bg'=>'rgba(0,196,255,0.1)',   'icon_border'=>'rgba(0,196,255,0.2)',   'icon_color'=>'#00C4FF', 'svg_inner'=>'<circle cx="12" cy="12" r="10"/><path d="M8 12h8M12 8v8"/>'],
            ['name'=>'PHP / Laravel',  'icon_bg'=>'rgba(247,147,26,0.1)',  'icon_border'=>'rgba(247,147,26,0.2)',  'icon_color'=>'#F7931A', 'svg_inner'=>'<rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/>'],
            ['name'=>'Node.js',        'icon_bg'=>'rgba(68,169,108,0.1)',  'icon_border'=>'rgba(68,169,108,0.2)',  'icon_color'=>'#44A96C', 'svg_inner'=>'<path d="M5 12.55a11 11 0 0 1 14.08 0"/><path d="M1.42 9a16 16 0 0 1 21.16 0"/><path d="M8.53 16.11a6 6 0 0 1 6.95 0"/><line x1="12" y1="20" x2="12.01" y2="20"/>'],
            ['name'=>'React Native',   'icon_bg'=>'rgba(255,45,85,0.1)',   'icon_border'=>'rgba(255,45,85,0.2)',   'icon_color'=>'#FF2D55', 'svg_inner'=>'<rect x="5" y="2" width="14" height="20" rx="2"/><line x1="12" y1="18" x2="12.01" y2="18"/>'],
            ['name'=>'Framer',         'icon_bg'=>'rgba(54,186,212,0.1)',  'icon_border'=>'rgba(54,186,212,0.2)',  'icon_color'=>'#36BAD4', 'svg_inner'=>'<path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"/><line x1="16" y1="8" x2="2" y2="22"/><line x1="17.5" y1="15" x2="9" y2="15"/>'],
            ['name'=>'MySQL / Mongo',  'icon_bg'=>'rgba(249,115,22,0.1)',  'icon_border'=>'rgba(249,115,22,0.2)',  'icon_color'=>'#f97316', 'svg_inner'=>'<ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/>'],
            ['name'=>'REST APIs',      'icon_bg'=>'rgba(124,58,237,0.1)',  'icon_border'=>'rgba(124,58,237,0.15)', 'icon_color'=>'#7c3aed', 'svg_inner'=>'<path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"/><polyline points="13 2 13 9 20 9"/>'],
        ],
    ],

    /* MARQUEE */
    'marquee' => [
        'track1' => [
            ['text'=>'WordPress',        'style'=>'b','icon'=>'<svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Custom Development','style'=>'d','icon'=>'<svg viewBox="0 0 24 24" fill="none"><polyline points="16 18 22 12 16 6" stroke="currentColor" stroke-width="2"/><polyline points="8 6 2 12 8 18" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Shopify',           'style'=>'c','icon'=>'<svg viewBox="0 0 24 24" fill="none"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Mobile Apps',       'style'=>'e','icon'=>'<svg viewBox="0 0 24 24" fill="none"><rect x="5" y="2" width="14" height="20" rx="2" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'UI/UX Design',      'style'=>'a','icon'=>'<svg viewBox="0 0 24 24" fill="none"><rect x="3" y="3" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Webflow',           'style'=>'b','icon'=>'<svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'React JS',          'style'=>'d','icon'=>'<svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="2" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Speed Optimization','style'=>'c','icon'=>'<svg viewBox="0 0 24 24" fill="none"><polyline points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" stroke="currentColor" stroke-width="2"/></svg>'],
        ],
        'track2' => [
            ['text'=>'SEO-Ready Code',   'style'=>'c','icon'=>'<svg viewBox="0 0 24 24" fill="none"><circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Laravel / PHP',    'style'=>'b','icon'=>'<svg viewBox="0 0 24 24" fill="none"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'E-Commerce',       'style'=>'a','icon'=>'<svg viewBox="0 0 24 24" fill="none"><circle cx="9" cy="21" r="1" stroke="currentColor" stroke-width="2"/><circle cx="20" cy="21" r="1" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Maintenance',      'style'=>'d','icon'=>'<svg viewBox="0 0 24 24" fill="none"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Node.js',          'style'=>'e','icon'=>'<svg viewBox="0 0 24 24" fill="none"><polygon points="12 2 22 8.5 22 15.5 12 22 2 15.5 2 8.5 12 2" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'MySQL / MongoDB',  'style'=>'b','icon'=>'<svg viewBox="0 0 24 24" fill="none"><ellipse cx="12" cy="5" rx="9" ry="3" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'REST APIs',        'style'=>'c','icon'=>'<svg viewBox="0 0 24 24" fill="none"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Framer',           'style'=>'a','icon'=>'<svg viewBox="0 0 24 24" fill="none"><path d="M5 16V8h14v8l-7 5-7-5z" stroke="currentColor" stroke-width="2"/></svg>'],
        ],
    ],

    /* CTA */
    'cta' => [
        'label'       => 'Get Started Today',
        'heading'     => 'From Code to Conversion —<br>Your Website Deserves <span class="grad-text">More</span>',
        'desc'        => 'Templates won\'t tell your story. Half-built sites won\'t grow your business. You\'re not here for average, and neither are we. Let\'s build something that actually works.',
        'primary_btn' => 'Build My Website',
    ],

    /* FAQ */
    'faq' => [
        'subtitle' => 'Have questions about our web development service? Let\'s clear up the confusion.',
        'items' => [
            ['q'=>'What\'s included in your web development service?', 'a'=>'Our service includes everything from planning and design to coding, CMS setup, mobile optimization, SEO basics, and launch support. We also offer third-party integrations like CRMs, payment systems, and analytics tools.'],
            ['q'=>'How long does it take to build a website?', 'a'=>'It depends on size and complexity. Basic sites can take 2–3 weeks, while custom or eCommerce websites may take 4–8 weeks. We\'ll give you a clear timeline before we start.'],
            ['q'=>'Do I need to know how to code to update my website?', 'a'=>'Not at all. We use easy-to-manage CMS platforms like WordPress, Shopify, or Webflow so you can update your content without touching a single line of code.'],
            ['q'=>'Is Hashtag Media the right web development company for my business?', 'a'=>'If you want a site that looks great, performs well, and actually supports your growth — yes. We\'re known as the best website development company in Dubai for a reason.'],
            ['q'=>'Can you redesign my existing website?', 'a'=>'Absolutely. We can review your current site, keep what works, and fix what doesn\'t — giving it a full upgrade in design, performance, and content.'],
            ['q'=>'Do you provide ongoing support after launch?', 'a'=>'Yes. We offer website maintenance, speed optimization, and continuous support packages. You\'re never on your own after launch day.'],
        ],
    ],
];


/* ──────────────────────────────────────────────
   2. SEO SERVICES
────────────────────────────────────────────── */
$svc['seo'] = [
    'name'    => 'SEO Services',
    'contact' => $_contact,

    'theme' => [
        'grad_main'      => 'linear-gradient(135deg,#3b82f6,#7c3aed)',
        'grad_warm'      => 'linear-gradient(135deg,#10b981,#059669)',
        'grad_secondary' => 'linear-gradient(135deg,#7c3aed,#5b21b6)',
        'grad_tertiary'  => 'linear-gradient(135deg,#10b981,#059669)',
        'accent'         => '#3b82f6',
        'accent2'        => '#10b981',

        'hero_bg'        => 'linear-gradient(155deg,#E8F4FF 0%,#F0F8FF 20%,#F5F0FF 40%,#FFF0F5 65%,#FFF8F0 85%,#F8FFFD 100%)',
        'hero_radials'   => 'radial-gradient(ellipse 70% 60% at 10% 45%,rgba(59,130,246,0.13) 0%,transparent 60%),radial-gradient(ellipse 60% 70% at 90% 30%,rgba(123,77,255,0.11) 0%,transparent 55%),radial-gradient(ellipse 55% 60% at 50% 95%,rgba(16,185,129,0.09) 0%,transparent 60%)',
        'orb1'           => 'rgba(59,130,246,0.10)',
        'orb2'           => 'rgba(123,77,255,0.09)',
        'orb3'           => 'rgba(16,185,129,0.10)',
        'orb4'           => 'rgba(249,115,22,0.09)',
        'badge_border'   => 'rgba(59,130,246,0.18)',
        'badge_shadow'   => '0 4px 16px rgba(59,130,246,0.10)',
        'badge_dot'      => '#10b981',

        'btn_grad'              => 'linear-gradient(135deg,#3b82f6,#7c3aed)',
        'btn_shadow'            => '0 4px 25px rgba(59,130,246,.35)',
        'btn_shadow_hover'      => '0 10px 40px rgba(59,130,246,.5)',
        'btn_warm'              => 'linear-gradient(135deg,#10b981,#059669)',
        'btn_warm_shadow'       => '0 4px 25px rgba(16,185,129,.35)',
        'btn_warm_shadow_hover' => '0 10px 40px rgba(16,185,129,.5)',

        'card_border'       => 'rgba(59,130,246,0.09)',
        'card_border_hover' => 'rgba(59,130,246,0.28)',
        'card_shadow_hover' => '0 24px 60px rgba(59,130,246,.12)',
        'img_shadow'        => '0 30px 80px rgba(59,130,246,0.14)',
        'img_badge_border'  => 'rgba(59,130,246,0.15)',
        'icon_shadow'       => '0 6px 20px rgba(59,130,246,0.3)',
        'stat_border'       => 'rgba(59,130,246,0.09)',
        'stats_shadow'      => '0 4px 20px rgba(59,130,246,0.06)',

        'step_border'        => 'rgba(59,130,246,0.2)',
        'step_shadow'        => '0 8px 30px rgba(59,130,246,0.10)',
        'step_shadow_hover'  => '0 12px 40px rgba(59,130,246,0.35)',
        'connector_line'     => 'linear-gradient(90deg,rgba(59,130,246,0.2),rgba(59,130,246,0.6),rgba(59,130,246,0.2))',

        'section_alt_bg'     => 'linear-gradient(135deg,#f0f8ff 0%,#fdf5ff 60%,#f0fff8 100%)',
        'section_alt_radials'=> 'radial-gradient(ellipse at 80% 20%,rgba(59,130,246,0.05) 0%,transparent 50%),radial-gradient(ellipse at 10% 80%,rgba(16,185,129,0.04) 0%,transparent 50%)',

        'col_divider'  => 'rgba(59,130,246,0.12)',
        'item_divider' => 'rgba(59,130,246,0.08)',

        'ic_a_bg'=>'rgba(59,130,246,0.08)', 'ic_a_border'=>'rgba(59,130,246,0.15)', 'ic_a_color'=>'#3b82f6',
        'ic_b_bg'=>'rgba(124,58,237,0.08)', 'ic_b_border'=>'rgba(124,58,237,0.15)', 'ic_b_color'=>'#7c3aed',
        'ic_c_bg'=>'rgba(16,185,129,0.08)', 'ic_c_border'=>'rgba(16,185,129,0.18)', 'ic_c_color'=>'#10b981',
        'ic_d_bg'=>'rgba(249,115,22,0.08)', 'ic_d_border'=>'rgba(249,115,22,0.18)', 'ic_d_color'=>'#f97316',
        'ic_e_bg'=>'rgba(6,182,212,0.08)',  'ic_e_border'=>'rgba(6,182,212,0.18)',  'ic_e_color'=>'#06b6d4',
        'ic_f_bg'=>'rgba(244,63,94,0.08)',  'ic_f_border'=>'rgba(244,63,94,0.18)',  'ic_f_color'=>'#f43f5e',

        'marquee_bg'   => 'linear-gradient(135deg,#020818 0%,#0a1535 40%,#051a10 70%,#080520 100%)',
        'marquee_fade' => '#020818',
        'pill_b_bg'=>'rgba(59,130,246,0.2)', 'pill_b_border'=>'rgba(59,130,246,0.35)', 'pill_b_color'=>'#93c5fd', 'pill_b_icon_bg'=>'rgba(59,130,246,0.3)',
        'pill_c_bg'=>'rgba(16,185,129,0.15)','pill_c_border'=>'rgba(16,185,129,0.3)', 'pill_c_color'=>'#6ee7b7', 'pill_c_icon_bg'=>'rgba(16,185,129,0.2)',
        'pill_d_bg'=>'rgba(124,58,237,0.18)','pill_d_border'=>'rgba(124,58,237,0.32)','pill_d_color'=>'#c4b5fd', 'pill_d_icon_bg'=>'rgba(124,58,237,0.3)',
        'pill_e_bg'=>'rgba(249,115,22,0.12)','pill_e_border'=>'rgba(249,115,22,0.25)','pill_e_color'=>'#fbbf24', 'pill_e_icon_bg'=>'rgba(249,115,22,0.2)',

        'cta_bg'      => 'linear-gradient(135deg,#0a0f2e 0%,#0f1a40 50%,#051a10 100%)',
        'cta_radials' => 'radial-gradient(ellipse at 80% 20%,rgba(59,130,246,0.15) 0%,transparent 55%),radial-gradient(ellipse at 15% 80%,rgba(16,185,129,0.1) 0%,transparent 50%)',

        'faq_border'       => 'rgba(59,130,246,0.1)',
        'faq_border_hover' => 'rgba(59,130,246,0.25)',
        'faq_border_open'  => 'rgba(59,130,246,0.35)',
        'faq_shadow_hover' => '0 6px 24px rgba(59,130,246,0.08)',
        'faq_shadow_open'  => '0 8px 32px rgba(59,130,246,0.10)',
        'faq_card_bg'      => 'linear-gradient(145deg,#020818 0%,#0a1535 55%,#051a10 100%)',
        'faq_card_radials' => 'radial-gradient(ellipse at 80% 10%,rgba(59,130,246,0.35) 0%,transparent 60%),radial-gradient(ellipse at 10% 90%,rgba(16,185,129,0.15) 0%,transparent 50%)',
        'faq_orb1'         => 'rgba(59,130,246,0.07)',
        'faq_orb2'         => 'rgba(16,185,129,0.06)',
        'grid_line'        => 'rgba(59,130,246,0.03)',
        'toggle_bg'        => 'rgba(59,130,246,0.06)',
        'toggle_border'    => 'rgba(59,130,246,0.15)',
        'cta_icon_shadow'  => '0 8px 30px rgba(59,130,246,0.4)',
    ],

    'hero' => [
        'badge'     => 'SEO Services',
        'heading'   => 'SEO Services That<br><span class="grad-text">Skyrocket Your Rankings</span>',
        'desc'      => 'We don\'t just optimize websites — our SEO services build organic authority, drive qualified traffic, and deliver lasting results. From keyword strategy to technical excellence, we engineer your path to page one.',
        'cta_label' => 'Get Started',
    ],

    'what' => [
        'img'             => 'seo-about.jpg',
        'img_fallback_bg' => 'linear-gradient(135deg,#e8f4ff,#f0fff8)',
        'badge_icon'      => '<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>',
        'badge_title'     => 'BrightEdge Research',
        'badge_stat'      => '68% of online experiences begin with a search engine',
        'label'           => 'What We Do',
        'heading'         => 'What Are <span class="grad-text">SEO Services?</span>',
        'desc'            => 'From keyword research to technical audits, our SEO services help your business rank higher on Google, attract more visitors, and convert them into loyal customers — all without paying for ads.',
        'checklist'       => [
            'In-depth keyword research targeting high-intent search queries',
            'On-page and technical SEO optimized for Google\'s core algorithms',
            'Local SEO services in Dubai to dominate nearby searches',
            'Transparent monthly reporting with clear rankings and ROI data',
        ],
        'stats' => [
            ['num'=>'300+','lbl'=>'Sites Ranked'],
            ['num'=>'98%', 'lbl'=>'Client Retention'],
            ['num'=>'10+', 'lbl'=>'Years Experience'],
        ],
    ],

    'how' => [
        'label'   => 'Our Process',
        'heading' => 'How We Launch Your<br><span class="grad-text">SEO Success</span>',
        'desc'    => 'A proven, transparent process that turns search intent into sustainable organic growth for your business.',
        'steps'   => [
            ['title'=>'Audit & Analysis',    'desc'=>'We dig deep into your site\'s health, competitor landscape, and keyword opportunities to build a bulletproof strategy.'],
            ['title'=>'Strategy & Planning', 'desc'=>'Our SEO consultants craft a custom roadmap aligned with your business goals, budget, and target audience.'],
            ['title'=>'Optimize & Execute',  'desc'=>'On-page fixes, content creation, technical improvements, and high-quality link building — all executed with precision.'],
            ['title'=>'Track & Grow',        'desc'=>'Monthly reports, continuous monitoring, and ongoing refinements to keep your rankings climbing and conversions growing.'],
        ],
    ],

    'why' => [
        'label'   => 'Why Choose Us?',
        'heading' => 'Why Choose Us for<br><span class="grad-text">SEO Services?</span>',
        'desc'    => 'With so many agencies promising first-page rankings, here\'s why Hashtag Media is the trusted SEO partner for growing brands in Dubai and beyond.',
        'cards'   => [
            ['title'=>'Data-Driven Strategy', 'desc'=>'Every decision is backed by real data — no guesswork. We use advanced tools to find opportunities your competitors are missing.'],
            ['title'=>'White-Hat Only',        'desc'=>'We never cut corners. Our SEO techniques are 100% ethical, Google-compliant, and built to deliver rankings that last.'],
            ['title'=>'Full Transparency',     'desc'=>'You\'ll always know what we\'re doing and why. Monthly reports in plain language — no jargon, no surprises, just results.'],
            ['title'=>'End-to-End Support',    'desc'=>'From initial audit to ongoing optimization, we\'re your long-term SEO partner — not a one-time fix-it service.'],
        ],
    ],

    'offers' => [
        'label'   => 'What We Offer',
        'heading' => 'Complete SEO Solutions —<br><span class="grad-text">Every Angle Covered</span>',
        'columns' => [
            [
                'label' => 'On-Site Optimization',
                'items' => [
                    ['title'=>'Keyword Research',     'desc'=>'We uncover high-intent keywords your audience is actively searching, targeting terms that drive real traffic and conversions.','ic'=>'ic-a','icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>'],
                    ['title'=>'On-Page SEO',           'desc'=>'From title tags to internal linking, we fine-tune every element to help your pages rank higher and keep visitors engaged longer.','ic'=>'ic-b','icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/></svg>'],
                    ['title'=>'Technical SEO Audits', 'desc'=>'Speed, crawlability, mobile optimization, and Core Web Vitals — we fix what\'s holding your site back from top positions.','ic'=>'ic-c','icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>'],
                ],
            ],
            [
                'label' => 'Authority Building',
                'items' => [
                    ['title'=>'Link Building',        'desc'=>'Clean, authoritative backlinks from relevant sites. We build your domain authority the right way — sustainably and ethically.','ic'=>'ic-d','icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>'],
                    ['title'=>'SEO Content Strategy','desc'=>'Compelling, keyword-rich content that satisfies search intent, earns backlinks naturally, and positions you as an industry authority.','ic'=>'ic-e','icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>'],
                    ['title'=>'Penalty Recovery',     'desc'=>'If your rankings have dropped due to a Google penalty, we diagnose the cause and restore your site\'s standing quickly and effectively.','ic'=>'ic-f','icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>'],
                ],
            ],
            [
                'label' => 'Growth & Analytics',
                'items' => [
                    ['title'=>'Local SEO (Dubai)',    'desc'=>'Dominate local search results, Google Maps, and "near me" queries. Perfect for businesses targeting customers in the UAE.','ic'=>'ic-a','icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>'],
                    ['title'=>'Analytics & Reporting','desc'=>'Clear monthly reports covering rankings, organic traffic, conversions, and actionable insights — always knowing your exact ROI.','ic'=>'ic-c','icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="6" y="2" width="14" height="20" rx="2" ry="2"/><path d="M10 9h3"/><path d="M10 13h5"/></svg>'],
                    ['title'=>'Mobile SEO',            'desc'=>'With most searches happening on mobile, we ensure your site delivers a flawless experience on every device, every time.','ic'=>'ic-b','icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>'],
                ],
            ],
        ],
    ],

    /* EXTRA — data/stats section */
    'extra' => [
        'label'   => 'Why SEO Matters',
        'heading' => 'The Numbers Behind <span class="grad-text">Organic Growth</span>',
        'desc'    => 'SEO isn\'t optional anymore — it\'s the foundation of sustainable digital growth. Here\'s what the data shows.',
        'type'    => 'stats',
        'items'   => [
            ['pct'=>'68%',   'title'=>'Online Experiences',   'desc'=>'Start with a search engine. If you\'re not visible on Google, you\'re invisible to most of your potential customers. (BrightEdge)'],
            ['pct'=>'53%',   'title'=>'All Website Traffic',  'desc'=>'Comes from organic search — more than any other channel. SEO delivers compounding returns that paid ads simply can\'t match long-term.'],
            ['pct'=>'14.6%', 'title'=>'SEO Lead Close Rate',  'desc'=>'Compared to just 1.7% for outbound leads. Organic visitors are already searching for what you offer — they convert far better.'],
        ],
    ],

    'marquee' => [
        'track1' => [
            ['text'=>'Keyword Research', 'style'=>'b','icon'=>'<svg viewBox="0 0 24 24" fill="none"><circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'On-Page SEO',      'style'=>'d','icon'=>'<svg viewBox="0 0 24 24" fill="none"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Technical Audit',  'style'=>'c','icon'=>'<svg viewBox="0 0 24 24" fill="none"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Link Building',    'style'=>'a','icon'=>'<svg viewBox="0 0 24 24" fill="none"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Local SEO Dubai',  'style'=>'e','icon'=>'<svg viewBox="0 0 24 24" fill="none"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'SEO Content',      'style'=>'b','icon'=>'<svg viewBox="0 0 24 24" fill="none"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Google Rankings',  'style'=>'c','icon'=>'<svg viewBox="0 0 24 24" fill="none"><rect x="3" y="3" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Core Web Vitals',  'style'=>'d','icon'=>'<svg viewBox="0 0 24 24" fill="none"><polyline points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" stroke="currentColor" stroke-width="2"/></svg>'],
        ],
        'track2' => [
            ['text'=>'E-commerce SEO',       'style'=>'c','icon'=>'<svg viewBox="0 0 24 24" fill="none"><circle cx="9" cy="21" r="1" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Analytics & Reporting','style'=>'b','icon'=>'<svg viewBox="0 0 24 24" fill="none"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Penalty Recovery',     'style'=>'a','icon'=>'<svg viewBox="0 0 24 24" fill="none"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Mobile SEO',           'style'=>'d','icon'=>'<svg viewBox="0 0 24 24" fill="none"><rect x="5" y="2" width="14" height="20" rx="2" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Schema Markup',        'style'=>'e','icon'=>'<svg viewBox="0 0 24 24" fill="none"><polyline points="16 18 22 12 16 6" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Competitor Analysis',  'style'=>'b','icon'=>'<svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Site Speed Boost',     'style'=>'c','icon'=>'<svg viewBox="0 0 24 24" fill="none"><polyline points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Google Business',      'style'=>'a','icon'=>'<svg viewBox="0 0 24 24" fill="none"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke="currentColor" stroke-width="2"/></svg>'],
        ],
    ],

    'cta' => [
        'label'       => 'Get Started Today',
        'heading'     => 'Stop Losing Customers to<br>Competitors on <span class="grad-text">Page One</span>',
        'desc'        => 'Every day your site isn\'t ranking is a day your competitors are taking your customers. Let\'s change that with a proven SEO strategy built specifically for your business.',
        'primary_btn' => 'Boost My Rankings',
    ],

    'faq' => [
        'subtitle' => 'Have questions about our SEO services? We\'ve got clear, honest answers.',
        'items' => [
            ['q'=>'What exactly are SEO services?',                     'a'=>'SEO services improve your website\'s visibility on search engines like Google. This includes keyword research, on-page optimization, technical fixes, link building, and content strategy — all working together to help you rank higher and attract more qualified traffic.'],
            ['q'=>'How long does SEO take to show results?',            'a'=>'SEO is a long-term investment. Most clients start seeing measurable ranking improvements within 3–6 months. Competitive industries may take longer, but the results are compounding — your rankings keep growing over time unlike paid ads.'],
            ['q'=>'How much do SEO services cost?',                     'a'=>'Pricing depends on your goals, industry competition, and the scope of work required. We offer flexible packages for startups, SMEs, and enterprises. Contact us for a custom quote tailored specifically to your business.'],
            ['q'=>'Do you offer local SEO for Dubai businesses?',       'a'=>'Absolutely. Our local SEO services help Dubai businesses appear in Google Maps, local pack results, and "near me" searches. We optimize your Google Business Profile, local citations, and location-specific content to dominate your area.'],
            ['q'=>'Is SEO a one-time service or ongoing?',              'a'=>'SEO is an ongoing process. Google updates its algorithm hundreds of times per year, and competitors are always optimizing too. Continuous monitoring, content creation, and refinement are essential to maintain and grow your rankings.'],
            ['q'=>'Can SEO help my small business compete with larger brands?','a'=>'Yes — and it\'s one of SEO\'s greatest advantages. By targeting specific, high-intent keywords and local searches, small businesses can consistently outrank larger competitors in their niche. Smart strategy beats big budgets.'],
        ],
    ],
];


/* ──────────────────────────────────────────────
   3. SOCIAL MEDIA MARKETING
   (Starter template — fill in as needed)
────────────────────────────────────────────── */
$svc['social-media-marketing'] = [
    'name'    => 'Social Media Marketing',
    'contact' => $_contact,

    'theme' => [
        'grad_main'      => 'linear-gradient(135deg,#ec4899,#f97316)',
        'grad_warm'      => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'grad_secondary' => 'linear-gradient(135deg,#ec4899,#be185d)',
        'grad_tertiary'  => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'accent'         => '#ec4899',
        'accent2'        => '#f97316',

        'hero_bg'        => 'linear-gradient(155deg,#FFF0F8 0%,#FFF5F0 20%,#FFFAF0 40%,#FFF0F5 65%,#F5F0FF 85%,#FDF8FF 100%)',
        'hero_radials'   => 'radial-gradient(ellipse 70% 60% at 10% 45%,rgba(236,72,153,0.12) 0%,transparent 60%),radial-gradient(ellipse 60% 70% at 90% 30%,rgba(249,115,22,0.10) 0%,transparent 55%)',
        'orb1'           => 'rgba(236,72,153,0.10)',
        'orb2'           => 'rgba(249,115,22,0.09)',
        'orb3'           => 'rgba(245,158,11,0.09)',
        'orb4'           => 'rgba(168,85,247,0.09)',
        'badge_border'   => 'rgba(236,72,153,0.18)',
        'badge_shadow'   => '0 4px 16px rgba(236,72,153,0.10)',
        'badge_dot'      => '#f97316',

        'btn_grad'              => 'linear-gradient(135deg,#ec4899,#f97316)',
        'btn_shadow'            => '0 4px 25px rgba(236,72,153,.35)',
        'btn_shadow_hover'      => '0 10px 40px rgba(236,72,153,.5)',
        'btn_warm'              => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'btn_warm_shadow'       => '0 4px 25px rgba(249,115,22,.35)',
        'btn_warm_shadow_hover' => '0 10px 40px rgba(249,115,22,.5)',

        'card_border'       => 'rgba(236,72,153,0.09)',
        'card_border_hover' => 'rgba(236,72,153,0.28)',
        'card_shadow_hover' => '0 24px 60px rgba(236,72,153,.12)',
        'img_shadow'        => '0 30px 80px rgba(236,72,153,0.14)',
        'img_badge_border'  => 'rgba(236,72,153,0.15)',
        'icon_shadow'       => '0 6px 20px rgba(236,72,153,0.3)',
        'stat_border'       => 'rgba(236,72,153,0.09)',
        'stats_shadow'      => '0 4px 20px rgba(236,72,153,0.06)',

        'step_border'        => 'rgba(236,72,153,0.2)',
        'step_shadow'        => '0 8px 30px rgba(236,72,153,0.10)',
        'step_shadow_hover'  => '0 12px 40px rgba(236,72,153,0.35)',
        'connector_line'     => 'linear-gradient(90deg,rgba(236,72,153,0.2),rgba(236,72,153,0.6),rgba(236,72,153,0.2))',

        'section_alt_bg'     => 'linear-gradient(135deg,#fff0f8 0%,#fff8f0 60%,#f5f0ff 100%)',
        'section_alt_radials'=> 'radial-gradient(ellipse at 80% 20%,rgba(236,72,153,0.05) 0%,transparent 50%),radial-gradient(ellipse at 10% 80%,rgba(249,115,22,0.04) 0%,transparent 50%)',

        'col_divider'  => 'rgba(236,72,153,0.12)',
        'item_divider' => 'rgba(236,72,153,0.08)',

        'ic_a_bg'=>'rgba(236,72,153,0.08)','ic_a_border'=>'rgba(236,72,153,0.15)','ic_a_color'=>'#ec4899',
        'ic_b_bg'=>'rgba(249,115,22,0.08)','ic_b_border'=>'rgba(249,115,22,0.18)','ic_b_color'=>'#f97316',
        'ic_c_bg'=>'rgba(168,85,247,0.08)','ic_c_border'=>'rgba(168,85,247,0.18)','ic_c_color'=>'#a855f7',
        'ic_d_bg'=>'rgba(245,158,11,0.08)','ic_d_border'=>'rgba(245,158,11,0.18)','ic_d_color'=>'#f59e0b',
        'ic_e_bg'=>'rgba(6,182,212,0.08)', 'ic_e_border'=>'rgba(6,182,212,0.18)', 'ic_e_color'=>'#06b6d4',
        'ic_f_bg'=>'rgba(16,185,129,0.08)','ic_f_border'=>'rgba(16,185,129,0.18)','ic_f_color'=>'#10b981',

        'marquee_bg'   => 'linear-gradient(135deg,#1a0520 0%,#350a1a 40%,#1a0a20 70%,#200510 100%)',
        'marquee_fade' => '#1a0520',
        'pill_b_bg'=>'rgba(236,72,153,0.2)', 'pill_b_border'=>'rgba(236,72,153,0.35)', 'pill_b_color'=>'#f9a8d4', 'pill_b_icon_bg'=>'rgba(236,72,153,0.3)',
        'pill_c_bg'=>'rgba(249,115,22,0.15)','pill_c_border'=>'rgba(249,115,22,0.3)', 'pill_c_color'=>'#fbbf24', 'pill_c_icon_bg'=>'rgba(249,115,22,0.3)',
        'pill_d_bg'=>'rgba(168,85,247,0.15)','pill_d_border'=>'rgba(168,85,247,0.3)', 'pill_d_color'=>'#d8b4fe', 'pill_d_icon_bg'=>'rgba(168,85,247,0.3)',
        'pill_e_bg'=>'rgba(6,182,212,0.12)', 'pill_e_border'=>'rgba(6,182,212,0.25)', 'pill_e_color'=>'#67e8f9', 'pill_e_icon_bg'=>'rgba(6,182,212,0.2)',

        'cta_bg'      => 'linear-gradient(135deg,#1a0520 0%,#350a1a 55%,#200510 100%)',
        'cta_radials' => 'radial-gradient(ellipse at 80% 20%,rgba(236,72,153,0.2) 0%,transparent 55%),radial-gradient(ellipse at 15% 80%,rgba(249,115,22,0.12) 0%,transparent 50%)',

        'faq_border'       => 'rgba(236,72,153,0.1)',
        'faq_border_hover' => 'rgba(236,72,153,0.25)',
        'faq_border_open'  => 'rgba(236,72,153,0.35)',
        'faq_shadow_hover' => '0 6px 24px rgba(236,72,153,0.08)',
        'faq_shadow_open'  => '0 8px 32px rgba(236,72,153,0.10)',
        'faq_card_bg'      => 'linear-gradient(145deg,#1a0520 0%,#350a1a 55%,#200510 100%)',
        'faq_card_radials' => 'radial-gradient(ellipse at 80% 10%,rgba(236,72,153,0.35) 0%,transparent 60%),radial-gradient(ellipse at 10% 90%,rgba(249,115,22,0.15) 0%,transparent 50%)',
        'faq_orb1'         => 'rgba(236,72,153,0.07)',
        'faq_orb2'         => 'rgba(249,115,22,0.06)',
        'grid_line'        => 'rgba(236,72,153,0.03)',
        'toggle_bg'        => 'rgba(236,72,153,0.06)',
        'toggle_border'    => 'rgba(236,72,153,0.15)',
        'cta_icon_shadow'  => '0 8px 30px rgba(236,72,153,0.4)',
    ],

    'hero' => [
        'badge'     => 'Social Media Marketing',
        'heading'   => 'Social Media Marketing That<br><span class="grad-text">Builds Real Audiences</span>',
        'desc'      => 'We don\'t just post content — we build communities, spark conversations, and turn followers into loyal customers. Our social media strategies are built around your brand and engineered for measurable growth.',
        'cta_label' => 'Get Started',
    ],

    'what' => [
        'img'             => 'social-media-about.jpg',
        'img_fallback_bg' => 'linear-gradient(135deg,#fff0f8,#fff8f0)',
        'badge_icon'      => '<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>',
        'badge_title'     => 'HubSpot Research',
        'badge_stat'      => '77% of social media marketers say social media was effective for their business',
        'label'           => 'What We Do',
        'heading'         => 'What is <span class="grad-text">Social Media Marketing?</span>',
        'desc'            => 'Social media marketing is about putting your brand in front of the right audience, at the right time, with the right message. We handle strategy, content, ads, and analytics so you can focus on your business.',
        'checklist'       => [
            'Platform strategy across Instagram, TikTok, LinkedIn, Facebook & X',
            'Thumb-stopping creative content designed for engagement and shares',
            'Targeted paid social campaigns that maximise your ad budget ROI',
            'Monthly analytics reports with clear performance metrics and insights',
        ],
        'stats' => [
            ['num'=>'200+','lbl'=>'Brands Managed'],
            ['num'=>'4.8x','lbl'=>'Avg. ROAS'],
            ['num'=>'10+', 'lbl'=>'Years Experience'],
        ],
    ],

    'how' => [
        'label'   => 'Our Process',
        'heading' => 'How We Grow Your<br><span class="grad-text">Social Presence</span>',
        'desc'    => 'A structured, data-driven approach that turns social platforms into powerful growth engines for your brand.',
        'steps'   => [
            ['title'=>'Brand & Audience Audit', 'desc'=>'We analyse your current presence, competitors, and target audience to uncover the biggest growth opportunities.'],
            ['title'=>'Strategy & Content Plan', 'desc'=>'We build a custom content calendar, messaging framework, and platform strategy aligned to your business goals.'],
            ['title'=>'Create & Publish',        'desc'=>'Our team produces high-quality visuals, copy, and video content — then schedules, publishes, and engages on your behalf.'],
            ['title'=>'Analyse & Optimise',      'desc'=>'Monthly performance reviews, A/B testing, and continuous optimisation to keep your numbers growing month over month.'],
        ],
    ],

    'why' => [
        'label'   => 'Why Choose Us?',
        'heading' => 'Why Choose Us for<br><span class="grad-text">Social Media?</span>',
        'desc'    => 'There are thousands of agencies. Here\'s why growing brands in Dubai choose Hashtag Media to manage their social presence.',
        'cards'   => [
            ['title'=>'Platform Specialists',   'desc'=>'We know every algorithm inside out — from Instagram Reels to LinkedIn thought leadership. No generalists here.'],
            ['title'=>'Creative That Converts', 'desc'=>'Pretty content isn\'t enough. Every post, story, and ad is designed to drive engagement, clicks, and sales.'],
            ['title'=>'Paid + Organic United',  'desc'=>'We combine organic community building with precision-targeted paid campaigns for compounding growth.'],
            ['title'=>'Transparent Reporting',  'desc'=>'Real numbers, plain language. You\'ll always know exactly how your social channels are performing and why.'],
        ],
    ],

    'offers' => [
        'label'   => 'What We Offer',
        'heading' => 'Complete Social Media Solutions —<br><span class="grad-text">Every Platform Covered</span>',
        'columns' => [
            [
                'label' => 'Content & Strategy',
                'items' => [
                    ['title'=>'Content Creation',    'desc'=>'Scroll-stopping graphics, Reels, carousels, and copy crafted to reflect your brand and spark real engagement.','ic'=>'ic-a','icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>'],
                    ['title'=>'Social Strategy',     'desc'=>'A custom platform strategy built around your target audience, business goals, and competitive landscape.','ic'=>'ic-b','icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>'],
                    ['title'=>'Community Management','desc'=>'We manage your inbox, comments, and DMs — ensuring every follower feels heard and valued by your brand.','ic'=>'ic-c','icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>'],
                ],
            ],
            [
                'label' => 'Paid Social',
                'items' => [
                    ['title'=>'Instagram & Facebook Ads','desc'=>'High-converting Meta ad campaigns built on precise audience targeting, compelling creative, and smart bidding strategies.','ic'=>'ic-d','icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>'],
                    ['title'=>'TikTok Advertising',      'desc'=>'Native-style TikTok ad creatives that blend seamlessly into the feed and drive awareness, downloads, and sales.','ic'=>'ic-e','icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/></svg>'],
                    ['title'=>'LinkedIn Campaigns',      'desc'=>'B2B social advertising that reaches decision-makers, generates qualified leads, and builds your professional authority.','ic'=>'ic-f','icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/></svg>'],
                ],
            ],
            [
                'label' => 'Growth & Reporting',
                'items' => [
                    ['title'=>'Influencer Marketing','desc'=>'We connect your brand with the right content creators and micro-influencers to amplify reach and build authentic trust.','ic'=>'ic-a','icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>'],
                    ['title'=>'Social Analytics',   'desc'=>'Monthly deep-dive reports covering reach, engagement, follower growth, and paid campaign ROI with actionable insights.','ic'=>'ic-c','icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>'],
                    ['title'=>'Video Production',   'desc'=>'Short-form video content built for Reels, TikTok, and Shorts — scripted, produced, and optimised for maximum views.','ic'=>'ic-b','icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/></svg>'],
                ],
            ],
        ],
    ],

    'extra' => [], /* no extra section for social media */

    'marquee' => [
        'track1' => [
            ['text'=>'Instagram Marketing','style'=>'b','icon'=>'<svg viewBox="0 0 24 24" fill="none"><rect x="2" y="2" width="20" height="20" rx="5" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'TikTok Ads',         'style'=>'c','icon'=>'<svg viewBox="0 0 24 24" fill="none"><polygon points="23 7 16 12 23 17 23 7" stroke="currentColor" stroke-width="2"/><rect x="1" y="5" width="15" height="14" rx="2" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Facebook Campaigns', 'style'=>'d','icon'=>'<svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'LinkedIn B2B',       'style'=>'a','icon'=>'<svg viewBox="0 0 24 24" fill="none"><circle cx="18" cy="5" r="3" stroke="currentColor" stroke-width="2"/><circle cx="6" cy="12" r="3" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Paid Social',        'style'=>'e','icon'=>'<svg viewBox="0 0 24 24" fill="none"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Content Creation',   'style'=>'b','icon'=>'<svg viewBox="0 0 24 24" fill="none"><rect x="3" y="3" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Video Production',   'style'=>'c','icon'=>'<svg viewBox="0 0 24 24" fill="none"><polygon points="23 7 16 12 23 17 23 7" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Influencer Marketing','style'=>'d','icon'=>'<svg viewBox="0 0 24 24" fill="none"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2"/><circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2"/></svg>'],
        ],
        'track2' => [
            ['text'=>'Reels Strategy',      'style'=>'b','icon'=>'<svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Community Management','style'=>'c','icon'=>'<svg viewBox="0 0 24 24" fill="none"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Social Analytics',    'style'=>'a','icon'=>'<svg viewBox="0 0 24 24" fill="none"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Brand Awareness',     'style'=>'d','icon'=>'<svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><circle cx="12" cy="12" r="6" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Hashtag Strategy',    'style'=>'e','icon'=>'<svg viewBox="0 0 24 24" fill="none"><line x1="4" y1="9" x2="20" y2="9" stroke="currentColor" stroke-width="2"/><line x1="4" y1="15" x2="20" y2="15" stroke="currentColor" stroke-width="2"/><line x1="10" y1="3" x2="8" y2="21" stroke="currentColor" stroke-width="2"/><line x1="16" y1="3" x2="14" y2="21" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Ad Creative',         'style'=>'b','icon'=>'<svg viewBox="0 0 24 24" fill="none"><rect x="3" y="3" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Growth Strategy',     'style'=>'c','icon'=>'<svg viewBox="0 0 24 24" fill="none"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18" stroke="currentColor" stroke-width="2"/></svg>'],
            ['text'=>'Story Campaigns',     'style'=>'a','icon'=>'<svg viewBox="0 0 24 24" fill="none"><rect x="5" y="2" width="14" height="20" rx="2" stroke="currentColor" stroke-width="2"/></svg>'],
        ],
    ],

    'cta' => [
        'label'       => 'Get Started Today',
        'heading'     => 'Your Audience Is Scrolling.<br>Make Sure They <span class="grad-text">Stop for You</span>',
        'desc'        => 'Every scroll is an opportunity. Every post is a chance to connect, convert, and grow. Let\'s build a social presence that actually moves the needle for your business.',
        'primary_btn' => 'Grow My Social',
    ],

    'faq' => [
        'subtitle' => 'Have questions about social media marketing? Here are honest answers.',
        'items' => [
            ['q'=>'Which social media platforms do you manage?',          'a'=>'We manage all major platforms including Instagram, TikTok, Facebook, LinkedIn, X (Twitter), and YouTube. We\'ll recommend the right mix based on where your audience actually spends time.'],
            ['q'=>'How long does it take to see results?',                'a'=>'Organic growth typically takes 3–6 months to build meaningful momentum. Paid social campaigns can deliver results much faster — often within the first few weeks.'],
            ['q'=>'Do you create all the content?',                       'a'=>'Yes. Our in-house creative team handles copywriting, graphic design, video editing, and content scheduling. You review and approve before anything goes live.'],
            ['q'=>'How do you measure success?',                          'a'=>'We track reach, engagement rate, follower growth, website traffic from social, and for paid campaigns — ROAS, CPL, and conversions. You get a clear monthly report.'],
            ['q'=>'Can you run paid social ads as well as organic?',      'a'=>'Absolutely. We offer both as a combined package or standalone. Combining organic content with targeted paid campaigns delivers the best long-term results.'],
            ['q'=>'Do I need to be involved in the content creation process?','a'=>'Only as much as you want. We run a monthly content review call and you approve posts before publishing. Some clients prefer a hands-off approach; others like to collaborate closely.'],
        ],
    ],
];

/* ──────────────────────────────────────────────
   4. video-editing-agency
   (Starter template — fill in as needed)
────────────────────────────────────────────── */
$svc['video-editing-agency'] = [
    'name'    => 'video-editing-agency',
    'contact' => $_contact,

     'theme' => [
        'grad_main'      => 'linear-gradient(135deg,#7c3aed,#d84bff)',
        'grad_warm'      => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'grad_secondary' => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'grad_tertiary'  => 'linear-gradient(135deg,#06b6d4,#0284c7)',
        'accent'         => '#7c3aed',
        'accent2'        => '#f97316',

        'hero_bg'        => 'linear-gradient(155deg,#F0E8FF 0%,#F8F0FF 20%,#FFF0FA 40%,#FFF4F0 65%,#FFF9F0 85%,#FDF8FF 100%)',
        'hero_radials'   => 'radial-gradient(ellipse 70% 60% at 10% 45%,rgba(123,77,255,0.14) 0%,transparent 60%),radial-gradient(ellipse 60% 70% at 90% 30%,rgba(216,91,255,0.12) 0%,transparent 55%),radial-gradient(ellipse 55% 60% at 50% 95%,rgba(255,154,87,0.10) 0%,transparent 60%)',
        'orb1'           => 'rgba(123,77,255,0.10)',
        'orb2'           => 'rgba(216,91,255,0.09)',
        'orb3'           => 'rgba(255,154,87,0.10)',
        'orb4'           => 'rgba(255,111,181,0.10)',
        'badge_border'   => 'rgba(123,77,255,0.18)',
        'badge_shadow'   => '0 4px 16px rgba(123,77,255,0.10)',
        'badge_dot'      => '#f97316',

        'btn_grad'             => 'linear-gradient(135deg,#7c3aed,#d84bff)',
        'btn_shadow'           => '0 4px 25px rgba(124,58,237,.35)',
        'btn_shadow_hover'     => '0 10px 40px rgba(124,58,237,.5)',
        'btn_warm'             => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'btn_warm_shadow'      => '0 4px 25px rgba(249,115,22,.35)',
        'btn_warm_shadow_hover'=> '0 10px 40px rgba(249,115,22,.5)',

        'card_border'       => 'rgba(124,58,237,0.09)',
        'card_border_hover' => 'rgba(124,58,237,0.28)',
        'card_shadow_hover' => '0 24px 60px rgba(124,58,237,.12)',
        'img_shadow'        => '0 30px 80px rgba(124,58,237,0.14)',
        'img_badge_border'  => 'rgba(124,58,237,0.15)',
        'icon_shadow'       => '0 6px 20px rgba(124,58,237,0.3)',
        'stat_border'       => 'rgba(124,58,237,0.09)',
        'stats_shadow'      => '0 4px 20px rgba(124,58,237,0.06)',

        'step_border'        => 'rgba(124,58,237,0.2)',
        'step_shadow'        => '0 8px 30px rgba(124,58,237,0.10)',
        'step_shadow_hover'  => '0 12px 40px rgba(124,58,237,0.35)',
        'connector_line'     => 'linear-gradient(90deg,rgba(124,58,237,0.2),rgba(124,58,237,0.6),rgba(124,58,237,0.2))',

        'section_alt_bg'     => 'linear-gradient(135deg,#fdf8ff 0%,#fff8f0 60%,#f0f9ff 100%)',
        'section_alt_radials'=> 'radial-gradient(ellipse at 80% 20%,rgba(224,64,251,0.05) 0%,transparent 50%),radial-gradient(ellipse at 10% 80%,rgba(249,115,22,0.04) 0%,transparent 50%)',

        'col_divider'  => 'rgba(124,58,237,0.12)',
        'item_divider' => 'rgba(124,58,237,0.08)',

        'ic_a_bg'=>'rgba(124,58,237,0.08)','ic_a_border'=>'rgba(124,58,237,0.15)','ic_a_color'=>'#7c3aed',
        'ic_b_bg'=>'rgba(245,158,11,0.08)','ic_b_border'=>'rgba(245,158,11,0.18)','ic_b_color'=>'#d97706',
        'ic_c_bg'=>'rgba(6,182,212,0.08)', 'ic_c_border'=>'rgba(6,182,212,0.18)', 'ic_c_color'=>'#06b6d4',
        'ic_d_bg'=>'rgba(249,115,22,0.08)','ic_d_border'=>'rgba(249,115,22,0.18)','ic_d_color'=>'#f97316',
        'ic_e_bg'=>'rgba(16,185,129,0.08)','ic_e_border'=>'rgba(16,185,129,0.18)','ic_e_color'=>'#10b981',
        'ic_f_bg'=>'rgba(224,64,251,0.08)','ic_f_border'=>'rgba(224,64,251,0.18)','ic_f_color'=>'#d84bff',

        'marquee_bg'   => 'linear-gradient(135deg,#0d0520 0%,#130a35 40%,#0a1a40 70%,#0d0a2e 100%)',
        'marquee_fade' => '#0d0520',
        'pill_b_bg'=>'rgba(124,58,237,0.2)', 'pill_b_border'=>'rgba(124,58,237,0.35)', 'pill_b_color'=>'#c4b5fd', 'pill_b_icon_bg'=>'rgba(124,58,237,0.3)',
        'pill_c_bg'=>'rgba(249,115,22,0.15)','pill_c_border'=>'rgba(249,115,22,0.3)', 'pill_c_color'=>'#fbbf24', 'pill_c_icon_bg'=>'rgba(249,115,22,0.3)',
        'pill_d_bg'=>'rgba(6,182,212,0.12)', 'pill_d_border'=>'rgba(6,182,212,0.25)', 'pill_d_color'=>'#67e8f9', 'pill_d_icon_bg'=>'rgba(6,182,212,0.2)',
        'pill_e_bg'=>'rgba(16,185,129,0.12)','pill_e_border'=>'rgba(16,185,129,0.25)','pill_e_color'=>'#6ee7b7','pill_e_icon_bg'=>'rgba(16,185,129,0.2)',

        'cta_bg'      => 'linear-gradient(135deg,#0d0520 0%,#130a35 55%,#0a1a40 100%)',
        'cta_radials' => 'radial-gradient(ellipse at 80% 20%,rgba(224,64,251,0.15) 0%,transparent 55%),radial-gradient(ellipse at 15% 80%,rgba(249,115,22,0.1) 0%,transparent 50%)',

        'faq_border'       => 'rgba(124,58,237,0.1)',
        'faq_border_hover' => 'rgba(124,58,237,0.25)',
        'faq_border_open'  => 'rgba(124,58,237,0.35)',
        'faq_shadow_hover' => '0 6px 24px rgba(124,58,237,0.08)',
        'faq_shadow_open'  => '0 8px 32px rgba(124,58,237,0.10)',
        'faq_card_bg'      => 'linear-gradient(145deg,#0d0520 0%,#130a35 55%,#0a1a40 100%)',
        'faq_card_radials' => 'radial-gradient(ellipse at 80% 10%,rgba(124,58,237,0.35) 0%,transparent 60%),radial-gradient(ellipse at 10% 90%,rgba(249,115,22,0.15) 0%,transparent 50%)',
        'faq_orb1'         => 'rgba(124,58,237,0.07)',
        'faq_orb2'         => 'rgba(249,115,22,0.06)',
        'grid_line'        => 'rgba(124,58,237,0.03)',
        'toggle_bg'        => 'rgba(124,58,237,0.06)',
        'toggle_border'    => 'rgba(124,58,237,0.15)',
        'cta_icon_shadow'  => '0 8px 30px rgba(124,58,237,0.4)',
    ],

   'hero' => [
    'badge'     => 'Video Editing Agency That Brings Your Vision to Life',
    'heading'   => 'Video Editing Agency That Brings Your Vision to Life',
    'desc'      => 'From the first idea to the final frame, our video editing agency creates cinematic edits across reels, podcasts, animations, interviews, and long-form videos — giving your brand the standout content it deserves.',
    'cta_label' => 'Get Started',
],

'what' => [
    'img'             => 'video-editing-about.jpg',
    'img_fallback_bg' => 'linear-gradient(135deg,#fff0f8,#f0f8ff)',

    'badge_icon'      => '<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8"><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2"/></svg>',
    'badge_title'     => 'Professional Video Editing',
    'badge_stat'      => 'Cinematic storytelling that boosts engagement & conversions',

    'label'           => 'What We Do',
    'heading'         => 'What is <span class="grad-text">Video Editing?</span>',
    'desc'            => 'Video editing is the art of turning raw footage into powerful, engaging visual stories. We enhance your videos with cuts, color grading, sound design, motion graphics, and storytelling that keeps viewers hooked.',

    'checklist'       => [
        'Cinematic edits for reels, ads, and long-form videos',
        'Professional color grading & correction for premium visuals',
        'Audio cleanup, sound design & voice enhancement',
        'Motion graphics, subtitles & visual effects',
    ],

    'stats' => [
        ['num'=>'300+','lbl'=>'Videos Edited'],
        ['num'=>'5x','lbl'=>'Engagement Boost'],
        ['num'=>'10+','lbl'=>'Editing Experts'],
    ],
],

'how' => [
    'label'   => 'Our Process',
    'heading' => 'How We Turn Your<br><span class="grad-text">Raw Footage Into Magic</span>',
    'desc'    => 'A simple, creative workflow that transforms your clips into high-performing content.',

    'steps'   => [
        ['title'=>'Footage Review', 'desc'=>'We analyze your raw clips and understand your vision, goal, and audience.'],
        ['title'=>'Editing Strategy', 'desc'=>'We plan pacing, storytelling, transitions, and style direction.'],
        ['title'=>'Creative Editing', 'desc'=>'We edit your video with cuts, effects, music, and graphics.'],
        ['title'=>'Final Polish', 'desc'=>'We refine colors, sound, and export in all required formats.'],
    ],
],

'why' => [
    'label'   => 'Why Choose Us?',
    'heading' => 'Why Choose Us for<br><span class="grad-text">Video Editing?</span>',
    'desc'    => 'We don’t just edit videos — we craft stories that stop the scroll and increase engagement.',

    'cards'   => [
        ['title'=>'Cinematic Quality', 'desc'=>'Every frame is polished with professional color, timing, and storytelling.'],
        ['title'=>'Platform Optimized', 'desc'=>'Perfect formats for TikTok, Instagram Reels, YouTube Shorts & Ads.'],
        ['title'=>'Creative Storytelling', 'desc'=>'We turn basic clips into engaging, story-driven content.'],
        ['title'=>'Fast Delivery', 'desc'=>'Quick turnaround without compromising quality.'],
    ],
],

'offers' => [
    'label'   => 'What We Offer',
    'heading' => 'Complete Video Editing Solutions —<br><span class="grad-text">All Content Types Covered</span>',

    'columns' => [
        [
            'label' => 'Editing Services',
            'items' => [
                [
                    'title'=>'Cinematic Editing',
                    'desc'=>'Professional storytelling edits for ads, reels, vlogs, and brand videos.',
                    'ic'=>'ic-a',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2"/></svg>'
                ],
                [
                    'title'=>'Color Grading',
                    'desc'=>'Enhance visuals with professional color correction and cinematic tones.',
                    'ic'=>'ic-b',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="10"/></svg>'
                ],
                [
                    'title'=>'Audio Enhancement',
                    'desc'=>'Clean, balanced, noise-free sound for professional output.',
                    'ic'=>'ic-c',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 12h18"/></svg>'
                ],
            ],
        ],
        [
            'label' => 'Content Formats',
            'items' => [
                [
                    'title'=>'Reels & Shorts',
                    'desc'=>'Fast-paced edits optimized for Instagram, TikTok & YouTube Shorts.',
                    'ic'=>'ic-d',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><polygon points="23 7 16 12 23 17"/></svg>'
                ],
                [
                    'title'=>'YouTube Videos',
                    'desc'=>'Long-form storytelling edits for YouTube channels & podcasts.',
                    'ic'=>'ic-e',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect width="18" height="14" x="3" y="5"/></svg>'
                ],
                [
                    'title'=>'Ads Editing',
                    'desc'=>'High-converting video ads designed for maximum ROI.',
                    'ic'=>'ic-f',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><polyline points="23 6 13 15 8 10 1 18"/></svg>'
                ],
            ],
        ],
    ],
],

'cta' => [
    'label'       => 'Get Started Today',
    'heading'     => 'Turn Your Raw Footage Into<br><span class="grad-text">Cinematic Content</span>',
    'desc'        => 'Send us your clips and let our editors transform them into high-performing videos that capture attention and drive results.',
    'primary_btn' => 'Start Editing',
],

'faq' => [
    'subtitle' => 'Have questions about video editing? Here are clear answers.',
    'items' => [
        ['q'=>'What type of videos do you edit?', 'a'=>'We edit reels, YouTube videos, ads, podcasts, interviews, animations, and more.'],
        ['q'=>'How long does editing take?', 'a'=>'Usually 2–5 days depending on project complexity.'],
        ['q'=>'Do you provide revisions?', 'a'=>'Yes, we include revisions to ensure you are fully satisfied.'],
        ['q'=>'Can you match my brand style?', 'a'=>'Yes, we adapt colors, pacing, and tone to match your brand identity.'],
    ],
],
];

$svc['app-development-service'] = [
    'name'    => 'Social Media Marketing',
    'contact' => $_contact,

    'theme' => [
        'grad_main'      => 'linear-gradient(135deg,#ec4899,#f97316)',
        'grad_warm'      => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'grad_secondary' => 'linear-gradient(135deg,#ec4899,#be185d)',
        'grad_tertiary'  => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'accent'         => '#ec4899',
        'accent2'        => '#f97316',

        'hero_bg'        => 'linear-gradient(155deg,#FFF0F8 0%,#FFF5F0 20%,#FFFAF0 40%,#FFF0F5 65%,#F5F0FF 85%,#FDF8FF 100%)',
        'hero_radials'   => 'radial-gradient(ellipse 70% 60% at 10% 45%,rgba(236,72,153,0.12) 0%,transparent 60%),radial-gradient(ellipse 60% 70% at 90% 30%,rgba(249,115,22,0.10) 0%,transparent 55%)',
        'orb1'           => 'rgba(236,72,153,0.10)',
        'orb2'           => 'rgba(249,115,22,0.09)',
        'orb3'           => 'rgba(245,158,11,0.09)',
        'orb4'           => 'rgba(168,85,247,0.09)',
        'badge_border'   => 'rgba(236,72,153,0.18)',
        'badge_shadow'   => '0 4px 16px rgba(236,72,153,0.10)',
        'badge_dot'      => '#f97316',

        'btn_grad'              => 'linear-gradient(135deg,#ec4899,#f97316)',
        'btn_shadow'            => '0 4px 25px rgba(236,72,153,.35)',
        'btn_shadow_hover'      => '0 10px 40px rgba(236,72,153,.5)',
        'btn_warm'              => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'btn_warm_shadow'       => '0 4px 25px rgba(249,115,22,.35)',
        'btn_warm_shadow_hover' => '0 10px 40px rgba(249,115,22,.5)',

        'card_border'       => 'rgba(236,72,153,0.09)',
        'card_border_hover' => 'rgba(236,72,153,0.28)',
        'card_shadow_hover' => '0 24px 60px rgba(236,72,153,.12)',
        'img_shadow'        => '0 30px 80px rgba(236,72,153,0.14)',
        'img_badge_border'  => 'rgba(236,72,153,0.15)',
        'icon_shadow'       => '0 6px 20px rgba(236,72,153,0.3)',
        'stat_border'       => 'rgba(236,72,153,0.09)',
        'stats_shadow'      => '0 4px 20px rgba(236,72,153,0.06)',

        'step_border'        => 'rgba(236,72,153,0.2)',
        'step_shadow'        => '0 8px 30px rgba(236,72,153,0.10)',
        'step_shadow_hover'  => '0 12px 40px rgba(236,72,153,0.35)',
        'connector_line'     => 'linear-gradient(90deg,rgba(236,72,153,0.2),rgba(236,72,153,0.6),rgba(236,72,153,0.2))',

        'section_alt_bg'     => 'linear-gradient(135deg,#fff0f8 0%,#fff8f0 60%,#f5f0ff 100%)',
        'section_alt_radials'=> 'radial-gradient(ellipse at 80% 20%,rgba(236,72,153,0.05) 0%,transparent 50%),radial-gradient(ellipse at 10% 80%,rgba(249,115,22,0.04) 0%,transparent 50%)',

        'col_divider'  => 'rgba(236,72,153,0.12)',
        'item_divider' => 'rgba(236,72,153,0.08)',

        'ic_a_bg'=>'rgba(236,72,153,0.08)','ic_a_border'=>'rgba(236,72,153,0.15)','ic_a_color'=>'#ec4899',
        'ic_b_bg'=>'rgba(249,115,22,0.08)','ic_b_border'=>'rgba(249,115,22,0.18)','ic_b_color'=>'#f97316',
        'ic_c_bg'=>'rgba(168,85,247,0.08)','ic_c_border'=>'rgba(168,85,247,0.18)','ic_c_color'=>'#a855f7',
        'ic_d_bg'=>'rgba(245,158,11,0.08)','ic_d_border'=>'rgba(245,158,11,0.18)','ic_d_color'=>'#f59e0b',
        'ic_e_bg'=>'rgba(6,182,212,0.08)', 'ic_e_border'=>'rgba(6,182,212,0.18)', 'ic_e_color'=>'#06b6d4',
        'ic_f_bg'=>'rgba(16,185,129,0.08)','ic_f_border'=>'rgba(16,185,129,0.18)','ic_f_color'=>'#10b981',

        'marquee_bg'   => 'linear-gradient(135deg,#1a0520 0%,#350a1a 40%,#1a0a20 70%,#200510 100%)',
        'marquee_fade' => '#1a0520',
        'pill_b_bg'=>'rgba(236,72,153,0.2)', 'pill_b_border'=>'rgba(236,72,153,0.35)', 'pill_b_color'=>'#f9a8d4', 'pill_b_icon_bg'=>'rgba(236,72,153,0.3)',
        'pill_c_bg'=>'rgba(249,115,22,0.15)','pill_c_border'=>'rgba(249,115,22,0.3)', 'pill_c_color'=>'#fbbf24', 'pill_c_icon_bg'=>'rgba(249,115,22,0.3)',
        'pill_d_bg'=>'rgba(168,85,247,0.15)','pill_d_border'=>'rgba(168,85,247,0.3)', 'pill_d_color'=>'#d8b4fe', 'pill_d_icon_bg'=>'rgba(168,85,247,0.3)',
        'pill_e_bg'=>'rgba(6,182,212,0.12)', 'pill_e_border'=>'rgba(6,182,212,0.25)', 'pill_e_color'=>'#67e8f9', 'pill_e_icon_bg'=>'rgba(6,182,212,0.2)',

        'cta_bg'      => 'linear-gradient(135deg,#1a0520 0%,#350a1a 55%,#200510 100%)',
        'cta_radials' => 'radial-gradient(ellipse at 80% 20%,rgba(236,72,153,0.2) 0%,transparent 55%),radial-gradient(ellipse at 15% 80%,rgba(249,115,22,0.12) 0%,transparent 50%)',

        'faq_border'       => 'rgba(236,72,153,0.1)',
        'faq_border_hover' => 'rgba(236,72,153,0.25)',
        'faq_border_open'  => 'rgba(236,72,153,0.35)',
        'faq_shadow_hover' => '0 6px 24px rgba(236,72,153,0.08)',
        'faq_shadow_open'  => '0 8px 32px rgba(236,72,153,0.10)',
        'faq_card_bg'      => 'linear-gradient(145deg,#1a0520 0%,#350a1a 55%,#200510 100%)',
        'faq_card_radials' => 'radial-gradient(ellipse at 80% 10%,rgba(236,72,153,0.35) 0%,transparent 60%),radial-gradient(ellipse at 10% 90%,rgba(249,115,22,0.15) 0%,transparent 50%)',
        'faq_orb1'         => 'rgba(236,72,153,0.07)',
        'faq_orb2'         => 'rgba(249,115,22,0.06)',
        'grid_line'        => 'rgba(236,72,153,0.03)',
        'toggle_bg'        => 'rgba(236,72,153,0.06)',
        'toggle_border'    => 'rgba(236,72,153,0.15)',
        'cta_icon_shadow'  => '0 8px 30px rgba(236,72,153,0.4)',
    ],


'hero' => [
    'badge'     => 'App Development Service Where Creativity Meets Code',
    'heading'   => 'App Development Service Where Creativity Meets Code',
    'desc'      => 'Our app development service transforms your vision into smooth, high-performing Android and mobile apps that users love—and businesses trust.',
    'cta_label' => 'Get Started',
],

'what' => [
    'img'             => 'mobile-app-about.jpg',
    'img_fallback_bg' => 'linear-gradient(135deg,#f0f8ff,#fdf0ff)',

    'badge_icon'      => '<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8"><rect x="7" y="2" width="10" height="20" rx="2"/><circle cx="12" cy="18" r="1"/></svg>',
    'badge_title'     => 'Mobile App Development',
    'badge_stat'      => '70%+ traffic comes from mobile apps & devices',

    'label'           => 'What Is Mobile App Development?',
    'heading'         => 'What is <span class="grad-text">Mobile App Development?</span>',
    'desc'            => 'Mobile app development is the process of designing, building, and launching apps for smartphones and tablets. We turn ideas into powerful digital products that deliver smooth user experiences and real business results.',

    'checklist'       => [
        'Planning app features, goals, and user journey',
        'Designing clean and user-friendly UI/UX screens',
        'Developing iOS & Android applications with modern tech',
        'Testing, QA, and performance optimization before launch',
    ],

    'stats' => [
        ['num'=>'200+','lbl'=>'Apps Delivered'],
        ['num'=>'4.9x','lbl'=>'User Engagement Boost'],
        ['num'=>'10+','lbl'=>'App Experts'],
    ],
],

'how' => [
    'label'   => 'Our Process',
    'heading' => 'How We Build Powerful<br><span class="grad-text">Mobile Applications</span>',
    'desc'    => 'A structured development process that turns your idea into a scalable, high-performance mobile app.',

    'steps'   => [
        ['title'=>'Requirement Analysis', 'desc'=>'We understand your idea, target audience, and business goals in detail.'],
        ['title'=>'UI/UX Design', 'desc'=>'We design clean, modern, and intuitive app interfaces for better user experience.'],
        ['title'=>'App Development', 'desc'=>'We build secure, fast, and scalable apps for iOS, Android, or both platforms.'],
        ['title'=>'Testing & Launch', 'desc'=>'We test performance, fix bugs, and launch your app on App Store & Google Play.'],
    ],
],

'why' => [
    'label'   => 'Why Choose Us?',
    'heading' => 'Why Choose Our<br><span class="grad-text">App Development Service?</span>',
    'desc'    => 'We don’t just build apps—we build digital experiences that users love and businesses trust.',

    'cards'   => [
        ['title'=>'Custom App Solutions', 'desc'=>'Every app is built from scratch based on your business needs.'],
        ['title'=>'iOS & Android Expertise', 'desc'=>'We develop high-performance apps for both platforms.'],
        ['title'=>'Fast & Secure Apps', 'desc'=>'Optimized for speed, security, and smooth performance.'],
        ['title'=>'Ongoing Support', 'desc'=>'We provide updates, maintenance, and long-term support.'],
    ],
],

'offers' => [
    'label'   => 'What We Offer',
    'heading' => 'Complete Mobile App Solutions —<br><span class="grad-text">From Idea to Launch</span>',

    'columns' => [
        [
            'label' => 'App Development',
            'items' => [
                [
                    'title'=>'Custom Mobile Apps',
                    'desc'=>'Tailor-made apps built for your business goals and users.',
                    'ic'=>'ic-a',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="4" y="4" width="16" height="16" rx="2"/></svg>'
                ],
                [
                    'title'=>'iOS & Android Apps',
                    'desc'=>'Native and hybrid apps for both major platforms.',
                    'ic'=>'ic-b',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 2v20"/></svg>'
                ],
                [
                    'title'=>'Cross-Platform Apps',
                    'desc'=>'One codebase, multiple platforms, lower cost and faster delivery.',
                    'ic'=>'ic-c',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M4 12h16"/></svg>'
                ],
            ],
        ],
        [
            'label' => 'Backend & Support',
            'items' => [
                [
                    'title'=>'API Integration',
                    'desc'=>'Connect your app with CRMs, payment systems, and tools.',
                    'ic'=>'ic-d',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><polyline points="23 7 16 12 23 17"/></svg>'
                ],
                [
                    'title'=>'Backend Development',
                    'desc'=>'Strong backend systems for secure and scalable apps.',
                    'ic'=>'ic-e',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="3" width="18" height="18"/></svg>'
                ],
                [
                    'title'=>'App Maintenance',
                    'desc'=>'Regular updates, bug fixes, and performance improvements.',
                    'ic'=>'ic-f',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="10"/></svg>'
                ],
            ],
        ],
    ],
],

'cta' => [
    'label'       => 'Get Started Today',
    'heading'     => 'Turn Your Idea Into a<br><span class="grad-text">Powerful Mobile App</span>',
    'desc'        => 'Let’s build an app that users love and your business can grow with. From design to launch—we handle everything.',
    'primary_btn' => 'Start Your App',
],

'faq' => [
    'subtitle' => 'Have questions about mobile app development? Here are clear answers.',
    'items' => [
        ['q'=>'How long does it take to build an app?', 'a'=>'Most apps take 4–12 weeks depending on features and complexity.'],
        ['q'=>'Do you build for iOS and Android?', 'a'=>'Yes, we develop apps for both platforms and also cross-platform solutions.'],
        ['q'=>'Can I update my app after launch?', 'a'=>'Yes, we provide full support and updates after launch.'],
        ['q'=>'How much does app development cost?', 'a'=>'Cost depends on features, design, and platform. We offer flexible pricing for all business sizes.'],
        ['q'=>'Will you publish my app?', 'a'=>'Yes, we handle complete publishing on App Store and Google Play.'],
    ],
],
];
$svc['ppc-services'] = [
    'name'    => 'ppc-services',
    'contact' => $_contact,

    'theme' => [
        'grad_main'      => 'linear-gradient(135deg,#3b82f6,#7c3aed)',
        'grad_warm'      => 'linear-gradient(135deg,#10b981,#059669)',
        'grad_secondary' => 'linear-gradient(135deg,#7c3aed,#5b21b6)',
        'grad_tertiary'  => 'linear-gradient(135deg,#10b981,#059669)',
        'accent'         => '#3b82f6',
        'accent2'        => '#10b981',

        'hero_bg'        => 'linear-gradient(155deg,#E8F4FF 0%,#F0F8FF 20%,#F5F0FF 40%,#FFF0F5 65%,#FFF8F0 85%,#F8FFFD 100%)',
        'hero_radials'   => 'radial-gradient(ellipse 70% 60% at 10% 45%,rgba(59,130,246,0.13) 0%,transparent 60%),radial-gradient(ellipse 60% 70% at 90% 30%,rgba(123,77,255,0.11) 0%,transparent 55%),radial-gradient(ellipse 55% 60% at 50% 95%,rgba(16,185,129,0.09) 0%,transparent 60%)',
        'orb1'           => 'rgba(59,130,246,0.10)',
        'orb2'           => 'rgba(123,77,255,0.09)',
        'orb3'           => 'rgba(16,185,129,0.10)',
        'orb4'           => 'rgba(249,115,22,0.09)',
        'badge_border'   => 'rgba(59,130,246,0.18)',
        'badge_shadow'   => '0 4px 16px rgba(59,130,246,0.10)',
        'badge_dot'      => '#10b981',

        'btn_grad'              => 'linear-gradient(135deg,#3b82f6,#7c3aed)',
        'btn_shadow'            => '0 4px 25px rgba(59,130,246,.35)',
        'btn_shadow_hover'      => '0 10px 40px rgba(59,130,246,.5)',
        'btn_warm'              => 'linear-gradient(135deg,#10b981,#059669)',
        'btn_warm_shadow'       => '0 4px 25px rgba(16,185,129,.35)',
        'btn_warm_shadow_hover' => '0 10px 40px rgba(16,185,129,.5)',

        'card_border'       => 'rgba(59,130,246,0.09)',
        'card_border_hover' => 'rgba(59,130,246,0.28)',
        'card_shadow_hover' => '0 24px 60px rgba(59,130,246,.12)',
        'img_shadow'        => '0 30px 80px rgba(59,130,246,0.14)',
        'img_badge_border'  => 'rgba(59,130,246,0.15)',
        'icon_shadow'       => '0 6px 20px rgba(59,130,246,0.3)',
        'stat_border'       => 'rgba(59,130,246,0.09)',
        'stats_shadow'      => '0 4px 20px rgba(59,130,246,0.06)',

        'step_border'        => 'rgba(59,130,246,0.2)',
        'step_shadow'        => '0 8px 30px rgba(59,130,246,0.10)',
        'step_shadow_hover'  => '0 12px 40px rgba(59,130,246,0.35)',
        'connector_line'     => 'linear-gradient(90deg,rgba(59,130,246,0.2),rgba(59,130,246,0.6),rgba(59,130,246,0.2))',

        'section_alt_bg'     => 'linear-gradient(135deg,#f0f8ff 0%,#fdf5ff 60%,#f0fff8 100%)',
        'section_alt_radials'=> 'radial-gradient(ellipse at 80% 20%,rgba(59,130,246,0.05) 0%,transparent 50%),radial-gradient(ellipse at 10% 80%,rgba(16,185,129,0.04) 0%,transparent 50%)',

        'col_divider'  => 'rgba(59,130,246,0.12)',
        'item_divider' => 'rgba(59,130,246,0.08)',

        'ic_a_bg'=>'rgba(59,130,246,0.08)', 'ic_a_border'=>'rgba(59,130,246,0.15)', 'ic_a_color'=>'#3b82f6',
        'ic_b_bg'=>'rgba(124,58,237,0.08)', 'ic_b_border'=>'rgba(124,58,237,0.15)', 'ic_b_color'=>'#7c3aed',
        'ic_c_bg'=>'rgba(16,185,129,0.08)', 'ic_c_border'=>'rgba(16,185,129,0.18)', 'ic_c_color'=>'#10b981',
        'ic_d_bg'=>'rgba(249,115,22,0.08)', 'ic_d_border'=>'rgba(249,115,22,0.18)', 'ic_d_color'=>'#f97316',
        'ic_e_bg'=>'rgba(6,182,212,0.08)',  'ic_e_border'=>'rgba(6,182,212,0.18)',  'ic_e_color'=>'#06b6d4',
        'ic_f_bg'=>'rgba(244,63,94,0.08)',  'ic_f_border'=>'rgba(244,63,94,0.18)',  'ic_f_color'=>'#f43f5e',

        'marquee_bg'   => 'linear-gradient(135deg,#020818 0%,#0a1535 40%,#051a10 70%,#080520 100%)',
        'marquee_fade' => '#020818',
        'pill_b_bg'=>'rgba(59,130,246,0.2)', 'pill_b_border'=>'rgba(59,130,246,0.35)', 'pill_b_color'=>'#93c5fd', 'pill_b_icon_bg'=>'rgba(59,130,246,0.3)',
        'pill_c_bg'=>'rgba(16,185,129,0.15)','pill_c_border'=>'rgba(16,185,129,0.3)', 'pill_c_color'=>'#6ee7b7', 'pill_c_icon_bg'=>'rgba(16,185,129,0.2)',
        'pill_d_bg'=>'rgba(124,58,237,0.18)','pill_d_border'=>'rgba(124,58,237,0.32)','pill_d_color'=>'#c4b5fd', 'pill_d_icon_bg'=>'rgba(124,58,237,0.3)',
        'pill_e_bg'=>'rgba(249,115,22,0.12)','pill_e_border'=>'rgba(249,115,22,0.25)','pill_e_color'=>'#fbbf24', 'pill_e_icon_bg'=>'rgba(249,115,22,0.2)',

        'cta_bg'      => 'linear-gradient(135deg,#0a0f2e 0%,#0f1a40 50%,#051a10 100%)',
        'cta_radials' => 'radial-gradient(ellipse at 80% 20%,rgba(59,130,246,0.15) 0%,transparent 55%),radial-gradient(ellipse at 15% 80%,rgba(16,185,129,0.1) 0%,transparent 50%)',

        'faq_border'       => 'rgba(59,130,246,0.1)',
        'faq_border_hover' => 'rgba(59,130,246,0.25)',
        'faq_border_open'  => 'rgba(59,130,246,0.35)',
        'faq_shadow_hover' => '0 6px 24px rgba(59,130,246,0.08)',
        'faq_shadow_open'  => '0 8px 32px rgba(59,130,246,0.10)',
        'faq_card_bg'      => 'linear-gradient(145deg,#020818 0%,#0a1535 55%,#051a10 100%)',
        'faq_card_radials' => 'radial-gradient(ellipse at 80% 10%,rgba(59,130,246,0.35) 0%,transparent 60%),radial-gradient(ellipse at 10% 90%,rgba(16,185,129,0.15) 0%,transparent 50%)',
        'faq_orb1'         => 'rgba(59,130,246,0.07)',
        'faq_orb2'         => 'rgba(16,185,129,0.06)',
        'grid_line'        => 'rgba(59,130,246,0.03)',
        'toggle_bg'        => 'rgba(59,130,246,0.06)',
        'toggle_border'    => 'rgba(59,130,246,0.15)',
        'cta_icon_shadow'  => '0 8px 30px rgba(59,130,246,0.4)',
    ],
'hero' => [
    'badge'     => 'PPC Agency in Dubai That Delivers Real Results',
    'heading'   => 'PPC Agency in Dubai That Delivers Real Results',
    'desc'      => 'We help you run smarter PPC campaigns as a leading PPC agency in Dubai, reaching the right audience, cutting wasted ad spend, and turning every click into measurable growth.',
    'cta_label' => 'Get Started',
],

'what' => [
    'img'             => 'ppc-about.jpg',
    'img_fallback_bg' => 'linear-gradient(135deg,#fff7f0,#f0f8ff)',

    'badge_icon'      => '<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8"><path d="M3 12l7-7 7 7-7 7-7-7z"/></svg>',
    'badge_title'     => 'Pay Per Click Advertising',
    'badge_stat'      => 'Businesses earn $2 for every $1 spent on Google Ads',

    'label'           => 'What is PPC Advertising?',
    'heading'         => 'What is <span class="grad-text">PPC Advertising?</span>',
    'desc'            => 'PPC (Pay-Per-Click) is a digital advertising model where you only pay when someone clicks your ad. It’s one of the fastest ways to generate leads, traffic, and sales with measurable ROI.',

    'checklist'       => [
        'Google, Meta, YouTube & LinkedIn ad campaigns',
        'Full setup, targeting, and ongoing management',
        'Conversion-focused strategy with real-time optimization',
        'Expert support from a leading PPC agency in Dubai',
    ],

    'stats' => [
        ['num'=>'2x','lbl'=>'Average ROI'],
        ['num'=>'24h','lbl'=>'Fast Ad Activation'],
        ['num'=>'100+','lbl'=>'Campaigns Managed'],
    ],
],

'how' => [
    'label'   => 'Our Process',
    'heading' => 'How We Run High-Performing<br><span class="grad-text">PPC Campaigns</span>',
    'desc'    => 'A data-driven PPC process designed to reduce wasted spend and increase conversions.',

    'steps'   => [
        ['title'=>'Strategy & Research', 'desc'=>'We analyze your business, audience, keywords, and competitors.'],
        ['title'=>'Campaign Setup', 'desc'=>'We build Google, Meta, and YouTube ad campaigns with strong targeting.'],
        ['title'=>'Ad Creation', 'desc'=>'We design high-converting ad copy and creatives.'],
        ['title'=>'Optimize & Scale', 'desc'=>'We continuously test, optimize, and scale winning campaigns.'],
    ],
],

'why' => [
    'label'   => 'Why Choose Us?',
    'heading' => 'Why Choose Our<br><span class="grad-text">PPC Agency in Dubai?</span>',
    'desc'    => 'We don’t just run ads — we build performance-driven campaigns that grow your business.',

    'cards'   => [
        ['title'=>'ROI Focused', 'desc'=>'Every campaign is optimized to maximize return on ad spend.'],
        ['title'=>'Multi-Platform Ads', 'desc'=>'Google, Meta, YouTube & LinkedIn — all managed in one place.'],
        ['title'=>'Conversion Driven', 'desc'=>'We design ads and landing pages that turn clicks into customers.'],
        ['title'=>'Transparent Reporting', 'desc'=>'Clear reports so you always know what you’re getting.'],
    ],
],

'offers' => [
    'label'   => 'What We Offer',
    'heading' => 'Complete PPC Management Services —<br><span class="grad-text">From Clicks to Conversions</span>',

    'columns' => [
        [
            'label' => 'Ad Platforms',
            'items' => [
                [
                    'title'=>'Google Ads',
                    'desc'=>'Search & Display ads that bring high-intent traffic ready to convert.',
                    'ic'=>'ic-a',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="10"/></svg>'
                ],
                [
                    'title'=>'Meta Ads',
                    'desc'=>'Facebook & Instagram ads designed for engagement and conversions.',
                    'ic'=>'ic-b',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M4 4h16v16H4z"/></svg>'
                ],
                [
                    'title'=>'YouTube Ads',
                    'desc'=>'Video ads that boost awareness and drive action.',
                    'ic'=>'ic-c',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><polygon points="23 7 16 12 23 17"/></svg>'
                ],
            ],
        ],
        [
            'label' => 'Growth Services',
            'items' => [
                [
                    'title'=>'Lead Generation',
                    'desc'=>'End-to-end funnels that convert clicks into real leads.',
                    'ic'=>'ic-d',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><polyline points="23 6 13 15 8 10 1 18"/></svg>'
                ],
                [
                    'title'=>'Landing Pages',
                    'desc'=>'High-converting landing pages built for PPC campaigns.',
                    'ic'=>'ic-e',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="3" width="18" height="18"/></svg>'
                ],
                [
                    'title'=>'Campaign Optimization',
                    'desc'=>'Daily improvements to reduce cost and increase ROI.',
                    'ic'=>'ic-f',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><line x1="4" y1="12" x2="20" y2="12"/></svg>'
                ],
            ],
        ],
    ],
],

'cta' => [
    'label'       => 'Get Started Today',
    'heading'     => 'Stop Wasting Budget on<br><span class="grad-text">Wrong Clicks</span>',
    'desc'        => 'Let’s build PPC campaigns that bring real customers, not just traffic.',
    'primary_btn' => 'Start PPC Campaign',
],

'faq' => [
    'subtitle' => 'Have questions about PPC advertising? Here are clear answers.',
    'items' => [
        ['q'=>'What is included in your PPC service?', 'a'=>'We handle setup, keyword research, ad copy, targeting, optimization, reporting, and landing pages.'],
        ['q'=>'How much budget do I need?', 'a'=>'We recommend budget based on goals and help optimize PPC cost for maximum ROI.'],
        ['q'=>'Do you only run Google Ads?', 'a'=>'No, we manage Google, Meta, YouTube, LinkedIn, and more.'],
        ['q'=>'How fast can I see results?', 'a'=>'Most campaigns start generating impressions and clicks within 24–48 hours.'],
        ['q'=>'Are you the right PPC agency in Dubai for me?', 'a'=>'Yes, if you want real leads, better ROI, and full campaign control.'],
    ],
],
];

$svc['meta-content-creation'] = [
    'name'    => 'Meta Content Creation',
    'contact' => $_contact,

    'theme' => [
        'grad_main'      => 'linear-gradient(135deg,#ec4899,#f97316)',
        'grad_warm'      => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'grad_secondary' => 'linear-gradient(135deg,#ec4899,#be185d)',
        'grad_tertiary'  => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'accent'         => '#ec4899',
        'accent2'        => '#f97316',

        'hero_bg'        => 'linear-gradient(155deg,#FFF0F8 0%,#FFF5F0 20%,#FFFAF0 40%,#FFF0F5 65%,#F5F0FF 85%,#FDF8FF 100%)',
        'hero_radials'   => 'radial-gradient(ellipse 70% 60% at 10% 45%,rgba(236,72,153,0.12) 0%,transparent 60%),radial-gradient(ellipse 60% 70% at 90% 30%,rgba(249,115,22,0.10) 0%,transparent 55%)',
        'orb1'           => 'rgba(236,72,153,0.10)',
        'orb2'           => 'rgba(249,115,22,0.09)',
        'orb3'           => 'rgba(245,158,11,0.09)',
        'orb4'           => 'rgba(168,85,247,0.09)',
        'badge_border'   => 'rgba(236,72,153,0.18)',
        'badge_shadow'   => '0 4px 16px rgba(236,72,153,0.10)',
        'badge_dot'      => '#f97316',

        'btn_grad'              => 'linear-gradient(135deg,#ec4899,#f97316)',
        'btn_shadow'            => '0 4px 25px rgba(236,72,153,.35)',
        'btn_shadow_hover'      => '0 10px 40px rgba(236,72,153,.5)',
        'btn_warm'              => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'btn_warm_shadow'       => '0 4px 25px rgba(249,115,22,.35)',
        'btn_warm_shadow_hover' => '0 10px 40px rgba(249,115,22,.5)',

        'card_border'       => 'rgba(236,72,153,0.09)',
        'card_border_hover' => 'rgba(236,72,153,0.28)',
        'card_shadow_hover' => '0 24px 60px rgba(236,72,153,.12)',
        'img_shadow'        => '0 30px 80px rgba(236,72,153,0.14)',
        'img_badge_border'  => 'rgba(236,72,153,0.15)',
        'icon_shadow'       => '0 6px 20px rgba(236,72,153,0.3)',
        'stat_border'       => 'rgba(236,72,153,0.09)',
        'stats_shadow'      => '0 4px 20px rgba(236,72,153,0.06)',

        'step_border'        => 'rgba(236,72,153,0.2)',
        'step_shadow'        => '0 8px 30px rgba(236,72,153,0.10)',
        'step_shadow_hover'  => '0 12px 40px rgba(236,72,153,0.35)',
        'connector_line'     => 'linear-gradient(90deg,rgba(236,72,153,0.2),rgba(236,72,153,0.6),rgba(236,72,153,0.2))',

        'section_alt_bg'     => 'linear-gradient(135deg,#fff0f8 0%,#fff8f0 60%,#f5f0ff 100%)',
        'section_alt_radials'=> 'radial-gradient(ellipse at 80% 20%,rgba(236,72,153,0.05) 0%,transparent 50%),radial-gradient(ellipse at 10% 80%,rgba(249,115,22,0.04) 0%,transparent 50%)',

        'col_divider'  => 'rgba(236,72,153,0.12)',
        'item_divider' => 'rgba(236,72,153,0.08)',

        'ic_a_bg'=>'rgba(236,72,153,0.08)','ic_a_border'=>'rgba(236,72,153,0.15)','ic_a_color'=>'#ec4899',
        'ic_b_bg'=>'rgba(249,115,22,0.08)','ic_b_border'=>'rgba(249,115,22,0.18)','ic_b_color'=>'#f97316',
        'ic_c_bg'=>'rgba(168,85,247,0.08)','ic_c_border'=>'rgba(168,85,247,0.18)','ic_c_color'=>'#a855f7',
        'ic_d_bg'=>'rgba(245,158,11,0.08)','ic_d_border'=>'rgba(245,158,11,0.18)','ic_d_color'=>'#f59e0b',
        'ic_e_bg'=>'rgba(6,182,212,0.08)', 'ic_e_border'=>'rgba(6,182,212,0.18)', 'ic_e_color'=>'#06b6d4',
        'ic_f_bg'=>'rgba(16,185,129,0.08)','ic_f_border'=>'rgba(16,185,129,0.18)','ic_f_color'=>'#10b981',

        'marquee_bg'   => 'linear-gradient(135deg,#1a0520 0%,#350a1a 40%,#1a0a20 70%,#200510 100%)',
        'marquee_fade' => '#1a0520',
        'pill_b_bg'=>'rgba(236,72,153,0.2)', 'pill_b_border'=>'rgba(236,72,153,0.35)', 'pill_b_color'=>'#f9a8d4', 'pill_b_icon_bg'=>'rgba(236,72,153,0.3)',
        'pill_c_bg'=>'rgba(249,115,22,0.15)','pill_c_border'=>'rgba(249,115,22,0.3)', 'pill_c_color'=>'#fbbf24', 'pill_c_icon_bg'=>'rgba(249,115,22,0.3)',
        'pill_d_bg'=>'rgba(168,85,247,0.15)','pill_d_border'=>'rgba(168,85,247,0.3)', 'pill_d_color'=>'#d8b4fe', 'pill_d_icon_bg'=>'rgba(168,85,247,0.3)',
        'pill_e_bg'=>'rgba(6,182,212,0.12)', 'pill_e_border'=>'rgba(6,182,212,0.25)', 'pill_e_color'=>'#67e8f9', 'pill_e_icon_bg'=>'rgba(6,182,212,0.2)',

        'cta_bg'      => 'linear-gradient(135deg,#1a0520 0%,#350a1a 55%,#200510 100%)',
        'cta_radials' => 'radial-gradient(ellipse at 80% 20%,rgba(236,72,153,0.2) 0%,transparent 55%),radial-gradient(ellipse at 15% 80%,rgba(249,115,22,0.12) 0%,transparent 50%)',

        'faq_border'       => 'rgba(236,72,153,0.1)',
        'faq_border_hover' => 'rgba(236,72,153,0.25)',
        'faq_border_open'  => 'rgba(236,72,153,0.35)',
        'faq_shadow_hover' => '0 6px 24px rgba(236,72,153,0.08)',
        'faq_shadow_open'  => '0 8px 32px rgba(236,72,153,0.10)',
        'faq_card_bg'      => 'linear-gradient(145deg,#1a0520 0%,#350a1a 55%,#200510 100%)',
        'faq_card_radials' => 'radial-gradient(ellipse at 80% 10%,rgba(236,72,153,0.35) 0%,transparent 60%),radial-gradient(ellipse at 10% 90%,rgba(249,115,22,0.15) 0%,transparent 50%)',
        'faq_orb1'         => 'rgba(236,72,153,0.07)',
        'faq_orb2'         => 'rgba(249,115,22,0.06)',
        'grid_line'        => 'rgba(236,72,153,0.03)',
        'toggle_bg'        => 'rgba(236,72,153,0.06)',
        'toggle_border'    => 'rgba(236,72,153,0.15)',
        'cta_icon_shadow'  => '0 8px 30px rgba(236,72,153,0.4)',
    ],
'hero' => [
    'badge'     => 'Meta Content Creation That Drives Real Engagement',
    'heading'   => 'Meta Content Creation That Builds Engagement & Sales',
    'desc'      => 'We create high-impact Meta content for Facebook and Instagram that grabs attention, boosts engagement, and turns followers into loyal customers.',
    'cta_label' => 'Get Started',
],

'what' => [
    'img'             => 'meta-content.jpg',
    'img_fallback_bg' => 'linear-gradient(135deg,#fff0f8,#f0f8ff)',

    'badge_icon'      => '<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><path d="M8 12h8M12 8v8"/></svg>',
    'badge_title'     => 'Meta Content Strategy',
    'badge_stat'      => 'Brands with consistent content grow 2x faster on social media',

    'label'           => 'What We Do',
    'heading'         => 'What is <span class="grad-text">Meta Content Creation?</span>',
    'desc'            => 'Meta content creation is the process of designing and producing engaging posts, reels, stories, and ads specifically for Facebook and Instagram to increase reach, engagement, and conversions.',

    'checklist'       => [
        'Scroll-stopping posts, reels & stories for Meta platforms',
        'Engaging captions designed for clicks and interaction',
        'Brand-focused visual identity across all content',
        'Paid + organic content strategy for better reach',
    ],

    'stats' => [
        ['num'=>'2x','lbl'=>'Engagement Growth'],
        ['num'=>'5x','lbl'=>'Reach Increase'],
        ['num'=>'100+','lbl'=>'Brands Managed'],
    ],
],

'how' => [
    'label'   => 'Our Process',
    'heading' => 'How We Create High-Performing<br><span class="grad-text">Meta Content</span>',
    'desc'    => 'A strategic content process designed to grow your brand presence on Facebook and Instagram.',

    'steps'   => [
        ['title'=>'Audience Research', 'desc'=>'We study your audience, competitors, and trends to plan content.'],
        ['title'=>'Content Strategy', 'desc'=>'We create a posting plan with themes, formats, and goals.'],
        ['title'=>'Creative Production', 'desc'=>'We design posts, reels, stories, and write engaging captions.'],
        ['title'=>'Publish & Optimize', 'desc'=>'We post content and optimize based on performance data.'],
    ],
],

'why' => [
    'label'   => 'Why Choose Us?',
    'heading' => 'Why Our<br><span class="grad-text">Meta Content Creation Works</span>',
    'desc'    => 'We don’t just post content — we build engagement systems that grow your brand.',

    'cards'   => [
        ['title'=>'Engagement Focused', 'desc'=>'Content designed to get likes, shares, comments, and saves.'],
        ['title'=>'Platform Optimized', 'desc'=>'Perfect formats for Instagram & Facebook algorithms.'],
        ['title'=>'Brand Consistency', 'desc'=>'We maintain a strong and recognizable brand identity.'],
        ['title'=>'Growth Driven', 'desc'=>'Every post is designed to attract real followers and customers.'],
    ],
],

'offers' => [
    'label'   => 'What We Offer',
    'heading' => 'Complete Meta Content Services —<br><span class="grad-text">Posts, Reels & Ads</span>',

    'columns' => [
        [
            'label' => 'Organic Content',
            'items' => [
                [
                    'title'=>'Post Design',
                    'desc'=>'Eye-catching static and carousel posts for engagement.',
                    'ic'=>'ic-a',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="3" width="18" height="18"/></svg>'
                ],
                [
                    'title'=>'Reels Creation',
                    'desc'=>'Short-form videos designed to go viral and boost reach.',
                    'ic'=>'ic-b',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><polygon points="23 7 16 12 23 17"/></svg>'
                ],
                [
                    'title'=>'Story Content',
                    'desc'=>'Interactive Instagram and Facebook stories that engage users.',
                    'ic'=>'ic-c',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="5" y="2" width="14" height="20"/></svg>'
                ],
            ],
        ],
        [
            'label' => 'Paid Content',
            'items' => [
                [
                    'title'=>'Meta Ads Creatives',
                    'desc'=>'High-converting ad creatives for Facebook & Instagram ads.',
                    'ic'=>'ic-d',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M4 4h16v16H4z"/></svg>'
                ],
                [
                    'title'=>'Ad Copywriting',
                    'desc'=>'Persuasive captions and hooks that increase conversions.',
                    'ic'=>'ic-e',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><line x1="4" y1="12" x2="20" y2="12"/></svg>'
                ],
                [
                    'title'=>'Campaign Strategy',
                    'desc'=>'Full Meta campaign planning for reach and ROI.',
                    'ic'=>'ic-f',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><polyline points="23 6 13 15 8 10 1 18"/></svg>'
                ],
            ],
        ],
    ],
],

'cta' => [
    'label'       => 'Get Started Today',
    'heading'     => 'Turn Your Social Media Into a<br><span class="grad-text">Growth Machine</span>',
    'desc'        => 'Let’s create Meta content that grows your brand, builds engagement, and drives real results.',
    'primary_btn' => 'Start Now',
],

'faq' => [
    'subtitle' => 'Have questions about Meta content creation? Here are clear answers.',
    'items' => [
        ['q'=>'What platforms do you create content for?', 'a'=>'We create content for Facebook and Instagram (Meta platforms).'],
        ['q'=>'Do you also run ads?', 'a'=>'Yes, we provide both organic content and paid Meta ad creatives.'],
        ['q'=>'How often will you post content?', 'a'=>'We create custom posting schedules based on your strategy.'],
        ['q'=>'Can you match my brand style?', 'a'=>'Yes, we design content according to your brand identity.'],
        ['q'=>'Do you help increase followers?', 'a'=>'Yes, our content is optimized for engagement and organic growth.'],
    ],
],
];
$svc['website-maintenance'] = [
    'name'    => 'website maintenance',
    'contact' => $_contact,

     'theme' => [
        'grad_main'      => 'linear-gradient(135deg,#7c3aed,#d84bff)',
        'grad_warm'      => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'grad_secondary' => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'grad_tertiary'  => 'linear-gradient(135deg,#06b6d4,#0284c7)',
        'accent'         => '#7c3aed',
        'accent2'        => '#f97316',

        'hero_bg'        => 'linear-gradient(155deg,#F0E8FF 0%,#F8F0FF 20%,#FFF0FA 40%,#FFF4F0 65%,#FFF9F0 85%,#FDF8FF 100%)',
        'hero_radials'   => 'radial-gradient(ellipse 70% 60% at 10% 45%,rgba(123,77,255,0.14) 0%,transparent 60%),radial-gradient(ellipse 60% 70% at 90% 30%,rgba(216,91,255,0.12) 0%,transparent 55%),radial-gradient(ellipse 55% 60% at 50% 95%,rgba(255,154,87,0.10) 0%,transparent 60%)',
        'orb1'           => 'rgba(123,77,255,0.10)',
        'orb2'           => 'rgba(216,91,255,0.09)',
        'orb3'           => 'rgba(255,154,87,0.10)',
        'orb4'           => 'rgba(255,111,181,0.10)',
        'badge_border'   => 'rgba(123,77,255,0.18)',
        'badge_shadow'   => '0 4px 16px rgba(123,77,255,0.10)',
        'badge_dot'      => '#f97316',

        'btn_grad'             => 'linear-gradient(135deg,#7c3aed,#d84bff)',
        'btn_shadow'           => '0 4px 25px rgba(124,58,237,.35)',
        'btn_shadow_hover'     => '0 10px 40px rgba(124,58,237,.5)',
        'btn_warm'             => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'btn_warm_shadow'      => '0 4px 25px rgba(249,115,22,.35)',
        'btn_warm_shadow_hover'=> '0 10px 40px rgba(249,115,22,.5)',

        'card_border'       => 'rgba(124,58,237,0.09)',
        'card_border_hover' => 'rgba(124,58,237,0.28)',
        'card_shadow_hover' => '0 24px 60px rgba(124,58,237,.12)',
        'img_shadow'        => '0 30px 80px rgba(124,58,237,0.14)',
        'img_badge_border'  => 'rgba(124,58,237,0.15)',
        'icon_shadow'       => '0 6px 20px rgba(124,58,237,0.3)',
        'stat_border'       => 'rgba(124,58,237,0.09)',
        'stats_shadow'      => '0 4px 20px rgba(124,58,237,0.06)',

        'step_border'        => 'rgba(124,58,237,0.2)',
        'step_shadow'        => '0 8px 30px rgba(124,58,237,0.10)',
        'step_shadow_hover'  => '0 12px 40px rgba(124,58,237,0.35)',
        'connector_line'     => 'linear-gradient(90deg,rgba(124,58,237,0.2),rgba(124,58,237,0.6),rgba(124,58,237,0.2))',

        'section_alt_bg'     => 'linear-gradient(135deg,#fdf8ff 0%,#fff8f0 60%,#f0f9ff 100%)',
        'section_alt_radials'=> 'radial-gradient(ellipse at 80% 20%,rgba(224,64,251,0.05) 0%,transparent 50%),radial-gradient(ellipse at 10% 80%,rgba(249,115,22,0.04) 0%,transparent 50%)',

        'col_divider'  => 'rgba(124,58,237,0.12)',
        'item_divider' => 'rgba(124,58,237,0.08)',

        'ic_a_bg'=>'rgba(124,58,237,0.08)','ic_a_border'=>'rgba(124,58,237,0.15)','ic_a_color'=>'#7c3aed',
        'ic_b_bg'=>'rgba(245,158,11,0.08)','ic_b_border'=>'rgba(245,158,11,0.18)','ic_b_color'=>'#d97706',
        'ic_c_bg'=>'rgba(6,182,212,0.08)', 'ic_c_border'=>'rgba(6,182,212,0.18)', 'ic_c_color'=>'#06b6d4',
        'ic_d_bg'=>'rgba(249,115,22,0.08)','ic_d_border'=>'rgba(249,115,22,0.18)','ic_d_color'=>'#f97316',
        'ic_e_bg'=>'rgba(16,185,129,0.08)','ic_e_border'=>'rgba(16,185,129,0.18)','ic_e_color'=>'#10b981',
        'ic_f_bg'=>'rgba(224,64,251,0.08)','ic_f_border'=>'rgba(224,64,251,0.18)','ic_f_color'=>'#d84bff',

        'marquee_bg'   => 'linear-gradient(135deg,#0d0520 0%,#130a35 40%,#0a1a40 70%,#0d0a2e 100%)',
        'marquee_fade' => '#0d0520',
        'pill_b_bg'=>'rgba(124,58,237,0.2)', 'pill_b_border'=>'rgba(124,58,237,0.35)', 'pill_b_color'=>'#c4b5fd', 'pill_b_icon_bg'=>'rgba(124,58,237,0.3)',
        'pill_c_bg'=>'rgba(249,115,22,0.15)','pill_c_border'=>'rgba(249,115,22,0.3)', 'pill_c_color'=>'#fbbf24', 'pill_c_icon_bg'=>'rgba(249,115,22,0.3)',
        'pill_d_bg'=>'rgba(6,182,212,0.12)', 'pill_d_border'=>'rgba(6,182,212,0.25)', 'pill_d_color'=>'#67e8f9', 'pill_d_icon_bg'=>'rgba(6,182,212,0.2)',
        'pill_e_bg'=>'rgba(16,185,129,0.12)','pill_e_border'=>'rgba(16,185,129,0.25)','pill_e_color'=>'#6ee7b7','pill_e_icon_bg'=>'rgba(16,185,129,0.2)',

        'cta_bg'      => 'linear-gradient(135deg,#0d0520 0%,#130a35 55%,#0a1a40 100%)',
        'cta_radials' => 'radial-gradient(ellipse at 80% 20%,rgba(224,64,251,0.15) 0%,transparent 55%),radial-gradient(ellipse at 15% 80%,rgba(249,115,22,0.1) 0%,transparent 50%)',

        'faq_border'       => 'rgba(124,58,237,0.1)',
        'faq_border_hover' => 'rgba(124,58,237,0.25)',
        'faq_border_open'  => 'rgba(124,58,237,0.35)',
        'faq_shadow_hover' => '0 6px 24px rgba(124,58,237,0.08)',
        'faq_shadow_open'  => '0 8px 32px rgba(124,58,237,0.10)',
        'faq_card_bg'      => 'linear-gradient(145deg,#0d0520 0%,#130a35 55%,#0a1a40 100%)',
        'faq_card_radials' => 'radial-gradient(ellipse at 80% 10%,rgba(124,58,237,0.35) 0%,transparent 60%),radial-gradient(ellipse at 10% 90%,rgba(249,115,22,0.15) 0%,transparent 50%)',
        'faq_orb1'         => 'rgba(124,58,237,0.07)',
        'faq_orb2'         => 'rgba(249,115,22,0.06)',
        'grid_line'        => 'rgba(124,58,237,0.03)',
        'toggle_bg'        => 'rgba(124,58,237,0.06)',
        'toggle_border'    => 'rgba(124,58,237,0.15)',
        'cta_icon_shadow'  => '0 8px 30px rgba(124,58,237,0.4)',
    ],
    'hero' => [
    'badge'     => 'Mobile App Development Service That Turns Ideas Into Reality',
    'heading'   => 'Mobile App Development Service That Turns Ideas Into Reality',
    'desc'      => 'We design and build high-performance mobile apps for iOS and Android that are fast, scalable, and built to deliver real business results.',
    'cta_label' => 'Get Started',
],

'what' => [
    'img'             => 'mobile-app-about.jpg',
    'img_fallback_bg' => 'linear-gradient(135deg,#f0f8ff,#fff0f8)',

    'badge_icon'      => '<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>',
    'badge_title'     => 'Mobile App Development Experts',
    'badge_stat'      => '70%+ of digital traffic comes from mobile apps & devices',

    'label'           => 'What We Do',
    'heading'         => 'What is <span class="grad-text">Mobile App Development?</span>',
    'desc'            => 'Mobile app development is the process of designing, building, and launching applications for smartphones and tablets. We turn your idea into a fully functional digital product that users love and businesses rely on.',

    'checklist'       => [
        'Custom iOS & Android app development tailored to your business',
        'UI/UX design focused on smooth and intuitive user experience',
        'Backend development with secure APIs and scalable architecture',
        'App testing, deployment, and long-term maintenance support',
    ],

    'stats' => [
        ['num'=>'200+','lbl'=>'Apps Delivered'],
        ['num'=>'5x','lbl'=>'User Engagement Boost'],
        ['num'=>'10+','lbl'=>'Developers & Engineers'],
    ],
],

'how' => [
    'label'   => 'Our Process',
    'heading' => 'How We Build Your<br><span class="grad-text">Mobile App Step by Step</span>',
    'desc'    => 'A structured development process that ensures performance, security, and user satisfaction from idea to launch.',

    'steps'   => [
        ['title'=>'Idea & Planning', 'desc'=>'We understand your goals, audience, and define core features of your app.'],
        ['title'=>'UI/UX Design', 'desc'=>'We design clean, modern, and user-friendly interfaces for better engagement.'],
        ['title'=>'App Development', 'desc'=>'We code your app using modern technologies for iOS, Android, or both.'],
        ['title'=>'Testing & Launch', 'desc'=>'We test performance, fix bugs, and launch your app on App Store & Google Play.'],
    ],
],

'why' => [
    'label'   => 'Why Choose Us?',
    'heading' => 'Why Choose Our<br><span class="grad-text">App Development Service?</span>',
    'desc'    => 'We don’t just build apps — we build scalable digital experiences that grow your business.',

    'cards'   => [
        ['title'=>'Custom Built Apps', 'desc'=>'Every app is built from scratch according to your business needs.'],
        ['title'=>'High Performance', 'desc'=>'Fast, smooth, and optimized apps for better user experience.'],
        ['title'=>'Cross Platform Support', 'desc'=>'We build apps for both iOS and Android with modern frameworks.'],
        ['title'=>'Ongoing Support', 'desc'=>'We provide updates, maintenance, and long-term technical support.'],
    ],
],

'offers' => [
    'label'   => 'What We Offer',
    'heading' => 'Complete Mobile App Solutions —<br><span class="grad-text">From Idea to Launch</span>',

    'columns' => [
        [
            'label' => 'App Development',
            'items' => [
                [
                    'title'=>'iOS App Development',
                    'desc'=>'High-quality native iOS apps built for performance and user experience.',
                    'ic'=>'ic-a',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>'
                ],
                [
                    'title'=>'Android App Development',
                    'desc'=>'Powerful Android apps optimized for all devices and screen sizes.',
                    'ic'=>'ic-b',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M6 18h12"/><path d="M12 2v4"/></svg>'
                ],
                [
                    'title'=>'Cross-Platform Apps',
                    'desc'=>'One app for both iOS and Android using modern frameworks like Flutter or React Native.',
                    'ic'=>'ic-c',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><polyline points="4 7 12 3 20 7 12 11 4 7"/><polyline points="4 17 12 13 20 17 12 21 4 17"/></svg>'
                ],
            ],
        ],
        [
            'label' => 'Advanced Features',
            'items' => [
                [
                    'title'=>'Backend Development',
                    'desc'=>'Secure APIs and scalable backend systems for smooth app performance.',
                    'ic'=>'ic-d',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="4" width="18" height="16" rx="2"/></svg>'
                ],
                [
                    'title'=>'UI/UX Design',
                    'desc'=>'Modern, clean, and user-friendly interfaces that improve engagement.',
                    'ic'=>'ic-e',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="10"/></svg>'
                ],
                [
                    'title'=>'App Maintenance',
                    'desc'=>'Regular updates, bug fixes, and performance improvements after launch.',
                    'ic'=>'ic-f',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 2v20"/></svg>'
                ],
            ],
        ],
    ],
],

'cta' => [
    'label'       => 'Get Started Today',
    'heading'     => 'Have an App Idea?<br><span class="grad-text">Let’s Build It Together</span>',
    'desc'        => 'Turn your idea into a powerful mobile application that delivers real results and scales with your business.',
    'primary_btn' => 'Start Your App',
],

'faq' => [
    'subtitle' => 'Got questions about mobile app development? Here are clear answers.',
    'items' => [
        ['q'=>'How long does it take to build a mobile app?', 'a'=>'Most apps take 4–12 weeks depending on features, complexity, and platform.'],
        ['q'=>'Do you build both Android and iOS apps?', 'a'=>'Yes, we develop native and cross-platform apps for both iOS and Android.'],
        ['q'=>'Can you update my app after launch?', 'a'=>'Yes, we provide full maintenance, updates, and long-term support.'],
        ['q'=>'How much does mobile app development cost?', 'a'=>'Cost depends on features, design, and platform. We offer flexible pricing for all businesses.'],
    ],
],
];

$svc['website-speed-optimization-service'] = [
    'name'    => 'Social Media Marketing',
    'contact' => $_contact,

    'theme' => [
        'grad_main'      => 'linear-gradient(135deg,#ec4899,#f97316)',
        'grad_warm'      => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'grad_secondary' => 'linear-gradient(135deg,#ec4899,#be185d)',
        'grad_tertiary'  => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'accent'         => '#ec4899',
        'accent2'        => '#f97316',

        'hero_bg'        => 'linear-gradient(155deg,#FFF0F8 0%,#FFF5F0 20%,#FFFAF0 40%,#FFF0F5 65%,#F5F0FF 85%,#FDF8FF 100%)',
        'hero_radials'   => 'radial-gradient(ellipse 70% 60% at 10% 45%,rgba(236,72,153,0.12) 0%,transparent 60%),radial-gradient(ellipse 60% 70% at 90% 30%,rgba(249,115,22,0.10) 0%,transparent 55%)',
        'orb1'           => 'rgba(236,72,153,0.10)',
        'orb2'           => 'rgba(249,115,22,0.09)',
        'orb3'           => 'rgba(245,158,11,0.09)',
        'orb4'           => 'rgba(168,85,247,0.09)',
        'badge_border'   => 'rgba(236,72,153,0.18)',
        'badge_shadow'   => '0 4px 16px rgba(236,72,153,0.10)',
        'badge_dot'      => '#f97316',

        'btn_grad'              => 'linear-gradient(135deg,#ec4899,#f97316)',
        'btn_shadow'            => '0 4px 25px rgba(236,72,153,.35)',
        'btn_shadow_hover'      => '0 10px 40px rgba(236,72,153,.5)',
        'btn_warm'              => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'btn_warm_shadow'       => '0 4px 25px rgba(249,115,22,.35)',
        'btn_warm_shadow_hover' => '0 10px 40px rgba(249,115,22,.5)',

        'card_border'       => 'rgba(236,72,153,0.09)',
        'card_border_hover' => 'rgba(236,72,153,0.28)',
        'card_shadow_hover' => '0 24px 60px rgba(236,72,153,.12)',
        'img_shadow'        => '0 30px 80px rgba(236,72,153,0.14)',
        'img_badge_border'  => 'rgba(236,72,153,0.15)',
        'icon_shadow'       => '0 6px 20px rgba(236,72,153,0.3)',
        'stat_border'       => 'rgba(236,72,153,0.09)',
        'stats_shadow'      => '0 4px 20px rgba(236,72,153,0.06)',

        'step_border'        => 'rgba(236,72,153,0.2)',
        'step_shadow'        => '0 8px 30px rgba(236,72,153,0.10)',
        'step_shadow_hover'  => '0 12px 40px rgba(236,72,153,0.35)',
        'connector_line'     => 'linear-gradient(90deg,rgba(236,72,153,0.2),rgba(236,72,153,0.6),rgba(236,72,153,0.2))',

        'section_alt_bg'     => 'linear-gradient(135deg,#fff0f8 0%,#fff8f0 60%,#f5f0ff 100%)',
        'section_alt_radials'=> 'radial-gradient(ellipse at 80% 20%,rgba(236,72,153,0.05) 0%,transparent 50%),radial-gradient(ellipse at 10% 80%,rgba(249,115,22,0.04) 0%,transparent 50%)',

        'col_divider'  => 'rgba(236,72,153,0.12)',
        'item_divider' => 'rgba(236,72,153,0.08)',

        'ic_a_bg'=>'rgba(236,72,153,0.08)','ic_a_border'=>'rgba(236,72,153,0.15)','ic_a_color'=>'#ec4899',
        'ic_b_bg'=>'rgba(249,115,22,0.08)','ic_b_border'=>'rgba(249,115,22,0.18)','ic_b_color'=>'#f97316',
        'ic_c_bg'=>'rgba(168,85,247,0.08)','ic_c_border'=>'rgba(168,85,247,0.18)','ic_c_color'=>'#a855f7',
        'ic_d_bg'=>'rgba(245,158,11,0.08)','ic_d_border'=>'rgba(245,158,11,0.18)','ic_d_color'=>'#f59e0b',
        'ic_e_bg'=>'rgba(6,182,212,0.08)', 'ic_e_border'=>'rgba(6,182,212,0.18)', 'ic_e_color'=>'#06b6d4',
        'ic_f_bg'=>'rgba(16,185,129,0.08)','ic_f_border'=>'rgba(16,185,129,0.18)','ic_f_color'=>'#10b981',

        'marquee_bg'   => 'linear-gradient(135deg,#1a0520 0%,#350a1a 40%,#1a0a20 70%,#200510 100%)',
        'marquee_fade' => '#1a0520',
        'pill_b_bg'=>'rgba(236,72,153,0.2)', 'pill_b_border'=>'rgba(236,72,153,0.35)', 'pill_b_color'=>'#f9a8d4', 'pill_b_icon_bg'=>'rgba(236,72,153,0.3)',
        'pill_c_bg'=>'rgba(249,115,22,0.15)','pill_c_border'=>'rgba(249,115,22,0.3)', 'pill_c_color'=>'#fbbf24', 'pill_c_icon_bg'=>'rgba(249,115,22,0.3)',
        'pill_d_bg'=>'rgba(168,85,247,0.15)','pill_d_border'=>'rgba(168,85,247,0.3)', 'pill_d_color'=>'#d8b4fe', 'pill_d_icon_bg'=>'rgba(168,85,247,0.3)',
        'pill_e_bg'=>'rgba(6,182,212,0.12)', 'pill_e_border'=>'rgba(6,182,212,0.25)', 'pill_e_color'=>'#67e8f9', 'pill_e_icon_bg'=>'rgba(6,182,212,0.2)',

        'cta_bg'      => 'linear-gradient(135deg,#1a0520 0%,#350a1a 55%,#200510 100%)',
        'cta_radials' => 'radial-gradient(ellipse at 80% 20%,rgba(236,72,153,0.2) 0%,transparent 55%),radial-gradient(ellipse at 15% 80%,rgba(249,115,22,0.12) 0%,transparent 50%)',

        'faq_border'       => 'rgba(236,72,153,0.1)',
        'faq_border_hover' => 'rgba(236,72,153,0.25)',
        'faq_border_open'  => 'rgba(236,72,153,0.35)',
        'faq_shadow_hover' => '0 6px 24px rgba(236,72,153,0.08)',
        'faq_shadow_open'  => '0 8px 32px rgba(236,72,153,0.10)',
        'faq_card_bg'      => 'linear-gradient(145deg,#1a0520 0%,#350a1a 55%,#200510 100%)',
        'faq_card_radials' => 'radial-gradient(ellipse at 80% 10%,rgba(236,72,153,0.35) 0%,transparent 60%),radial-gradient(ellipse at 10% 90%,rgba(249,115,22,0.15) 0%,transparent 50%)',
        'faq_orb1'         => 'rgba(236,72,153,0.07)',
        'faq_orb2'         => 'rgba(249,115,22,0.06)',
        'grid_line'        => 'rgba(236,72,153,0.03)',
        'toggle_bg'        => 'rgba(236,72,153,0.06)',
        'toggle_border'    => 'rgba(236,72,153,0.15)',
        'cta_icon_shadow'  => '0 8px 30px rgba(236,72,153,0.4)',
    ],
'hero' => [
    'badge'     => 'Website Speed Optimization Service for Faster Performance',
    'heading'   => 'Website Speed Optimization Service That Makes Your Site Lightning Fast',
    'desc'      => 'We optimize your website performance to reduce load time, improve Google rankings, and deliver a smooth, fast user experience that increases conversions.',
    'cta_label' => 'Get Started',
],

'what' => [
    'img'             => 'website-speed-about.jpg',
    'img_fallback_bg' => 'linear-gradient(135deg,#f0f8ff,#fff0f8)',

    'badge_icon'      => '<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8"><path d="M13 2L3 14h7l-1 8 10-12h-7l1-8z"/></svg>',
    'badge_title'     => 'Performance Optimization Experts',
    'badge_stat'      => 'A 1-second delay can reduce conversions by up to 7%',

    'label'           => 'What We Do',
    'heading'         => 'What is <span class="grad-text">Website Speed Optimization?</span>',
    'desc'            => 'Website speed optimization is the process of improving your site’s loading time, performance, and responsiveness by fixing technical issues, optimizing assets, and improving server efficiency.',

    'checklist'       => [
        'Optimize code, scripts, and unnecessary files',
        'Compress images without losing quality',
        'Implement caching and CDN for faster delivery',
        'Improve Core Web Vitals for better SEO rankings',
    ],

    'stats' => [
        ['num'=>'90%+','lbl'=>'Faster Load Time'],
        ['num'=>'5x','lbl'=>'Better UX'],
        ['num'=>'2x','lbl'=>'Higher Conversions'],
    ],
],

'how' => [
    'label'   => 'Our Process',
    'heading' => 'How We Improve Your<br><span class="grad-text">Website Speed</span>',
    'desc'    => 'A structured optimization process that makes your website faster, smoother, and SEO-friendly.',

    'steps'   => [
        ['title'=>'Performance Audit', 'desc'=>'We analyze your website speed issues using advanced tools and reports.'],
        ['title'=>'Code Optimization', 'desc'=>'We clean, minify, and optimize CSS, JS, and backend scripts.'],
        ['title'=>'Asset Optimization', 'desc'=>'We compress images, videos, and media files without quality loss.'],
        ['title'=>'Caching & CDN Setup', 'desc'=>'We implement caching and CDN to deliver content faster worldwide.'],
    ],
],

'why' => [
    'label'   => 'Why Choose Us?',
    'heading' => 'Why Choose Our<br><span class="grad-text">Speed Optimization Service?</span>',
    'desc'    => 'We don’t just make your website faster — we make it more powerful, scalable, and conversion-ready.',

    'cards'   => [
        ['title'=>'Faster Results', 'desc'=>'Noticeable speed improvements within days, not weeks.'],
        ['title'=>'SEO Boost', 'desc'=>'Faster websites rank higher on Google search results.'],
        ['title'=>'Better UX', 'desc'=>'Smooth browsing keeps users engaged longer.'],
        ['title'=>'Expert Tools', 'desc'=>'We use advanced optimization tools and proven techniques.'],
    ],
],

'offers' => [
    'label'   => 'What We Offer',
    'heading' => 'Complete Website Speed Solutions —<br><span class="grad-text">Optimized for Performance</span>',

    'columns' => [
        [
            'label' => 'Core Optimization',
            'items' => [
                [
                    'title'=>'WordPress Speed Optimization',
                    'desc'=>'Fix slow WordPress sites by optimizing themes, plugins, and database performance.',
                    'ic'=>'ic-a',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>'
                ],
                [
                    'title'=>'Shopify Speed Optimization',
                    'desc'=>'Improve Shopify store speed for better conversions and lower bounce rates.',
                    'ic'=>'ic-b',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M6 2l12 4-4 16-12-4z"/></svg>'
                ],
                [
                    'title'=>'Custom Website Optimization',
                    'desc'=>'Tailored speed improvements for any website, framework, or platform.',
                    'ic'=>'ic-c',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><polyline points="4 7 12 3 20 7 12 11 4 7"/></svg>'
                ],
            ],
        ],
        [
            'label' => 'Advanced Enhancements',
            'items' => [
                [
                    'title'=>'Image Compression',
                    'desc'=>'Reduce file sizes without losing visual quality for faster loading.',
                    'ic'=>'ic-d',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="3" width="18" height="18" rx="2"/></svg>'
                ],
                [
                    'title'=>'Caching Setup',
                    'desc'=>'Improve performance with browser and server-side caching systems.',
                    'ic'=>'ic-e',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 2v20"/></svg>'
                ],
                [
                    'title'=>'CDN Integration',
                    'desc'=>'Deliver content faster globally using Content Delivery Networks.',
                    'ic'=>'ic-f',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="10"/></svg>'
                ],
            ],
        ],
    ],
],

'cta' => [
    'label'       => 'Get Started Today',
    'heading'     => 'Don’t Let Slow Speed<br><span class="grad-text">Kill Your Conversions</span>',
    'desc'        => 'Let us optimize your website for speed, performance, and SEO so your users never have to wait again.',
    'primary_btn' => 'Speed Up My Site',
],

'faq' => [
    'subtitle' => 'Got questions about website speed optimization? Here are the answers.',
    'items' => [
        ['q'=>'What is website speed optimization?', 'a'=>'It is the process of improving your website loading time and performance.'],
        ['q'=>'Can speed affect SEO?', 'a'=>'Yes, faster websites rank higher on Google and improve user experience.'],
        ['q'=>'Do you optimize WordPress sites?', 'a'=>'Yes, we specialize in WordPress speed optimization services.'],
        ['q'=>'Do you use tools or plugins?', 'a'=>'Yes, we use performance tools, caching systems, and optimization plugins.'],
    ],
],
];

$svc['smm-services'] = [
    'name'    => 'smm services',
    'contact' => $_contact,

     'theme' => [
        'grad_main'      => 'linear-gradient(135deg,#7c3aed,#d84bff)',
        'grad_warm'      => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'grad_secondary' => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'grad_tertiary'  => 'linear-gradient(135deg,#06b6d4,#0284c7)',
        'accent'         => '#7c3aed',
        'accent2'        => '#f97316',

        'hero_bg'        => 'linear-gradient(155deg,#F0E8FF 0%,#F8F0FF 20%,#FFF0FA 40%,#FFF4F0 65%,#FFF9F0 85%,#FDF8FF 100%)',
        'hero_radials'   => 'radial-gradient(ellipse 70% 60% at 10% 45%,rgba(123,77,255,0.14) 0%,transparent 60%),radial-gradient(ellipse 60% 70% at 90% 30%,rgba(216,91,255,0.12) 0%,transparent 55%),radial-gradient(ellipse 55% 60% at 50% 95%,rgba(255,154,87,0.10) 0%,transparent 60%)',
        'orb1'           => 'rgba(123,77,255,0.10)',
        'orb2'           => 'rgba(216,91,255,0.09)',
        'orb3'           => 'rgba(255,154,87,0.10)',
        'orb4'           => 'rgba(255,111,181,0.10)',
        'badge_border'   => 'rgba(123,77,255,0.18)',
        'badge_shadow'   => '0 4px 16px rgba(123,77,255,0.10)',
        'badge_dot'      => '#f97316',

        'btn_grad'             => 'linear-gradient(135deg,#7c3aed,#d84bff)',
        'btn_shadow'           => '0 4px 25px rgba(124,58,237,.35)',
        'btn_shadow_hover'     => '0 10px 40px rgba(124,58,237,.5)',
        'btn_warm'             => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'btn_warm_shadow'      => '0 4px 25px rgba(249,115,22,.35)',
        'btn_warm_shadow_hover'=> '0 10px 40px rgba(249,115,22,.5)',

        'card_border'       => 'rgba(124,58,237,0.09)',
        'card_border_hover' => 'rgba(124,58,237,0.28)',
        'card_shadow_hover' => '0 24px 60px rgba(124,58,237,.12)',
        'img_shadow'        => '0 30px 80px rgba(124,58,237,0.14)',
        'img_badge_border'  => 'rgba(124,58,237,0.15)',
        'icon_shadow'       => '0 6px 20px rgba(124,58,237,0.3)',
        'stat_border'       => 'rgba(124,58,237,0.09)',
        'stats_shadow'      => '0 4px 20px rgba(124,58,237,0.06)',

        'step_border'        => 'rgba(124,58,237,0.2)',
        'step_shadow'        => '0 8px 30px rgba(124,58,237,0.10)',
        'step_shadow_hover'  => '0 12px 40px rgba(124,58,237,0.35)',
        'connector_line'     => 'linear-gradient(90deg,rgba(124,58,237,0.2),rgba(124,58,237,0.6),rgba(124,58,237,0.2))',

        'section_alt_bg'     => 'linear-gradient(135deg,#fdf8ff 0%,#fff8f0 60%,#f0f9ff 100%)',
        'section_alt_radials'=> 'radial-gradient(ellipse at 80% 20%,rgba(224,64,251,0.05) 0%,transparent 50%),radial-gradient(ellipse at 10% 80%,rgba(249,115,22,0.04) 0%,transparent 50%)',

        'col_divider'  => 'rgba(124,58,237,0.12)',
        'item_divider' => 'rgba(124,58,237,0.08)',

        'ic_a_bg'=>'rgba(124,58,237,0.08)','ic_a_border'=>'rgba(124,58,237,0.15)','ic_a_color'=>'#7c3aed',
        'ic_b_bg'=>'rgba(245,158,11,0.08)','ic_b_border'=>'rgba(245,158,11,0.18)','ic_b_color'=>'#d97706',
        'ic_c_bg'=>'rgba(6,182,212,0.08)', 'ic_c_border'=>'rgba(6,182,212,0.18)', 'ic_c_color'=>'#06b6d4',
        'ic_d_bg'=>'rgba(249,115,22,0.08)','ic_d_border'=>'rgba(249,115,22,0.18)','ic_d_color'=>'#f97316',
        'ic_e_bg'=>'rgba(16,185,129,0.08)','ic_e_border'=>'rgba(16,185,129,0.18)','ic_e_color'=>'#10b981',
        'ic_f_bg'=>'rgba(224,64,251,0.08)','ic_f_border'=>'rgba(224,64,251,0.18)','ic_f_color'=>'#d84bff',

        'marquee_bg'   => 'linear-gradient(135deg,#0d0520 0%,#130a35 40%,#0a1a40 70%,#0d0a2e 100%)',
        'marquee_fade' => '#0d0520',
        'pill_b_bg'=>'rgba(124,58,237,0.2)', 'pill_b_border'=>'rgba(124,58,237,0.35)', 'pill_b_color'=>'#c4b5fd', 'pill_b_icon_bg'=>'rgba(124,58,237,0.3)',
        'pill_c_bg'=>'rgba(249,115,22,0.15)','pill_c_border'=>'rgba(249,115,22,0.3)', 'pill_c_color'=>'#fbbf24', 'pill_c_icon_bg'=>'rgba(249,115,22,0.3)',
        'pill_d_bg'=>'rgba(6,182,212,0.12)', 'pill_d_border'=>'rgba(6,182,212,0.25)', 'pill_d_color'=>'#67e8f9', 'pill_d_icon_bg'=>'rgba(6,182,212,0.2)',
        'pill_e_bg'=>'rgba(16,185,129,0.12)','pill_e_border'=>'rgba(16,185,129,0.25)','pill_e_color'=>'#6ee7b7','pill_e_icon_bg'=>'rgba(16,185,129,0.2)',

        'cta_bg'      => 'linear-gradient(135deg,#0d0520 0%,#130a35 55%,#0a1a40 100%)',
        'cta_radials' => 'radial-gradient(ellipse at 80% 20%,rgba(224,64,251,0.15) 0%,transparent 55%),radial-gradient(ellipse at 15% 80%,rgba(249,115,22,0.1) 0%,transparent 50%)',

        'faq_border'       => 'rgba(124,58,237,0.1)',
        'faq_border_hover' => 'rgba(124,58,237,0.25)',
        'faq_border_open'  => 'rgba(124,58,237,0.35)',
        'faq_shadow_hover' => '0 6px 24px rgba(124,58,237,0.08)',
        'faq_shadow_open'  => '0 8px 32px rgba(124,58,237,0.10)',
        'faq_card_bg'      => 'linear-gradient(145deg,#0d0520 0%,#130a35 55%,#0a1a40 100%)',
        'faq_card_radials' => 'radial-gradient(ellipse at 80% 10%,rgba(124,58,237,0.35) 0%,transparent 60%),radial-gradient(ellipse at 10% 90%,rgba(249,115,22,0.15) 0%,transparent 50%)',
        'faq_orb1'         => 'rgba(124,58,237,0.07)',
        'faq_orb2'         => 'rgba(249,115,22,0.06)',
        'grid_line'        => 'rgba(124,58,237,0.03)',
        'toggle_bg'        => 'rgba(124,58,237,0.06)',
        'toggle_border'    => 'rgba(124,58,237,0.15)',
        'cta_icon_shadow'  => '0 8px 30px rgba(124,58,237,0.4)',
    ],
    'hero' => [
    'badge'     => 'SMM Services That Turn Scrolls into Sales',
    'heading'   => 'Social Media Management Services That Grow Your Brand Fast',
    'desc'      => 'Our expert SMM services help you build a loyal audience, increase engagement, and turn followers into real customers across all major social platforms.',
    'cta_label' => 'Get Started',
],

'what' => [
    'img'             => 'smm-about.jpg',
    'img_fallback_bg' => 'linear-gradient(135deg,#fff0f8,#f0f8ff)',

    'badge_icon'      => '<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><path d="M8 12l2 2 6-6"/></svg>',
    'badge_title'     => 'Social Media Experts',
    'badge_stat'      => '70%+ consumers buy from brands they follow online',

    'label'           => 'What We Do',
    'heading'         => 'What is <span class="grad-text">Social Media Management (SMM)?</span>',
    'desc'            => 'Social Media Management (SMM) is the process of creating, managing, and growing your brand presence across platforms like Instagram, Facebook, LinkedIn, TikTok, and more.',

    'checklist'       => [
        'Content creation & daily posting across platforms',
        'Engagement-focused growth strategies',
        'Paid social campaigns for better reach',
        'Analytics & performance tracking for improvement',
    ],

    'stats' => [
        ['num'=>'250+','lbl'=>'Brands Managed'],
        ['num'=>'4.9x','lbl'=>'Engagement Growth'],
        ['num'=>'10+','lbl'=>'SMM Experts'],
    ],
],

'how' => [
    'label'   => 'Our Process',
    'heading' => 'How We Grow Your<br><span class="grad-text">Social Media Presence</span>',
    'desc'    => 'A structured strategy that builds engagement, followers, and conversions.',

    'steps'   => [
        ['title'=>'Strategy & Planning', 'desc'=>'We create a custom social media strategy based on your goals and audience.'],
        ['title'=>'Content Creation', 'desc'=>'We design posts, reels, stories, and captions that reflect your brand.'],
        ['title'=>'Posting & Management', 'desc'=>'We schedule and manage daily posting across all platforms.'],
        ['title'=>'Engagement & Optimization', 'desc'=>'We track performance and optimize content for better results.'],
    ],
],

'why' => [
    'label'   => 'Why Choose Us?',
    'heading' => 'Why Choose Our<br><span class="grad-text">SMM Services?</span>',
    'desc'    => 'We don’t just manage social media — we build brands that people follow and trust.',

    'cards'   => [
        ['title'=>'Custom Strategy', 'desc'=>'Every brand gets a tailored social media growth plan.'],
        ['title'=>'Real Engagement', 'desc'=>'No bots — only real audience growth and interaction.'],
        ['title'=>'Multi-Platform Reach', 'desc'=>'We manage Instagram, Facebook, LinkedIn, TikTok & more.'],
        ['title'=>'Transparent Reporting', 'desc'=>'Clear monthly reports with real performance insights.'],
    ],
],

'offers' => [
    'label'   => 'What We Offer',
    'heading' => 'Complete SMM Solutions —<br><span class="grad-text">Built for Real Growth</span>',

    'columns' => [
        [
            'label' => 'Content & Growth',
            'items' => [
                [
                    'title'=>'Content Creation',
                    'desc'=>'High-quality posts, reels, stories, and captions tailored to your brand.',
                    'ic'=>'ic-a',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/></svg>'
                ],
                [
                    'title'=>'Social Media Strategy',
                    'desc'=>'Data-driven strategies to grow engagement and followers.',
                    'ic'=>'ic-b',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="10"/></svg>'
                ],
                [
                    'title'=>'Community Management',
                    'desc'=>'We handle comments, messages, and audience interaction professionally.',
                    'ic'=>'ic-c',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14z"/></svg>'
                ],
            ],
        ],
        [
            'label' => 'Paid & Growth Ads',
            'items' => [
                [
                    'title'=>'Social Media Ads',
                    'desc'=>'Targeted ads on Instagram, Facebook, and TikTok for faster growth.',
                    'ic'=>'ic-d',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><polyline points="23 6 13 15 8 10 1 18"/></svg>'
                ],
                [
                    'title'=>'Influencer Marketing',
                    'desc'=>'Connect with influencers to boost reach and brand trust.',
                    'ic'=>'ic-e',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="9" cy="7" r="4"/></svg>'
                ],
                [
                    'title'=>'Analytics & Reporting',
                    'desc'=>'Track growth, engagement, and performance with clear reports.',
                    'ic'=>'ic-f',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><polyline points="22 12 18 12 15 21 9 3"/></svg>'
                ],
            ],
        ],
    ],
],

'cta' => [
    'label'       => 'Get Started Today',
    'heading'     => 'Let’s Turn Your Followers Into<br><span class="grad-text">Real Customers</span>',
    'desc'        => 'Grow your brand with powerful social media management that drives engagement, traffic, and sales.',
    'primary_btn' => 'Grow My Brand',
],

'faq' => [
    'subtitle' => 'Got questions about SMM services? Here are the answers.',
    'items' => [
        ['q'=>'What is included in SMM services?', 'a'=>'We handle content creation, posting, strategy, engagement, ads, and reporting.'],
        ['q'=>'Which platforms do you manage?', 'a'=>'We manage Instagram, Facebook, LinkedIn, TikTok, and more.'],
        ['q'=>'How fast can I see results?', 'a'=>'Most clients see engagement improvement within 30 days.'],
        ['q'=>'Do you use real growth strategies?', 'a'=>'Yes, we use organic + paid strategies, not bots or fake engagement.'],
    ],
],
];
$svc['snapchat-management'] = [
    'name'    => 'snapchat management',
    'contact' => $_contact,

    'theme' => [
        'grad_main'      => 'linear-gradient(135deg,#ec4899,#f97316)',
        'grad_warm'      => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'grad_secondary' => 'linear-gradient(135deg,#ec4899,#be185d)',
        'grad_tertiary'  => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'accent'         => '#ec4899',
        'accent2'        => '#f97316',

        'hero_bg'        => 'linear-gradient(155deg,#FFF0F8 0%,#FFF5F0 20%,#FFFAF0 40%,#FFF0F5 65%,#F5F0FF 85%,#FDF8FF 100%)',
        'hero_radials'   => 'radial-gradient(ellipse 70% 60% at 10% 45%,rgba(236,72,153,0.12) 0%,transparent 60%),radial-gradient(ellipse 60% 70% at 90% 30%,rgba(249,115,22,0.10) 0%,transparent 55%)',
        'orb1'           => 'rgba(236,72,153,0.10)',
        'orb2'           => 'rgba(249,115,22,0.09)',
        'orb3'           => 'rgba(245,158,11,0.09)',
        'orb4'           => 'rgba(168,85,247,0.09)',
        'badge_border'   => 'rgba(236,72,153,0.18)',
        'badge_shadow'   => '0 4px 16px rgba(236,72,153,0.10)',
        'badge_dot'      => '#f97316',

        'btn_grad'              => 'linear-gradient(135deg,#ec4899,#f97316)',
        'btn_shadow'            => '0 4px 25px rgba(236,72,153,.35)',
        'btn_shadow_hover'      => '0 10px 40px rgba(236,72,153,.5)',
        'btn_warm'              => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'btn_warm_shadow'       => '0 4px 25px rgba(249,115,22,.35)',
        'btn_warm_shadow_hover' => '0 10px 40px rgba(249,115,22,.5)',

        'card_border'       => 'rgba(236,72,153,0.09)',
        'card_border_hover' => 'rgba(236,72,153,0.28)',
        'card_shadow_hover' => '0 24px 60px rgba(236,72,153,.12)',
        'img_shadow'        => '0 30px 80px rgba(236,72,153,0.14)',
        'img_badge_border'  => 'rgba(236,72,153,0.15)',
        'icon_shadow'       => '0 6px 20px rgba(236,72,153,0.3)',
        'stat_border'       => 'rgba(236,72,153,0.09)',
        'stats_shadow'      => '0 4px 20px rgba(236,72,153,0.06)',

        'step_border'        => 'rgba(236,72,153,0.2)',
        'step_shadow'        => '0 8px 30px rgba(236,72,153,0.10)',
        'step_shadow_hover'  => '0 12px 40px rgba(236,72,153,0.35)',
        'connector_line'     => 'linear-gradient(90deg,rgba(236,72,153,0.2),rgba(236,72,153,0.6),rgba(236,72,153,0.2))',

        'section_alt_bg'     => 'linear-gradient(135deg,#fff0f8 0%,#fff8f0 60%,#f5f0ff 100%)',
        'section_alt_radials'=> 'radial-gradient(ellipse at 80% 20%,rgba(236,72,153,0.05) 0%,transparent 50%),radial-gradient(ellipse at 10% 80%,rgba(249,115,22,0.04) 0%,transparent 50%)',

        'col_divider'  => 'rgba(236,72,153,0.12)',
        'item_divider' => 'rgba(236,72,153,0.08)',

        'ic_a_bg'=>'rgba(236,72,153,0.08)','ic_a_border'=>'rgba(236,72,153,0.15)','ic_a_color'=>'#ec4899',
        'ic_b_bg'=>'rgba(249,115,22,0.08)','ic_b_border'=>'rgba(249,115,22,0.18)','ic_b_color'=>'#f97316',
        'ic_c_bg'=>'rgba(168,85,247,0.08)','ic_c_border'=>'rgba(168,85,247,0.18)','ic_c_color'=>'#a855f7',
        'ic_d_bg'=>'rgba(245,158,11,0.08)','ic_d_border'=>'rgba(245,158,11,0.18)','ic_d_color'=>'#f59e0b',
        'ic_e_bg'=>'rgba(6,182,212,0.08)', 'ic_e_border'=>'rgba(6,182,212,0.18)', 'ic_e_color'=>'#06b6d4',
        'ic_f_bg'=>'rgba(16,185,129,0.08)','ic_f_border'=>'rgba(16,185,129,0.18)','ic_f_color'=>'#10b981',

        'marquee_bg'   => 'linear-gradient(135deg,#1a0520 0%,#350a1a 40%,#1a0a20 70%,#200510 100%)',
        'marquee_fade' => '#1a0520',
        'pill_b_bg'=>'rgba(236,72,153,0.2)', 'pill_b_border'=>'rgba(236,72,153,0.35)', 'pill_b_color'=>'#f9a8d4', 'pill_b_icon_bg'=>'rgba(236,72,153,0.3)',
        'pill_c_bg'=>'rgba(249,115,22,0.15)','pill_c_border'=>'rgba(249,115,22,0.3)', 'pill_c_color'=>'#fbbf24', 'pill_c_icon_bg'=>'rgba(249,115,22,0.3)',
        'pill_d_bg'=>'rgba(168,85,247,0.15)','pill_d_border'=>'rgba(168,85,247,0.3)', 'pill_d_color'=>'#d8b4fe', 'pill_d_icon_bg'=>'rgba(168,85,247,0.3)',
        'pill_e_bg'=>'rgba(6,182,212,0.12)', 'pill_e_border'=>'rgba(6,182,212,0.25)', 'pill_e_color'=>'#67e8f9', 'pill_e_icon_bg'=>'rgba(6,182,212,0.2)',

        'cta_bg'      => 'linear-gradient(135deg,#1a0520 0%,#350a1a 55%,#200510 100%)',
        'cta_radials' => 'radial-gradient(ellipse at 80% 20%,rgba(236,72,153,0.2) 0%,transparent 55%),radial-gradient(ellipse at 15% 80%,rgba(249,115,22,0.12) 0%,transparent 50%)',

        'faq_border'       => 'rgba(236,72,153,0.1)',
        'faq_border_hover' => 'rgba(236,72,153,0.25)',
        'faq_border_open'  => 'rgba(236,72,153,0.35)',
        'faq_shadow_hover' => '0 6px 24px rgba(236,72,153,0.08)',
        'faq_shadow_open'  => '0 8px 32px rgba(236,72,153,0.10)',
        'faq_card_bg'      => 'linear-gradient(145deg,#1a0520 0%,#350a1a 55%,#200510 100%)',
        'faq_card_radials' => 'radial-gradient(ellipse at 80% 10%,rgba(236,72,153,0.35) 0%,transparent 60%),radial-gradient(ellipse at 10% 90%,rgba(249,115,22,0.15) 0%,transparent 50%)',
        'faq_orb1'         => 'rgba(236,72,153,0.07)',
        'faq_orb2'         => 'rgba(249,115,22,0.06)',
        'grid_line'        => 'rgba(236,72,153,0.03)',
        'toggle_bg'        => 'rgba(236,72,153,0.06)',
        'toggle_border'    => 'rgba(236,72,153,0.15)',
        'cta_icon_shadow'  => '0 8px 30px rgba(236,72,153,0.4)',
    ],


    'hero' => [
        'badge'     => 'Snapchat Management Service That Turns Views into Revenue',
        'heading'   => 'Scale Your Audience and Monetize Your Snapchat Strategy',
        'desc'      => 'Snapchat is more than just sharing moments — it’s a powerful platform to grow your audience, boost engagement, and generate real income. Our Snapchat management service helps you turn Stories into a high-performing revenue channel.',
        'cta_label' => 'Grow Your Snapchat',
    ],

    'what' => [
        'img'              => 'snapchat-management.jpg',
        'img_fallback_bg'  => 'linear-gradient(135deg,#fff6f0,#f0f7ff)',

        'badge_icon'      => '<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8"><path d="M12 2C8 2 5 5 5 9c0 3 2 6 7 13 5-7 7-10 7-13 0-4-3-7-7-7z"/></svg>',
        'badge_title'     => 'Snapchat Growth Experts',
        'badge_stat'      => 'Turn engagement into consistent monetization',

        'label'           => 'What We Do',
        'heading'         => 'Is Your Snapchat Presence Growing or Just Going?',
        'desc'            => 'We transform your Snapchat account into a growth and revenue engine through content creation, audience targeting, and monetization strategies designed for real results.',

        'checklist'       => [
            'High-performing Snapchat content creation',
            'Audience growth & engagement strategies',
            'Optimized posting for maximum reach',
            'Monetization guidance & revenue scaling',
        ],

        'stats' => [
            ['num'=>'3x','lbl'=>'Engagement Growth'],
            ['num'=>'4–6 Weeks','lbl'=>'Noticeable Results'],
            ['num'=>'100+','lbl'=>'Accounts Scaled'],
        ],
    ],

    'how' => [
        'label'   => 'Our Process',
        'heading' => 'How We Turn Your Snapchat Into a Revenue Machine',
        'desc'    => 'A structured strategy that grows your audience and maximizes your earning potential.',

        'steps'   => [
            ['title'=>'Account Analysis', 'desc'=>'We analyze your current Snapchat performance and audience behavior.'],
            ['title'=>'Content Strategy', 'desc'=>'We design a content plan that fits your niche and boosts engagement.'],
            ['title'=>'Growth Execution', 'desc'=>'We apply posting schedules and engagement tactics to increase reach.'],
            ['title'=>'Monetization Optimization', 'desc'=>'We refine strategies to convert views into real revenue.'],
        ],
    ],

    'why' => [
        'label'   => 'Why Choose Us?',
        'heading' => 'Why We Are the Right Snapchat Growth Partner',
        'desc'    => 'We don’t just grow followers — we build profitable Snapchat accounts.',

        'cards'   => [
            ['title'=>'Revenue Focused', 'desc'=>'We optimize your Snapchat for monetization, not just views.'],
            ['title'=>'Organic Growth', 'desc'=>'Real audience growth without bots or fake engagement.'],
            ['title'=>'Content That Converts', 'desc'=>'Stories designed to attract and retain loyal viewers.'],
            ['title'=>'Expert Strategy', 'desc'=>'Data-driven insights to scale your Snapchat presence.'],
        ],
    ],

    'offers' => [
        'label'   => 'What We Offer',
        'heading' => 'Complete Snapchat Management Solutions',

        'columns' => [
            [
                'label' => 'Growth Services',
                'items' => [
                    [
                        'title'=>'Content Creation',
                        'desc'=>'Engaging Snapchat Stories tailored to your audience.',
                        'ic'=>'ic-a',
                        'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M4 4h16v16H4z"/></svg>'
                    ],
                    [
                        'title'=>'Audience Growth',
                        'desc'=>'Targeted strategies to grow real and active followers.',
                        'ic'=>'ic-b',
                        'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 12c2 0 3-1 3-3s-1-3-3-3-3 1-3 3 1 3 3 3z"/></svg>'
                    ],
                    [
                        'title'=>'Engagement Boosting',
                        'desc'=>'Increase views, replies, and story interactions.',
                        'ic'=>'ic-c',
                        'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M21 15a4 4 0 0 1-4 4H7l-4 4V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"/></svg>'
                    ],
                ],
            ],
            [
                'label' => 'Monetization',
                'items' => [
                    [
                        'title'=>'Revenue Strategy',
                        'desc'=>'Turn your Snapchat into a consistent income source.',
                        'ic'=>'ic-d',
                        'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 1v22M17 5H9a3 3 0 0 0 0 6h6a3 3 0 0 1 0 6H7"/></svg>'
                    ],
                    [
                        'title'=>'Performance Tracking',
                        'desc'=>'Monitor growth and optimize for better earnings.',
                        'ic'=>'ic-e',
                        'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 3v18h18"/></svg>'
                    ],
                    [
                        'title'=>'Optimization',
                        'desc'=>'Improve reach and conversion with data-backed changes.',
                        'ic'=>'ic-f',
                        'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="10"/></svg>'
                    ],
                ],
            ],
        ],
    ],

    'cta' => [
        'label'       => 'Start Today',
        'heading'     => 'Turn Your Snapchat Into a Revenue-Generating Platform',
        'desc'        => 'Let our experts manage your Snapchat growth and help you build a profitable audience.',
        'primary_btn' => 'Get Started',
    ],

    'faq' => [
        'subtitle' => 'Everything you need to know about Snapchat management.',
        'items' => [
            ['q'=>'Can I really earn money from Snapchat?', 'a'=>'Yes, with the right strategy, engagement, and content, Snapchat can become a strong revenue source.'],
            ['q'=>'Do I need a large audience?', 'a'=>'No, engagement matters more than follower count.'],
            ['q'=>'How soon will I see results?', 'a'=>'Most clients see growth within 4–6 weeks.'],
            ['q'=>'Do you create content for me?', 'a'=>'Yes, we handle full content creation and posting strategy.'],
        ],
    ],

];

$svc['script-writing-service'] = [
    'name'    => 'script writing service',
    'contact' => $_contact,

     'theme' => [
        'grad_main'      => 'linear-gradient(135deg,#7c3aed,#d84bff)',
        'grad_warm'      => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'grad_secondary' => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'grad_tertiary'  => 'linear-gradient(135deg,#06b6d4,#0284c7)',
        'accent'         => '#7c3aed',
        'accent2'        => '#f97316',

        'hero_bg'        => 'linear-gradient(155deg,#F0E8FF 0%,#F8F0FF 20%,#FFF0FA 40%,#FFF4F0 65%,#FFF9F0 85%,#FDF8FF 100%)',
        'hero_radials'   => 'radial-gradient(ellipse 70% 60% at 10% 45%,rgba(123,77,255,0.14) 0%,transparent 60%),radial-gradient(ellipse 60% 70% at 90% 30%,rgba(216,91,255,0.12) 0%,transparent 55%),radial-gradient(ellipse 55% 60% at 50% 95%,rgba(255,154,87,0.10) 0%,transparent 60%)',
        'orb1'           => 'rgba(123,77,255,0.10)',
        'orb2'           => 'rgba(216,91,255,0.09)',
        'orb3'           => 'rgba(255,154,87,0.10)',
        'orb4'           => 'rgba(255,111,181,0.10)',
        'badge_border'   => 'rgba(123,77,255,0.18)',
        'badge_shadow'   => '0 4px 16px rgba(123,77,255,0.10)',
        'badge_dot'      => '#f97316',

        'btn_grad'             => 'linear-gradient(135deg,#7c3aed,#d84bff)',
        'btn_shadow'           => '0 4px 25px rgba(124,58,237,.35)',
        'btn_shadow_hover'     => '0 10px 40px rgba(124,58,237,.5)',
        'btn_warm'             => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'btn_warm_shadow'      => '0 4px 25px rgba(249,115,22,.35)',
        'btn_warm_shadow_hover'=> '0 10px 40px rgba(249,115,22,.5)',

        'card_border'       => 'rgba(124,58,237,0.09)',
        'card_border_hover' => 'rgba(124,58,237,0.28)',
        'card_shadow_hover' => '0 24px 60px rgba(124,58,237,.12)',
        'img_shadow'        => '0 30px 80px rgba(124,58,237,0.14)',
        'img_badge_border'  => 'rgba(124,58,237,0.15)',
        'icon_shadow'       => '0 6px 20px rgba(124,58,237,0.3)',
        'stat_border'       => 'rgba(124,58,237,0.09)',
        'stats_shadow'      => '0 4px 20px rgba(124,58,237,0.06)',

        'step_border'        => 'rgba(124,58,237,0.2)',
        'step_shadow'        => '0 8px 30px rgba(124,58,237,0.10)',
        'step_shadow_hover'  => '0 12px 40px rgba(124,58,237,0.35)',
        'connector_line'     => 'linear-gradient(90deg,rgba(124,58,237,0.2),rgba(124,58,237,0.6),rgba(124,58,237,0.2))',

        'section_alt_bg'     => 'linear-gradient(135deg,#fdf8ff 0%,#fff8f0 60%,#f0f9ff 100%)',
        'section_alt_radials'=> 'radial-gradient(ellipse at 80% 20%,rgba(224,64,251,0.05) 0%,transparent 50%),radial-gradient(ellipse at 10% 80%,rgba(249,115,22,0.04) 0%,transparent 50%)',

        'col_divider'  => 'rgba(124,58,237,0.12)',
        'item_divider' => 'rgba(124,58,237,0.08)',

        'ic_a_bg'=>'rgba(124,58,237,0.08)','ic_a_border'=>'rgba(124,58,237,0.15)','ic_a_color'=>'#7c3aed',
        'ic_b_bg'=>'rgba(245,158,11,0.08)','ic_b_border'=>'rgba(245,158,11,0.18)','ic_b_color'=>'#d97706',
        'ic_c_bg'=>'rgba(6,182,212,0.08)', 'ic_c_border'=>'rgba(6,182,212,0.18)', 'ic_c_color'=>'#06b6d4',
        'ic_d_bg'=>'rgba(249,115,22,0.08)','ic_d_border'=>'rgba(249,115,22,0.18)','ic_d_color'=>'#f97316',
        'ic_e_bg'=>'rgba(16,185,129,0.08)','ic_e_border'=>'rgba(16,185,129,0.18)','ic_e_color'=>'#10b981',
        'ic_f_bg'=>'rgba(224,64,251,0.08)','ic_f_border'=>'rgba(224,64,251,0.18)','ic_f_color'=>'#d84bff',

        'marquee_bg'   => 'linear-gradient(135deg,#0d0520 0%,#130a35 40%,#0a1a40 70%,#0d0a2e 100%)',
        'marquee_fade' => '#0d0520',
        'pill_b_bg'=>'rgba(124,58,237,0.2)', 'pill_b_border'=>'rgba(124,58,237,0.35)', 'pill_b_color'=>'#c4b5fd', 'pill_b_icon_bg'=>'rgba(124,58,237,0.3)',
        'pill_c_bg'=>'rgba(249,115,22,0.15)','pill_c_border'=>'rgba(249,115,22,0.3)', 'pill_c_color'=>'#fbbf24', 'pill_c_icon_bg'=>'rgba(249,115,22,0.3)',
        'pill_d_bg'=>'rgba(6,182,212,0.12)', 'pill_d_border'=>'rgba(6,182,212,0.25)', 'pill_d_color'=>'#67e8f9', 'pill_d_icon_bg'=>'rgba(6,182,212,0.2)',
        'pill_e_bg'=>'rgba(16,185,129,0.12)','pill_e_border'=>'rgba(16,185,129,0.25)','pill_e_color'=>'#6ee7b7','pill_e_icon_bg'=>'rgba(16,185,129,0.2)',

        'cta_bg'      => 'linear-gradient(135deg,#0d0520 0%,#130a35 55%,#0a1a40 100%)',
        'cta_radials' => 'radial-gradient(ellipse at 80% 20%,rgba(224,64,251,0.15) 0%,transparent 55%),radial-gradient(ellipse at 15% 80%,rgba(249,115,22,0.1) 0%,transparent 50%)',

        'faq_border'       => 'rgba(124,58,237,0.1)',
        'faq_border_hover' => 'rgba(124,58,237,0.25)',
        'faq_border_open'  => 'rgba(124,58,237,0.35)',
        'faq_shadow_hover' => '0 6px 24px rgba(124,58,237,0.08)',
        'faq_shadow_open'  => '0 8px 32px rgba(124,58,237,0.10)',
        'faq_card_bg'      => 'linear-gradient(145deg,#0d0520 0%,#130a35 55%,#0a1a40 100%)',
        'faq_card_radials' => 'radial-gradient(ellipse at 80% 10%,rgba(124,58,237,0.35) 0%,transparent 60%),radial-gradient(ellipse at 10% 90%,rgba(249,115,22,0.15) 0%,transparent 50%)',
        'faq_orb1'         => 'rgba(124,58,237,0.07)',
        'faq_orb2'         => 'rgba(249,115,22,0.06)',
        'grid_line'        => 'rgba(124,58,237,0.03)',
        'toggle_bg'        => 'rgba(124,58,237,0.06)',
        'toggle_border'    => 'rgba(124,58,237,0.15)',
        'cta_icon_shadow'  => '0 8px 30px rgba(124,58,237,0.4)',
    ],
  

    'hero' => [
        'badge'     => 'Script Writing Service That Engages & Converts',
        'heading'   => 'Script Writing Service That Engages & Converts',
        'desc'      => 'Our script writing service creates powerful scripts for every platform—videos, podcasts, ads, commercials, and more—helping your message become clear, engaging, and unforgettable.',
        'cta_label' => 'Get Started',
    ],

    'what' => [
        'img'              => 'script-writing-service.jpg',
        'img_fallback_bg'  => 'linear-gradient(135deg,#fff7f0,#f0f6ff)',

        'badge_icon'      => '<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8"><path d="M4 4h16v16H4z"/><path d="M8 8h8M8 12h8M8 16h6"/></svg>',
        'badge_title'     => 'Professional Script Writing',
        'badge_stat'      => 'Words that turn ideas into powerful stories',

        'label'           => 'Script Writing for Your Business',
        'heading'         => 'What is <span class="grad-text">Script Writing?</span>',
        'desc'            => 'Script writing is the art of turning ideas into structured, engaging content for videos, ads, podcasts, and commercials. It helps brands communicate clearly and connect with their audience through storytelling.',

        'checklist'       => [
            'Custom scripts for ads, videos & podcasts',
            'Clear storytelling structure & flow',
            'Creative messaging that boosts engagement',
            'Platform-specific script optimization',
        ],

        'stats' => [
            ['num'=>'2x','lbl'=>'Longer Attention Span'],
            ['num'=>'100+','lbl'=>'Scripts Delivered'],
            ['num'=>'All Platforms','lbl'=>'Covered'],
        ],
    ],

    'how' => [
        'label'   => 'Our Process',
        'heading' => 'How We Turn Ideas Into Powerful Scripts',
        'desc'    => 'A structured creative process that transforms your message into impactful storytelling.',

        'steps'   => [
            ['title'=>'Understanding Your Goal', 'desc'=>'We analyze your brand, audience, and purpose of the script.'],
            ['title'=>'Concept & Structure', 'desc'=>'We build a strong storytelling flow and message outline.'],
            ['title'=>'Script Writing', 'desc'=>'We craft engaging, clear, and persuasive scripts.'],
            ['title'=>'Refinement & Delivery', 'desc'=>'We polish the script to ensure clarity, tone, and impact.'],
        ],
    ],

    'why' => [
        'label'   => 'Why Choose Us?',
        'heading' => 'Why Our Script Writing Service Stands Out',
        'desc'    => 'We don’t just write scripts—we create stories that connect, engage, and convert.',

        'cards'   => [
            ['title'=>'Creative Storytelling', 'desc'=>'We turn simple ideas into compelling narratives.'],
            ['title'=>'Audience Focused', 'desc'=>'Scripts designed to keep viewers engaged till the end.'],
            ['title'=>'Multi-Platform Expertise', 'desc'=>'From ads to podcasts, we cover all formats.'],
            ['title'=>'Conversion Driven', 'desc'=>'Every script is designed to inspire action.'],
        ],
    ],

    'offers' => [
        'label'   => 'What We Offer',
        'heading' => 'Complete Script Writing Solutions',

        'columns' => [
            [
                'label' => 'Script Types',
                'items' => [
                    [
                        'title'=>'Ad Script Writing',
                        'desc'=>'Short, powerful scripts that grab attention and drive action.',
                        'ic'=>'ic-a',
                        'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><polygon points="23 7 16 12 23 17"/><rect x="2" y="5" width="14" height="14" rx="2"/></svg>'
                    ],
                    [
                        'title'=>'Video Script Writing',
                        'desc'=>'Engaging storytelling scripts for brand videos and content.',
                        'ic'=>'ic-b',
                        'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="6" width="18" height="12"/></svg>'
                    ],
                    [
                        'title'=>'Podcast Script Writing',
                        'desc'=>'Natural, conversational scripts that keep listeners engaged.',
                        'ic'=>'ic-c',
                        'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="10"/></svg>'
                    ],
                ],
            ],
            [
                'label' => 'Advanced Writing',
                'items' => [
                    [
                        'title'=>'Commercial Scripts',
                        'desc'=>'High-impact scripts for ads and brand promotions.',
                        'ic'=>'ic-d',
                        'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M4 4h16v16H4z"/></svg>'
                    ],
                    [
                        'title'=>'Explainer Scripts',
                        'desc'=>'Simplified scripts that explain complex ideas clearly.',
                        'ic'=>'ic-e',
                        'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 2v20"/></svg>'
                    ],
                    [
                        'title'=>'Custom Script Solutions',
                        'desc'=>'Tailored scripts for any platform or business need.',
                        'ic'=>'ic-f',
                        'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 12h18"/></svg>'
                    ],
                ],
            ],
        ],
    ],

    'cta' => [
        'label'       => 'Let’s Write Your Story',
        'heading'     => 'Turn Your Ideas Into Powerful Scripts',
        'desc'        => 'Get scripts that engage your audience and drive real results across all platforms.',
        'primary_btn' => 'Start Writing',
    ],

    'faq' => [
        'subtitle' => 'Everything you need to know about our script writing service.',
        'items' => [
            ['q'=>'What is a script writing service?', 'a'=>'It creates structured scripts for ads, videos, podcasts, and more to communicate your message effectively.'],
            ['q'=>'Do you write scripts for all platforms?', 'a'=>'Yes, we cover ads, videos, podcasts, commercials, and explainer content.'],
            ['q'=>'How long does it take?', 'a'=>'Most scripts are delivered quickly depending on complexity and length.'],
            ['q'=>'Can I request revisions?', 'a'=>'Yes, we refine scripts until they match your expectations.'],
        ],
    ],

];

$svc['email-marketing'] = [
    'name'    => 'Social Media Marketing',
    'contact' => $_contact,

    'theme' => [
        'grad_main'      => 'linear-gradient(135deg,#ec4899,#f97316)',
        'grad_warm'      => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'grad_secondary' => 'linear-gradient(135deg,#ec4899,#be185d)',
        'grad_tertiary'  => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'accent'         => '#ec4899',
        'accent2'        => '#f97316',

        'hero_bg'        => 'linear-gradient(155deg,#FFF0F8 0%,#FFF5F0 20%,#FFFAF0 40%,#FFF0F5 65%,#F5F0FF 85%,#FDF8FF 100%)',
        'hero_radials'   => 'radial-gradient(ellipse 70% 60% at 10% 45%,rgba(236,72,153,0.12) 0%,transparent 60%),radial-gradient(ellipse 60% 70% at 90% 30%,rgba(249,115,22,0.10) 0%,transparent 55%)',
        'orb1'           => 'rgba(236,72,153,0.10)',
        'orb2'           => 'rgba(249,115,22,0.09)',
        'orb3'           => 'rgba(245,158,11,0.09)',
        'orb4'           => 'rgba(168,85,247,0.09)',
        'badge_border'   => 'rgba(236,72,153,0.18)',
        'badge_shadow'   => '0 4px 16px rgba(236,72,153,0.10)',
        'badge_dot'      => '#f97316',

        'btn_grad'              => 'linear-gradient(135deg,#ec4899,#f97316)',
        'btn_shadow'            => '0 4px 25px rgba(236,72,153,.35)',
        'btn_shadow_hover'      => '0 10px 40px rgba(236,72,153,.5)',
        'btn_warm'              => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'btn_warm_shadow'       => '0 4px 25px rgba(249,115,22,.35)',
        'btn_warm_shadow_hover' => '0 10px 40px rgba(249,115,22,.5)',

        'card_border'       => 'rgba(236,72,153,0.09)',
        'card_border_hover' => 'rgba(236,72,153,0.28)',
        'card_shadow_hover' => '0 24px 60px rgba(236,72,153,.12)',
        'img_shadow'        => '0 30px 80px rgba(236,72,153,0.14)',
        'img_badge_border'  => 'rgba(236,72,153,0.15)',
        'icon_shadow'       => '0 6px 20px rgba(236,72,153,0.3)',
        'stat_border'       => 'rgba(236,72,153,0.09)',
        'stats_shadow'      => '0 4px 20px rgba(236,72,153,0.06)',

        'step_border'        => 'rgba(236,72,153,0.2)',
        'step_shadow'        => '0 8px 30px rgba(236,72,153,0.10)',
        'step_shadow_hover'  => '0 12px 40px rgba(236,72,153,0.35)',
        'connector_line'     => 'linear-gradient(90deg,rgba(236,72,153,0.2),rgba(236,72,153,0.6),rgba(236,72,153,0.2))',

        'section_alt_bg'     => 'linear-gradient(135deg,#fff0f8 0%,#fff8f0 60%,#f5f0ff 100%)',
        'section_alt_radials'=> 'radial-gradient(ellipse at 80% 20%,rgba(236,72,153,0.05) 0%,transparent 50%),radial-gradient(ellipse at 10% 80%,rgba(249,115,22,0.04) 0%,transparent 50%)',

        'col_divider'  => 'rgba(236,72,153,0.12)',
        'item_divider' => 'rgba(236,72,153,0.08)',

        'ic_a_bg'=>'rgba(236,72,153,0.08)','ic_a_border'=>'rgba(236,72,153,0.15)','ic_a_color'=>'#ec4899',
        'ic_b_bg'=>'rgba(249,115,22,0.08)','ic_b_border'=>'rgba(249,115,22,0.18)','ic_b_color'=>'#f97316',
        'ic_c_bg'=>'rgba(168,85,247,0.08)','ic_c_border'=>'rgba(168,85,247,0.18)','ic_c_color'=>'#a855f7',
        'ic_d_bg'=>'rgba(245,158,11,0.08)','ic_d_border'=>'rgba(245,158,11,0.18)','ic_d_color'=>'#f59e0b',
        'ic_e_bg'=>'rgba(6,182,212,0.08)', 'ic_e_border'=>'rgba(6,182,212,0.18)', 'ic_e_color'=>'#06b6d4',
        'ic_f_bg'=>'rgba(16,185,129,0.08)','ic_f_border'=>'rgba(16,185,129,0.18)','ic_f_color'=>'#10b981',

        'marquee_bg'   => 'linear-gradient(135deg,#1a0520 0%,#350a1a 40%,#1a0a20 70%,#200510 100%)',
        'marquee_fade' => '#1a0520',
        'pill_b_bg'=>'rgba(236,72,153,0.2)', 'pill_b_border'=>'rgba(236,72,153,0.35)', 'pill_b_color'=>'#f9a8d4', 'pill_b_icon_bg'=>'rgba(236,72,153,0.3)',
        'pill_c_bg'=>'rgba(249,115,22,0.15)','pill_c_border'=>'rgba(249,115,22,0.3)', 'pill_c_color'=>'#fbbf24', 'pill_c_icon_bg'=>'rgba(249,115,22,0.3)',
        'pill_d_bg'=>'rgba(168,85,247,0.15)','pill_d_border'=>'rgba(168,85,247,0.3)', 'pill_d_color'=>'#d8b4fe', 'pill_d_icon_bg'=>'rgba(168,85,247,0.3)',
        'pill_e_bg'=>'rgba(6,182,212,0.12)', 'pill_e_border'=>'rgba(6,182,212,0.25)', 'pill_e_color'=>'#67e8f9', 'pill_e_icon_bg'=>'rgba(6,182,212,0.2)',

        'cta_bg'      => 'linear-gradient(135deg,#1a0520 0%,#350a1a 55%,#200510 100%)',
        'cta_radials' => 'radial-gradient(ellipse at 80% 20%,rgba(236,72,153,0.2) 0%,transparent 55%),radial-gradient(ellipse at 15% 80%,rgba(249,115,22,0.12) 0%,transparent 50%)',

        'faq_border'       => 'rgba(236,72,153,0.1)',
        'faq_border_hover' => 'rgba(236,72,153,0.25)',
        'faq_border_open'  => 'rgba(236,72,153,0.35)',
        'faq_shadow_hover' => '0 6px 24px rgba(236,72,153,0.08)',
        'faq_shadow_open'  => '0 8px 32px rgba(236,72,153,0.10)',
        'faq_card_bg'      => 'linear-gradient(145deg,#1a0520 0%,#350a1a 55%,#200510 100%)',
        'faq_card_radials' => 'radial-gradient(ellipse at 80% 10%,rgba(236,72,153,0.35) 0%,transparent 60%),radial-gradient(ellipse at 10% 90%,rgba(249,115,22,0.15) 0%,transparent 50%)',
        'faq_orb1'         => 'rgba(236,72,153,0.07)',
        'faq_orb2'         => 'rgba(249,115,22,0.06)',
        'grid_line'        => 'rgba(236,72,153,0.03)',
        'toggle_bg'        => 'rgba(236,72,153,0.06)',
        'toggle_border'    => 'rgba(236,72,153,0.15)',
        'cta_icon_shadow'  => '0 8px 30px rgba(236,72,153,0.4)',
    ],

    'hero' => [
        'badge'     => 'Email Marketing Agency That Builds Customer Loyalty',
        'heading'   => 'Email Marketing Agency That Builds Customer Loyalty',
        'desc'      => 'As a results-focused email marketing agency, we help you engage the right audience, nurture leads, and increase sales with powerful, conversion-driven email campaigns.',
        'cta_label' => 'Get Started',
    ],

    'what' => [
        'img'              => 'email-marketing-service.jpg',
        'img_fallback_bg'  => 'linear-gradient(135deg,#f0f8ff,#fff6f0)',

        'badge_icon'      => '<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8"><path d="M4 4h16v16H4z"/><path d="M4 6l8 6 8-6"/></svg>',
        'badge_title'     => 'Smart Email Campaigns',
        'badge_stat'      => 'High ROI, personalized & conversion-focused emails',

        'label'           => 'What Is Email Marketing?',
        'heading'         => 'What is <span class="grad-text">Email Marketing?</span>',
        'desc'            => 'Email marketing is a direct communication strategy where businesses connect with customers through personalized emails. It builds trust, improves engagement, and drives consistent sales growth.',

        'checklist'       => [
            'Targeted email campaigns that increase opens & clicks',
            'Mobile-optimized, responsive email designs',
            'Automation flows (welcome, follow-ups, promotions)',
            'Data-driven optimization for better ROI',
        ],

        'stats' => [
            ['num'=>'$42','lbl'=>'ROI per $1 spent'],
            ['num'=>'2x','lbl'=>'Higher Engagement'],
            ['num'=>'100%','lbl'=>'Inbox Reach'],
        ],
    ],

    'how' => [
        'label'   => 'Our Process',
        'heading' => 'How We Turn Emails Into Revenue',
        'desc'    => 'A structured approach that transforms your email list into a powerful sales channel.',

        'steps'   => [
            ['title'=>'Strategy Planning', 'desc'=>'We define your audience, goals, and campaign structure.'],
            ['title'=>'Creative Design', 'desc'=>'We design mobile-friendly, high-converting email templates.'],
            ['title'=>'Content & Copywriting', 'desc'=>'We write engaging emails that encourage opens and clicks.'],
            ['title'=>'Automation & Optimization', 'desc'=>'We set workflows and improve performance using real data.'],
        ],
    ],

    'why' => [
        'label'   => 'Why Choose Us?',
        'heading' => 'Why Businesses Trust Our Email Marketing Agency',
        'desc'    => 'We don’t just send emails—we build customer relationships that drive long-term revenue.',

        'cards'   => [
            ['title'=>'High ROI Focus', 'desc'=>'Campaigns designed to maximize conversions and sales.'],
            ['title'=>'Personalized Messaging', 'desc'=>'Emails tailored to each audience segment.'],
            ['title'=>'Automation Experts', 'desc'=>'Smart workflows that save time and boost engagement.'],
            ['title'=>'Transparent Reporting', 'desc'=>'Clear insights into opens, clicks, and performance.'],
        ],
    ],

    'offers' => [
        'label'   => 'What We Offer',
        'heading' => 'Complete Email Marketing Solutions',

        'columns' => [
            [
                'label' => 'Core Services',
                'items' => [
                    [
                        'title'=>'Campaign Strategy',
                        'desc'=>'Goal-based email campaigns designed to drive results.',
                        'ic'=>'ic-a',
                        'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 12l18-9-7 18-2-7-9-2z"/></svg>'
                    ],
                    [
                        'title'=>'Email Design',
                        'desc'=>'Clean, responsive designs optimized for all devices.',
                        'ic'=>'ic-b',
                        'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="5" width="18" height="14"/></svg>'
                    ],
                    [
                        'title'=>'Copywriting',
                        'desc'=>'Persuasive email content that increases engagement.',
                        'ic'=>'ic-c',
                        'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M4 20h16"/></svg>'
                    ],
                ],
            ],
            [
                'label' => 'Automation & Growth',
                'items' => [
                    [
                        'title'=>'Email Automation',
                        'desc'=>'Welcome flows, follow-ups, and drip campaigns.',
                        'ic'=>'ic-d',
                        'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 2v20"/></svg>'
                    ],
                    [
                        'title'=>'Analytics & Reporting',
                        'desc'=>'Track performance and optimize campaigns.',
                        'ic'=>'ic-e',
                        'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 3v18h18"/></svg>'
                    ],
                    [
                        'title'=>'Audience Segmentation',
                        'desc'=>'Target the right users with personalized emails.',
                        'ic'=>'ic-f',
                        'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="10"/></svg>'
                    ],
                ],
            ],
        ],
    ],

    'cta' => [
        'label'       => 'Start Email Campaigns',
        'heading'     => 'Turn Your Inbox Into a Sales Machine',
        'desc'        => 'Let our experts create email campaigns that engage, convert, and grow your business.',
        'primary_btn' => 'Start Now',
    ],

    'faq' => [
        'subtitle' => 'Everything you need to know about email marketing.',
        'items' => [
            ['q'=>'Is email marketing still effective?', 'a'=>'Yes, it remains one of the highest ROI marketing channels.'],
            ['q'=>'How often should I send emails?', 'a'=>'Typically 1–2 emails per week depending on your audience.'],
            ['q'=>'Can email marketing help small businesses?', 'a'=>'Yes, it is highly effective even with small budgets.'],
            ['q'=>'Do you provide automation?', 'a'=>'Yes, we build full email automation workflows.'],
        ],
    ],

];


$svc['seo-content-writing'] = [
    'name'    => 'seo content writing',
    'contact' => $_contact,

     'theme' => [
        'grad_main'      => 'linear-gradient(135deg,#7c3aed,#d84bff)',
        'grad_warm'      => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'grad_secondary' => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'grad_tertiary'  => 'linear-gradient(135deg,#06b6d4,#0284c7)',
        'accent'         => '#7c3aed',
        'accent2'        => '#f97316',

        'hero_bg'        => 'linear-gradient(155deg,#F0E8FF 0%,#F8F0FF 20%,#FFF0FA 40%,#FFF4F0 65%,#FFF9F0 85%,#FDF8FF 100%)',
        'hero_radials'   => 'radial-gradient(ellipse 70% 60% at 10% 45%,rgba(123,77,255,0.14) 0%,transparent 60%),radial-gradient(ellipse 60% 70% at 90% 30%,rgba(216,91,255,0.12) 0%,transparent 55%),radial-gradient(ellipse 55% 60% at 50% 95%,rgba(255,154,87,0.10) 0%,transparent 60%)',
        'orb1'           => 'rgba(123,77,255,0.10)',
        'orb2'           => 'rgba(216,91,255,0.09)',
        'orb3'           => 'rgba(255,154,87,0.10)',
        'orb4'           => 'rgba(255,111,181,0.10)',
        'badge_border'   => 'rgba(123,77,255,0.18)',
        'badge_shadow'   => '0 4px 16px rgba(123,77,255,0.10)',
        'badge_dot'      => '#f97316',

        'btn_grad'             => 'linear-gradient(135deg,#7c3aed,#d84bff)',
        'btn_shadow'           => '0 4px 25px rgba(124,58,237,.35)',
        'btn_shadow_hover'     => '0 10px 40px rgba(124,58,237,.5)',
        'btn_warm'             => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'btn_warm_shadow'      => '0 4px 25px rgba(249,115,22,.35)',
        'btn_warm_shadow_hover'=> '0 10px 40px rgba(249,115,22,.5)',

        'card_border'       => 'rgba(124,58,237,0.09)',
        'card_border_hover' => 'rgba(124,58,237,0.28)',
        'card_shadow_hover' => '0 24px 60px rgba(124,58,237,.12)',
        'img_shadow'        => '0 30px 80px rgba(124,58,237,0.14)',
        'img_badge_border'  => 'rgba(124,58,237,0.15)',
        'icon_shadow'       => '0 6px 20px rgba(124,58,237,0.3)',
        'stat_border'       => 'rgba(124,58,237,0.09)',
        'stats_shadow'      => '0 4px 20px rgba(124,58,237,0.06)',

        'step_border'        => 'rgba(124,58,237,0.2)',
        'step_shadow'        => '0 8px 30px rgba(124,58,237,0.10)',
        'step_shadow_hover'  => '0 12px 40px rgba(124,58,237,0.35)',
        'connector_line'     => 'linear-gradient(90deg,rgba(124,58,237,0.2),rgba(124,58,237,0.6),rgba(124,58,237,0.2))',

        'section_alt_bg'     => 'linear-gradient(135deg,#fdf8ff 0%,#fff8f0 60%,#f0f9ff 100%)',
        'section_alt_radials'=> 'radial-gradient(ellipse at 80% 20%,rgba(224,64,251,0.05) 0%,transparent 50%),radial-gradient(ellipse at 10% 80%,rgba(249,115,22,0.04) 0%,transparent 50%)',

        'col_divider'  => 'rgba(124,58,237,0.12)',
        'item_divider' => 'rgba(124,58,237,0.08)',

        'ic_a_bg'=>'rgba(124,58,237,0.08)','ic_a_border'=>'rgba(124,58,237,0.15)','ic_a_color'=>'#7c3aed',
        'ic_b_bg'=>'rgba(245,158,11,0.08)','ic_b_border'=>'rgba(245,158,11,0.18)','ic_b_color'=>'#d97706',
        'ic_c_bg'=>'rgba(6,182,212,0.08)', 'ic_c_border'=>'rgba(6,182,212,0.18)', 'ic_c_color'=>'#06b6d4',
        'ic_d_bg'=>'rgba(249,115,22,0.08)','ic_d_border'=>'rgba(249,115,22,0.18)','ic_d_color'=>'#f97316',
        'ic_e_bg'=>'rgba(16,185,129,0.08)','ic_e_border'=>'rgba(16,185,129,0.18)','ic_e_color'=>'#10b981',
        'ic_f_bg'=>'rgba(224,64,251,0.08)','ic_f_border'=>'rgba(224,64,251,0.18)','ic_f_color'=>'#d84bff',

        'marquee_bg'   => 'linear-gradient(135deg,#0d0520 0%,#130a35 40%,#0a1a40 70%,#0d0a2e 100%)',
        'marquee_fade' => '#0d0520',
        'pill_b_bg'=>'rgba(124,58,237,0.2)', 'pill_b_border'=>'rgba(124,58,237,0.35)', 'pill_b_color'=>'#c4b5fd', 'pill_b_icon_bg'=>'rgba(124,58,237,0.3)',
        'pill_c_bg'=>'rgba(249,115,22,0.15)','pill_c_border'=>'rgba(249,115,22,0.3)', 'pill_c_color'=>'#fbbf24', 'pill_c_icon_bg'=>'rgba(249,115,22,0.3)',
        'pill_d_bg'=>'rgba(6,182,212,0.12)', 'pill_d_border'=>'rgba(6,182,212,0.25)', 'pill_d_color'=>'#67e8f9', 'pill_d_icon_bg'=>'rgba(6,182,212,0.2)',
        'pill_e_bg'=>'rgba(16,185,129,0.12)','pill_e_border'=>'rgba(16,185,129,0.25)','pill_e_color'=>'#6ee7b7','pill_e_icon_bg'=>'rgba(16,185,129,0.2)',

        'cta_bg'      => 'linear-gradient(135deg,#0d0520 0%,#130a35 55%,#0a1a40 100%)',
        'cta_radials' => 'radial-gradient(ellipse at 80% 20%,rgba(224,64,251,0.15) 0%,transparent 55%),radial-gradient(ellipse at 15% 80%,rgba(249,115,22,0.1) 0%,transparent 50%)',

        'faq_border'       => 'rgba(124,58,237,0.1)',
        'faq_border_hover' => 'rgba(124,58,237,0.25)',
        'faq_border_open'  => 'rgba(124,58,237,0.35)',
        'faq_shadow_hover' => '0 6px 24px rgba(124,58,237,0.08)',
        'faq_shadow_open'  => '0 8px 32px rgba(124,58,237,0.10)',
        'faq_card_bg'      => 'linear-gradient(145deg,#0d0520 0%,#130a35 55%,#0a1a40 100%)',
        'faq_card_radials' => 'radial-gradient(ellipse at 80% 10%,rgba(124,58,237,0.35) 0%,transparent 60%),radial-gradient(ellipse at 10% 90%,rgba(249,115,22,0.15) 0%,transparent 50%)',
        'faq_orb1'         => 'rgba(124,58,237,0.07)',
        'faq_orb2'         => 'rgba(249,115,22,0.06)',
        'grid_line'        => 'rgba(124,58,237,0.03)',
        'toggle_bg'        => 'rgba(124,58,237,0.06)',
        'toggle_border'    => 'rgba(124,58,237,0.15)',
        'cta_icon_shadow'  => '0 8px 30px rgba(124,58,237,0.4)',
    ],
    'hero' => [
    'badge'     => 'Meta Content Creation Agency That Drives Engagement & Growth',
    'heading'   => 'Meta Content Creation That Builds Brands People Follow',
    'desc'      => 'We create high-performing Meta content for Facebook and Instagram that boosts engagement, grows followers, and turns your audience into loyal customers through creative, scroll-stopping strategies.',
    'cta_label' => 'Get Started',
],

'what' => [
    'img'             => 'meta-content-creation.jpg',
    'img_fallback_bg' => 'linear-gradient(135deg,#f0f8ff,#fff0f8)',

    'badge_icon'      => '<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8"><path d="M4 4h16v16H4z"/><path d="M8 8h8v8H8z"/></svg>',
    'badge_title'     => 'Professional Meta Content',
    'badge_stat'      => 'Engaging content that increases reach, clicks & conversions',

    'label'           => 'What Is Meta Content Creation?',
    'heading'         => 'What is <span class="grad-text">Meta Content Creation?</span>',
    'desc'            => 'Meta content creation is the process of designing and producing engaging content specifically for Facebook and Instagram. It includes posts, reels, stories, captions, and ad creatives that are optimized to increase reach, engagement, and conversions.',

    'checklist'       => [
        'High-impact posts, reels, and stories for Facebook & Instagram',
        'Engaging captions designed to boost likes, shares & comments',
        'Ad creatives optimized for Meta advertising campaigns',
        'Consistent branding across all Meta platforms',
    ],

    'stats' => [
        ['num'=>'5M+','lbl'=>'Impressions Generated'],
        ['num'=>'3x','lbl'=>'Engagement Growth'],
        ['num'=>'100+','lbl'=>'Brands Managed'],
    ],
],

'how' => [
    'label'   => 'Our Process',
    'heading' => 'How We Create<br><span class="grad-text">High-Performing Meta Content</span>',
    'desc'    => 'A strategic and creative workflow that turns your brand into a scroll-stopping presence on Meta platforms.',

    'steps'   => [
        ['title'=>'Brand Understanding', 'desc'=>'We analyze your brand, audience, and goals to define the content direction.'],
        ['title'=>'Content Strategy', 'desc'=>'We plan content types, themes, and posting strategy for maximum reach.'],
        ['title'=>'Creative Production', 'desc'=>'We design posts, reels, stories, and ad creatives with strong visuals and messaging.'],
        ['title'=>'Optimization & Posting', 'desc'=>'We publish and optimize content based on performance insights and trends.'],
    ],
],

'why' => [
    'label'   => 'Why Choose Us?',
    'heading' => 'Why Choose Us for<br><span class="grad-text">Meta Content Creation?</span>',
    'desc'    => 'We don’t just post content—we create engagement-driven experiences that grow your brand on Facebook and Instagram.',

    'cards'   => [
        ['title'=>'Scroll-Stopping Creatives', 'desc'=>'Eye-catching visuals designed to grab attention instantly.'],
        ['title'=>'Engagement Focused', 'desc'=>'Content built to increase likes, comments, shares, and saves.'],
        ['title'=>'Trend Driven Strategy', 'desc'=>'We use latest Meta trends to keep your brand relevant.'],
        ['title'=>'Brand Consistency', 'desc'=>'We maintain a strong and recognizable brand identity across all posts.'],
    ],
],

'offers' => [
    'label'   => 'What We Offer',
    'heading' => 'Complete Meta Content Solutions —<br><span class="grad-text">Designed for Growth</span>',

    'columns' => [
        [
            'label' => 'Content Creation',
            'items' => [
                [
                    'title'=>'Post Design',
                    'desc'=>'Creative and branded posts for Facebook & Instagram feeds.',
                    'ic'=>'ic-a',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="3" width="18" height="18"/><path d="M3 9h18"/></svg>'
                ],
                [
                    'title'=>'Reels Creation',
                    'desc'=>'Short-form video content designed for maximum reach and virality.',
                    'ic'=>'ic-b',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><polygon points="5 3 19 12 5 21 5 3"/></svg>'
                ],
                [
                    'title'=>'Story Content',
                    'desc'=>'Interactive stories that boost daily engagement and visibility.',
                    'ic'=>'ic-c',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="10"/></svg>'
                ],
            ],
        ],
        [
            'label' => 'Growth & Ads',
            'items' => [
                [
                    'title'=>'Meta Ads Creatives',
                    'desc'=>'High-converting ad designs for Facebook & Instagram campaigns.',
                    'ic'=>'ic-d',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M4 12h16"/></svg>'
                ],
                [
                    'title'=>'Engagement Strategy',
                    'desc'=>'Plans designed to increase reach, interaction, and followers.',
                    'ic'=>'ic-e',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 2v20"/></svg>'
                ],
                [
                    'title'=>'Content Calendar',
                    'desc'=>'Structured posting schedule for consistent brand growth.',
                    'ic'=>'ic-f',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="4" width="18" height="18"/></svg>'
                ],
            ],
        ],
    ],
],

'cta' => [
    'label'       => 'Start Your Growth',
    'heading'     => 'Turn Your Social Media Into<br><span class="grad-text">A Growth Machine</span>',
    'desc'        => 'Let’s create Meta content that attracts attention, builds community, and drives real business results.',
    'primary_btn' => 'Get Started',
],

'faq' => [
    'subtitle' => 'Frequently asked questions about Meta Content Creation.',
    'items' => [
        ['q'=>'What platforms do you create Meta content for?', 'a'=>'We create content for Facebook and Instagram including posts, reels, stories, and ads.'],
        ['q'=>'Do you also handle posting?', 'a'=>'Yes, we can manage content scheduling and posting as part of the service.'],
        ['q'=>'Can you increase engagement?', 'a'=>'Yes, our strategies are focused on improving reach, engagement, and follower growth.'],
        ['q'=>'Do you create ad creatives too?', 'a'=>'Yes, we design high-performing creatives for Meta ad campaigns.'],
    ],
],
];


$svc['online-reputation-management-service'] = [
    'name'    => 'online reputation management service',
    'contact' => $_contact,

    'theme' => [
        'grad_main'      => 'linear-gradient(135deg,#ec4899,#f97316)',
        'grad_warm'      => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'grad_secondary' => 'linear-gradient(135deg,#ec4899,#be185d)',
        'grad_tertiary'  => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'accent'         => '#ec4899',
        'accent2'        => '#f97316',

        'hero_bg'        => 'linear-gradient(155deg,#FFF0F8 0%,#FFF5F0 20%,#FFFAF0 40%,#FFF0F5 65%,#F5F0FF 85%,#FDF8FF 100%)',
        'hero_radials'   => 'radial-gradient(ellipse 70% 60% at 10% 45%,rgba(236,72,153,0.12) 0%,transparent 60%),radial-gradient(ellipse 60% 70% at 90% 30%,rgba(249,115,22,0.10) 0%,transparent 55%)',
        'orb1'           => 'rgba(236,72,153,0.10)',
        'orb2'           => 'rgba(249,115,22,0.09)',
        'orb3'           => 'rgba(245,158,11,0.09)',
        'orb4'           => 'rgba(168,85,247,0.09)',
        'badge_border'   => 'rgba(236,72,153,0.18)',
        'badge_shadow'   => '0 4px 16px rgba(236,72,153,0.10)',
        'badge_dot'      => '#f97316',

        'btn_grad'              => 'linear-gradient(135deg,#ec4899,#f97316)',
        'btn_shadow'            => '0 4px 25px rgba(236,72,153,.35)',
        'btn_shadow_hover'      => '0 10px 40px rgba(236,72,153,.5)',
        'btn_warm'              => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'btn_warm_shadow'       => '0 4px 25px rgba(249,115,22,.35)',
        'btn_warm_shadow_hover' => '0 10px 40px rgba(249,115,22,.5)',

        'card_border'       => 'rgba(236,72,153,0.09)',
        'card_border_hover' => 'rgba(236,72,153,0.28)',
        'card_shadow_hover' => '0 24px 60px rgba(236,72,153,.12)',
        'img_shadow'        => '0 30px 80px rgba(236,72,153,0.14)',
        'img_badge_border'  => 'rgba(236,72,153,0.15)',
        'icon_shadow'       => '0 6px 20px rgba(236,72,153,0.3)',
        'stat_border'       => 'rgba(236,72,153,0.09)',
        'stats_shadow'      => '0 4px 20px rgba(236,72,153,0.06)',

        'step_border'        => 'rgba(236,72,153,0.2)',
        'step_shadow'        => '0 8px 30px rgba(236,72,153,0.10)',
        'step_shadow_hover'  => '0 12px 40px rgba(236,72,153,0.35)',
        'connector_line'     => 'linear-gradient(90deg,rgba(236,72,153,0.2),rgba(236,72,153,0.6),rgba(236,72,153,0.2))',

        'section_alt_bg'     => 'linear-gradient(135deg,#fff0f8 0%,#fff8f0 60%,#f5f0ff 100%)',
        'section_alt_radials'=> 'radial-gradient(ellipse at 80% 20%,rgba(236,72,153,0.05) 0%,transparent 50%),radial-gradient(ellipse at 10% 80%,rgba(249,115,22,0.04) 0%,transparent 50%)',

        'col_divider'  => 'rgba(236,72,153,0.12)',
        'item_divider' => 'rgba(236,72,153,0.08)',

        'ic_a_bg'=>'rgba(236,72,153,0.08)','ic_a_border'=>'rgba(236,72,153,0.15)','ic_a_color'=>'#ec4899',
        'ic_b_bg'=>'rgba(249,115,22,0.08)','ic_b_border'=>'rgba(249,115,22,0.18)','ic_b_color'=>'#f97316',
        'ic_c_bg'=>'rgba(168,85,247,0.08)','ic_c_border'=>'rgba(168,85,247,0.18)','ic_c_color'=>'#a855f7',
        'ic_d_bg'=>'rgba(245,158,11,0.08)','ic_d_border'=>'rgba(245,158,11,0.18)','ic_d_color'=>'#f59e0b',
        'ic_e_bg'=>'rgba(6,182,212,0.08)', 'ic_e_border'=>'rgba(6,182,212,0.18)', 'ic_e_color'=>'#06b6d4',
        'ic_f_bg'=>'rgba(16,185,129,0.08)','ic_f_border'=>'rgba(16,185,129,0.18)','ic_f_color'=>'#10b981',

        'marquee_bg'   => 'linear-gradient(135deg,#1a0520 0%,#350a1a 40%,#1a0a20 70%,#200510 100%)',
        'marquee_fade' => '#1a0520',
        'pill_b_bg'=>'rgba(236,72,153,0.2)', 'pill_b_border'=>'rgba(236,72,153,0.35)', 'pill_b_color'=>'#f9a8d4', 'pill_b_icon_bg'=>'rgba(236,72,153,0.3)',
        'pill_c_bg'=>'rgba(249,115,22,0.15)','pill_c_border'=>'rgba(249,115,22,0.3)', 'pill_c_color'=>'#fbbf24', 'pill_c_icon_bg'=>'rgba(249,115,22,0.3)',
        'pill_d_bg'=>'rgba(168,85,247,0.15)','pill_d_border'=>'rgba(168,85,247,0.3)', 'pill_d_color'=>'#d8b4fe', 'pill_d_icon_bg'=>'rgba(168,85,247,0.3)',
        'pill_e_bg'=>'rgba(6,182,212,0.12)', 'pill_e_border'=>'rgba(6,182,212,0.25)', 'pill_e_color'=>'#67e8f9', 'pill_e_icon_bg'=>'rgba(6,182,212,0.2)',

        'cta_bg'      => 'linear-gradient(135deg,#1a0520 0%,#350a1a 55%,#200510 100%)',
        'cta_radials' => 'radial-gradient(ellipse at 80% 20%,rgba(236,72,153,0.2) 0%,transparent 55%),radial-gradient(ellipse at 15% 80%,rgba(249,115,22,0.12) 0%,transparent 50%)',

        'faq_border'       => 'rgba(236,72,153,0.1)',
        'faq_border_hover' => 'rgba(236,72,153,0.25)',
        'faq_border_open'  => 'rgba(236,72,153,0.35)',
        'faq_shadow_hover' => '0 6px 24px rgba(236,72,153,0.08)',
        'faq_shadow_open'  => '0 8px 32px rgba(236,72,153,0.10)',
        'faq_card_bg'      => 'linear-gradient(145deg,#1a0520 0%,#350a1a 55%,#200510 100%)',
        'faq_card_radials' => 'radial-gradient(ellipse at 80% 10%,rgba(236,72,153,0.35) 0%,transparent 60%),radial-gradient(ellipse at 10% 90%,rgba(249,115,22,0.15) 0%,transparent 50%)',
        'faq_orb1'         => 'rgba(236,72,153,0.07)',
        'faq_orb2'         => 'rgba(249,115,22,0.06)',
        'grid_line'        => 'rgba(236,72,153,0.03)',
        'toggle_bg'        => 'rgba(236,72,153,0.06)',
        'toggle_border'    => 'rgba(236,72,153,0.15)',
        'cta_icon_shadow'  => '0 8px 30px rgba(236,72,153,0.4)',
    ],
'hero' => [
    'badge'     => 'Online Reputation Management Service That Protects Your Brand',
    'heading'   => 'Online Reputation Management That Builds Trust & Removes Doubts',
    'desc'      => 'We help you manage, improve, and protect your online reputation through smart monitoring, review management, and brand trust-building strategies that keep your business image strong.',
    'cta_label' => 'Get Started',
],

'what' => [
    'img'             => 'orm-service.jpg',
    'img_fallback_bg' => 'linear-gradient(135deg,#eef6ff,#fff0f5)',

    'badge_icon'      => '<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8"><path d="M12 2l7 4v6c0 5-3 9-7 10C8 21 5 17 5 12V6l7-4z"/></svg>',
    'badge_title'     => 'Trusted ORM Solutions',
    'badge_stat'      => 'Protecting your brand reputation across all digital platforms',

    'label'           => 'What is ORM Service?',
    'heading'         => 'What is <span class="grad-text">Online Reputation Management?</span>',
    'desc'            => 'Online Reputation Management (ORM) is the process of monitoring, improving, and protecting how your brand appears online. It helps you manage reviews, search results, and social mentions to build a strong and trustworthy digital image.',

    'checklist'       => [
        'Monitor reviews, mentions, and brand conversations',
        'Manage negative feedback and protect brand image',
        'Promote positive content and customer trust',
        'Improve search results with reputation marketing strategies',
    ],

    'stats' => [
        ['num'=>'31%','lbl'=>'More Customers from Positive Reviews'],
        ['num'=>'24/7','lbl'=>'Brand Monitoring'],
        ['num'=>'100+','lbl'=>'Brands Protected'],
    ],
],

'how' => [
    'label'   => 'Our Process',
    'heading' => 'How We Protect Your<br><span class="grad-text">Online Reputation</span>',
    'desc'    => 'A proactive system designed to monitor, manage, and improve your brand reputation across all digital channels.',

    'steps'   => [
        ['title'=>'Monitoring', 'desc'=>'We track reviews, social media mentions, and search results in real-time.'],
        ['title'=>'Analysis', 'desc'=>'We identify risks, negative content, and opportunities for improvement.'],
        ['title'=>'Action Plan', 'desc'=>'We respond to reviews, manage feedback, and create positive content.'],
        ['title'=>'Reputation Growth', 'desc'=>'We strengthen your brand image through long-term ORM strategies.'],
    ],
],

'why' => [
    'label'   => 'Why Choose Us?',
    'heading' => 'Why Choose Us for<br><span class="grad-text">ORM Services?</span>',
    'desc'    => 'We don’t just manage reputation—we protect and strengthen your brand identity online.',

    'cards'   => [
        ['title'=>'Fast Response', 'desc'=>'We handle negative feedback quickly before it spreads.'],
        ['title'=>'Brand Protection', 'desc'=>'We protect your digital identity across all platforms.'],
        ['title'=>'Positive Visibility', 'desc'=>'We promote positive content to improve your image.'],
        ['title'=>'Transparent Reporting', 'desc'=>'You get clear updates on reputation performance.'],
    ],
],

'offers' => [
    'label'   => 'What We Offer',
    'heading' => 'Complete Online Reputation Solutions —<br><span class="grad-text">Protect & Grow Your Brand</span>',

    'columns' => [
        [
            'label' => 'Reputation Protection',
            'items' => [
                [
                    'title'=>'Review Monitoring',
                    'desc'=>'Track customer reviews across Google, social media, and platforms.',
                    'ic'=>'ic-a',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="10"/><path d="M8 12l2 2 4-4"/></svg>'
                ],
                [
                    'title'=>'Crisis Management',
                    'desc'=>'Quick response strategies to control and reduce negative impact.',
                    'ic'=>'ic-b',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 2v20"/><path d="M2 12h20"/></svg>'
                ],
                [
                    'title'=>'Negative Content Removal',
                    'desc'=>'Reduce visibility of harmful or irrelevant search results.',
                    'ic'=>'ic-c',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><line x1="4" y1="4" x2="20" y2="20"/></svg>'
                ],
            ],
        ],
        [
            'label' => 'Brand Growth',
            'items' => [
                [
                    'title'=>'Positive Branding',
                    'desc'=>'Promote positive stories and strengthen your online identity.',
                    'ic'=>'ic-d',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 2l3 7h7l-5.5 4 2 7L12 16l-6.5 4 2-7L2 9h7z"/></svg>'
                ],
                [
                    'title'=>'Social Media Monitoring',
                    'desc'=>'Track mentions and engagement across all social platforms.',
                    'ic'=>'ic-e',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="3"/></svg>'
                ],
                [
                    'title'=>'Reputation Strategy',
                    'desc'=>'Long-term planning to build and maintain strong trust.',
                    'ic'=>'ic-f',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 3l18 18"/></svg>'
                ],
            ],
        ],
    ],
],

'cta' => [
    'label'       => 'Protect Your Brand Today',
    'heading'     => 'Your Reputation Is Your<br><span class="grad-text">Biggest Asset</span>',
    'desc'        => 'Let’s build a strong, trusted, and positive online presence for your brand.',
    'primary_btn' => 'Get Started',
],

'faq' => [
    'subtitle' => 'Frequently asked questions about Online Reputation Management.',
    'items' => [
        ['q'=>'What is online reputation management?', 'a'=>'It is the process of monitoring and improving how your brand appears online.'],
        ['q'=>'Can you remove negative reviews?', 'a'=>'We cannot always remove them, but we can reduce their impact and promote positives.'],
        ['q'=>'How long does ORM take?', 'a'=>'It depends on the situation, but improvements are usually seen within weeks.'],
        ['q'=>'Is ORM suitable for small businesses?', 'a'=>'Yes, businesses of all sizes need reputation protection and trust building.'],
    ],
],
];

$svc['graphic-designing-services'] = [
    'name'    => 'graphic designing services',
    'contact' => $_contact,

     'theme' => [
        'grad_main'      => 'linear-gradient(135deg,#7c3aed,#d84bff)',
        'grad_warm'      => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'grad_secondary' => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'grad_tertiary'  => 'linear-gradient(135deg,#06b6d4,#0284c7)',
        'accent'         => '#7c3aed',
        'accent2'        => '#f97316',

        'hero_bg'        => 'linear-gradient(155deg,#F0E8FF 0%,#F8F0FF 20%,#FFF0FA 40%,#FFF4F0 65%,#FFF9F0 85%,#FDF8FF 100%)',
        'hero_radials'   => 'radial-gradient(ellipse 70% 60% at 10% 45%,rgba(123,77,255,0.14) 0%,transparent 60%),radial-gradient(ellipse 60% 70% at 90% 30%,rgba(216,91,255,0.12) 0%,transparent 55%),radial-gradient(ellipse 55% 60% at 50% 95%,rgba(255,154,87,0.10) 0%,transparent 60%)',
        'orb1'           => 'rgba(123,77,255,0.10)',
        'orb2'           => 'rgba(216,91,255,0.09)',
        'orb3'           => 'rgba(255,154,87,0.10)',
        'orb4'           => 'rgba(255,111,181,0.10)',
        'badge_border'   => 'rgba(123,77,255,0.18)',
        'badge_shadow'   => '0 4px 16px rgba(123,77,255,0.10)',
        'badge_dot'      => '#f97316',

        'btn_grad'             => 'linear-gradient(135deg,#7c3aed,#d84bff)',
        'btn_shadow'           => '0 4px 25px rgba(124,58,237,.35)',
        'btn_shadow_hover'     => '0 10px 40px rgba(124,58,237,.5)',
        'btn_warm'             => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'btn_warm_shadow'      => '0 4px 25px rgba(249,115,22,.35)',
        'btn_warm_shadow_hover'=> '0 10px 40px rgba(249,115,22,.5)',

        'card_border'       => 'rgba(124,58,237,0.09)',
        'card_border_hover' => 'rgba(124,58,237,0.28)',
        'card_shadow_hover' => '0 24px 60px rgba(124,58,237,.12)',
        'img_shadow'        => '0 30px 80px rgba(124,58,237,0.14)',
        'img_badge_border'  => 'rgba(124,58,237,0.15)',
        'icon_shadow'       => '0 6px 20px rgba(124,58,237,0.3)',
        'stat_border'       => 'rgba(124,58,237,0.09)',
        'stats_shadow'      => '0 4px 20px rgba(124,58,237,0.06)',

        'step_border'        => 'rgba(124,58,237,0.2)',
        'step_shadow'        => '0 8px 30px rgba(124,58,237,0.10)',
        'step_shadow_hover'  => '0 12px 40px rgba(124,58,237,0.35)',
        'connector_line'     => 'linear-gradient(90deg,rgba(124,58,237,0.2),rgba(124,58,237,0.6),rgba(124,58,237,0.2))',

        'section_alt_bg'     => 'linear-gradient(135deg,#fdf8ff 0%,#fff8f0 60%,#f0f9ff 100%)',
        'section_alt_radials'=> 'radial-gradient(ellipse at 80% 20%,rgba(224,64,251,0.05) 0%,transparent 50%),radial-gradient(ellipse at 10% 80%,rgba(249,115,22,0.04) 0%,transparent 50%)',

        'col_divider'  => 'rgba(124,58,237,0.12)',
        'item_divider' => 'rgba(124,58,237,0.08)',

        'ic_a_bg'=>'rgba(124,58,237,0.08)','ic_a_border'=>'rgba(124,58,237,0.15)','ic_a_color'=>'#7c3aed',
        'ic_b_bg'=>'rgba(245,158,11,0.08)','ic_b_border'=>'rgba(245,158,11,0.18)','ic_b_color'=>'#d97706',
        'ic_c_bg'=>'rgba(6,182,212,0.08)', 'ic_c_border'=>'rgba(6,182,212,0.18)', 'ic_c_color'=>'#06b6d4',
        'ic_d_bg'=>'rgba(249,115,22,0.08)','ic_d_border'=>'rgba(249,115,22,0.18)','ic_d_color'=>'#f97316',
        'ic_e_bg'=>'rgba(16,185,129,0.08)','ic_e_border'=>'rgba(16,185,129,0.18)','ic_e_color'=>'#10b981',
        'ic_f_bg'=>'rgba(224,64,251,0.08)','ic_f_border'=>'rgba(224,64,251,0.18)','ic_f_color'=>'#d84bff',

        'marquee_bg'   => 'linear-gradient(135deg,#0d0520 0%,#130a35 40%,#0a1a40 70%,#0d0a2e 100%)',
        'marquee_fade' => '#0d0520',
        'pill_b_bg'=>'rgba(124,58,237,0.2)', 'pill_b_border'=>'rgba(124,58,237,0.35)', 'pill_b_color'=>'#c4b5fd', 'pill_b_icon_bg'=>'rgba(124,58,237,0.3)',
        'pill_c_bg'=>'rgba(249,115,22,0.15)','pill_c_border'=>'rgba(249,115,22,0.3)', 'pill_c_color'=>'#fbbf24', 'pill_c_icon_bg'=>'rgba(249,115,22,0.3)',
        'pill_d_bg'=>'rgba(6,182,212,0.12)', 'pill_d_border'=>'rgba(6,182,212,0.25)', 'pill_d_color'=>'#67e8f9', 'pill_d_icon_bg'=>'rgba(6,182,212,0.2)',
        'pill_e_bg'=>'rgba(16,185,129,0.12)','pill_e_border'=>'rgba(16,185,129,0.25)','pill_e_color'=>'#6ee7b7','pill_e_icon_bg'=>'rgba(16,185,129,0.2)',

        'cta_bg'      => 'linear-gradient(135deg,#0d0520 0%,#130a35 55%,#0a1a40 100%)',
        'cta_radials' => 'radial-gradient(ellipse at 80% 20%,rgba(224,64,251,0.15) 0%,transparent 55%),radial-gradient(ellipse at 15% 80%,rgba(249,115,22,0.1) 0%,transparent 50%)',

        'faq_border'       => 'rgba(124,58,237,0.1)',
        'faq_border_hover' => 'rgba(124,58,237,0.25)',
        'faq_border_open'  => 'rgba(124,58,237,0.35)',
        'faq_shadow_hover' => '0 6px 24px rgba(124,58,237,0.08)',
        'faq_shadow_open'  => '0 8px 32px rgba(124,58,237,0.10)',
        'faq_card_bg'      => 'linear-gradient(145deg,#0d0520 0%,#130a35 55%,#0a1a40 100%)',
        'faq_card_radials' => 'radial-gradient(ellipse at 80% 10%,rgba(124,58,237,0.35) 0%,transparent 60%),radial-gradient(ellipse at 10% 90%,rgba(249,115,22,0.15) 0%,transparent 50%)',
        'faq_orb1'         => 'rgba(124,58,237,0.07)',
        'faq_orb2'         => 'rgba(249,115,22,0.06)',
        'grid_line'        => 'rgba(124,58,237,0.03)',
        'toggle_bg'        => 'rgba(124,58,237,0.06)',
        'toggle_border'    => 'rgba(124,58,237,0.15)',
        'cta_icon_shadow'  => '0 8px 30px rgba(124,58,237,0.4)',
    ],
    'hero' => [
    'badge'     => 'Graphic Designing Services That Make Brands Stand Out',
    'heading'   => 'Creative Graphic Designing That Brings Your Brand to Life',
    'desc'      => 'We design powerful, creative, and eye-catching visuals that help your brand stand out, build trust, and connect with your audience across digital and print platforms.',
    'cta_label' => 'Get Started',
],

'what' => [
    'img'             => 'graphic-designing.jpg',
    'img_fallback_bg' => 'linear-gradient(135deg,#fff7f0,#f0f8ff)',

    'badge_icon'      => '<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8"><path d="M12 2l3 7 7 3-7 3-3 7-3-7-7-3 7-3z"/></svg>',
    'badge_title'     => 'Professional Graphic Design',
    'badge_stat'      => 'Creative visuals that increase engagement & brand trust',

    'label'           => 'What Are Graphic Designing Services?',
    'heading'         => 'What is <span class="grad-text">Graphic Designing?</span>',
    'desc'            => 'Graphic designing is the art of creating visual content like logos, banners, social media posts, and marketing materials that communicate your brand message clearly and effectively.',

    'checklist'       => [
        'Creative logo & brand identity design',
        'Social media graphics & ad creatives',
        'Marketing materials like brochures & flyers',
        'UI/UX and website visual design support',
    ],

    'stats' => [
        ['num'=>'1000+','lbl'=>'Designs Created'],
        ['num'=>'5x','lbl'=>'Higher Engagement'],
        ['num'=>'200+','lbl'=>'Brands Designed'],
    ],
],

'how' => [
    'label'   => 'Our Process',
    'heading' => 'How We Create<br><span class="grad-text">Impactful Designs</span>',
    'desc'    => 'A simple creative workflow that transforms your ideas into powerful visuals that represent your brand.',

    'steps'   => [
        ['title'=>'Understanding Brand', 'desc'=>'We study your brand, audience, and goals before designing anything.'],
        ['title'=>'Creative Concept', 'desc'=>'We develop unique design ideas aligned with your identity.'],
        ['title'=>'Design Execution', 'desc'=>'We create high-quality visuals using modern design tools and trends.'],
        ['title'=>'Refinement & Delivery', 'desc'=>'We finalize, polish, and deliver ready-to-use design assets.'],
    ],
],

'why' => [
    'label'   => 'Why Choose Us?',
    'heading' => 'Why Choose Our<br><span class="grad-text">Graphic Designing Services?</span>',
    'desc'    => 'We don’t just design—we create visuals that communicate, convert, and build brand identity.',

    'cards'   => [
        ['title'=>'Creative Excellence', 'desc'=>'Unique, modern, and high-quality design work for every project.'],
        ['title'=>'Brand-Focused Design', 'desc'=>'Every visual is aligned with your brand identity and goals.'],
        ['title'=>'Multi-Platform Designs', 'desc'=>'Perfect for digital, social media, and print use.'],
        ['title'=>'Affordable Packages', 'desc'=>'Cost-effective solutions for startups and growing businesses.'],
    ],
],

'offers' => [
    'label'   => 'What We Offer',
    'heading' => 'Complete Graphic Design Solutions —<br><span class="grad-text">Built for Brands That Stand Out</span>',

    'columns' => [
        [
            'label' => 'Brand Identity',
            'items' => [
                [
                    'title'=>'Logo Design',
                    'desc'=>'Modern, memorable, and professional logo creation for your brand.',
                    'ic'=>'ic-a',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 2l3 7 7 3-7 3-3 7-3-7-7-3 7-3z"/></svg>'
                ],
                [
                    'title'=>'Brand Identity Kit',
                    'desc'=>'Complete brand identity including colors, fonts, and style guides.',
                    'ic'=>'ic-b',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="4" y="4" width="16" height="16"/></svg>'
                ],
                [
                    'title'=>'Business Stationery',
                    'desc'=>'Professional visiting cards, letterheads, and brand assets.',
                    'ic'=>'ic-c',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M4 7h16M4 12h16M4 17h10"/></svg>'
                ],
            ],
        ],
        [
            'label' => 'Marketing Design',
            'items' => [
                [
                    'title'=>'Social Media Posts',
                    'desc'=>'Engaging posts designed for Instagram, Facebook, and more.',
                    'ic'=>'ic-d',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="3" width="18" height="18"/></svg>'
                ],
                [
                    'title'=>'Ad Creatives',
                    'desc'=>'High-converting designs that capture attention instantly.',
                    'ic'=>'ic-e',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><polygon points="5 3 19 12 5 21 5 3"/></svg>'
                ],
                [
                    'title'=>'Print Design',
                    'desc'=>'Flyers, brochures, banners, and promotional materials.',
                    'ic'=>'ic-f',
                    'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="4" y="4" width="16" height="12"/></svg>'
                ],
            ],
        ],
    ],
],

'cta' => [
    'label'       => 'Start Designing Today',
    'heading'     => 'Turn Your Ideas Into<br><span class="grad-text">Powerful Visuals</span>',
    'desc'        => 'Let’s create designs that make your brand unforgettable and visually strong.',
    'primary_btn' => 'Get Started',
],

'faq' => [
    'subtitle' => 'Frequently asked questions about Graphic Designing Services.',
    'items' => [
        ['q'=>'What do graphic designing services include?', 'a'=>'They include logo design, branding, social media graphics, ads, and marketing visuals.'],
        ['q'=>'Do you design for both digital and print?', 'a'=>'Yes, we create designs for both online platforms and print materials.'],
        ['q'=>'Can you redesign my existing brand?', 'a'=>'Yes, we can refresh or completely redesign your brand identity.'],
        ['q'=>'Do you offer affordable packages?', 'a'=>'Yes, we provide flexible and affordable graphic design packages for all businesses.'],
    ],
],
];

$svc['ui-ux-design'] = [
    'name'    => 'ui/ux design',
    'contact' => $_contact,

    'theme' => [
        'grad_main'      => 'linear-gradient(135deg,#ec4899,#f97316)',
        'grad_warm'      => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'grad_secondary' => 'linear-gradient(135deg,#ec4899,#be185d)',
        'grad_tertiary'  => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'accent'         => '#ec4899',
        'accent2'        => '#f97316',

        'hero_bg'        => 'linear-gradient(155deg,#FFF0F8 0%,#FFF5F0 20%,#FFFAF0 40%,#FFF0F5 65%,#F5F0FF 85%,#FDF8FF 100%)',
        'hero_radials'   => 'radial-gradient(ellipse 70% 60% at 10% 45%,rgba(236,72,153,0.12) 0%,transparent 60%),radial-gradient(ellipse 60% 70% at 90% 30%,rgba(249,115,22,0.10) 0%,transparent 55%)',
        'orb1'           => 'rgba(236,72,153,0.10)',
        'orb2'           => 'rgba(249,115,22,0.09)',
        'orb3'           => 'rgba(245,158,11,0.09)',
        'orb4'           => 'rgba(168,85,247,0.09)',
        'badge_border'   => 'rgba(236,72,153,0.18)',
        'badge_shadow'   => '0 4px 16px rgba(236,72,153,0.10)',
        'badge_dot'      => '#f97316',

        'btn_grad'              => 'linear-gradient(135deg,#ec4899,#f97316)',
        'btn_shadow'            => '0 4px 25px rgba(236,72,153,.35)',
        'btn_shadow_hover'      => '0 10px 40px rgba(236,72,153,.5)',
        'btn_warm'              => 'linear-gradient(135deg,#f97316,#f59e0b)',
        'btn_warm_shadow'       => '0 4px 25px rgba(249,115,22,.35)',
        'btn_warm_shadow_hover' => '0 10px 40px rgba(249,115,22,.5)',

        'card_border'       => 'rgba(236,72,153,0.09)',
        'card_border_hover' => 'rgba(236,72,153,0.28)',
        'card_shadow_hover' => '0 24px 60px rgba(236,72,153,.12)',
        'img_shadow'        => '0 30px 80px rgba(236,72,153,0.14)',
        'img_badge_border'  => 'rgba(236,72,153,0.15)',
        'icon_shadow'       => '0 6px 20px rgba(236,72,153,0.3)',
        'stat_border'       => 'rgba(236,72,153,0.09)',
        'stats_shadow'      => '0 4px 20px rgba(236,72,153,0.06)',

        'step_border'        => 'rgba(236,72,153,0.2)',
        'step_shadow'        => '0 8px 30px rgba(236,72,153,0.10)',
        'step_shadow_hover'  => '0 12px 40px rgba(236,72,153,0.35)',
        'connector_line'     => 'linear-gradient(90deg,rgba(236,72,153,0.2),rgba(236,72,153,0.6),rgba(236,72,153,0.2))',

        'section_alt_bg'     => 'linear-gradient(135deg,#fff0f8 0%,#fff8f0 60%,#f5f0ff 100%)',
        'section_alt_radials'=> 'radial-gradient(ellipse at 80% 20%,rgba(236,72,153,0.05) 0%,transparent 50%),radial-gradient(ellipse at 10% 80%,rgba(249,115,22,0.04) 0%,transparent 50%)',

        'col_divider'  => 'rgba(236,72,153,0.12)',
        'item_divider' => 'rgba(236,72,153,0.08)',

        'ic_a_bg'=>'rgba(236,72,153,0.08)','ic_a_border'=>'rgba(236,72,153,0.15)','ic_a_color'=>'#ec4899',
        'ic_b_bg'=>'rgba(249,115,22,0.08)','ic_b_border'=>'rgba(249,115,22,0.18)','ic_b_color'=>'#f97316',
        'ic_c_bg'=>'rgba(168,85,247,0.08)','ic_c_border'=>'rgba(168,85,247,0.18)','ic_c_color'=>'#a855f7',
        'ic_d_bg'=>'rgba(245,158,11,0.08)','ic_d_border'=>'rgba(245,158,11,0.18)','ic_d_color'=>'#f59e0b',
        'ic_e_bg'=>'rgba(6,182,212,0.08)', 'ic_e_border'=>'rgba(6,182,212,0.18)', 'ic_e_color'=>'#06b6d4',
        'ic_f_bg'=>'rgba(16,185,129,0.08)','ic_f_border'=>'rgba(16,185,129,0.18)','ic_f_color'=>'#10b981',

        'marquee_bg'   => 'linear-gradient(135deg,#1a0520 0%,#350a1a 40%,#1a0a20 70%,#200510 100%)',
        'marquee_fade' => '#1a0520',
        'pill_b_bg'=>'rgba(236,72,153,0.2)', 'pill_b_border'=>'rgba(236,72,153,0.35)', 'pill_b_color'=>'#f9a8d4', 'pill_b_icon_bg'=>'rgba(236,72,153,0.3)',
        'pill_c_bg'=>'rgba(249,115,22,0.15)','pill_c_border'=>'rgba(249,115,22,0.3)', 'pill_c_color'=>'#fbbf24', 'pill_c_icon_bg'=>'rgba(249,115,22,0.3)',
        'pill_d_bg'=>'rgba(168,85,247,0.15)','pill_d_border'=>'rgba(168,85,247,0.3)', 'pill_d_color'=>'#d8b4fe', 'pill_d_icon_bg'=>'rgba(168,85,247,0.3)',
        'pill_e_bg'=>'rgba(6,182,212,0.12)', 'pill_e_border'=>'rgba(6,182,212,0.25)', 'pill_e_color'=>'#67e8f9', 'pill_e_icon_bg'=>'rgba(6,182,212,0.2)',

        'cta_bg'      => 'linear-gradient(135deg,#1a0520 0%,#350a1a 55%,#200510 100%)',
        'cta_radials' => 'radial-gradient(ellipse at 80% 20%,rgba(236,72,153,0.2) 0%,transparent 55%),radial-gradient(ellipse at 15% 80%,rgba(249,115,22,0.12) 0%,transparent 50%)',

        'faq_border'       => 'rgba(236,72,153,0.1)',
        'faq_border_hover' => 'rgba(236,72,153,0.25)',
        'faq_border_open'  => 'rgba(236,72,153,0.35)',
        'faq_shadow_hover' => '0 6px 24px rgba(236,72,153,0.08)',
        'faq_shadow_open'  => '0 8px 32px rgba(236,72,153,0.10)',
        'faq_card_bg'      => 'linear-gradient(145deg,#1a0520 0%,#350a1a 55%,#200510 100%)',
        'faq_card_radials' => 'radial-gradient(ellipse at 80% 10%,rgba(236,72,153,0.35) 0%,transparent 60%),radial-gradient(ellipse at 10% 90%,rgba(249,115,22,0.15) 0%,transparent 50%)',
        'faq_orb1'         => 'rgba(236,72,153,0.07)',
        'faq_orb2'         => 'rgba(249,115,22,0.06)',
        'grid_line'        => 'rgba(236,72,153,0.03)',
        'toggle_bg'        => 'rgba(236,72,153,0.06)',
        'toggle_border'    => 'rgba(236,72,153,0.15)',
        'cta_icon_shadow'  => '0 8px 30px rgba(236,72,153,0.4)',
    ],


    'hero' => [
        'badge'     => 'UI/UX Service That Delivers Seamless User Experiences',
        'heading'   => 'UI/UX Service That Delivers Seamless User Experiences',
        'desc'      => 'Our UI/UX service ensures every interaction is intuitive, engaging, and conversion-focused. We transform complex ideas into simple, user-friendly digital experiences that people love to use.',
        'cta_label' => 'Get Started',
    ],

    'what' => [
        'img'             => 'uiux-service.jpg',
        'img_fallback_bg' => 'linear-gradient(135deg,#eef7ff,#f7f7ff)',

        'badge_icon'      => '<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8"><rect x="3" y="4" width="18" height="14" rx="2"/><path d="M7 20h10"/></svg>',
        'badge_title'     => 'User-Centered Design',
        'badge_stat'      => 'Designs focused on usability, clarity & engagement',

        'label'           => 'What We Do',
        'heading'         => 'What is <span class="grad-text">UI/UX Design?</span>',
        'desc'            => 'UI/UX design is the process of creating digital experiences that are visually appealing, easy to navigate, and highly functional. We focus on how users interact with your product to make every journey smooth and meaningful.',

        'checklist'       => [
            'Clean and modern UI design for websites and apps',
            'User experience flows that improve engagement',
            'Interactive prototypes and wireframes',
            'Mobile-first and responsive design systems',
        ],

        'stats' => [
            ['num'=>'200+','lbl'=>'Projects Designed'],
            ['num'=>'4x','lbl'=>'Better User Retention'],
            ['num'=>'15+','lbl'=>'UI/UX Experts'],
        ],
    ],

    'how' => [
        'label'   => 'Our Process',
        'heading' => 'How We Create<br><span class="grad-text">Seamless User Experiences</span>',
        'desc'    => 'A structured design process that turns ideas into intuitive and high-performing digital products.',

        'steps'   => [
            ['title'=>'Research & Analysis', 'desc'=>'We understand your users, goals, and competitors to define the right experience.'],
            ['title'=>'Wireframing', 'desc'=>'We create layout structures that map user journeys and interactions.'],
            ['title'=>'UI Design', 'desc'=>'We design clean, modern interfaces that reflect your brand identity.'],
            ['title'=>'Testing & Refinement', 'desc'=>'We refine designs based on usability and feedback for perfect results.'],
        ],
    ],

    'why' => [
        'label'   => 'Why Choose Us?',
        'heading' => 'Why Choose Our<br><span class="grad-text">UI/UX Service?</span>',
        'desc'    => 'We design experiences that don’t just look good—they feel natural, intuitive, and drive real results.',

        'cards'   => [
            ['title'=>'User-Centered Design', 'desc'=>'Every design decision is based on real user behavior and needs.'],
            ['title'=>'Conversion Focused', 'desc'=>'We design interfaces that guide users toward action and results.'],
            ['title'=>'Consistent Experience', 'desc'=>'Unified design across web, mobile, and platforms.'],
            ['title'=>'Modern UI Standards', 'desc'=>'Clean, scalable, and future-ready design systems.'],
        ],
    ],

    'offers' => [
        'label'   => 'What We Offer',
        'heading' => 'Complete UI/UX Solutions —<br><span class="grad-text">Designs That Work Everywhere</span>',

        'columns' => [
            [
                'label' => 'Design Services',
                'items' => [
                    [
                        'title'=>'Website UI/UX',
                        'desc'=>'User-friendly website designs that improve engagement and conversions.',
                        'ic'=>'ic-a',
                        'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="4" width="18" height="14" rx="2"/></svg>'
                    ],
                    [
                        'title'=>'App UI/UX',
                        'desc'=>'Smooth mobile app experiences for iOS and Android platforms.',
                        'ic'=>'ic-b',
                        'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="7" y="2" width="10" height="20" rx="2"/></svg>'
                    ],
                    [
                        'title'=>'Wireframes & Prototypes',
                        'desc'=>'Interactive prototypes to visualize and test ideas before development.',
                        'ic'=>'ic-c',
                        'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M4 4h16v16H4z"/></svg>'
                    ],
                ],
            ],
            [
                'label' => 'Experience Design',
                'items' => [
                    [
                        'title'=>'User Flow Design',
                        'desc'=>'Seamless journeys that guide users step by step.',
                        'ic'=>'ic-d',
                        'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 12h18"/></svg>'
                    ],
                    [
                        'title'=>'Dashboard Design',
                        'desc'=>'Clean, structured dashboards for better data understanding.',
                        'ic'=>'ic-e',
                        'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="3" width="7" height="18"/><rect x="14" y="8" width="7" height="13"/></svg>'
                    ],
                    [
                        'title'=>'E-commerce UX',
                        'desc'=>'Optimized shopping experiences that increase sales.',
                        'ic'=>'ic-f',
                        'icon'=>'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M6 6h15l-1 9H7z"/></svg>'
                    ],
                ],
            ],
        ],
    ],

    'cta' => [
        'label'       => 'Start Now',
        'heading'     => 'Design Experiences Users Love to Use',
        'desc'        => 'Let’s turn your idea into a smooth, intuitive and powerful digital experience.',
        'primary_btn' => 'Get Started',
    ],

    'faq' => [
        'subtitle' => 'Let’s answer your questions about UI/UX design.',
        'items' => [
            ['q'=>'What is UI/UX design?', 'a'=>'It’s the process of designing user-friendly digital experiences that are easy, clear, and engaging.'],
            ['q'=>'Do you design apps and websites?', 'a'=>'Yes, we design UI/UX for websites, mobile apps, dashboards, and more.'],
            ['q'=>'Why is UI/UX important?', 'a'=>'Good design improves user satisfaction, engagement, and conversions.'],
            ['q'=>'Do you provide prototypes?', 'a'=>'Yes, we create wireframes and interactive prototypes before final design.'],
        ],
    ],
];