<?php
$site_name = 'Aufgabe 2';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Geben Sie das Wochentagsarray aus unserer Datumaufgabe nach Indexen sortiert aus als nummerierte Liste in HTML.';
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

  ksort($tage);

  foreach ($tage as $key => $value) {
    echo "<li>[" . $key . "] " . $value . "</li>";
  }

  ?>

</ol>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>