<?php
$site_name = 'Aufgabe 6';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Der User gibt (in einem HTML-Formular) einen Satz ein.
Ihr Programm zerlegt den Satz in einzelne Worte und gibt den Satz wortweise wieder aus, je
Zeile ein Wort. <br>
Der Satz der vorherigen Aufgabe wird wortweise rückwärts ausgegeben,
Beispiel: "das ist ein haus" wird "haus ein ist das"';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<form action="#" method="get">
  <input type="text" name="satz" placeholder="Satz eingeben:">
  <button>absenden</button>
</form>

<?php
if (isset($_GET["satz"])) {
  foreach (array_reverse(explode(' ', $_GET["satz"])) as $word) {
    echo $word . "<br>";
  }
}
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>