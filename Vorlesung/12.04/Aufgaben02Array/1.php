<?php
$site_name = 'Aufgabe 1';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Füllen Sie ein Array mit 100 Zufallszahlen zwischen 10 und 1579 und geben Sie diese sortiert wieder aus in einer HTML-Tabelle, dabei soll jede zweite Zeile einen farbigen Hintergrund haben.';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<table>

  <?php
  for ($i = 0; $i < 100; $i++) {
    $array01[$i] = rand(10, 1579);
  }

  sort($array01);

  for ($i = 0; $i < 100; $i++) {
    echo "<tr>" . "<td>" . $array01[$i] . "</td></tr> ";
  }
  ?>

</table>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>