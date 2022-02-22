<?php

function getUrlFor($city = 'Paris', $days = 1) {
  $API_KEY = '2668fbe9d2f247f28ae151607221601';
  $BASE_URL = 'https://api.weatherapi.com/v1/current.json?key=2668fbe9d2f247f28ae151607221601&q=Paris';
  
  $url = /*$BASE_URL . '?' . http_build_query(['key' => $API_KEY, 'q' => $city])*/
  "https://api.weatherapi.com/v1/forecast.json?key=2668fbe9d2f247f28ae151607221601&q={$city}&days={$days}";


  return $url;
}

?>
