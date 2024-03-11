# Aufgaben Script

## 13.1

### 2

Der Satz des Pythagoras lautet `a² + b² = c²`. Erstellen Sie ein Programm zur Berechnung der Seite C nach Eingabe der Werte für a und b. Für die Wurzelberechnung können Sie die Funktion `sqrt()` benutzen.

```php
<form action="#" method="get">
  <input type="number" name="erste" placeholder="Erste Seite eingeben:">
  <input type="number" name="zweite" placeholder="Zweite Seite eingeben:">
  <input type="number" name="dritte" placeholder="Dritte Seite eingeben:">
  <button>absenden</button>
</form>

<?php
if (isset($_GET["erste"]) && isset($_GET["zweite"]) && isset($_GET["dritte"])) {
  $erg = $_GET["erste"] * $_GET["zweite"] * $_GET["dritte"];
  echo "Das Volumen von " . $_GET["erste"] . " * " . $_GET["zweite"] . " * " . $_GET["dritte"] . " = " . $erg;
}
?>
```

### 5

Ein Programm soll den Benzinverbrauch eines Kfz auf 100 km berechnen. Dies lässt sich nach folgender Formel durchführen: `Treibstoffmenge * 100 / gefahrene Strecke = Verbrauch pro 100km`

Die gefahrene Strecke ergibt sich aus der Differenz vom KM-Stand beim letzten Tanken und neuen KM-Stand beim Auftanken. 

Erstellen Sie das dazugehörige Programm, das nach Eingabe von Anfangskilometerstand, Endkilometerstand und getankten Litern den Verbrauch berechnet und ausgibt.

## 13.2

### 2

assen Sie vom Benutzer Größe und Gewicht eingeben und berechnen Sie dazu den Bodymaßindex (BMI).

geben Sie das Normal- und Idealgewicht aus.

```php 
<form action="#" method="get">
  <input type="number" name="groesse" placeholder="Größe eingeben in cm:" min="1" step="0.01">
  <input type="radio" name="gesch" value="frau" checked> Frau &nbsp;
  <input type="radio" name="gesch" value="mann"> Mann
  <button>absenden</button>
</form>

<?php
if (isset($_GET["groesse"]) && isset($_GET["gesch"])) {
  $nGewicht = $_GET["groesse"] - 100;

  ($_GET["gesch"] == "mann") ? ($iGewicht = $nGewicht * 0.9) : ($iGewicht = $nGewicht * 0.85);

  echo "Ihr Normalgewicht beträgt " . $nGewicht . "kg, Idealgewicht liegt bei "
    . $iGewicht . " kg.";
}
?>
```

### 6

Für einen einfachen Taschenrechner soll es 3 (drei!) einzelne Eingaben geben:

- Zahl1
- Operator `+`, `-`, `*`, `/`
- Zahl2

Das Programm soll dann anhand des Operators die richtige Berechnung durchführen und das Ergebnis auf dem Bildschirm ausgeben.

Achtung: Eine Division durch `0` ist nicht erlaubt und ist mit einer Fehlermeldung zu quittieren, es darf dann kein Ergebnis ausgegeben werden.

```php 
<form action="#" method="get">
  <input type="number" name="erste" placeholder="Erste Zahl eingeben:">
  <input type="radio" name="oper" value="+" checked> + &nbsp;
  <input type="radio" name="oper" value="-"> - &nbsp;
  <input type="radio" name="oper" value="*"> * &nbsp;
  <input type="radio" name="oper" value="/"> / &nbsp;
  <input type="number" name="zweite" placeholder="Zweite Zahl eingeben:">
  <button>absenden</button>
</form>

<?php

if (isset($_GET["erste"]) && isset($_GET["oper"]) && isset($_GET["zweite"])) {

  if ($_GET["oper"] == "+") {
    $erg = $_GET["erste"] + $_GET["zweite"];
  } else if ($_GET["oper"] == "-") {
    $erg = $_GET["erste"] - $_GET["zweite"];
  } else if ($_GET["oper"] == "*") {
    $erg = $_GET["erste"] * $_GET["zweite"];
  } else if ($_GET["oper"] == "geteilt" || $_GET["zweite"] == 0) {
    echo "Division durch 0 nicht möglich! ";
    die();
  } else {
    $erg = $_GET["erste"] / $_GET["zweite"];
  }

  echo $_GET["erste"] . " " . $_GET["oper"] . " " . $_GET["zweite"] . " = " . $erg;
}
?>
```

alternativ Vorlesung:

```php
<!DOCTYPE HTML>
<html>

<head>
  <title></title>
</head>

<body>
  <h3>Taschenrechner Vorlesung</h3>
  <form action="#" method="get">
    1. Zahl <input type="number" required name="z1"><br><br>

    <input type="radio" name="op" value="+" checked>+
    <input type="radio" name="op" value="-">-
    <input type="radio" name="op" value="*">*
    <input type="radio" name="op" value="/">/<br><br>

    2. Zahl <input type="number" required name="z2">

    <br><br>
    <input type="submit" value="Rechnen">
  </form>

  <?php
  if (isset($_GET["z1"])) {
    if ($_GET["op"] == "+")
      $erg = $_GET["z1"] + $_GET["z2"];
    else if ($_GET["op"] == "-")
      $erg = $_GET["z1"] - $_GET["z2"];
    else if ($_GET["op"] == "*")
      $erg = $_GET["z1"] * $_GET["z2"];
    else {
      if ($_GET["z2"] != 0)
        $erg = $_GET["z1"] / $_GET["z2"];
      else
        $erg = "Infinity";
    }
    echo "<br>Ergebnis ist: $erg";
  }
  ?>

</body>
</html>
```

### 8

Nach Eingabe eines Gehalts und eines Kennbuchstabens (`S`tunde, `W`oche, `M`onat) wird das entsprechende Jahresgehalt ausgerechnet.

Das Jahr hat 52 Wochen, 12 Monate und 2080 Arbeitsstunden/Jahr sind zu leisten.

```php 
<form action="#" method="get">
  <input type="number" name="gehalt" placeholder="Gehalt eingeben:">
  <input type="radio" name="lohn" value="stunde" checked> Stundenlohn<br>
  <input type="radio" name="lohn" value="woche"> Wochenlohn <br>
  <input type="radio" name="lohn" value="monat"> Monatslohn <br>
  <button>absenden</button>
</form>

<?php
if (isset($_GET["gehalt"]) && isset($_GET["lohn"])) {

  if ($_GET["lohn"] == "stunde") {
    $erg = $_GET["gehalt"] * 2080;
  } else {
    ($_GET["lohn"] == "woche") ? ($erg = $_GET["gehalt"] * 52) : ($erg = $_GET["gehalt"] * 12);
  }

  echo "Ihr Jahresgehalt beträgt " . number_format($erg, 2, ",", ".") . "€";
}
?>
```

### 12

Es gelte folgende vereinfachte Steuertabelle:

- 20% Steuern bei mehr als 10.000€ Einkommen;
- 30% Steuern bei mehr als 25.000€ Einkommen;
- 50% Steuern bei mehr als 50.000€ Einkommen;
- Geringverdiener zahlen nur 10% Steuern.

Eingegeben wird (nur) das Bruttogehalt.
Erstellen Sie ein Programm zur Ermittlung und Ausgabe der Steuerlast und des Nettogehalts.

```php 
<form action="#" method="get">
  <input type="number" name="brutto" placeholder="Bruttogehalt eingeben:">
  <button>absenden</button>
</form>

<?php

if (isset($_GET["brutto"])) {

  $brutto = $_GET["brutto"];

  if ($brutto > 50000) {
    $steuerSatz = 50;
  } else if ($brutto > 25000) {
    $steuerSatz = 30;
  } else if ($brutto > 10000) {
    $steuerSatz = 20;
  } else {
    $steuerSatz = 10;
  }

  $steuer = $brutto * $steuerSatz / 100;
  $netto = $brutto - $steuer;

  echo "<br>Ihr Bruttogehalt betr&auml;gt: " . number_format($brutto, 2, ",", ".") . " &euro;";
  echo "<br>Ihr Steuerabzug betr&auml;gt: " . number_format($steuer, 2, ",", ".") . " &euro;";
  echo "<br>Ihr Nettogehalt betr&auml;gt: " . number_format($netto, 2, ",", ".") . " &euro;";
}
?>
```


## 13.3

### 2

Geben Sie eine Liste der Umrechnungswerte für Temperaturen von Celsius in Fahrenheit `F = C° \* 1,8 + 32` aus. Benutzen Sie dabei den Bereich von -50° bis +70° Celsius in 5°-Schritten.

```php 
$f = 0;
for ($i = -50; $i <= 70; $i += 5) {

  echo "<p>";
  echo "$i Celsius = ";
  $f = $i * 1.8 + 32;
  echo "$f Fahrenheit";
  echo "</p>";
}
```

### 3

Ausgabe der Quadratzahlen:

1 x 1 = 1

2 x 2 = 4

3 x 3 = 9

...

20 x 20 = 400

```php
for ($i = 1; $i <= 10; $i++) {
  echo "$i * $i = ";
  echo "" . pow($i, 2) . "<br>";
}
```

### 4

Ausgabe der Kubikzahlenzahlen:

1 * 1 * 1 = 1

2 * 2 * 2 = 8

3 * 3 * 3 = 27

...

10 * 10 * 10 = 1000

```php
for ($i = 1; $i <= 10; $i++) {
  echo "$i * $i * $i = ";
  echo "" . pow($i, 3) . "<br>";
}
```

### 13

Es sollen vom Benutzer ein Anlagebetrag, ein Zinssatz (in %) und eine Stehzeit eingegeben werden.
Das Programm gibt dann in einer Tabelle die Entwicklung des Kapitalzuwachses anschaulich in einer Tabelle aus.
(Auf die Zahlenformatierung brauchen Sie noch nicht Rücksicht zu nehmen.)
Beispiel: Kapital 1000 Euro, Zinssatz 3 % auf 5 Jahre angelegt.

```php
<form>
  <input type="number" name="anlage" placeholder="Anlagebetrag eingeben:" min="500" max="1000000" value="1000">
  <input type="number" name="zins" placeholder="Zinssatz eingeben:(min 0,5-9,9)" min="0.5" max="9.9" step="0.1"
    value="3.0">
  <input type="number" name="zeit" placeholder="Stehzeit eingeben (max 50):" min="1" max="50" value="5">
  <button type="submit">Senden</button>
</form>

<table>
  <tr>
    <th>Jahre</th>
    <th>Kapital</th>
    <th>Zinsen</th>
    <th>Neues Kapital</th>
  </tr>


  <?php

  if (isset($_GET["anlage"]) && isset($_GET["zins"]) && isset($_GET["zeit"])) {

    $start = $_GET["anlage"];
    $zinsSatz = $_GET["zins"];
    $zinsen = 0;
    $jahre = $_GET["zeit"];

    for ($i = 1; $i <= $jahre; $i++) {

      $endKapital = $start + ($start * $zinsSatz / 100);
      $zinsen = $endKapital - $start;

      echo "<tr><td>" . $i . "</td>";
      echo "<td>" . number_format((float) $start, 2, '.', '') . " € </td>";
      echo "<td>" . number_format((float) $zinsen, 2, '.', '') . " € </td>";
      echo "<td>" . number_format((float) $endKapital, 2, '.', '') . " € </td>";
      echo "</tr>";

      $start = $endKapital;
    }
  }
  ?>
```

## 13.5

### 1

Verdoppeln Sie die Werte des Array.

```php
$arr1 = array(13, -4, 82, 17);
print_r($arr1);
echo "<br>";
for ($i = 0; $i < count($arr1); $i++) {
  $arr2[$i] = $arr1[$i] * 2;
}
print_r($arr2);
```

### 2

Verdoppeln Sie die Werte des Array und geben Sie diese in umgekehrter Reihenfolge aus.

```php title='2.php'
$arr1 = array(13, -4, 82, 17);
print_r($arr1);
echo "<br>";
for ($i = 0; $i < count($arr1); $i++) {
  $arr2[$i] = array_reverse($arr1)[$i] * 2;

}
print_r($arr2);
```

alternativ:

```php title='2_2.php'
$arr1 = array(13, -4, 82, 17);
print_r($arr1);
echo "</br>";
for ($i = 3; $i >= 0; $i--) {
  $arr2[$i] = $arr1[$i] * 2;
}
print_r($arr2);
```

### 3

Suchen Sie nach einer Zahl im Array.

```php 
<form action="#" method="get">
  <input type="number" name="zahl" placeholder="Zahl eingeben:">
  <button>absenden</button>
</form>

<?php
$arr1 = array(2, 4, 13, -4, 82, 17);
print_r($arr1);
echo "<br><br>";

if (isset($_GET["zahl"])) {
  $zahl1 = $_GET["zahl"];
  $gefunden = false;

  for ($i = 0; $i < count($arr1); $i++) {
    if ($arr1[$i] == $zahl1) {
      $index = $i;
      $gefunden = true;
    } else {
    }
  }

  if ($gefunden == true) {
    echo "Gesuchte Zahl gefunden: arr1[" . $index . "]";
  } else {
    echo "Zahl ist im Array nicht vorhanden";
  }
}
?>
```

### 4

Erstellen Sie ein Array mit 50 Zufallszahlen und kopieren Sie alle geraden Zahlen in ein anderes Array.

```php
for ($i = 0; $i < 50; $i++) {
  $array01[$i] = rand(0, 100);
  if ($i % 10 == 0) {
    echo "<br>";
  }
  echo $array01[$i] . " ";
}
echo "<br><hr>";

$geradeZahlenArray = array_filter($array01, function ($zahl) {
  return $zahl % 2 === 0;
});

$i = 0;
foreach ($geradeZahlenArray as $value) {
  if ($i % 10 == 0) {
    echo "<p>";
  }
  $i++;
  echo $value . " ";
}
```

## Vorlesung

### 29.11

#### Grundlagen Variablen

