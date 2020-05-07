<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GOOGLE FAQ</title>
    <link rel="stylesheet" href="style.css">
    <?php
      require_once 'db.php';
      require_once 'function.php';
     ?>
  </head>
  <body>
    <header>
      <div class="mainNavbar">
        <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" alt="logo">
        <h1>Privacy e Termini</h1>
      </div>

      <div class="menu">
        <ul>
          <li><a href="#">Introduzione</a></li>
          <li><a href="#">Norme sulla privacy</a></li>
          <li><a href="#">Termini di servizio</a></li>
          <li><a href="#">Tecnologie</a></li>
          <li><a id="onThis" href="#">Domande frequenti</a></li>
        </ul>
        <a id="signUpGoogle" href="#">Account Google</a>
      </div>
    </header>

    <main>

      <div class="counter">
        <p>Numero Faq: <?php
                          faqCounter($faq);
                        ?>
        </p>
      </div>

      <div class="container-faq">
        <?php
          printFaq($faq);
        ?>
      </div>
    </main>

  </body>
</html>
