<?php
require_once('class_nilai_mahasiswa.php');

$name = $_GET['name'];
$matkul = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];


// objek
$nilai = new Nilai_Mahasiswa($name, $matkul, $nilai_uts, $nilai_uas, $nilai_tugas);

// hasil
echo "<br> Nama : " . $nilai->getNama();
echo "<br> Mata Kuliah : " . $nilai->getMatkul();
echo "<br> Nilai UTS : " . $nilai->getNilaiUts();
echo "<br> Nilai UAS : " . $nilai->getNilaiUas();
echo "<br> Nilai Tugas : " . $nilai->getNilaiTugas();
echo "<br> Hasil Kelulusan : " . $nilai->getHasil();
echo "<br> Grade : " . $nilai->getGrade();

