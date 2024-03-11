<?php
$site_name = 'Aufgab 1';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Geben Sie das Monatsarray aus unserer Datumaufgabe sortiert nach Werten aus als HTML-"Bullet-List"';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<ul>

  <?php
  $monate = explode(" ", "nix Januar Februar März April Mai Juni Juli August September Oktober November Dezember");

  sort($monate);

  foreach ($monate as $key => $value) {
    echo "<li>[" . $key . "] " . $value . "</li>";
  }
  ?>

</ul>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>