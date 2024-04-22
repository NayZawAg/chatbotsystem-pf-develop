<?php
//Get the current request method.
$currentRequestMethod = $_SERVER['REQUEST_METHOD'];
//If the request method is not GET.
$methods = array('GET', 'POST');
if(!in_array($currentRequestMethod, $methods)) {
  //Send a "405 Method Not Allowed" header to the client and kill the script
  header($_SERVER["SERVER_PROTOCOL"]." 405 Method Not Allowed", true, 405);
  exit;
}

// Set response header
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
header("Content-Security-Policy: default-src 'self' https:; font-src 'self' https: data:; img-src *; object-src 'none'; script-src 'self' https: 'unsafe-inline' 'unsafe-eval'; style-src 'self' https: 'unsafe-inline'");
header("Strict-Transport-Security:max-age=31536000; includeSubDomains");
header('X-Content-Type-Options: nosniff');
header('X-Download-Options: noopen');
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
?>
