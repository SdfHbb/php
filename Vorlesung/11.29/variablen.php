<?php
$site_name = 'Variablen';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Je nach Zuweisung wird der Datentyp überschrieben.<br> <a href="https://www.php.net/manual/de/language.types.intro.php">Dokumentation</a>';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionInfo.php');
?>


<?php
$user = "Hans";
var_dump($user);
echo "<hr>";

$user = false;
var_dump($user);
echo "<hr>";

$user = 5;
var_dump($user);
echo "<hr>";

$user *= $user;
var_dump($user);
echo "<hr>";

$user = "Peter";
for ($i = 0; $i < 3; $i++) {
  echo "Loop $user! <hr>";
}

$user = "setting css";
for ($i = 3; $i < 5; $i++) {
  echo "<div style=font-size:" . pow($i, 3) . "pt>";
  echo "Loop $user! <hr>";
  echo "</div>";
}
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>