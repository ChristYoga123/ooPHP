<!-- Studi Kasus : Jual Produk yaitu Game dan Komik -->

<?php 
class Produk {
    // cari data-data yang sama-sama dimiliki oleh komik dan game
    // Setelah ada constructor, kita tidak perlu memasukkan data langsung ke property dan biarkan NULL tetapi nilai defaultnya langsung dimasukkan ke method construct
    // property
    public $judul,  
           $penulis,
           $penerbit,
           $harga;
    
    // constructor : class ini akan otomatis dijalankan setiap membuat objek
    // nilai default dimasukkan di parameter. Dengan ini, apabila kita mau mencetak objek tanpa parameter, tidak akan error
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga") {
        // nilai yang diterima lewat parameter digunakan untuk menimpa nilai di property
        $this-> judul = $judul;
        $this-> penulis = $penulis;
        $this-> penerbit = $penerbit;
        $this-> harga = $harga;
    }
    
    
    // method
    public function getLabel() {
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }
    
}

// timpa nilai default lewat parameter
// KOMIK
$produk3 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);



// timpa nilai default lewat parameter
// GAME
$produk4 = new Produk('Uncharted', 'Neil Druckmann', 'Sony Computer', 250000);

// Random Produk
$produk5 = new Produk("Resident Evil");

echo $produk3->getLabel();
echo "<hr>";
echo $produk4->getLabel();
echo "<hr>";
echo $produk5->getLabel();

/*
Naruto, Masashi Kishimoto, Shonen Jump, 30000
Uncharted, Neil Druckmann, Sony Computer, 250000
Resident Evil, penulis, penerbit, harga
*/
?>