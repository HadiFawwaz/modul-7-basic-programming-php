<?php  


$produk = ["Laptop", "Mouse", "Keyboard"];
 echo $produk[0]. "<br>";
 echo $produk[1]. "<br>";
 echo $produk[2]. "<br>";


 $buah = [
    "nama" => "Apel",
    "warna"=> "hijau",
    "rasa"=> "manis",
 ];

 echo "nama buah " . $buah ['nama']."<br>";
 echo "warna buah " . $buah ['warna'] . "<br>";
 echo "rasa buah " . $buah ['rasa'] . "<br>";

 $produk2 = [
    ["nama" => "Laptop", "Harga"=>7000000, "stok"=>10],
    ["nama" => "Mouse", "Harga"=>500000, "stok"=>5],
    ["nama" => "Monitor", "Harga"=>1500000, "stok"=>4],
 ];

 foreach ($produk2 as $p) {
    echo "<hr>", "Nama Produk: " . $p ["nama"] . "<br> Harga: Rp. " . number_format ($p 
     ['Harga'], 3, ",", ".") ."<br> stok: " .$p ["stok"]. "<br> <hr>";
 }

 function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,0,',','.');
	return $hasil_rupiah;
 
};