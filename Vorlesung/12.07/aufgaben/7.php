<?php
$site_name = 'Aufgabe 7';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Erstellen Sie eine Funktion "super()". Diese soll folgendes leisten:
<ul>
<li>Wird nichts übergeben, ist das Tagesdatum in "deutscher Form" mit ausgeschriebenem
Monat zurückzugeben.</li>
<li>Wird eine Zahl übergeben, ist aus dieser Zahl die Wurzel zu ziehen und zurückzugeben.</li>
<li>Werden 2 Zahlen übergeben, ist die erste Zahl durch die zweite zu teilen und das Ergebnis zurückzugeben.</li>
<li>Werden mehr als 2 bis 5 Zahlen übergeben, ist das Minimum zurück zu geben.</li>
</ul>';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php
function super(...$arr)
{
  if (empty($arr)) {
    $monate = explode(" ", "nix Januar Februar M&aumlrz April Mai Juni Juli August September Oktober November Dezember");
    $tage = array(
      "Mon" => "Montag",
      "Tue" => "Dienstag",
      "Wed" => "Mittwoch",
      "Thu" => "Donnerstag",
      "Fri" => "Freitag",
      "Sat" => "Samstag",
      "Sun" => "Sonntag"
    );

    $tag = $tage[date("D")];
    $monat = $monate[date("m")];

    $erg = $tag . ", der " . date("j") . " " . $monat . " " . date("Y") . "<br>";
  } else if (count($arr) == 1) {
    $erg = "Die Wurzel von " . $arr[0] . " = " . sqrt($arr[0]) . "<br>";
  } else if (count($arr) == 2) {
    $erg = "$arr[0] / $arr[1] = " . $arr[0] - $arr[1] . "<br>";
  } else if (count($arr) > 2 || count($arr) <= 5) {
    echo "Das Minimum von (";
    foreach ($arr as $key => $value) {
      echo $key < count($arr) - 1 ? "$value, " : "$value";
    }
    $erg = ") ist " . min($arr);
  }
  echo $erg;
}

echo super();
echo super(9);
echo super(9, 3);
echo super(3, 6, 1, 9, 12);
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>