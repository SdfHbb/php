<?php
$site_name = 'Aufgabe 6';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Erstellen Sie eine Funktion "checkit()". Diese soll folgendes leisten: <br>
<ul>
<li>Wird eine Zahl übergeben, ist aus dieser Zahl die Wurzel zu ziehen und zurückzugeben.</li>
<li>Wird ein Text übergeben, so ist die Anzahl Zeichen in diesem Text zu zählen und zurück-
zugeben.</li>
<li>Werden 2 oder mehr Zahlen übergeben, ist der Durchschnitt zurück zu geben.</li>
<li>Wird nichts übergeben, ist der Wochentag (deutsch ausgeschrieben) von Weihnachten
zurückzugeben <br> Beispiel: "Der 24.12. fällt dieses Jahr auf einen Mittwoch."</li>
</ul>';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>


<?php
function checkIt(...$arr)
{
  if (count($arr) == 1) {
    if (is_numeric($arr[0])) {
      echo "Die Wurzel aus $arr[0] ist: ";
      $erg = sqrt($arr[0]);
    } else if (is_string($arr[0])) {
      echo "<br>Die Zeichenl&aumlnge von <q><b>$arr[0]</q></b> ist: ";
      $erg = strlen($arr[0]);
    }
  } else if (count($arr) >= 2 && is_numeric($arr[0])) {
    echo "<br>Der Durchschnitt von ";

    foreach ($arr as $key => $value) {
      echo $key < count($arr) - 1 ? $value . " + " : $value . " = ";
    }
    $durch = array_sum($arr) / count($arr);
    $erg = $durch;
  } else if (empty($arr)) {
    $tage = array(
      "Mon" => "Montag",
      "Tue" => "Dienstag",
      "Wed" => "Mittwoch",
      "Thu" => "Donnerstag",
      "Fri" => "Freitag",
      "Sat" => "Samstag",
      "Sun" => "Sonntag"
    );
    $erg = "<br>Der " . date("d.m", mktime(0, 0, 0, 12, 24, 2003)) .
      " f&aumlllt dieses Jahr auf einen "
      . $tage[date("D", mktime(0, 0, 0, 12, 24, 2003))] . ".";
  }
  echo $erg;
}

echo checkIt(9);
echo checkIt("lorem ipsum dolor sit amet");
echo checkIt(1, 2, 3, 4);
echo checkIt();
?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>