<?php 

// define("NAMA", "Sandhika Galih"); 

// const UMUR = 10;

// echo NAMA; #tanpa $
// echo "<hr>";
// echo UMUR;


// class Coba {
//     const NAMA = "Sandhika";
// }

// // cara mengakses sama seperti static
// echo Coba::NAMA;

// echo __LINE__; # 19
// echo "<hr>";
// echo __FILE__; # C:\xampp\htdocs\oophp\pertemuan12\constant.php
// echo "<hr>";
// echo __DIR__; # C:\xampp\htdocs\oophp\pertemuan12
// echo "<hr>";
// echo __FUNCTION__;

/*
function coba() {
    return __FUNCTION__;
}

echo coba();

Out : coba ?>
*/

// echo "<hr>";
// echo __CLASS__;

/*
class Coba{
    public $kelas = __CLASS__;
}

$obj = new Coba();
echo $obj->kelas;

Out: Coba ?>
*/
// echo "<hr>";
// echo __TRAIT__;
// echo "<hr>";
// echo __METHOD__;
// echo "<hr>";
// echo __NAMESPACE__;

class Coba{
    public $kelas = __CLASS__;
}

$obj = new Coba();
echo $obj->kelas;
?>

?>