<?php
$site_name = 'Assoziatives Array';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'sort() indexiert neu!';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionDanger.php');
$admonition = 'asort() nutzen!';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitioninfo.php');
?>

<p class="left">

  <?php
  $datum["de"] = "Deutschland";
  $datum["it"] = "Italien";
  $datum["no"] = "Norwegen";
  $datum["nl"] = "Niederlande";
  $datum["pl"] = "Polen";
  $datum["ch"] = "Schweiz";

  $arrUser["hans"] = "ganz-geheim";
  $arrUser["hilde"] = "NochGeheimeR";

  echo "Vorher:<br>";
  foreach ($datum as $key => $value) {
    echo "Index:$key, Wert $value<br>";
  }

  sort($datum);

  echo "<br>Nachher:<br>";
  foreach ($datum as $key => $value) {
    echo "Index:$key, Wert $value<br>";
  }
  ?>
</p>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>