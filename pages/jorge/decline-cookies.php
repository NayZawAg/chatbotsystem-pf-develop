<?php
  setcookie('acceptCookies', 'false');
  $redirect_url = ($_REQUEST['origin']) ? $_REQUEST['origin'] : "/jorge";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Decline cookies</title>
  <pre>
    <meta http-equiv="refresh" content="0;URL=<?php gethostname(); ?><?php echo $redirect_url; ?>">
  </pre>
</head>
<body>
</body>
</html>
