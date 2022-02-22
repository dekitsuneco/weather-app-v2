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
        <div class="about">
          <div class="container">
            <div class="about__row">
              <div class="about__img">
                <img src="./src/img/img5.jpg" alt="">
              </div>
              <div class="about__info">
                <p>
                  This application is a weather forecast service build on top of external publicly available API.
                </p>
                <p>
                  The frontend part of the application is developed with the use of Vanilla JavaScript and SASS.
                </p>
                <p>
                  The backend part of the application is developed with the use of raw PHP with no use of frameworks,
                  but with the use of some external libraries.
                </p>

              </div>
            </div>
          </div>
        </div>
        <div class="api">
          <div class="container">
            <div class="api__row">
              <div class="api__info">
                <p>
                  The application consists of three pages, - home page (current one), page that serves the weather
                  forecast information
                  for a week, and,the last but not least, is the page that serves weather forecast information for the
                  current day only.
                </p>
                <p>
                  The API used here is <a href="https://www.weatherapi.com/">WeatherAPI</a> service.
                </p>
                <p>
                  The service requires registration and suggests its clients several subscription plans.
                  The plan used in this application is the free one. It requires no payment whatsoever and
                  serves you with most of the functionality but there are some restrictions. Onr of them, for instance,
                  is the number of days you can require your forecast for, - its restricted to 3 days.
                </p>
              </div>
            </div>
          </div>
        </div>
      </main>

      <footer class="footer">
        <div class="container">
          <div class="footer__row">
            <div class="footer__text">
              Made by dekitsuneco.
            </div>
          </div>
        </div>
      </footer>
    </div>
    <script src="./src/js/script-dist.js"></script>
  </body>

</html>

