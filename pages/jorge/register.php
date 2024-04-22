<?php
  session_start();
  if(!isset($_COOKIE['admin_user_id'])) {
    header('Location: /jorge/login?origin=register');
    exit;
  }
  require_once '../../lib/database.php';

  $method = $_SERVER['REQUEST_METHOD'];
  $msg = "";
  if ($method === 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    $stmt = $db->prepare('INSERT INTO users VALUES(NULL, :username, :password, :role, datetime(), datetime())');
    $stmt->bindValue(':username', $username, SQLITE3_TEXT);
    $stmt->bindValue(':password', $password, SQLITE3_TEXT);
    $stmt->bindValue(':role', $role, SQLITE3_TEXT);
    $stmt->execute();
  }
  $title = "Register | Tourist Information Chatbot";
  require '../../page_parts/jorge_header.php';
?>
<div id="ww">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-lg-offset-4">
        <h1>Register</h1>
        <form method="post" action="" name="register-form">
          <div class="mb-3">
            <label for="username" class="form-label">ID</label>
            <input type="text" class="form-control" id="username" name="username" pattern="[a-zA-Z0-9]+" required />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required />
          </div>
          <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <input type="role" class="form-control" id="role" name="role" required />
          </div>
          <button type="submit" class="btn btn-primary btn-register" name="register" value="register">Register</button>
        </form>
      </div>
    </div>
  <!-- /col-lg-8 -->
  </div>
<!-- /row -->
</div>
<style>
  .btn.btn-register {
    margin-top: 10px;
  }
</style>

<?php
  require '../../page_parts/jorge_footer.php';
?>
