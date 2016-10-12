<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <title><?= $titre ?></title>
</head>


  <body>

    <header>
      <div id="logo">
        <a href="index.php?page=accueil"><img id="logo" src="Autres/LogoISEPBands.jpg" width="460" height="300" ></a>
        <h1> <?php echo $slogan  ?> </h1>
      </div>
    </header>

    <div id="wrap">
      <div id="main" class="clearfix">
        <?= $contenu ?>
      </div>
    </div>

    <footer>
      <p>
        ISEPBands &copy; 2016 - Tous droits r&eacute;serv&eacute;s
      </p>
    </footer>

  </body>

</html>
