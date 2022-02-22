<?php

  // LOGIC:
  function buildPage($city, $days) {
    $builtUrl = getUrlFor($city, $days);
    $rawApiData = fetchDataFrom($builtUrl);
    
    if (isValid($rawApiData)) {
      $proccesedApiData = proccesDataOf($rawApiData);
      $views = createForecastViewsFrom($proccesedApiData, $city, $days);
      $viewsContainer = putViewsIntoContainer($views, $city);
  
      return $viewsContainer;
    } else {
      return '404';
    }
  }

?>