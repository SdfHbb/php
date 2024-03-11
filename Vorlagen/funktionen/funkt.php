<?php
function datum()
{
  $datum = mktime(0, 0, 0, rand(1, 12), rand(1, 31), rand(1900, 2100));
  return date("d.m.Y", $datum);
}

function uhrzeit()
{
  return date("H:i", mktime(rand(0, 23), rand(0, 59)));
}

function test_ipv4_1()
{
  return rand(0, 255) . "." . rand(0, 255) . "." . rand(0, 255) . "." . rand(0, 255);
}

function satz()
{
  $s = "";
  $AnzW = rand(3, 8);
  for ($i = 0; $i < $AnzW; $i++)
    $s = $s . tuwas() . " ";
  return $s;
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
