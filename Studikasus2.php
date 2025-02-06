<?php

echo "Studi Kasus 2";
echo "<hr>";
$member = "gold";
$belanja = 1200000;

if ($belanja < 1000000) {
    $diskon = 0;
} 
elseif ($belanja >= 1000000 && $belanja < 1499999) {
    $diskon = 3;
} else if ($belanja >= 1500000) {
    $diskon = 5;
}


if ($member = "Non-Member") {
    $diskon = $diskon + 0;
} else if ($member = "silver" && $belanja < 1000000) {
  $diskon = $diskon + 5;
}