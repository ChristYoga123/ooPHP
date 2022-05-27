<?php 

// Tanpa Abstrak
// class Produk {
//     // property
//     private $judul, $penulis, $penerbit, $harga, $diskon = 0;


    
//     // method
//     // method default construct agar jika ada objek, yang pertama objek itu lakukan adalah menjalankan fungsi tersebut di mana data-datanya langsung ditulis sebagai parameter
//     public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
//     {
//         $this->judul = $judul;
//         $this->penulis = $penulis;
//         $this->penerbit = $penerbit;
//         $this->harga = $harga;
//     }

//     // Karena property private jadi kita perlu function untuk mengubah property dan method harus di class yang mengandung property private

//     /*SETTER & GETTER JUDUL*/
//     public function setJudul($judul) {
//         $this->judul = $judul;
//     }

//     public function getJudul() {
//         return $this->judul;
//     }

//     /*SETTER & GETTER PENULIS*/
//     public function setPenulis($penulis) {
//         $this->penulis = $penulis;
//     }

//     public function getPenulis() {
//         return $this->penulis;
//     }

//     /*SETTER & GETTER PENERBIT*/
//     public function setPenerbit($penerbit) {
//         $this->penerbit = $penerbit;
//     }

//     public function getPenerbit() {
//         return $this->penerbit;
//     }

//     /*SETTER & GETTER DISKON*/
//     public function setDiskon($diskon) {
//         $this->diskon = $diskon;
//     }

//     public function getDiskon($diskon) {
//         $this->diskon = $diskon;;
//     }

//     /*SETTER & GETTER HARGA*/
//     // Karena ada diskon, nilai harga dipengaruhi diskon hehee
//     public function setHarga($harga) {
//         $this->harga = $harga;
//     }

//     public function getHarga() {
//         return $this->harga - ($this->harga * $this->diskon / 100);
//     }

//     // GET LABEL
//     public function getLabel() {
//         return "{$this->penulis}, {$this->penerbit}";
//     }

//     // GET INFO PRODUK
//     public function getInfoProduk() {
//         return "{$this->judul} | {$this->getLabel()} (Rp. {$this->getHarga()})";
//     }
// }

// // inheritance dari parent Produk
// class Komik extends Produk {
//     // Property
//     public $halaman;

//     // karena ingin menambahkan property baru untuk construct maka ditulis di parameter lalu agar tidak mengisi inputan lagi, bisa menggunakan inheritance parent::__construct agar setiap instansiasi Child secara otomatis menjalankan construct dan parameter yang dimasukkan akan langsung masuk ke construct parent
//     public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0)
//     {
//         // data yang didapat di parameter ditangkap di sini dulu untuk merubah nilai di construnct lalu untuk halaman bisa dimasukkan setelah parent
//         parent::__construct($judul, $penulis, $penerbit, $harga);
//         $this-> halaman = $halaman;
//     }

//     // Method
//     public function getInfoProduk() {
//         return "{$this->getJudul()} | {$this->getLabel()} (Rp. {$this->getHarga()}) - $this->halaman Halaman";
//     }

// }

// // inheritance dari parent Produk
// class Game extends Produk {
//     // Property
//     public $time;

//     // karena ingin menambahkan property baru untuk construct maka ditulis di parameter lalu agar tidak mengisi inputan lagi, bisa menggunakan inheritance parent::__construct agar setiap instansiasi Child secara otomatis menjalankan construct dan parameter yang dimasukkan akan langsung masuk ke construct parent
//     public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $time = 0)
//     {
//         // data yang didapat di parameter ditangkap di sini dulu untuk merubah nilai di construnct lalu untuk halaman bisa dimasukkan setelah parent
//         parent::__construct($judul, $penulis, $penerbit, $harga);
//         $this-> time = $time;
//     }

//     // Method
//     public function getInfoProduk() {
//         return "{$this->getJudul()} | {$this->getLabel()} (Rp. {$this->getHarga()}) - $this->time Jam";
//     }
// }

