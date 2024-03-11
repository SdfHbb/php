<?php
$site_name = 'Aufgabe 2';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Stellen Sie das Gästebuch chronologisch rückwärts (aktuelle Einträge vorn) auf
der Webseite in optisch ansprechender Form dar.';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<table>

  <?php
  $datei = file("../../../resources/txtFile/gaestebuch.txt");
  $datei = array_reverse($datei);
  // print_r($arr);
  
  foreach ($datei as $key) {
    $teile = explode("#", $key);
    echo "<tr>";
    echo "<td>$teile[0]</td>";
    echo "<td>$teile[1]</td>";
    echo "<td>$teile[2]</td>";
    echo "<td>$teile[3]</td>";
    echo "<td>$teile[4]</td>";
    echo "<td>$teile[5]</td>";
    echo "</tr>";
  }
  ?>

</table>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>