<?php
$site_name = 'Lottoziehung';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
?>


<?php

$ziehung = range(1, 49);
print_r($ziehung);
echo "<br><br><hr>";

shuffle($ziehung);
print_r($ziehung);
echo "<br><br><hr>";

$ziehung = array_slice($ziehung, 0, 6);

print_r($ziehung);
echo "<br><br><hr>";

sort($ziehung);

print_r($ziehung);
echo "<br><br><hr>";

echo "Die Ziehung zum Sonntag:<br>";

for ($i = 0; $i < count($ziehung); $i++) {
  echo "$ziehung[$i] ";
}
?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>