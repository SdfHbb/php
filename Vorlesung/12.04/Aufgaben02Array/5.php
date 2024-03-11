<?php
$site_name = 'Aufgabe 5';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Der User gibt (in einem HTML-Formular) einen Satz ein.
Ihr Programm zerlegt den Satz in einzelne Worte und gibt den Satz wortweise wieder aus, je
Zeile ein Wort.';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<form action="#" method="get">
  <input type="text" name="satz" placeholder="Satz eingeben:">
  <button>absenden</button>
</form>

<?php
if (isset($_GET["satz"])) {
  foreach (explode(' ', $_GET["satz"]) as $word) {
    echo $word . "<br>";
  }
}
?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>