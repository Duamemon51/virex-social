<?php
/**
 * Testimonials Section — Virex Social
 * Path: includes/testimonials-section.php
 */

$_testimonials = [
    [
        'featured' => true,
        'name'     => 'Darren',
        'role'     => '"Big Baby" Brand',
        'image'    => 'assets/img/profile1.png',
        'stars'    => 5,
        'text'     => 'Working with Virex Social was one of the best decisions we made. Their team is responsive, innovative, and truly understands what works in the digital space. From our Meta Ads campaigns to full content strategy — everything was handled professionally and the results speak for themselves. Our brand awareness grew by 3x in just 4 months.',
        'tags'     => [
            ['label' => 'facebook',        'class' => 'tag-purple', 'icon' => 'meta',  'link' => true],
           
        ],
        'date'       => 'March 2025',
        'platform'   => 'Facebook',
        'social_url' => 'https://www.facebook.com/share/18onELJuu3/?mibextid=wwXIfr',
    ],
    [
        'featured' => false,
        'name'     => 'Virginia Sanhouse',
        'role'     => 'Model, Content Creator, Influencer',
        'image'    => 'assets/img/profile2.png',
        'stars'    => 5,
        'text'     => "We saw amazing results within weeks. Targeted campaigns, creative strategies, expert support. Their SEO work alone doubled our organic traffic. They're our go-to agency — period.",
        'tags'     => [
             ['label' => 'facebook',        'class' => 'tag-purple', 'icon' => 'meta',  'link' => true],
           
        ],
        'date'       => 'January 2025',
         'platform'   => 'Facebook',
        'social_url' => 'https://www.facebook.com/share/1UZHJ2WFBn/?mibextid=wwXIfr',
    ],
    [
        'featured' => false,
        'name'     => 'ScottishGeneral',
        'role'     => 'Gaming video creator',
        'image'    => 'assets/img/profile3.png',
        'stars'    => 5,
        'text'     => "Professional, fast, and effective. Virex Social helped us grow online and become more visible. Website development and content creation team are top tier. Easily the best agency we've worked with.",
        'tags'     => [
             ['label' => 'facebook',        'class' => 'tag-purple', 'icon' => 'meta',  'link' => true],
           
        ],
        'date'       => 'February 2025',
        'platform'   => 'LinkedIn',
        'social_url' => 'https://www.facebook.com/share/1Gz9yv4Cgv/?mibextid=wwXIfr',
    ],
    [
        'featured' => false,
        'name'     => 'Johnessy',
        'role'     => 'Gaming video creator',
        'image'    => 'assets/img/profile4.png',
        'stars'    => 5,
        'text'     => 'The video editing and Snapchat management they did for us transformed our brand voice completely. Our Snapchat following grew by 40K in 3 months. Absolutely phenomenal team and results.',
        'tags'     => [
             ['label' => 'facebook',        'class' => 'tag-purple', 'icon' => 'meta',  'link' => true],
           
           
        ],
        'date'       => 'April 2025',
        'platform'   => 'Snapchat',
        'social_url' => 'https://www.facebook.com/share/18PTTbTaZY/?mibextid=wwXIfr',
    ],
    [
        'featured' => false,
        'name'     => 'PatD Lucky',
        'role'     => 'Comedian',
        'image'    => 'assets/img/profile5.png',
        'stars'    => 4.5,
        'text'     => 'I was skeptical about digital marketing but Virex Social proved me wrong. Our leads went from 10 a month to 80+ through their targeted Google and Meta campaigns. Worth every dirham.',
        'tags'     => [
             ['label' => 'Snapchat',        'class' => 'tag-purple', 'icon' => 'snapchat',  'link' => true],
          
        ],
        'date'       => 'May 2025',
        'platform'   => 'snapchat',
        'social_url' => 'https://www.snapchat.com/add/patdlucky',
    ],
    [
        'featured' => false,
        'name'     => 'Tiffany Evans',
        'role'     => 'lovetiffanye Artist',
        'image'    => 'assets/img/profile6.png',
        'stars'    => 5,
        'text'     => 'Virex Social completely revamped our Instagram and Facebook presence. Their content calendar and paid strategy brought us 5x ROAS within the first two months. The team is creative, quick, and always ahead of trends.',
        'tags'     => [
           ['label' => 'Snapchat',        'class' => 'tag-purple', 'icon' => 'snapchat',  'link' => true],
           
        ],
        'date'       => 'March 2025',
        'platform'   => 'snapchat',
        'social_url' => 'https://www.snapchat.com/add/lovetiffanye',
    ],
    [
        'featured' => false,
        'name'     => 'Jeremy Koko',
        'role'     => 'yokokofit Creator',
        'image'    => 'assets/img/profile7.png',
        'stars'    => 4.5,
        'text'     => 'We hired Virex Social for LinkedIn B2B lead generation and the outcome exceeded all expectations. In 60 days we had 200+ qualified leads and 3 signed contracts. Their understanding of our industry was impressive from day one.',
        'tags'     => [
             ['label' => 'Snapchat',        'class' => 'tag-purple', 'icon' => 'snapchat',  'link' => true],
           
        ],
        'date'       => 'April 2025',
        'platform'   => 'snapchat',
        'social_url' => 'https://www.snapchat.com/add/yokokofit',
    ],
];

