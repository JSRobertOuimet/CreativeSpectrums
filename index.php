<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Creative Spectrums &ndash; Branding, Print &amp; Web</title>

  <!--Main stylesheet-->
  <link rel="stylesheet" href="css/main.css">
</head>

<body>

  <div class="frame">

    <!--Main header-->
    <header class="bit-1">

      <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/navbar.php"; include_once($path); ?>

      <div class="main-jumbotron" style="background-image: url('/assets/svg/creative-spectrums-concentric-form-grey.svg')">
      
        <div class="teaser-container">
          <div class="teaser">
            <h1 class="title-big mg-b" style="line-height: 1.1;">
              Branding,<br>
              Print &amp; Web
            </h1>
            <p class="no-mg subtitle">discover&nbsp;&nbsp;<span class="icon">&darr;</span></p>
          </div>        
        </div>
      
      </div>

    </header>

    <!--Main Content-->
    <main>

      <!--Work-->
      <article>

        <header class="bit-1">
          <h1 class="title-big">Work</h1>
        </header>

        <!--Branding-->
        <section>
        
          <header>
            <h2 class="bit-1 title-small">Latest</h2>
          </header>

          <a href="/projects/master-piano-recital-series.php">
            <div class="bit-3 img-1-1 lazy" data-original="/assets/img/master-piano-recital-series/master-piano-recital-series-logo-on-image-thumbnail.jpg">
              <h3>explore&nbsp;&nbsp;<span class="icon">&rarr;</span></h3>
            </div>
          </a>

          <a href="/projects/la-parapharmacie.php">
            <div class="bit-3 img-1-1 lazy" data-original="/assets/img/la-parapharmacie/la-parapharmacie-logo-on-image-thumbnail.jpg">
              <h3>explore&nbsp;&nbsp;<span class="icon">&rarr;</span></h3>
            </div>
          </a>

          <a href="/projects/assent-compliance.php">
            <div class="bit-3 img-1-1 lazy" data-original="/assets/img/assent-compliance/assent-compliance-logo-on-image.jpg">
              <h3>explore&nbsp;&nbsp;<span class="icon">&rarr;</span></h3>
            </div>
          </a>

          <a href="/projects/mimib.php">
            <div class="bit-3 img-1-1 lazy" data-original="/assets/img/mimib/mimib-logo-on-image-thumbnail.jpg">
              <h3>explore&nbsp;&nbsp;<span class="icon">&rarr;</span></h3>
            </div>
          </a>

          <p class="bit-1 mg-t">
            <a href="/work.php" class="btn">view all&nbsp;&nbsp;<span class="icon">&rarr;</span></a>
          </p>
        
        </section>

      </article>

      <!--Newsletter-->
      <!--<article>
      
        <header class="bit-1">
          <h1 class="title-big">Newsletter</h1>
        </header>

        <section>
          <form action="newsletter.php">
            
            <div class="bit-2">

              <div class="form-group bit-1">
                <label for="name">Email</label>
                <input type="email" id="email" name="email" placeholder="email">
              </div>

              <p class="form-group bit-1 no-mg right">
                <a href="#" type="submit" class="btn">submit&nbsp;&nbsp;<span class="icon submit">&uarr;</span></a>
              </p>

            </div>
          
          </form>
        </section>

      </article>-->

      <!--<a href="http://www.1and1.com/web-hosting?kwk=520623385&ac=OM.US.US930K244547B7030a" rel="nofollow"><img src="http://adimg.uimserv.net/1und1/KWK/Classic-Hosting/US/NewHosting_kwk_us_sw_728x90.gif"/></a>-->

    </main>

    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/footer.php"; include_once($path); ?>
  
  </div>

  <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/scripts.php"; include_once($path); ?>

</body>

</html>