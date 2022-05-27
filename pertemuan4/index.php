<!-- Constructor -->

<?php 

// Apa itu Constructor

/*
Adalah sebuah method yang khusus yang ada dalam sebuah Class. Disebut spesial karena constructor adalah method yang otomatis dijalankan ketika kita membuat objek.

Kita butuh constructor karena:
1. Jika kita manual dan objek kita banyak, kita perlu satu satu mengirimkan data ke property yang membuat program kita tidak efektif. Dengan constructor kita tinggal memasukkan data penting saja ke sebuah parameter jadi tidak perlu memanggil dulu objek, property baru diisi value.

Syntax : __construct() {}

class Produk {
    // cari data-data yang sama-sama dimiliki oleh komik dan game
    // property
    public $judul = 'judul', 
           $penulis = 'penulis',
           $penerbit = 'penerbit',
           $harga = 0;
    
    // constructor : class ini akan otomatis dijalankan setiap membuat objek
    public function __construct() {
        echo "Hello World";
    }
    
    
    // method
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
    
}

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

Hello WorldHello WorldMasashi Kishimoto, Shonen Jump
Neil Druckmann, Sony Computer

Hello World muncul dua kali karena kita membuat dua objek yang menggunakan class Produk

Constructor ini akan menerima data langsung lewat parameter.

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

Naruto, Masashi Kishimoto, Shonen Jump, 30000
Uncharted, Neil Druckmann, Sony Computer, 250000
Resident Evil, penulis, penerbit, harga
*/


?>