<?php
$site_name = 'INSERT';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Artikelkategorie anlegen';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<form action="insert.php" method="POST">
  <input type="text" name="kategoriename" placeholder="Kategoriename eingeben" value="Gemüse">
  <input type="text" name="beschreibung" placeholder="Beschreibung eingeben" value="Alles Gute vom Feld und Garten">
  <button>speichern</button>
</form>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>