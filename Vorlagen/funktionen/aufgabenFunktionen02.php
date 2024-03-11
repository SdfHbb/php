<?php
/*
// -- 1 -------------------------------
function array_avg(...$values) {
    $count = count($values);
    if ($count===0){
        return 0;
    }
    $sum = array_sum($values);
    return $sum/$count;
}
*/

function array_avg(...$values)
{
  if (count($values) == 0)
    return 0;
  else
    return array_sum($values) / count($values);
}

//echo array_avg(3,4,77,12);

// -- 2 -------------------------------
/*
 function datum(){
   $datum=mktime(0,0,0,rand(1,12), rand(1,31), rand(1900,2100));
   return date("d.m.Y",$datum);
  }
*/
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

//echo datum();

// -- 3 -------------------------------
/*
 function uhrzeit(){
  $std=rand(0,23);
  $min=rand(0,59);
  $std=$std<10?"0".$std:$std;
  $min=$min<10?"0".$min:$min;
  return "$std:$min";
 }
*/
function uhrzeit()
{
  return date("H:i", mktime(rand(0, 23), rand(0, 59)));
}

//echo uhrzeit();

// -- 4 -------------------------------
function array_numeric($arr)
{
  $num = 0;
  foreach ($arr as $data) {
    if (is_numeric($data))
      $num++;
  }
  if ($num == count($arr))
    return true;
  else
    return false;
}

$x = array(8, 9, 3, 5, 14, 965);
//echo array_numeric($x);


// -- 5 -------------------------------
/*
function caesar($text, $key)
        {
            $text = str_split($text);
            $crypt="";
            foreach ($text as $i => $data)
            {
                $asc = ord($data);
                if($asc >= 65 and $asc <= 90)
                {
                    $crypt .= chr(((($asc - 65) + $key) % 26) + 65);
                }
                else if ( $asc >= 97 and $asc <= 122)
                {
                    $crypt .= chr(((($asc - 97) + $key) % 26) + 97);
                }
                else
                {
                    $crypt .= chr($asc);
                }

            }
            return $crypt;
        }
*/
function caesar($text, $key)
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


echo caesar("uvwxyz", 10);
