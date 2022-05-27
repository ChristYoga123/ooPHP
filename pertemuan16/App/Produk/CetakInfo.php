<?php 

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

?>