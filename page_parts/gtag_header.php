<?php
  $current_url = $_SERVER['REQUEST_URI'];
?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145236920-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-145236920-1');
</script> -->
<!-- Google tag (gtag.js) -->

<script>
// Define dataLayer and the gtag function.
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}

// Check if the "acceptCookies" cookie is set
<?php if (!isset($_COOKIE['acceptCookies']) || (isset($_COOKIE['acceptCookies']) && $_COOKIE['acceptCookies'] == 'false')) { ?>;
  // Default ad_storage to 'denied' as a placeholder
  // Determine actual values based on your own requirements
  gtag('consent', 'default', {
    'ad_storage': 'denied',
    'analytics_storage': 'denied',
    'functionality_storage': 'denied',
    'personalization_storage': 'denied',
    'security_storage': 'denied'
  });
  <?php } ?>;
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-E9T54RQ84Q"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-E9T54RQ84Q');
</script>
<!-- Update this section based on your business requirements. -->
<script>
  function consentGranted() {
    gtag('consent', 'update', {
      'ad_storage': 'denied',
      'analytics_storage': 'granted',
      'functionality_storage': 'granted',
      'personalization_storage': 'denied',
      'security_storage': 'denied'
    });
    // go to accept-cookies
    location.href = "/jorge/accept-cookies?origin=<?php echo $current_url ?>";
  }

  function consentDecline() {
    gtag('consent', 'update', {
      'ad_storage': 'denied',
      'analytics_storage': 'denied',
      'functionality_storage': 'denied',
      'personalization_storage': 'denied',
      'security_storage': 'denied'
    });
    // go to decline-cookies
    location.href = "/jorge/decline-cookies?origin=<?php echo $current_url ?>";
  }
</script>
