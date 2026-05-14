<?php
/**
 * Testimonials Section — Virex Social
 * Path: includes/testimonials-section.php
 * Usage: <?php include 'includes/testimonials-section.php'; ?>
 * Renders automatically on include — no function call needed.
 */

$_testimonials = [
    [
        'featured' => true,
        'name'     => 'Ahmed Khan',
        'role'     => 'CEO, TechBrand UAE',
        'image'    => 'assets/img/profile1.png',
        'stars'    => 5,
        'text'     => 'Working with Virex Social was one of the best decisions we made. Their team is responsive, innovative, and truly understands what works in the digital space. From our Meta Ads campaigns to full content strategy — everything was handled professionally and the results speak for themselves. Our brand awareness grew by 3x in just 4 months.',
        'tags'     => [
            ['label' => 'Meta Ads',        'class' => 'tag-purple', 'icon' => 'meta'],
            ['label' => 'Growth Strategy', 'class' => 'tag-teal',   'icon' => 'chart'],
            ['label' => 'Top Rated',       'class' => 'tag-orange', 'icon' => 'star'],
        ],
        'date'     => 'March 2025',
        'platform' => 'Facebook',
    ],
    [
        'featured' => false,
        'name'     => 'Sara Rizwan',
        'role'     => 'Marketing Manager, Luxe Co',
        'image'    => 'assets/img/profile2.png',
        'stars'    => 5,
        'text'     => "We saw amazing results within weeks. Targeted campaigns, creative strategies, expert support. Their SEO work alone doubled our organic traffic. They're our go-to agency — period.",
        'tags'     => [
            ['label' => 'SEO',         'class' => 'tag-green', 'icon' => 'search'],
            ['label' => 'Client Fave', 'class' => 'tag-pink',  'icon' => 'heart'],
        ],
        'date'     => 'January 2025',
        'platform' => 'Google',
    ],
    [
        'featured' => false,
        'name'     => 'Michael John',
        'role'     => 'Founder, StartupX',
        'image'    => 'assets/img/profile3.png',
        'stars'    => 5,
        'text'     => "Professional, fast, and effective. Virex Social helped us grow online and become more visible. Website development and content creation team are top tier. Easily the best agency we've worked with.",
        'tags'     => [
            ['label' => 'Web Dev', 'class' => 'tag-teal',   'icon' => 'monitor'],
            ['label' => 'Content', 'class' => 'tag-purple', 'icon' => 'edit'],
        ],
        'date'     => 'February 2025',
        'platform' => 'LinkedIn',
    ],
    [
        'featured' => false,
        'name'     => 'Layla Hassan',
        'role'     => 'Brand Director, Luxora',
        'image'    => 'assets/img/profile4.png',
        'stars'    => 5,
        'text'     => 'The video editing and Snapchat management they did for us transformed our brand voice completely. Our Snapchat following grew by 40K in 3 months. Absolutely phenomenal team and results.',
        'tags'     => [
            ['label' => 'Video Editing', 'class' => 'tag-pink',   'icon' => 'video'],
            ['label' => 'Snapchat',      'class' => 'tag-orange', 'icon' => 'message'],
        ],
        'date'     => 'April 2025',
        'platform' => 'Instagram',
    ],
    [
        'featured' => false,
        'name'     => 'Omar Al Farsi',
        'role'     => 'Owner, RealEstate Pro Dubai',
        'image'    => 'assets/img/profile5.png',
        'stars'    => 4.5,
        'text'     => 'I was skeptical about digital marketing but Virex Social proved me wrong. Our leads went from 10 a month to 80+ through their targeted Google and Meta campaigns. Worth every dirham.',
        'tags'     => [
            ['label' => 'Lead Gen', 'class' => 'tag-purple', 'icon' => 'trending'],
            ['label' => 'Paid Ads', 'class' => 'tag-orange', 'icon' => 'share'],
        ],
        'date'     => 'May 2025',
        'platform' => 'Google',
    ],
];

