<?php
function test_ipv4()
{
  return rand(0, 255) . "." . rand(0, 255) . "." . rand(0, 255) . "." . rand(0, 255);
}

function uhrzeit()
{
  return date("H:i", mktime(rand(0, 23), rand(0, 59)));
}

function datum()
{
  do {
    $tag = rand(1, 31);
    $monat = rand(1, 12);
    $jahr = rand(1900, 2100);
  } while (checkdate($monat, $tag, $jahr) == false);
  $tag = $tag < 10 ? "0" . $tag : $tag;

  if ($monat < 10)
    $monat = "0" . $monat;

  return "$tag.$monat.$jahr";
}

function wort()
{
  $w = "";
  $max = rand(3, 12);
  for ($i = 1; $i <= $max; $i++) {
    $wert = rand(97, 122);
    $w = $w . chr($wert);
  }
  return $w;
}
?>