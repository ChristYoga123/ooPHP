<!-- Studi Kasus : Jual Produk yaitu Game dan Komik -->

<?php 
class Produk {
   
    public $judul,  
           $penulis,
           $penerbit,
           $harga;
    
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga") {
        
        $this-> judul = $judul;
        $this-> penulis = $penulis;
        $this-> penerbit = $penerbit;
        $this-> harga = $harga;
    }
    
    
    // method
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
    
}

// buat class untuk cetak info saha
class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

// KOMIK
$produk3 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);

// GAME
$produk4 = new Produk('Uncharted', 'Neil Druckmann', 'Sony Computer', 250000);

// buat variabel sebagai objek class cetakInfo trus untuk menjalankan methodnya dengan parameter sesuai dengan objek sebelumnya.
$cetakInfo = new CetakInfoProduk();

echo $produk3->getLabel();
echo "<hr>";
echo $produk4->getLabel();
echo "<hr>";
echo $cetakInfo -> cetak($produk3);

/*
Masashi Kishimoto, Shonen Jump
Neil Druckmann, Sony Computer
Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) = sesuai format $str
*/


?>