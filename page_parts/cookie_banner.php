<!-- Include Google Tag Manager (gtag) script -->
<!-- For PC -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookie Banner</title>
  <!-- font-awesome Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php
  if (!isset($_COOKIE['acceptCookies'])) {
  }
  $agree_message1 = "We use cookies to analyze usage status and improve your experience on our website. If you agree to the use of cookies on this website, please click the Accept Cookies button. For more information, please see our ";
  $cookie_policy = "Cookie Policy";
  $agree_message2 = ".";
  $accept_button = "Accept Cookies";
  $current_url = $_SERVER['REQUEST_URI'];

  if ($browser_language == 'ja') {
    $agree_message1 = "このサイトでは、ユーザーの利用状況の把握、及び利便性の向上を目的としてCookieを使用しています。同意ボタンをクリックすると、ユーザーはこのサイトでのCookieの使用に同意したことになります。詳細については、「";
    $cookie_policy = "クッキーポリシー";
    $agree_message2 = "」をご覧ください。";
    $accept_button = "同意する";
  }
  if ($browser_language == 'ja') {
  echo '<style>
    .cookie_text {
      max-width: 696px;
    }
    </style>';
  }
  else {
    echo '<style>
    .cookie_text {
      max-width: 800px;
    }
    </style>';
  }
?>

<?php
  if (!isset($_COOKIE['acceptCookies'])) {
?>
  <div id="cookieBanner" class="cookie-banner-box cookie-banner">
    <div class="container ipc_cookie_inner">
      <p lang="<?php echo $browser_language; ?>" class="cookie_text"><?php echo $agree_message1; ?>
        <a href="/jorge/cookie-policy-<?php echo $browser_language; ?>" class="underline"><?php echo $cookie_policy; ?></a><?php echo $agree_message2; ?>
      </p>
      <div class="accept_btn">
        <button onclick="consentGranted()" name="acceptCookiesBtn" class="accept-cookies-btn" id="accept_cookies_btn"><?php echo $accept_button; ?></button>
        <button onclick="consentDecline()" name="declineCookiesBtn" class='close_btn' id="decline_cookies_btn">
          <i class='fa-solid fa-circle-xmark'></i>
        </button>
      </div>
    </div>
  </div>
<?php
  }
?>

<!-- For Mobile -->
<?php
  $agree_message1 = "If you agree to the use of cookies on this website, please click the Accept Cookies button.";
  $cookie_policy = " Check the details.";
  $accept_button = "Accept Cookies";

  if ($browser_language == 'ja') {
    $agree_message1 = "Cookie使用にご同意いただける場合は、同意ボタンをクリックしてください。";
    $cookie_policy = "詳細を見る";
    $accept_button = "同意する";
  }
  if ($browser_language !== 'ja') {
  echo '<style>
    @media only screen and (max-width: 480px) {
      .acceptCookies-sp {
        margin: 6px 0 0 0px !important;
      }
    }
    </style>';
  }
?>

<?php
  if (!isset($_COOKIE['acceptCookies'])) {
?>
  <div id="cookieBanner-sp" class="cookie-banner-box cookie-banner-sp">
    <div class="container ipc_cookie_inner">
      <p lang="<?php echo $browser_language; ?>" class="agree-message"><?php echo $agree_message1; ?>
        <a href="/jorge/cookie-policy-<?php echo $browser_language; ?>" class="underline"><?php echo $cookie_policy; ?></a>
      </p>
      <div class="acceptCookies-sp">
        <button onclick="consentGranted()" name="acceptCookiesBtn" class="btn btn-danger acceptCookiesBtn-sp" id="accept_cookies_btn"><?php echo $accept_button; ?></button>
        <button onclick="consentDecline()" name="declineCookiesBtn" class='cancel-btn' id="decline_cookies_btn">&#10006;</button>
      </div>
    </div>
  </div>
<?php
  }
?>
</body>
</html>

