<?php
  session_start();
  require_once '../../lib/database.php';
  // origin
  $origin = isset($_GET['origin']) ? $_GET['origin'] : '';
  $authenticated = false;
  $city = '';
  // check area
  if ($origin == "web-jorge/test2021nahatourismassoc") {
    $cookie_id = 'nahatourismassoc_user_id';
    $city = 'auth_users_nahatourismassoc';
    $role = 'nahatourismassoc';
  } elseif ($origin == "web-jorge/test2021hitoyoshikuma") {
    $cookie_id = 'hitoyoshikuma_user_id';
    $city = 'auth_users_hitoyoshikuma';
    $role = 'hitoyoshikuma';
  } elseif ($origin == "register") {
    $cookie_id = 'admin_user_id';
    $role = 'admin';
  } else {
    header(http_response_code(400));
    header('Location: /400');
  }

  // set the expiration date to one hour ago
  setcookie("admin_user_id", 0, time() - 3600, "/", $_ENV["HOST_NAME"]);
  setcookie("hitoyoshikuma_user_id", 0, time() - 3600, "/", $_ENV["HOST_NAME"]);
  setcookie("nahatourismassoc_user_id", 0, time() - 3600, "/", $_ENV["HOST_NAME"]);
  if (isset($_POST['login'])) {
    // parameters
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $query = $db->query('SELECT * from users where username="'.$username.'" AND role="'.$role.'"');
    $result = $query->fetchArray();

    if($result) {
      // Print the result depending if they match
      if (password_verify($password, $result["password"])) {
        if ($username == $result["username"] && $role == $result["role"]) {
          $authenticated = true;
        }
      }
    }

    if ($authenticated) {
      setcookie($cookie_id, 1, time() + (86400 * 1), "/", $_ENV["HOST_NAME"]); // 86400 = 1 day
      header('Location: ' . $origin);
      exit;
    }
  }
  $title = "Login | Tourist Information Chatbot";
  require '../../page_parts/jorge_header.php';
?>
  <!-- +++++ Welcome Section +++++ -->
  <div id="ww">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
          <h1>Login</h1>
          <form method="post" action="" name="signin-form">
            <?php
              if (isset($_POST['login']) && !$authenticated) {
                echo '<div class="alert alert-danger" role="alert">ID or password is wrong!</div>';
              }
            ?>
            <div class="mb-3">
              <label for="username" class="form-label">ID</label>
              <input type="text" class="form-control" id="username" name="username" pattern="[a-zA-Z0-9]+" required />
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required />
            </div>
            <button type="submit" class="btn btn-primary btn-login" name="login" value="login">Login</button>
          </form>
        </div>
      </div>
    <!-- /col-lg-8 -->
    </div>
  <!-- /row -->
  </div>
<style>
  .btn.btn-login {
    margin-top: 10px;
  }
</style>
<?php
  require '../../page_parts/jorge_footer.php';
?>
