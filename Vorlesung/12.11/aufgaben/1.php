<?php
$site_name = 'Aufgabe 1';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Erstellen Sie ein Gästebuch, so dass User auf Ihrer Webseite Kommentare
hinterlassen können. Die User sollen in einem HTML-Formular ihren Namen,
Mailadresse und einen Kommentar (textarea!) eingeben, zusätzlich speichern Sie
bitte Datum, Uhrzeit und die (virtuelle) IP zu jedem Eintrag.';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<form action="#" method="get">
  <input type="text" name="vorname" placeholder="Namen eingeben:" value="peter">
  <input type="email" name="email" placeholder="E-mail eingeben:" value="peter@gmail.com">
  <textarea name="comment" placeholder="Ihr Eintrag"></textarea>
  <button>absenden</button>
</form>

<?php

include("../../../resources/function/testdaten.php");

if (isset($_GET["vorname"]) && isset($_GET["email"]) && isset($_GET["comment"])) {
  $datum = date("d.m.Y#H:i:s");
  $ip = $_SERVER["REMOTE_ADDR"];
  $comment = str_replace("\r\n", "", $_GET["comment"]);

  $inhalt = $datum . "#" . $ip . "#" . $_GET["vorname"] . "#" . $_GET["email"] . "#" . $comment . "\n";
  echo $inhalt;

  $datei = fopen("../../../resources/txtFile/gaestebuch.txt", "a");
  fwrite($datei, $inhalt);
  fclose($datei);
}
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>