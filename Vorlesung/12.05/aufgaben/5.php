<?php
$site_name = 'Aufgabe 5';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Speichern Sie 5 Pfade zu Bildern (lokal oder Web) in einem Array und erstellen Sie daraus eine Bildergalerie. Dazu soll aus jedem Array-Element ein HTML-IMG-Tag generiert werden.';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>


<?php
// Variante 1 mit url
$arr01 = array(
  "https://www.einfachbacken.de/sites/einfachbacken.de/files/styles/700_530/public/2020-10/rentierkekse_1.jpg?h=4521fff0&itok=clEksyup",
  "https://www.ndr.de/ratgeber/kochen/warenkunde/kaffee684_v-contentxl.jpg",
  "https://image.essen-und-trinken.de/11831680/t/bD/v10/w960/r1/-/364982--8436-.jpg",
  "https://www.mcs.eu/Blog/2021-06/image-thumb__4183__aufwinddefaultArticleDetail/Schokolade-Tankstellenshop.webp",
  "https://www.kuchenbekenntnisse.de/wp-content/uploads/2019/03/Muffins_bea_web-e1552898295835.jpg"
);

foreach ($arr01 as $value) {
  echo " <img class='small' src='" . $value . "'>";
}
echo "<hr>";

// Variante 2 mit lokalen Bildern
$arr02 = array(
  '/php/resources/images/cookies/rentierkekse_1.webp',
  '/php/resources/images/cookies/kaffee684_v-contentxl.avif',
  '/php/resources/images/cookies/364982--8436-.jpg',
  '/php/resources/images/cookies/Schokolade-Tankstellenshop.webp',
  '/php/resources/images/cookies/Muffins_bea_web-e1552898295835.jpg',

);
foreach ($arr02 as $value) {
  echo " <img class='small' src='" . $value . "'>";
}
?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>