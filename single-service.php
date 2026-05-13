<?php
/**
 * single-service.php
 * Reusable HTML structure for all service pages.
 * Load the relevant content block from content-service.php before including this.
 *
 * Required variables (set in content-service.php):
 *   $service  — the service slug  e.g. 'web-development' | 'seo' | 'social-media'
 *   $svc      — the full content array (see content-service.php)
 */

echo "<pre>";
var_dump($_GET['service']);
echo "</pre>";
include 'includes/header.php';

// Pull in the content array
include 'content-service.php';
$service = $_GET['service'] ?? null;
if (!isset($svc) || !isset($svc[$service])) {
    http_response_code(404);
    echo '<p>Service not found.</p>';
    include 'includes/footer.php';
    exit;
}

$c = $svc[$service]; // shorthand
?>

<!-- ══ THEME CSS INJECTION ══ -->
<link rel="stylesheet" href="assets/css/services.css">
<style>
    /* ── Theme tokens for: <?php echo htmlspecialchars($c['name']); ?> ── */
    :root {
        --svc-grad-main:       <?php echo $c['theme']['grad_main']; ?>;
        --svc-grad-warm:       <?php echo $c['theme']['grad_warm']; ?>;
        --svc-grad-secondary:  <?php echo $c['theme']['grad_secondary']; ?>;
        --svc-grad-tertiary:   <?php echo $c['theme']['grad_tertiary']; ?>;
        --svc-accent:          <?php echo $c['theme']['accent']; ?>;
        --svc-accent2:         <?php echo $c['theme']['accent2']; ?>;

        /* Hero */
        --svc-hero-bg:         <?php echo $c['theme']['hero_bg']; ?>;
        --svc-hero-radials:    <?php echo $c['theme']['hero_radials']; ?>;
        --svc-orb1:            <?php echo $c['theme']['orb1']; ?>;
        --svc-orb2:            <?php echo $c['theme']['orb2']; ?>;
        --svc-orb3:            <?php echo $c['theme']['orb3']; ?>;
        --svc-orb4:            <?php echo $c['theme']['orb4']; ?>;
        --svc-badge-border:    <?php echo $c['theme']['badge_border']; ?>;
        --svc-badge-shadow:    <?php echo $c['theme']['badge_shadow']; ?>;
        --svc-badge-dot:       <?php echo $c['theme']['badge_dot']; ?>;

        /* Buttons */
        --svc-btn-grad:        <?php echo $c['theme']['btn_grad']; ?>;
        --svc-btn-shadow:      <?php echo $c['theme']['btn_shadow']; ?>;
        --svc-btn-shadow-hover:<?php echo $c['theme']['btn_shadow_hover']; ?>;
        --svc-btn-warm:        <?php echo $c['theme']['btn_warm']; ?>;
        --svc-btn-warm-shadow: <?php echo $c['theme']['btn_warm_shadow']; ?>;
        --svc-btn-warm-shadow-hover: <?php echo $c['theme']['btn_warm_shadow_hover']; ?>;

        /* Cards & borders */
        --svc-card-border:        <?php echo $c['theme']['card_border']; ?>;
        --svc-card-border-hover:  <?php echo $c['theme']['card_border_hover']; ?>;
        --svc-card-shadow-hover:  <?php echo $c['theme']['card_shadow_hover']; ?>;
        --svc-img-shadow:         <?php echo $c['theme']['img_shadow']; ?>;
        --svc-img-badge-border:   <?php echo $c['theme']['img_badge_border']; ?>;
        --svc-icon-shadow:        <?php echo $c['theme']['icon_shadow']; ?>;
        --svc-stat-border:        <?php echo $c['theme']['stat_border']; ?>;
        --svc-stats-shadow:       <?php echo $c['theme']['stats_shadow']; ?>;

        /* Checklist */
        --svc-step-border:        <?php echo $c['theme']['step_border']; ?>;
        --svc-step-shadow:        <?php echo $c['theme']['step_shadow']; ?>;
        --svc-step-shadow-hover:  <?php echo $c['theme']['step_shadow_hover']; ?>;
        --svc-connector-line:     <?php echo $c['theme']['connector_line']; ?>;

        /* Section alternating bg */
        --svc-section-alt-bg:     <?php echo $c['theme']['section_alt_bg']; ?>;
        --svc-section-alt-radials:<?php echo $c['theme']['section_alt_radials']; ?>;

        /* Service item dividers */
        --svc-col-divider:     <?php echo $c['theme']['col_divider']; ?>;
        --svc-item-divider:    <?php echo $c['theme']['item_divider']; ?>;

        /* Icon variants */
        --svc-ic-a-bg:     <?php echo $c['theme']['ic_a_bg']; ?>; --svc-ic-a-border: <?php echo $c['theme']['ic_a_border']; ?>; --svc-ic-a-color: <?php echo $c['theme']['ic_a_color']; ?>;
        --svc-ic-b-bg:     <?php echo $c['theme']['ic_b_bg']; ?>; --svc-ic-b-border: <?php echo $c['theme']['ic_b_border']; ?>; --svc-ic-b-color: <?php echo $c['theme']['ic_b_color']; ?>;
        --svc-ic-c-bg:     <?php echo $c['theme']['ic_c_bg']; ?>; --svc-ic-c-border: <?php echo $c['theme']['ic_c_border']; ?>; --svc-ic-c-color: <?php echo $c['theme']['ic_c_color']; ?>;
        --svc-ic-d-bg:     <?php echo $c['theme']['ic_d_bg']; ?>; --svc-ic-d-border: <?php echo $c['theme']['ic_d_border']; ?>; --svc-ic-d-color: <?php echo $c['theme']['ic_d_color']; ?>;
        --svc-ic-e-bg:     <?php echo $c['theme']['ic_e_bg']; ?>; --svc-ic-e-border: <?php echo $c['theme']['ic_e_border']; ?>; --svc-ic-e-color: <?php echo $c['theme']['ic_e_color']; ?>;
        --svc-ic-f-bg:     <?php echo $c['theme']['ic_f_bg']; ?>; --svc-ic-f-border: <?php echo $c['theme']['ic_f_border']; ?>; --svc-ic-f-color: <?php echo $c['theme']['ic_f_color']; ?>;

        /* Marquee */
        --svc-marquee-bg:    <?php echo $c['theme']['marquee_bg']; ?>;
        --svc-marquee-fade:  <?php echo $c['theme']['marquee_fade']; ?>;
        --svc-pill-b-bg:     <?php echo $c['theme']['pill_b_bg']; ?>; --svc-pill-b-border: <?php echo $c['theme']['pill_b_border']; ?>; --svc-pill-b-color: <?php echo $c['theme']['pill_b_color']; ?>; --svc-pill-b-icon-bg: <?php echo $c['theme']['pill_b_icon_bg']; ?>;
        --svc-pill-c-bg:     <?php echo $c['theme']['pill_c_bg']; ?>; --svc-pill-c-border: <?php echo $c['theme']['pill_c_border']; ?>; --svc-pill-c-color: <?php echo $c['theme']['pill_c_color']; ?>; --svc-pill-c-icon-bg: <?php echo $c['theme']['pill_c_icon_bg']; ?>;
        --svc-pill-d-bg:     <?php echo $c['theme']['pill_d_bg']; ?>; --svc-pill-d-border: <?php echo $c['theme']['pill_d_border']; ?>; --svc-pill-d-color: <?php echo $c['theme']['pill_d_color']; ?>; --svc-pill-d-icon-bg: <?php echo $c['theme']['pill_d_icon_bg']; ?>;
        --svc-pill-e-bg:     <?php echo $c['theme']['pill_e_bg']; ?>; --svc-pill-e-border: <?php echo $c['theme']['pill_e_border']; ?>; --svc-pill-e-color: <?php echo $c['theme']['pill_e_color']; ?>; --svc-pill-e-icon-bg: <?php echo $c['theme']['pill_e_icon_bg']; ?>;

        /* CTA */
        --svc-cta-bg:      <?php echo $c['theme']['cta_bg']; ?>;
        --svc-cta-radials: <?php echo $c['theme']['cta_radials']; ?>;

        /* FAQ */
        --svc-faq-border:        <?php echo $c['theme']['faq_border']; ?>;
        --svc-faq-border-hover:  <?php echo $c['theme']['faq_border_hover']; ?>;
        --svc-faq-border-open:   <?php echo $c['theme']['faq_border_open']; ?>;
        --svc-faq-shadow-hover:  <?php echo $c['theme']['faq_shadow_hover']; ?>;
        --svc-faq-shadow-open:   <?php echo $c['theme']['faq_shadow_open']; ?>;
        --svc-faq-card-bg:       <?php echo $c['theme']['faq_card_bg']; ?>;
        --svc-faq-card-radials:  <?php echo $c['theme']['faq_card_radials']; ?>;
        --svc-faq-orb1:          <?php echo $c['theme']['faq_orb1']; ?>;
        --svc-faq-orb2:          <?php echo $c['theme']['faq_orb2']; ?>;
        --svc-grid-line:         <?php echo $c['theme']['grid_line']; ?>;
        --svc-toggle-bg:         <?php echo $c['theme']['toggle_bg']; ?>;
        --svc-toggle-border:     <?php echo $c['theme']['toggle_border']; ?>;
        --svc-cta-icon-shadow:   <?php echo $c['theme']['cta_icon_shadow']; ?>;
    }
    
