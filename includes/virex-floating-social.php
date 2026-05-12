<?php
/**
 * ╔══════════════════════════════════════════════════╗
 * ║   VIREX SOCIAL — FLOATING COMPONENTS            ║
 * ║   Include this file anywhere in your layout     ║
 * ╚══════════════════════════════════════════════════╝
 * Save as: includes/floating-social.php
 * Use:     <?php include 'includes/floating-social.php'; ?>
 *          (place before </body> in your layout/footer)
 */

// ─── CONFIG — Edit these values ───────────────────────────
$vx_whatsapp_number   = '971XXXXXXXXX';
$vx_whatsapp_message  = 'Hi Virex Social! I would like to know more about your services.';
$vx_messenger_user    = 'virexsocial';

$vx_social_links = [
    'fb' => ['url' => 'https://facebook.com/virexsocial',          'label' => 'Facebook',    'svg' => '<path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>'],
    'ig' => ['url' => 'https://instagram.com/virexsocial',         'label' => 'Instagram',   'svg' => '<path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/>'],
    'li' => ['url' => 'https://linkedin.com/company/virexsocial',  'label' => 'LinkedIn',    'svg' => '<path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/>'],
    'tw' => ['url' => 'https://twitter.com/virexsocial',           'label' => 'Twitter / X', 'svg' => '<path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>'],
    'yt' => ['url' => 'https://youtube.com/@virexsocial',          'label' => 'YouTube',     'svg' => '<path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 0 0-1.95 1.96A29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58A2.78 2.78 0 0 0 3.41 19.54C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.96A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="white"/>'],
    'tt' => ['url' => 'https://tiktok.com/@virexsocial',           'label' => 'TikTok',      'svg' => '<path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-2.88 2.5 2.89 2.89 0 0 1-2.89-2.89 2.89 2.89 0 0 1 2.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 0 0-.79-.05 6.34 6.34 0 0 0-6.34 6.34 6.34 6.34 0 0 0 6.34 6.34 6.34 6.34 0 0 0 6.33-6.34V9.17a8.19 8.19 0 0 0 4.78 1.52V7.25a4.85 4.85 0 0 1-1.01-.56z"/>'],
];

