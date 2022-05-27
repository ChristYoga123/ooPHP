<?php 

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
?>