```php
$user = "Hans";
var_dump($user);
echo "<hr>";

$user = false;
var_dump($user);
echo "<hr>";

$user = 5;
var_dump($user);
echo "<hr>";

$user *= $user;
var_dump($user);
echo "<hr>";

$user = "Peter";
for ($i = 0; $i < 3; $i++) {
  echo "Loop $user! <hr>";
}

$user = "setting css";
for ($i = 3; $i < 5; $i++) {
  echo "<div style=font-size:" . pow($i, 3) . "pt>";
  echo "Loop $user! <hr>";
  echo "</div>";
}
```


### 30.11

#### 1x1

Geben Sie das kleine 1x1 in einer Html-Tabelle aus.

```php
$b = 1;
echo "<table><tr>";
for ($a = 1; $b <= 10; $a++) {
  $c = $b * $a;
  echo "<td>$a x $b = $c</td>";
  if ($a == 10) {
    $a = 0;
    $b++;
    echo "</tr><tr>";
  }
}
echo "</tr></table>";
```

#### formularBestellung

```php
<form action="#" method="get">
  <input type="radio" name="gesch" value="weiblich" checked>W &nbsp;
  <input type="radio" name="gesch" value="männlich">M &nbsp;
  <input type="radio" name="gesch" value="divers">D<br>
  <select name="box">
    <option>Salat</option>
    <option>Pasta</option>
    <option>Pizza</option>
  </select> <br> <br>
  <button>senden</button>
</form>

<?php
if (isset($_GET["gesch"])) {
  $gesch = $_GET["gesch"];
  echo "Sie sind  " . $_GET["gesch"] . " und haben " . $_GET['box'] . " bestellt";
}
?>
```

### kubikzahlen

Ausgabe der Kubikzahlen in einer Html-Tabelle, Zeilen sollen abwechseld eingefärbt sein.

```php
<!DOCTYPE HTML>
<html>

<head>
  <title></title>
  <style type="text/css">
    td {
      width: 150px;
      text-align: center;
    }

    tr:nth-child(even) {
      background-color: yellow;
    }

    tr,
    td {
      border: 1px solid black;
    }
  </style>
</head>

<body>
  <table>
    <?php

    for ($a = 1; $a <= 20; $a++) {
      echo "<tr >";
      $b = $a * $a;
      echo "<td>$a x $a  = $b</td>";
      $b *= $a; // $b=$b*$a
      echo "<td>$a x $a x $a = $b</td>";
      echo "</tr>";
    }

    ?>
  </table>
</body>

</html>
```


#### Quadratzahlen

Ausgabe der Quadratzahlen:

1 x 1 = 1

2 x 2 = 4

3 x 3 = 9

...

20 x 20 = 400

```php
  for ($a = 1; $a <= 20; $a++) {
    $b = $a * $a;
    echo "$a x $a  = $b <br>";
  }
```

### 01.12

#### Grundlagen Array

```php title='arr01.php'
// Array mit unterschiedlichen Datentypen
$array01 = array(1, 14, 25, 59, "Freitag", 6, 1.28, 4, true);

var_dump($array01);
echo "<hr>";

// Array mit Zufallszahlen
for ($i = 0; $i < 10; $i++) {
  $array01[$i] = rand(0, 100);
  echo $array01[$i] . " ";
}

// Array sortieren
sort($array01);
echo "<hr>";

for ($i = 0; $i < count($array01); $i++) {
  echo $array01[$i] . " ";
}

echo "<br>";
var_dump($array01);
echo "<hr>";

// Array Minimum, Maximum und Durchschnitt
echo "Minimum: " . min($array01) . "<br>";
echo "Maximum: " . max($array01) . "<br>";
echo "Durchschnitt: " . array_sum($array01) / count($array01) . "<br>";
```

```php title='arr02.php'
// Array automatisch erzeugen 
$arr2 = range("a", "z");
print_r($arr2);
echo "<hr><br>";

// String Zeichenkete zerlegen
$arr2 = explode(" ", "a b c d e f g h k A B C D E F G H 2 3 5 60");

print_r($arr2);
echo "<hr><br>";

// Array zufällig durchmischen
shuffle($arr2);
print_r($arr2);
```

#### Lotto

```php title='arrLotto.php'
$arr2 = range(1, 49);
shuffle($arr2);

for ($i = 0; $i < 6; $i++) {
  $arrHilf[$i] = $arr2[$i];
}

sort($arrHilf);

for ($i = 0; $i < 6; $i++) {
  echo "$arrHilf[$i]<br>";
}
```

```php title='arrLotto2.php'
$ziehung = range(1, 49);
print_r($ziehung);
echo "<br><br><hr>";

shuffle($ziehung);
print_r($ziehung);
echo "<br><br><hr>";

$ziehung = array_slice($ziehung, 0, 6);

print_r($ziehung);
echo "<br><br><hr>";

sort($ziehung);

print_r($ziehung);
echo "<br><br><hr>";

echo "Die Ziehung zum Sonntag:<br>";

for ($i = 0; $i < count($ziehung); $i++) {
  echo "$ziehung[$i] ";
}
```

#### Schaltjahr

```php
<!DOCTYPE HTML>
<html>

<head>
  <title></title>
</head>

<body>
  <form action="#" method="get">
    Gesuchtes Jahr<br>
    <input type="number" required name="jahr"> <br><br>
    <input type="submit" value="Check it!">
  </form>

  <?php
  if (isset($_GET["jahr"])) {
    $wert = mktime(0, 0, 0, 12, 32, $_GET["jahr"]);

    // echo date("d.m.Y", $wert);
    echo "<br>Versatz zur GMT: " . date("Z", $wert) / 3600 . " Stunden.";

    if (date("L", $wert) == 1)
      echo "<br>wir haben ein Schaltjahr.";
    else
      echo "<br>wir haben kein Schaltjahr.";
  }
  ?>
</body>

</html>
```

### 04.12

#### Assoziatives Array I

Assoziatives Array sortieren

```php title='arr03.php'
$datum["de"] = "Deutschland";
$datum["it"] = "Italien";
$datum["no"] = "Norwegen";
$datum["nl"] = "Niederlande";
$datum["pl"] = "Polen";
$datum["ch"] = "Schweiz";

$arrUser["hans"] = "ganz-geheim";
$arrUser["hilde"] = "NochGeheimeR";

echo "Vorher:<br>";
foreach ($datum as $key => $value) {
  echo "Index:$key, Wert $value<br>";
}

sort($datum);

echo "<br>Nachher:<br>";
foreach ($datum as $key => $value) {
  echo "Index:$key, Wert $value<br>";
}
```

#### Assoziatives Array II

Index im Array suchen, Value ausgeben.

```php title='arr03b.php'
$kennzeichen["de"] = "Deutschland";
$kennzeichen["it"] = "Italien";
$kennzeichen["no"] = "Norwegen";
$kennzeichen["nl"] = "Niederlande";
$kennzeichen["pl"] = "Polen";
$kennzeichen["ch"] = "Schweiz";

$tage = "de";
$schalter = false;

// Array ausgeben mit foreach()
foreach ($kennzeichen as $key => $value) {
  echo "[$key] $value<br>";
}
echo "<hr>";

//Version 1
echo "<h3> Version 1 <h3> ";
if (isset($kennzeichen[$tage]))
  echo "$kennzeichen[$tage] gefunden<hr>";
else {
  echo "$tage ist nicht in der Liste<hr>";
}

// Version 2
echo "<h3> Version 2 <h3> ";
foreach ($kennzeichen as $i => $wert) {
  if ($i == $tage) {
    $schalter = true;
  }
}

if ($schalter == true)
  echo "$kennzeichen[$tage] gefunden<hr>";
else
  echo "$tage ist nicht in der Liste<hr>";

// Version 3
echo "<h3> Version 3 <h3> ";
if (array_key_exists($tage, $kennzeichen)) {
  echo $kennzeichen[$tage] . " gefunden";
} else
  echo "$tage ist nicht in der Liste";
```

alternativ:
```php title='arr03p.php'
<form action="#" method="get">
  <input type="text" name="land" placeholder="Land eingeben:">
  <button>suchen</button>
</form>

<?php
if (isset($_GET["land"])) {
  $datum["de"] = "Deutschland";
  $datum["it"] = "Italien";
  $datum["no"] = "Norwegen";
  $datum["nl"] = "Niederlande";
  $datum["pl"] = "Polen";
  $datum["ch"] = "Schweiz";

  $gefunden = " ";
  foreach ($datum as $key => $value) {
    if ($_GET["land"] == $key) {
      $gefunden = $key;
    }
  }

  if ($gefunden == " ") {
    echo " Das Land <b>[" . $_GET["land"] . "]</b> ist nicht im Array vorhanden: ";
  } else {
    echo " Das Land <b>[" . $_GET["land"] . "]</b> ist im Array vorhanden: " . $datum[$gefunden];

  }
}
```

#### Aufgaben 1

##### 1

Welche Dateierweiterung (Endung) müssen Dateien mit enthaltenen PHP-Skripten ha-
ben und warum das?

> `.php` - damit der code vom Server geparsed werden kann

##### 2

Wie werden PHP-Skripte überhaupt in HTML-Code eingebettet?

> ```php 
> <?php 
>
> ?>
> ```

##### 3

Wie definieren Sie eine Variable "a" mit dem Initialwert 12?

> ```php
> $a = 12;
> ```

##### 4

Welche Funktion zeigt Ihnen den aktuellen Datentyp und Inhalt einer Variablen an?

> ```php
> var_dump($variable);
> ```

##### 5

Wozu dient der Punkt-Operator?

> Zum Verbinden von Text- und Variablenwerten zwecks Konsolenausgabe per `echo`

##### 6

Wie werden einzelne Zeilen auskommentiert in PHP?

> ```php
> // Kommentar
> ```

##### 7

Wie werden ganze Bereiche auskommentiert?

> ```php
> /*
> Kommentar
> */
> ```

##### 8

Wie kommen Sie an die Inhalte eines Formulars, das mit an ein
PHP-Skript übergeben wurde?

> ```php
> $_GET["name"]
>
> // alternativ
> $_POST["name"]
> ```

##### 9

Das "Standard-Array" `$ky` hat 20 Elemente; wie lassen Sie sich eines per Zufallszugriff ausgeben?

> ```php
> shuffle($ky);
> echo $ky[0];
>
> // alternativ
> $i = rand(0,19);
> echo $ky[$i];
>
> // alternativ
> echo $ky[rand(0, count($ky) - 1)];
> ```

##### 10

Wie erstellen Sie ein Array mit den initialen Inhalten "Herr", "Frau", "Familie", "Firma"

> ```php
> $arr = array( "Herr", "Frau", "Familie", "Firma");
>
> // alternativ
> $arr[0] = "Herr";
> $arr[1] = "Frau";
> $arr[2] = "Familie";
> $arr[3] = "Firma";
>
> // alternativ
> $arr = explode( ",", "Herr,Frau,Familie,Firma");
> $arr = explode( "-", "Herr-Frau-Familie-Firma");
> ```

##### 11

Was ist der Unterschied (im Ergebnis) zwischen den beiden Funktionen
in_array() und array_search() ?

> in_array ($needle, $array [,$strict]) if (in_array ("hans", $namen) )
Sucht nach einem Suchwort, gibt True oder False zurück. Ist strict true, sucht sie nur Elemente, deren Wert denselben Datentyp hat wie needle; Default ist false. Ist needle ein String, wird Groß- / Kleinschreibung unterschieden!

> array_search ($needle, $array [,$strict])
Sucht nach einem Wert. Ist der Wert enthalten, liefert sie den Schlüssel zurück, ansonsten gibt sie FALSE zurück. Ist "strict" TRUE, sucht die Funktion nur Elemente, deren Wert denselben Datentyp haben wie needle, Default ist FALSE.

##### 12

Ein Programmteil soll nur ausgeführt werden, wenn der Inhalt der Variablen $b zwischen 5 und 15 ist. Geben Sie bitte die Bedingung für eine Alternative an.

```php
if ($b >= 5 && $b <= 15) {
  # code...
}else {
  # code...
}
```

##### 13

Folgende Zuweisung ist gegeben: 

```php
$a = date ("j") * date ("n");
```

Welchen Wert hat $a jetzt?

> j
Tag im Monat als Zahl ohne führende Null (1-31)

> n
aktueller Monat als Zahl ohne führende Null (1-12)

> heute 04.12.2003: 
`4 * 12  = 48`

##### 14

Wozu benötigen Sie die Funktion `mktime()` ?

> UNIX-Timestamp um eine Uhrzeit / Datum zu bestimmen bzw. formatieren

##### 15

Das (normale) Array `$arr` enthält 100 zufällige Zahlen zwischen 1000 und 50000. Erstellen Sie den Code zur Ausgabe des kleinsten und größten Wertes aus `$arr`.

> ```php
> for ($i = 0; $i < 100; $i++) {
>   $arr[$i] = rand(1000, 50000);
> }
> 
> $maxi = max($arr);
> $mini = min($arr);
> 
> echo $maxi . " " . $mini;
> ```

#### Aufgaben 02 Array

##### 1

