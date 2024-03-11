<?php
$site_name = 'Aufgabe 2';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Geben Sie Plz, Ort und Bundesland der neuen Städteliste in einer übersichtlichen HTML-Tabelle aus.';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<table>

  <?php
  $datei = file("../../../resources/txtFile/stadtNeu.txt");

  foreach ($datei as $key => $value) {
    $line = explode(";", $value);
    $neu[$key] = array($line[0], $line[1], $line[2], $line[3], $line[4], $line[5]);
  }

  foreach ($neu as $key => $value) {
    echo "<tr><td>" . $neu[$key][0] . "</td>";
    echo "<td>" . $neu[$key][1] . "</td>";
    echo "<td>" . $neu[$key][2] . "</td>";
    echo "<td>" . $neu[$key][3] . "</td>";
    echo "<td>" . $neu[$key][4] . "</td>";
    echo "<td>" . $neu[$key][5] . "</td></tr>";
  }
  ?>

</table>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>