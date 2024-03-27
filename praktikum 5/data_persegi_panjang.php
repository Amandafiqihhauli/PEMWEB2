<?php
require_once('class_persegi_panjang.php');

// instansiasi objek persegi panjang
$persegi_panjang = new Persegi_Panjang(5, 7);

// panggil method
echo "<br> Luas persegi panjang: " . $persegi_panjang->getluas();

echo "<br><br> Keliling persegi panjang: " . $persegi_panjang->getkeliling();

