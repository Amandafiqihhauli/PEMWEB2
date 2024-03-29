<?php
// tangkap input form registrasi
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
// tanda ?? untuk kalo skill ga diisi
$skills = $_POST['skills'] ?? [];
$domisili = $_POST['domisili'];
$email = $_POST['email'];

// nilai skill
$nilai_skills = [
    'HTML' => 10,
    'CSS' => 10,
    'JavaScript' => 20,
    'RWD Bootstrap' => 20,
    'PHP' => 30,
    'Python' => 30,
    'Java' => 50,
];


$skor_skill = 0;
foreach ($skills as $value){
    $skor_skill += $nilai_skills[$value];
}


if($skor_skill >= 1 && $skor_skill <= 40) {
    $predikat = 'KURANG';
} elseif($skor_skill >= 41 && $skor_skill <= 60) {
    $predikat = 'CUKUP';
} elseif($skor_skill >= 61 && $skor_skill <= 100) {
    $predikat = 'BAIK';
} elseif($skor_skill >= 101 && $skor_skill <= 150) {
    $predikat = 'SANGAT BAIK';
} else {
    $predikat = 'TIDAK MEMADAI';
}

// tampilkan hasil form
echo "NIM: $nim";
echo "<br>Nama Lengkap: $nama";
echo "<br>Jenis Kelamin: $jk";
echo "<br>Program Studi: $prodi";
echo "<br>Skill: " . join(', ', $skills);
echo "<br>Tempat Domisili: $domisili";
echo "<br>Email: $email";
echo "<br>Skor Skill: $skor_skill";
echo "<br>Predikat: $predikat";


