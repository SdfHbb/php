<?php
$site_name = '1x1 bis 10x10';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
?>


<?php
$b = 1;
echo "<table><tr>";
for ($a = 1; $b <= 10; $a++) {
  $c = $b * $a;
  echo "<td>$a x $b = $c</td>";
  if ($a == 10) {
    $a = 0;
    $b++;
    echo "</tr><tr>";
  }
}
echo "</tr></table>";
?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>