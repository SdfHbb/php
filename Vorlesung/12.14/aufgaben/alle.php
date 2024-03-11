<?php
$site_name = 'Aufgabe 1, 2 und 3';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = '
<ol>
<li>SELECT-statement selbst eingeben</li>
<li>Artikelname (oder ein Teil wird eingegeben) und die passenden Daten angezeigt</li>
<li><b>optional:</b> Tabelle kann gewählt werden</li>
</ol>

<b>Alle 3 Aufgaben in einem Formular</b>
';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<form action="#" method="GET">
  <input type="text" name="select" placeholder="SQL- Query eingeben" value="*">
  <input type="text" name="tbl" placeholder="Tablee wählen" value="artikel">
  <input type="text" name="spalte" placeholder="Spalte eingeben" value="Artikelname">
  <input type="text" name="such" placeholder="Suchbegriff eingeben" value="ost">
  <button>suchen</button>
</form>

<table>

  <?php
  include("../../../resources/database/dbConnect.php");

  if (isset($_GET["select"]) && isset($_GET["tbl"]) && isset($_GET["spalte"]) && isset($_GET["such"])) {

    if (isset($_GET["select"]) && isset($_GET["tbl"])) {
      $sql = 'SELECT ' . $_GET["select"];
      $tbl = $_GET["tbl"];
      $sql .= ' FROM ' . $tbl . ' ';
    }

    if (!empty($_GET["spalte"])) {
      $spalte = $_GET["spalte"];
      $sql .= 'WHERE ' . $spalte . ' ';
    }

    if (!empty($_GET["such"])) {
      $suchbegriff = $_GET["such"];
      $sql .= ' LIKE "%' . $suchbegriff . '%"';
    }

    $sql .= ';';

    // var_dump($sql);
  
    $liste = mysqli_query($con, $sql);
    $zeile = mysqli_fetch_assoc($liste);

    echo "<tr>";
    foreach ($zeile as $key => $value) {
      echo "<th>" . $key . "</th>";
    }
    echo "</tr>";

    $liste = mysqli_query($con, $sql);

    while ($zeile = mysqli_fetch_assoc($liste)) {
      echo "<tr>";
      foreach ($zeile as $wert) {
        echo "<td>$wert</td>";
      }
      echo "</tr>";
    }

    echo "Anzahl Datensätze: " . mysqli_num_rows($liste);
  }
  ?>

</table>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>