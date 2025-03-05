<?php



$jabatan = "";
$jam_kerja = "";
$gaji = "";
$jam = "";
$pajak = "";

echo "<hr>";
echo "<center><h3>Studi Kasus</h3></center>";
echo "<hr>";
session_start();

$jam_bonus = $jam-200;

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

if(!isset($_SESSION["karyawan"])){ 

    $_SESSION["karyawan"] = [];

}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['jabatan'])&& isset($_POST['jam_kerja'])) {

        $jabatan = $_POST['jabatan'];
        $jam_kerja = $_POST['jam_kerja'];
    }
}

switch ($jabatan) {
    case 'Manager':
        $gaji = 7000000;        
        break;
    case 'Supervisor':
        $gaji = 5000000;
        break;
    case 'Staff':
        $gaji = 3000000;
        break;
}
$_SESSION["karyawan"][] = [
    "jabatan"=> $jabatan,
    "jam_kerja" => $jam_kerja,
];
function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
 
};
if (isset($_POST["hapus_data"])){
    session_destroy();
    session_start();

    $_SESSION["karyawan"] = [];
}

?>


<!DOCTYPE html>
<html lang="id">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penghitungan gaji</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>


<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card shadow-lg p-4">
                            <h2 class="text-center mb-4">Form Input Nilai siswa</h2>
                            <form method="POST">
                                <div class="mb-3">
                                    <label class="form-label">Jabatan</label>
                                    <select name="jabatan" id=""
        class="w-full p-2 w-100 border border-gray-300 rounded-md">
            <option value="Manager"> Manager </option>
            <option value="Supervisor"> Supervisor </option>
            <option value="Staff"> staff </option>
            
        </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Jam Kerja</label>
                                    <input type="number" name="jam_kerja" class="form-control" required>
                                    </div>
                                <button type="submit" class="btn btn-primary w-100">Hitung Nilai</button>
                            </form>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="card shadow-lg p-4">
                            <h2 class="text-center mb-4">Hasil Penilaian</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover text-center">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Jabatan</th>

                                            <th>Jam Kerja</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php foreach ($_SESSION["karyawan"] as $list): ?>
                                        <tr>
                                            <td><?= ($list["jabatan"]) ?></td>
                                            <td><?= ($list["jam_kerja"]) ?></td>
                                            
                                        </tr>
                                        <?php endforeach; ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <!-- Tombol untuk menghapus data sesi -->
                        <form method="POST">
                            <button type="submit" name="hapus_data" class="btn btn-danger w-100 mt-3">Hapus Semua Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
    