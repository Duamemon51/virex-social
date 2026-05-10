<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Marketing FAQs | Answers You Can Trust</title>
    <meta name="description" content="Find clear answers to common digital marketing FAQs. Get expert insights on SEO, PPC, social media & more—all in one easy-to-read guide.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root {
            --purple: #6254e7;
            --purple-light: #9289f1;
            --dark: #3b3663;
            --orange: #ff7426;
            --text: #7a7a7a;
            --white: #fff;
            --bg: #f9f9fc;
        }
        body { font-family: 'Rubik', sans-serif; color: var(--text); background: var(--white); overflow-x: hidden; }
        h1,h2,h3,h4,h5,h6 { font-family: 'Nunito', sans-serif; font-weight: 800; color: var(--dark); }
        a { text-decoration: none; color: inherit; }
        p { color: var(--text); }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 30px; width: 100%; }
        .section-label { font-family: 'Nunito', sans-serif; font-weight: 700; font-size: 13px; letter-spacing: 2px; text-transform: uppercase; color: var(--purple); margin-bottom: 12px; }

        /* ── HERO (blog-style) ── */
        .faq-hero {
            position: relative;
            overflow: hidden;
            padding: 160px 0 130px;
            text-align: center;
            background: #3a3af0;
        }
        .faq-hero::before {
            content: '';
            position: absolute; inset: 0;
            background:
                radial-gradient(ellipse 80% 80% at 0% 50%, #5b3de8 0%, transparent 60%),
                radial-gradient(ellipse 60% 100% at 100% 30%, #8b2fc9 0%, transparent 55%),
                radial-gradient(ellipse 70% 60% at 50% 100%, #2222cc 0%, transparent 60%),
                linear-gradient(135deg, #3535e8 0%, #4c2bc4 40%, #7b1fa2 100%);
            z-index: 0;
        }
        .blob-1 { position: absolute; width: 65%; height: 200%; top: -60%; left: -15%; background: linear-gradient(140deg, rgba(0,180,220,0.55) 0%, rgba(40,120,255,0.35) 50%, transparent 80%); border-radius: 60% 40% 70% 30% / 50% 60% 40% 50%; transform: rotate(-15deg); z-index: 1; filter: blur(2px); }
        .blob-2 { position: absolute; width: 55%; height: 180%; top: -40%; left: -5%; background: linear-gradient(160deg, rgba(0,210,240,0.3) 0%, rgba(20,100,220,0.2) 60%, transparent 90%); border-radius: 45% 55% 60% 40% / 60% 40% 60% 40%; transform: rotate(-10deg); z-index: 1; filter: blur(1px); }
        .blob-3 { position: absolute; width: 50%; height: 150%; top: -25%; right: -10%; background: radial-gradient(ellipse 80% 80% at 60% 40%, rgba(160,40,200,0.75) 0%, rgba(120,20,180,0.5) 40%, transparent 75%); border-radius: 50% 50% 40% 60% / 40% 60% 40% 60%; z-index: 1; }
        .blob-4 { position: absolute; width: 70%; height: 60%; bottom: -20%; left: 50%; transform: translateX(-50%); background: radial-gradient(ellipse 60% 60% at 50% 80%, rgba(40,40,180,0.6) 0%, transparent 70%); z-index: 1; }
        .blob-5 { position: absolute; width: 45%; height: 130%; top: -15%; left: 5%; background: linear-gradient(150deg, rgba(0,230,255,0.18) 0%, rgba(0,180,220,0.1) 50%, transparent 80%); border-radius: 30% 70% 50% 50% / 50% 50% 50% 50%; transform: rotate(-5deg); z-index: 2; filter: blur(0.5px); }
        .hero-content { position: relative; z-index: 10; }
        .faq-hero h1 { font-family: 'Nunito', sans-serif; font-size: clamp(28px,4.5vw,52px); font-weight: 800; line-height: 1.15; color: #fff; margin-bottom: 18px; letter-spacing: -0.5px; }
        .faq-hero p.lead { color: rgba(255,255,255,0.80) !important; font-size: 16px; max-width: 600px; margin: 0 auto 36px; line-height: 1.7; font-weight: 400; }
        .btn-hero { background: rgba(108,60,255,0.55); color: #fff; border: 1.5px solid rgba(255,255,255,0.45); padding: 13px 36px; border-radius: 6px; font-family: 'Nunito', sans-serif; font-weight: 700; font-size: 15px; transition: all 0.3s; display: inline-block; }
        .btn-hero:hover { background: rgba(108,60,255,0.80); color: #fff; border-color: rgba(255,255,255,0.70); transform: translateY(-2px); }

        /* ── FAQ SECTION ── */
        .faq-section {
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }
        .faq-section::before {
            content: ''; position: absolute; inset: 0;
            background: linear-gradient(160deg, #f0fff8 0%, #f9f9fc 50%, #f0f4ff 100%);
            z-index: 0;
        }
        .faq-inner { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: start; position: relative; z-index: 2; }
        .faq-left h3 { font-size: clamp(26px,3vw,36px); margin-bottom: 16px; }
        .faq-left p { font-size: 15px; color: var(--text); line-height: 1.7; margin-bottom: 32px; }
        .faq-contact-box { background: linear-gradient(135deg,#6254e7,#9289f1); border-radius: 20px; padding: 28px; color: white; }
        .faq-contact-box h5 { font-size: 18px; margin-bottom: 10px; color: white; }
        .faq-contact-box p { font-size: 14px; color: rgba(255,255,255,0.75) !important; margin-bottom: 20px; line-height: 1.6; }
        .btn-faq { display: inline-flex; align-items: center; gap: 8px; background: white; color: var(--purple); font-family: 'Nunito',sans-serif; font-size: 13.5px; font-weight: 700; padding: 12px 24px; border-radius: 50px; transition: all .3s; text-decoration: none; }
        .btn-faq:hover { background: var(--orange); color: white; }
        .faq-list { display: flex; flex-direction: column; gap: 14px; }
        .faq-item { background: white; border-radius: 16px; border: 1px solid rgba(98,84,231,0.08); overflow: hidden; transition: box-shadow .3s; box-shadow: 0 2px 12px rgba(0,0,0,0.04); }
        .faq-item:hover { box-shadow: 0 8px 30px rgba(98,84,231,0.1); }
        .faq-question { padding: 20px 22px; display: flex; justify-content: space-between; align-items: center; cursor: pointer; font-family: 'Nunito',sans-serif; font-weight: 700; font-size: 15px; color: var(--dark); gap: 14px; user-select: none; }
        .faq-toggle { width: 32px; height: 32px; background: rgba(98,84,231,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: var(--purple); font-size: 20px; font-weight: 700; transition: all .3s; line-height: 1; }
        .faq-item.open .faq-toggle { background: var(--purple); color: white; transform: rotate(45deg); }
        .faq-answer { max-height: 0; overflow: hidden; transition: max-height .4s ease, padding .3s; font-size: 14.5px; line-height: 1.7; color: var(--text); padding: 0 22px; }
        .faq-item.open .faq-answer { max-height: 500px; padding: 0 22px 20px; }
        .faq-answer ul, .faq-answer ol { margin: 10px 0 10px 20px; }
        .faq-answer li { margin-bottom: 6px; font-size: 14.5px; color: var(--text); }
        .faq-answer li strong { color: var(--dark); font-family: 'Nunito', sans-serif; }

        /* ── CONTACT SECTION ── */
        .contact-section { padding: 0; position: relative; overflow: hidden; }
        .contact-wrap { display: grid; grid-template-columns: 1fr 1.15fr; min-height: 680px; }

        /* LEFT dark panel */
        .contact-left {
            background: linear-gradient(145deg, #2a2547 0%, #3b3663 50%, #4c2bc4 100%);
            padding: 80px 56px;
            position: relative;
            overflow: hidden;
            display: flex; flex-direction: column; justify-content: center;
        }
        .contact-left::before {
            content: '';
            position: absolute; top: -80px; right: -80px;
            width: 320px; height: 320px;
            background: radial-gradient(circle, rgba(146,137,241,0.25) 0%, transparent 70%);
            border-radius: 50%;
        }
        .contact-left::after {
            content: '';
            position: absolute; bottom: -60px; left: -60px;
            width: 260px; height: 260px;
            background: radial-gradient(circle, rgba(255,116,38,0.15) 0%, transparent 70%);
            border-radius: 50%;
        }
        .cl-inner { position: relative; z-index: 2; }
        .cl-badge { display: inline-flex; align-items: center; gap: 8px; background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.18); color: rgba(255,255,255,0.85); font-family: 'Nunito',sans-serif; font-weight: 700; font-size: 12px; letter-spacing: 2px; text-transform: uppercase; padding: 7px 16px; border-radius: 50px; margin-bottom: 28px; }
        .cl-badge span { width: 6px; height: 6px; background: var(--orange); border-radius: 50%; animation: blink 1.6s infinite; }
        @keyframes blink { 0%,100%{opacity:1;} 50%{opacity:.3;} }
        .cl-title { font-family: 'Nunito',sans-serif; font-weight: 900; font-size: clamp(28px,3vw,40px); color: #fff; line-height: 1.15; margin-bottom: 18px; }
        .cl-title span { color: var(--orange); }
        .cl-desc { font-size: 15px; line-height: 1.75; color: rgba(255,255,255,0.68); margin-bottom: 44px; max-width: 340px; }
        .cl-items { display: flex; flex-direction: column; gap: 22px; margin-bottom: 44px; }
        .cl-item { display: flex; align-items: center; gap: 16px; }
        .cl-icon { width: 46px; height: 46px; border-radius: 14px; background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.15); display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
        .cl-icon svg { width: 22px; height: 22px; stroke: rgba(255,255,255,0.85); fill: none; stroke-width: 1.8; stroke-linecap: round; stroke-linejoin: round; }
        .cl-item-title { font-family: 'Nunito',sans-serif; font-weight: 700; font-size: 14px; color: #fff; margin-bottom: 2px; }
        .cl-item-val { font-size: 13.5px; color: rgba(255,255,255,0.60); }
        .cl-divider { width: 48px; height: 2px; background: linear-gradient(90deg,var(--orange),transparent); border-radius: 2px; margin-bottom: 28px; }
        .cl-socials { display: flex; gap: 10px; }
        .cl-social { width: 38px; height: 38px; border-radius: 10px; background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.14); display: flex; align-items: center; justify-content: center; transition: all .25s; }
        .cl-social:hover { background: var(--purple); border-color: var(--purple); }
        .cl-social svg { width: 17px; height: 17px; stroke: rgba(255,255,255,0.7); fill: none; stroke-width: 1.8; stroke-linecap: round; stroke-linejoin: round; }
        .cl-social:hover svg { stroke: #fff; }

        /* RIGHT form panel */
        .contact-right {
            background: #f9f8ff;
            padding: 80px 56px;
            display: flex; flex-direction: column; justify-content: center;
        }
        .cr-label { font-family: 'Nunito',sans-serif; font-weight: 700; font-size: 12px; letter-spacing: 2.5px; text-transform: uppercase; color: var(--purple); margin-bottom: 10px; display: block; }
        .cr-title { font-family: 'Nunito',sans-serif; font-weight: 900; font-size: clamp(24px,2.5vw,34px); color: var(--dark); margin-bottom: 8px; line-height: 1.2; }
        .cr-sub { font-size: 15px; color: var(--text); line-height: 1.65; margin-bottom: 36px; }
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px; }
        .form-row.single { grid-template-columns: 1fr; }
        .fg { display: flex; flex-direction: column; gap: 7px; }
        .fg label { font-family: 'Nunito',sans-serif; font-weight: 700; font-size: 12.5px; color: var(--dark); letter-spacing: 0.2px; }
        .fg input, .fg select, .fg textarea {
            padding: 12px 16px;
            border: 1.5px solid rgba(98,84,231,0.18);
            border-radius: 10px;
            font-family: 'Rubik', sans-serif; font-size: 14.5px; color: var(--dark);
            background: #fff; outline: none;
            transition: border-color .22s, box-shadow .22s;
            -webkit-appearance: none;
        }
        .fg input::placeholder, .fg textarea::placeholder { color: #c4c0d8; }
        .fg input:focus, .fg select:focus, .fg textarea:focus { border-color: var(--purple); box-shadow: 0 0 0 4px rgba(98,84,231,0.1); }
        .fg textarea { resize: none; height: 110px; }
        .fg select { cursor: pointer; color: var(--dark); }
        .fg select option:first-child { color: #c4c0d8; }
        .form-submit-row { margin-top: 20px; display: flex; align-items: center; gap: 18px; flex-wrap: wrap; }
        .btn-send {
            display: inline-flex; align-items: center; gap: 10px;
            background: linear-gradient(96deg, #9289f1 0%, #6254e7 55%, #9289f1 100%);
            background-size: 200% 100%;
            color: #fff; font-family: 'Nunito',sans-serif; font-weight: 800; font-size: 15px;
            padding: 15px 38px; border-radius: 10px; border: none; cursor: pointer;
            transition: all .35s; box-shadow: 0 12px 32px rgba(98,84,231,0.32);
            letter-spacing: 0.2px;
        }
        .btn-send:hover { background-position: 100% 0; transform: translateY(-3px); box-shadow: 0 18px 44px rgba(98,84,231,0.42); }
        .btn-send svg { width: 18px; height: 18px; transition: transform .3s; }
        .btn-send:hover svg { transform: translateX(4px); }
        .form-note { font-size: 13px; color: var(--text); line-height: 1.5; }
        .form-note strong { color: var(--dark); font-family: 'Nunito',sans-serif; font-weight: 700; }

        @media(max-width:1024px){ .contact-wrap { grid-template-columns: 1fr; } .contact-left { padding: 60px 36px; min-height: auto; } .contact-right { padding: 60px 36px; } .cl-desc { max-width: 100%; } }
        @media(max-width:600px){ .form-row { grid-template-columns: 1fr; } .contact-left, .contact-right { padding: 50px 24px; } }

        /* ── RESPONSIVE ── */
        @media(max-width:992px){ .faq-inner { grid-template-columns: 1fr; gap: 50px; } .form-grid { grid-template-columns: 1fr; } .form-grid .full { grid-column: auto; } }
        @media(max-width:767px){ .faq-hero { padding: 100px 0 90px; } .faq-section, .contact-section { padding: 70px 0; } .blob-1 { width: 100%; left: -30%; } .blob-3 { width: 70%; right: -20%; } }
    </style>
</head>
<body>
<?php include 'includes/header.php'; ?>
<!-- ═══════════════ HERO ═══════════════ -->
<section class="faq-hero">
    <div class="blob-1"></div>
    <div class="blob-2"></div>
    <div class="blob-3"></div>
    <div class="blob-4"></div>
    <div class="blob-5"></div>
    <div class="container hero-content">
        <h1>We've got answers</h1>
        <p class="lead">We've compiled the most common digital marketing FAQs and answered them in plain language—so you feel confident and informed.</p>
        <a href="contact-us/" class="btn-hero">Contact Us</a>
    </div>
</section>

<!-- ═══════════════ FAQ ═══════════════ -->
<section class="faq-section">
    <div class="container">
        <div class="faq-inner">

            <!-- LEFT -->
            <div class="faq-left">
                <div class="section-label">Faq</div>
                <h3>Most Popular Questions</h3>
                <p>Everything you need to know about our digital marketing services and how we work with clients.</p>
                <div class="faq-contact-box">
                    <h5>Still have questions?</h5>
                    <p>Our team is ready to help. Drop us a message and we'll get back to you as quickly as possible.</p>
                    <a href="contact-us/" class="btn-faq">📩 Contact Us</a>
                </div>
            </div>

            <!-- RIGHT – exact FAQ content from original page -->
            <div class="faq-list">

                <div class="faq-item open">
                    <div class="faq-question" onclick="toggleFaq(this.parentElement)">
                        What services does Hashtag Media offer?
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <p style="margin-bottom:10px;">Our digital marketing agency is known to offer a wide variety of services to help your business grow.</p>
                        <p style="margin-bottom:8px;">Our core services include:</p>
                        <ul>
                            <li><strong>Web Development Services</strong> – responsive, user-friendly websites</li>
                            <li><strong>SEO Services</strong> – improve rankings and organic traffic</li>
                            <li><strong>PPC Management Services</strong> – targeted ad campaigns with measurable ROI</li>
                            <li><strong>SMM Services</strong> – social media strategy, content, and ads</li>
                            <li><strong>Video Editing Services</strong> – professional edits for ads, social, and YouTube</li>
                            <li><strong>App Development Service</strong> – iOS, Android, and cross-platform apps</li>
                        </ul>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this.parentElement)">
                        How can I get started with your team?
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <p style="margin-bottom:8px;">Well, it's pretty simple:</p>
                        <ol>
                            <li>Contact us through our website form, email, or WhatsApp</li>
                            <li>We'll arrange a free call to talk about your needs.</li>
                            <li>For your project, our team will create an individualized proposal and schedule.</li>
                        </ol>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this.parentElement)">
                        Do you manage Facebook, Instagram, and TikTok campaigns?
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, of course! Strategy, creating content, and paid advertising are the main focuses of our SMM services. We focus on TikTok, Facebook, LinkedIn, and Instagram. Additionally, our team customizes every campaign to fit your audience and brand.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this.parentElement)">
                        Do you offer a full package or individual services?
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <p style="margin-bottom:8px;">You can choose exactly what you need:</p>
                        <ul>
                            <li><strong>Full-service package</strong> for an all-in-one marketing approach</li>
                            <li><strong>Individual services</strong> if you only need SEO, PPC, SMM, web, app, or video editing</li>
                        </ul>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this.parentElement)">
                        How do you report on progress?
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <p style="margin-bottom:8px;">We believe in full transparency. For SEO services, PPC management services, and all other work, we send regular reports showing:</p>
                        <ul>
                            <li>Campaign performance</li>
                            <li>Key metrics like traffic, clicks, and conversions</li>
                            <li>Insights and recommendations for improvements</li>
                        </ul>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this.parentElement)">
                        What is the timeline for a mobile app project?
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <p style="margin-bottom:10px;">Most mobile app development service projects take 8–12 weeks. Well, it depends on complexity, features, and platform (iOS, Android, or both). You'll get a clear timeline before we start.</p>
                        <p style="margin-bottom:8px;">We send regular reports showing:</p>
                        <ul>
                            <li>Campaign performance</li>
                            <li>Key metrics like traffic, clicks, and conversions</li>
                            <li>Insights and recommendations for improvements</li>
                        </ul>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this.parentElement)">
                        How much does it cost to develop an app?
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <p style="margin-bottom:8px;">App development cost depends on:</p>
                        <ul>
                            <li>Platform (iOS, Android, or cross-platform)</li>
                            <li>Features and integrations</li>
                            <li>Design complexity</li>
                        </ul>
                        <p style="margin-top:10px;">We'll provide a detailed quote after discussing your requirements.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this.parentElement)">
                        Can you edit video content I've already shot?
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <p>Yes! Our video editing services work with your existing footage to create professional, compelling videos ready for ads, social media, or your website.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this.parentElement)">
                        Will you help me launch my digital campaigns?
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <p>Definitely. From SEO services to PPC management services and SMM services, we handle everything. We take care of the setup to launch. Moreover, we keep optimizing for better results.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- ═══════════════ CONTACT ═══════════════ -->
<section class="contact-section">
    <div class="contact-wrap">

        <!-- LEFT: dark info panel -->
        <div class="contact-left">
            <div class="cl-inner">
                <div class="cl-badge"><span></span> Contact Us</div>
                <h2 class="cl-title">Drop Us<br>a <span>Line</span></h2>
                <p class="cl-desc">Looking for a digital marketing agency? Fill in the form and we'll get back to you as quickly as possible. We make it easy to connect.</p>

                <div class="cl-items">
                    <div class="cl-item">
                        <div class="cl-icon">
                            <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </div>
                        <div>
                            <div class="cl-item-title">Email Us</div>
                            <div class="cl-item-val">contact@hashtagmedia.ae</div>
                        </div>
                    </div>
                    <div class="cl-item">
                        <div class="cl-icon">
                            <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <div>
                            <div class="cl-item-title">Location</div>
                            <div class="cl-item-val">Dubai, UAE</div>
                        </div>
                    </div>
                    <div class="cl-item">
                        <div class="cl-icon">
                            <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                        <div>
                            <div class="cl-item-title">Response Time</div>
                            <div class="cl-item-val">Within 24 hours</div>
                        </div>
                    </div>
                </div>

                <div class="cl-divider"></div>
                <div class="cl-socials">
                    <a href="https://www.linkedin.com/company/hashtagmediadotae/" target="_blank" class="cl-social" aria-label="LinkedIn">
                        <svg viewBox="0 0 24 24"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                    <a href="https://www.facebook.com/hashtagmediadotae" target="_blank" class="cl-social" aria-label="Facebook">
                        <svg viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                    </a>
                    <a href="https://www.instagram.com/hashtagmediadotae" target="_blank" class="cl-social" aria-label="Instagram">
                        <svg viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- RIGHT: form panel -->
        <div class="contact-right">
            <span class="cr-label">Get In Touch</span>
            <h3 class="cr-title">Send Us a Message</h3>
            <p class="cr-sub">We make it easy for you to connect so we can start building solutions together.</p>

            <div class="form-row">
                <div class="fg">
                    <label for="f-name">Name</label>
                    <input type="text" id="f-name" placeholder="Your name">
                </div>
                <div class="fg">
                    <label for="f-email">Email</label>
                    <input type="email" id="f-email" placeholder="your@email.com">
                </div>
            </div>
            <div class="form-row">
                <div class="fg">
                    <label for="f-phone">Phone</label>
                    <input type="tel" id="f-phone" placeholder="+971 00 000 0000">
                </div>
                <div class="fg">
                    <label for="f-service">Select a Service</label>
                    <select id="f-service">
                        <option value="">Choose a service...</option>
                        <option>Web Development</option>
                        <option>Search Engine Optimization</option>
                        <option>Mobile App Development</option>
                        <option>Website Maintenance</option>
                        <option>Website Speed Optimization</option>
                        <option>Pay Per Click</option>
                        <option>Social Media Marketing</option>
                        <option>Social Media Management</option>
                        <option>Script Writing</option>
                        <option>Online Reputation Management</option>
                        <option>Content Writing</option>
                        <option>Email Marketing</option>
                        <option>Graphic Designing</option>
                        <option>UI/UX</option>
                        <option>Video Editing</option>
                    </select>
                </div>
            </div>
            <div class="form-row single">
                <div class="fg">
                    <label for="f-msg">Message</label>
                    <textarea id="f-msg" placeholder="Tell us about your project..."></textarea>
                </div>
            </div>
            <div class="form-submit-row">
                <button class="btn-send" type="submit">
                    Send Message
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2L11 13"/><path d="M22 2L15 22 11 13 2 9l20-7z"/></svg>
                </button>
                <p class="form-note"><strong>No spam, ever.</strong><br>We reply within 24 hours.</p>
            </div>
        </div>

    </div>
</section>
<?php include 'includes/footer.php'; ?>
<button id="back-to-top" onclick="window.scrollTo({top:0,behavior:'smooth'})">↑</button>
<script>

function toggleFaq(item) {
    var isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item.open').forEach(function(i){ i.classList.remove('open'); });
    if (!isOpen) item.classList.add('open');
}
</script>
</body>
</html>