<?php
$from = null;
$to = null;

if (isset($_GET['from']) && isset($_GET['to'])){
  $from = $_GET['from'];
  $to = $_GET['to'];
}

search($from, $to);

function search($from, $to) {
  $from = trim($from);
  $to = trim($to);
  $output = [];
  $errors = [];
  $status = http_response_code(200);
  if (!is_numeric($from)) {
    array_push($errors, "from must be number");
  }
  if (!is_numeric($to)) {
    array_push($errors, "to must be number");
  }
  if (count($errors) > 0) {
    $status = http_response_code(400);
    $output = [
      'errors' => $errors
    ];
  } else {
    $from = intval($from);
    $to = intval($to);
    $output = [
      'value' => rand($from, $to)
    ];
  }
  header($status);
  header('Content-Type: application/json; charset=utf-8');
  echo json_encode($output);
}
?>
