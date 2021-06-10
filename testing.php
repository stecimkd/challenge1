<?php
  $str = file_get_contents('test.json');
  $json = json_decode($str, true);
  $rating = $json[0];

  echo '<pre>' . print_r($json, true) . '</pre>';
?>