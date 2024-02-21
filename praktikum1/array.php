<?php
// array indexing
$mhs1 = ['011', 'Amanda', 'Sistem Informasi', [3.96, 3.96, 4.8]];

// panggil array
echo 'Nama: ' . $mhs1[1] . '<br>'; //konkatenasi (.) untuk gabungin string & br untuk pindah baris baru
echo "NIM: $mhs1[0] <br>"; //pake ("") untuk masukin variable secara langsung
echo "IPS semester 1: " . $mhs1[3][0] . '<br>';
echo "IPS semester 2: " . $mhs1[3][1] . '<br>';
echo "IPS semester 3: " . $mhs1[3][2];