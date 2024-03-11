<?php
$site_name = 'Aufgabe 3';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Geben Sie das Wochentagsarray aus unserer Datumaufgabe nach werten rückwärts sortiert aus als nummerierte Liste in HTML, dabei sollen alle Texte in GROSSBUCHSTABEN rückwärts ausgeben werden. (Tipp: Stringfunktionen in PHP)';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<ol>

  <?php
  $tage = array(
    "Mon" => "Montag",
    "Tue" => "Dienstag",
    "Wed" => "Mittwoch",
    "Thu" => "Donnerstag",
    "Fri" => "Freitag",
    "Sat" => "Samstag",
    "Sun" => "Sonntag"
  );

  // Variante 1
  foreach (array_reverse($tage) as $value) {
    ;
    echo "<li>" . strtoupper(strrev($value)) . "</li>";
  }

  echo "</ol><hr><ol>";

  // Variante 2
  arsort($tage);

  foreach ($tage as $schleifstein) {
    $schleifstein = strtoupper($schleifstein);
    $schleifstein = strrev($schleifstein);
    echo "<li>$schleifstein</li>";
  }
  ?>

</ol>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>