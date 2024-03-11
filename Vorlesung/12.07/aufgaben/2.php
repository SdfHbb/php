<?php
$site_name = 'Aufgabe 2';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Erstellen Sie eine Funktion "datum()", die Ihnen eine zufällige Datumswerte in der Form tt.mm.jjjj für Tests generiert. <br> 
<b>Erweiterung:</b><br> Alle Datumswerte müssen gültig sein, es darf also beispielsweise keinen 31.04, 31.11.2023 oder einen 30.02.1999 geben.';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>


<?php
// Variante 1
function datum()
{
  $datum = mktime(0, 0, 0, rand(1, 12), rand(1, 31), rand(1900, 2100));
  return date("d.m.Y", $datum);
}
// Variante 2
function datum2()
{
  do {
    $tag = rand(1, 31);
    $monat = rand(1, 12);
    $jahr = rand(1800, 2200);
    $datum = date('d.m.Y', mktime(0, 0, 0, $monat, $tag, $jahr));
  } while (!checkdate($monat, $tag, $jahr));
  echo $datum;

}
echo datum() . "<br>";
echo datum2();
?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>