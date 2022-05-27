<?php 

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


?>