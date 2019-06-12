<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Creative Spectrums &ndash; Contact</title>
    <?php
      $path = $_SERVER['DOCUMENT_ROOT'];
      $path .= "/includes/head.php";
      include_once($path);
    ?>
  </head>
  <body>
    <div class="frame animated fadeIn">
      <!--Main header-->
      <header class="bit-1">
        <?php
          $path = $_SERVER['DOCUMENT_ROOT'];
          $path .= "/includes/navbar.php";
          include_once($path);
        ?>
      </header>
      <!--Contact-->
      <article>
        <header class="bit-1">
          <h1 class="title-big">Contact</h1>
        </header>
        <p>Whether you are recruiting, looking for a contractor, or would like to collaborate on a new project, feel free to contact me.</p>
        <h2 class="title-small bit-1">Get in touch</h2>
        <p>
          <span class="bold">Phone</span><br>
          <a href="tel:16135524904" class="link">+1 (613) 552-4904&nbsp;&rarr;</a>
        </p>
        <p>
          <span class="bold">Email</span><br>
          <a href="mailto:hello@creativespectrums.com" class="link">hello@creativespectrums.com&nbsp;&rarr;</a>
        </p>
      </article>
      <?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/includes/footer.php";
        include_once($path);
      ?>
    </div>
    <?php
      $path = $_SERVER['DOCUMENT_ROOT'];
      $path .= "/includes/scripts.php";
      include_once($path);
    ?>
  </body>
</html>