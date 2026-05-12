<?php
/**
 * Single Blog Post Template — hashtagmedia.ae style
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
<link href="https://fonts.googleapis.com/css2?family=Clash+Display:wght@400;500;600;700&family=Syne:wght@600;700;800&family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
:root {
    --purple:   #7c3aed;
    --text:     #4b4570;
    --text-strong: #1a0f3c;
    --muted:    #9ca3af;
    --border:   rgba(124,58,237,0.12);
    --bg:       #f5f5f7;
    --grad-main: linear-gradient(135deg, #e040fb 0%, #7c3aed 28%, #2563eb 55%, #06b6d4 75%, #f97316 90%, #fbbf24 100%);
    --grad-btn:  linear-gradient(135deg, #e040fb, #7c3aed, #2563eb);
    --grad-hero: linear-gradient(135deg, #0d1b3e 0%, #1a1060 35%, #2d1b8a 65%, #6b21a8 100%);
}
html { scroll-behavior: smooth; }
body { font-family: 'Manrope', sans-serif; color: var(--text); background: var(--bg); overflow-x: hidden; }
h1,h2,h3,h4,h5,h6 { font-family: 'Clash Display', 'Syne', sans-serif; font-weight: 700; color: var(--text-strong); }
a { text-decoration: none; color: inherit; }
img { max-width: 100%; height: auto; }
.container { max-width: 1180px; margin: 0 auto; padding: 0 28px; width: 100%; }

/* NAVBAR */
.navbar {
    position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
    background: rgba(13,5,32,0.95); backdrop-filter: blur(24px);
    border-bottom: 1px solid rgba(255,255,255,0.06);
}
.navbar::before { content:''; position:absolute; top:0; left:0; right:0; height:2px; background:var(--grad-main); }
.nav-inner { display:flex; align-items:center; justify-content:space-between; height:70px; }
.nav-logo { font-family:'Clash Display',sans-serif; font-weight:700; font-size:21px; display:flex; align-items:center; gap:9px; }
.logo-icon { width:34px; height:34px; background:var(--grad-main); border-radius:9px; display:flex; align-items:center; justify-content:center; font-size:15px; font-weight:900; color:white; }
.logo-v { background:var(--grad-main); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text; }
.logo-rest { color:rgba(255,255,255,0.92); }
.nav-back { display:inline-flex; align-items:center; gap:7px; background:rgba(255,255,255,0.08); border:1px solid rgba(255,255,255,0.12); color:rgba(255,255,255,0.75); font-family:'Manrope',sans-serif; font-weight:600; font-size:12.5px; padding:8px 18px; border-radius:50px; transition:all .25s; }
.nav-back:hover { background:rgba(124,58,237,0.3); color:#fff; }
.nav-back svg { width:14px; height:14px; stroke:currentColor; stroke-width:2.5; fill:none; }

/* HERO */
.post-hero {
    padding: 100px 0 52px;
    background: var(--grad-hero);
    position: relative; overflow: hidden; text-align: center;
}
.post-hero::before {
    content:''; position:absolute; inset:0;
    background:
        radial-gradient(ellipse 80% 60% at 10% 50%, rgba(6,182,212,0.35) 0%, transparent 55%),
        radial-gradient(ellipse 60% 80% at 90% 30%, rgba(160,40,200,0.5) 0%, transparent 50%),
        radial-gradient(ellipse 50% 50% at 50% 100%, rgba(37,99,235,0.3) 0%, transparent 60%);
    pointer-events:none;
}
.post-hero::after { content:''; position:absolute; top:0; left:0; right:0; height:2px; background:var(--grad-main); }
.hero-blob { position:absolute; border-radius:50%; filter:blur(60px); pointer-events:none; opacity:0.14; }
.hero-blob-1 { width:400px; height:300px; background:#06b6d4; top:-80px; left:-80px; }
.hero-blob-2 { width:350px; height:280px; background:#a855f7; top:-60px; right:-60px; }
.hero-inner { position:relative; z-index:5; }
.post-hero-title {
    font-family:'Clash Display',sans-serif;
    font-size:clamp(22px,3.2vw,42px); line-height:1.2; font-weight:700;
    color:#fff; margin-bottom:18px; max-width:780px; margin-left:auto; margin-right:auto;
    letter-spacing:-0.3px;
}
.hero-meta { display:flex; align-items:center; justify-content:center; gap:12px; flex-wrap:wrap; }
.hero-meta-item { display:inline-flex; align-items:center; gap:5px; font-family:'Manrope',sans-serif; font-size:13px; font-weight:600; color:rgba(255,255,255,0.7); }
.hero-meta-item svg { width:14px; height:14px; stroke:currentColor; stroke-width:2; fill:none; }
.hero-meta-sep { color:rgba(255,255,255,0.25); }
.hero-cat-badge { display:inline-flex; align-items:center; background:rgba(255,255,255,0.12); border:1px solid rgba(255,255,255,0.2); color:#fff; font-family:'Manrope',sans-serif; font-weight:700; font-size:10.5px; letter-spacing:1.5px; text-transform:uppercase; padding:4px 12px; border-radius:50px; transition:background .2s; }
.hero-cat-badge:hover { background:rgba(255,255,255,0.22); }

/* BODY */
.post-body { padding:40px 0 80px; background:var(--bg); }
.post-layout { display:grid; grid-template-columns:1fr 310px; gap:28px; align-items:start; }

/* Image card */
.post-img-card { background:#fff; border-radius:22px; overflow:hidden; box-shadow:0 4px 32px rgba(0,0,0,0.10); margin-bottom:18px; position:relative; }
.post-img-card::before { content:''; position:absolute; left:-48px; bottom:55px; width:56px; height:75px; background-image:radial-gradient(circle,rgba(124,58,237,0.28) 1.5px,transparent 1.5px); background-size:9px 9px; pointer-events:none; z-index:0; }
.post-img-card::after  { content:''; position:absolute; right:-42px; top:48px; width:52px; height:65px; background-image:radial-gradient(circle,rgba(249,115,22,0.22) 1.5px,transparent 1.5px); background-size:9px 9px; pointer-events:none; z-index:0; }
.img-card-photo { width:100%; aspect-ratio:16/9; overflow:hidden; }
.img-card-photo img { width:100%; height:100%; object-fit:cover; display:block; transition:transform .5s; }
.post-img-card:hover .img-card-photo img { transform:scale(1.03); }
.img-card-footer { padding:16px 22px 14px; text-align:center; background:#fff; position:relative; z-index:1; }
.img-card-logo { display:inline-flex; align-items:center; gap:6px; margin-bottom:7px; }
.img-card-logo-icon { width:24px; height:24px; background:var(--grad-main); border-radius:6px; display:flex; align-items:center; justify-content:center; font-weight:900; font-size:11px; color:#fff; font-family:'Clash Display',sans-serif; }
.img-card-logo-text { font-family:'Clash Display',sans-serif; font-weight:700; font-size:12px; background:var(--grad-main); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text; }
.img-card-title { font-family:'Clash Display',sans-serif; font-size:clamp(13px,1.6vw,17px); font-weight:700; color:var(--text-strong); line-height:1.35; margin-bottom:7px; }
.img-card-site { display:inline-flex; align-items:center; gap:5px; font-size:11px; font-weight:600; color:var(--muted); }
.img-card-site svg { width:11px; height:11px; stroke:currentColor; stroke-width:2; fill:none; }

/* Share row */
.share-row { margin-bottom:24px; }
.share-row-label { font-family:'Clash Display',sans-serif; font-weight:700; font-size:14px; color:var(--text-strong); margin-bottom:9px; }
.share-btns { display:grid; grid-template-columns:repeat(4,1fr); gap:7px; }
.share-btn { display:flex; align-items:center; justify-content:center; gap:7px; padding:11px 8px; border-radius:8px; font-family:'Manrope',sans-serif; font-weight:700; font-size:12.5px; color:#fff; transition:all .22s; border:none; text-decoration:none; cursor:pointer; }
.share-btn svg { width:16px; height:16px; fill:#fff; flex-shrink:0; }
.share-btn.fb { background:#1877f2; } .share-btn.fb:hover { background:#0d65d9; transform:translateY(-2px); box-shadow:0 5px 16px rgba(24,119,242,0.4); }
.share-btn.wa { background:#25D366; } .share-btn.wa:hover { background:#1db954; transform:translateY(-2px); box-shadow:0 5px 16px rgba(37,211,102,0.4); }
.share-btn.tw { background:#111;    } .share-btn.tw:hover { background:#333; transform:translateY(-2px); box-shadow:0 5px 16px rgba(0,0,0,0.25); }
.share-btn.em { background:#ea4335; } .share-btn.em:hover { background:#c5382c; transform:translateY(-2px); box-shadow:0 5px 16px rgba(234,67,53,0.4); }

/* Article */
.article-content { background:#fff; border-radius:18px; padding:38px 42px; box-shadow:0 2px 16px rgba(0,0,0,0.06); }
.article-content h2 { font-family:'Clash Display',sans-serif; font-size:clamp(17px,2.1vw,23px); color:var(--text-strong); margin:34px 0 13px; padding-bottom:9px; border-bottom:2px solid rgba(124,58,237,0.09); }
.article-content h2:first-child { margin-top:0; }
.article-content h3 { font-family:'Clash Display',sans-serif; font-size:clamp(14px,1.7vw,18px); color:var(--text-strong); margin:22px 0 9px; }
.article-content p { font-size:15.5px; line-height:1.9; color:#555070; margin-bottom:17px; }
.article-content ul, .article-content ol { margin:9px 0 18px 17px; }
.article-content li { font-size:15px; line-height:1.85; color:#555070; margin-bottom:6px; padding-left:3px; }
.article-content ul li::marker { color:var(--purple); }
.article-content ol li::marker { color:var(--purple); font-weight:700; }
.article-content strong { color:var(--text-strong); }
.article-content table { width:100%; border-collapse:collapse; margin:18px 0; border-radius:10px; overflow:hidden; border:1px solid var(--border); }
.article-content th { background:rgba(124,58,237,0.07); padding:10px 13px; font-family:'Clash Display',sans-serif; font-size:12px; color:var(--purple); text-align:left; border-bottom:2px solid var(--border); }
.article-content td { padding:10px 13px; font-size:13.5px; color:var(--text); border-bottom:1px solid var(--border); }
.article-content tr:last-child td { border-bottom:none; }
.article-content tr:nth-child(even) td { background:rgba(124,58,237,0.02); }

/* Sidebar */
.sidebar { position:sticky; top:88px; }
.sidebar-card { background:#fff; border-radius:16px; padding:20px 18px; margin-bottom:18px; box-shadow:0 2px 16px rgba(0,0,0,0.06); }
.sidebar-search { display:flex; overflow:hidden; border:1.5px solid var(--border); border-radius:10px; }
.sidebar-search input { flex:1; border:none; outline:none; padding:11px 13px; font-family:'Manrope',sans-serif; font-size:13px; color:var(--text); background:#fff; }
.sidebar-search input::placeholder { color:var(--muted); }
.sidebar-search button { background:var(--grad-hero); color:#fff; border:none; cursor:pointer; padding:11px 16px; font-family:'Clash Display',sans-serif; font-weight:700; font-size:10.5px; letter-spacing:1px; text-transform:uppercase; transition:opacity .2s; white-space:nowrap; }
.sidebar-search button:hover { opacity:0.85; }
.sidebar-title { font-family:'Clash Display',sans-serif; font-size:16px; font-weight:700; color:var(--text-strong); margin-bottom:16px; padding-bottom:11px; border-bottom:2px solid rgba(124,58,237,0.09); }
.recent-item { display:flex; gap:11px; align-items:flex-start; padding:9px 0; border-bottom:1px solid rgba(0,0,0,0.05); transition:transform .2s; }
.recent-item:last-child { border-bottom:none; padding-bottom:0; }
.recent-item:hover { transform:translateX(3px); }
.recent-thumb { width:64px; height:50px; border-radius:7px; overflow:hidden; flex-shrink:0; }
.recent-thumb img { width:100%; height:100%; object-fit:cover; display:block; }
.recent-info { flex:1; min-width:0; }
.recent-title { font-family:'Clash Display',sans-serif; font-size:12px; font-weight:700; color:var(--text-strong); line-height:1.4; display:-webkit-box; -webkit-line-clamp:2; -webkit-box-orient:vertical; overflow:hidden; margin-bottom:3px; transition:color .2s; }
.recent-title:hover { color:var(--purple); }
.recent-date { font-size:10.5px; font-weight:600; color:var(--muted); }

/* 404 */
.not-found { padding:160px 0 120px; text-align:center; }
.not-found h1 { font-size:80px; color:var(--purple); }
.not-found p { font-size:18px; color:var(--muted); margin:16px 0 32px; }
.btn-back { display:inline-flex; align-items:center; gap:8px; background:var(--grad-btn); color:#fff; font-family:'Clash Display',sans-serif; font-weight:600; font-size:15px; padding:14px 32px; border-radius:50px; transition:all .3s; box-shadow:0 4px 20px rgba(124,58,237,0.4); }
.btn-back:hover { transform:translateY(-2px); }

/* Back to top */
#back-to-top { position:fixed; bottom:36px; left:36px; width:48px; height:48px; background:var(--grad-main); color:white; border:none; border-radius:13px; cursor:pointer; display:none; align-items:center; justify-content:center; box-shadow:0 4px 22px rgba(124,58,237,.4); z-index:999; transition:all .3s; font-size:18px; }
#back-to-top.visible { display:flex; }
#back-to-top:hover { transform:translateY(-3px); }

/* Responsive */
@media(max-width:1024px) { .post-layout { grid-template-columns:1fr; } .sidebar { position:static; } .article-content { padding:28px 26px; } }
@media(max-width:600px) { .article-content { padding:20px 16px; } .container { padding:0 14px; } .share-btns { grid-template-columns:repeat(2,1fr); } #back-to-top { bottom:18px; left:18px; } }
</style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="container">
        <div class="nav-inner">
            <a href="<?php echo $base; ?>" class="nav-logo">
                <div class="logo-icon">V</div>
                <span><span class="logo-v">Virex </span><span class="logo-rest">Social</span></span>
            </a>
            <a href="<?php echo $base; ?>" class="nav-back">
                <svg viewBox="0 0 24 24"><path d="M19 12H5M12 5l-7 7 7 7"/></svg>
                Back to Blog
            </a>
        </div>
    </div>
</nav>

<?php if (!$post): ?>
<section class="not-found">
    <div class="container">
        <h1>404</h1>
        <p>Oops! Blog not found.</p>
        <a href="<?php echo $base; ?>" class="btn-back">← Back to Blog</a>
    </div>
</section>
<?php else: ?>

<!-- HERO -->
<section class="post-hero">
    <div class="hero-blob hero-blob-1"></div>
    <div class="hero-blob hero-blob-2"></div>
    <div class="container hero-inner">
        <h1 class="post-hero-title"><?php echo htmlspecialchars($post['title']); ?></h1>
        <div class="hero-meta">
            <span class="hero-meta-item">
                <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                <?php echo htmlspecialchars($post['date']); ?>
            </span>
            <span class="hero-meta-sep">•</span>
            <?php foreach ($post['cats'] as $cat): ?>
                <a href="<?php echo $base; ?>" class="hero-cat-badge"><?php echo htmlspecialchars($cat[0]); ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- BODY -->
<section class="post-body">
    <div class="container">
        <div class="post-layout">

            <!-- LEFT -->
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
                    <div class="share-row-label">Share This:</div>
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
                            <svg viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.553 2.173H5.27L19.14 20.306z"/></svg>
                            Twitter
                        </a>
                        <a href="mailto:?subject=<?php echo urlencode($share_title); ?>&body=<?php echo urlencode($share_url); ?>" class="share-btn em">
                            <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6" fill="none" stroke="white" stroke-width="2"/></svg>
                            Email
                        </a>
                    </div>
                </div>

                <!-- Article Content -->
                <article class="article-content">
                    <?php echo $post['content']; ?>
                </article>

            </div>

            <!-- SIDEBAR -->
            <aside class="sidebar">
                <div class="sidebar-card">
                    <div class="sidebar-search">
                        <input type="text" placeholder="Search Blogs....">
                        <button>SEARCH</button>
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
<script>
window.addEventListener('scroll',function(){
    document.getElementById('back-to-top').classList.toggle('visible', window.scrollY > 400);
});
</script>

<?php include 'includes/footer.php'; ?>
</body>
</html>