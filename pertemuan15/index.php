<!-- INTERFACE -->

<?php 
// Apa itu Interface

/*
1. Kelas abstrak yang sama sekali tidak memiliki implementasi.
2. Murni merupakan template untuk kelas turunannya
3. Tidak boleh memiliki property
4. Semua methodnya harus pubkic
5. Boleh mendeklarasikan construct
6. Satu kelas boleh mengimplementasikan banyak interface
7. Dengan menggunakan type-hinting dapat melakukan Dependency Injection jadi method memaksa menerima parameter berupa objek
8.  Pada akhirnya akan mencapai Polymorphism
*/

// Cara menggunakan Interface

/*
Gunakan keyword "interface" di depan nama class lalu di dalamnya kita hanya boleh punya deklarasi methodnya saja dan turunannya menggunakan "impelements"

interface Buah {
    public function makan();
    public function setWarna($warna);
}
*/
// Interface 1
interface Buah {
    public function makan();
    public function setWarna($warna);
}

// Interface 2
interface Benda {
    public function setUkuran($bentuk);
}

// Turunan mengimplementasi lebih dari 1 interface
class Apel implements Buah, Benda {
    // property
    protected $warna, $bentuk;

    // method yang namanya sesuai abstract
    public function makan() {

    }
    // method yang namanya sesuai abstract
    public function setWarna($warna) {
        $this->warna=$warna;
    }

    public function setUkuran($bentuk)
    {
        $this->bentuk = $bentuk;
    }
}

// Turunan
class Jeruk implements Buah {
    protected $warna;

    public function makan() {

    }
    public function setWarna($warna)
    {
        $this->warna = $warna;
    }
}
?>