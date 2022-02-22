<?php
    session_start();
  // Array with the forecast data packed into mark-up:
    $forecast = null;

    if (isset($_SESSION['forecast']) && !empty($_SESSION['forecast'])) {
      $forecast = $_SESSION['forecast'];
    }
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/styles/style.css">
    <title>Weather App</title>
  </head>

  <body>
    <div class="wrapper">
      <header class="header">
        <div class="container">
          <div class="header__row">
            <div class="header__logo">
              <img src="https://img.icons8.com/ultraviolet/80/000000/partly-cloudy-day--v1.png" />
            </div>
            <div class="header__burger">
              <span></span>
            </div>
            <div class="header__nav nav">
              <ul class="nav__list">
                <li><a href="index.php">Home</a></li>
                <li><a href="today.php">Today Forecast</a></li>
                <li><a href="week.php">Week Forecast</a></li>
              </ul>
            </div>
          </div>
        </div>
      </header>

      <main class="content">
        <div class="img-section"></div>
        <form class="search-form" action="action.php">
          <div class="container">
            <div class="search-form__row">
              <input type="hidden" name="days" value="3" /> 
              <input class="search-form__input" name="city" placeholder="Find your city.."></input>
              <button class="search-form__submit">Find</button>
            </div>
          </div>
        </form>

        <div class="forecast-display">
          <?= $forecast; ?>
            <?php 
            $forecast = null;
            $_SESSION['forecast'] = null;
          ?>
          
        </div>
      </main>

      <footer class="footer">
        <div class="container">
          <div class="footer__row">
            <div class="footer__text">
              Designed and made by dekitsuneco.
            </div>
          </div>
        </div>
      </footer>
    </div>
    <script src="./src/js/script-dist.js"></script>
  </body>

</html>