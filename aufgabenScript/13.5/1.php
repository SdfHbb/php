<?php
$site_name = 'Arraywerte verdoppeln';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
?>


<?php
$arr1 = array(13, -4, 82, 17);
print_r($arr1);
echo "<br>";
for ($i = 0; $i < count($arr1); $i++) {
  $arr2[$i] = $arr1[$i] * 2;
}
print_r($arr2);
?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>