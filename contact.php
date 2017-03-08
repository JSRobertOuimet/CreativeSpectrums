<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Creative Spectrums &ndash; Contact</title>

  <!--Main stylesheet-->
  <link rel="stylesheet" href="/css/main.css">
</head>

<body>

  <div class="frame">

    <!--Main header-->
    <header class="bit-1">

      <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/navbar.php"; include_once($path); ?>
      
    </header>

    <!--Contact-->
    <article>
    
      <header class="bit-1">
        <h1 class="title-big">Contact</h1>
      </header>

      <h2 class="title-small bit-1">Get in touch</h2>

      <p>
        <span class="bold">Phone</span><br>
        <a href="tel:16135524904" class="link">+1 (613) 552-4904&nbsp;&nearr;</a>
      </p>

      <p>
        <span class="bold">Email</span><br>
        <a href="mailto:hello@creativespectrums.com" class="link">hello@creativespectrums.com&nbsp;&nearr;</a>
      </p>

      <form name="form" action="/form.php" method="post" class="mg-t">

        <h2 class="title-small">Get a quote</h2>
        
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

        <p class="bit-1">
          <span type="submit" class="btn" onclick="form.submit()">submit&nbsp;&nbsp;<span class="icon submit">&uarr;</span><span>
        </p>
        
      </form>

    </article>

    <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/footer.php"; include_once($path); ?>
        
  </div>

  <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/scripts.php"; include_once($path); ?>

</body>

</html>