<?php
$site_name = 'Array gerade Zahlen kopieren';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
?>


<?php
for ($i = 0; $i < 50; $i++) {
  $array01[$i] = rand(0, 100);
  if ($i % 10 == 0) {
    echo "<br>";
  }
  echo $array01[$i] . " ";
}
echo "<br><hr>";

$geradeZahlenArray = array_filter($array01, function ($zahl) {
  return $zahl % 2 === 0;
});

$i = 0;
foreach ($geradeZahlenArray as $value) {
  if ($i % 10 == 0) {
    echo "<p>";
  }
  $i++;
  echo $value . " ";
}
?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>