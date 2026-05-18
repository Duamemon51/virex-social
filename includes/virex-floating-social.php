<?php
/**
 * ╔══════════════════════════════════════════════════╗
 * ║   VIREX SOCIAL — CHAT WIDGET + BACK TO TOP      ║
 * ║   Include this file anywhere in your layout     ║
 * ╚══════════════════════════════════════════════════╝
 * Save as: includes/virex-floating-social.php
 * Use: <?php include 'includes/virex-floating-social.php'; ?>
 * Place before </body>
 */

// ─── CONFIG ───────────────────────────────────────
$vx_whatsapp_numbers = [
    '+971507786370',
    '+447493429464'
];

$vx_whatsapp_message = 'Hi Virex Social! I would like to know more about your services.';
?>

<link rel="stylesheet" href="assets/css/social-floating.css">

<!-- CHAT WIDGET -->
<div class="vx-chat-widget" id="vxChatWidget">

  <!-- POPUP -->
  <div class="vx-chat-popup" id="vxChatPopup">

    <div class="vx-chat-popup-header">
      <div class="vx-chat-avatar">
        VS
        <div class="vx-online-dot"></div>
      </div>
      <div class="vx-chat-popup-title">Virex Social</div>
      <div class="vx-chat-popup-status">
        🟢 Typically replies in minutes
      </div>
    </div>

    <div class="vx-chat-popup-body">

      <div class="vx-chat-msg">
        👋 Hi there! How can we help you today?
      </div>

      <div class="vx-chat-channels">

        <!-- WHATSAPP BUTTON 1 — +971507786370 -->
        <?php
          $number1       = '971507786370';
          $vx_wa_url_1   = 'https://wa.me/' . $number1 . '?text=' . rawurlencode($vx_whatsapp_message);
        ?>
        <a href="<?= $vx_wa_url_1 ?>"
           target="_blank"
           rel="noopener noreferrer"
           class="vx-channel-btn wa">

          <div class="vx-channel-icon wa">
            <svg viewBox="0 0 24 24" fill="white">
              <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884"/>
            </svg>
          </div>

          <div class="vx-channel-text">
            <span class="vx-ch-label">Chat on WhatsApp</span>
            <span class="vx-ch-name">+971 50 778 6370</span>
          </div>

          <div class="vx-channel-arrow">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </div>

        </a>

        <!-- WHATSAPP BUTTON 2 — +447493429464 -->
        <?php
          $number2       = '447493429464';
          $vx_wa_url_2   = 'https://wa.me/' . $number2 . '?text=' . rawurlencode($vx_whatsapp_message);
        ?>
        <a href="<?= $vx_wa_url_2 ?>"
           target="_blank"
           rel="noopener noreferrer"
           class="vx-channel-btn wa">

          <div class="vx-channel-icon wa">
            <svg viewBox="0 0 24 24" fill="white">
              <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884"/>
            </svg>
          </div>

          <div class="vx-channel-text">
            <span class="vx-ch-label">Chat on WhatsApp</span>
            <span class="vx-ch-name">+44 749 342 9464</span>
          </div>

          <div class="vx-channel-arrow">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </div>

        </a>

      </div>
    </div>
  </div>

  <!-- TOGGLE BUTTON -->
 <!-- TOGGLE BUTTON -->
<button class="vx-chat-toggle"
        id="vxChatToggle"
        aria-label="Chat with us on WhatsApp">

    <span class="vx-chat-notif">2</span>

    <!-- CHAT ICON — Full WhatsApp SVG -->
    <span class="vx-toggle-chat">
      <svg width="28" height="28" viewBox="0 0 24 24" fill="white">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884"/>
      </svg>
    </span>

    <!-- CLOSE ICON -->
    <span class="vx-toggle-close">
      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5">
        <line x1="18" y1="6" x2="6" y2="18"/>
        <line x1="6" y1="6" x2="18" y2="18"/>
      </svg>
    </span>

</button>
</div>

<!-- BACK TO TOP -->
<button class="vx-back-top"
        id="vxBackTop"
        aria-label="Back to top">
  <svg viewBox="0 0 24 24">
    <path d="M18 15l-6-6-6 6"/>
  </svg>
</button>

<!-- SCRIPT -->
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

  // auto open after 6 seconds
  setTimeout(function(){
    if(!open){ vxToggle(); }
  }, 6000);

  // back to top
  var btn = document.getElementById('vxBackTop');

  window.addEventListener('scroll', function(){
    btn.classList.toggle('vx-visible', window.scrollY > 400);
  });

  btn.addEventListener('click', function(){
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

})();
</script>