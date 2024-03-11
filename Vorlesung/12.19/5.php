<?php
$site_name = 'Testklausur Aufgabe 5';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Erstellen Sie NUR eine Funktion "km( )" die Schritte in Kilometer umrechnet. Die Anzahl der Schritte ist der erste Übergabeparameter, optional kann ein zweiter Wert mit der Schrittlänge (in cm) an die Funktion übergeben werden. <br>
Wird kein zweiter Wert übergeben, ist mit einer Default-Schrittlänge von 75 cm zu rechnen!
';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php
// Variante 1
function km(...$a)
{
  if (count($a) == 1)
    return ($a[0] * 75 / 100000) . " km";
  else if (count($a) == 2)
    return ($a[0] * $a[1] / 100000) . " km";
}

// Variante 2
function km2()
{
  if (func_num_args() == 1)
    return (func_get_arg(0) * 75 / 100000) . " km";
  else if (func_num_args() == 2)
    return (func_get_arg(0) * func_get_arg(1) / 100000) . " km";
}

// Variante 3
function km3($schritte, $weite = 75)
{
  return ($schritte * $weite / 100000) . " km";
}

echo km(10000);
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>