<?php
$site_name = 'Show Table';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'SQL-Datenbank nordwind: Datensätze auslesen und anzeigen';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<table>

  <?php
  include("../../resources/database/dbConnect.php");

  $sql = "SELECT * FROM lieferanten;";
  $liste = mysqli_query($con, $sql);

  // COLUMN Header
  $zeile = mysqli_fetch_assoc($liste);
  echo "<tr>";
  foreach ($zeile as $key => $value) {
    echo "<th>$key</th>";
  }
  echo "</tr>";

  // Neues Einlesen aller Daten der Abfrage
  $liste = mysqli_query($con, $sql);

  while ($zeile = mysqli_fetch_assoc($liste)) {
    echo "<tr>";
    foreach ($zeile as $value) {
      echo "<td>$value</td>";
    }
    echo "</tr>";
  }
  ?>

</table>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>