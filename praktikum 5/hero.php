<?php
class Hero{
    // atribut (nama hero di ML)
    public $name;
    public $hp;
    public $damage;

    // method
    public function __construct($name,$hp,$damage)
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->damage = $damage;
    }
    public function getDetail(){
        echo "<br> Name:" . $this->name;
        echo "<br> Health Point:" . $this->hp;
        echo "<br> Damage:" . $this->damage;
        echo "<br> ============================";
    }

    PUBLIC function attack($target){
        $target->hp = $target->hp - $this->damage;
        echo "<br> Berhasil menyerang $target->name";
        echo "<br> HP Target saat ini $target->hp";
    }
}

// instansiasi object hero
$hero1 = new Hero('Alucard', '3200', 240);
$hero1->getDetail();

$hero2 = new Hero('Baxia', '5600', 70);
$hero2->getDetail();

// Hasil serangan
$hero1->attack($hero2);