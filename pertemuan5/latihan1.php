<?php
// array
// variable menampung banyak nilai
// elemen array php boleh ada elemen berbeda

// cara lama
$hari = array("senin", "selasa", "rabu", "kamis", "jumat", "sabtu");
// cara baru
$bulan = ["januari", "februari", "maret"];
$arr1 = [1, "rio"];

// key dan value, key dari index, value adalah datanya
// var_dump($hari);
// echo ("<br>");
// print_r($bulan);
// echo ("<br>");
// menampilkan 1 elemen array
// echo $arr1[1];

// menambahkan elemen pada array
$hari[] = "minggu";
$hari[] = "jumat";
print_r($hari);

?>