$_tag_icons = [
    'meta'     => '<svg viewBox="0 0 24 24" style="width:11px;height:11px;fill:none;stroke:currentColor;stroke-width:2"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>',
    'chart'    => '<svg viewBox="0 0 24 24" style="width:11px;height:11px;fill:none;stroke:currentColor;stroke-width:2"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>',
    'star'     => '<svg viewBox="0 0 24 24" style="width:11px;height:11px;fill:none;stroke:currentColor;stroke-width:2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
    'search'   => '<svg viewBox="0 0 24 24" style="width:11px;height:11px;fill:none;stroke:currentColor;stroke-width:2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>',
    'heart'    => '<svg viewBox="0 0 24 24" style="width:11px;height:11px;fill:none;stroke:currentColor;stroke-width:2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>',
    'monitor'  => '<svg viewBox="0 0 24 24" style="width:11px;height:11px;fill:none;stroke:currentColor;stroke-width:2"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/></svg>',
    'edit'     => '<svg viewBox="0 0 24 24" style="width:11px;height:11px;fill:none;stroke:currentColor;stroke-width:2"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>',
    'video'    => '<svg viewBox="0 0 24 24" style="width:11px;height:11px;fill:none;stroke:currentColor;stroke-width:2"><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2"/></svg>',
    'message'  => '<svg viewBox="0 0 24 24" style="width:11px;height:11px;fill:none;stroke:currentColor;stroke-width:2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>',
    'trending' => '<svg viewBox="0 0 24 24" style="width:11px;height:11px;fill:none;stroke:currentColor;stroke-width:2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/></svg>',
    'share'    => '<svg viewBox="0 0 24 24" style="width:11px;height:11px;fill:none;stroke:currentColor;stroke-width:2"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>',
];

$_platform_icons = [
    'Facebook'  => '<svg viewBox="0 0 24 24" style="width:14px;height:14px" fill="#1877f2"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>',
    'Google'    => '<svg viewBox="0 0 24 24" fill="none" style="width:14px;height:14px" stroke="rgba(255,255,255,0.3)" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M8.56 2.75c4.37 6.03 6.02 9.42 8.03 17.72m2.54-15.38c-3.72 4.35-8.94 5.66-16.88 5.85m19.5 1.9c-3.5-.93-6.63-.82-8.94 0-2.58.92-5.01 2.86-7.44 6.32"/></svg>',
    'LinkedIn'  => '<svg viewBox="0 0 24 24" fill="none" style="width:14px;height:14px" stroke="rgba(255,255,255,0.3)" stroke-width="1.5"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>',
    'Instagram' => '<svg viewBox="0 0 24 24" fill="none" style="width:14px;height:14px" stroke="rgba(255,255,255,0.3)" stroke-width="1.5"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>',
];

