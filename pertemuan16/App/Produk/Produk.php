<?php 
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
?>