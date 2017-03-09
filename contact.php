<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Creative Spectrums &ndash; Contact</title>

  <!--Stylesheets-->
  <?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/includes/links.php"; include_once($path); ?>
</head>

<body>

  <div class="frame animated fadeIn">

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
        <a href="tel:16135524904" class="link">+1 (613) 552-4904&nbsp;&rarr;</a>
      </p>

      <p>
        <span class="bold">Email</span><br>
        <a href="mailto:hello@creativespectrums.com" class="link">hello@creativespectrums.com&nbsp;&rarr;</a>
      </p>

      <form name="form" method="post" action="/form.php" class="mg-t">

        <h2 class="title-small">Get a quote</h2>
        
        <div class="form-group bit-1">
          <label for="name">First Name</label>
          <input type="text" id="firstname" name="firstname" placeholder="first name" required>
        </div>

        <div class="form-group bit-1">
          <label for="name">Last Name</label>
          <input type="text" id="lastname" name="lastname" placeholder="last name" required>
        </div>

        <div class="form-group bit-1">
          <label for="name">Email</label>
          <input type="email" id="email" name="email" placeholder="email" required>
        </div>

        <div class="form-group bit-1">
          <label for="name">Site URL</label>
          <input type="text" id="siteurl" name="siteurl" placeholder="site url (optional)">
        </div>
        
        <div class="form-group bit-1">
          <label for="message">Message</label>
          <textarea id="message" name="message" placeholder="message" rows="10" required></textarea>
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