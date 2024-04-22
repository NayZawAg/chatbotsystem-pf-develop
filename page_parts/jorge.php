<?php
  $title = "Jorge - Tourist Information Chatbot";
  require 'jorge_header.php';
  $hello_message = "Hello everybody. I'm Jorge, a free handsome personal concierge for traveling Japan.";
  $line_text = "Start on LINE";
  $facebook_text = "Start on Facebook Messenger";
  $web_text = "Start on Web";
  if ($browser_language == 'ja') {
    $hello_message = "私の名前はJorge! 観光に関するあなたの知りたい・聞きたいに答えるよ!";
    $line_text = "LINEで話す";
    $facebook_text = "Facebook Messengerで話す";
    $web_text = "WEBで話す";
  }
?>
  <!-- +++++ Welcome Section +++++ -->
  <div id="ww">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 centered">
          <img src="/assets/img/with JORGE LOGO_logo_p3.svg" alt="Stanley" width="155">
          <h1>Hi, I am Jorge!</h1>
          <p lang="<?php echo $browser_language; ?>"><?php echo $hello_message; ?></p>

          <a href="javascript:void(0)" class="btn-square-little-rich-line btn-line" lang="<?php echo $browser_language; ?>" text="<?php echo $line_text; ?>"><?php echo $line_text; ?></a>
          <br lang="<?php echo $browser_language; ?>"><br lang="<?php echo $browser_language; ?>">
          <a href="javascript:void(0)" text="<?php echo $facebook_text; ?>" class="btn-square-little-rich-fb btn-facebook" lang="<?php echo $browser_language; ?>"><?php echo $facebook_text; ?></a>
          <br lang="<?php echo $browser_language; ?>"><br lang="<?php echo $browser_language; ?>">
          <a href="javascript:void(0)" text="<?php echo $web_text; ?>" class="btn-square-little-rich btn-web" lang="<?php echo $browser_language; ?>"><?php echo $web_text; ?></a>
        </div>
      </div>
    <!-- /col-lg-8 -->
    </div>
  <!-- /row -->
  </div>

<?php
  require 'jorge_footer.php';
?>
