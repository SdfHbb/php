<?php
//Header für ein JPG-Bild erstellen
header('Content-type: image/jpeg');

//Der Pfad zum Bild
$image = imagecreatefromjpeg('../images/winter-elbe.jpg');

//Farben generieren nach belieben
$blau = imagecolorallocate($image, 0, 0, 255);
$gelb = imagecolorallocate($image, 255, 175, 0);

//Pfad zur Schriftartdatei
$chrift = $_SERVER['DOCUMENT_ROOT'] . '/php/resources/fonts/arial.ttf';

//Wunschdatum festlegen (Beispiel:Weihnachten)
$date2 = mktime(0, 0, 0, 12, 24, 2023);

//Aktuelle Zeit holen in Sekunden seit 1.1.1970
$date1 = date("U");
//Millisekunden durch Sekunden, Minuten und Stunden teilen
$diff = ($date2 - $date1) / 60 / 60 / 24;

//Nachkommastellen "rausschmeißen"
$tt = number_format($diff, 0);

//Text "zusamenbauen"
$text = "Noch $tt ";
//Mal wieder eine bedingte Zuweisung :-)
$text .= $tt == 1 ? "Tag" : "Tage";
$text .= " bis Weihnachten...";

//Text im Bild plazieren
imagettftext($image, 40, 0, 43, 403, $blau, $chrift, $text);
imagettftext($image, 40, 0, 40, 400, $gelb, $chrift, $text);

imagejpeg($image);
