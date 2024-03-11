<?php
$site_name = 'Aufgabe 2';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Geben Sie Schlüssel und Werte des Systemarrays $_SERVER aus; je Schlüssel/Wert eine Zeile!';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<table>
  <tr>
    <th>Key</th>
    <th>Value</th>
  </tr>

  <?php
  foreach ($_SERVER as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>
  ";
  }
  ?>

</table>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>