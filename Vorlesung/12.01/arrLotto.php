<?php
$arr2 = range(1, 49);
shuffle($arr2);

for ($i = 0; $i < 6; $i++) {
  $arrHilf[$i] = $arr2[$i];
}

sort($arrHilf);

for ($i = 0; $i < 6; $i++) {
  echo "$arrHilf[$i]<br>";
}
