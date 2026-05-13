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
<link rel="stylesheet" href="assets/css/social-floating.css">

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