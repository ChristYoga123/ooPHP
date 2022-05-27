<?php 

// /*Interface*/
// require_once "App/Produk/CetakInfo.php";
// /*Abstract*/
// require_once "App/Produk/Produk.php";
// /*Komik*/
// require_once "App/Produk/Komik.php";
// /*Game*/
// require_once "App/Produk/Game.php";
// /*Cetak Info*/
// require_once "App/Produk/CetakInfo.php";

// Merepotkan
require_once "App/init.php";

$komik = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$game = new Game("Resident Evil 4", "Shinji Mikami", "Capcom", 250000, 7);

$cetak = new CetakInfoLengkap();
$cetak->tambahProduk($komik);
$cetak->tambahProduk($game);
echo $cetak->cetakInfoDetail();

?>