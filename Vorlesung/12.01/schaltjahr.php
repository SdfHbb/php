<!DOCTYPE HTML>
<html>

<head>
  <title></title>
</head>

<body>
  <form action="#" method="get">
    Gesuchtes Jahr<br>
    <input type="number" required name="jahr"> <br><br>
    <input type="submit" value="Check it!">
  </form>

  <?php
  if (isset($_GET["jahr"])) {
    $wert = mktime(0, 0, 0, 12, 32, $_GET["jahr"]);

    // echo date("d.m.Y", $wert);
    echo "<br>Versatz zur GMT: " . date("Z", $wert) / 3600 . " Stunden.";

    if (date("L", $wert) == 1)
      echo "<br>wir haben ein Schaltjahr.";
    else
      echo "<br>wir haben kein Schaltjahr.";
  }
  ?>
</body>

</html>