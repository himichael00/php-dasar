<?php
// the beginning of pertmenuan 2 - PHP Dasar
// Sintaks PHP

// Standar output
// echo, print
// print_r
// var_dump

// Penulisan PHP
// 1. PHP dalam HTML
// 2. HTML dalam PHP

// Variabel dan tipe data
// tidak boleh diawali angka tapi boleh mengadnung angka
// $nama = "Michael";
// echo "Welcome $nama";

// Operator Aritmatika
// +, -, *, /, %
// $x = 10;
// $y = 12;

// echo $x+$y;

// Operator penggabung string / concatenation
// $nama_depan = "Michael";
// $nama_blkg = "Rio";

// echo $nama_depan." ".$nama_blkg;

// Operator assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x += 5;
// echo $x;

// $nama = "Michael";
// $nama .= " ";
// $nama .= 1;
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");

// Identitas
// ===, !==
// var_dump(1 === "1");

// Logika
// &&, ||, !
$x = 10;
var_dump($x < 11 && $x != 1);
var_dump($x < 11 && $x %2 == 0);
?>