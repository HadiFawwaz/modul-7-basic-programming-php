<?php





echo "<hr>";
echo "<center><h3>Operasi Bilangan</h3></center>";
echo "<hr>";
// readline() digunakan untuk membaca input dari pengguna $warna "merah";
$warna = "merah";


switch ($warna){
case "merah":
echo "Berhenti!\n";
break;
case "kuning":
echo "Siap-siap!\n";
break;
case "hijau":
echo "Jalan!\n";
break;
default:
echo "Warna tidak valid!\n";
}