Füllen Sie ein Array mit 100 Zufallszahlen zwischen 10 und 1579 und geben Sie diese sortiert wieder aus
in einer HTML-Tabelle, dabei soll jede zweite Zeile einen farbigen Hintergrund haben. (Einfache Version:
```html
<td bgcolor="yellow">)
```

> ```php
> <style type="text/css">
>  td {
>    width: 150px;
>    text-align: center;
>  }
>
>  tr:nth-child(even) {
>    background-color: yellow;
>  }
>
>  tr,
>  td {
>    border: 1px solid black;
>  }
> </style>
>
> <table>
> 
> <?php
> for ($i = 0; $i < 100; $i++) {
>   $array01[$i] = rand(10, 1579);
> }
>
> sort($array01);
>
> for ($i = 0; $i < 100; $i++) {
>  echo "<tr>" . "<td>" . $array01[$i] . "</td></tr> ";
> }
> ?>
>
> </table>
> ```

##### 2

Geben Sie Schlüssel und Werte des Systemarrays $_SERVER aus; je Schlüssel/Wert eine Zeile!

> ```php
> <table>
>   <tr>
>     <th>Key</th>
>     <th>Value</th>
>   </tr>
> 
>   <?php
>   foreach ($_SERVER as $key => $value) {
>     echo "<tr><td>$key</td><td>$value</td></tr>
>   ";
>   }
>   ?>
> 
> </table>
> ```

##### 3

Ein assoziatives Array enthält Autokennzeichen und die dazugehörigen Zulassungsbezirke.
Beispiel:
- HH für „Hansestadt Hamburg“
- SE für „Kreis Segeberg“,
- OWL für „Ostwestfalen-Lippe“ 
- M für „München“
- DD für „Domstadt Dresden“
- etc. pp. usw.

Nach Eingabe des Autokennzeichens wird der komplette Name des Zulassungsbezirkes ausgegeben oder eine Fehlermeldung, dass der Wert nicht gefunden wurde.

Erstellen Sie den HTML-Code für die Seite mit dem Formular und das PHP-Programm.

> ```php
> <form action="#" method="get">
>   <input type="text" name="kenn" > placeholder="Kennzeichen eingeben:">
>   <button>Ländersuche</button>
> </form>
> 
> <?php
> if (isset($_GET["kenn"])) {
> 
>   $kennzeichen["HH"] = "Hansestadt Hamburg";
>   $kennzeichen["SE"] = "Kreis Segeberg";
>   $kennzeichen["OWL"] = "Ostwestfalen-Lippe";
>   $kennzeichen["M"] = "München";
>   $kennzeichen["DD"] = "Domstadt Dresden";
> 
>   $gefunden = " ";
>   foreach ($kennzeichen as $key => $value) {
>     if ($_GET["kenn"] == $key) {
>       $gefunden = $key;
>     }
>   }
> 
>   if ($gefunden == " ") {
>     echo " Das Kennzeichen <b> " . $_GET["kenn"] . " </b>ist nicht im Array vorhanden!";
>   } else {
>     echo " Das Kennzeichen <b> " . $_GET> ["kenn"] . " </b>ist im Array vorhanden: " . $kennzeichen[$gefunden];
>   }
> }
> ?>
> ```

##### 4

Es sollen für neue User initiale Passworte generiert werden. Füllen Sie dazu ein Array mit Buchstaben
(ideal: große und kleine Buchstaben, aber z.B. kein i/l/O/0 wegen Verwechselungsgefahr) und Zahlen und
"ziehen" Sie je 10 Zeichen (oder eine beliebige Zahl zwischen 8 und 15) daraus für ein systemgeneriertes
Passwort.

Tipp:
Für das schnelle Erstellen von Arrays eignet sich die Funktion "explode()" extrem gut!

> ```php
> $zeichen = "8 9 10 11 12 13 14 15";
> $zeichen .= "a b c d e f g h j k m n p q r s t > u v w x y z";
> $zeichen .= "A B C D E F G H J K L M N P Q R S > T U V W X Y Z";
> $zahl = explode(" ", $zeichen);
> 
> shuffle($zahl);
> foreach ($zahl as $key => $key) {
>   // echo " " . $key . " " . $value . " ";
> }
> 
> $passWord = "";
> for ($i = 0; $i < 10; $i++) {
>   $passWord .= $zahl[$i];
> }
> echo $passWord;
> ```

##### 5

Der User gibt (in einem HTML-Formular) einen Satz ein.
Ihr Programm zerlegt den Satz in einzelne Worte und gibt den Satz wortweise wieder aus, je
Zeile ein Wort.

> ```php
> <form action="#" method="get">
>   <input type="text" name="satz" placeholder="Satz eingeben:">
>   <button>absenden</button>
> </form>
> 
> <?php
> if (isset($_GET["satz"])) {
>   foreach (explode(' ', $_GET["satz"]) as $word) {
>     echo $word . "<br>";
>   }
> }
> ```

##### 6

Der Satz der vorherigen Aufgabe wird wortweise rückwärts ausgegeben,
Beispiel: "das ist ein haus" wird "haus ein ist das"

> ```php
> <form action="#" method="get">
>   <input type="text" name="satz" placeholder="Satz eingeben:">
>   <button>absenden</button>
> </form>
> 
> <?php
> if (isset($_GET["satz"])) {
>   foreach (array_reverse(explode(' ', $_GET["satz"])) as $word) {
>     echo $word . "<br>";
>   }
> }
> ?>
> ```

##### 7

Die Phrasendreschmaschine (hatten wir schonmal)
Füllen Sie drei Arrays mit jeweils den Satzteilen Subjekt, Prädikat, Objekt. Ein Programm
kombiniert daraus über zufällige Zugriffe auf die Arrays ganze Sätze.

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

> ```php
> $arr01 = array("Hans", "Der Hund", "Mia", "Der Regen");
> $arr02 = array("singt", "bellt", "tanzt", "tropft");
> $arr03 = array("falsch.", "laut.", "zauberhaft.", "langsam.");
> 
> for ($i = 0; $i < 10; $i++) {
>   echo $arr01[rand(0, 3)] . " " . $arr02[rand> (0, 3)] . " " . $arr03[rand(0, 3)] . "<br>";
> }
> ```

##### 8

> ```php
> <Table>
>   <tr>
>     <th>Lottozahlen</th>
>     <th>Superzahl</th>
>     </th>
> 
>     <?php
> 
>     $ziehung = range(1, 49);
> 
>     shuffle($ziehung);
>     $ziehung = array_slice($ziehung, 0, 7);
>     sort($ziehung);
> 
>     for ($i = 0; $i < count($ziehung) - 1; $i++) {
>       echo "<tr><td>" . $ziehung[$i] . "</td><td></td></tr>";
>     }
>     echo "<tr><td></td><td>" . $ziehung[6] . "</td></tr>";
>     ?>
> 
> </table>
> ```

alternativ:
> ```php
> <form action="#" method="get">
>   <input type="number" name="zahl1" placeholder="Zahl 1 eingeben:" min="1" max="49" value="1">
>   <input type="number" name="zahl2" placeholder="Zahl 2 eingeben:" min="1" max="49" value="2">
>   <input type="number" name="zahl3" placeholder="Zahl 3 eingeben:" min="1" max="49" value="3">
>   <input type="number" name="zahl4" placeholder="Zahl 4 eingeben:" min="1" max="49" value="4">
>   <input type="number" name="zahl5" placeholder="Zahl 5 eingeben:" min="1" max="49" value="5">
>   <input type="number" name="zahl6" placeholder="Zahl 6 eingeben:" min="1" max="49" value="6">
>   <input type="number" name="zahl7" placeholder="Superzahl eingeben:" min="1" max="49" value="48">
>   <button>absenden</button>
> </form>
> 
> <Table>
>   <tr>
>     <th>Lottozahlen</th>
>     <th>Superzahl</th>
>     </th>
> 
>     <?php
>     if (
>       isset($_GET["zahl1"]) &&
>       isset($_GET["zahl2"]) &&
>       isset($_GET["zahl3"]) &&
>       isset($_GET["zahl4"]) &&
>       isset($_GET["zahl5"]) &&
>       isset($_GET["zahl6"]) &&
>       isset($_GET["zahl7"])
>     ) {
>       $spieler = array(
>         $_GET["zahl1"],
>         $_GET["zahl2"],
>         $_GET["zahl3"],
>         $_GET["zahl4"],
>         $_GET["zahl5"],
>         $_GET["zahl6"],
>         $_GET["zahl7"]
>       );
> 
>       sort($spieler);
> 
>       $lotto = range(1, 49);
>       Shuffle($lotto);
> 
>       $ziehung = array_slice($lotto, 0, 7);
>       sort($ziehung);
> 
>       echo "Die Ziehung zum Sonntag:<br>";
> 
>       for ($i = 0; $i < count($ziehung) - 1; $i++) {
>         if (in_array($ziehung[$i], $spieler)) {
>           echo "<tr ><td style='background-color: hsl(123, 41%, 45%)'>" . $ziehung[$i] . " </td><td></td> </tr>";
>         } else if ($i < count($ziehung) - 2) {
>           echo "<tr><td>" . $ziehung[$i] . "</td><td></td> </tr>";
>         } else if (in_array($ziehung[6], $spieler)) {
>           echo "<tr><td></td><td style='background-color: hsl(123, 41%, 45%)'>" . $ziehung[6] . "</td></tr>";
>         } else {
>           echo "<tr><td></td><td>" . $ziehung[6] . "</td></tr>";
>         }
>       }
>     }
>     ?>
> 
> </table>
> ```

### 05.12

#### Deutsches Datumsformat

```php title='datumDeutsch.php'
setlocale(LC_TIME, 'de_DE', 'de_DE.UTF-8');

$datum = date("d.m.Y");

$monate = explode(" ", "nix Januar Februar M�rz April Mai Juni Juli August September Oktober November Dezember");

$tage = array(
  "Mon" => "Montag",
  "Tue" => "Dienstag",
  "Wed" => "Mittwoch",
  "Thu" => "Donnerstag",
  "Fri" => "Freitag",
  "Sat" => "Samstag",
  "Sun" => "Sonntag"
);

// $b = implode("<br>", $tage);
// echo $b;

foreach ($tage as $key => $y) {
  echo substr($y, 0, 2) . " : ";
  echo strtolower($y) . "<br>";
}
// Tag ausgeben
echo "<hr>";
echo $tage[date("D")];

// Monat ausgeben
echo "<hr>";
echo $monate[date("m")];

// Deutsches Datumsformat
echo "<hr>";
echo $tage[date("D")] . " ,der " . date("d") . " " . $monate[date("m")] . " " . date("Y") . "";
```

#### Deutsches Datumsformat mit Formulareingabe

```php title='datumFormular.php'
<form action="#" method="get">
  <input type="number" name="tag" placeholder="Tag:" min="1" max="31" value="13">
  <input type="number" name="monat" placeholder="Monat:" min="1" max="12" value="4">
  <input type="number" name="jahr" placeholder="Jahr:" min="1800" max="2200" value="2013">
  <button>absenden</button>
</form>

<?php
if (isset($_GET["tag"]) && isset($_GET["monat"]) && isset($_GET["jahr"])) {
  setlocale(LC_TIME, 'de_DE', 'de_DE.UTF-8');

  $datum = date("d.m.Y");

  $monate = explode(" ", "nix Januar Februar März April Mai Juni Juli August September Oktober November Dezember");

  $tage = array(
    "Mon" => "Montag",
    "Tue" => "Dienstag",
    "Wed" => "Mittwoch",
    "Thu" => "Donnerstag",
    "Fri" => "Freitag",
    "Sat" => "Samstag",
    "Sun" => "Sonntag"
  );

  $datum = mktime(0, 0, 0, $_GET["monat"], $_GET["tag"], $_GET["jahr"]);
  echo $tage[date("D", $datum)] . ", der " . date("d", $datum) . " " . $monate[date("n", $datum)] . " " . date("Y", $datum) . "";
}
?>
```

#### Deutsches Datumsformat Ausgabe der Wochentage

Ausgabe des Array für Wochentage :
- Anzeige nur der ersten beiden Buchstaben des Index
- die Werte zufällig angeordnet und in Kleinbuchstaben

```php title='wochentage.php'
$tage = array(
  "Mon" => "Montag",
  "Tue" => "Dienstag",
  "Wed" => "Mittwoch",
  "Thu" => "Donnerstag",
  "Fri" => "Freitag",
  "Sat" => "Samstag",
  "Sun" => "Sonntag"
);

// $b = implode("<br>", $tage);
// echo $b;

foreach ($tage as $key => $y) {
  echo substr($y, 0, 2) . " : ";
  echo strtolower(str_shuffle($y)) . "<br>";
}
```

#### Deutsches Datumformat mit Formulareingabe $

```html title='.\Vorlesung\12.05\deutschesDatum\index.html'
<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <pre>
<form action="arrBeliebigerTag.php" method="post">
Tag   <input type="number" name="t" min="1" max="31" required>
Monat <input type="number" name="m" min="1" max="12" required>
Jahr  <input type="number" name="j" min="1800" max="2200" required>

<input type="submit">
</form>
</pre>
  </body>
</html>
```

```php title='arrBeliebigerTag.php'
$datum = mktime(0, 0, 0, $_POST["m"], $_POST["t"], $_POST["j"]);
// $datum=mktime(0,0,0, rand(1,12), rand(1,31),rand(1800,2250));
$monate = explode(" ", "nix Januar Februar M&aumlrz April Mai Juni Juli August September Oktober November Dezember");

$tage = array(
  "Mon" => "Montag", "Tue" => "Dienstag",
  "Wed" => "Mittwoch", "Thu" => "Donnerstag",
  "Fri" => "Freitag", "Sat" => "Samstag",
  "Sun" => "Sonntag"
);


echo $tage[date("D", $datum)] . ", der ";
echo date("j", $datum) . ". ";
echo $monate[date("n", $datum)] . " ";
echo date("Y", $datum);
```

#### Aufgaben Array 02 Fingerübung

##### 1

Geben Sie das Monatsarray aus unserer Datumaufgabe sortiert nach Werten aus als HTML-"Bullet-List"

> ```php
> <ul>
> 
>   <?php
>   $monate = explode(" ", "nix Januar Februar März April Mai Juni Juli August September Oktober November Dezember");
> 
>   sort($monate);
> 
>   foreach ($monate as $key => $value) {
>     echo "<li>[" . $key . "] " . $value . "</li>";
>   }
>   ?>
> 
> </ul>
> ```

##### 2

Geben Sie das Wochentagsarray aus unserer Datumaufgabe nach Indexen sortiert aus als nummerierte
Liste in HTML.

> ```php
> <ol>
> 
>   <?php
>   $tage = array(
>     "Mon" => "Montag",
>     "Tue" => "Dienstag",
>     "Wed" => "Mittwoch",
>     "Thu" => "Donnerstag",
>     "Fri" => "Freitag",
>     "Sat" => "Samstag",
>     "Sun" => "Sonntag"
>   );
> 
>   ksort($tage);
> 
>   foreach ($tage as $key => $value) {
>     echo "<li>[" . $key . "] " . $value . "</li>";
>   }
>   ?>
> 
> </ol>
> ```

##### 3

Geben Sie das Wochentagsarray aus unserer Datumaufgabe nach werten rückwärts sortiert aus als
nummerierte Liste in HTML, dabei sollen alle Texte in GROSSBUCHSTABEN rückwärts ausgeben werden.

(Tipp: Stringfunktionen in PHP)

> ```php
> <ol>
> 
>   <?php
>   $tage = array(
>     "Mon" => "Montag",
>     "Tue" => "Dienstag",
>     "Wed" => "Mittwoch",
>     "Thu" => "Donnerstag",
>     "Fri" => "Freitag",
>     "Sat" => "Samstag",
>     "Sun" => "Sonntag"
>   );
> 
>   // Variante 1
>   foreach (array_reverse($tage) as $value) {
>     ;
>     echo "<li>" . strtoupper(strrev($value)) . "</li>";
>   }
> 
>   echo "</ol><hr><ol>";
> 
>   // Variante 2
>   arsort($tage);
> 
>   foreach ($tage as $schleifstein) {
>     $schleifstein = strtoupper($schleifstein);
>     $schleifstein = strrev($schleifstein);
>     echo "<li>$schleifstein</li>";
>   }
>   ?>
> 
> </ol>
> ```

##### 4

Erstellen Sie ein einfaches User-Login-Formular (als HTML-Datei) mit Passworteingabe für mehrere User.
Dazu werden Username und Passwort in der PHP-Datei in einem assoziativen Array gespeichert:
- Index: Username /
- Wert: Passwort.

Bei erfolgreichem Login werden die User begrüßt, und es werden 2 Verweise zu anderen Seiten
angezeigt; im Fehlerfalle ist eine entsprechende Meldung auszugeben und ein Zurück-Verweis zurück auf
die Loginseite.

> ```html title='4index.html'
> <!DOCTYPE html>
> <html lang="de">
>   <head>
>     <meta charset="utf-8" />
>     <title>Aufgabe 4</title>
>     <link rel="stylesheet" href="../../../resources\views\style.css" />
>   </head>
> 
>   <body>
>     <div class="container">
>       <div class="box top"></div>
>       <div class="box content">
>         <h3>Aufgabe 4</h3>
>         <div class="admonition notice">
>           <p class="left">
>             Erstellen Sie ein einfaches User-Login-Formular (als HTML-Datei) mit
>             Passworteingabe für mehrere User. Dazu werden Username und Passwort
>             in der PHP-Datei in einem assoziativen Array gespeichert:
>           </p>
> 
>           <ul>
>             <li>Index: Username /</li>
>             <li>Wert: Passwort.</li>
>           </ul>
>           <p class="left">
>             Bei erfolgreichem Login werden die User begrüßt, und es werden 2
>             Verweise zu anderen Seiten angezeigt; im Fehlerfalle ist eine
>             entsprechende Meldung auszugeben und ein Zurück-Verweis zurück auf
>             die Loginseite.
>             </p>
>           </p>
>         </div>
>         <form action="4member.php" method="post">
>           <input type="text" name="name" placeholder="Name" required />
>           <input type="password" name="pw" placeholder="Passwort" required />
>           <!-- 
>           <input type="text" name="name" placeholder="Name" required value="ali"/>
>           <input type="password" name="pw" placeholder="Passwort" required value="passwort"/> -->
>           <button>senden</button>
>         </form>
>       </div>
>       <div class="box bottom"></div>
>     </div>
>   </body>
> </html>
> ```

> ```php title='4member.php'
> header("content-type:text/html; charset=utf8_unicode_ci");
> //var_dump($_POST);
> $user["ali"] = "passwort";
> $user["hanz"] = "geHeim";
> $user["vera"] = "pr!ma";
> 
> $n = $_POST["name"];
> $p = $_POST["pw"];
> 
> if (isset($user[$n]) && $user[$n] == $p) {
>   echo "drin<br>";
> 
>   ?>
> 
>   <a href="https://cbm-projektmanagement.de/" target="_blank">cbm hh</a><br>
>   <a href="4index.html">Startseite</a><br>
> 
>   <?php
> } else {
>   echo "Du kommst hier nicht rein<br>";
>   echo "<a href='4index.html'>Zurück</a>";
> }
> ```

##### 5

Speichern Sie 5 Pfade zu Bildern (lokal oder Web) in einem Array und erstellen Sie daraus eine
Bildergalerie. Dazu soll aus jedem Array-Element ein HTML-IMG-Tag generiert werden.

```php
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
```

##### 6

Sie finden im Skript "php-kurs-ebook..." etwas besseres:

Eine Bildergalerie dynamisch aus einem Verzeichnis auf dem Server erstellen. Auch hier werden die
Dateiname Strings in einem Array eingelesen.

```php
$dir = "../../../resources/images/orte";  // Verzeichnis ggf. anpassen

if ($handle = opendir($dir)) {
  while (($datei = readdir($handle))) {
    $datei = $dir . "/" . $datei;
    if (filetype($datei) == "file" and substr($datei, -4) == ".jpg")
      $src[] = $datei;
  }
  closedir($handle);
}

shuffle($src);
//print_r($src);

for ($i = 0; $i < count($src); $i++) {
  echo "<img class='small' src=$src[$i] >";
}
```

### 06.12

#### Funktionssammlung

```php
// c²=a² + b²
function pyta($a, $b)
{
  return sqrt(pow($a, 2) + $b * $b);
}

function rechteck($a, $b = 0)
{
  if ($b == 0)
    $b = $a;
  return $a * $b;
}

function quadrat($a)
{
  if (is_numeric($a))
    $b = $a * $a;
  else
    $b = "falscher Datentyp";
  return $b;
}
```

#### Aufgaben Funktionen 01

Erstellen Sie für einige der Funktionen ein passendes HTML—Formular.

##### 1

Erstellen Sie den Code für die Funktion `euro()` zur Umrechnung eines DM-Betrages in
Euro; 

ein Euro entspricht 1,95583 DM

```php
<form action="#" method="get">
  <input type="number" name="eingabe" step="0.01" placeholder="DM-Betrag eingeben:">
  <button>absenden</button>
</form>

<?php

if (isset($_GET["eingabe"])) {
  function umrechner($a)
  {
    return number_format($a / 1.95583, 2, ",", ".") . "€";
    // alternativ
    // return round($dm / 1.95583, 2);
  }

  echo umrechner($_GET["eingabe"]);
}

?>
```

##### 2

Eine (eigene) Funktion "fakul()" berechnet die Fakultät einer übergebenen Zahl.

```php
<form action="#" method="get">
  <input type="number" name="eingabe" placeholder="Zahl eingeben:">
  <button>absenden</button>
</form>

<?php
if (isset($_GET["eingabe"])) {
  function fakul($a)
  {
    $b = 1;
    while ($a >= 1) {
      $b *= $a;
      $a--;
    }
    return $b;
  }

  echo $_GET["eingabe"] . "! = " . fakul($_GET["eingabe"]);
}
?>
```

##### 3

Eine Funktion soll das Teilen mit Rest (z.B. 14 : 3 = 4 Rest 2) realisieren. Dazu werden
zwei Zahlen übergeben und die Funktion gibt einen String als Ergebnis zurück.

Eine Division durch 0 soll mit einer Fehlermeldung (als Rückgabe!) quittiert werden.

```php
<form action="#" method="get">
  <input type="number" name="zahl1" placeholder="Zahl 1 eingeben:">
  <input type="number" name="zahl2" placeholder="Zahl 2 eingeben:">
  <button>absenden</button>
</form>

<?php
if (isset($_GET["zahl1"]) && isset($_GET["zahl2"])) {
  function teilen($a, $b)
  {
    if ($b != 0) {
      $rest = $a % $b;
      $erg = ($a - $rest) / $b;
      return "$a / $b = $erg Rest $rest";
    } else {
      return "Division durch 0 nicht erlaubt!";
    }
  }

  echo teilen($_GET["zahl1"], $_GET["zahl2"]);
}

?>
```

##### 4

Erstellen Sie eine Funktion "Pruef", welche true zurückgibt, wenn eine übergebene Zahl
eine gerade Zahl ist.

Hinweis: true/false-Werte können nur indirekt über ein "IF" ausgeben werden.

```php
<form action="#" method="get">
  <input type="number" name="zahl1" placeholder="Zahl eingeben:" required>
  <button>absenden</button>
</form>

<?php


if (isset($_GET["zahl1"])) {
  function pruef($a)
  {
    $b = true;
    if ($a % 2 == 0) {
      return var_dump($b);
    } else {
      return var_dump(!$b);
      ;
    }
  }

  echo pruef($_GET["zahl1"]);
}

?>
```

##### 5

Erstellen Sie eine Funktion "test_ipv4()", die Ihnen eine zufällige IP für Tests generiert.

Hilfe: 192.168.2.124 = 4 "Oktetts, jeweils mit Werten von 0-255.

```php
function test_ipv4()
{
  $erg = "";
  $arr = array("", ".", "", ".", "", ".", "");
  foreach ($arr as $key => $value) {
    if ($key % 2 == 0) {
      $value = rand(0, 255);
    }
    $erg .= $value;
  }
  return $erg;
}

// Version 2
function test_ipv4_1()
{
  return rand(0, 255) . "." . rand(0, 255) . "." . rand(0, 255) . "." . rand(0, 255);
}

// Version 3
function test_ipv4_2()
{
  $o1 = rand(0, 255);
  $o2 = rand(0, 255);
  $o3 = rand(0, 255);
  $o4 = rand(0, 255);

  return "$o1.$o2.$o3.$o4";
}

echo test_ipv4() . "<hr>";
echo test_ipv4_1() . "<hr>";
echo test_ipv4_2();
```

##### 6

Eine Funktion "WorteZaehlen() bekommt einen Satz übergeben und gibt die Anzahl der
Wörter in dem Satz zurück.

```php
<form action="#" method="get">
  <input type="text" name="eingabe" placeholder="Bitte Satz eingeben" value="dies ist ein text">
  <button onclick="">absenden</button>
</form>

<?php
if (isset($_GET["eingabe"])) {
  function worteZaehlen($a)
  {
    return count(explode(" ", $a));
  }

  echo worteZaehlen($_GET["eingabe"]);
}
?>
```

##### 8

Eine Funktion "intervall" bekommt zwei ganze Zahlen a und b übergeben und gibt
dann die Summe aller ganzen Zahlen in diesem Bereich (intervall) zurück. <br>
Beispiel: <br>
intervall(3, 7)   ➡️ 3 + 4 + 5 + 6 + 7 = 25 <br>
intervall(20, 24) ➡️ 20 + 21 + 22 + 23 + 24 = 110

```php
<form action="#" method="get">
  <input type="number" name="zahl1" placeholder="Zahl1 eingeben">
  <input type="number" name="zahl2" placeholder="Zahl2 eingeben">
  <button onclick="">absenden</button>
</form>

<?php

if (isset($_GET["zahl1"]) && $_GET["zahl2"]) {
  function intervall($a, $b)
  {
    $summe = 0;
    for ($a; $a <= $b; $a++) {
      $summe = $summe + $a;
    }
    return $summe;
  }

  echo intervall($_GET["zahl1"], $_GET["zahl2"]);
}
?>
```

##### 9

Eine Funktion "umrechnen()" soll zu einer übergebenen Zahl die Binär, Oktal und Hexde-
zimal-Werte zurückgeben (als Text/String)

Beispiel: <br>
Aufruf:
- umrechnen(5)

Rückgabe: 
- 5 ist binär

```php
<form action="#" method="get">
  <input type="number" name="zahl1" placeholder="Bitte Zahl1 eingeben" value="10">
  <button onclick="">absenden</button>
</form>

<?php
if (isset($_GET["zahl1"])) {
  function umrechnen($x)
  {
    $bin = decbin($x);
    $hex = dechex($x);
    $okt = decoct($x);
    return "$x ist<br>bin&aumlr $bin<br>oktal $okt <br>hexadezimal " . strtoupper($hex);
  }

  echo umrechnen($_GET["zahl1"]);
}

?>
```

##### 10

Erstellen Sie eine eigene Schaltjahresfunktion, die anhand einer übergebenen Jahres-
zahl ein True (für Schaltjahr) oder False (kein Schaltjahr) zurückgibt.

```php
<form action="" method="get">
  <input type="number" name="jahr" placeholder="jahr eingeben">
  <button>check</button>
</form>

<?php
if (isset($_GET["jahr"])) {
  function schaltjahr($jahr)
  {
    if (($jahr % 4 == 0 && $jahr % 100 != 0) || $jahr % 400 == 0) {
      echo "schaltjahr";
    } else {
      echo "kein schaltjahr";
    }
  }

  echo schaltjahr($_GET["jahr"]) . "<br>";
}
?>
```

### 07.12

#### Funktionen mit beliebiger Parameteranzahl

```php title='fkt02.php'
/* 
function UmfangDreieck()
{
  $arr = func_get_args();
  if (count($arr) == 3)
    $umf = array_sum($arr);
  else if (count($arr) == 2)
    $umf = $arr[0] + 2 * $arr[1];
  else if (count($arr) == 1)
    $umf = $arr[0] * 3;
  else if (count($arr) == 0 || count($arr) > 3)
    $umf = "Falsche Parameterzahl";
  return $umf;
}

function UmfangDreieck()
{
  if (func_num_args() == 3)
    $umf = func_get_arg(0) + func_get_arg(1) + func_get_arg(2);
  else if (func_num_args() == 2)
    $umf = func_get_arg(0) + 2 * func_get_arg(1);
  else if (func_num_args() == 1)
    $umf = func_get_arg(0) * 3;
  else if (func_num_args() == 0 || func_num_args() > 3)
    $umf = "Falsche Parameterzahl";
  return $umf;
}
 */
function UmfangDreieck(...$arr)
{
  if (count($arr) == 3)
    $umf = array_sum($arr);
  else if (count($arr) == 2)
    $umf = $arr[0] + 2 * $arr[1];
  else if (count($arr) == 1)
    $umf = $arr[0] * 3;
  else if (count($arr) == 0 || count($arr) > 3)
    $umf = "Falsche Parameterzahl";
  return $umf;
}

echo UmfangDreieck(5) . "<br>";
echo UmfangDreieck(1, 4) . "<br>";
echo UmfangDreieck(1, 2, 3);
```

#### Aufgaben Funktionen 02

##### 1

Es fehlt in PHP leider eine Funktion `array_avg()`, die aus mehreren übergebenen Werten den
Durchschnitt berechnet. Erstellen Sie bitte die Funktion.

```php
// Version 1
function array_avg(...$values)
{
  $count = count($values);
  if ($count === 0) {
    return 0;
  }
  $sum = array_sum($values);
  return $sum / $count;
}

// Version 2
function array_avg_2(...$values)
{
  if (count($values) == 0)
    return 0;
  else
    return array_sum($values) / count($values);
}

echo array_avg(3, 4, 77, 12) . '<br>';
echo array_avg_2(3, 4, 77, 12) . '<br>';
```

##### 2

Erstellen Sie eine Funktion `datum()`, die Ihnen eine zufällige Datumswerte in der Form
tt.mm.jjjj für Tests generiert.

Erweiterung: 
- Alle Datumswerte müssen gültig sein, es darf also beispielsweise keinen 31.04,
31.11.2023 oder einen 30.02.1999 geben.

```php
// Variante 1
function datum()
{
  $datum = mktime(0, 0, 0, rand(1, 12), rand(1, 31), rand(1900, 2100));
  return date("d.m.Y", $datum);
}
// Variante 2
function datum2()
{
  do {
    $tag = rand(1, 31);
    $monat = rand(1, 12);
    $jahr = rand(1800, 2200);
    $datum = date('d.m.Y', mktime(0, 0, 0, $monat, $tag, $jahr));
  } while (!checkdate($monat, $tag, $jahr));
  echo $datum;

}
echo datum() . "<br>";
echo datum2();
```

##### 3

Erstellen Sie eine Funktion "uhrzeit()", die Ihnen eine zufällige Uhrzeit für spätere Testdaten
generiert. Eine Gültige Uhrzeit liegt zwischen 00:00 Uhr und 23:59 Uhr.

```php
function uhrzeit()
{
  $datum = date('H:i:s', mktime(rand(0, 23), rand(0, 59), rand(0, 59), 0, 0, 0));
  echo $datum;
}

echo uhrzeit();
```

##### 4

Die PHP-Funktion "is_numeric" kann immer nur eine Variable auf einen gültigen Inhalt prüfen. 

Erstellen Sie eine Funktion "arr_numeric()", die prüft, ob in einem übergebenen Array alle Werte numerisch sind. <br>
Im Erfolgsfall gibt die Funktion "true" zurück, sonst "false" <br>

<b>Hinweis:</b>
- true/false-Rückgabewerte können (im Hauptprogramm) nur indirekt über eine IF-Bedingung
ausgeben werden.

```php
function array_numeric($arr)
{
  $num = 0;
  foreach ($arr as $value) {
    if (is_numeric($value))
      $num++;
  }
  if ($num == count($arr))
    return var_dump(true);
  else
    return var_dump(false);
}

echo array_numeric(array(8, 9, 3, 5, 14, 965)) . "<br>";
echo array_numeric(array("nix"));
```

##### 5

Erstellen Sie eine Funktion "Caesar(text, schluessel)", die einen übergeben Text nach der cäsarischen Verschlüsselung codiert zurückgibt.

<b>Beispiel:</b> 
- caesar("affe",3) liefert "diih", 
  
  d.h. zum Ascii-Wert von a werden 3 addiert und danndas Zeichen zurückgegeben, das gleiche jeweils für f und e... <br>
Beachten Sie aber den "Sprung" nach vorn bei der Verschlüsselung von "z" etc.

```php
// Variante 1
function caesar($text, $schluessel)
{
  $verschluesselterText = "";
  for ($i = 0; $i < strlen($text); $i++) {
    $zeichen = $text[$i];

    if (!is_numeric($zeichen)) {
      // Überprüfen, ob das Zeichen ein Buchstabe ist
      $asciiOffset = ctype_upper($zeichen) ? ord('A') : ord('a');
      $verschluesselterText .= chr((ord($zeichen) - $asciiOffset + $schluessel) % 26 + $asciiOffset);
    } else {
      // Falls kein Buchstabe, das Zeichen unverändert hinzufügen
      $verschluesselterText .= $zeichen;
    }
  }
  return $verschluesselterText;
}

// Variante 2
function caesar2($text, $key)
{
  $text = str_split($text);
  $crypt = "";
  foreach ($text as $i => $data) {
    $asc = ord($data);
    if ($asc >= 65 and $asc <= 90) {
      $crypt .= chr(((($asc - 65) + $key) % 26) + 65);
    } else if ($asc >= 97 and $asc <= 122) {
      $crypt .= chr(((($asc - 97) + $key) % 26) + 97);
    } else {
      $crypt .= chr($asc);
    }
  }
  return $crypt;
}

// Variante 3
function caesar3($text, $key)
{
  $teile = str_split(strtolower($text));
  $neu = "";

  foreach ($teile as $zeichen) {
    $wert = ord($zeichen) + $key;
    if ($wert > 122)
      $wert -= 26;
    $neu .= chr($wert);
  }
  return $neu;
}

echo caesar("affe", 3) . "<br>";
echo caesar("xyz", 3) . "<br><hr>";

echo caesar2("affe", 3) . "<br>";
echo caesar2("xyz", 3) . "<br><hr>";

echo caesar3("affe", 3) . "<br>";
echo caesar3("xyz", 3) . "<br><hr>";
```

##### 6

Erstellen Sie eine Funktion "checkit()". Diese soll folgendes leisten: <br>
<ul>
<li>Wird eine Zahl übergeben, ist aus dieser Zahl die Wurzel zu ziehen und zurückzugeben.</li>
<li>Wird ein Text übergeben, so ist die Anzahl Zeichen in diesem Text zu zählen und zurück-
zugeben.</li>
<li>Werden 2 oder mehr Zahlen übergeben, ist der Durchschnitt zurück zu geben.</li>
<li>Wird nichts übergeben, ist der Wochentag (deutsch ausgeschrieben) von Weihnachten
zurückzugeben <br> Beispiel: "Der 24.12. fällt dieses Jahr auf einen Mittwoch."</li>
</ul>

```php
function checkIt(...$arr)
{
  if (count($arr) == 1) {
    if (is_numeric($arr[0])) {
      echo "Die Wurzel aus $arr[0] ist: ";
      $erg = sqrt($arr[0]);
    } else if (is_string($arr[0])) {
      echo "<br>Die Zeichenl&aumlnge von <q><b>$arr[0]</q></b> ist: ";
      $erg = strlen($arr[0]);
    }
  } else if (count($arr) >= 2 && is_numeric($arr[0])) {
    echo "<br>Der Durchschnitt von ";

    foreach ($arr as $key => $value) {
      echo $key < count($arr) - 1 ? $value . " + " : $value . " = ";
    }
    $durch = array_sum($arr) / count($arr);
    $erg = $durch;
  } else if (empty($arr)) {
    $tage = array(
      "Mon" => "Montag",
      "Tue" => "Dienstag",
      "Wed" => "Mittwoch",
      "Thu" => "Donnerstag",
      "Fri" => "Freitag",
      "Sat" => "Samstag",
      "Sun" => "Sonntag"
    );
    $erg = "<br>Der " . date("d.m", mktime(0, 0, 0, 12, 24, 2003)) .
      " f&aumlllt dieses Jahr auf einen "
      . $tage[date("D", mktime(0, 0, 0, 12, 24, 2003))] . ".";
  }
  echo $erg;
}

echo checkIt(9);
echo checkIt("lorem ipsum dolor sit amet");
echo checkIt(1, 2, 3, 4);
echo checkIt();
```

##### 7

Erstellen Sie eine Funktion "super()". Diese soll folgendes leisten:
<ul>
<li>Wird nichts übergeben, ist das Tagesdatum in "deutscher Form" mit ausgeschriebenem
Monat zurückzugeben.</li>
<li>Wird eine Zahl übergeben, ist aus dieser Zahl die Wurzel zu ziehen und zurückzugeben.</li>
<li>Werden 2 Zahlen übergeben, ist die erste Zahl durch die zweite zu teilen und das Ergebnis zurückzugeben.</li>
<li>Werden mehr als 2 bis 5 Zahlen übergeben, ist das Minimum zurück zu geben.</li>
</ul>

```php
function super(...$arr)
{
  if (empty($arr)) {
    $monate = explode(" ", "nix Januar Februar M&aumlrz April Mai Juni Juli August September Oktober November Dezember");
    $tage = array(
      "Mon" => "Montag",
      "Tue" => "Dienstag",
      "Wed" => "Mittwoch",
      "Thu" => "Donnerstag",
      "Fri" => "Freitag",
      "Sat" => "Samstag",
      "Sun" => "Sonntag"
    );

    $tag = $tage[date("D")];
    $monat = $monate[date("m")];

    $erg = $tag . ", der " . date("j") . " " . $monat . " " . date("Y") . "<br>";
  } else if (count($arr) == 1) {
    $erg = "Die Wurzel von " . $arr[0] . " = " . sqrt($arr[0]) . "<br>";
  } else if (count($arr) == 2) {
    $erg = "$arr[0] / $arr[1] = " . $arr[0] - $arr[1] . "<br>";
  } else if (count($arr) > 2 || count($arr) <= 5) {
    echo "Das Minimum von (";
    foreach ($arr as $key => $value) {
      echo $key < count($arr) - 1 ? "$value, " : "$value";
    }
    $erg = ") ist " . min($arr);
  }
  echo $erg;
}

echo super();
echo super(9);
echo super(9, 3);
echo super(3, 6, 1, 9, 12);
```

### 08.12

#### Tagesgruss

Begrüßen Sie den Besucher Ihrer Webseite mit Namen und tageszeitabhängigem Gruß:
- Guten Morgen / Guten Tag/ Guten Abend / Nanu, immer noch wach?

```php
$uhrzeit = date('h', mktime(rand(0, 23), 0, 0, 0, 0, 0));
echo "Es ist " . $uhrzeit . " Uhr <br>";

if ($uhrzeit >= 6 && $uhrzeit < 11) {
  echo "Guten Morgen!";
} else if ($uhrzeit >= 11 && $uhrzeit <= 18) {
  echo "Guten Tag";
} else if ($uhrzeit >= 19 && $uhrzeit <= 22) {
  echo "Guten Abend!";
} else if ($uhrzeit >= 23 || $uhrzeit <= 5) {
  echo "Immer noch wach?";
}
```

#### Zahlen zählen

Geben Sie in einem Formularfeld beliebig viele Zahlen durch Komma getrennt ein, 
und lassen Sie von einem Programm zählen, wie viele Werte es waren.

```php
<form action="" method="get">
  <input type="text" name="zahlen" placeholder="Ihre Zahlen bitte">
  <button>senden</button>
</form>

<?php

if (isset($_GET["zahlen"])) {
  // Variante 1
  $var = $_GET["zahlen"]; //"4, 5, 66, 53,2,1, 23";

  //$var=str_replace(' ','',$var);
  //echo $var;

  $var = explode(",", $var);
  echo "Es waren " . count($var) . " Zahlen. <br>";

  // Variante 2
  function zaehle(...$arr)
  {
    $text = implode(" ", $arr);
    $var = str_replace(',', ' ', $text);
    $text = explode(" ", $var);
    echo count($text);
  }

  echo zaehle($_GET["zahlen"]) . " Zahlen";
}
?>
```

### 11.12

#### Besucherzähler

```php title='zaehler.php'
if (file_exists("../../resources/txtFile/zaehler.txt")) {
  echo "Datei gefunden <br>";
  $datei = fopen("../../resources/txtFile/zaehler.txt", "r");
  $zahl = fread($datei, 2048);
  fclose($datei);
  $zahl++;

  $datei = fopen("../../resources/txtFile/zaehler.txt", "w");
  // Inhalt von $zahl in Datei schreiben
  fwrite($datei, $zahl);
  fclose($datei);

  echo "Sie sind der $zahl Besucher";
} else {
  // Überprüfen, ob Datei vorhanden, ansonsten wird diese erstellt
  echo "Datei nicht vorhanden";
  $datei = fopen("../../resources/txtFile/zaehler.txt", "w");
  // Inhalt "1" in Datei schreiben
  fwrite($datei, 1);
  fclose($datei);
  echo "Datei angelegt";
}
```

#### Besucherzähler mit datum

Datei zaehler.txt auslesen und in zaehlerDatum[].txt schreiben

```php title='zaehlerDatum.php'
$datum = date("dmY");
if (file_exists("../../resources/txtFile/zaehlerDatum" . $datum . ".txt")) {
  $datei = fopen("../../resources/txtFile/zaehler.txt", "r");
  $zahl = fread($datei, 2048);
  fclose($datei);
  $zahl++;
  echo "Sie sind der $zahl. Besucher.";
  $datei = fopen("../../resources/txtFile/zaehlerDatum" . $datum . ".txt", "w");
  fwrite($datei, $zahl);
  fclose($datei);
} else {
  $datei = fopen("../../resources/txtFile/zaehlerDatum" . $datum . ".txt", "w");
  fwrite($datei, 1);
  fclose($datei);
  echo "Datei angelegt";
}
```

#### Besucherzaähler Daten auslesen

```php title='besucherTxtLesen.php'
$datei = file("../../resources/txtFile/besucher.txt");
// print_r($datei);
$datei = array_reverse($datei);
foreach ($datei as $key) {
  $teile = explode(";", $key);
  echo "$teile[0] - $teile[1]<br>";
  echo "$teile[2] - $teile[3]<hr>";
}
```

#### Besucherzähler Daten schreiben

```php title='besucherTxtBeschreiben.php'
include("../../resources/function/testdaten.php");
$datei = fopen("../../resources/txtFile/besucher.txt", "a");

for ($i = 1; $i <= 100; $i++) {
  $ip = test_ipv4();
  $uhrzeit = uhrzeit();
  $datum = datum();
  $zahl = wort();

  $key = $datum . ";" . $uhrzeit . ";" . $ip . ";" . $zahl . "\n";

  fwrite($datei, $key);
}
fclose($datei);
```

#### Aufgaben Dateiverarbeitung

##### 1

Erstellen Sie ein Gästebuch, so dass User auf Ihrer Webseite Kommentare
hinterlassen können. Die User sollen in einem HTML-Formular ihren Namen,
Mailadresse und einen Kommentar (textarea!) eingeben, zusätzlich speichern Sie
bitte Datum, Uhrzeit und die (virtuelle) IP zu jedem Eintrag.

```php
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
```

##### 2

Stellen Sie das Gästebuch chronologisch rückwärts (aktuelle Einträge vorn) auf
der Webseite in optisch ansprechender Form dar.

```php
<table>

  <?php
  $datei = file("../../../resources/txtFile/gaestebuch.txt");
  $datei = array_reverse($datei);
  // print_r($arr);
  
  foreach ($datei as $key) {
    $teile = explode("#", $key);
    echo "<tr>";
    echo "<td>$teile[0]</td>";
    echo "<td>$teile[1]</td>";
    echo "<td>$teile[2]</td>";
    echo "<td>$teile[3]</td>";
    echo "<td>$teile[4]</td>";
    echo "<td>$teile[5]</td>";
    echo "</tr>";
  }
  ?>

</table>
```

##### 3

Die externen Links in einer Webseite sollen dynamisch aus einer Vorlagendatei
erstellt werden. Dazu wird eine Textdatei mit 2 Feldern erstellt: Text, Ziel. <br>
Diese Datei ist mit PHP auszulesen und in einer Webseite sind die Links dann
daraus zu erstellen. <br>
<b>Beispiel:</b><br>
Mein Haus#`http://www.neuschwanstein.de/` <br>
Mein Garten#`http://www.plantenunblomen.de/` <br>
Mein Auto#`http://www.maybach.de/`

```php
$datei = file("../../../resources/txtFile/links.txt");
$datei = array_reverse($datei);
// print_r($arr);

foreach ($datei as $value) {
  $teile = explode("#", $value);
  echo "<a href='" . $teile[1] . "'>" . $teile[0] . "</a> <br> ";
}
```

##### 4

Geben Sie die Datei `kfz.csv` in einer zweispaltigen HTML-Tabelle (Spalten:
Kennzeichen, Zulassungsbezirk) aus.

```php
<table>
  <tr>
    <th>Kennzeichen</th>
    <th>Zulassungsbezirk</th>
  </tr>

  <?php
  $datei = file("../../../resources/txtFile/kfz.csv");

  foreach ($datei as $value) {
    $teile = explode(" ;", $value);
    echo "<tr><td>" . $teile[0] . "</td><td>" . $teile[1] . "</td></tr>";
  }
  ?>

</table>
```

##### 5

Geben Sie die KFZ-Liste nach Zulassungsbezirken sortiert aus.

```php
<table>
  <tr>
    <th>Kennzeichen</th>
    <th>Zulassungsbezirk</th>
  </tr>

  <?php
  // Variante 1
  // $datei = file("../../../resources/txtFile/kfz.csv");
  
  // foreach ($datei as $key => $value) {
  //   $line = explode(" ;", $value);
  //   $neu[$line[0]] = $line[1];
  // }
  
  // Variante 2
  $datei = fopen("../../../resources/txtFile/kfz.csv", "r");
  $zeile = fgetcsv($datei, 2048, ";");    // Vor-lesen
  
  while (!feof($datei)) {                 // Leseschleife bis EOF (EndOfFile)
    $neu[trim($zeile[0])] = $zeile[1];
    $zeile = fgetcsv($datei, 2048, ";");  // weiterlesen
  }

  asort($neu);

  foreach ($neu as $key => $value) {
    echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
  }

  ?>

</table>
```

### 12.12

#### Array Index suchen

Suche nach einem Kennzeichen - Ausgabe des Ortes

```php title='kfzSuchen.php'
<form action='#' method='get'>
  <input type='text' name='kenn' placeholder='Kennzeichen eingeben:' value='HH'>
  <button>suchen</button>
</form>

<?php
if (isset($_GET["kenn"])) {

  $gesucht = $_GET["kenn"];
  $gefunden = false;

  $datei = fopen("../../resources/txtFile/kfz.csv", "r");
  $zeile = fgetcsv($datei, 2048, ";");
  while (!feof($datei)) {
    $neu[trim($zeile[0])] = $zeile[1];
    $zeile = fgetcsv($datei, 2048, ";");
  }
  fclose($datei);
  //print_r($neu);

  foreach ($neu as $key => $werte) {
    if ($gesucht == $key) {
      $gefunden = true;
      echo "<b>$key</b> = $werte<br>";
    }
  }

  if ($gefunden == false)
    echo "<b>$gesucht </b> ist nicht bekannt.";
}

?>
```

#### Aufgaben Dateiverarbeitung 2

##### 1

Leider hat sich in der Datei <b>"Liste-Staedte-in-Deutschland.txt"</b> beim Speichern der Städte ein
Fehler eingeschlichen, bei Postleitzahlen mit führender Null fehlt genau diese Zahl, also statt
`01067;Dresden` steht dort nur `1067;Dresden` ... <br>
Erstellen Sie ein PHP-Skript, dass die PLZ-Liste in eine neue, saubere Datei exportiert.

```php title='1.php'
$datei = fopen("../../../resources/txtFile/Liste-Staedte-in-Deutschland.txt", "r");
$zeile = fgetcsv($datei, 2048, ";");

$wert = 0;
while (!feof($datei)) {
  $neu[$wert] = array($zeile[0], $zeile[1], $zeile[2], $zeile[3], $zeile[4], $zeile[5]);
  $zeile = fgetcsv($datei, 2048, ";");
  $wert++;
}

foreach ($neu as $key => $value) {
  if ($neu[$key][0] < 10000) {
    $neu[$key][0] = "0" . $neu[$key][0];
  }
}

$stadt = fopen("../../../resources/txtFile/stadtNeu.txt", "w");
foreach ($neu as $key => $value) {
  $zahl =
    $neu[$key][0] . ";" .
    $neu[$key][1] . ";" .
    $neu[$key][2] . ";" .
    $neu[$key][3] . ";" .
    $neu[$key][4] . ";" .
    $neu[$key][5] . "\n";
  fwrite($stadt, $zahl);
}

fclose($datei);
fclose($stadt);
```

alternativ:
```php title='1_v2.php'
$alt = fopen("../../../resources/txtFile/Liste-Staedte-in-Deutschland.txt", "r");
$neu = fopen("../../../resources/txtFile/stadtNeu.txt", "w");
$null = "0";

$zeile = fgets($alt);
fwrite($neu, $zeile);
$zeile = fgetcsv($alt, 2048, ";");
while (!feof($alt)) {
  if (strlen($zeile[0]) == 4)
    $zeile[0] = "0" . $zeile[0];
  $zeilen = implode(";", $zeile);
  fwrite($neu, $zeilen . "\n");
  $zeile = fgetcsv($alt, 2048, ";");
}

fclose($alt);
fclose($neu);
```

alternativ:
```php title='1_v3.php'
$alt = file("../../../resources/txtFile/Liste-Staedte-in-Deutschland.txt");
$neu = fopen("../../../resources/txtFile/stadtNeu.txt", "w");

foreach ($alt as $data) {
  $hilf = explode(";", $data);
  if (strlen($hilf[0]) == 4) {
    fwrite($neu, "0");
  }
  fwrite($neu, "$hilf[0];$hilf[1];$hilf[2];$hilf[3];$hilf[4];$hilf[5]");
  // fwrite($neu, $hilf[0] . ";" . $hilf[1] . ";" . $hilf[2] . ";" . $hilf[3] . ";" . $hilf[4] . ";" . $hilf[5]);
}

fclose($neu);
```

##### 2

Geben Sie Plz, Ort und Bundesland der neuen Städteliste in einer übersichtlichen HTML-Tabelle aus.

```php
<table>

  <?php
  $datei = file("../../../resources/txtFile/stadtNeu.txt");

  foreach ($datei as $key => $value) {
    $line = explode(";", $value);
    $neu[$key] = array($line[0], $line[1], $line[2], $line[3], $line[4], $line[5]);
  }

  foreach ($neu as $key => $value) {
    echo "<tr><td>" . $neu[$key][0] . "</td>";
    echo "<td>" . $neu[$key][1] . "</td>";
    echo "<td>" . $neu[$key][2] . "</td>";
    echo "<td>" . $neu[$key][3] . "</td>";
    echo "<td>" . $neu[$key][4] . "</td>";
    echo "<td>" . $neu[$key][5] . "</td></tr>";
  }
  ?>

</table>
```

##### 3

Erstellen Sie eine Liste der deutschen Monatsnamen in einer Datei "monate.de", diese Datei soll
für die Ausgabe des Monatstextes in ein Array eingelesen werden.

```php
$datei = fopen("../../../resources/txtFile/monate.txt", "w");

fwrite($datei, "0;nix\n1;Januar\n2;Februar\n3;März\n4;April\n5;Mai\n6;Juni\n7;Juli\n8;August\n9;September\n10;Oktober\n11;November\n12;Dezember");
fclose($datei);

$datei = file("../../../resources/txtFile/monate.txt");

foreach ($datei as $key => $value) {
  $line = explode(";", $value);
  // print_r($line);
  $neu[$line[0]] = $line[1];
}

foreach ($neu as $key => $value) {
  echo $value . "<br>";
}
```

##### 4

Erstellen Sie ebenfalls eine Datei für die Wochentage. Für diese Tage gilt allerdings der Zusatz,
dass das entsprechende Array assoziativ sein soll und daher die englischen Tageskürzel mit im
Datensatz sein müssen!

```php
$datei = fopen("../../../resources/txtFile/tage.txt", "w");

fwrite($datei, "Mon;Montag\nTue;Dienstag\nWed;Mittwoch\nThu;Donnerstag\nFri;Freitag\nSat;Samstag\nSun;Sonntag");

$datei = file("../../../resources/txtFile/tage.txt");

foreach ($datei as $key => $value) {
  $line = explode(";", $value);
  $neu[$line[0]] = $line[1];
}

foreach ($neu as $key => $value) {
  echo "[" . $key . "] " . $value . "<br>";
}
```

##### 5

User können zur "Monatsnamenausgabe" die Sprache wählen und es wird eine entsprechende Datei benutzt. Erstellen Sie dazu Listen mit den Monatsnamen in jeweils einer anderen Sprache in einer Datei, also z.b. Dänisch.txt , Tuerkisch.txt, Franzoesisch.txt, Ungarisch.txt, etc. <br><br>
Alternativ kann man auch einen geschickten Datensatz basteln und wegschreiben bzw. auslesen <br>
<b>Beispiel:</b>
Januar#january#janvier#jannar#eanáir
Die jeweiligen Sprachen stehen dann immer in der gleichen Spalte...

```php
<form action="#" method="get">
  <input type="radio" name="lang" value="german" checked> Deutsch &nbsp;
  <input type="radio" name="lang" value="english"> English &nbsp;
  <input type="radio" name="lang" value="chinese"> Chinese
  <button>select</button>
</form>

<?php
if (isset($_GET["lang"])) {

  echo '<pre>', var_dump($_GET["lang"]), '</pre>';

  $datei = file("../../../resources/txtFile/monateMultiLang.txt");
  $neu = array();

  $key = 0;
  foreach ($datei as $value) {
    $line = explode(";", $value);
    $key++;
    $neu["german"][$key] = $line[0];
    $neu["english"][$key] = $line[1];
    $neu["chinese"][$key] = $line[2];
    echo $neu[$_GET["lang"]][$key] . "<br>";
  }
}
?>
```

### 13.12

#### Login Vorlesung

```php title='sess01.php'
<pre>
<?php
session_start();
$_SESSION["beginn"]=date("d.m.Y, H:i:s");
$_SESSION["login"]=true;
?>
<form action="sess02.php" method="post">
<input type="text" name="usr" value="gast">
<input type="submit">
</form>

</pre>
```

```php title='sess02.php'
<?php
session_start();
if(isset($_SESSION["login"])){
  $_SESSION["name"]=$_POST["usr"];
  echo "Hallo, ".$_SESSION["name"]."<br>";
  echo "Sie haben sich eingeloggt am ";
  echo $_SESSION["beginn"];

  echo "<br><a href=\"sess02b.php\">Weiter zu Seite 2b</a>";
}
else
  header ("Location:sess01.php");
?>
```

```php title='sess02b.php'
<?php
session_start();
echo "Hallo, ".$_SESSION["name"];
echo ", hier ist seite 2b";

?>
<a href="sess03.php">Weiter</a>
```

```php title='sess03.php'
<pre>
<?php
session_start();
echo "Hallo, ".$_SESSION["name"];
echo ", hier kannst Du Dich ausloggen";
?>
<form action="sess04.php" method="post">
  <input type="submit" value="logout">
</form>
</pre>
```

```php title='sess04.php'
<pre>
<?php
session_start();
if(isset($_SESSION["login"])){
 // var_dump($_SESSION);
  session_destroy();
  session_unset();
  $_SESSION="Sie wurden ausgeloggt";
  var_dump($_SESSION);
  //echo $_SESSION;
}
else
  header ("Location:sess01.php");
?>
</pre>
```

#### Login mit captcha

4 Formulare <br>
<ul>
<li>index.php</li>
<li>logIn.php</li>
<li>member.php</li>
<li>logout.php</li>
</ul> 

```php title='index.php'
<form action="logIn.php" method="POST">
  <input type="text" name="user" value="007">
  <input type="password" name="pass" value="geheim!">
  <img src="../../../resources/phPaint/captcha/bild_capture.php" alt="" width="275" height="183">
  <input type="text" name="eingabe" placeholder="Bitte captcha eingeben">
  <button>absenden</button>
</form>

<?php
session_start();
$_SESSION["startzeit"] = date("d.m.Y, H:i:s");

if (isset($_SESSION["login"]) == "falsches Passwort!") {
  echo "<b>Falsche Zugangsdaten eingegeben!</b>";
}

echo '<pre>', var_dump($_SESSION), '</pre>';

if (isset($_POST["user"]) && isset($_POST["pass"]) && isset($_POST["eingabe"])) {
  // $_SESSION["user"] = $_POST["user"];
  // $_SESSION["passwort"] = $_POST["pass"];
  // $_SESSION["input"] = $_POST["eingabe"];

  // if ($_SESSION["input"] == $_SESSION["cap"]) {
  //   $_SESSION["login"] = true;
  //   header("location:member.php");
  // } else {
  //   header("location:#");
  // }

}
?>
```

```php title='logIn.php'
<?php
session_start();
$user["007"] = "geheim!";
$user["0815"] = "WasDas?";
$user["Balu"] = "dschungel";
$user["Queen"] = "King";

if (
  isset($_POST["user"]) &&
  isset($_POST["pass"]) &&
  isset($_POST["eingabe"]) &&
  isset($_SESSION["startzeit"])
) {
  $_SESSION["user"] = $_POST["user"];

  if (
    $_SESSION["cap"] == $_POST["eingabe"] &&
    $user[$_POST["user"]] == $_POST["pass"]
  ) {
    $_SESSION["login"] = true;
    header("Location:member.php");
  } else {
    $_SESSION["login"] = "falsches Passwort!";
    header("Location:index.php");
  }
} else {
  header("Location:index.php");
}
?>
```

```php title='member.php'
<?php
session_start();
$site_name = 'Hallo ' . $_SESSION["user"];
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/header.php');
$admonition = 'Du bist eingeloggt!';
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/admonitionNotice.php');
?>

<form action="logout.php" method="POST">
  <button value="logout">abmelden</button>
</form>

<?php
echo '<pre>', var_dump($_SESSION), '</pre>';

if ($_SESSION["login"] != true) {
  header("Location:index.php");
}
?>

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/resources/views/footer.php');
?>
```

```php title='logout.php'
session_start();

if (isset($_SESSION["login"]) == true) {
  session_destroy();
  session_unset();
  $_SESSION = "leer";
  echo '<pre>', var_dump($_SESSION), '</pre>';
  // header("location: logIn.php");
  echo "Sie sind ausgeloggt, reload in 3 sekunden!";

  echo "<script type=\"text/javascript\">
  window.setTimeout('location.href=\"index.php\"', 3000);
  </script>";
}
```

### 14.12

#### SQL-Datenbank nordwind: Datensätze auslesen und anzeigen

```php title='showTable.php'
<table>

  <?php
  include("../../resources/database/dbConnect.php");

  $sql = "SELECT * FROM lieferanten;";
  $liste = mysqli_query($con, $sql);

  // COLUMN Header
  $zeile = mysqli_fetch_assoc($liste);
  echo "<tr>";
  foreach ($zeile as $key => $value) {
    echo "<th>$key</th>";
  }
  echo "</tr>";

  // Neues Einlesen aller Daten der Abfrage
  $liste = mysqli_query($con, $sql);

  while ($zeile = mysqli_fetch_assoc($liste)) {
    echo "<tr>";
    foreach ($zeile as $value) {
      echo "<td>$value</td>";
    }
    echo "</tr>";
  }
  ?>

</table>
```

#### Aufgaben Datenbankverarbeitung

<ol>
<li>SELECT-statement selbst eingeben</li>
<li>Artikelname (oder ein Teil wird eingegeben) und die passenden Daten angezeigt</li>
<li><b>optional:</b> Tabelle kann gewählt werden</li>
</ol>

```php
<form action="#" method="GET">
  <input type="text" name="select" placeholder="SQL- Query eingeben" value="*">
  <input type="text" name="tbl" placeholder="Tablee wählen" value="artikel">
  <input type="text" name="spalte" placeholder="Spalte eingeben" value="Artikelname">
  <input type="text" name="such" placeholder="Suchbegriff eingeben" value="ost">
  <button>suchen</button>
</form>

<table>

  <?php
  include("../../../resources/database/dbConnect.php");

  if (isset($_GET["select"]) && isset($_GET["tbl"]) && isset($_GET["spalte"]) && isset($_GET["such"])) {

    if (isset($_GET["select"]) && isset($_GET["tbl"])) {
      $sql = 'SELECT ' . $_GET["select"];
      $tbl = $_GET["tbl"];
      $sql .= ' FROM ' . $tbl . ' ';
    }

    if (!empty($_GET["spalte"])) {
      $spalte = $_GET["spalte"];
      $sql .= 'WHERE ' . $spalte . ' ';
    }

    if (!empty($_GET["such"])) {
      $suchbegriff = $_GET["such"];
      $sql .= ' LIKE "%' . $suchbegriff . '%"';
    }

    $sql .= ';';

    // var_dump($sql);
  
    $liste = mysqli_query($con, $sql);
    $zeile = mysqli_fetch_assoc($liste);

    echo "<tr>";
    foreach ($zeile as $key => $value) {
      echo "<th>" . $key . "</th>";
    }
    echo "</tr>";

    $liste = mysqli_query($con, $sql);

    while ($zeile = mysqli_fetch_assoc($liste)) {
      echo "<tr>";
      foreach ($zeile as $wert) {
        echo "<td>$wert</td>";
      }
      echo "</tr>";
    }

    echo "Anzahl Datensätze: " . mysqli_num_rows($liste);
  }
  ?>

</table>
```

### 15.12 

#### Datenbankeinträge in Datei speichern

Alle Kunden aus Deutschland (nordwind) in kunden.txt speichern

```php title='db2FileExport.php'
<table>

  <?php
  include("../../resources/database/dbConnect.php");
  $datei = fopen("../../resources/txtFile/kunden.txt", "w");

  $sql = 'SELECT *
          FROM kunden
          WHERE Land="Deutschland";';

  $liste = mysqli_query($con, $sql);
  $zeile = mysqli_fetch_assoc($liste);

  echo "<tr>";
  foreach ($zeile as $key => $value) {
    echo "<th>$key</th>";
  }
  echo "</tr>";

  $liste = mysqli_query($con, $sql);

  $text = "";
  while ($zeile = mysqli_fetch_assoc($liste)) {
    echo "<tr>";
    foreach ($zeile as $value) {
      $text .= $value . ";";
      echo "<td>$value</td>";
    }
    $text = trim($text, ";") . "\n";
    echo "</tr>";
  }
  fwrite($datei, $text);
  fclose($datei);
  ?>

</table>
```

#### Datenbankeintrag erzeugen

Artikelkategorie anlegen

```php title='index.php'
<form action="insert.php" method="POST">
  <input type="text" name="kategoriename" placeholder="Kategoriename eingeben" value="Gemüse">
  <input type="text" name="beschreibung" placeholder="Beschreibung eingeben" value="Alles Gute vom Feld und Garten">
  <button>speichern</button>
</form>
```

```php title='insert.php'
<table>

  <?php
  include("../../../resources/database/dbConnect.php");

  $k = $_POST["kategoriename"];
  $b = $_POST["beschreibung"];

  $sql = "INSERT INTO artikelkategorien
          (
            Kategoriename, 
            Beschreibung
          )
          VALUES ('$k','$b');";

  mysqli_query($con, $sql);
  echo mysqli_affected_rows($con) . "Sätze eingefügt";

  // Anzeige
  $sql = "SELECT * 
          FROM artikelkategorien";

  mysqli_query($con, $sql);
  $liste = mysqli_query($con, $sql);

  $zeile = mysqli_fetch_assoc($liste);
  echo "<tr>";
  foreach ($zeile as $key => $value) {
    echo "<th>$key</th>";
  }
  echo "</tr>";

  $liste = mysqli_query($con, $sql);

  while ($zeile = mysqli_fetch_assoc($liste)) {
    echo "<tr>";
    foreach ($zeile as $value) {
      echo "<td>$value</td>";
    }
    echo "</tr>";
  }
  ?>

</table>
```

### 18.12

#### Datenbankabfrage mit `UNION`

Zwei Tabellen vereinen, Anzeige des Datenursprungs über Spaltenkennziffer (L|K)

```php title='union.php'
<table>

  <?php
  include("../../resources/database/dbConnect.php");

  $sql = "SELECT Firma, 'L', Ort 
        FROM lieferanten 
        WHERE Land='Deutschland' 
      UNION 
        SELECT Firma, 'K', Ort 
        FROM kunden 
        WHERE Land='Deutschland'
      ORDER BY 1;";


  $liste = mysqli_query($con, $sql);
  $zeile = mysqli_fetch_assoc($liste);
  echo "<tr>";
  foreach ($zeile as $i => $wert) {
    echo "<th>$i</th>";
  }
  echo "</tr>";

  $liste = mysqli_query($con, $sql);

  while ($zeile = mysqli_fetch_assoc($liste)) {
    echo "<tr>";
    foreach ($zeile as $wert) {
      echo "<td>$wert</td>";
    }
    echo "</tr>";
  }

  echo "<br>" . mysqli_num_rows($liste) . " Datensätze ausgegeben."
    ?>

</table>
```

#### Foreignkey - Fremdschlüssel erstellen

```php title='createForeignKey.php'
include("../../resources/database/dbConnect.php");

$sql = "ALTER TABLE bestellungen 
        ADD COLUMN personalNR int;";
mysqli_query($con, $sql);

$sql = "ALTER TABLE bestellungen 
        ADD CONSTRAINT FKPersonal 
        FOREIGN KEY (personalNr) 
        REFERENCES personal(PersonalID);";
mysqli_query($con, $sql);
```

#### CREATE TABLE 

```php title='createTable.php'
<table>

  <?php

  include("../../resources/database/dbConnect.php");

  $sql = "CREATE TABLE IF NOT EXISTS personal
        (
          PersonalID int AUTO_INCREMENT PRIMARY KEY,
          Anrede varchar(10),
          Nachname varchar(20),
          Vorname varchar(20),
          Plz varchar(5),
          Ort varchar(30),
          Gehalt float
        ) 
        Engine=InnoDB;";

  mysqli_query($con, $sql);

  $sql = "INSERT INTO personal
        (
          Anrede,Vorname,Nachname,PLZ, Ort, Gehalt
          ) 
        VALUES
        (
          'Herr','Ahmad','Buzzer','20097','Hamburg',2500
        );";
  mysqli_query($con, $sql);

  $sql = "INSERT INTO personal
        (
          Anrede,Vorname,Nachname,PLZ, Ort, Gehalt
        ) 
        VALUES
        (
          'Frau','Ute','Schmidt','22085','Hamburg',2500
        );";
  mysqli_query($con, $sql);

  // Anzeige
  $sql = "SELECT * FROM personal;";
  $liste = mysqli_query($con, $sql);

  // COLUMN Header
  $zeile = mysqli_fetch_assoc($liste);
  echo "<tr>";
  foreach ($zeile as $key => $value) {
    echo "<th>$key</th>";
  }
  echo "</tr>";

  // Neues Einlesen aller Daten der Abfrage
  $liste = mysqli_query($con, $sql);

  while ($zeile = mysqli_fetch_assoc($liste)) {
    echo "<tr>";
    foreach ($zeile as $value) {
      echo "<td>$value</td>";
    }
    echo "</tr>";
  }
  ?>

</table>
```

#### Aufgaben Datenbanken I

##### 1

Erinnern Sie sich an die Postleitzahlendatei (stadtneu.txt), die Sie mit rein fünftselligen PLZ neu erstellt haben? Diese Datei importieren Sie bitte in unsere Nordwind-DB.
Dazu müssen Sie zuerst allerdings eine passende Tabelle erstellen, natürlich mit
"CREATE TABLE" per PHP-Skript!

```php
include("../../../resources/database/dbConnect.php");

$sql = "CREATE TABLE IF NOT EXISTS orte
        (
          ID int AUTO_INCREMENT PRIMARY KEY,
          Plz varchar(5),
          Ort varchar(20),
          Kreisschluessel int(5),
          Kreis varchar(20),
          Laenderschluessel int(2),
          Bundesland varchar(20)
        ) Engine=InnoDB;";

mysqli_query($con, $sql);

$datei = file("../../../resources/txtFile/stadtNeu.txt");

array_shift($datei);

$i = 0;
foreach ($datei as $value) {
  $zeile = explode(";", $value);
  $sql = "INSERT INTO orte 
          (
            plz, 
            Ort, 
            Kreisschluessel, 
            Kreis, 
            Laenderschluessel,
            Bundesland
          )
          VALUES  
          (
          '$zeile[0]',
          '$zeile[1]',
          $zeile[2],
          '$zeile[3]',
          $zeile[4],
          '$zeile[5]'
          )";
  mysqli_query($con, $sql);
  $i++;
}
echo $i . " Datensätze importiert!";
```

##### 2

Erstellen Sie die Datei "umsatz.txt", die die Umsätze <b>aller</b> Kunden enthält.

```php
include("../../../resources/database/dbConnect.php");
$sql = "SELECT Firma, sum(Anzahl * Einzelpreis)
        FROM kunden 
          LEFT JOIN bestellungen
            ON KundenId = KundenNr
          LEFT JOIN bestellungendetails 
            ON BestellId = BestellNr
          LEFT JOIN artikel
            ON ArtikelId = ArtikelNr
        GROUP BY Firma";

$result = mysqli_query($con, $sql);
$zeile = mysqli_fetch_assoc($result);

// $datei = fopen("umsatz.txt", "w");
$datei = fopen("../../../resources/txtFile/umsatz.txt", "w");

$text = "";
while ($zeile = mysqli_fetch_assoc($result)) {
  foreach ($zeile as $value) {
    $text .= $value . "#";
  }
  $text = rtrim($text, "#") . "\n";
  fwrite($datei, $text);
}

fclose($datei);
$con->close();
```

##### 3

Es sollen die Adressen (Firma, Straße, Plz, Ort, Land) aller Kunden aus Brasilien in die Datei "br.txt" exportiert werden. Trennzeichen zwischen den Feldern soll
die Raute ("#") sein.

```php
include("../../../resources/database/dbConnect.php");

$sql = "SELECT Firma, Straße, Plz, Ort, Land
        FROM kunden 
        WHERE LAND='Brasilien'
        ";

$result = mysqli_query($con, $sql);
$zeile = mysqli_fetch_assoc($result);

$datei = fopen("../../../resources/txtFile/br.txt", "w");

$text = "";
while ($zeile = mysqli_fetch_assoc($result)) {
  foreach ($zeile as $value) {
    $text .= $value . "#";
  }
  $text = trim($text, "#") . "\n";
  fwrite($datei, $text);
}
```

##### 4 & 5

<ol  start="4">
<li>
  Die externen Links in einer Webseite sollen dynamisch aus einer DB-Tabelle
  erstellt werden. Dazu wird eine Datenbanktabelle mit 2 Text-Feldern erstellt: Text
  varchar(30), Ziel varchar(200). <br>
  Mein Haus#http://www.neuschwanstein.de/#ggf. Title <br>
  Mein Garten#http://www.plantenunblomen.de/#Title ... <br>
  Mein Auto#http://www.maybach.de/#Title ... <br>
</li>
<li>
  Zur vorigen Aufgabe erstellen Sie natürlich eine Webseite, die die Links dann
  anzeigt ...
</li>
</ol>

```php
include("../../../resources/database/dbConnect.php");

$sql = "CREATE TABLE IF NOT EXISTS links 
          (
            ID int AUTO_INCREMENT PRIMARY KEY , 
            Text varchar(20),
            URL varchar(20)
          ) Engine=InnoDB;";

mysqli_query($con, $sql);

$datei = file("../../../resources/txtFile/links.txt");

foreach ($datei as $value) {
  $daten = explode("#", $value);
  $beschreibung = $daten[0];
  $url = $daten[1];
  $sql = "INSERT INTO links
          (
            Text, URL
          )
          VALUES 
          (
            '$beschreibung',
            '$url'
          )
          ";
  mysqli_query($con, $sql);
}

$sql = "SELECT * 
        FROM links";
$result = mysqli_query($con, $sql);
$zeile = mysqli_fetch_assoc($result);

while ($zeile = mysqli_fetch_assoc($result)) {
  echo '<a href="' . $zeile["URL"] . '">' . $zeile["Text"] . '</a><br>';
}
```

### 19.12

#### Übungsklausur

##### 3

<ul>
Gegeben ist folgender Code <br>
$versuch [2] = 69; <br>
$versuch [7] = 42; <br>
$versuch [44] = 47. 11; <br>
$versuch [12] = date ("Y"); <br>
$versuch [9] = 26; <br>
<li>Ist ein solches Array in PHP gültig?</li>
<li>Geben Sie alle Elemente in einer "Bullet List" aus!</li>
<li>
  Geben Sie das Array (Schlüssel und Werte) nach Inhalt numerisch sortiert
  als HTML-Tabelle aus.
</li>
</ul>

```php
$versuch[2] = 69;
$versuch[7] = 42;
$versuch[44] = 47.11;
$versuch[12] = date("Y");
$versuch[9] = 26;

echo "<ul>";
foreach ($versuch as $value) {
  echo "<li>$value</li>\n";
}
echo "</ul>";

asort($versuch);

echo "<table><tr><th>Key</th><th>Value</th></tr>";
foreach ($versuch as $x => $value) {
  echo "<tr><td>$x</td><td>$value</td></tr>\n";
}
echo "</table>";
```

##### 4

<ul>
<li>
  Was ist falsch am Funktionsaufruf
  $huch()=69; ?
</li>
<li>
Ist folgende Anweisungsfolge erlaubt? <br>
$hach=69; <br>
$hach=true; <br>
$hach = "7";
</li>
<li>Was steht auf dem Bildschirm nach folgender Anweisung: <br>
(Wert von $hach aus der vorigen Aufgabe!) <br> <br>
echo "Wert von $hach: " ; <br>
echo ' $hach Euro' ;</li>
</ul>

```php
$hach = "7";
echo "Wert von $hach: <br>";
echo '$hach Euro';
```

##### 5

Erstellen Sie NUR eine Funktion "km( )" die Schritte in Kilometer umrechnet. Die Anzahl der Schritte ist der erste Übergabeparameter, 
optional kann ein zweiter Wert mit der Schrittlänge (in cm) an die Funktion übergeben werden. <br>
Wird kein zweiter Wert übergeben, ist mit einer Default-Schrittlänge von 75 cm zu rechnen!

```php
// Variante 1
function km(...$a)
{
  if (count($a) == 1)
    return ($a[0] * 75 / 100000) . " km";
  else if (count($a) == 2)
    return ($a[0] * $a[1] / 100000) . " km";
}

// Variante 2
function km2()
{
  if (func_num_args() == 1)
    return (func_get_arg(0) * 75 / 100000) . " km";
  else if (func_num_args() == 2)
    return (func_get_arg(0) * func_get_arg(1) / 100000) . " km";
}

// Variante 3
function km3($schritte, $weite = 75)
{
  return ($schritte * $weite / 100000) . " km";
}

echo km(10000);
```

##### 6

Erstellen Sie eine Funktion "vol ( ) "
die aus 1 oder 3 übergebenen Werten das Volumen eines Quaders berechnet. <br> (Formel für das Volumen: V = a * b * c) <br><br>
Wird dabei nur 1 Wert übergeben, ist von einem Würfel auszugehen,
bei 3 Werten sei es ein Quader. <br><br>
Werden keiner, zwei oder mehr als drei Werte übergeben, ist *Fehler" zurückzugeben,
sonst das korrekte Ergebnis. <br> Eine zusätzliche Prüfung auf Übergabe von 0, negativen Werten
oder gar Texten ist nicht verlangt. <br><br>
<b>Aufrufbeispiele:</b>

```php
$z = vol($_GET["a"], $_GET["b"], $_GET["c"]);
echo vol($y);
echo vol(); ➡️ liefert "#Fehler"</li>
$x = vol(1, $e); ➡️ liefert "#Fehler"</li>
```

```php
function vol(...$a)
{
  if (count($a) == 1)
    return $a[0] * $a[0] * $a[0];
  else if (count($a) == 3)
    return $a[0] * $a[1] * $a[2];
  else
    return "#Fehler";
}

echo vol(3, 5, 4, 55) . "<br>";
echo vol(3, 5, 4) . "<br>";
echo vol(3);
```

##### 7

Füllen Sie ein ARRAY mit einigen Autokennzeichen und Städtenamen:
  B => Berlin
  HH => Hansestadt Hamburg
  HWI => Hansestadt Wismar
  MD => Magdeburg
  S => Stuttgart
  HRO => Hansestadt Rostock
  M => München
  MZ => Mainz
<ul>
<li>
  Geben Sie die Städtenamen alphabetisch aufsteigend sortiert wieder aus,
  je Stadt 1 Zeile. (als HTML "Bullet-List" oder nummerierte Liste)
</li>
<li>
  Geben Sie Autokennzeichen und Städtenamen nach Kennzeichen sortiert in einer kleinen HTML-Tabelle (mit 2 Spalten logischerweise) wieder aus.
</li>
<li>
  Exportieren Sie die Daten aus der Datei in eine sequentielle Datei "Kfz.txt",
  Feldtrenner soll die Raute("#") sein.
</li>
<li>
  <b>Extras:</b><br>
  Suchen Sie den Ort "Hamburg" (was sonst?!?) in dem Array, im Erfolgsfalle soll
  "Hummel Hummel!" ausgeben werden, ansonsten "So\'n Schiet aber ook!"
</li>
</ul>

```php
$kennz = array(
  "B" => "Berlin",
  "S" => "Stuttgart",
  "HH" => "Hansestadt Hamburg",
  "HRO" => "Hansestadt Rostock",
  "HWI" => "Hansestadt Wismar",
  "M" => "Muenchen",
  "MD" => "Magdeburg",
  "MZ" => "Mainz"
);

asort($kennz);
$kfz = fopen("../../resources/txtFile/kfz.txt", "w");
foreach ($kennz as $i => $x) {
  fwrite($kfz, "$i#$x\n");
}
fclose($kfz);

ksort($kennz);
echo "<ul>";
foreach ($kennz as $value) {
  echo "<li>$value</li>";
  $gesucht = $value == "Hamburg" ? "Hummel Hummel!" : "So\'n Schiet aber ook!";
}
echo "</ul><hr>";

echo $gesucht . "<hr>";

echo "<table> <tr><th>Kennzeichen</th><th>Ort</th></tr> ";
foreach ($kennz as $key => $value) {
  echo "<tr><td>$key</td><td>$value</td></tr>\n";
}
echo "</table>";
```

### 20.12

#### 4

Erstellen Sie eine PHP-Funktion "divrest(a, b)",
die das gute alte Teilen mit Rest, z.B. 14 : 3 = 4 Rest 2, realisiert. <br>

Dazu werden zwei Zahlen übergeben und die Funktion gibt einen String als Ergebnis zurück. Eine Prüfung auf negative Werte ist nicht verlangt, aber bei Division durch 0 ist "#DivByZero" zurückzugeben! <br>

Beispiele: <br>
$erg = divrest(12, 5);	➡️ 2 Rest 2 <br>
$erg = divrest(12, 4);	➡️ 3 Rest 0 <br>
echo divrest(8, 9);	➡️ 0 Rest 9 <br>
echo divrest(888,0);	➡️	"#DivByZero"

```php
function divrest($a, $b)
{
  $r = "";

  if ($b == 0) {
    return "#DivByZero";
  } else {
    $r = $a % $b;
    $zahl = ($a - $r) / $b;
    return $zahl . " Rest " . $r;
  }

}
```

##### 6

Erstellen Sie NUR eine Funktion "km( )", die Schritte in Kilometer umrechnet. Die Anzahl der Schritte ist der erste Übergabeparameter, optional kann ein zweiter Wert mit der Schrittlänge (in Meter) an die Funktion übergeben werden. <br>

Wird kein zweiter Wert übergeben, ist mit einer Default-Schrittlänge von 0,8 m zu rechnen! Weitere Fehlerprüfungen sind nicht verlangt.

```php
function km($a, $b = 0.8)
{
  return $a * $b / 1000;
}
```

##### 7

Es wurden in einem HTML-Formlar beliebig viele Zahlen, durch Komma getrennt, eingegeben. Diese Werte werden über das Formularfeld "werte" an Ihr PHP-Programm übergeben. <br> <br>

Beispiel:	$_GET["werte"] enthält "8,14,37,4.571,964,47,28.5" <br><br>

Erstellen Sie je ein PHP-Skript-Fragment, das <br><br>

a)	das Feld $_GET["werte"] in ein neues Array $arrZ überträgt <br> <br>

