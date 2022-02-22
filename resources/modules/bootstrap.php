<?php
  // API setting:
  require_once(dirname(__FILE__) . '/SETTINGS.php');
  // Connection and fetching:
  require_once(dirname(__FILE__) . '/request.php');
  // Validate:
  require_once(dirname(__FILE__) . '/validator.php');
  // Throw away unneeded data and normalize the rest:
  require_once(dirname(__FILE__) . '/formatter.php');
  // Combine data with mark-up:
  require_once(dirname(__FILE__) . '/..' . '/views' . '/forecastView.php');
  // Put that afore-created component into the div-container:
  require_once(dirname(__FILE__) . '/..' . '/views' . '/containerView.php');

?>