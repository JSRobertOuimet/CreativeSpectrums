<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>La Parapharmacie</title>

  <!--Main stylesheet-->
  <link rel="stylesheet" href="/css/main.css">
</head>

<body>

  <div class="frame">

    <!--Main header-->
    <header class="bit-1">

      <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/navbar.php"; include_once($path); ?>

      <div class="project-jumbotron" style="background-image: url('/assets/img/mimib/mimib-photo-1.jpg')"></div>

    </header>

    <!--Main Content-->
    <main>

      <!--Project-->
      <article>
        <header>
          <h1 class="title-big">La Parapharmacie</h1>
          <h2 class="title-small">Project Details</h2>
        </header>

        <section>

          <div class="bit-2">
            
            <p>
              <span class="bold">Client</span><br>
              <a href="https://lapara.ca/" target="_blank" class="link">La Parapharmacie&nbsp;&nearr;</a>
            </p>

            <p>
              <span class="bold">Industry</span><br>
              Health
            </p>

          </div>

          <div class="bit-2">
            
            <p>
              <span class="bold">Deliverables</span><br>
              - New visual identity &amp; brand guidelines<br>
              - Business cards, flyers, leaflets, posters<br>
              - Social media assets &amp; announcements
            </p>

            <p>
              <span class="bold">Color Palette</span><br>
              <span class="color-swatch la-parapharmacie-blue"></span>
              <span class="color-swatch la-parapharmacie-green"></span>
              <span class="color-swatch border white"></span>
            </p>

            <p>
              <span class="bold">Font</span><br>
              <a href="https://www.urwpp.de/en/shop/?fontshop=datei:show_font_details;fontnummer:n019003t;" target="_blank" class="link">Nimbus Sans&nbsp;&nearr;</a><br>
            </p>

            <p class="mg-t">
              <a href="/assets/pdf/la-parapharmacie-brand-guidelines.pdf" target="_blank" class="btn">download guidelines&nbsp;&nbsp;<span class="icon download">&rarr;</span></a>
            </p>

          </div>

          </section>

          <section>
          
            <div class="bit-1">

              <img class="bit-1 img-1-1 lazy mg-t" src="/assets/svg/la-parapharmacie-logo.svg">

              <img class="bit-1 img-2-1 lazy" src="/assets/img/la-parapharmacie/la-parapharmacie-le-papa-de-la-para.jpg" width="100%">

              <img class="bit-2 img-1-1 lazy" src="/assets/img/la-parapharmacie/la-parapharmacie-vitrine-allergy.jpg">
              <img class="bit-2 img-1-1 lazy" src="/assets/img/la-parapharmacie/la-parapharmacie-vitrine-digestion.jpg">
              <img class="bit-2 img-1-1 lazy" src="/assets/img/la-parapharmacie/la-parapharmacie-vitrine-liver.jpg">
              <img class="bit-2 img-1-1 lazy" src="/assets/img/la-parapharmacie/la-parapharmacie-vitrine-reflux.jpg">
              
              <img class="bit-1 img-1-1 lazy" src="/assets/img/la-parapharmacie/la-parapharmacie-norms-product-creation.jpg" width="100%">

              <img class="bit-3 img-1-1 lazy" src="/assets/svg/la-parapharmacie-icon.svg">
              <img class="bit-3 img-1-1 lazy" src="/assets/svg/la-parapharmacie-icon-reversed-blue.svg">
              <img class="bit-3 img-1-1 lazy" src="/assets/svg/la-parapharmacie-icon-reversed-green.svg">

              <img class="bit-2 img-1-1 lazy" src="/assets/img/la-parapharmacie/la-parapharmacie-addresses-clinique-intersante.jpg">
              <img class="bit-2 img-1-1 lazy" src="/assets/img/la-parapharmacie/la-parapharmacie-addresses-crudessence.jpg">
              <img class="bit-2 img-1-1 lazy" src="/assets/img/la-parapharmacie/la-parapharmacie-addresses-portes-de-sante-et-equilibre-lory.jpg">
              <img class="bit-2 img-1-1 lazy" src="/assets/img/la-parapharmacie/la-parapharmacie-addresses-sante-alchimiste-en-herbe.jpg">

              <img class="bit-2 img-1-1 lazy" src="/assets/img/la-parapharmacie/la-parapharmacie-form-appointement.jpg" width="100%">
              <img class="bit-2 img-1-1 lazy" src="/assets/img/la-parapharmacie/la-parapharmacie-form-order.jpg" width="100%">

            </div>

            <p class="bit-2 mg-t">
              <span class="bold">Tags</span><br>
              <a href="#" class="tag">2015</a>
              <a href="#" class="tag">blue</a>
              <a href="#" class="tag">branding</a>
              <a href="#" class="tag">green</a>
              <a href="#" class="tag">layout</a>
              <a href="#" class="tag">montreal</a>
              <a href="#" class="tag">health</a>
              <a href="#" class="tag">print</a>
            </p>

          </section>

          <!--Needs to be dynamic-->
          <footer class="bit-1 other-projects">
            <h2 class="title-small">Other Projects</h2>
            <a href="/projects/mimib.php">
              <div class="bit-2 other-project-prev" style="background-image: url('/assets/img/mimib/mimib-photo-1.jpg')">
                <h2 class="title-small no-mg">&larr;&nbsp;previous</h3>
              </div>
            </a>
            <a href="/projects/">
              <div class="bit-2 other-project-next" style="background: purple">
                <h2 class="title-small no-mg">next&nbsp;&rarr;</h3>
              </div>
            </a>
          </footer>

      </article>

    </main>
    
    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/footer.php"; include_once($path); ?>
  
  </div>

  <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/scripts.php"; include_once($path); ?>

</body>

</html>