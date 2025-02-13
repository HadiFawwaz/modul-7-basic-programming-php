<?php
echo "<hr>";
echo "<center><h3>Tugas</h3></center>";
echo "<hr> <center>";

$siswas = [
["nama" => "Radit", "nilai"=>85],
["nama" => "Raihan", "nilai"=>0],
["nama" => "Diwa", "nilai"=>5],
["nama" => "Bima", "nilai"=>72],
["nama" => "Aoddi", "nilai"=>90],
];

echo "<center><h2>Daftar Nilai Siswa</h2></center>";
echo '<table border="1" cellpadding = "10" cellspacing="0">';
echo '<tr>
<th>Nama</th>
<th>Nilai</th>
<th>Status</th>
</tr>';

foreach ($siswas as $siswa) {
    echo"<tr>";
    echo "<td>".$siswa['nama']."</td>";
    echo "<td>".$siswa['nilai']."</td>";
    
    if ($siswa["nilai"] >= 70) {
        $status = "<span style= 'color:green;'>Lulus</span>";
    }elseif ($siswa["nilai"] >= 50) {
            $status = "<span style= 'color:orange;'>Remedial</span>";
    }else {
        $status = "<span style= 'color:red;'>Tidak Lulus</span>";
    }
        echo"<td>" .$status. "</td>";
        echo "</tr>";
}


echo '</table>';