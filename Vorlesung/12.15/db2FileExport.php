<?php
$site_name = 'database to .txt';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Alle Kunden aus Deutschland (nordwind) in kunden.txt speichern';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<table>

  <?php
  include("../../resources/database/dbConnect.php");
  $datei = fopen("../../resources/txtFile/kunden.txt", "w");

  $sql = 'SELECT *
          FROM kunden
          WHERE Land="Deutschland";';

  $liste = mysqli_query($con, $sql);
  $zeile = mysqli_fetch_assoc($liste);

  echo "<tr>";
  foreach ($zeile as $key => $value) {
    echo "<th>$key</th>";
  }
  echo "</tr>";

  $liste = mysqli_query($con, $sql);

  $text = "";
  while ($zeile = mysqli_fetch_assoc($liste)) {
    echo "<tr>";
    foreach ($zeile as $value) {
      $text .= $value . ";";
      echo "<td>$value</td>";
    }
    $text = trim($text, ";") . "\n";
    echo "</tr>";
  }
  fwrite($datei, $text);
  fclose($datei);
  ?>

</table>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>