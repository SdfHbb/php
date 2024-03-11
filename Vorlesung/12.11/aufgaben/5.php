<?php
$site_name = 'Aufgabe 5';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Geben Sie die KFZ-Liste nach Zulassungsbezirken sortiert aus.';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<table>
  <tr>
    <th>Kennzeichen</th>
    <th>Zulassungsbezirk</th>
  </tr>

  <?php
  // Variante 1
  // $datei = file("../../../resources/txtFile/kfz.csv");
  
  // foreach ($datei as $key => $value) {
  //   $line = explode(" ;", $value);
  //   $neu[$line[0]] = $line[1];
  // }
  
  // Variante 2
  $datei = fopen("../../../resources/txtFile/kfz.csv", "r");
  $zeile = fgetcsv($datei, 2048, ";");    // Vor-lesen
  
  while (!feof($datei)) {                 // Leseschleife bis EOF (EndOfFile)
    $neu[trim($zeile[0])] = $zeile[1];
    $zeile = fgetcsv($datei, 2048, ";");  // weiterlesen
  }

  asort($neu);

  foreach ($neu as $key => $value) {
    echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
  }

  ?>

</table>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>