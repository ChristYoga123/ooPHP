<!-- Studi Kasus : Jual Produk yaitu Game dan Komik -->
<!-- WITHOUT INHERITANCE -->
<?php 

// Parent Class
class Produk {
   
    private $judul,  
           $penulis,
           $penerbit;
    
    // jika protected, function setDiskon bisa kita pindah ke child
    protected $diskon = 0;
    // dengan protected, nilai dari property tidak bisa diubah-ubah. Tetapi hasilnya error karena yang dapat mengakses adalah class utama serta turunannya jadi gunakan function untuk mencetak harga
    private $harga;

    // Dengan private, yang dapat mengakses hanya class yang memiliki property itu saja maka function getHarga sebelumnya yang ada di turunan class, dipindahkan ke class utama
    // private $harga;
           
    
    // karena construct tidak bisa membedakan mana produk yang komik atau game, diberi property tipe
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga") {
        $this-> judul = $judul;
        $this-> penulis = $penulis;
        $this-> penerbit = $penerbit;
        $this-> harga = $harga;

    }
    

    // method
    // GETTER
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    // method ini tidak selengkap dengan method yang di child class. Solusinya, kita overiding.
    function getInfoDetail() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    // Getter untuk judul
    public function getJudul() {
        return $this->judul;
    }

    // SETTER
    public function setJudul($judul) {
        if(!is_string($judul)) {
            throw new Exception("Judul harus string");
        } else {
            $this->judul=$judul;
        }
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

    // Karena private, dimatikan saja

    public function setDiskon($diskon) {
        $this->diskon=$diskon;
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

    // Karena private, dimatikan saja

    public function setDiskon($diskon) {
        $this->diskon=$diskon;
    }

}

$komik = new Komik("Naruto", "Masashi Kishimoto","Shonen Jump", 30000, 100);
$game = new Game("Resident Evil 4", "Shinji Mikami", "Capcom", 250000, 50);
// Dengan visibility public, kita bisa seenaknya mengubah nilai property sebuah object padahal yang kita mau, nilainya diambil dari parameter, bukan dirubah seenaknya diluar parameter

$komik->setDiskon(50);
$game->setDiskon(50);


echo $komik -> getInfoDetail();
echo "<br>";
echo $game -> getInfoDetail();
echo "<hr>";
echo $komik->getHarga();
echo "<hr>";
echo $game->getHarga();
echo "<hr>";
echo $komik->getJudul(); # error maka buat getter sama setter
echo "<hr>";
echo $game->getJudul();
echo "<hr>";
$komik->setJudul("Kimetsu No Yaiba");
$game->setJudul(0);
echo $komik->getJudul();
echo "<hr>";
echo $game->getJudul();
/*
Task:
Bikin program untuk output:
    Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 halaman
    Game : Uncharted | Neil Druckmann, Sony Computer (Rp. 250000) - 50 jam
*/


?>