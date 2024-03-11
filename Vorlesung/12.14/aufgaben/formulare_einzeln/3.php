<?php
$site_name = 'Aufgabe 3';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = '
<ol>
<li>SELECT-statement selbst eingeben</li>
<li>Artikelname (oder ein Teil wird eingegeben) und die passenden Daten angezeigt</li>
<b><li><b>optional:</b> Tabelle kann gewählt werden</li></b>
</ol>';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<form action="#" method="GET">
  <input type="text" name="abfrage" value="kunden">
  <button>senden</button>
</form>
<table>

  <?php
  include("../../../../resources/database/dbConnect.php");

  if (isset($_GET["abfrage"]) && !empty($_GET["abfrage"])) {

    $sql = 'SELECT * FROM ' . $_GET["abfrage"] . ';';
    $liste = mysqli_query($con, $sql);
    $zeile = mysqli_fetch_assoc($liste);

    echo "<tr>";
    foreach ($zeile as $i => $wert) {
      echo "<th>$i</th>";
    }
    echo "</tr>";

    $liste = mysqli_query($con, $sql);

    while ($zeile = mysqli_fetch_assoc($liste)) {

      // var_dump($zeile);
      echo "<tr>";
      foreach ($zeile as $wert) {
        echo "<td> $wert </td>";
      }
      echo "</tr>";
    }
  }
  ?>

  <?php
  include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
  ?>