</style>

<!-- ══════════════════════════════════════════
     PAGE HERO
══════════════════════════════════════════ -->
<section class="page-hero">
    <div class="ph-orb ph-orb-1"></div>
    <div class="ph-orb ph-orb-2"></div>
    <div class="ph-orb ph-orb-3"></div>
    <div class="ph-orb ph-orb-4"></div>
    <div class="container hero-content">

        <div class="page-hero-badge">
            <span class="badge-dot"></span>
            <?php echo htmlspecialchars($c['hero']['badge']); ?>
        </div>

        <h1>
            <?php echo $c['hero']['heading']; /* may include <br> and <span class="grad-text"> */ ?>
        </h1>

        <p class="ph-desc"><?php echo htmlspecialchars($c['hero']['desc']); ?></p>

        <a href="contact.php" class="btn-grad">
            <?php echo htmlspecialchars($c['hero']['cta_label']); ?>
            <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>

    </div>
</section>


<!-- ══════════════════════════════════════════
     WHAT IS [SERVICE]
══════════════════════════════════════════ -->
<section class="what-section">
    <div class="container">
        <div class="what-grid">

            <!-- Image -->
            <div class="what-img-wrap">
                <img
                    src="assets/img/<?php echo htmlspecialchars($c['what']['img']); ?>"
                    alt="<?php echo htmlspecialchars($c['name']); ?>"
                    onerror="this.style.background='<?php echo $c['what']['img_fallback_bg']; ?>';this.style.minHeight='460px';this.removeAttribute('onerror')"
                />
                <div class="what-img-badge">
                    <div class="wib-icon">
                        <?php echo $c['what']['badge_icon']; /* raw SVG */ ?>
                    </div>
                    <div class="wib-text">
                        <strong><?php echo htmlspecialchars($c['what']['badge_title']); ?></strong>
                        <span><?php echo htmlspecialchars($c['what']['badge_stat']); ?></span>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="what-content">
                <div class="section-label">
                    <span class="sl-dot"><span></span><span></span><span></span></span>
                    <?php echo htmlspecialchars($c['what']['label']); ?>
                </div>
                <h2 class="section-title"><?php echo $c['what']['heading']; ?></h2>
                <p class="section-desc" style="margin-bottom:28px;"><?php echo htmlspecialchars($c['what']['desc']); ?></p>

                <ul class="what-checklist">
                    <?php foreach ($c['what']['checklist'] as $i => $item):
                        $variants = ['wc-primary','wc-secondary','wc-tertiary','wc-primary'];
                        $cls = $variants[$i % 4];
                    ?>
                    <li>
                        <div class="wc-check <?php echo $cls; ?>">
                            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <?php echo htmlspecialchars($item); ?>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <div class="what-stat-row">
                    <?php foreach ($c['what']['stats'] as $stat): ?>
                    <div class="ws-stat">
                        <div class="ws-stat-num"><?php echo htmlspecialchars($stat['num']); ?></div>
                        <div class="ws-stat-lbl"><?php echo htmlspecialchars($stat['lbl']); ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════
     HOW IT WORKS
