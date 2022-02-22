<?php

function putViewsIntoContainer($views, $city) {
  $temp = implode($views);

  if (count($views) === 1) {
    $containerForViews = "
      <div class='forecast'>
        {$temp}
      </div>
    ";
  } else {
    $containerForViews = "
      <div class='forecast-display__row'>
        {$temp}
      </div>";
  }

  return $containerForViews;
}

?>