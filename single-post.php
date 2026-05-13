<?php
/**
 * Single Blog Post Template — Virex Social
 * Usage: single-post.php?slug=shopify-seo-checklist
 */

require_once 'posts-data.php';

$slug        = isset($_GET['slug']) ? htmlspecialchars($_GET['slug']) : '';
$post        = isset($all_posts[$slug]) ? $all_posts[$slug] : null;
$recent      = array_filter($all_posts, fn($k) => $k !== $slug, ARRAY_FILTER_USE_KEY);
$recent      = array_slice($recent, 0, 5, true);
$base        = './blog.php';
$single_base = './single-post.php';
$share_url   = 'https://virexsocial.com/' . $slug . '/';
$share_title = $post ? $post['title'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $post ? htmlspecialchars($post['title']) . ' | Virex Social' : '404 | Virex Social'; ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Clash+Display:wght@400;500;600;700&family=Syne:wght@600;700;800&family=Manrope:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/theme.css">
<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

/* ── Page-level overrides for single-post ── */
body { background: var(--page-bg); }

img { max-width: 100%; height: auto; }

/* ══════════════════════════════════════
   HERO — Light Copilot Gradient
══════════════════════════════════════ */
.post-hero {
    padding: 120px 0 80px;
    position: relative;
    overflow: hidden;
    text-align: center;

    /* Light pastel mesh — matches index.php page-bg direction */
    background: linear-gradient(155deg,
        #F0E8FF 0%,
        #F8F0FF 18%,
        #FFF0FA 38%,
        #FFF4F0 60%,
        #FFF9F0 78%,
        #FDF8FF 100%);
}

/* Radial colour blobs */
.post-hero::before {
    content: '';
    position: absolute; inset: 0;
    background:
        radial-gradient(ellipse 65% 70% at 5%  40%, rgba(123,77,255,0.14)  0%, transparent 55%),
        radial-gradient(ellipse 55% 60% at 95% 25%, rgba(216,91,255,0.13)  0%, transparent 50%),
        radial-gradient(ellipse 50% 55% at 55% 95%, rgba(255,154,87,0.11)  0%, transparent 55%),
        radial-gradient(ellipse 40% 40% at 30% 15%, rgba(255,111,181,0.10) 0%, transparent 45%);
    pointer-events: none;
}

/* Gradient top bar */
.post-hero::after {
    content: '';
    position: absolute; top: 0; left: 0; right: 0; height: 3px;
    background: var(--grad-main);
}

/* Floating orbs */
.hero-blob { position: absolute; border-radius: 50%; filter: blur(80px); pointer-events: none; }
.hero-blob-1 { width:420px; height:420px; background:rgba(123,77,255,0.10); top:-160px; left:-80px; animation: orbFloat 9s ease-in-out infinite; }
.hero-blob-2 { width:350px; height:350px; background:rgba(216,91,255,0.09); top:-100px; right:-70px; animation: orbFloat 11s ease-in-out infinite reverse; }
.hero-blob-3 { width:260px; height:260px; background:rgba(255,154,87,0.10); bottom:-80px; right:20%; animation: orbFloat 7s ease-in-out infinite 1.5s; }

@keyframes orbFloat { 0%,100%{transform:translateY(0) scale(1)} 50%{transform:translateY(-22px) scale(1.03)} }

.hero-inner { position: relative; z-index: 5; }

/* Badge */
.post-hero-badge {
    display: inline-flex; align-items: center; gap: 10px;
    background: rgba(255,255,255,0.85);
    border: 1px solid rgba(123,77,255,0.18);
    color: var(--text-mid); font-weight: 700;
    font-size: 11px; letter-spacing: 2.5px; text-transform: uppercase;
    padding: 8px 20px; border-radius: 50px; margin-bottom: 28px;
    box-shadow: 0 4px 16px rgba(123,77,255,0.10);
    backdrop-filter: blur(10px);
    font-family: 'Manrope', sans-serif;
}
.badge-pill-mini {
    width: 16px; height: 9px; border-radius: 5px;
    background: var(--grad-main); flex-shrink: 0;
    animation: pillShift 3s ease-in-out infinite;
}
@keyframes pillShift { 0%,100%{filter:hue-rotate(0deg)} 50%{filter:hue-rotate(60deg)} }

/* Title */
.post-hero-title {
    font-family: 'Plus Jakarta Sans', 'Clash Display', sans-serif;
    font-size: clamp(22px, 3.4vw, 46px); line-height: 1.15;
    font-weight: 800; letter-spacing: -0.5px;
    color: var(--text-strong);
    margin-bottom: 24px;
    max-width: 820px; margin-left: auto; margin-right: auto;
}

/* Gradient underline on last word — decorative span */
.post-hero-title .grad-word {
    background: var(--grad-main);
    -webkit-background-clip: text; -webkit-text-fill-color: transparent;
    background-clip: text;
}

/* Meta row */
.hero-meta {
    display: flex; align-items: center; justify-content: center;
    gap: 14px; flex-wrap: wrap;
}
.hero-meta-item {
    display: inline-flex; align-items: center; gap: 6px;
    font-family: 'Manrope', sans-serif; font-size: 13px; font-weight: 600;
    color: var(--text-mid);
    background: rgba(255,255,255,0.80);
    border: 1px solid rgba(123,77,255,0.12);
    padding: 7px 16px; border-radius: 50px;
    backdrop-filter: blur(8px);
}
.hero-meta-item svg { width:14px; height:14px; stroke:currentColor; stroke-width:2; fill:none; }
.hero-cat-badge {
    display: inline-flex; align-items: center;
    background: rgba(255,255,255,0.85);
    border: 1.5px solid rgba(123,77,255,0.22);
    color: var(--purple); font-family: 'Manrope', sans-serif;
    font-weight: 700; font-size: 10.5px; letter-spacing: 1.5px; text-transform: uppercase;
    padding: 7px 16px; border-radius: 50px;
    transition: all .25s; box-shadow: 0 2px 10px rgba(123,77,255,0.10);
}
.hero-cat-badge:hover {
    background: var(--grad-main); color: white; border-color: transparent;
    box-shadow: 0 4px 18px rgba(123,77,255,0.28);
}

/* Decorative wave at bottom of hero */
.hero-wave {
    position: absolute; bottom: -1px; left: 0; right: 0;
    height: 50px; z-index: 6;
}
.hero-wave svg { width: 100%; height: 100%; display: block; }

/* ══════════════════════════════════════
   BODY SECTION
══════════════════════════════════════ */
.post-body { padding: 48px 0 90px; }
.post-layout { display: grid; grid-template-columns: 1fr 310px; gap: 28px; align-items: start; }

/* ── Image card ── */
.post-img-card {
    background: #fff;
    border: 1.5px solid rgba(123,77,255,0.10);
    border-radius: 24px; overflow: hidden;
    box-shadow: 0 8px 36px rgba(123,77,255,0.10);
    margin-bottom: 20px; position: relative;
}
.post-img-card::before {
    content: ''; position: absolute; top: 0; left: 0; right: 0; height: 3px;
    background: var(--grad-main); z-index: 2;
}
.img-card-photo { width: 100%; aspect-ratio: 16/9; overflow: hidden; }
.img-card-photo img { width:100%; height:100%; object-fit:cover; display:block; transition:transform .5s; }
.post-img-card:hover .img-card-photo img { transform: scale(1.03); }

.img-card-footer {
    padding: 18px 24px 16px; text-align: center;
    background: rgba(253,248,255,0.95); position: relative; z-index: 1;
    border-top: 1px solid rgba(123,77,255,0.08);
}
.img-card-logo { display:inline-flex; align-items:center; gap:7px; margin-bottom:8px; }
.img-card-logo-icon {
    width: 26px; height: 26px; background: var(--grad-main);
    border-radius: 8px; display:flex; align-items:center; justify-content:center;
    font-weight: 900; font-size: 12px; color: #fff;
    font-family: 'Plus Jakarta Sans', sans-serif;
    box-shadow: 0 3px 10px rgba(123,77,255,0.28);
}
.img-card-logo-text {
    font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 800; font-size: 13px;
    background: var(--grad-main); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;
}
.img-card-title {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: clamp(13px,1.6vw,17px); font-weight: 700;
    color: var(--text-strong); line-height: 1.35; margin-bottom: 8px;
}
.img-card-site {
    display: inline-flex; align-items:center; gap:5px;
    font-size: 11.5px; font-weight: 600; color: var(--muted);
}
.img-card-site svg { width:11px; height:11px; stroke:currentColor; stroke-width:2; fill:none; }

/* ── Share row ── */
.share-row { margin-bottom: 24px; }
.share-row-label {
    font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 700;
    font-size: 14px; color: var(--text-strong); margin-bottom: 10px;
}
.share-btns { display: grid; grid-template-columns: repeat(4,1fr); gap: 8px; }
.share-btn {
    display: flex; align-items:center; justify-content:center; gap:7px;
    padding: 12px 8px; border-radius: 12px;
    font-family: 'Manrope', sans-serif; font-weight: 700; font-size: 12px;
    color: #fff; transition: all .25s; border: none; text-decoration: none; cursor: pointer;
    box-shadow: 0 3px 10px rgba(0,0,0,0.08);
}
.share-btn svg { width:16px; height:16px; fill:#fff; flex-shrink:0; }
.share-btn.fb { background: #1877f2; }
.share-btn.fb:hover { background:#0d65d9; transform:translateY(-3px); box-shadow:0 8px 20px rgba(24,119,242,0.35); }
.share-btn.wa { background: #25D366; }
.share-btn.wa:hover { background:#1db954; transform:translateY(-3px); box-shadow:0 8px 20px rgba(37,211,102,0.35); }
.share-btn.tw { background: #111; }
.share-btn.tw:hover { background:#333; transform:translateY(-3px); box-shadow:0 8px 20px rgba(0,0,0,0.22); }
.share-btn.em { background: linear-gradient(135deg,#7B4DFF,#D85BFF); }
.share-btn.em:hover { transform:translateY(-3px); box-shadow:0 8px 20px rgba(123,77,255,0.35); }

/* ── Article ── */
.article-content {
    background: #fff;
    border: 1.5px solid rgba(123,77,255,0.08);
    border-radius: 22px; padding: 42px 46px;
    box-shadow: 0 4px 24px rgba(123,77,255,0.07);
}
.article-content h2 {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: clamp(17px,2.1vw,24px); color: var(--text-strong);
    margin: 36px 0 14px; padding-bottom: 10px;
    border-bottom: 2px solid rgba(123,77,255,0.08); font-weight: 800;
}
.article-content h2:first-child { margin-top: 0; }
.article-content h3 {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: clamp(14px,1.7vw,19px); color: var(--text-strong);
    margin: 24px 0 10px; font-weight: 700;
}
.article-content p { font-size: 15.5px; line-height: 1.95; color: var(--text); margin-bottom: 18px; }
.article-content ul, .article-content ol { margin: 10px 0 20px 18px; }
.article-content li { font-size: 15px; line-height: 1.85; color: var(--text); margin-bottom: 7px; padding-left: 4px; }
.article-content ul li::marker { color: var(--purple); }
.article-content ol li::marker { color: var(--purple); font-weight: 700; }
.article-content strong { color: var(--text-strong); }

/* Blockquote */
.article-content blockquote {
    background: linear-gradient(135deg, rgba(123,77,255,0.05), rgba(216,91,255,0.04));
    border-left: 4px solid var(--purple);
    border-radius: 0 16px 16px 0;
    padding: 20px 24px; margin: 22px 0;
    font-style: italic; color: var(--text-mid);
}

/* Table */
.article-content table { width:100%; border-collapse:collapse; margin:20px 0; border-radius:14px; overflow:hidden; border:1.5px solid rgba(123,77,255,0.10); }
.article-content th { background:rgba(123,77,255,0.07); padding:11px 14px; font-family:'Plus Jakarta Sans',sans-serif; font-size:12px; color:var(--purple); text-align:left; border-bottom:2px solid rgba(123,77,255,0.12); font-weight:700; }
.article-content td { padding:11px 14px; font-size:14px; color:var(--text); border-bottom:1px solid rgba(123,77,255,0.06); }
.article-content tr:last-child td { border-bottom:none; }
.article-content tr:nth-child(even) td { background:rgba(123,77,255,0.02); }

/* ── Sidebar ── */
.sidebar { position: sticky; top: 88px; }
.sidebar-card {
    background: #fff;
    border: 1.5px solid rgba(123,77,255,0.10);
    border-radius: 20px; padding: 22px 20px;
    margin-bottom: 18px;
    box-shadow: 0 4px 20px rgba(123,77,255,0.07);
}

.sidebar-search {
    display: flex; overflow: hidden;
    border: 1.5px solid rgba(123,77,255,0.18); border-radius: 12px;
}
.sidebar-search input {
    flex: 1; border: none; outline: none;
    padding: 12px 14px; font-family: 'Manrope', sans-serif;
    font-size: 13px; color: var(--text); background: #fff;
}
.sidebar-search input::placeholder { color: var(--muted); }
.sidebar-search button {
    background: var(--grad-btn); color: #fff; border: none;
    cursor: pointer; padding: 12px 16px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-weight: 700; font-size: 10.5px; letter-spacing: 1px; text-transform: uppercase;
    transition: opacity .2s; white-space: nowrap;
}
.sidebar-search button:hover { opacity: .88; }

.sidebar-title {
    font-family: 'Plus Jakarta Sans', sans-serif; font-size: 16px;
    font-weight: 800; color: var(--text-strong);
    margin-bottom: 18px; padding-bottom: 12px;
    border-bottom: 2px solid rgba(123,77,255,0.09);
    display: flex; align-items: center; gap: 8px;
}
.sidebar-title::before {
    content: ''; width: 14px; height: 3px;
    background: var(--grad-main); border-radius: 2px; display: block;
}

.recent-item {
    display: flex; gap: 12px; align-items: flex-start;
    padding: 10px 0; border-bottom: 1px solid rgba(123,77,255,0.07);
    transition: transform .2s;
}
.recent-item:last-child { border-bottom: none; padding-bottom: 0; }
.recent-item:hover { transform: translateX(4px); }

.recent-thumb {
    width: 66px; height: 52px; border-radius: 10px;
    overflow: hidden; flex-shrink: 0;
    border: 1.5px solid rgba(123,77,255,0.10);
}
.recent-thumb img { width:100%; height:100%; object-fit:cover; display:block; }

.recent-info { flex: 1; min-width: 0; }
.recent-title {
    font-family: 'Plus Jakarta Sans', sans-serif; font-size: 12.5px; font-weight: 700;
    color: var(--text-strong); line-height: 1.45;
    display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;
    margin-bottom: 4px; transition: color .2s;
}
.recent-title:hover { color: var(--purple); }
.recent-date { font-size: 11px; font-weight: 600; color: var(--muted); }

/* ── 404 ── */
.not-found { padding: 160px 0 120px; text-align: center; }
.not-found h1 {
    font-size: 90px; line-height: 1;
    background: var(--grad-main); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;
}
.not-found p { font-size: 18px; color: var(--muted); margin: 16px 0 36px; }
.btn-back {
    display: inline-flex; align-items:center; gap:8px;
    background: var(--grad-btn); color: #fff;
    font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 700; font-size: 15px;
    padding: 14px 34px; border-radius: 50px; transition: all .3s;
    box-shadow: 0 4px 24px rgba(123,77,255,0.35);
}
.btn-back:hover { transform: translateY(-3px); box-shadow: 0 10px 36px rgba(123,77,255,0.45); }

/* ── Back to top ── */
#back-to-top {
    position: fixed; bottom: 36px; left: 36px;
    width: 52px; height: 52px;
    background: var(--grad-main); color: white; border: none;
    border-radius: 15px; cursor: pointer; display: none;
    align-items: center; justify-content: center;
    box-shadow: 0 6px 26px rgba(123,77,255,.38);
    z-index: 999; transition: all .3s; font-size: 20px;
}
#back-to-top.visible { display: flex; }
#back-to-top:hover { transform: translateY(-4px); box-shadow: 0 10px 36px rgba(123,77,255,.50); }

/* ── Responsive ── */
@media(max-width:1024px) {
    .post-layout { grid-template-columns: 1fr; }
    .sidebar { position: static; }
    .article-content { padding: 28px 26px; }
}
@media(max-width:600px) {
    .article-content { padding: 20px 16px; }
    .container { padding: 0 16px; }
    .share-btns { grid-template-columns: repeat(2,1fr); }
    #back-to-top { bottom: 18px; left: 18px; }
    .post-hero { padding: 100px 0 60px; }
}
</style>
</head>
<body>

<?php include 'includes/header.php'; ?>

<?php if (!$post): ?>
<section class="not-found">
    <div class="container">
        <h1>404</h1>
        <p>Oops! Blog post not found.</p>
        <a href="<?php echo $base; ?>" class="btn-back">← Back to Blog</a>
    </div>
</section>
<?php else: ?>

<!-- ══ HERO ══ -->
<section class="post-hero">
    <div class="hero-blob hero-blob-1"></div>
    <div class="hero-blob hero-blob-2"></div>
    <div class="hero-blob hero-blob-3"></div>

    <div class="container hero-inner">

        <!-- Badge -->
        <div class="post-hero-badge">
            <span class="badge-pill-mini"></span>
            Virex Social Blog
        </div>

        <!-- Title -->
        <h1 class="post-hero-title">
            <?php echo htmlspecialchars($post['title']); ?>
        </h1>

        <!-- Meta -->
        <div class="hero-meta">
            <span class="hero-meta-item">
                <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                <?php echo htmlspecialchars($post['date']); ?>
            </span>
            <?php foreach ($post['cats'] as $cat): ?>
                <a href="<?php echo $base; ?>" class="hero-cat-badge"><?php echo htmlspecialchars($cat[0]); ?></a>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Wave divider -->
    <div class="hero-wave">
        <svg viewBox="0 0 1440 50" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,30 C360,55 1080,5 1440,30 L1440,50 L0,50 Z" fill="#FDF8FF"/>
        </svg>
    </div>
</section>

<!-- ══ BODY ══ -->
<section class="post-body">
    <div class="container">
        <div class="post-layout">

            <!-- LEFT MAIN -->
            <div class="post-main">

                <!-- Image Card -->
                <div class="post-img-card">
                    <div class="img-card-photo">
                        <img src="<?php echo htmlspecialchars($post['img']); ?>" alt="<?php echo htmlspecialchars($post['img_alt']); ?>" loading="eager">
                    </div>
                    <div class="img-card-footer">
                        <div class="img-card-logo">
                            <div class="img-card-logo-icon">V</div>
                            <span class="img-card-logo-text">Virex Social</span>
                        </div>
                        <div class="img-card-title"><?php echo htmlspecialchars($post['title']); ?></div>
                        <div class="img-card-site">
                            <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                            virexsocial.com
                        </div>
                    </div>
                </div>

                <!-- Share Buttons -->
                <div class="share-row">
                    <div class="share-row-label">Share This Article:</div>
                    <div class="share-btns">
                        <a href="https://www.facebook.com/share.php?u=<?php echo urlencode($share_url); ?>" target="_blank" rel="noopener" class="share-btn fb">
                            <svg viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                            Facebook
                        </a>
                        <a href="https://wa.me/?text=<?php echo urlencode($share_title . ' ' . $share_url); ?>" target="_blank" rel="noopener" class="share-btn wa">
                            <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/></svg>
                            WhatsApp
                        </a>
                        <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode($share_title); ?>&url=<?php echo urlencode($share_url); ?>" target="_blank" rel="noopener" class="share-btn tw">
                            <svg viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.553 2.173H5.27z"/></svg>
                            Twitter
                        </a>
                        <a href="mailto:?subject=<?php echo urlencode($share_title); ?>&body=<?php echo urlencode($share_url); ?>" class="share-btn em">
                            <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6" fill="none" stroke="white" stroke-width="2"/></svg>
                            Email
                        </a>
                    </div>
                </div>

                <!-- Article -->
                <article class="article-content">
                    <?php echo $post['content']; ?>
                </article>

            </div>

            <!-- SIDEBAR -->
            <aside class="sidebar">
                <div class="sidebar-card">
                    <div class="sidebar-search">
                        <input type="text" placeholder="Search blogs...">
                        <button>Search</button>
                    </div>
                </div>
                <div class="sidebar-card">
                    <div class="sidebar-title">Recent Blogs</div>
                    <?php foreach ($recent as $r_slug => $r_post): ?>
                    <div class="recent-item">
                        <div class="recent-thumb">
                            <img src="<?php echo htmlspecialchars($r_post['img']); ?>" alt="" loading="lazy">
                        </div>
                        <div class="recent-info">
                            <a href="<?php echo $single_base; ?>?slug=<?php echo urlencode($r_slug); ?>" class="recent-title">
                                <?php echo htmlspecialchars($r_post['title']); ?>
                            </a>
                            <div class="recent-date"><?php echo htmlspecialchars($r_post['date']); ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </aside>

        </div>
    </div>
</section>

<?php endif; ?>

<button id="back-to-top" onclick="window.scrollTo({top:0,behavior:'smooth'})">↑</button>

<?php include 'includes/virex-floating-social.php'; ?>
<?php include 'includes/footer.php'; ?>

<script>
window.addEventListener('scroll', function(){
    document.getElementById('back-to-top').classList.toggle('visible', window.scrollY > 400);
});
</script>
</body>
</html>