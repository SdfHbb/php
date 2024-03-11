<?php
$site_name = 'Aufgabe 4';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Geben Sie die Datei "kfz.csv" in einer zweispaltigen HTML-Tabelle (Spalten:
Kennzeichen, Zulassungsbezirk) aus.';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<table>
  <tr>
    <th>Kennzeichen</th>
    <th>Zulassungsbezirk</th>
  </tr>

  <?php
  $datei = file("../../../resources/txtFile/kfz.csv");

  foreach ($datei as $value) {
    $teile = explode(" ;", $value);
    echo "<tr><td>" . $teile[0] . "</td><td>" . $teile[1] . "</td></tr>";
  }
  ?>

</table>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>
<?php



