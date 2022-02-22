<?php

function filterForecastDataOf($apiData) {
  $rawForecastPerDays = $apiData['forecast']['forecastday'];

  $reducedForecastPerDays = array_reduce(
    $rawForecastPerDays,
    function($reducedData, $rawForecastPerDay) {
    
      $day = explode('-', $rawForecastPerDay['date'])[2];
      $reducedData[$day] = $rawForecastPerDay['day'];
    
      return $reducedData;
    },
    []
  );


    return $reducedForecastPerDays;
}

function formatForecastDataOf($reducedForecastPerDays) {
    $formattedForecastDataPerDays = array_map(
      function($reducedForecastPerDay) {
        $formattedData = [
          'minTemperature' => $reducedForecastPerDay['mintemp_c'],
          'maxTemperature' => $reducedForecastPerDay['maxtemp_c'],
          'avgTemperature' => $reducedForecastPerDay['avgtemp_c'],
          'maxWindSpeed' => $reducedForecastPerDay['maxwind_kph'],
          'avgHumidity' => $reducedForecastPerDay['avghumidity'],
          'summary' => $reducedForecastPerDay['condition']['text']
        ];
        

        return $formattedData;
      },
      $reducedForecastPerDays
    );
  

    return $formattedForecastDataPerDays;
}

// * Combining function for out of the file usage:
function proccesDataOf($apiData) {
  $filtered = filterForecastDataOf($apiData);
  $proccesedApiData = formatForecastDataOf($filtered);


  return $proccesedApiData;
}

?>