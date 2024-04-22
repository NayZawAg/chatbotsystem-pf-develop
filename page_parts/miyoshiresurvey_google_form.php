<?php
  require 'response_header.php';
?>
<!DOCTYPE html>
<html lang="ja">
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
  <?php require 'gtag_header.php'; ?>
</head>
<body>
	<div class="container">
    <div class="row">
      <div class="col-lg-12 centered">
        <iframe src="<?php echo $google_form_url; ?>" width="<?php echo $iframe_width; ?>" height="<?php echo $iframe_height; ?>" 
        frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
      </div>
    </div>
  <!-- /col-lg-12 -->
  </div>
</body>
</html>
