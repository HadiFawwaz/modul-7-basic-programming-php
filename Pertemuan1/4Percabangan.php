<?php

$total_belanja = 1000;
$diskon = 500;

$hasil = $total_belanja - $diskon;
// jika belanja lebih dari 1000, maka selamat anda mendapatkan diskon 500
// selainnya anda : tidak dapat diskon

echo "total belanja anda $total_belanja";

if ($total_belanja >= 1000){
    echo " <br>selamat anda mendapatkan diskon Rp. 500";
    echo "<br>total belanja anda menjadi " . $hasil;
}else{
    echo "<br> anda tidak mendapatkan diskon";
}




echo "<br><br><br>Seragam";
echo "<hr>";
//===========================================

// senin = putih abu
// selasa = pramuka
// rabu = produktif
// kamis = batik 
// jumat = gamis

$hari = "Weekend";
if ($hari == "senin"){
    echo "menggunakan Seragam Putih Abu";
} else if ($hari == "selasa"){
    echo "menggunakan Seragam Pramuka";
} else if ($hari == "rabu"){
    echo "menggunakan Seragam Produktif";
} else if ($hari == "kamis"){
    echo "menggunakan Seragam Batik";
} else if ($hari == "jumat"){
    echo "menggunakan Seragam Gamis";
} else{
    echo "stay di rumah";
}