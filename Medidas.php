<?php

class Medidas {
    //atributos
    public $xicara; 
    public $colherDeSopa;
    public $colherDeCha;

    public function __construct() {
        //em ML
        $this->setXicara(250);
        $this->setColherDeCha(5);
        $this->setColherDeSopa(15);
    }

    //metodos
    public function setXicara($xic) { 
        $this->xicara = $xic;
    }

    public function getXicara() {
        return $this->xicara;
    }

    public function setColherDeSopa($colSop) { 
        $this->colherDeSopa = $colSop;
    }

    public function getColherDeSopa() { 
        return $this->colherDeSopa;
    }

    public function setColherDeCha($colCha) {
        $this->colherDeCha = $colCha;
    }

    public function getColherDeCha() { 
        return $this->colherDeCha;
    }

}
?>