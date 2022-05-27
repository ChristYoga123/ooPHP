Class & Object

<?php 
// Pengantar

/*
Kita mengenal adanya denah rumah/blueprint rumah. Denah ini digunakan untuk membuat rumah dan mungkin jika dibuat komplek perumahan, denah yang awal bisa digunakan untuk membangun semua rumah yang ada di kompleks.

Denah = Class
Rumah = Objek / Instance
*/

// Class

/*
1. Adalah template atau blueprint untuk membuat objek. 
2. Class mendefinisikan object
3. Menyimpan data(property) dan perilaku(method)

Cara membuat Class:
a. Diawali dengan membuat keyword class, diikuti nama dan dibatasi dengan {} untuk menyimpan property dan method

static class Coba { # membuat Class
    public $a; // property

    public function b() { // method

    }
} 

*/

// Object / Instance

/*
1. Adalah implementasi dari rancangan Class. Kemungkinan objeknya bisa banyak.
2. Instance yang didefinisikan Class
3. Object dibuat dengan menggunakan keyword 'new'
4. Banyak object dapat dibuat dengan satu Class

// Jika kita ingin membuat script PHP yang tidak ada HTMLnya, tag penutup PHP tidak apa-apa dihapus.

# mendefinisikan Class
class Coba {

}

# membuat object
$a = new Coba();
$b = new Coba();
$c = new Coba();
var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);

/*
Output:
    object(Coba)#1 (0) { }
    object(Coba)#2 (0) { }
    object(Coba)#3 (0) { }
*/

class Coba {

}
?>

