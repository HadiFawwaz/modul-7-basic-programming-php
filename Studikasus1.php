<?php
echo "Studi Kasus 1";
echo "<hr>";

$gaji = 12000000;
$Status = "kontrak";
//tetap
 if($gaji < 5000000) {
    $pajak = 5;
}
elseif ($gaji >= 5000000 &&  $gaji < 10000000) {
    $pajak = 10;
}
elseif ($gaji >= 10000000 &&  $gaji < 15000000) {
    $pajak = 15;
}
elseif ($gaji >= 15000000) {
    $pajak = 20;
}
//tetap end

if ($Status == "tetap") {
    $pajak = $pajak + 5;
} else {
    $pajak = $pajak + 0;
}

//variabel
$persen = $pajak / 100;
$potongan = $gaji * $persen;
//pajak selesai

echo "Gaji Bulanan : Rp. " . $gaji . "<br>";
echo "Status Pengawai : " . $Status . "<br>";
echo "persentase pajak :" . $pajak . "%<br>";
echo "Potongan Pajak : " . $potongan . "<br>";
echo "Gaji Bersih : Rp. " . $gaji - $potongan. "<br>";