b)	Den größten Wert, den kleinsten Wert und den Durchschnitt der Zahlen aus dem Array $ arrZ ermittelt und alle drei Werte ausgibt. <br>
(Betrachten Sie das Array als gefüllt, wenn Sie Teil 1 nicht gemacht haben!) <br> <br>

c)	Das neue Array $arrZ numerisch aufsteigend sortiert
und in einer "Bullet List"(je Element ein Aufzählungspunkt) wieder ausgibt <br>
(Betrachten Sie das Array als gefüllt, wenn Sie Teil 1 nicht gemacht haben!) <br><br>

Hinweis:	
- Die Aufgabenteile können auch unabhängig voneinander gelöst werden!
- Fehlerprüfungen sind nicht gefordert. 

```php
// $arrWerte["werte"] ➡️ $_GET['werte]
$arrWerte["werte"] = "8,14,37,4.571,964,47,28.5";

// a
$arrZ = explode(",", $arrWerte["werte"]);

// b
echo "Minimum: " . min($arrZ) . "<br>";
echo "Maximum: " . max($arrZ) . "<br>";
echo "Durchschnitt: " . array_sum($arrZ) / count($arrZ) . "<br>";
?>

<!-- c -->
<ul>
  <?php
  sort($arrZ);
  for ($i = 0; $i < count($arrZ); $i++) {
    echo "<li>" . $arrZ[$i] . "</li>";
  }
  ?>
</ul>
```

