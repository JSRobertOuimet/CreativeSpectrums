<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<meta http-equiv="refresh" content="3">-->

  <title>Creative Spectrums &ndash; Contact</title>

  <!--Main stylesheet-->
  <link rel="stylesheet" href="../css/main.css">
</head>

<body>

  <div class="frame">

    <!--Main header-->
    <header class="bit-1">

      <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/common/nav.php"; include_once($path); ?>

      <div class="jumbotron"></div>
    </header>

    <!--Contact-->
    <article>
      <header class="bit-1">
        <h1 class="title-big">Contact<span class="horizontal-bar">&horbar;</span></h1>
        <h2 class="title-small">Want a quote?</h2>
      </header>

      <div class="bit-2">
      
        <form action="contact.php">
        
        <div class="form-group bit-1">
          <label for="name">First Name</label>
          <input type="text" id="first-name" name="first-name" placeholder="first name">
        </div>

        <div class="form-group bit-1">
          <label for="name">Last Name</label>
          <input type="text" id="last-name" name="last-name" placeholder="last name">
        </div>

        <div class="form-group bit-1">
          <label for="name">Email</label>
          <input type="email" id="email" name="email" placeholder="email">
        </div>

        <div class="form-group bit-1">
          <label for="name">Site URL</label>
          <input type="text" id="site-url" name="site-url" placeholder="site url (optional)">
        </div>
        
        <div class="form-group bit-1">
          <label for="message">Message</label>
          <textarea id="message" name="message" placeholder="message" rows="10"></textarea>
        </div>

        <div class="form-group bit-1">
          <input type="submit" value="submit">
        </div>
        
      </form>

      </div>

    </article>

    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/common/footer.php"; include_once($path); ?>
        
  </div>

  <!--<script src="js/slideshow.js"></script>-->
  <script src="js/overlay-menu.js"></script>

</body>

</html>