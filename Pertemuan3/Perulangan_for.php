<?php


echo "<hr>";
echo "<center><h3>Perulangan Increment</h3></center>";
echo "<hr> <center>";


for ($x = 0; $x <= 10; $x++) {
    echo "Perulangan ke $x <br>";
  }

echo "<hr>";
echo "<h3>Perulangan Decrement</h3>";
echo "<hr>";
for ($i = 10; $i >= 0; $i--) {
  echo "Perulangan ke $i <br>";
}

echo "<hr>";
echo "<h3>Perulangan ngitung ke 100 lompat 10</h3>";
echo "<hr>";


for ($j = 0; $j <= 100; $j+=10) {
    echo "Perulangan ke $j <br>";
  }

echo "<hr>";
echo "<h3>Perulangan Perkalian</h3>";
echo "<hr>";

for ($a = 1; $a <=10 ; $a++) { 
     echo "10 x $a = " . 10 * $a . "<br> "  ;
  }
echo "<hr>";

echo "<h3>Perulangan Pembagian</h3>";
echo "<hr>";


for ($r = 100; $r >=10 ; $r-=10) { 
    echo "  $r / 10 = " . $r / 10 . "<br> "  ;
 }

echo "<hr>";
echo "<h3>Perulangan Perpangkatan</h3>";
echo "<hr>";

for ($z = 1; $z <=10 ; $z++) { 
    echo "  2 ^ $z = " . 2 ** $z  . "<br> "  ;
 }

 echo "<hr>";