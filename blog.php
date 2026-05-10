<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Marketing Blog for Smart Business Growth</title>
    <meta name="description" content="Explore our digital marketing blog with expert tips, real strategies, and proven insights to grow your brand online—written by real marketers.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --purple:       #6254e7;
            --purple-light: #9289f1;
            --dark:         #3b3663;
            --orange:       #ff7426;
            --text:         #7a7a7a;
            --white:        #fff;
            --bg:           #f9f9fc;
        }

        body {
            font-family: 'Rubik', sans-serif;
            color: var(--text);
            background: var(--white);
            overflow-x: hidden;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Nunito', sans-serif;
            font-weight: 800;
            color: var(--dark);
        }
        a { text-decoration: none; color: inherit; }
        p { color: var(--text); }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 30px;
            width: 100%;
        }

        /* ─── HERO ─── */
        .blog-hero {
            position: relative;
            overflow: hidden;
            padding: 140px 0 120px;
            text-align: center;
            background: #3a3af0;
        }

        .blog-hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background:
                radial-gradient(ellipse 80% 80% at 0% 50%, #5b3de8 0%, transparent 60%),
                radial-gradient(ellipse 60% 100% at 100% 30%, #8b2fc9 0%, transparent 55%),
                radial-gradient(ellipse 70% 60% at 50% 100%, #2222cc 0%, transparent 60%),
                linear-gradient(135deg, #3535e8 0%, #4c2bc4 40%, #7b1fa2 100%);
            z-index: 0;
        }

        /* Blob shapes */
        .blob-1 {
            position: absolute;
            width: 65%; height: 200%;
            top: -60%; left: -15%;
            background: linear-gradient(140deg, rgba(0,180,220,0.55) 0%, rgba(40,120,255,0.35) 50%, transparent 80%);
            border-radius: 60% 40% 70% 30% / 50% 60% 40% 50%;
            transform: rotate(-15deg);
            z-index: 1;
            filter: blur(2px);
        }
        .blob-2 {
            position: absolute;
            width: 55%; height: 180%;
            top: -40%; left: -5%;
            background: linear-gradient(160deg, rgba(0,210,240,0.3) 0%, rgba(20,100,220,0.2) 60%, transparent 90%);
            border-radius: 45% 55% 60% 40% / 60% 40% 60% 40%;
            transform: rotate(-10deg);
            z-index: 1;
            filter: blur(1px);
        }
        .blob-3 {
            position: absolute;
            width: 50%; height: 150%;
            top: -25%; right: -10%;
            background: radial-gradient(ellipse 80% 80% at 60% 40%, rgba(160,40,200,0.75) 0%, rgba(120,20,180,0.5) 40%, transparent 75%);
            border-radius: 50% 50% 40% 60% / 40% 60% 40% 60%;
            z-index: 1;
        }
        .blob-4 {
            position: absolute;
            width: 70%; height: 60%;
            bottom: -20%; left: 50%;
            transform: translateX(-50%);
            background: radial-gradient(ellipse 60% 60% at 50% 80%, rgba(40,40,180,0.6) 0%, transparent 70%);
            z-index: 1;
        }
        .blob-5 {
            position: absolute;
            width: 45%; height: 130%;
            top: -15%; left: 5%;
            background: linear-gradient(150deg, rgba(0,230,255,0.18) 0%, rgba(0,180,220,0.1) 50%, transparent 80%);
            border-radius: 30% 70% 50% 50% / 50% 50% 50% 50%;
            transform: rotate(-5deg);
            z-index: 2;
            filter: blur(0.5px);
        }

        .hero-content {
            position: relative;
            z-index: 10;
        }

        .blog-hero h1 {
            font-family: 'Nunito', sans-serif;
            font-size: clamp(28px, 4.5vw, 52px);
            font-weight: 800;
            line-height: 1.15;
            color: #fff;
            margin-bottom: 18px;
            letter-spacing: -0.5px;
        }

        .blog-hero p.lead {
            color: rgba(255,255,255,0.80) !important;
            font-size: 16px;
            max-width: 600px;
            margin: 0 auto 32px;
            line-height: 1.7;
            font-weight: 400;
        }

        .btn-hero {
            background: rgba(108,60,255,0.55);
            color: #fff;
            border: 1.5px solid rgba(255,255,255,0.45);
            padding: 12px 32px;
            border-radius: 6px;
            font-family: 'Nunito', sans-serif;
            font-weight: 700;
            font-size: 15px;
            transition: all 0.3s;
            display: inline-block;
        }
        .btn-hero:hover {
            background: rgba(108,60,255,0.80);
            color: #fff;
            border-color: rgba(255,255,255,0.70);
            transform: translateY(-2px);
        }

        @media (max-width: 991px) {
            .blog-hero { padding: 100px 0 80px; }
            .blob-1 { width: 100%; left: -30%; }
            .blob-3 { width: 70%; right: -20%; }
        }
        @media (max-width: 767px) {
            .blog-hero { padding: 80px 0 70px; }
        }

        /* ─── BLOG LISTING SECTION ─── */
        .blog-listing {
            padding: 100px 0;
            background: var(--bg);
        }

        /* Grid */
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        @media (max-width: 1023px) {
            .blog-grid { grid-template-columns: 1fr 1fr; }
        }
        @media (max-width: 600px) {
            .blog-grid { grid-template-columns: 1fr; }
        }

        /* ─── BLOG CARD ─── */
        .blog-card {
            background: var(--white);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 24px rgba(0,0,0,0.06);
            border: 1px solid rgba(98,84,231,0.06);
            transition: all 0.35s cubic-bezier(0.4,0,0.2,1);
            display: flex;
            flex-direction: column;
        }
        .blog-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 60px rgba(98,84,231,0.15);
            border-color: rgba(98,84,231,0.15);
        }

        /* Thumbnail */
        .blog-thumb {
            width: 100%;
            aspect-ratio: 4/3;
            overflow: hidden;
            display: block;
            background: #eee;
        }
        .blog-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.5s ease;
        }
        .blog-card:hover .blog-thumb img {
            transform: scale(1.05);
        }

        /* Content */
        .blog-content {
            padding: 24px;
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        /* Category + date meta */
        .listing-meta {
            display: flex;
            align-items: center;
            gap: 6px;
            flex-wrap: wrap;
            font-family: 'Nunito', sans-serif;
            font-size: 13px;
            font-weight: 700;
            color: var(--text);
            margin-bottom: 12px;
            line-height: 1.4;
        }
        .listing-meta .meta-date { color: var(--text); font-weight: 400; }
        .listing-meta .sep { color: #ccc; }
        .listing-meta .meta-cat a {
            color: var(--purple);
            transition: color 0.2s;
        }
        .listing-meta .meta-cat a:hover { color: var(--dark); }

        /* Title */
        .blog-title {
            font-family: 'Nunito', sans-serif;
            font-size: 18px;
            font-weight: 800;
            color: var(--dark);
            line-height: 1.4;
            margin-bottom: 12px;
            transition: color 0.2s;
            display: block;
        }
        .blog-title:hover { color: var(--purple); }

        /* Excerpt */
        .blog-excerpt {
            font-size: 14px;
            line-height: 1.7;
            color: var(--text);
            margin-bottom: 20px;
            flex: 1;
        }

        /* Share block */
        .post-share {
            display: flex;
            align-items: center;
            gap: 10px;
            padding-top: 16px;
            border-top: 1px solid rgba(98,84,231,0.08);
        }
        .post-share span {
            font-family: 'Nunito', sans-serif;
            font-size: 12px;
            font-weight: 700;
            color: var(--text);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .share-links { display: flex; gap: 8px; }
        .share-links a {
            width: 30px; height: 30px;
            border-radius: 8px;
            background: rgba(98,84,231,0.06);
            display: flex; align-items: center; justify-content: center;
            font-size: 13px;
            color: var(--purple);
            transition: all 0.2s;
            font-family: serif;
            font-weight: bold;
        }
        .share-links a:hover {
            background: var(--purple);
            color: #fff;
        }

        /* Responsive */
        @media (max-width: 767px) {
            .blog-listing { padding: 60px 0; }
        }
    </style>
</head>
<body>

<!-- ═══════════════════════════════════
     HERO
═══════════════════════════════════ -->
<section class="blog-hero">
    <div class="blob-1"></div>
    <div class="blob-2"></div>
    <div class="blob-3"></div>
    <div class="blob-4"></div>
    <div class="blob-5"></div>

    <div class="container hero-content">
        <h1>Digital Marketing Blog Full of Real Growth Insights</h1>
        <p class="lead">
            Welcome to our digital marketing blog—your go-to source for actionable tips,
            expert advice, and fresh ideas to grow your brand in the digital world.
        </p>
        <a href="contact-us/" class="btn-hero">Contact Us</a>
    </div>
</section>

<!-- ═══════════════════════════════════
     BLOG LISTING
═══════════════════════════════════ -->
<section class="blog-listing">
    <div class="container">

        <?php
        $posts = [
            [
                "url"       => "shopify-seo-checklist/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2026/02/Grow-Your-Business-Online-Proven-Strategies-That-Actually-Work-2-768x576-540x405.png",
                "alt"       => "Grow Your Business Online Proven Strategies That Actually Work",
                "date"      => "February 6, 2026",
                "cats"      => [["SEO", "category/seo/"]],
                "title"     => "Shopify SEO Checklist: The Ultimate Guide to Optimize Your Store",
                "excerpt"   => "Running Shopify stores today is more competitive than ever. You can have the best products and still struggle with...",
                "fb_url"    => "https://hashtagmedia.ae/shopify-seo-checklist/",
                "tw_url"    => "https://hashtagmedia.ae/shopify-seo-checklist/",
                "tw_title"  => "Shopify SEO Checklist: The Ultimate Guide to Optimize Your Store",
            ],
            [
                "url"       => "best-time-to-post-on-social-media/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2026/01/Person-holding-a-clock-with-social-media-icons-floating-around-them-768x488-540x343.webp",
                "alt"       => "Person holding a clock with social media icons floating around them.",
                "date"      => "February 4, 2026",
                "cats"      => [["Social Media", "category/social-media/"]],
                "title"     => "The Best Time to Post on Social Media: A Platform-Specific Guide to Boost Engagement",
                "excerpt"   => "You can never win on social media if you don't know your users and audience. Whenever you're working on growing a...",
                "fb_url"    => "https://hashtagmedia.ae/best-time-to-post-on-social-media/",
                "tw_url"    => "https://hashtagmedia.ae/best-time-to-post-on-social-media/",
                "tw_title"  => "The Best Time to Post on Social Media",
            ],
            [
                "url"       => "grow-your-business-online/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2026/01/a-professional-male-working-on-PC-graph-on-screen-coffee-mug-glasses-calculator-on-the-table-768x561-540x394.webp",
                "alt"       => "a professional male working on PC, graph on screen, coffee mug, glasses, calculator on the table",
                "date"      => "February 2, 2026",
                "cats"      => [["Branding", "category/branding/"], ["Marketing", "category/marketing/"]],
                "title"     => "Grow Your Business Online: Proven Strategies That Actually Work",
                "excerpt"   => "Running an online business may seem like an easy way to make money, but it's not as simple as it looks. It's not...",
                "fb_url"    => "https://hashtagmedia.ae/grow-your-business-online/",
                "tw_url"    => "https://hashtagmedia.ae/grow-your-business-online/",
                "tw_title"  => "Grow Your Business Online: Proven Strategies That Actually Work",
            ],
            [
                "url"       => "google-ads-vs-social-media-ads/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2026/01/Comparison-infographic-of-Google-Ads-vs-Social-Media-Ads-with-statistics-and-key-insights-768x432-540x303.webp",
                "alt"       => "Comparison infographic of Google Ads vs Social Media Ads with statistics and key insights",
                "date"      => "January 30, 2026",
                "cats"      => [["PPC", "category/ppc/"]],
                "title"     => "Google Ads vs Social Media Ads: Pros, Cons, and Which Is Right for Your Business",
                "excerpt"   => "With the rise of digital trends, a brand's future is shaped by social media and the internet. No matter where...",
                "fb_url"    => "https://hashtagmedia.ae/google-ads-vs-social-media-ads/",
                "tw_url"    => "https://hashtagmedia.ae/google-ads-vs-social-media-ads/",
                "tw_title"  => "Google Ads vs Social Media Ads",
            ],
            [
                "url"       => "ranking-by-seo/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2026/01/Laptop-displaying-an-SEO-dashboard-with-graphs-and-charts-on-a-desk._11zon-768x518-540x364.webp",
                "alt"       => "Laptop displaying an SEO dashboard with graphs and charts on a desk.",
                "date"      => "January 28, 2026",
                "cats"      => [["SEO", "category/seo/"]],
                "title"     => "How Ranking by SEO Helps You Reach Google's First Page",
                "excerpt"   => "We all want to reach the holy grail of the internet—Google's First Page. It's where the traffic, visibility, and clicks...",
                "fb_url"    => "https://hashtagmedia.ae/ranking-by-seo/",
                "tw_url"    => "https://hashtagmedia.ae/ranking-by-seo/",
                "tw_title"  => "How Ranking by SEO Helps You Reach Google's First Page",
            ],
            [
                "url"       => "what-are-meta-ads/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2026/01/An-image-of-a-smartphone-displaying-the-Meta-Ads-Manager-app-with-the-Meta-logo-in-the-background-768x403-540x283.webp",
                "alt"       => "What Are Meta Ads and How Can They Boost Your Marketing?",
                "date"      => "January 26, 2026",
                "cats"      => [["Marketing", "category/marketing/"], ["PPC", "category/ppc/"], ["Social Media", "category/social-media/"]],
                "title"     => "What Are Meta Ads and How Can They Boost Your Marketing?",
                "excerpt"   => "If you're in the world of social media marketing, you've likely heard the buzz about Meta Ads. But here's the real...",
                "fb_url"    => "https://hashtagmedia.ae/what-are-meta-ads/",
                "tw_url"    => "https://hashtagmedia.ae/what-are-meta-ads/",
                "tw_title"  => "What Are Meta Ads and How Can They Boost Your Marketing?",
            ],
            [
                "url"       => "voice-search-for-seo/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2026/01/How-Voice-Search-for-SEO-is-Shaping-the-Future-of-Search-Engine-Optimization-768x576-540x405.png",
                "alt"       => "How Voice Search for SEO is Shaping the Future of Search Engine Optimization",
                "date"      => "January 22, 2026",
                "cats"      => [["SEO", "category/seo/"]],
                "title"     => "How Voice Search for SEO is Shaping the Future of Search Engine Optimization",
                "excerpt"   => "Voice search isn't some sci-fi concept anymore – it's here, and it's changing the game in ways we can't ignore. I remember...",
                "fb_url"    => "https://hashtagmedia.ae/voice-search-for-seo/",
                "tw_url"    => "https://hashtagmedia.ae/voice-search-for-seo/",
                "tw_title"  => "How Voice Search for SEO is Shaping the Future",
            ],
            [
                "url"       => "how-to-write-emails-that-convert/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2026/01/A-close-up-view-of-a-Gmail-inbox-on-a-laptop-screen-showing-various-email-folders-like-Inbox-Starred-and-Snoozed-768x512-540x360.webp",
                "alt"       => "A close-up view of a Gmail inbox on a laptop screen.",
                "date"      => "January 20, 2026",
                "cats"      => [["Marketing", "category/marketing/"]],
                "title"     => "How to Write Emails That Convert: Tips for Crafting Effective Email Campaigns",
                "excerpt"   => "Email marketing is one of the most powerful tools for businesses of any size, but here's the million-dollar...",
                "fb_url"    => "https://hashtagmedia.ae/how-to-write-emails-that-convert/",
                "tw_url"    => "https://hashtagmedia.ae/how-to-write-emails-that-convert/",
                "tw_title"  => "How to Write Emails That Convert",
            ],
            [
                "url"       => "types-of-email-marketing-campaigns-which-one-is-right-for-your-business/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/12/A-person-is-analyzing-website-performance-data-on-a-laptop-showcasing-metrics-like-user-acquisition-behavior-and-conversions-768x476-540x334.webp",
                "alt"       => "A person is analyzing website performance data on a laptop.",
                "date"      => "December 29, 2025",
                "cats"      => [["Marketing", "category/marketing/"]],
                "title"     => "Types of Email Marketing Campaigns: Which One is Right for Your Business?",
                "excerpt"   => "Email marketing is one of the most effective ways to connect with your audience, promote your products, and drive...",
                "fb_url"    => "https://hashtagmedia.ae/types-of-email-marketing-campaigns-which-one-is-right-for-your-business/",
                "tw_url"    => "https://hashtagmedia.ae/types-of-email-marketing-campaigns-which-one-is-right-for-your-business/",
                "tw_title"  => "Types of Email Marketing Campaigns",
            ],
            [
                "url"       => "key-advantages-of-a-responsive-website/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/12/Web-design-displayed-on-mobile-tablet-and-laptop-768x512-540x360.webp",
                "alt"       => "Web design displayed on mobile, tablet, and laptop",
                "date"      => "December 26, 2025",
                "cats"      => [["Web", "category/web/"]],
                "title"     => "The Key Advantages of a Responsive Website for Mobile and Desktop Users",
                "excerpt"   => "Have you ever visited a website on your phone and struggled to navigate it? Maybe the text was too small, or the images...",
                "fb_url"    => "https://hashtagmedia.ae/key-advantages-of-a-responsive-website/",
                "tw_url"    => "https://hashtagmedia.ae/key-advantages-of-a-responsive-website/",
                "tw_title"  => "Key Advantages of a Responsive Website",
            ],
            [
                "url"       => "best-free-software-for-ui-ux-design/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/12/Illustration-of-two-people-painting-the-UX-letters-540x405.webp",
                "alt"       => "Illustration of two people painting the 'UX' letters.",
                "date"      => "December 24, 2025",
                "cats"      => [["Design", "category/design/"]],
                "title"     => "Best Free Software for UI/UX Design: Top Tools for Designers on a Budget",
                "excerpt"   => "UI/UX design is at the heart of every great digital experience, and let's face it—it's what makes users stick...",
                "fb_url"    => "https://hashtagmedia.ae/best-free-software-for-ui-ux-design/",
                "tw_url"    => "https://hashtagmedia.ae/best-free-software-for-ui-ux-design/",
                "tw_title"  => "Best Free Software for UI/UX Design",
            ],
            [
                "url"       => "ui-ux-design-with-figma/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/12/an-asian-UI-UX-designer-working-on-a-design-768x493-540x346.webp",
                "alt"       => "an asian UI UX designer working on a design",
                "date"      => "December 22, 2025",
                "cats"      => [["Design", "category/design/"]],
                "title"     => "UI/UX Design with Figma: How to Streamline Your Design Process",
                "excerpt"   => "As a UI/UX designer, your creative journey can be full of twists and turns. You need a tool that helps you navigate all...",
                "fb_url"    => "https://hashtagmedia.ae/ui-ux-design-with-figma/",
                "tw_url"    => "https://hashtagmedia.ae/ui-ux-design-with-figma/",
                "tw_title"  => "UI/UX Design with Figma",
            ],
            [
                "url"       => "seo-audit-agency/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/12/A-3D-architectural-blueprint-with-furniture-surrounded-by-drawing-tools-768x439-540x308.webp",
                "alt"       => "A 3D architectural blueprint with furniture, surrounded by drawing tools.",
                "date"      => "December 19, 2025",
                "cats"      => [["SEO", "category/seo/"]],
                "title"     => "How an SEO Audit Agency Creates an In-Depth SEO Audit Report",
                "excerpt"   => "In today's digital jungle, having a website that stands out on search engines is the key to unlocking business success....",
                "fb_url"    => "https://hashtagmedia.ae/seo-audit-agency/",
                "tw_url"    => "https://hashtagmedia.ae/seo-audit-agency/",
                "tw_title"  => "How an SEO Audit Agency Creates an In-Depth SEO Audit Report",
            ],
            [
                "url"       => "best-image-optimizer-for-wordpress/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/12/a-cycle-image-being-optimized-768x576-540x405.webp",
                "alt"       => "a cycle image being optimized",
                "date"      => "December 17, 2025",
                "cats"      => [["Optimization", "category/optimization/"]],
                "title"     => "Best Image Optimizer for WordPress: Top Tools to Boost Your Site's Speed",
                "excerpt"   => "Have you ever noticed that some websites load very slowly and get stuck? It's frustrating, right? High-resolution images...",
                "fb_url"    => "https://hashtagmedia.ae/best-image-optimizer-for-wordpress/",
                "tw_url"    => "https://hashtagmedia.ae/best-image-optimizer-for-wordpress/",
                "tw_title"  => "Best Image Optimizer for WordPress",
            ],
            [
                "url"       => "seo-and-geo-services/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/12/SEO-VS-GEO-with-icons-on-a-dark-background-768x432-540x303.webp",
                "alt"       => "SEO-VS-GEO with icons on a dark background",
                "date"      => "December 15, 2025",
                "cats"      => [["SEO", "category/seo/"]],
                "title"     => "SEO and GEO Services: Key Differences and How They Work Together",
                "excerpt"   => "In today's fast-paced digital world, staying ahead of the curve can feel like a constant race. Every business is trying to...",
                "fb_url"    => "https://hashtagmedia.ae/seo-and-geo-services/",
                "tw_url"    => "https://hashtagmedia.ae/seo-and-geo-services/",
                "tw_title"  => "SEO and GEO Services: Key Differences",
            ],
            [
                "url"       => "what-is-the-use-of-google-my-business/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/12/A-close-up-of-the-Google-My-Business-website-showing-the-main-menu-options-768x432-540x303.webp",
                "alt"       => "A close-up of the Google My Business website showing the main menu options.",
                "date"      => "December 13, 2025",
                "cats"      => [["SEO", "category/seo/"]],
                "title"     => "What Is the Use of Google My Business? Why Every Business Needs It",
                "excerpt"   => "In today's digital world, Google My Business (GMB) has quickly become one of my must-have tools as a business...",
                "fb_url"    => "https://hashtagmedia.ae/what-is-the-use-of-google-my-business/",
                "tw_url"    => "https://hashtagmedia.ae/what-is-the-use-of-google-my-business/",
                "tw_title"  => "What Is the Use of Google My Business?",
            ],
            [
                "url"       => "seo-vs-sem/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/Hand-changing-wooden-blocks-from-SEO-to-SEM-1-768x493-540x346.jpeg",
                "alt"       => "Hand changing wooden blocks from 'SEO' to 'SEM'",
                "date"      => "December 9, 2025",
                "cats"      => [["SEO", "category/seo/"]],
                "title"     => "SEO vs SEM: Understanding the Difference and When to Use Each",
                "excerpt"   => "When I first started exploring ways to grow my online presence, I kept running into two terms everywhere: SEO (Search...",
                "fb_url"    => "https://hashtagmedia.ae/seo-vs-sem/",
                "tw_url"    => "https://hashtagmedia.ae/seo-vs-sem/",
                "tw_title"  => "SEO vs SEM: Understanding the Difference",
            ],
            [
                "url"       => "sme-in-digital-marketing/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/3-blocks-of-SME-adjusted-on-coins-768x512-540x360.webp",
                "alt"       => "3 blocks of SME adjusted on coins",
                "date"      => "December 9, 2025",
                "cats"      => [["Marketing", "category/marketing/"]],
                "title"     => "SME in Digital Marketing: What It Means and Why It Matters",
                "excerpt"   => "So, here's the million-dollar question: What's that one thing that can help your small or medium-sized business really...",
                "fb_url"    => "https://hashtagmedia.ae/sme-in-digital-marketing/",
                "tw_url"    => "https://hashtagmedia.ae/sme-in-digital-marketing/",
                "tw_title"  => "SME in Digital Marketing",
            ],
            [
                "url"       => "seo-and-ppc-services/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/A-comparison-of-SEO-magnifying-glass-and-PPC-dollar-signs-strategies-768x402-540x282.webp",
                "alt"       => "A comparison of SEO (magnifying glass) and PPC (dollar signs) strategies",
                "date"      => "December 5, 2025",
                "cats"      => [["PPC", "category/ppc/"], ["SEO", "category/seo/"]],
                "title"     => "SEO and PPC Services: How They Work Together to Maximize Results",
                "excerpt"   => "In the fast-evolving world of digital marketing, I bet you're constantly looking for ways to boost your online presence,...",
                "fb_url"    => "https://hashtagmedia.ae/seo-and-ppc-services/",
                "tw_url"    => "https://hashtagmedia.ae/seo-and-ppc-services/",
                "tw_title"  => "SEO and PPC Services",
            ],
            [
                "url"       => "writing-a-script-for-a-video-guide/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/view-of-hands-typing-on-laptop-keyboard-highlighter-and-pen-on-paper-a-cup-of-coffee-768x421-540x296.webp",
                "alt"       => "view of hands typing on laptop keyboard, highlighter and pen on paper, a cup of coffee",
                "date"      => "December 5, 2025",
                "cats"      => [["Content Writing", "category/content-writing/"]],
                "title"     => "Writing a Script for a Video: A Step-by-Step Guide for Beginners",
                "excerpt"   => "You know what can really mess things up in video-making? When you create a video that just goes on and on without any...",
                "fb_url"    => "https://hashtagmedia.ae/writing-a-script-for-a-video-guide/",
                "tw_url"    => "https://hashtagmedia.ae/writing-a-script-for-a-video-guide/",
                "tw_title"  => "Writing a Script for a Video",
            ],
            [
                "url"       => "future-of-ai-in-digital-marketing/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/A-person-using-a-smartphone-with-digital-icons-floating-around-768x512-540x360.jpg",
                "alt"       => "A person using a smartphone with digital icons floating around",
                "date"      => "December 1, 2025",
                "cats"      => [["Marketing", "category/marketing/"]],
                "title"     => "The Future of AI in Digital Marketing: Trends You Can't Ignore",
                "excerpt"   => "Sometimes, I'll be honest, I find AI a bit intimidating. It can seem like it's taking over everything, and honestly, that...",
                "fb_url"    => "https://hashtagmedia.ae/future-of-ai-in-digital-marketing/",
                "tw_url"    => "https://hashtagmedia.ae/future-of-ai-in-digital-marketing/",
                "tw_title"  => "The Future of AI in Digital Marketing",
            ],
            [
                "url"       => "types-of-social-media-content/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/illustration-of-different-people-working-and-social-media-icons-768x370-540x260.webp",
                "alt"       => "types of social media content icons",
                "date"      => "December 1, 2025",
                "cats"      => [["Marketing", "category/marketing/"]],
                "title"     => "Types of Social Media Content: What to Post for Maximum Impact",
                "excerpt"   => "Modern businesses thrive on meaningful content. It's no longer about filling your social feeds with random videos...",
                "fb_url"    => "https://hashtagmedia.ae/types-of-social-media-content/",
                "tw_url"    => "https://hashtagmedia.ae/types-of-social-media-content/",
                "tw_title"  => "Types of Social Media Content",
            ],
            [
                "url"       => "how-to-make-a-website-load-faster/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/Computer-with-a-globe-and-digital-data-streams-symbolizing-fast-internet-540x288.webp",
                "alt"       => "Computer with a globe and digital data streams, symbolizing fast internet",
                "date"      => "November 28, 2025",
                "cats"      => [["Optimization", "category/optimization/"]],
                "title"     => "How to Make a Website Load Faster: Essential Tips for Boosting Speed",
                "excerpt"   => "In today's fast-paced digital world, waiting for a slow website to load is like waiting for a kettle to boil—frustrating,...",
                "fb_url"    => "https://hashtagmedia.ae/how-to-make-a-website-load-faster/",
                "tw_url"    => "https://hashtagmedia.ae/how-to-make-a-website-load-faster/",
                "tw_title"  => "How to Make a Website Load Faster",
            ],
            [
                "url"       => "types-of-content-writing/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/A-person-writing-Types-of-Content-Writing-in-a-notebook-with-a-cup-of-coffee-nearby-768x432-540x303.jpg",
                "alt"       => "A person writing Types of Content Writing in a notebook with a cup of coffee nearby",
                "date"      => "November 28, 2025",
                "cats"      => [["Content Writing", "category/content-writing/"]],
                "title"     => "What Are the Types of Content Writing? A Guide to Creating Effective Content",
                "excerpt"   => "As a content writer, I face challenges like finding the right tone for different types of content writing and dealing with...",
                "fb_url"    => "https://hashtagmedia.ae/types-of-content-writing/",
                "tw_url"    => "https://hashtagmedia.ae/types-of-content-writing/",
                "tw_title"  => "Types of Content Writing",
            ],
            [
                "url"       => "why-hire-a-content-writer/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/A-person-writing-in-a-notebook-with-a-pen-while-sitting-at-a-desk-with-a-laptop-and-a-cup-of-coffee-768x480-540x337.webp",
                "alt"       => "A person writing in a notebook with a pen while sitting at a desk with a laptop and a cup of coffee",
                "date"      => "November 26, 2025",
                "cats"      => [["Content Writing", "category/content-writing/"]],
                "title"     => "Why You Should Hire a Content Writer for Your Website's Success",
                "excerpt"   => "Ever wondered what makes a website truly stand out in a sea of competition? It's not just the sleek design or eye-catching...",
                "fb_url"    => "https://hashtagmedia.ae/why-hire-a-content-writer/",
                "tw_url"    => "https://hashtagmedia.ae/why-hire-a-content-writer/",
                "tw_title"  => "Why You Should Hire a Content Writer",
            ],
            [
                "url"       => "types-of-social-media-posts/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/People-using-smartphones-with-social-media-likes-comments-and-notifications-appearing-on-screen-768x471-540x331.webp",
                "alt"       => "People using smartphones with social media likes, comments, and notifications appearing on screen",
                "date"      => "November 26, 2025",
                "cats"      => [["Marketing", "category/marketing/"]],
                "title"     => "The Best Types of Social Media Posts to Boost Engagement and Reach",
                "excerpt"   => "Let's be real—social media can feel like a lot to handle. There are endless things you could post, but only a few will...",
                "fb_url"    => "https://hashtagmedia.ae/types-of-social-media-posts/",
                "tw_url"    => "https://hashtagmedia.ae/types-of-social-media-posts/",
                "tw_title"  => "Best Types of Social Media Posts",
            ],
            [
                "url"       => "website-content-creation/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/A-person-typing-on-a-laptop-in-WordPress-while-writing-a-blog-post-titled-How-I-promote-my-new-blog-posts-768x512-540x360.webp",
                "alt"       => "A person typing on a laptop in WordPress while writing a blog post",
                "date"      => "November 24, 2025",
                "cats"      => [["Web", "category/web/"]],
                "title"     => "Why Website Content Creation is Key to Increasing Traffic and Engagement",
                "excerpt"   => "When I think about building a successful website, the first thing that stands out to me is content—because let's face it,...",
                "fb_url"    => "https://hashtagmedia.ae/website-content-creation/",
                "tw_url"    => "https://hashtagmedia.ae/website-content-creation/",
                "tw_title"  => "Why Website Content Creation is Key",
            ],
            [
                "url"       => "google-ads-management/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/phone-in-hands-with-google-ads-opened-a-cup-of-coffee-keyboard-on-table-540x324.webp",
                "alt"       => "phone in hands with google ads opened, a cup of coffee, keyboard on table",
                "date"      => "November 24, 2025",
                "cats"      => [["PPC", "category/ppc/"]],
                "title"     => "How Google Ads Management Can Transform Your Marketing Strategy",
                "excerpt"   => "If you're putting all your energy into creating great content but still struggling to get noticed, you're not...",
                "fb_url"    => "https://hashtagmedia.ae/google-ads-management/",
                "tw_url"    => "https://hashtagmedia.ae/google-ads-management/",
                "tw_title"  => "How Google Ads Management Can Transform Your Marketing Strategy",
            ],
            [
                "url"       => "seo-vs-google-ads/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/SEO-and-Google-Ads-written-on-gray-background-768x461-540x324.webp",
                "alt"       => "SEO vs Google Ads written on gray background",
                "date"      => "November 21, 2025",
                "cats"      => [["SEO", "category/seo/"]],
                "title"     => "SEO vs Google Ads: Which One Should You Choose for Your Business?",
                "excerpt"   => "Trying to get your business noticed in today's digital world can feel like a huge challenge, right? With so many...",
                "fb_url"    => "https://hashtagmedia.ae/seo-vs-google-ads/",
                "tw_url"    => "https://hashtagmedia.ae/seo-vs-google-ads/",
                "tw_title"  => "SEO vs Google Ads",
            ],
            [
                "url"       => "google-ads-vs-google-adwords/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/The-image-shows-a-comparison-of-the-Google-AdWords-logo-left-and-the-Google-Ads-logo-right-768x480-540x337.webp",
                "alt"       => "Comparison of the Google AdWords logo and the Google Ads logo",
                "date"      => "November 21, 2025",
                "cats"      => [["PPC", "category/ppc/"]],
                "title"     => "Google Ads vs Google AdWords: Understanding the Key Differences",
                "excerpt"   => "If you've ever thought about running online ads, you've likely heard of Google Ads and Google AdWords. You...",
                "fb_url"    => "https://hashtagmedia.ae/google-ads-vs-google-adwords/",
                "tw_url"    => "https://hashtagmedia.ae/google-ads-vs-google-adwords/",
                "tw_title"  => "Google Ads vs Google AdWords",
            ],
            [
                "url"       => "what-do-seo-experts-do/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/A-person-using-a-smartphone-with-a-search-bar-graphic-on-the-screen-768x346-540x243.jpg",
                "alt"       => "A person using a smartphone with a search bar graphic on the screen.",
                "date"      => "November 13, 2025",
                "cats"      => [["SEO", "category/seo/"]],
                "title"     => "What Do SEO Experts Do to Improve Your Website's Ranking?",
                "excerpt"   => "SEO (Search Engine Optimization) is essential for any business that wants to succeed online. But I totally get it – you...",
                "fb_url"    => "https://hashtagmedia.ae/what-do-seo-experts-do/",
                "tw_url"    => "https://hashtagmedia.ae/what-do-seo-experts-do/",
                "tw_title"  => "What Do SEO Experts Do?",
            ],
            [
                "url"       => "local-seo-agency-market-domination/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/local-SEO-agency-concept-768x403-540x283.jpg",
                "alt"       => "Why Your Business Needs a Local SEO Agency to Dominate Your Market",
                "date"      => "November 13, 2025",
                "cats"      => [["SEO", "category/seo/"]],
                "title"     => "Why Your Business Needs a Local SEO Agency to Dominate Your Market",
                "excerpt"   => "Who doesn't want their business to be the go-to choice for locals in the area? Setting up a business is no small...",
                "fb_url"    => "https://hashtagmedia.ae/local-seo-agency-market-domination/",
                "tw_url"    => "https://hashtagmedia.ae/local-seo-agency-market-domination/",
                "tw_title"  => "Why Your Business Needs a Local SEO Agency",
            ],
            [
                "url"       => "benefits-of-seo-in-digital-marketing/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/SEO-icons-on-a-dark-background-768x576-540x405.webp",
                "alt"       => "SEO icons on a dark background",
                "date"      => "November 13, 2025",
                "cats"      => [["SEO", "category/seo/"]],
                "title"     => "The Key Benefits of SEO in Digital Marketing: Why It's Essential for Your Business",
                "excerpt"   => "Running a business today isn't easy. You've got a lot to juggle, from customer service to sales to marketing. And while...",
                "fb_url"    => "https://hashtagmedia.ae/benefits-of-seo-in-digital-marketing/",
                "tw_url"    => "https://hashtagmedia.ae/benefits-of-seo-in-digital-marketing/",
                "tw_title"  => "Key Benefits of SEO in Digital Marketing",
            ],
            [
                "url"       => "https-vs-http-for-seo/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/An-illustration-comparing-HTTP-and-HTTPS-with-a-padlock-symbol-and-an-upward-SEO-graph-768x432-540x303.png",
                "alt"       => "An illustration comparing HTTP and HTTPS with a padlock symbol and an upward SEO graph",
                "date"      => "November 13, 2025",
                "cats"      => [["SEO", "category/seo/"]],
                "title"     => "HTTPS vs HTTP for SEO: Which One Should You Choose for Better Rankings?",
                "excerpt"   => "When it comes to optimizing your website and boosting your online success, one of the key decisions you'll face is...",
                "fb_url"    => "https://hashtagmedia.ae/https-vs-http-for-seo/",
                "tw_url"    => "https://hashtagmedia.ae/https-vs-http-for-seo/",
                "tw_title"  => "HTTPS vs HTTP for SEO",
            ],
            [
                "url"       => "seo-packages-cost/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/A-person-working-on-a-computer-with-SEO-graphics-on-the-screen-768x384-540x270.webp",
                "alt"       => "A person working on a computer with SEO graphics on the screen",
                "date"      => "November 13, 2025",
                "cats"      => [["SEO", "category/seo/"]],
                "title"     => "SEO Packages Cost: What You Need to Know Before Investing",
                "excerpt"   => "You know what, when it comes to growing your online presence and driving traffic to your website, one of the first things...",
                "fb_url"    => "https://hashtagmedia.ae/seo-packages-cost/",
                "tw_url"    => "https://hashtagmedia.ae/seo-packages-cost/",
                "tw_title"  => "SEO Packages Cost",
            ],
            [
                "url"       => "video-editing-rates/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/a-video-editor-working-on-a-project-768x432-540x303.jpg",
                "alt"       => "a video editor working on a project",
                "date"      => "November 13, 2025",
                "cats"      => [["Video Editing", "category/video-editing/"]],
                "title"     => "Video Editing Rates Explained: What's Fair for Your Project?",
                "excerpt"   => "Video editing has pretty much become a must-have in today's digital world. Seriously, no matter the size of your business,...",
                "fb_url"    => "https://hashtagmedia.ae/video-editing-rates/",
                "tw_url"    => "https://hashtagmedia.ae/video-editing-rates/",
                "tw_title"  => "Video Editing Rates Explained",
            ],
            [
                "url"       => "creative-video-editing-ideas/",
                "img"       => "https://hashtagmedia.ae/wp-content/uploads/2025/11/representation-of-video-editing-in-3-different-screens-768x437-540x307.jpg",
                "alt"       => "representation of video editing in 3 different screens",
                "date"      => "November 13, 2025",
                "cats"      => [["Video Editing", "category/video-editing/"]],
                "title"     => "10 Must-Try Video Editing Ideas to Enhance Your Content",
                "excerpt"   => "Are you like me, someone who wants to become a pro at video editing but isn't quite sure where to start? Well,...",
                "fb_url"    => "https://hashtagmedia.ae/creative-video-editing-ideas/",
                "tw_url"    => "https://hashtagmedia.ae/creative-video-editing-ideas/",
                "tw_title"  => "10 Must-Try Video Editing Ideas",
            ],
        ];
        ?>

        <div class="blog-grid">
            <?php foreach ($posts as $post): ?>
            <article class="blog-card">

                <a href="<?php echo htmlspecialchars($post['url']); ?>" class="blog-thumb">
                    <img
                        src="<?php echo htmlspecialchars($post['img']); ?>"
                        alt="<?php echo htmlspecialchars($post['alt']); ?>"
                        loading="lazy"
                    >
                </a>

                <div class="blog-content">

                    <div class="listing-meta">
                        <span class="meta-date"><?php echo $post['date']; ?></span>
                        <span class="sep">|</span>
                        <span class="meta-cat">
                            <?php
                            $cat_links = [];
                            foreach ($post['cats'] as $cat) {
                                $cat_links[] = '<a href="' . htmlspecialchars($cat[1]) . '">' . htmlspecialchars($cat[0]) . '</a>';
                            }
                            echo implode(' &amp; ', $cat_links);
                            ?>
                        </span>
                    </div>

                    <a href="<?php echo htmlspecialchars($post['url']); ?>" class="blog-title">
                        <?php echo htmlspecialchars($post['title']); ?>
                    </a>

                    <p class="blog-excerpt"><?php echo htmlspecialchars($post['excerpt']); ?></p>

                    <div class="post-share">
                        <span>Share</span>
                        <div class="share-links">
                            <a
                                href="https://www.facebook.com/share.php?u=<?php echo urlencode($post['fb_url']); ?>"
                                target="_blank" rel="noopener" aria-label="Share on Facebook"
                            >f</a>
                            <a
                                href="https://twitter.com/intent/tweet?text=<?php echo urlencode($post['tw_title']); ?>&url=<?php echo urlencode($post['tw_url']); ?>"
                                target="_blank" rel="noopener" aria-label="Share on Twitter"
                            >𝕏</a>
                            <a
                                href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode($post['tw_url']); ?>"
                                target="_blank" rel="noopener" aria-label="Share on LinkedIn"
                            >in</a>
                            <a
                                href="mailto:?subject=<?php echo urlencode($post['tw_title']); ?>&body=<?php echo urlencode($post['tw_url']); ?>"
                                aria-label="Share via Email"
                            >✉</a>
                        </div>
                    </div>

                </div>
            </article>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>

</body>
</html>