<?php
  $accept_radio_check = "";
  $decline_radio_check = "";
  $current_url = $_SERVER['REQUEST_URI'];

   //radio button checked
   if (isset($_COOKIE['acceptCookies'])) {
    if ($_COOKIE['acceptCookies'] == 'true') {
      $accept_radio_check = "checked";
      $decline_radio_check = "";
    } else if ($_COOKIE['acceptCookies'] == 'false') {
      $accept_radio_check = "";
      $decline_radio_check = "checked";
    }
  } else {
    $accept_radio_check = "";
    $decline_radio_check = "checked";
  }

  $title = "Cookie Settings  | Tourist Information Chatbot";
  require '../../page_parts/jorge_header.php';
?>
  <!-- +++++ Welcome Section +++++ -->
  <div id="ww">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 centered">
          <h1>Cookie Settings</h1>

        </div>
        <!-- /col-lg-8 -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /ww -->

  <!-- +++++ Information Section +++++ -->

  <div class="container pt">

    <!-- /row -->

    <div class="row mt">
      <div class="col-lg-12">
        <p>If you agree to the use of cookies on chat.withjorge.jp, please click the Accept cookies and Save buttons.</p>
        <h4>Examples of cookie usage purpose</h4>
        <p class="text-left">
          <span class="text-list">To analyze how this website is being accessed and to improve its user convenience</span>
          <span class="text-list">To compile and analyze tourism-related data in areas where the “Jorge” service, a tourist information chatbot, is provided（※）</span>
          <span class="span-text">※The data will be shared with "Jorge" service providers on an anonymous and statistically processed basis.<br />
        </p>
        <h4 class="consent-cookie">Consent to cookies</h4>
        <!-- For PC radio button  -->
        <table class="table table-bordered cookie_table">
          <tbody>
            <tr>
              <td class="padding-text">
                <div class="radio">
                  <label for="accept-cookies">Accept cookies</label>
                  <span style="float: right">
                    <input type="radio" id="accept-cookies" name="accept-cookies" <?php echo $accept_radio_check; ?> value="accept" />
                  </span>
                </div>
              </td>
              <td class="padding-text">
                <div class="radio">
                  <label for="decline-cookies">Decline cookies</label>
                  <span style="float: right">
                  <input type="radio" id="decline-cookies" name="accept-cookies" <?php echo $decline_radio_check; ?> value="decline" />
                  </span>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <!-- For PC radio button  -->

        <!-- For SP switch button  -->
        <div class="panel panel-default">
          <ul class="list-group">
              <li class="list-group-item">
              <span class="h4 checkbox-cookie" >Accept cookies</span>
                <div class="material-switch pull-right">
                  <input type="checkbox" id="accept-cookies-switch" name="accept-cookie-sp" <?php echo $accept_radio_check; ?> value="accept" />
                  <label for="accept-cookies-switch" class="label-default"></label>
                </div>
              </li>
          </ul>
        </div>
        <!-- For SP switch button  -->
        <p class="text-left">For more information, please see our <a href="/jorge/cookie-policy-<?php echo $browser_language; ?>" class="text-danger">
        Cookie Policy</a>.</p>
        <button onclick="saveCookieSetting()" class="btn btn-light cookie_save_btn">Save</button>
        <button onclick="saveSwitchSetting()" class="btn btn-light switch_save_btn">Save</button>
      </div>
      <!-- /colg-lg-6 -->
    </div>
  <!-- /col-lg-6 -->
  </div>

  <script>
  function saveCookieSetting() {
    // To save radio button data for PC
    const cookieSetting = $('input[name=accept-cookies]:checked').val();
    cookieSetting == 'accept' ? consentGranted() : consentDecline();
  }

  function saveSwitchSetting() {
    // To save switch checkbox button data for SP
    const switchCookieSetting = $('input[name=accept-cookie-sp]:checked').val();
    switchCookieSetting == 'accept' ? consentGranted() : consentDecline();
  }
</script>

<?php
  require '../../page_parts/jorge_footer.php';
?>