##### 8

Wir möchten Kunden und Freunde unserer Unternehmung in Zukunft mit einem monatlichen Newsletter beglücken. Dazu können die User sich bei uns per HTML-Formular eintragen. <br> <br>

Die Daten sollen zeilenweise in die sequentielle Textdatei "adress.csv" eingetragen werden, je Eintrag eine Zeile, Feldseparator soll die Raute ("#") sein. Neben Name und Email soll auto- matisch auch das Eintragsdatum in der Form "tt.mm.jj – hh:mm" und die IP-Adresse gespei- chert werden. Erstellen Sie den dazugehörigen Code für die Datei "eintragen.php". <br><br>

Hilfe: Die IP der User liegt in $_SERVER["REMOTE_ADDR"]

```php
<form action="eintragen.php" method="post"> Ihr Vorname:<br>
  <input type="Text" name="usr" size="20" required><br>
  Ihre Emailadresse:<br>
  <input type="Text" name="ml" size="20" required><br>
  <input type="Submit" value="Für den Newsletter eintragen">
</form>

<?php
$datei = fopen("adress.csv", "a");
$name = $_POST["usr"];
$mail = $_POST["ml"];
$datum = date("d.m.Y – H:i");
$ip = $_SERVER["REMOTE_ADDR"];

$zeile = $name . "#" . $mail . "#" . $datum . "#" . $ip . "\n";
fwrite($datei, $zeile);
fclose($datei);
?>
```

