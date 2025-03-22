<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Area and Perimeter of Trapezoid, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Isaac Ip" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-indigo.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Area and Perimeter of Traperzoid, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Area and Perimeter of Traperzoid, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/trapezoid-calculations.png" alt="trapezoid image" width="250" />
      </div>
      <br />
      <div class="page-content">Please enter the dimensions of the trapezoid:</div>
      <div class="page-content-php">
        <form action="answer.php" method="GET">
          <br />
          <p>Side A:</p>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="side-a-entered">
            <label class="mdl-textfield__label" for="side-a-entered">Side A Length Here ...</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <br />
          <p>Side B:</p>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="side-b-entered">
            <label class="mdl-textfield__label" for="side-b-entered">Side B Length Here ...</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <br />
          <p>Side C:</p>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="side-c-entered">
            <label class="mdl-textfield__label" for="side-c-entered">Side C Length Here ...</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <br />
          <p>Side D:</p>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="side-d-entered">
            <label class="mdl-textfield__label" for="side-d-entered">Side D Length Here ...</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <br />
          <p>Height:</p>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="height-entered">
            <label class="mdl-textfield__label" for="height-entered">Height Length Here ...</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <br />
          <!-- Accent-colored raised button with ripple -->
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
            type="submit">
            Calculate
          </button>
        </form>
      </div>
    </main>
  </div>
</body>

</html>