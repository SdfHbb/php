<?php
$site_name = 'Aufgabe 8';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Geben Sie die 6 Lottozahlen und die Superzahl der nächsten Ziehung in einer HTML-Tabelle sortiert aus.';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<Table>
  <tr>
    <th>Lottozahlen</th>
    <th>Superzahl</th>
    </th>

    <?php

    $ziehung = range(1, 49);

    shuffle($ziehung);
    $ziehung = array_slice($ziehung, 0, 7);
    sort($ziehung);

    for ($i = 0; $i < count($ziehung) - 1; $i++) {
      echo "<tr><td>" . $ziehung[$i] . "</td><td></td></tr>";
    }
    echo "<tr><td></td><td>" . $ziehung[6] . "</td></tr>";
    ?>

</table>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>