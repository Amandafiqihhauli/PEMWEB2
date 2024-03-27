<?php
// rumus luas persegi panjang = p x l
// rumus keliling persegi panjang = 2(p + l)

class Persegi_Panjang{
    private $panjang;
    private $lebar;

    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function getluas(){
        return $this->panjang * $this->lebar;
    }
    public function getkeliling(){
        return 2 * ($this->panjang + $this->lebar);
    } 
}