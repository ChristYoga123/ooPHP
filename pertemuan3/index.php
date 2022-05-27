<!-- Property & Method -->

<?php 

// Property

/*
Karakteristik:
1. Merepresentasikan data/keadaan sebuah objek
2. Sama dengan variabel yang ada di dalam object (member variable) tapi nanti disebut property.
3. Ditambahkan dengan visibility. Default public
*/

// Method

/*
Karakteristik:
1. Merepresentasikan perilaku dari sebuah object
2. Sama dengan function yang ada di dalam object tetapi nanti disebut method
3. Ditambah dengan visibility. Default public
*/

// Contoh Kasus Mobil

/*
Property = [
    1. nama
    2. merk
    3. warna
    4. kecepatanMaksimal
    5. jumlahPenumpang
]

Method = [
    a. tambahKecepatan
    b. kurangiKecepatan
    c. gantiTransmisi
    d. belokKiri
    e. belokKanan 
]

class Mobil {
    // property
    public $nama;
    public $merk;
    public $warna;
    public $kecepatanMaksimal;
    public $jumlahPenumpang;

    // method
    public function tambahKecepatan() {
        
    }

    public kurangiKecepatan() {
        
    }

    public gantiTransmisi() {
        
    }   

    public belokKiri() {
        
    }

    public belokKanan() {
        
    }  
}
*/

// Cara Mengisi Data pada Property

/*
Jika di var_dump, hasilnya adalah NULL untuk tiap propertynya.

object(Mobil)#1 (5) {
  ["nama"]=>
  NULL
  ["merk"]=>
  NULL
  ["warna"]=>
  NULL
  ["kecepatanMaksimal"]=>
  NULL
  ["jumlahPenumpang"]=>
  NULL
}

Jadi ada beberapa cara untuk mengisi data
1. Bisa mengisi manual di dalam kelas

class Mobil {
    // property
    public $nama = 'nama' ;
    public $merk = 'merk';
    public $warna = 'warna';
    public $kecepatanMaksimal = 0;
    public $jumlahPenumpang = 0;

    
}

$produk1 = new Mobil();
var_dump($produk1);

object(Mobil)#1 (5) {
  ["nama"]=>
  string(4) "nama"
  ["merk"]=>
  string(4) "merk"
  ["warna"]=>
  string(5) "warna"
  ["kecepatanMaksimal"]=>
  int(0)
  ["jumlahPenumpang"]=>
  int(0)
}

2. Menulis data di luar class dan setelah objek yang diinginkan
Syntax: object1 -> nama property -> value

class Mobil {
    // property
    public $nama;
    public $merk;
    public $warna ;
    public $kecepatanMaksimal;
    public $jumlahPenumpang;

    
}

$produk1 = new Mobil();
$produk1->nama='Daihatsu';
var_dump($produk1);

object(Mobil)#1 (5) {
  ["nama"]=>
  string(8) "Daihatsu" => berubah
  ["merk"]=>
  NULL
  ["warna"]=>
  NULL
  ["kecepatanMaksimal"]=>
  NULL
  ["jumlahPenumpang"]=>
  NULL
}
*/

// Menambahkan Property Baru di luar class setelah Object

/*
class Mobil {
    // property
    public $nama;
    public $merk;
    public $warna ;
    public $kecepatanMaksimal;
    public $jumlahPenumpang;

    
}

$produk1 = new Mobil();
$produk1->pemilik='Yoga';
var_dump($produk1);

object(Mobil)#1 (6) {
  ["nama"]=>
  NULL
  ["merk"]=>
  NULL
  ["warna"]=>
  NULL
  ["kecepatanMaksimal"]=>
  NULL
  ["jumlahPenumpang"]=>
  NULL
  ["pemilik"]=>
  string(4) "Yoga" = property baru bertambah. Visibility penting
}
*/



// Method

/*
<?php 
class Produk {
    // cari data-data yang sama-sama dimiliki oleh komik dan game
    // property
    public $judul = 'judul', 
           $penulis = 'penulis',
           $penerbit = 'penerbit',
           $harga = 0;
    
    // method
    public function sayHello() {
        return "Hello World";
    }
    
}

// timpa nilai default
$produk3 = new Produk();
$produk3->judul='Naruto';
$produk3->penulis='Masashi Kishimoto';
$produk3->penerbit='Shonen Jump';
$produk3->harga=30000;

echo "
    <h1>
        Komik: $produk3->judul, $produk3->penulis
    </h1>
    <br>
";

echo $produk3->sayHello();

object(Produk)#1 (4) { ["judul"]=> string(6) "Naruto" ["penulis"]=> string(17) "Masashi Kishimoto" ["penerbit"]=> string(11) "Shonen Jump" ["harga"]=> int(30000) }

Komik: Naruto, Masashi Kishimoto

Hello World
*/

// Menampilkan Property Dengan Method ($this)

/*
Jika kita mau mengambil property yang sama tetapi di luar function, akan error mengingat lingkup variabel di dalam function maka kita memerlukan keyword $this yang sama dengan global

class Produk {
    // cari data-data yang sama-sama dimiliki oleh komik dan game
    // property
    public $judul = 'judul', 
           $penulis = 'penulis',
           $penerbit = 'penerbit',
           $harga = 0;
    
    // method
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
    
}

$produk3 = new Produk();
$produk3->judul='Naruto';
$produk3->penulis='Masashi Kishimoto';
$produk3->penerbit='Shonen Jump';
$produk3->harga=30000;

echo $produk3->getLabel();

Masashi Kishimoto, Shonen Jump
*/
?>