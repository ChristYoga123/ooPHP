<?php 

abstract class Buah {
    private $warna;

    abstract function makan();

    public function setWarna($warna) {
        $this->warna = $warna;
    }
}

class Apel extends Buah {
    public function makan() {
        return "Rasa Apel";
    }
}

// $buah = new Buah(); # tidak bisa diinstance
$apel = new Apel();
// echo $buah -> makan(); # Fatal error: Uncaught Error: Cannot instantiate abstract class Buah in C:\xampp\htdocs\oophp\pertemuan13\abstract.php:19 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oophp\pertemuan13\abstract.php on line 19
echo "<hr>";
echo $apel -> makan();
// Out: Rasa Buah
?>