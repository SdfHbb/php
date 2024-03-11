<?php
$site_name = 'Funktionen mit variabler Parameteranzahl';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
?>


<?php

/* 
function UmfangDreieck()
{
  $arr = func_get_args();
  if (count($arr) == 3)
    $umf = array_sum($arr);
  else if (count($arr) == 2)
    $umf = $arr[0] + 2 * $arr[1];
  else if (count($arr) == 1)
    $umf = $arr[0] * 3;
  else if (count($arr) == 0 || count($arr) > 3)
    $umf = "Falsche Parameterzahl";
  return $umf;
}

function UmfangDreieck()
{
  if (func_num_args() == 3)
    $umf = func_get_arg(0) + func_get_arg(1) + func_get_arg(2);
  else if (func_num_args() == 2)
    $umf = func_get_arg(0) + 2 * func_get_arg(1);
  else if (func_num_args() == 1)
    $umf = func_get_arg(0) * 3;
  else if (func_num_args() == 0 || func_num_args() > 3)
    $umf = "Falsche Parameterzahl";
  return $umf;
}
 */
function UmfangDreieck(...$arr)
{
  if (count($arr) == 3)
    $umf = array_sum($arr);
  else if (count($arr) == 2)
    $umf = $arr[0] + 2 * $arr[1];
  else if (count($arr) == 1)
    $umf = $arr[0] * 3;
  else if (count($arr) == 0 || count($arr) > 3)
    $umf = "Falsche Parameterzahl";
  return $umf;
}

echo UmfangDreieck(5) . "<br>";
echo UmfangDreieck(1, 4) . "<br>";
echo UmfangDreieck(1, 2, 3);
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>