<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>mimiB</title>

  <!--Main stylesheet-->
  <link rel="stylesheet" href="/css/main.css">
</head>

<body>

  <div class="frame">

    <!--Main header-->
    <header class="bit-1">

      <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/navbar.php"; include_once($path); ?>

      <div class="project-jumbotron" style="background-image: url('../../assets/img/mimib/mimib-photo-01.jpg')"></div>

    </header>

    <!--Main Content-->
    <main>

      <!--Project-->
      <article>
        <header>
          <h1 class="title-big">mimiB</h1>
          <h2 class="title-small">Project Detail</h2>
        </header>

        <section>

          <div class="bit-2">
            
            <p>
              <span class="bold">Client</span><br>
              Micheline Beaulieu
            </p>

            <p>
              <span class="bold">Industry</span><br>
              Fashion
            </p>

          </div>

          <div class="bit-2">
            
            <p>
              <span class="bold">Deliverables</span><br>
              Visual identity<br>
              Business card
              Promotional material: flyers, posters, programmes<br>
            </p>

            <p>
              <span class="bold">Color Palette</span><br>
              <span class="color-swatch mimib-rose"></span>
            </p>

            <p>
              <span class="bold">Fonts</span><br>
              <a href="http://www.fontfabric.com/canter-free-font/" target="_blank" class="link">Canter&nbsp;&nearr;</a><br>
              <a href="https://www.myfonts.com/fonts/urw/futura/" target="_blank" class="link">Futura&nbsp;&nearr;</a><br>
              <a href="https://www.fonts.com/font/itc/itc-american-typewriter" target="_blank" class="link">ITC American Typewriter&trade;&nbsp;&nearr;</a><br>
              <a href="https://fonts.google.com/specimen/Lobster" target="_blank" class="link">Lobster&nbsp;&nearr;</a>
            </p>

          </div>

          </section>

          <section>
          
            <div class="bit-1 mg-t">

              <div class="bit-2">
                <div class="img-1-1" style="background-image: url('../../assets/img/mimib/mimib-photo-02.jpg')"></div>
              </div>
              <div class="bit-2">
                <div class="img-1-1" style="background-image: url('../../assets/img/mimib/mimib-photo-03.jpg')"></div>
              </div>

            </div>

            <div class="bit-3">
              <div class="img-1-1" style="background-image: url('../../assets/img/mimib/mimib-photo-04.jpg')"></div>
            </div>

            <div class="bit-3">
              <div class="img-1-1" style="background-image: url('../../assets/img/mimib/mimib-photo-05.jpg')"></div>
            </div>

            <div class="bit-3">
              <div class="img-1-1" style="background-image: url('../../assets/img/mimib/mimib-photo-06.jpg')"></div>
            </div>

            <p class="bit-2">
              <span class="bold">Tags</span><br>
              <a href="#" class="tag">2015</a>
              <a href="#" class="tag">branding</a>
              <a href="#" class="tag">diy</a>
              <a href="#" class="tag">fashion</a>
              <a href="#" class="tag">multimedia</a>
              <a href="#" class="tag">ottawa</a>
              <a href="#" class="tag">print</a>
              <a href="#" class="tag">rose</a>
              <a href="#" class="tag">sewing</a>
            </p>

          </section>

          <!--Needs to be dynamic-->
          <footer class="bit-1 other-projects">
            <h2 class="title-small">Other Projects</h2>
            <a href="/projects/mimib.php">
              <div class="bit-2 other-project-prev" style="background-image: url('../../assets/img/mimib/mimib-photo-01.jpg')">
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

  <!--<script src="js/slideshow.js"></script>-->
  <script src="/js/overlay.js"></script>

</body>

</html>