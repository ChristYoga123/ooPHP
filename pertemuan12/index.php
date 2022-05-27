<!-- CONSTANT -->

<?php 
// Apa itu Constant

/*
Sebuah identifier untuk menyimpan nilai.

Kelihatannya sama dengan variabel tapi ada ciri khusus yaitu
NILAINYA TIDAK DAPAT BERUBAH. BIASAKAN HURUF BESAR

Ada 2 cara untuk membuat constant:
1. define() #parameter diisi dengan (nama const, isi) 
2. const

Perbedaan 2 cara ini adalah letak penggunaannya di mana define tidak bisa di dalam class jadi sifatnya constant global. Sedangkan const bisa sehingga bisa masuk konsep OOP.
*/

// MAGIC CONSTANT

/*
Di dalam php ada constant yang otomatis dibuat.
1. __LINE__ = menampilkan baris di mana __LINE__ ditulis
2. __FILE__ = menampilkan info file yang bersangkutan
3. __DIR__ = menampilkan info folder tempat file diletakkan
4. __FUNCTION__ = menentukan sekarang di function apa
5. __CLASS__ = menentukan sekarang di class apa
6. __TRAIT__
7. __METHOD__
8. __NAMESPACE__
Magic Constant di atas sudah ada otomatis nilainya jadi tidak bisa diubah
*/

