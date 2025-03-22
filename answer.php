<!DOCTYPE html>
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Area and Perimeter of a Trapezoid, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Isaac Ip" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-indigo.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Area and Perimeter of a Trapezoid, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Area and Perimeter of a Trapezoid, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/trapezoid-calculations.png" alt="trapezoid image" width="250" />
      </div>
      <div class="page-content-php">
        <div id="user-info">
          <?php
          $sideA = $_GET["side-a-entered"];
          $sideB = $_GET["side-b-entered"];
          $sideC = $_GET["side-c-entered"];
          $sideD = $_GET["side-d-entered"];
          $sideH = $_GET["height-entered"];

          // process
          $area = ($sideA + $sideB) * $sideH / 2;
          $perimeter = $sideA + $sideB + $sideC + $sideD;

          // output
          echo "The area of the trapezoid is " . $area . " cm².";
          echo "<br />";
          echo "<br />";
          echo "The perimeter of the trapezoid is " . $perimeter . " cm.";
          ?>
        </div>
      </div>
    </main>
  </div>
</body>

</html>