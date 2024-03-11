<?php
$site_name = 'Aufgabe 9';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Eine Funktion "umrechnen()" soll zu einer übergebenen Zahl die Binär, Oktal und Hexdezimal-Werte zurückgeben (als Text/String) <br>
Beispiel:
Aufruf: umrechnen(5)
Rückgabe: 5 ist binär';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<form action="#" method="get">
  <input type="number" name="zahl1" placeholder="Bitte Zahl1 eingeben" value="10">
  <button onclick="">absenden</button>
</form>

<?php
if (isset($_GET["zahl1"])) {
  function umrechnen($x)
  {
    $bin = decbin($x);
    $hex = dechex($x);
    $okt = decoct($x);
    return "$x ist<br>bin&aumlr $bin<br>oktal $okt <br>hexadezimal " . strtoupper($hex);
  }

  echo umrechnen($_GET["zahl1"]);
}

?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>