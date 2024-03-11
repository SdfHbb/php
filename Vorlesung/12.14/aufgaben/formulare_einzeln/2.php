<?php
$site_name = 'Aufgabe 2';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = '
<ol>
<li>SELECT-statement selbst eingeben</li>
<b><li>Artikelname (oder ein Teil wird eingegeben) und die passenden Daten angezeigt</li></b>
<li><b>optional:</b> Tabelle kann gewählt werden</li>
</ol>';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<form action="#" method="GET">
  <input type="text" name="abfrage" value="bla">
  <button>senden</button>
</form>
<table border="1">

  <?php

  include("../../../../resources/database/dbConnect.php");

  if (isset($_GET["abfrage"])) {

    $sql = 'SELECT * FROM artikel WHERE Artikelname LIKE "%' . $_GET["abfrage"] . '%";';
    $liste = mysqli_query($con, $sql);
    $zeile = mysqli_fetch_assoc($liste);

    echo "<tr>";
    foreach ($zeile as $key => $value) {
      echo "<th>$key</th>";
    }
    echo "</tr>";

    $liste = mysqli_query($con, $sql);

    while ($zeile = mysqli_fetch_assoc($liste)) {

      // var_dump($zeile);
      echo "<tr>";
      foreach ($zeile as $value) {
        echo "<td> $value </td>";
      }
      echo "</tr>";
    }
  }
  ?>

  <?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
  ?>