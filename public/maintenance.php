<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/includes/head.php"); ?>
    <title>Creative Spectrums &ndash; Bring your brand to life.</title>
    <style>
      header {
        opacity: 0.2;
      }
      #maintenance-container {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1;
      }
      #maintenance-container div {
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: calc(100vw - 30px);
        text-align: center;
        font-size: 1.5em;
        font-weight: bold;
        line-height: 1.5;
        opacity: 1;
      }
    </style>
  </head>
  <body>
    <div id="maintenance-container">
      <div>We are currrently updating the website. Please find our résumé <a href="/assets/pdf/jean-simon-robert-ouimet-resume.pdf" target="_blank" class="link">here</a>.</div>
    </div>
    <div class="frame animated fadeIn">
      <!--Main header-->
      <header class="bit-1">
        <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/includes/navbar.php"); ?>
        <div class="main-jumbotron" style="background-image: url('/assets/svg/creative-spectrums-concentric-form-grey.svg')">
          <div class="teaser-container">
            <div class="teaser">
              <h1 class="title-big mg-b" style="line-height: 1.1;">
                Bring your<br>
                brand to life.
              </h1>
              <p class="no-mg subtitle">discover&nbsp;&nbsp;<span class="icon">&darr;</span></p>
            </div>
          </div>
        </div>
      </header>
  </body>
</html>