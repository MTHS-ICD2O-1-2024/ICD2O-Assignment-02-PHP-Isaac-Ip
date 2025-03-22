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
    <h1>Please enter the dimensions of the trapezoid:</h1>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/trapezoid-calculations.png" alt="Area and Perimeter Calculations">
      </div>
      <br />
      <!-- Numeric Textfield for side a-->
      <p>Side A:</p>
      <div class="mdl-textfield mdl-js-textfield">
        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="side-a-entered">
        <label class="mdl-textfield__label" for="side-a-entered">Side A Length Here ...</label>
        <span class="mdl-textfield__error">Input is not a number!</span>
        <!-- Numeric Textfield for side b-->
        <p>Side B:</p>
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="side-b-entered">
          <label class="mdl-textfield__label" for="side-b-entered">Side B Length here ...</label>
          <span class="mdl-textfield__error">Input is not a number!</span>
          <!-- Numeric Textfield for side c-->
          <p>Side C:</p>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="side-c-entered">
            <label class="mdl-textfield__label" for="side-c-entered">Side C Length Here ...</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
            <!-- Numeric Textfield for side d-->
            <p>Side D:</p>
            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="side-d-entered">
              <label class="mdl-textfield__label" for="side-d-entered">Side D Length Here ...</label>
              <span class="mdl-textfield__error">Input is not a number!</span>
              <!-- Numeric Textfield for height-->
              <p>Height:</p>
              <div class="mdl-textfield mdl-js-textfield">
                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="height-entered">
                <label class="mdl-textfield__label" for="side-d-entered">Height Length Here ...</label>
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
