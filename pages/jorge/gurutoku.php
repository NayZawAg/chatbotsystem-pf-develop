<?php
require '../../lib/functions.php';
require '../../page_parts/response_header.php';
$title = "Gurutoku Passport - Japanese | Tourist Information Chatbot";
$area="Kushiro";
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
  <!-- main.js -->
  <script type="text/javascript" src="/assets/js/main.js"></script>

  <?php require '../../page_parts/gtag_header.php'; ?>
</head>
<body>
  <?php require '../../lib/constant.php'; ?>
  <?php
  $l1 = null;
  $l2 = null;

  if (isset($_GET['l1']) && isset($_GET['l2'])){
    $l1 = $_GET['l1'];
    $l2 = $_GET['l2'];
    $jpg_url = getBlobUrlWithSignature('gurutoku/l1_' . $l1 . '_l2_' . $l2 . '.jpg');
  }
  ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 centered">
				<img src=<?php echo $jpg_url ?> alt=<?php echo $kushiro_image_alt ?>  width="1145" height="1610" class="img-responsive">	
      </div>
    </div>
  <!-- /col-lg-12 -->
  </div>
</body>
</html>