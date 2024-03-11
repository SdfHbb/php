<?php
$site_name = 'Aufgabe 1';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Es fehlt in PHP leider eine Funktion "array_avg()", die aus mehreren übergebenen Werten denDurchschnitt berechnet. Erstellen Sie bitte die Funktion.';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>


<?php
// Version 1
function array_avg(...$values)
{
  $count = count($values);
  if ($count === 0) {
    return 0;
  }
  $sum = array_sum($values);
  return $sum / $count;
}

// Version 2
function array_avg_2(...$values)
{
  if (count($values) == 0)
    return 0;
  else
    return array_sum($values) / count($values);
}

echo array_avg(3, 4, 77, 12) . '<br>';
echo array_avg_2(3, 4, 77, 12) . '<br>';
?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>