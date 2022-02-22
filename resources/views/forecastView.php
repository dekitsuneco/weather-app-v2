<?php

function createForecastViewsFrom($proccesedApiData, $city, $daysNum = 1) {
  $daysView = [];

  if (intval($daysNum) === 1) {
    foreach ($proccesedApiData as $dayDate => $dayForecast) {
      $daysView[] = "
        <div class='forecast__row'>
          <div class='forecast__date'>
            {$dayDate}
          </div>
          <div class='forecast__city'>
            {$city}
          </div>
          <!--*-->
          <table class='weather'>
          <tbody>
            <tr class='weather__temperature weather-section'>
              <td class='weather-section__title'>
                Temperature
              </td>
              <td class='weather-section__value'>
                {$dayForecast['avgTemperature']}^C
              </td>
            </tr>
            <tr class='weather__min-temperature weather-section'>
              <td class='weather-section__title'>
                Min
              </td>
              <td class='weather-section__value'>
                {$dayForecast['minTemperature']}^C
              </td>
            </tr>
            <tr class='weather__max-temperature weather-section'>
              <td class='weather-section__title'>
                Max
              </td>
              <td class='weather-section__value'>
                {$dayForecast['maxTemperature']}^C
              </td>
            </tr>
            <tr class='weather__wind weather-section'>
              <td class='weather-section__title'>
                Wind
              </td>
              <td class='weather-section__value'>
                {$dayForecast['maxWindSpeed']}km/h
              </td>
            </tr>
            <tr class='weather__humidity weather-section'>
              <td class='weather-section__title'>
                Humidty
              </td>
              <td class='weather-section__value'>
                {$dayForecast['avgHumidity']}km/h
              </td>
            </tr>
            <tr class='weather__summary weather-section'>
              <td colspan='2' class='weather-section__single-value'>
                {$dayForecast['summary']}
              </td>
            </tr>
          </tbody>
        </table>
        <!--*-->
        </div>
      ";    
    }

    return $daysView;
  }

  $count = 1;

  foreach ($proccesedApiData as $dayDate => $dayForecast) {
    $daysView[] = "
      <div class='forecast week-card'>
        <div class='forecast__row'>
          <div class='forecast__date'>
            {$dayDate}
          </div>
          <div class='forecast__city'>
            {$city}
          </div>
    
          <table class='weather'>
            <tbody>
              <tr class='weather__temperature weather-section'>
                <td class='weather-section__title'>
                  Temperature
                </td>
                <td class='weather-section__value'>
                  {$dayForecast['avgTemperature']}^C
                </td>
              </tr>
              <tr class='weather__min-temperature weather-section'>
                <td class='weather-section__title'>
                  Min
                </td>
                <td class='weather-section__value'>
                  {$dayForecast['minTemperature']}^C
                </td>
              </tr>
              <tr class='weather__max-temperature weather-section'>
                <td class='weather-section__title'>
                  Max
                </td>
                <td class='weather-section__value'>
                  {$dayForecast['maxTemperature']}^C
                </td>
              </tr>
              <tr class='weather__wind weather-section'>
                <td class='weather-section__title'>
                  Wind
                </td>
                <td class='weather-section__value'>
                  {$dayForecast['maxWindSpeed']}km/h
                </td>
              </tr>
              <tr class='weather__humidity weather-section'>
                <td class='weather-section__title'>
                  Humidty
                </td>
                <td class='weather-section__value'>
                  {$dayForecast['avgHumidity']}km/h
                </td>
              </tr>
              <tr class='weather__summary weather-section'>
                <td colspan='2' class='weather-section__single-value'>
                  {$dayForecast['summary']}
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    ";

    if ($count === $daysNum) {
      break;
    }

    $count++;
  }


  return $daysView;
}

?>

