<?php 

// class ContohStatik {
//     public static $angka = 1;

//     // karena $this tidak bisa, ganti menjadi self::propertu
//     // jika angkanya mau ditambah tiap perulangan, tinggal beri ++ di property.
//     public static function halo() {
//         return "Halo " . self::$angka++. " kali";
//     }

    
// }

// // Jika kita mau mencetak 1, biasanya kita harus instansiasi terlebih dahulu.
// // $obj = new ContohStatik;

// //Tetapi dengan keyword static, kita langsung panggil aja classnya
// echo ContohStatik::$angka;
// echo "<hr>";
// // Out:1
// echo ContohStatik::halo();
// echo "<hr>";
// // Out:Halo
// echo ContohStatik::halo();


class Contoh {
    public static $angka = 1;

    public function halo() {
        return "Halo " . self::$angka++ . " kali";
    }
}

$obj = new Contoh();
echo $obj -> halo();
echo"<br>";
echo $obj -> halo();
echo "<hr>";

$obj1 = new Contoh();
echo $obj1 -> halo();
echo"<br>";
echo $obj1 -> halo();
echo "<hr>";
/*
Out:
Halo 1 kali $obj
Halo 2 kali $obj
Halo 1 kali $obj1
Halo 2 kali $obj1

Jika tanpa static, nilainya akan kereset lagi setelah dia diinstansiasikan dengan objek baru

Tetapi dengan static, yang seharusnya nilainya direset kini menjadi bertambah bukan mengulang
Out:
Halo 1 kali $obj
Halo 2 kali $obj
Halo 3 kali $obj1
Halo 4 kali $obj1
*/

?>