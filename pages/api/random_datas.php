<?php
$output = [];
$errors = [];
$status = http_response_code(200);
$request_body = file_get_contents('php://input');
$request = json_decode($request_body, true);
if (!isset($request['datas'])) {
  array_push($errors, "datas must be required");
  $output = [
    'errors' => $errors
  ];
}
if (isset($request['datas']) && !isset($request['datas']['result'])) {
  array_push($errors, "datas > result must be required");
  $output = [
    'errors' => $errors
  ];
}
if (count($errors) > 0) {
  $status = http_response_code(400);
  $output = [
    'errors' => $errors
  ];
} else {
  $output = $request['datas'];
  $results = $output['result'];
  shuffle($results);
  $output['result'] = $results;
}
header($status);
header('Content-Type: application/json; charset=utf-8');
echo json_encode($output, JSON_UNESCAPED_UNICODE);
?>
