<?php
  require '../../lib/functions.php';
  require '../../page_parts/response_header.php';
  $title = "Kushiro area poster - English | Tourist Information Chatbot";
  $area = "Kushiro";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
	<title><?php echo $title ?></title>

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Stanley
    Template URL: https://templatemag.com/stanley-bootstrap-freelancer-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->

  <!-- jquery.js -->
  <script type='text/javascript' src='/assets/lib/jquery/jquery.min.js'></script>
  <!-- jquery.rwdImageMaps.min.js -->
  <script type="text/javascript" src="/assets/lib/jquery/jquery.rwdImageMaps.min.js"></script>
  <!-- main.js -->
  <script type="text/javascript" src="/assets/js/main.js"></script>

  <?php require '../../page_parts/gtag_header.php'; ?>
</head>
<body>
  <?php require '../../page_parts/language_switcher.php'; ?>
  <?php require '../../lib/constant.php'; ?>
  <?php require '../../page_parts/cookie_banner.php';
    echo '<style>
    .cookie-banner-sp {
      top:0;
    } 
    .cookie-banner, .cookie-banner-sp {
      background-color: rgba(0,32,96,0.6);
    }
    .close_btn i, .cancel-btn {
      color: #002050;
    }
    .accept-cookies-btn, .acceptCookiesBtn-sp {
      background-color: #002050;
    }
    </style>';
  ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 centered">
				<img src=<?php echo getBlobUrlWithSignature('poster/Kushiro_area_chatbot_poster_en.jpg') ?> alt=<?php echo $kushiro_image_alt ?> usemap="#poster_map" width="1145" height="1610" class="img-responsive">
				<map name="poster_map">
          <area shape="rect" coords="670,545,477,617" alt=<?php echo $kushiro_image_alt ?> href=<?php echo $jorge_link ?>>
				  <area shape="rect" coords="864,807,285,737" alt=<?php echo $kushiro_image_alt ?> href=<?php echo $jorge_link ?>>
				  <area shape="rect" coords="727,1588,949,1600" alt=<?php echo $kushiro_mail_alt ?> href=<?php echo $mail_link ?>>
				</map>
      </div>
    </div>
  <!-- /col-lg-12 -->
  </div>
  <script>
    $(document).ready(function(e) {
      $('img[usemap]').rwdImageMaps();
    });
  </script>
</body>
</html>
