<?php
$site_name = 'Aufgabe 4';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Die PHP-Funktion "is_numeric" kann immer nur eine Variable auf einen gültigen Inhalt prüfen. Erstellen Sie eine Funktion "arr_numeric()", die prüft, ob in einem übergebenen Array alle Werte numerisch sind. <br>
Im Erfolgsfall gibt die Funktion "true" zurück, sonst "false" <br>
<b>Hinweis:</b>
true/false-Rückgabewerte können (im Hauptprogramm) nur indirekt über eine IF-Bedingung
ausgeben werden.';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php
function array_numeric($arr)
{
  $num = 0;
  foreach ($arr as $value) {
    if (is_numeric($value))
      $num++;
  }
  if ($num == count($arr))
    return var_dump(true);
  else
    return var_dump(false);
}

echo array_numeric(array(8, 9, 3, 5, 14, 965)) . "<br>";
echo array_numeric(array("nix"));
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>