$vx_wa_url = 'https://wa.me/' . htmlspecialchars($vx_whatsapp_number) . '?text=' . rawurlencode($vx_whatsapp_message);
$vx_ms_url = 'https://m.me/' . htmlspecialchars($vx_messenger_user);
?>
<style>
  .vx-social-sidebar { position:fixed; left:22px; top:50%; transform:translateY(-50%); display:flex; flex-direction:column; align-items:center; gap:0; z-index:900; }
  .vx-social-line { width:1.5px; height:60px; background:linear-gradient(to bottom,transparent,rgba(124,58,237,0.4)); margin-bottom:12px; border-radius:2px; }
  .vx-social-line.bottom { background:linear-gradient(to bottom,rgba(124,58,237,0.4),transparent); margin-top:12px; margin-bottom:0; }
  .vx-social-btn { position:relative; width:44px; height:44px; background:white; border:1.5px solid rgba(124,58,237,0.12); border-radius:14px; margin:5px 0; display:flex; align-items:center; justify-content:center; cursor:pointer; transition:all 0.35s cubic-bezier(0.34,1.56,0.64,1); box-shadow:0 4px 16px rgba(0,0,0,0.06); text-decoration:none; }
  .vx-social-btn svg { width:18px; height:18px; }
  .vx-social-btn:hover { transform:translateX(6px) scale(1.1); box-shadow:0 8px 28px rgba(124,58,237,0.22); border-color:transparent; }
  .vx-social-btn.fb:hover { background:#1877f2; } .vx-social-btn.fb svg path { fill:#1877f2; transition:fill .3s; } .vx-social-btn.fb:hover svg path { fill:white; }
  .vx-social-btn.ig:hover { background:linear-gradient(45deg,#f09433,#e6683c,#dc2743,#cc2366,#bc1888); } .vx-social-btn.ig svg path { fill:#e1306c; transition:fill .3s; } .vx-social-btn.ig:hover svg path { fill:white; }
  .vx-social-btn.tw:hover { background:#000; } .vx-social-btn.tw svg path { fill:#333; transition:fill .3s; } .vx-social-btn.tw:hover svg path { fill:white; }
  .vx-social-btn.li:hover { background:#0a66c2; } .vx-social-btn.li svg path { fill:#0a66c2; transition:fill .3s; } .vx-social-btn.li:hover svg path { fill:white; }
  .vx-social-btn.yt:hover { background:#ff0000; } .vx-social-btn.yt svg path { fill:#ff0000; transition:fill .3s; } .vx-social-btn.yt:hover svg path { fill:white; }
  .vx-social-btn.tt:hover { background:#010101; } .vx-social-btn.tt svg path { fill:#333; transition:fill .3s; } .vx-social-btn.tt:hover svg path { fill:white; }
  .vx-social-btn::after { content:attr(data-label); position:absolute; left:calc(100% + 12px); top:50%; transform:translateY(-50%) translateX(-8px); background:rgba(13,5,32,0.9); color:white; font-family:'Clash Display',sans-serif; font-weight:600; font-size:12px; padding:5px 12px; border-radius:8px; white-space:nowrap; opacity:0; pointer-events:none; transition:opacity .25s,transform .25s; }
  .vx-social-btn:hover::after { opacity:1; transform:translateY(-50%) translateX(0); }
  @media(max-width:768px){ .vx-social-sidebar { display:none; } }

  .vx-chat-widget { position:fixed; bottom:32px; right:32px; z-index:9999; display:flex; flex-direction:column; align-items:flex-end; gap:12px; }
  .vx-chat-popup { background:white; border-radius:22px; box-shadow:0 20px 60px rgba(0,0,0,0.14),0 0 0 1px rgba(0,0,0,0.04); width:310px; overflow:hidden; transform:scale(0.85) translateY(20px); opacity:0; pointer-events:none; transform-origin:bottom right; transition:all 0.4s cubic-bezier(0.34,1.56,0.64,1); }
  .vx-chat-popup.vx-visible { transform:scale(1) translateY(0); opacity:1; pointer-events:all; }
  .vx-chat-popup-header { background:var(--grad-btn,linear-gradient(135deg,#e040fb,#7c3aed,#2563eb)); padding:22px 20px 28px; position:relative; overflow:hidden; }
  .vx-chat-popup-header::before { content:''; position:absolute; inset:0; background:radial-gradient(ellipse at top right,rgba(255,255,255,0.12),transparent 60%); }
  .vx-chat-avatar { width:52px; height:52px; border-radius:50%; background:rgba(255,255,255,0.2); border:2.5px solid rgba(255,255,255,0.4); display:flex; align-items:center; justify-content:center; margin-bottom:14px; position:relative; z-index:1; font-family:'Clash Display',sans-serif; font-weight:700; font-size:20px; color:white; }
  .vx-online-dot { position:absolute; bottom:2px; right:2px; width:13px; height:13px; border-radius:50%; background:#25D366; border:2px solid white; }
  .vx-chat-popup-title { font-family:'Clash Display',sans-serif; font-weight:700; font-size:17px; color:white; margin-bottom:4px; position:relative; z-index:1; }
  .vx-chat-popup-status { font-size:12px; color:rgba(255,255,255,0.72); position:relative; z-index:1; }
  .vx-chat-popup-body { padding:20px; }
  .vx-chat-msg { background:#f3f4f6; border-radius:16px 16px 16px 4px; padding:13px 16px; font-size:14px; color:#374151; line-height:1.6; margin-bottom:16px; }
  .vx-chat-channels { display:flex; flex-direction:column; gap:10px; }
  .vx-channel-btn { display:flex; align-items:center; gap:14px; padding:13px 16px; border-radius:14px; border:none; cursor:pointer; transition:all .25s; text-align:left; text-decoration:none; width:100%; }
  .vx-channel-btn.wa { background:#f0fdf4; } .vx-channel-btn.wa:hover { background:#dcfce7; transform:translateX(4px); }
  .vx-channel-btn.ms { background:#f0f4ff; } .vx-channel-btn.ms:hover { background:#e0e8ff; transform:translateX(4px); }
  .vx-channel-icon { width:40px; height:40px; border-radius:50%; display:flex; align-items:center; justify-content:center; flex-shrink:0; }
  .vx-channel-icon.wa { background:linear-gradient(135deg,#25D366,#128C7E); } .vx-channel-icon.ms { background:linear-gradient(135deg,#0099FF,#A033FF); }
  .vx-channel-icon svg { width:20px; height:20px; }
  .vx-channel-text .vx-ch-label { display:block; font-size:11px; color:#9ca3af; font-weight:600; }
  .vx-channel-text .vx-ch-name  { font-family:'Clash Display',sans-serif; font-weight:700; font-size:15px; color:#1f2937; }
  .vx-channel-arrow { margin-left:auto; } .vx-channel-arrow svg { width:16px; height:16px; stroke:#9ca3af; stroke-width:2.5; fill:none; }
  .vx-chat-toggle { width:62px; height:62px; border-radius:50%; background:var(--grad-btn,linear-gradient(135deg,#e040fb,#7c3aed,#2563eb)); border:none; cursor:pointer; display:flex; align-items:center; justify-content:center; box-shadow:0 6px 30px rgba(124,58,237,0.45); transition:all .35s cubic-bezier(0.34,1.56,0.64,1); position:relative; z-index:1; animation:vxChatBounce 3s ease-in-out infinite 4s; }
  .vx-chat-toggle:hover { transform:scale(1.12); box-shadow:0 10px 40px rgba(124,58,237,0.55),0 0 0 8px rgba(124,58,237,0.12); }
  .vx-chat-toggle.vx-open { animation:none; }
  .vx-chat-toggle::before,.vx-chat-toggle::after { content:''; position:absolute; inset:0; border-radius:50%; background:var(--grad-btn,linear-gradient(135deg,#e040fb,#7c3aed,#2563eb)); opacity:0; animation:vxRipple 3s ease-out infinite; }
  .vx-chat-toggle::after { animation-delay:1.2s; }
  .vx-toggle-chat { display:flex; } .vx-toggle-close { display:none; }
  .vx-chat-toggle.vx-open .vx-toggle-chat { display:none; } .vx-chat-toggle.vx-open .vx-toggle-close { display:flex; }
  .vx-chat-notif { position:absolute; top:-4px; right:-4px; width:20px; height:20px; border-radius:50%; background:linear-gradient(135deg,#fbbf24,#f97316,#e040fb); color:white; font-size:11px; font-weight:800; display:flex; align-items:center; justify-content:center; box-shadow:0 2px 8px rgba(249,115,22,0.5); animation:vxBadgePop 2s ease-in-out infinite; border:2px solid white; }
  .vx-chat-toggle.vx-open .vx-chat-notif { display:none; }
  .vx-back-top { position:fixed; bottom:40px; left:40px; width:52px; height:52px; background:var(--grad-main,linear-gradient(135deg,#e040fb,#7c3aed,#2563eb,#06b6d4,#f97316,#fbbf24)); color:white; border:none; border-radius:15px; cursor:pointer; display:none; align-items:center; justify-content:center; box-shadow:0 4px 25px rgba(124,58,237,0.4); z-index:999; transition:all .3s; }
  .vx-back-top.vx-visible { display:flex; } .vx-back-top:hover { transform:translateY(-4px); box-shadow:0 8px 40px rgba(124,58,237,0.55); }
  .vx-back-top svg { width:22px; height:22px; stroke:white; stroke-width:2.5; fill:none; }
  @keyframes vxChatBounce { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-6px)} }
  @keyframes vxRipple { 0%{opacity:0.4;transform:scale(1)} 100%{opacity:0;transform:scale(2.2)} }
  @keyframes vxBadgePop { 0%,100%{transform:scale(1)} 50%{transform:scale(1.2)} }
  @media(max-width:600px){ .vx-chat-widget{bottom:20px;right:20px;} .vx-chat-popup{width:280px;} .vx-back-top{bottom:20px;left:20px;} }
</style>

<!-- 1. FLOATING SIDE SOCIAL BAR -->
<aside class="vx-social-sidebar" aria-label="Social media links">
  <div class="vx-social-line"></div>
  <?php foreach ($vx_social_links as $class => $social): ?>
  <a href="<?= htmlspecialchars($social['url']) ?>" target="_blank" rel="noopener noreferrer"
     class="vx-social-btn <?= htmlspecialchars($class) ?>"
     data-label="<?= htmlspecialchars($social['label']) ?>"
     aria-label="<?= htmlspecialchars($social['label']) ?>">
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><?= $social['svg'] ?></svg>
  </a>
  <?php endforeach; ?>
  <div class="vx-social-line bottom"></div>
</aside>

<!-- 2. CHAT WIDGET -->
<div class="vx-chat-widget" id="vxChatWidget">
  <div class="vx-chat-popup" id="vxChatPopup">
    <div class="vx-chat-popup-header">
      <div class="vx-chat-avatar">VS<div class="vx-online-dot"></div></div>
      <div class="vx-chat-popup-title">Virex Social</div>
      <div class="vx-chat-popup-status">🟢 Typically replies in minutes</div>
    </div>
    <div class="vx-chat-popup-body">
      <div class="vx-chat-msg">👋 Hi there! How can we help you today? Choose your preferred channel below.</div>
      <div class="vx-chat-channels">
        <a href="<?= $vx_wa_url ?>" target="_blank" rel="noopener noreferrer" class="vx-channel-btn wa">
          <div class="vx-channel-icon wa"><svg viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg></div>
          <div class="vx-channel-text"><span class="vx-ch-label">Chat on</span><span class="vx-ch-name">WhatsApp</span></div>
          <div class="vx-channel-arrow"><svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
        </a>
        <a href="<?= $vx_ms_url ?>" target="_blank" rel="noopener noreferrer" class="vx-channel-btn ms">
          <div class="vx-channel-icon ms"><svg viewBox="0 0 24 24" fill="white"><path d="M12 0C5.373 0 0 4.974 0 11.111c0 3.498 1.744 6.614 4.469 8.654V24l4.088-2.242c1.092.3 2.246.464 3.443.464 6.627 0 12-4.974 12-11.111C24 4.974 18.627 0 12 0zm1.191 14.963l-3.055-3.26-5.963 3.26L10.732 8l3.131 3.26L19.752 8l-6.561 6.963z"/></svg></div>
          <div class="vx-channel-text"><span class="vx-ch-label">Chat on</span><span class="vx-ch-name">Messenger</span></div>
          <div class="vx-channel-arrow"><svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
        </a>
      </div>
    </div>
  </div>
  <button class="vx-chat-toggle" id="vxChatToggle" aria-label="Chat with us">
    <span class="vx-chat-notif">1</span>
    <span class="vx-toggle-chat"><svg width="26" height="26" viewBox="0 0 24 24" fill="white"><path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-2 12H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/></svg></span>
    <span class="vx-toggle-close"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span>
  </button>
</div>

<!-- 3. BACK TO TOP -->
<button class="vx-back-top" id="vxBackTop" aria-label="Back to top">
  <svg viewBox="0 0 24 24"><path d="M18 15l-6-6-6 6"/></svg>
</button>

<script>
  (function(){
    var open = false;
    var toggle = document.getElementById('vxChatToggle');
    var popup  = document.getElementById('vxChatPopup');
    function vxToggle(){
      open = !open;
      toggle.classList.toggle('vx-open', open);
      popup.classList.toggle('vx-visible', open);
    }
    toggle.addEventListener('click', vxToggle);
    setTimeout(function(){ if(!open) vxToggle(); }, 6000);
    var btn = document.getElementById('vxBackTop');
    window.addEventListener('scroll', function(){ btn.classList.toggle('vx-visible', window.scrollY > 400); });
    btn.addEventListener('click', function(){ window.scrollTo({top:0,behavior:'smooth'}); });
  })();
</script>