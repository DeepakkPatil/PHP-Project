<?php

require __DIR__ . '/sanity.php';

$query = '*[_type == "about"].myArrayField[0]';
try {
  $result = $client->fetch($query);
  print_r($result);
  
} catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}