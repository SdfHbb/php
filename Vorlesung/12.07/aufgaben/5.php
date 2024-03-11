<?php
$site_name = 'Aufgabe 5';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Erstellen Sie eine Funktion "Caesar(text, schluessel)", die einen übergeben Text nach der cäsarischen Verschlüsselung codiert zurückgibt. <br>
<b>Beispiel:</b> caesar("affe",3) liefert "diih", d.h. zum Ascii-Wert von a werden 3 addiert und danndas Zeichen zurückgegeben, das gleiche jeweils für f und e... <br>
Beachten Sie aber den "Sprung" nach vorn bei der Verschlüsselung von "z" etc.';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php
// Variante 1
function caesar($text, $schluessel)
{
  $verschluesselterText = "";
  for ($i = 0; $i < strlen($text); $i++) {
    $zeichen = $text[$i];

    if (!is_numeric($zeichen)) {
      // Überprüfen, ob das Zeichen ein Buchstabe ist
      $asciiOffset = ctype_upper($zeichen) ? ord('A') : ord('a');
      $verschluesselterText .= chr((ord($zeichen) - $asciiOffset + $schluessel) % 26 + $asciiOffset);
    } else {
      // Falls kein Buchstabe, das Zeichen unverändert hinzufügen
      $verschluesselterText .= $zeichen;
    }
  }
  return $verschluesselterText;
}

// Variante 2
function caesar2($text, $key)
{
  $text = str_split($text);
  $crypt = "";
  foreach ($text as $i => $data) {
    $asc = ord($data);
    if ($asc >= 65 and $asc <= 90) {
      $crypt .= chr(((($asc - 65) + $key) % 26) + 65);
    } else if ($asc >= 97 and $asc <= 122) {
      $crypt .= chr(((($asc - 97) + $key) % 26) + 97);
    } else {
      $crypt .= chr($asc);
    }
  }
  return $crypt;
}

// Variante 3
function caesar3($text, $key)
{
  $teile = str_split(strtolower($text));
  $neu = "";

  foreach ($teile as $zeichen) {
    $wert = ord($zeichen) + $key;
    if ($wert > 122)
      $wert -= 26;
    $neu .= chr($wert);
  }
  return $neu;
}

echo caesar("affe", 3) . "<br>";
echo caesar("xyz", 3) . "<br><hr>";

echo caesar2("affe", 3) . "<br>";
echo caesar2("xyz", 3) . "<br><hr>";

echo caesar3("affe", 3) . "<br>";
echo caesar3("xyz", 3) . "<br><hr>";
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>