function _testi_stars(float $count, string $size = '14px'): string {
    $full  = '<svg viewBox="0 0 24 24" style="width:'.$size.';height:'.$size.';fill:#fbbf24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>';
    $half  = '<svg viewBox="0 0 24 24" style="width:'.$size.';height:'.$size.';fill:url(#halfStarGrad)"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>';
    $out = '';
    for ($i = 1; $i <= 5; $i++) {
        $out .= ($count >= $i) ? $full : (($count >= $i - 0.5) ? $half : '');
    }
    return $out;
}
?>
<link rel="stylesheet" href="assets/css/testimonals.css">
<section class="testimonials-section">
    <div class="testi-orb testi-orb-1"></div>
    <div class="testi-orb testi-orb-2"></div>
    <div class="testi-orb testi-orb-3"></div>
    <div class="testi-dots-bg"></div>

    <svg width="0" height="0" style="position:absolute">
        <defs>
            <linearGradient id="halfStarGrad" x1="0" y1="0" x2="1" y2="0">
                <stop offset="50%" stop-color="#fbbf24"/>
                <stop offset="50%" stop-color="rgba(255,255,255,0.15)"/>
            </linearGradient>
        </defs>
    </svg>

    <div class="container">

        <div class="testi-header">
            <div class="section-label" style="color:#a78bfa; justify-content:center;">
                <span class="sl-dot"><span></span><span></span><span></span></span>
                Client Testimonials
            </div>
            <h2 class="section-title">What People <span class="grad-text">Say About Us</span></h2>
            <p>Real words from real clients. See why 1,200+ brands trust Virex Social to grow their digital presence.</p>
        </div>

        <div class="testi-summary">
            <div class="testi-summary-stat">
                <div class="ts-num">4.9</div>
                <div class="ts-lbl">Average Rating</div>
            </div>
            <div class="testi-summary-divider"></div>
            <div class="testi-overall-rating">
                <div class="testi-stars-row"><?php echo _testi_stars(5, '20px'); ?></div>
                <span>Based on 1,200+ reviews</span>
            </div>
            <div class="testi-summary-divider"></div>
            <div class="testi-summary-stat">
                <div class="ts-num">98%</div>
                <div class="ts-lbl">Client Retention</div>
            </div>
            <div class="testi-summary-divider"></div>
            <div class="testi-summary-stat">
                <div class="ts-num">10+</div>
                <div class="ts-lbl">Years Trusted</div>
            </div>
        </div>

        <div class="testimonials-grid">
            <?php foreach ($_testimonials as $_t): ?>
            <div class="testimonial-card<?php echo $_t['featured'] ? ' featured' : ''; ?>">
                <span class="tcard-quote-mark">"</span>
                <div class="tcard-top">
                    <div class="tcard-profile">
                        <div class="tcard-avatar-wrap">
                            <div class="tcard-avatar">
                                <img
                                    src="<?php echo htmlspecialchars($_t['image']); ?>"
                                    alt="<?php echo htmlspecialchars($_t['name']); ?>"
                                    loading="lazy"
                                >
                            </div>
                            <div class="tcard-verified">
                                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                        </div>
                        <div class="tcard-info">
                            <h4><?php echo htmlspecialchars($_t['name']); ?></h4>
                            <span><?php echo htmlspecialchars($_t['role']); ?></span>
                        </div>
                    </div>
                    <div class="tcard-stars"><?php echo _testi_stars($_t['stars']); ?></div>
                </div>
                <p class="tcard-text"><?php echo htmlspecialchars($_t['text']); ?></p>
                <div class="tcard-tags">
                    <?php foreach ($_t['tags'] as $_tag): ?>
                    <span class="tcard-tag <?php echo htmlspecialchars($_tag['class']); ?>">
                        <?php echo $_tag_icons[$_tag['icon']] ?? ''; ?>
                        <?php echo htmlspecialchars($_tag['label']); ?>
                    </span>
                    <?php endforeach; ?>
                </div>
                <div class="tcard-footer">
                    <span class="tcard-date"><?php echo htmlspecialchars($_t['date']); ?></span>
                    <div class="tcard-platform">
                        <?php echo $_platform_icons[$_t['platform']] ?? ''; ?>
                        Via <?php echo htmlspecialchars($_t['platform']); ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="testi-bottom">
            <div style="display:flex; align-items:center; gap:16px; flex-wrap:wrap;">
                <div class="testi-avatars">
                    <?php
                    $mini_count = min(4, count($_testimonials));
                    for ($i = 0; $i < $mini_count; $i++):
                        $_img = preg_replace(['/w=\d+/', '/h=\d+/'], ['w=80', 'h=80'], $_testimonials[$i]['image']);
                    ?>
                    <div class="testi-avatar-mini">
                        <img src="<?php echo htmlspecialchars($_img); ?>" alt="<?php echo htmlspecialchars($_testimonials[$i]['name']); ?>">
                    </div>
                    <?php endfor; ?>
                    <div class="testi-avatar-mini more">+</div>
                </div>
                <div class="testi-more-text"><strong>1,200+</strong> happy clients worldwide</div>
            </div>
            <a href="contact-us" class="btn-grad">
                Start Your Journey
                <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>

    </div>
</section>