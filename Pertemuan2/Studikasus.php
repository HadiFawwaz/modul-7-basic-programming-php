<?php

$jabatan = readline("Masukkan pilihan jabatan (1-3)");



echo "<hr>";
echo "<center><h3>Studi Kasus</h3></center>";
echo "<hr>";


$jabatan = "Manager";
$jam = 300;



if ($jabatan == 1) {
    $jabatan = "Manager";
}elseif ($jabatan == 2){
    $jabatan = "Supervisor";
}elseif ($jabatan == 3) {
    $jabatan = "Staff";
}

if ($jabatan == "Manager") {
    $gaji = 7000000;
}elseif ($jabatan == "SuperVisor") {
    $gaji = 5000000;
}elseif ($jabatan == "Staff") {
    $gaji = 3000000;
}

if($gaji <= 3000000) {
    $pajak = 5;
}
elseif ($gaji <= 5000000) {
    $pajak = 10;
}
elseif ($gaji > 5000000 ) {
    $pajak = 15;
} 
$jam_bonus = $jam - 200;

if ($jam_bonus >= 1) {
    $bonus = $jam_bonus * 20000;
    $ucapan_bonus = "Selamat Anda Mendapatkan Bonus Karena Jam Kerja Anda lebih $jam_bonus jam dari 200 jam kerja <br>";
} else{
    $bonus = 0;
    $ucapan_bonus = "Maaf Anda Belum Mendapatkan Bonus Karena Jam Kerja Anda Kurang Dari 200 Jam Kerja <br>";
}


$persenan = $pajak / 100;
$total_pajak = $gaji * $persenan;
$gaji_bersih = $gaji - $total_pajak + $bonus;

function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
 
};
echo "Jabatan : $jabatan <br>";
echo "Gaji Pokok : " . rupiah ($gaji). "<br>";
echo "Pajak : " . $pajak . "<br>";
echo "Total Pajak: " . rupiah ($total_pajak). "<br>";
// if ($bonus > 1) {
//     echo "Selamat Anda Mendapatkan Bonus Karena Jam Kerja Anda lebih $jam_bonus dari 200 jam kerja <br>";
// }else {
//     echo "Maaf Anda Belum Mendapatkan Bonus Karena Jam Kerja Anda Kurang Dari 200 Jam Kerja <br>";
// }
echo $ucapan_bonus;
echo "Bonus : " . rupiah ($bonus). "<br>";
echo "Gaji Bersih : " . rupiah ($gaji_bersih). "<br>";