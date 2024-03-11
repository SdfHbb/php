<?php
header("content-type:text/html; charset=utf8_unicode_ci");

$datei = fopen("../../../resources/txtFile/kfz.csv", "r");
$ziel = fopen("kfz_v.html", "w");

fwrite($ziel, "<html><head>\n");
fwrite($ziel, "<style>\nbody{background-color:yellow;color:blue;}\n</style>\n");
fwrite($ziel, "</head><body>\n");

fwrite($ziel, "<h1>Liste KFZ-Kennzeichen</h1>\n");
fwrite($ziel, "<ul>\n");

$teil = fgetcsv($datei, 2048, ";");
while (!feof($datei)) {
  fwrite($ziel, "<li>$teil[0] - $teil[1]</li>\n");
  $teil = fgetcsv($datei, 2048, ";");
}
fwrite($ziel, "</ul>\n</body></html>");

fclose($datei);
fclose($ziel);

readfile("kfz.html");
