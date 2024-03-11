<?php
$site_name = 'Quadratzahlen 1 - 10';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
?>


<?php
for ($i = 1; $i <= 10; $i++) {
  echo "$i * $i = ";
  echo "" . pow($i, 2) . "<br>";
}
?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>