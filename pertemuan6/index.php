<!-- INHERITANCE PT.1-->

<?php 

// Apa itu Inheritance

/*
Karakteristik:
1. Menciptakan hierarki antar kelas(Parent & Child)\
2. Child Class mewarisi semua properti dan method dari parentnya (YANG VISIBLE)
3. Child Class untuk memperluas(extends) fungsionalitas dari parentnya
*/

// Mengapa butuh Inheritance?

/*
class Produk {
   
    public $judul,  
           $penulis,
           $penerbit,
           $harga,
           $halaman,
           $waktu,
           $tipe;
    
    // karena construct tidak bisa membedakan mana produk yang komik atau game, diberi property tipe
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $halaman = 0, $waktu = 0, $tipe = "") {
        $this-> judul = $judul;
        $this-> penulis = $penulis;
        $this-> penerbit = $penerbit;
        $this-> harga = $harga;
        $this-> halaman = $halaman;
        $this-> waktu = $waktu;
        $this-> tipe = $tipe;
    }
    
    
    // method
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
    
    // kerepotan di bagian sini karena masih harus menambah parameter, pengkondisian dan lain-lain
    public function getLabelDetail() {
        
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - ";
        if($this->tipe == "Komik") {
            $str .= "{$this->halaman} halaman";
        } else if($this->tipe == "Game") {
            $str .= "{$this->waktu} jam";
        }
        return $str;
    }
}


// buat class untuk cetak info saja
class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


// Karena ada penambahan property, maka ditambahi di objek
// KOMIK
$produk3 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");

// GAME
$produk4 = new Produk('Uncharted', 'Neil Druckmann', 'Sony Computer', 250000, 0, 50, "Game");

// objek Cetak Info
$cetakInfo = new CetakInfoProduk();

echo $produk3->getLabelDetail();
echo "<br>";
echo $produk4->getLabelDetail();



/*
Task:
Bikin program untuk output:
    Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 halaman
    Game : Uncharted | Neil Druckmann, Sony Computer (Rp. 250000) - 50 jam
*/


?>