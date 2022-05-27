<?php 

interface getInfoProduk {
    // function getInfoPrduk() dimasukkan ke dalam interface
    public function getInfoProduk();

}

// class Produk tidak bisa menjadi abstract karena jika kita ingat di pengertian abstract, minimal terdapat 1 abstract method. Faktanya, abstract method GetInfoProduk() sudah dipindah ke interface
abstract class Produk {
    // propertynya dibuat protected agar Child Class bisa mengakses property di abstract class
    protected $judul, $penulis, $penerbit, $harga, $diskon = 0;


    
    // method
    // method default construct agar jika ada objek, yang pertama objek itu lakukan adalah menjalankan fungsi tersebut di mana data-datanya langsung ditangkap dari parameter
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Karena property private jadi kita perlu function untuk mengubah property dan method harus di class yang mengandung property private

    /*SETTER & GETTER JUDUL*/
    public function setJudul($judul) {
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    /*SETTER & GETTER PENULIS*/
    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    /*SETTER & GETTER PENERBIT*/
    public function setPenerbit($penerbit) {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    /*SETTER & GETTER DISKON*/
    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getDiskon($diskon) {
        $this->diskon = $diskon;;
    }

    /*SETTER & GETTER HARGA*/
    // Karena ada diskon, nilai harga dipengaruhi diskon hehee
    public function setHarga($harga) {
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    // GET LABEL
    public function getLabel() {
        return "{$this->penulis}, {$this->penerbit}";
    }

    // GET INFO PRODUK diabstract dan implementasinya di getInfo
    // jadikan getInfoProduk sebagai interface
    // abstract public function getInfoProduk();
    // Jadikan getInfo sebagai abstract method agar classnya bisa diabstract juga. Implementasinya diletakkan di semua kelas turunannya

    abstract function getInfo();
}

// inheritance dari parent Produk
// Komik dapat mengakses property dan method di kelas Produk dan mengimplementasi interface getInfoProduk
class Komik extends Produk implements getInfoProduk {
    // Property
    public $halaman;

    // karena ingin menambahkan property baru untuk construct maka ditulis di parameter lalu agar tidak mengisi inputan lagi, bisa menggunakan inheritance parent::__construct agar setiap instansiasi Child secara otomatis menjalankan construct dan parameter yang dimasukkan akan langsung masuk ke construct parent
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0)
    {
        // data yang didapat di parameter ditangkap di sini dulu untuk merubah nilai di construnct lalu untuk halaman bisa dimasukkan setelah parent
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this-> halaman = $halaman;
    }

    public function getInfo() {
        {
            return "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        }
    }
    // Method
    // nama method harus sama agar sesuai dengan abstrak
    // karena di interface ada getInfoProduk dan di class Child ada getInfoProduk berarti sudah terimplementasi interfacenya
    public function getInfoProduk() {
        // ubah menjadi method baru karena kalo pake getInfoProduk, dia tidak bisa karena abstract
        return $this->getInfo()." - $this->halaman Halaman";
    }


}

// inheritance dari parent Produk
class Game extends Produk implements getInfoProduk {
    // Property
    public $time;

    // karena ingin menambahkan property baru untuk construct maka ditulis di parameter lalu agar tidak mengisi inputan lagi, bisa menggunakan inheritance parent::__construct agar setiap instansiasi Child secara otomatis menjalankan construct dan parameter yang dimasukkan akan langsung masuk ke construct parent
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $time = 0)
    {
        // data yang didapat di parameter ditangkap di sini dulu untuk merubah nilai di construnct lalu untuk halaman bisa dimasukkan setelah parent
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this-> time = $time;
    }

    public function getInfo()
    {
        return "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    }

    // Method
    // nama method harus sama agar sesuai dengan abstrak

    public function getInfoProduk() {
        // ubah menjadi method baru karena kalo pake getInfoProduk, dia tidak bisa karena abstract
        return $this->getInfo()." - $this->time Jam";
    }
}

// class cetak info lengkap semua produk tanpa mencetak satu-satu
class CetakInfoLengkap {
    // siapkan array kosong untuk menampung banyak data
    public $daftarProduk = [];

    // append array dengan nilai property pada objek
    public function tambahProduk(Produk $produk) {
        $this->daftarProduk[] = $produk;
    }


    public function cetakInfoDetail() {
        $str = "Daftar Produk : <br>";
        // lakukan perulangan untuk menampilkan produk di mana infonya diambil dari getInfoProduk
        foreach($this->daftarProduk as $daftar) {
            $str .= " - {$daftar->getInfoProduk()} <br>";
        }
        return $str;
    }

    public function getInfo() {
        
    }
}

$komik = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$game = new Game("Resident Evil 4", "Shinji Mikami", "Capcom", 250000, 7);

$cetak = new CetakInfoLengkap();
$cetak->tambahProduk($komik);
$cetak->tambahProduk($game);
echo $cetak->cetakInfoDetail();

// Kelemahan yang terjadi adalah, karena Produk sudah tidak abstract, otomatis bisa diinstance padahal Produk ini ambigu. Dan jika diberi absreact, akan error. Caranya adalah tambahkan satu abstract method di Produk

?>