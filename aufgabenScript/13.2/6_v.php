<!DOCTYPE HTML>
<html>
<?php

?>

<head>
  <title></title>
</head>

<body>
  <h3>Taschenrechner Vorlesung</h3>
  <form action="#" method="get">
    1. Zahl <input type="number" required name="z1"><br><br>

    <input type="radio" name="op" value="+" checked>+
    <input type="radio" name="op" value="-">-
    <input type="radio" name="op" value="*">*
    <input type="radio" name="op" value="/">/<br><br>

    2. Zahl <input type="number" required name="z2">

    <br><br>
    <input type="submit" value="Rechnen">
  </form>
  <?php
  if (isset($_GET["z1"])) {
    if ($_GET["op"] == "+")
      $erg = $_GET["z1"] + $_GET["z2"];
    else if ($_GET["op"] == "-")
      $erg = $_GET["z1"] - $_GET["z2"];
    else if ($_GET["op"] == "*")
      $erg = $_GET["z1"] * $_GET["z2"];
    else {
      if ($_GET["z2"] != 0)
        $erg = $_GET["z1"] / $_GET["z2"];
      else
        $erg = "Infinity";
    }
    echo "<br>Ergebnis ist: $erg";
  }

  ?>
</body>

</html>