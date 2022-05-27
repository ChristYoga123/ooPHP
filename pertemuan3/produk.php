<!-- Studi Kasus : Jual Produk yaitu Game dan Komik -->

<?php 
class Produk {
    // cari data-data yang sama-sama dimiliki oleh komik dan game
    // property
    public $judul = 'judul', 
           $penulis = 'penulis',
           $penerbit = 'penerbit',
           $harga = 0;
    
    // method
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
    
}

// // komik
// $produk1 = new Produk();
// $produk1->judul="Naruto";
// // game
// $produk2 = new Produk();
// $produk2->judul='Uncharted';

// timpa nilai default
// KOMIK
$produk3 = new Produk();
$produk3->judul='Naruto';
$produk3->penulis='Masashi Kishimoto';
$produk3->penerbit='Shonen Jump';
$produk3->harga=30000;


// timpa nilai default
// GAME
$produk4 = new Produk();
$produk4->judul='Uncharted';
$produk4->penulis='Neil Druckmann';
$produk4->penerbit='Sony Computer';
$produk4->harga=250000;

echo $produk3->getLabel();
echo "<hr>";
echo $produk4->getLabel();
/*
object(Produk)#1 (4) { ["judul"]=> string(6) "Naruto" ["penulis"]=> string(17) "Masashi Kishimoto" ["penerbit"]=> string(11) "Shonen Jump" ["harga"]=> int(30000) }

Komik: Naruto, Masashi Kishimoto
*/

?>