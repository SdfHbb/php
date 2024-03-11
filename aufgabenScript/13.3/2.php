<?php
$site_name = 'Celsius - Fahrenheit Rechner';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
?>


<?php
$f = 0;
for ($i = -50; $i <= 70; $i += 5) {

  echo "<p>";
  echo "$i Celsius = ";
  $f = $i * 1.8 + 32;
  echo "$f Fahrenheit";
  echo "</p>";
}
?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>