<?php
require_once('class_lingkaran.php');
echo "Nilai PHI: " . Lingkaran::PHI;

// instansiasi object Lingkaran
$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(8);

// panggil method
echo "<br> Luas Lingkaran 1: " . $lingkar1->getluas();
echo "<br> Luas Lingkaran 2: " . $lingkar2->getluas();

echo "<br><br> Keliling Lingkaran 1: " . $lingkar1->getkeliling();
echo "<br> Keliling Lingkaran 2: " . $lingkar2->getkeliling();