$_tag_icons = [
    'meta'     => '<svg viewBox="0 0 24 24" style="width:11px;height:11px;fill:none;stroke:currentColor;stroke-width:2"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>',
    'snapchat' => '<svg viewBox="0 0 24 24" style="width:11px;height:11px;fill:none;stroke:currentColor;stroke-width:2"><path d="M12 2c-2.5 0-4 2-4 4.5v2c0 .5-.2 1-.6 1.3l-1.2.9c-.4.3-.3.9.2 1.1l1.3.5c.4.1.6.5.6.9 0 1.8-1 2.8-2.6 3.2-.5.1-.5.8 0 1 1.3.4 2.4.3 3.3-.2.3-.2.7 0 .8.3l.3 1c.1.3.4.5.7.5h2.4c.3 0 .6-.2.7-.5l.3-1c.1-.3.5-.5.8-.3.9.5 2 .6 3.3.2.5-.2.5-.9 0-1-1.6-.4-2.6-1.4-2.6-3.2 0-.4.2-.8.6-.9l1.3-.5c.5-.2.6-.8.2-1.1l-1.2-.9c-.4-.3-.6-.8-.6-1.3v-2C16 4 14.5 2 12 2z"/></svg>',
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
    'Snapchat'  => '<svg viewBox="0 0 24 24" style="width:14px;height:14px" fill="#FFFC00"><path d="M12.166 2c.93 0 4.03.26 5.51 3.56.51 1.14.39 3.09.3 4.56l-.01.17c-.01.12 0 .21.03.23.14.08.47.01.73-.05.27-.06.54-.11.79-.07.52.08.93.47.97.93.04.42-.22.83-.72 1.09-.07.04-.18.08-.32.13-.43.17-1.09.43-1.28 1.01-.09.27-.05.58.14.94l.02.04c.48.95 1.56 2.55 3.38 2.86.18.03.3.19.27.38-.03.17-.13.32-.3.42-.37.2-.78.37-1.24.5-.19.06-.3.2-.27.39.02.11.04.22.07.34.09.43.19.96-.1 1.34-.21.27-.54.4-.98.41-.28 0-.56-.04-.83-.08-.42-.06-.8-.11-1.12.03-.37.16-.67.48-1 .82-.48.49-1.02 1.04-1.97 1.32-.49.14-1.05.2-1.69.2s-1.2-.06-1.69-.2c-.95-.28-1.49-.83-1.97-1.32-.33-.34-.63-.66-1-.82-.32-.14-.7-.09-1.12-.03-.27.04-.55.08-.83.08-.44-.01-.77-.14-.98-.41-.29-.38-.19-.91-.1-1.34.03-.12.05-.23.07-.34.03-.19-.08-.33-.27-.39-.46-.13-.87-.3-1.24-.5-.17-.1-.27-.25-.3-.42-.03-.19.09-.35.27-.38 1.82-.31 2.9-1.91 3.38-2.86l.02-.04c.19-.36.23-.67.14-.94-.19-.58-.85-.84-1.28-1.01-.14-.05-.25-.09-.32-.13-.5-.26-.76-.67-.72-1.09.04-.46.45-.85.97-.93.25-.04.52.01.79.07.26.06.59.13.73.05.03-.02.04-.11.03-.23l-.01-.17c-.09-1.47-.21-3.42.3-4.56C8.136 2.26 11.236 2 12.166 2z"/></svg>',
];

function _testi_stars(float $count, string $size = '14px'): string {
    $full = '<svg viewBox="0 0 24 24" style="width:'.$size.';height:'.$size.';fill:#fbbf24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>';
    $half = '<svg viewBox="0 0 24 24" style="width:'.$size.';height:'.$size.';fill:url(#halfStarGrad)"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>';
    $out = '';
    for ($i = 1; $i <= 5; $i++) {
        $out .= ($count >= $i) ? $full : (($count >= $i - 0.5) ? $half : '');
    }
    return $out;
}
?>
<link rel="stylesheet" href="assets/css/testimonals.css">
<style>
.tcard-tag.tag-link {
    cursor: pointer;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 4px;
    transition: opacity 0.2s ease, transform 0.15s ease;
}
.tcard-tag.tag-link:hover {
    opacity: 0.8;
    transform: translateY(-1px);
}
</style>

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
                            <h4><?php echo htmlspecialchars(trim($_t['name'])); ?></h4>
                            <span><?php echo htmlspecialchars($_t['role']); ?></span>
                        </div>
                    </div>
                    <div class="tcard-stars"><?php echo _testi_stars($_t['stars']); ?></div>
                </div>

                <p class="tcard-text"><?php echo htmlspecialchars($_t['text']); ?></p>

                <div class="tcard-tags">
                    <?php foreach ($_t['tags'] as $_tag):
                        $is_link = !empty($_tag['link']) && !empty($_t['social_url']);
                    ?>
                        <?php if ($is_link): ?>
                            <a href="<?php echo htmlspecialchars($_t['social_url']); ?>"
                               class="tcard-tag <?php echo htmlspecialchars($_tag['class']); ?> tag-link"
                               target="_blank"
                               rel="noopener noreferrer"
                               title="View on <?php echo htmlspecialchars($_t['platform']); ?>">
                                <?php echo $_tag_icons[$_tag['icon']] ?? ''; ?>
                                <?php echo htmlspecialchars($_tag['label']); ?>
                            </a>
                        <?php else: ?>
                            <span class="tcard-tag <?php echo htmlspecialchars($_tag['class']); ?>">
                                <?php echo $_tag_icons[$_tag['icon']] ?? ''; ?>
                                <?php echo htmlspecialchars($_tag['label']); ?>
                            </span>
                        <?php endif; ?>
                    <?php endforeach; ?>
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
                <div class="testi-more-text"><strong>200+</strong> happy clients worldwide</div>
            </div>
            <a href="contact-us.php" class="btn-grad">
                Start Your Journey
                <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>

    </div>
</section>