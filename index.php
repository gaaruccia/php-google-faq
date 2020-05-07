<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>faq-google</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <?php
    require_once("faq.php")
    ?>
  </head>
  <body>
    <header>
      <div class="titolo">
        <img src="img/google.jpg" alt="">
        <h1>Privacy e termini</h1>
      </div>
      <div class="navbar">
        <div class="menu">
          <ul>
            <li>Introduzione</li>
            <li>Norme sulla Privacy</li>
            <li>Termini di Servizio</li>
            <li>Tecnologie</li>
            <li class="blue">Domande Frequenti</li>
            <div class="linea"></div>
          </ul>
        </div>
        <div class="account">
          <ul>
            <li>Account Google</li>
          </ul>
        </div>
      </div>
    </header>
    <main>
      <?php
      function stampFaq($faq){
        foreach ($faq as $faqUnique) {
          echo "<div class='centratura'>";
          echo "<h2 class='padding-bottom'>";
          echo $faqUnique["ask"];
          echo "</h2>";
          echo "<p>";
          echo $faqUnique["answer"];
          echo "</p>";
          echo "</div>";
        }
      }
      echo stampFaq($faq);
      ?>
    </main>
    <footer>
      <div class="flex">
        <div class="info">
          <ul>
            <li><a class="grey" href="#">Google</a></li>
            <li><a class="grey" href="#">Tutto su Google</a></li>
            <li><a class="grey" href="#">Privacy</a></li>
            <li><a class="grey" href="#">Termini</a></li>
          </ul>
        </div>
        <div class="info">
          <select>
            <option value="ita">Italiano</option>
            <option value="eng">Inglese</option>
            <option value="esp">Spagnolo</option>
            <option value="fr">Francese</option>
          </select>
        </div>
      </div>
    </footer>
  </body>
</html>
