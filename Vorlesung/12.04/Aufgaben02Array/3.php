<?php
$site_name = 'Aufgabe 3';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Ein assoziatives Array enthält Autokennzeichen und die dazugehörigen Zulassungsbezirke. <br>Nach Eingabe des Autokennzeichens wird der komplette Name des Zulassungsbezirkes ausgegeben oder eine Fehlermeldung, dass der Wert nicht gefunden wurde. br Erstellen Sie den HTML-Code für die Seite mit dem Formular und das PHP-Programm. <br>
Beispiel:
<ul>
<li>HH für "Hansestadt Hamburg"</li>
<li>OWL für "Ostwestfalen-Lippe"</li>
</ul>
';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<form action="#" method="get">
  <input type="text" name="kenn" placeholder="Kennzeichen eingeben:">
  <button>Ländersuche</button>
</form>

<?php
if (isset($_GET["kenn"])) {

  $kennzeichen["HH"] = "Hansestadt Hamburg";
  $kennzeichen["SE"] = "Kreis Segeberg";
  $kennzeichen["OWL"] = "Ostwestfalen-Lippe";
  $kennzeichen["M"] = "München";
  $kennzeichen["DD"] = "Domstadt Dresden";

  $gefunden = " ";
  foreach ($kennzeichen as $key => $value) {
    if ($_GET["kenn"] == $key) {
      $gefunden = $key;
    }
  }

  if ($gefunden == " ") {
    echo " Das Kennzeichen <b> " . $_GET["kenn"] . " </b>ist nicht im Array vorhanden!";
  } else {
    echo " Das Kennzeichen <b> " . $_GET["kenn"] . " </b>ist im Array vorhanden: " . $kennzeichen[$gefunden];
  }
}
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>