══════════════════════════════════════════ -->
<section class="how-section">
    <div class="container">
        <div class="how-header">
            <div class="section-label" style="justify-content:center;">
                <span class="sl-dot"><span></span><span></span><span></span></span>
                <?php echo htmlspecialchars($c['how']['label']); ?>
            </div>
            <h2 class="section-title"><?php echo $c['how']['heading']; ?></h2>
            <p class="section-desc" style="max-width:100%;margin-bottom:0;"><?php echo htmlspecialchars($c['how']['desc']); ?></p>
        </div>
        <div class="how-steps">
            <?php foreach ($c['how']['steps'] as $n => $step): ?>
            <div class="how-step">
                <div class="how-step-num"><span><?php echo str_pad($n+1, 2, '0', STR_PAD_LEFT); ?></span></div>
                <h4><?php echo htmlspecialchars($step['title']); ?></h4>
                <p><?php echo htmlspecialchars($step['desc']); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════
     WHY CHOOSE US
══════════════════════════════════════════ -->
<section class="why-section">
    <div class="container">
        <div class="section-label">
            <span class="sl-dot"><span></span><span></span><span></span></span>
            <?php echo htmlspecialchars($c['why']['label']); ?>
        </div>
        <h2 class="section-title"><?php echo $c['why']['heading']; ?></h2>
        <p class="section-desc"><?php echo htmlspecialchars($c['why']['desc']); ?></p>
        <div class="why-grid">
            <?php foreach ($c['why']['cards'] as $n => $card): ?>
            <div class="why-card">
                <div class="why-num"><?php echo str_pad($n+1, 2, '0', STR_PAD_LEFT); ?></div>
                <h3><?php echo htmlspecialchars($card['title']); ?></h3>
                <p><?php echo htmlspecialchars($card['desc']); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════
     SERVICES WE OFFER
