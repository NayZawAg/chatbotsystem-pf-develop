<?php
  date_default_timezone_set('Asia/Tokyo');

  $datetime = new DateTime();
  $output = [
    'datetime' => $datetime->format('Y-m-d\TH:i:s.uP'),
    'date' => $datetime->format('Y-m-d'),
    'time' => $datetime->format('H:i:s'),
    'day' => $datetime->format('l')
  ];
  header(http_response_code(200));
  header('Content-Type: application/json; charset=utf-8');
  echo json_encode($output);
?>