<?php
// c²=a² + b²
function pyta($a, $b)
{
  return sqrt(pow($a, 2) + $b * $b);
}

function rechteck($a, $b = 0)
{
  if ($b == 0)
    $b = $a;
  return $a * $b;
}

function quadrat($a)
{
  if (is_numeric($a))
    $b = $a * $a;
  else
    $b = "falscher Datentyp";
  return $b;
}
?>