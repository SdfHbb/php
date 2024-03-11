<?php
$site_name = 'Aufgabe 7';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Die Phrasendreschmaschine (hatten wir schonmal)
Füllen Sie drei Arrays mit jeweils den Satzteilen Subjekt, Prädikat, Objekt. Ein Programm
kombiniert daraus über zufällige Zugriffe auf die Arrays ganze Sätze.';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<table>
  <tr>
    <th>arr01</th>
    <th>arr02</th>
    <th>arr03</th>
    <th>arr04</th>
    <th>arr05</th>
  </tr>
  <tr>
    <td>Hans</td>
    <td>singt</td>
    <td>falsch.</td>
    <td>optional:</td>
    <td>optional:</td>
  </tr>
  <tr>
    <td>Der Hund</td>
    <td>bellt</td>
    <td>laut..</td>
    <td>Zeit:</td>
    <td>Ort:</td>
  </tr>
  <tr>
    <td>Mia</td>
    <td>tanzt</td>
    <td>zauberhaft.</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Der Regen</td>
    <td>tropft</td>
    <td>langsam.</td>
    <td></td>
    <td></td>
  </tr>
</table><br>

<?php
$arr01 = array("Hans", "Der Hund", "Mia", "Der Regen");
$arr02 = array("singt", "bellt", "tanzt", "tropft");
$arr03 = array("falsch.", "laut.", "zauberhaft.", "langsam.");

for ($i = 0; $i < 10; $i++) {
  echo $arr01[rand(0, 3)] . " " . $arr02[rand(0, 3)] . " " . $arr03[rand(0, 3)] . "<br>";
}
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>