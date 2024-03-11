<?php
$site_name = 'Aufgabe 5';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'User können zur "Monatsnamenausgabe" die Sprache wählen und es wird eine entsprechende Datei benutzt. Erstellen Sie dazu Listen mit den Monatsnamen in jeweils einer anderen Sprache in einer Datei, also z.b. Dänisch.txt , Tuerkisch.txt, Franzoesisch.txt, Ungarisch.txt, etc. <br><br>
Alternativ kann man auch einen geschickten Datensatz basteln und wegschreiben bzw. auslesen <br>
<b>Beispiel:</b>
Januar#january#janvier#jannar#eanáir
Die jeweiligen Sprachen stehen dann immer in der gleichen Spalte...';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<form action="#" method="get">
  <input type="radio" name="lang" value="german" checked> Deutsch &nbsp;
  <input type="radio" name="lang" value="english"> English &nbsp;
  <input type="radio" name="lang" value="chinese"> Chinese
  <button>select</button>
</form>

<?php
if (isset($_GET["lang"])) {

  echo '<pre>', var_dump($_GET["lang"]), '</pre>';

  $datei = file("../../../resources/txtFile/monateMultiLang.txt");
  $neu = array();

  $key = 0;
  foreach ($datei as $value) {
    $line = explode(";", $value);
    $key++;
    $neu["german"][$key] = $line[0];
    $neu["english"][$key] = $line[1];
    $neu["chinese"][$key] = $line[2];
    echo $neu[$_GET["lang"]][$key] . "<br>";
  }
}
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>