// // class cetak info lengkap semua produk tanpa mencetak satu-satu
// class CetakInfoLengkap {
//     // siapkan array kosong untuk menampung banyak data
//     public $daftarProduk = [];

//     // append array dengan nilai property pada objek
//     public function tambahProduk(Produk $produk) {
//         $this->daftarProduk[] = $produk;
//     }


//     public function cetakInfoDetail() {
//         $str = "Daftar Produk : <br>";
//         // lakukan perulangan untuk menampilkan produk di mana infonya diambil dari getInfoProduk
//         foreach($this->daftarProduk as $daftar) {
//             $str .= " - {$daftar->getInfoProduk()} <br>";
//         }
//         return $str;
//     }
// }

// $komik = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// $game = new Game("Resident Evil 4", "Shinji Mikami", "Capcom", 250000, 7);

// $cetak = new CetakInfoLengkap();
// $cetak->tambahProduk($komik);
// $cetak->tambahProduk($game);
// echo $cetak->cetakInfoDetail();
// /*
// Daftar Produk :
// - Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman
// - Resident Evil 4 | Shinji Mikami, Capcom (Rp. 250000) - 7 Jam

// Dengan ini, kita tidak perlu melakukan instance sebanyak dua kali. Cukup sekali dan masukkan property pada tiap produk ke objek cetak sehingga saat diecho sekali, sudah menampilkan dua data sekaligus
// */


// Dengan Abstract
abstract class Produk {
    // property
    private $judul, $penulis, $penerbit, $harga, $diskon = 0;


    
    // method
    // method default construct agar jika ada objek, yang pertama objek itu lakukan adalah menjalankan fungsi tersebut di mana data-datanya langsung ditulis sebagai parameter
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

    // GET INFO PRODUK diabstract dan diubah ke getInfo
    abstract public function getInfoProduk();

    public function getInfo() {
        return "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    }
}

// inheritance dari parent Produk
class Komik extends Produk {
    // Property
    public $halaman;

    // karena ingin menambahkan property baru untuk construct maka ditulis di parameter lalu agar tidak mengisi inputan lagi, bisa menggunakan inheritance parent::__construct agar setiap instansiasi Child secara otomatis menjalankan construct dan parameter yang dimasukkan akan langsung masuk ke construct parent
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0)
    {
        // data yang didapat di parameter ditangkap di sini dulu untuk merubah nilai di construnct lalu untuk halaman bisa dimasukkan setelah parent
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this-> halaman = $halaman;
    }

    // Method
    // nama method harus sama agar sesuai dengan abstrak
    public function getInfoProduk() {
        // ubah menjadi method baru karena kalo pake getInfoProduk, dia tidak bisa karena abstract
        return $this->getInfo()." - $this->halaman Halaman";
    }

}

// inheritance dari parent Produk
class Game extends Produk {
    // Property
    public $time;

    // karena ingin menambahkan property baru untuk construct maka ditulis di parameter lalu agar tidak mengisi inputan lagi, bisa menggunakan inheritance parent::__construct agar setiap instansiasi Child secara otomatis menjalankan construct dan parameter yang dimasukkan akan langsung masuk ke construct parent
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $time = 0)
    {
        // data yang didapat di parameter ditangkap di sini dulu untuk merubah nilai di construnct lalu untuk halaman bisa dimasukkan setelah parent
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this-> time = $time;
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
}

$komik = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$game = new Game("Resident Evil 4", "Shinji Mikami", "Capcom", 250000, 7);

$cetak = new CetakInfoLengkap();
$cetak->tambahProduk($komik);
$cetak->tambahProduk($game);
echo $cetak->cetakInfoDetail();
/*
Daftar Produk :
- Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman
- Resident Evil 4 | Shinji Mikami, Capcom (Rp. 250000) - 7 Jam

Dengan ini, kita tidak perlu melakukan instance sebanyak dua kali. Cukup sekali dan masukkan property pada tiap produk ke objek cetak sehingga saat diecho sekali, sudah menampilkan dua data sekaligus
*/


?>