══════════════════════════════════════════ -->
<section class="svc-section">
    <div class="container">
        <div class="section-label">
            <span class="sl-dot"><span></span><span></span><span></span></span>
            <?php echo htmlspecialchars($c['offers']['label']); ?>
        </div>
        <h2 class="section-title"><?php echo $c['offers']['heading']; ?></h2>
        <div class="svc-cols">
            <?php foreach ($c['offers']['columns'] as $col): ?>
            <div>
                <span class="svc-col-label"><?php echo htmlspecialchars($col['label']); ?></span>
                <?php foreach ($col['items'] as $item): ?>
                <div class="svc-item">
                    <div class="svc-icon-wrap <?php echo htmlspecialchars($item['ic']); ?>">
                        <?php echo $item['icon']; /* raw SVG */ ?>
                    </div>
                    <div>
                        <h4><?php echo htmlspecialchars($item['title']); ?></h4>
                        <p><?php echo htmlspecialchars($item['desc']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>







<!-- ══════════════════════════════════════════
     CTA BANNER
══════════════════════════════════════════ -->
<section class="cta-section">
    <div class="container">
        <div class="section-label" style="justify-content:center;margin-bottom:24px;">
            <span class="sl-dot"><span></span><span></span><span></span></span>
            <?php echo htmlspecialchars($c['cta']['label']); ?>
        </div>
        <h2><?php echo $c['cta']['heading']; ?></h2>
        <p><?php echo htmlspecialchars($c['cta']['desc']); ?></p>
        <div class="cta-btns">
            <a href="contact.php" class="btn-grad">
                <?php echo htmlspecialchars($c['cta']['primary_btn']); ?>
                <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="services.php" class="btn-warm">
                View All Services
                <svg viewBox="0 0 24 24" fill="none"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>


<!-- ══════════════════════════════════════════
     FAQ
══════════════════════════════════════════ -->
<section class="faq-section-v2">
    <div class="faq2-orb faq2-orb-1"></div>
    <div class="faq2-orb faq2-orb-2"></div>
    <div class="faq2-grid-bg"></div>
    <div class="container">

        <div class="faq2-header">
            <div class="section-label" style="justify-content:center;">
                <span class="sl-dot"><span></span><span></span><span></span></span>
                FAQs
            </div>
            <h2 class="section-title">Most Popular <span class="grad-text">Questions</span></h2>
            <p class="faq2-subtitle"><?php echo htmlspecialchars($c['faq']['subtitle']); ?></p>
        </div>

        <div class="faq2-body">
            <div class="faq2-list">
                <?php foreach ($c['faq']['items'] as $i => $fq): ?>
                <div class="faq2-item<?php echo $i === 0 ? ' open' : ''; ?>">
                    <div class="faq2-question" onclick="toggleFaq2(this)">
                        <div class="faq2-q-inner">
                            <span class="faq2-num"><?php echo str_pad($i+1, 2, '0', STR_PAD_LEFT); ?></span>
                            <span><?php echo htmlspecialchars($fq['q']); ?></span>
                        </div>
                        <div class="faq2-toggle">
                            <svg viewBox="0 0 24 24" fill="none"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                        </div>
                    </div>
                    <div class="faq2-answer"><?php echo htmlspecialchars($fq['a']); ?></div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Side Panel -->
            <div class="faq2-side">
                <div class="faq2-cta-card">
                    <div class="faq2-cta-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                    </div>
                    <h3 class="faq2-cta-title">Still have questions?</h3>
                    <p class="faq2-cta-desc">Can't find the answer you're looking for? Our team is ready to help within 2 hours.</p>
                    <a href="https://wa.me/<?php echo htmlspecialchars($c['contact']['whatsapp']); ?>" target="_blank" class="faq2-cta-btn">
                        <svg viewBox="0 0 24 24" fill="white" width="18" height="18"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        Chat on WhatsApp
                    </a>
                    <a href="mailto:<?php echo htmlspecialchars($c['contact']['email']); ?>" class="faq2-cta-btn-outline">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" width="18" height="18"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        Send an Email
                    </a>
                </div>

                <div class="faq2-stats">
                    <?php foreach ($c['what']['stats'] as $idx => $stat): ?>
                    <?php if ($idx > 0): ?><div class="faq2-stat-divider"></div><?php endif; ?>
                    <div class="faq2-stat">
                        <div class="faq2-stat-num grad-text"><?php echo htmlspecialchars($stat['num']); ?></div>
                        <div class="faq2-stat-lbl"><?php echo htmlspecialchars($stat['lbl']); ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- ══ BACK TO TOP ══ -->
<button id="back-to-top" onclick="window.scrollTo({top:0,behavior:'smooth'})">↑</button>


<!-- ══ MARQUEE SCRIPT ══ -->
<script>
(function(){
    var t1 = <?php echo json_encode($c['marquee']['track1']); ?>;
    var t2 = <?php echo json_encode($c['marquee']['track2']); ?>;

    function buildTrack(items, id) {
        var el = document.getElementById(id);
        if (!el) return;
        var doubled = items.concat(items);
        var html = doubled.map(function(item) {
            return '<div class="scroll-item"><div class="scroll-pill style-' + item.style + '">'
                 + '<div class="scroll-pill-icon">' + item.icon + '</div>'
                 + item.text
                 + '</div></div><span class="scroll-sep-star">✦</span>';
        }).join('');
        el.innerHTML = html;
    }
    buildTrack(t1, 'svcTrack1');
    buildTrack(t2, 'svcTrack2');
})();

/* ══ FAQ TOGGLE ══ */
function toggleFaq2(q) {
    var item = q.parentElement;
    var isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq2-item.open').forEach(function(i){ i.classList.remove('open'); });
    if (!isOpen) item.classList.add('open');
}

/* ══ BACK TO TOP ══ */
window.addEventListener('scroll', function(){
    var btn = document.getElementById('back-to-top');
    if (window.scrollY > 400) btn.classList.add('visible');
    else btn.classList.remove('visible');
});
</script>

<?php include 'includes/virex-floating-social.php'; ?>
<?php include 'includes/footer.php'; ?>