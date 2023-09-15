<?php
$nama ="Muhammad Kusnan"; echo "Nama : $nama <br>";
$npm ="22753027"; echo "NPM : $npm <br>";
$prodi ="D3 Manajemen Informatika"; echo "Prodi : $prodi <br>";
$jurusan ="Ekonomi Dan Bisnis"; echo "Jurusan : $jurusan <br><br>";

echo "Contoh Program PHP <br>"; echo "Hello, Ini Program PHP Pertamaku <br><br>";

echo "Contoh Komentar<br>";
//Komentar 1 Baris dan 
#lanjut komentar
echo "Contoh komentar di PHP <br><br>";
/*
Ini Komentar
Banyak Baris
*/

echo "Contoh Konstanta <br>";
define("PI", 3.14);
$r = 200;
$luas_lingkaran = PI * ($r * $r);
$keliling_lingkaran = 2 * PI * $r;
echo "Luas lingkaran : ".$luas_lingkaran;
echo "<br />";
echo "Keliling lingkaran : $keliling_lingkaran <br><br>";

echo "Contoh Variabel <br>";
$kampus ="Politeknik Negeri Lampung";
echo "Kampus Terpadu : $kampus <br><br>";

echo "Contoh Tipe Data <br>";
$pecahan = 2.3;
echo $pecahan;
echo "<br/>";
echo (int) $pecahan ;
echo "<br><br>";

echo "Contoh Operator Aritmatika <br>";
$x = 7;
$y = 3;
$a = $x + $y;
echo $a."<br>";
$b = $x - $y;
echo $b."<br>";
$c = $x * $y;
echo $c."<br>";
$d = $x / $y;
echo $d."<br>";
$e = $x % $y;
echo $e."<br><br>";

echo "Contoh Operator Perbandingan Dan Logika <br>";
$a = 8;
$b = 5;
echo "$a == $b : ". ($a == $b);
echo "<br>$a != $b : ". ($a != $b);
echo "<br>$a > $b : ". ($a > $b);
echo "<br>$a < $b : ". ($a < $b);
echo "<br>($a == $b) && ($a > $b) : ".(($a == $b)
&& ($a > $b));
echo "<br>($a == $b) || ($a > $b) : ".(($a == $b)
|| ($a > $b));
echo "<br><br>";

echo "Contoh String <br>";
$string1 = "Pemrograman";
$string2 = "Web Dinamis";
echo $string1." ".$string2 ."<br><br>";
?>