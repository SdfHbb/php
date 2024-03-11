<?php
// 1 -------------------------
function euro($dm)
{
  return round($dm / 1.95583, 2);
}
// echo euro(5)."&euro;";

// 2 -------------------------
function fakul($z)
{
  $erg = 1;
  while ($z > 0) {
    $erg = $erg * $z;
    $z--;
  }
  return $erg;
}
// echo fakul(6);

// 3 -------------------------
function teilen($divid, $divis)
{
  //$erg=(int)($divid/$divis);
  //$erg=floor($divid/$divis);
  if ($divis != 0) {
    $rest = $divid % $divis;
    $erg = ($divid - $rest) / $divis;
    return "$erg, Rest $rest";
  } else
    return "Division durch 0 nicht erlaubt!";
}
//echo teilen(12,0);

// 4 -------------------------
function pruef1($zahl)
{
  $istGerade = $zahl % 2 == 0;
  return $istGerade;
}

function pruef2($zahl)
{
  if ($zahl % 2 == 0)
    return true;
  else
    return false;
}

//  if(pruef2(17))
//    echo "Gerade Zahl";
//  else
//    echo "Ungerade Zahl";

// 5 -------------------------
function test_ipv4_1()
{
  return rand(0, 255) . "." . rand(0, 255) . "." . rand(0, 255) . "." . rand(0, 255);
}
function test_ipv4_2()
{
  $o1 = rand(0, 255);
  $o2 = rand(0, 255);
  $o3 = rand(0, 255);
  $o4 = rand(0, 255);

  return "$o1.$o2.$o3.$o4";
}
//echo test_ipv4_2();

// 6 -------------------------
function WorteZaehlen($satz)
{
  return count(explode(" ", $satz));
}

//echo WorteZaehlen("Hier kommt Kurt mit dem Gurt.")." W&ouml;rter."

// 8 -------------------------
//  function intervall($a,$b){
//     return array_sum(range($a,$b));
//  }

function intervall($a, $b)
{
  $summe = 0;
  for ($a; $a <= $b; $a++) {
    $summe = $summe + $a;
  }
  return $summe;
}

$x = 4;
$y = 5;
//echo "Intervall von $x bis $y ist ".intervall($x,$y);

// 9 -------------------------
//Aufruf: umrechnen(25)
//R�ckgabe: "25 ist bin�r 11001, oktal 31 und hexadezimal 19"

function umrechnen($x)
{
  $bin = decbin($x);
  $hex = dechex($x);
  $okt = decoct($x);

  return "$x ist<br>bin&aumlr $bin,<br>oktal $okt und<br>hexadezimal " . strtoupper($hex);
}

//echo umrechnen(rand(1,1000));

// 10 -------------------------

function schaltjahr($j)
{
  if (($j % 4 == 0 && $j % 100 != 0) || $j % 400 == 0)
    return true;
  else
    return false;
}

for ($i = 1; $i <= 10; $i++) {
  $jahr = rand(1800, 2200);
  echo "$jahr: ";
  if (schaltjahr($jahr))
    echo "ein";
  else
    echo "kein";
  echo " Schaltjahr<br>";
}
