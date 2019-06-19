<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Creative Spectrums &ndash; Music</title>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/includes/head.php"); ?>
  </head>
  <body>
    <div class="frame animated fadeIn">
      <!--Main header-->
      <header class="bit-1">
        <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/includes/navbar.php"); ?>
      </header>
      <main>
        <!--Music-->
        <article>
          <header class="bit-1">
            <h1 class="title-big">Music</h1>
          </header>
          <!--Recordings-->
          <section>
            <header>
              <h2 class="bit-1 title-small">Recordings</h2>
            </header>
            <iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/803329032&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
          </section>
          <p class="bit-1 mg-t">
            <a href="/contact.php" class="btn">contact&nbsp;&nbsp;<span class="icon">&rarr;</span></a>
          </p>
        </article>
      </main>
      <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"); ?>
    </div>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/includes/scripts.php"); ?>
  </body>
</html>