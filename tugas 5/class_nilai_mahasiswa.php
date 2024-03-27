<?php
class Nilai_Mahasiswa{
    private $name;
    private $matkul;
    private $nilai_uts;
    private $nilai_uas;
    private $nilai_tugas;
    

    public function __construct($name, $matkul, $nilai_uts, $nilai_uas, $nilai_tugas)
    {
        $this->name = $name;
        $this->matkul = $matkul;
        $this->nilai_uts = $nilai_uts;
        $this->nilai_uas = $nilai_uas;
        $this->nilai_tugas = $nilai_tugas;
    }

    public function getHasil(){
        $nilai_total = ($this->nilai_uts + $this->nilai_uas + $this->nilai_tugas) / 3;
        if($nilai_total > 55){
            return 'LULUS';
        } else {
            return 'TIDAK LULUS';
        }
    }

    public function getGrade(){
        $nilai_total = ($this->nilai_uts + $this->nilai_uas + $this->nilai_tugas) / 3;
        if($nilai_total >= 0 && $nilai_total <= 35) {
            return 'E';
        } elseif ($nilai_total >= 35 && $nilai_total <= 55) {
            return 'D';
        } elseif ($nilai_total <= 56 && $nilai_total <= 69) {
            return 'C';
        } elseif ($nilai_total >= 70 && $nilai_total <= 84) {
            return 'B';
        } elseif ($nilai_total >= 85 && $nilai_total <= 100) {
            return 'A';
        } else {
            return 'TIDAK VALID';
        }
    }
    
    public function getNama(){
        return $this->name;
    }
    public function getMatkul(){
        return $this->matkul;
    }
    public function getNilaiUts(){
        return $this->nilai_uts;
    }
    public function getNilaiUas(){
        return $this->nilai_uas;
    }
    public function getNilaiTugas(){
        return $this->nilai_tugas;
    }

}