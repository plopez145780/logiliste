<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <title>
    <?= $titre ?>
  </title>
  <link rel="stylesheet" href="css/style.css" />
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  </head>

<body>
  <div id="container">
    <header>
      <a href="index.php"><h1 id="titreBlog">Mon Blog</h1></a>
      <p>Je vous souhaite la bienvenue sur ce modeste blog.</p>
    </header>
    <div id="contenu">
      <?= $contenu ?>
    </div>
    <!-- #contenu -->
    <footer id="footerPrincipal">
      2016-<?= date("Y") ?> CopyRight Pierre Lopez
    </footer>
  </div>
  <!-- #global -->

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>