<!-- Studi Kasus : Jual Produk yaitu Game dan Komik -->
<!-- WITHOUT INHERITANCE -->
<?php 

// Parent Class
class Produk {
   
    public $judul,  
           $penulis,
           $penerbit,
           $harga;
           
    
    // karena construct tidak bisa membedakan mana produk yang komik atau game, diberi property tipe
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

    // method ini tidak selengkap dengan method yang di child class. Solusinya, kita overiding.
    function getInfoDetail() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}





// Child Class
// untuk overriding, gunakan parent lalu diconcate.
class Komik extends Produk{
    public $halaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $halaman = 0) {
        // overriding construct dari parent
        parent::__construct($judul, $penulis, $penerbit , $harga);
        // property baru diisi manual saja
        $this->halaman=$halaman;

    }

    function getInfoDetail() {
        $str = "Komik : ". parent::getInfoDetail() . " - $this->halaman halaman";
        return $str;
    }
}






// Child Class
class Game extends Produk{
    public $time;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $time = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->time=$time;
    }

    public function getInfoDetail() {
        $str = "Game : ". parent::getInfoDetail() ." - $this->time jam";
        return $str;
    }

}

$komik = new Komik("Naruto", "Masashi Kishimoto","Shonen Jump", 30000, 100);
$game = new Game("Resident Evil 4", "Shinji Mikami", "Capcom", 250000, 50);

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