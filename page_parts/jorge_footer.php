<?php
  $priacy_policy = "Privacy Policy";
  $terms_of_use = "Terms of Use";
  $anonymous = "Disclosure Concerning Anonymously Processed Information";
  $cookie_settings = "Cookie Settings";
  $cookie_policy = "Cookie Policy";
  if ($browser_language == 'ja') {
    $priacy_policy = "プライバシーポリシー";
    $terms_of_use = "利用規約";
    $anonymous = "匿名加工に関する公表";
    $cookie_settings = "クッキー設定";
    $cookie_policy = "クッキーポリシー";
  }
?>
<!-- +++++ Footer Section +++++ -->
  <div id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">

        </div>
        <!-- /col-lg-4 -->

        <div class="col-lg-4">
          <h4>Links</h4>
          <p lang="<?php echo $browser_language; ?>">
            <a href="/jorge/privacypolicy-<?php echo $browser_language; ?>"><?php echo $priacy_policy; ?></a><br/>
            <a href="/jorge/terms-of-use-<?php echo $browser_language; ?>"><?php echo $terms_of_use; ?></a><br/>
            <a href="/jorge/anonymous-<?php echo $browser_language; ?>"><?php echo $anonymous; ?></a><br/>
            <a href="/jorge/cookie-settings-<?php echo $browser_language; ?>"><?php echo $cookie_settings; ?></a><br/>
            <a href="/jorge/cookie-policy-<?php echo $browser_language; ?>"><?php echo $cookie_policy; ?></a>
            <br/>
          </p>
        </div>
        <!-- /col-lg-4 -->

        <div class="col-lg-4">
            </div>
        <!-- /col-lg-4 -->
      </div>
    </div>
  </div>
  
  <div id="copyrights">
    <div class="container">
      <p>
        &copy; Copyrights <strong>Jorge Management Office</strong>. All Rights Reserved
      </p>
      <p>
        Contact : omotenashi.jorge@gmail.com
      </p>
      <div class="credits">
        <!--
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/stanley-bootstrap-freelancer-template/
          Licensing information: https://templatemag.com/license/
        -->
        Created with Stanley template by <a href="https://templatemag.com/">TemplateMag</a>
      </div>
    </div>
  </div>
  <!-- / copyrights -->

  <!-- JavaScript Libraries -->
  <script src="/assets/lib/jquery/jquery.min.js"></script>
  <script src="/assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="/assets/lib/php-mail-form/validate.js"></script>

  <!-- Template Main Javascript File -->
  <script src="/assets/js/main.js"></script>

</body>
</html>