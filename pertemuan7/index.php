<!-- INHERITANCE PT.2 -->

<?php 

// Pengantar Inheritance

/*
Kita dulu punya class Mobil dengan property dan method:
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
Class ini bisa kita instasiasi ke beragam object mobil TETAPI, ada mobil tertentu yang memiliki property dan methodnya sendiri jadi tidak sama dengan yang atas. Contoh:

Kita ada class MobilSport:
    Property = [
        1. turbo
    ]

    Method = [
        a. jalankanTurbo
    ]
Sebenarnya mobil ini punya property dan method yang sama dengan class Mobil biasa jadi kita bisa extends property dan method dari parent ke child
*/

?>