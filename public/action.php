<?php

  // SESSION:
  session_start();

  // INITIALIZE PARAMETERS:
  $city = $_GET['city'];
  $days = $_GET['days']; 

  // REQUIRE RESOURCES:
  require_once('../resources/modules/bootstrap.php');

  // CONSTRUCT PAGE FROM DATA AND TEMPLATES:
  require_once('../resources/modules/builder.php');

  $page = buildPage($city, $days);

  if ($page == '404') {
    header('Location: http://www.website.com/errors/404.php');
  } else {

    // REDIRECT WITH SESSION:
    $_SESSION['forecast'] = $page;

    if ($days > 1) {
      header('location: http://localhost:8000/week.php');
    } else {
      header('location: http://localhost:8000/today.php');
    }
  }

?>
