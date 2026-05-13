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