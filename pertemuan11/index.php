<!-- STATIC KEYWORD -->

<?php 

// Pengantar

/*
Class merupakan template dari object. Sebelumnya property dan method yang kita gunakan masih harus diinstansiasikan terlebih dahulu.

Faktanya, kita bisa mengakses property dan methd dalam konteks class tanpa melakukan instansiasi. Caranya adalah Static Property dan Static Method.

Pada saat kita mau mengakses property di dalam method, biasanya kita menggunakan $this. Tetapi jika tidak diinstansiasikan, $this tidak bisa apalagi pada saat static. Solusinya adalah self::$property
*/

// Untuk apa?

/*
1. Member sekarang terikat dengan class bukan object.
2. Nilai static akan selalu tetap meskipun objek diinstaniasi berulang kali.
3. Membuat kode menjadi procedural karena bisa langsung manggil class 
4. Berguna untuk fungsi bantuan
5. Digunakan class class utility
*/

?>