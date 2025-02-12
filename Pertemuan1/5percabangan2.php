<?php

// nilai rapot : harian, tugas, uts, uas
// rata2 nilai >=80
// predikat : lulus
// Grade A

// rata2 nilai >= 60
// predikat : lulus
// Grade B

// rata >50
// predikat perbaikan
// Grade C
$uts = 75;
$uas = 85;
$harian = 70;
$rata = ($uts + $uas + $harian) / 3;
if ($rata >= 70 && $rata <=79) {
    $status = "perbaikan";
    $grade = "C";
} else if ($rata >= 80 && $rata <=89) {
    $status = "Lulus";
    $grade = "B";
} else if ($rata >= 90 && $rata <=100) {
    $status = "Lulus";
    $grade = "A";
}
 else {

    $status = "-";
    $grade = "-";
}



echo "Nilai UTS : " .$uts. "<br>";
echo "Nilai Uas : " .$uas. "<br>";
echo "Nilai Harian :" .$harian. "<br>";

echo "Rata - Rata :" .$rata. "<br>";
echo "Grade :" .$grade. "<br>";
echo "Status :" .$status. "<br>";








