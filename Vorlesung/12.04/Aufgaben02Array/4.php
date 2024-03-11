<?php
$site_name = 'Aufgabe 4';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Es sollen für neue User initiale Passworte generiert werden. Füllen Sie dazu ein Array mit Buchstaben (ideal: große und kleine Buchstaben, aber z.B. kein i/l/O/0 wegen Verwechselungsgefahr) und Zahlen und "ziehen" Sie je 10 Zeichen (oder eine beliebige Zahl zwischen 8 und 15) daraus für ein systemgeneriertes Passwort. <br><br>
Tipp:
Für das schnelle Erstellen von Arrays eignet sich die Funktion "explode()" extrem gut!';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<?php
$zeichen = "8 9 10 11 12 13 14 15";
$zeichen .= "a b c d e f g h j k m n p q r s t u v w x y z";
$zeichen .= "A B C D E F G H J K L M N P Q R S T U V W X Y Z";
$zahl = explode(" ", $zeichen);

shuffle($zahl);
foreach ($zahl as $key => $key) {
  // echo " " . $key . " " . $value . " ";
}

$passWord = "";
for ($i = 0; $i < 10; $i++) {
  $passWord .= $zahl[$i];
}
echo $passWord;
?>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>