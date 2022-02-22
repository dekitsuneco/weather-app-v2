<?php

function fetchDataFrom($url) {
  $connectionHandler = curl_init();
  
  curl_setopt($connectionHandler, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($connectionHandler,CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($connectionHandler, CURLOPT_URL, $url);
  
  $response = curl_exec($connectionHandler);
  
  $apiData = json_decode($response, true);
  
  curl_close($connectionHandler);


  return $apiData;
}

?>
