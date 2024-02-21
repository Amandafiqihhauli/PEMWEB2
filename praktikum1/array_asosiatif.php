<?php
// membuat array asosiatif (terdiri dari key & value)
$mhs = [
    'nama'=> 'Amanda', 
    'nim'=> '011', 
    'prodi'=> 'Sistem Informasi',
    'ips'=> [
        1 => 3.96,
        2 => 3.96,
        3 => 4
    ]
];

// manggil array asosiatif
echo "Nama: " . $mhs['nama'] . '<br>';
echo "IPS semester 1: " . $mhs['ips']['1'] . '<br>';
echo "IPS semester 2: " . $mhs['ips']['2'] . '<br>';
echo "IPS semester 3: " . $mhs['ips']['3'];

