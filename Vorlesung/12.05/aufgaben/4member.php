<?php
$site_name = 'Aufgabe 4';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
?>


<?php
header("content-type:text/html; charset=utf8_unicode_ci");
//var_dump($_POST);
$user["ali"] = "passwort";
$user["hanz"] = "geHeim";
$user["vera"] = "pr!ma";

$n = $_POST["name"];
$p = $_POST["pw"];

if (isset($user[$n]) && $user[$n] == $p) {
  echo "drin<br>";

  ?>

  <a href="https://cbm-projektmanagement.de/" target="_blank">cbm hh</a><br>
  <a href="4index.html">Startseite</a><br>

  <?php
} else {
  echo "Du kommst hier nicht rein<br>";
  echo "<a href='4index.html'>Zurück</a>";
}
?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>