##### 9

Gegeben ist das folgende assoziative PHP-Array <br><br>

a)	Erstellen Sie den PHP-Code zur Sortierung des Arrays $kurz
nach den Indexwerten (aufsteigend)
und <br><br>
b)	Erstellen Sie den PHP-Code zur Ausgabe der Indexe und Werte untereinander in einer einfachen HTML-Bullet-List aus. <br> <br>

c)	Das Array wird mit dem Befehl "sort($kurz);" sortiert. <br>

<b>Geben Sie Schlüssel und Inhalte an! (Hier ist kein Code verlangt!!!)</b>

```php
<?php
$kurz = array(
  "de" => "Deutschland",
  "tv" => "Tuvalu",
  "ch" => "Schweiz",
  "hu" => "Ungarn",
  "es" => "Spanien",
  "uk" => "Großbritannien",
  "lv" => "Lettland"
);

// a
ksort($kurz);
?>
<!-- b -->
<ul>
  <?php
  foreach ($kurz as $key => $value) {
    echo "<li>Index: " . $key . " Wert: " . $value . "</li>";
  }
  ?>
</ul>

<!-- c 
  0 ➡️ Deutschland
  1 ➡️ Großbritannien
  2 ➡️ Lettland
  3 ➡️ Schweiz
  4 ➡️ Spanien
  5 ➡️ Tuvalu
  6 ➡️ Ungarn
-->
```
