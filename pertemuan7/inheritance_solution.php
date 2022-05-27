<!-- Studi Kasus : Jual Produk yaitu Game dan Komik -->
<!-- WITHOUT INHERITANCE -->
<?php 

// Parent Class
class Produk {
   
    public $judul,  
           $penulis,
           $penerbit,
           $harga,
           $halaman,
           $time;
    
    // karena construct tidak bisa membedakan mana produk yang komik atau game, diberi property tipe
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $halaman = 0, $time = 0) {
        $this-> judul = $judul;
        $this-> penulis = $penulis;
        $this-> penerbit = $penerbit;
        $this-> harga = $harga;
        $this->halaman = $halaman;
        $this-> time = $time;
    }
    

    // method
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}





// Child Class
class Komik extends Produk{
    function getInfoDetail() {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - $this->halaman halaman";
        return $str;
    }
}






// Child Class
class Game extends Produk{
    public function getInfoDetail() {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - $this->time jam";
        return $str;
    }

}

$komik = new Komik("Naruto", "Masashi Kishimoto","Shonen Jump", 30000, 100, 0);
$game = new Game("Resident Evil 4", "Shinji Mikami", "Capcom", 250000, 0, 50);

echo $komik -> getInfoDetail();
echo "<br>";
echo $game -> getInfoDetail();
/*
Task:
Bikin program untuk output:
    Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 halaman
    Game : Uncharted | Neil Druckmann, Sony Computer (Rp. 250000) - 50 jam
*/


?>