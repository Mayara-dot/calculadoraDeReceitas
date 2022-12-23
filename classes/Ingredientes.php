<?php
require_once "Medidas.php";

class Ingredientes extends Medidas{

    var $ingrediente;
    var $label;
    public function __construct($ingrediente = "agua") {
        //em ML
        $this->setIngrediente($ingrediente);
        $this->setXicara(250);
        $this->setColherDeCha(5);
        $this->setColherDeSopa(15);
    }
    public function setIngrediente($ingrediente) {
        $this->ingrediente = $ingrediente;
    }
    public function getIngrediente() {
        return $this->ingrediente;
    }
    public function dicionario($ingrediente) {
        switch($ingrediente) {
            //EM GRAMAS
            case "farinhaDeTrigo": 
                $this->setXicara(150);
                $this->setColherDeSopa(9.4);
                break;
            case "acucarCristalDemerara":
                $this->setXicara(200);
                $this->setColherDeSopa(12.5);
                break;
            case "acucarRefinado":
                $this->setXicara(225);
                $this->setColherDeSopa(15);
                break;
            case "cacauEmPo":
                $this->setXicara(120);
                break;
            case "fermento":
                $this->setColherDeCha(3);
                break;
            case "bicarbonato":
                $this->setColherDeCha(5);
                break;
            case "sal":
                $this->setColherDeCha(5);
                break;
            case "oleoVegetal":
                $this->setXicara(205);
                break;
            default:  //"agua"
                $this->getXicara();
                $this->getColherDeCha();
                $this->getColherDeSopa();
                break;
        }
    }
    public function label($ingrediente){
        $rs = include "../php/data.php";
        $solidos = $rs[0];
        $liquidos = $rs[1];
        foreach($solidos as $k => $v) {
            if($ingrediente == $k) {
                return $v;
            } else {
                continue;
            }
        }
        foreach($liquidos as $k => $v) {
            if($ingrediente == $k) {
                return $v;
            } else {
                continue;
            }
        }
    }
    public function medida($medida) {
        $rs = include "../php/data.php";
        $medidas = $rs[2];
        foreach($medidas as $k => $v) {
            if($medida == $k) {
                return $v;
            } else {
                continue;
            }
        }
    }
    public function gramas($quantidade, $unidadeMedida = null, $ingredientes = "agua") {
        try {
            $this->setIngrediente($this->dicionario($ingredientes));
            $label = $this->label($ingredientes);
            $medida = $this->medida($unidadeMedida);
            if($quantidade == '1') {
                if($unidadeMedida == "xicara") {
                    echo "<p>1 $medida de $label = {$this->getXicara()} g</p>";
                } else if($unidadeMedida == "colCS") {
                    echo "<p>1 $medida de $label = {$this->getColherDeSopa()} g</p>";
                } else if ($unidadeMedida == "colCC") {
                    echo "<p>1 $medida de $label = {$this->getColherDeCha()} g</p>";
                } else {
                    echo "ERRO";
                }
            }else if($quantidade == '1/2') {
                if($unidadeMedida == "xicara") {
                    $meiaXic = round($this->getXicara() / 2, 1);
                    echo "<p>1/2 $medida de $label = $meiaXic g</p>";
                } else if($unidadeMedida == "colCS") {
                    $meiaCS = round($this->getColherDeSopa() / 2, 1);
                    echo "<p>1/2 $medida de $label = $meiaCS g</p>";
                } else if($unidadeMedida == "colCC"){
                    $meiaCC = round($this->getColherDeCha() / 2, 1);
                    echo "<p>1/2 $medida de $label = $meiaCC g</p>";
                } else {
                    echo "<p>ERRO METADE</p>";
                }
            } else  if ($quantidade == '1/3') {
                $umTercoXic = round($this->getXicara() / 3);
                echo "<p>1/3 de $medida de $label = $umTercoXic g</p>";
            } else if ($quantidade == '1/4') {
                $umQuartoXic = round($this->getXicara() / 4);
                echo "<p>1/4 de $medida de $label = $umQuartoXic g</p>";
            } else if ($quantidade == '3/4'){
                $tresQuartos = round(($this->getXicara() / 4) * 3);
                echo "<p>3/4 de $medida de $label = $tresQuartos g</p>";
            } else if($quantidade > '1') {
                if($unidadeMedida == "xicara") {
                    $mult = ($this->getXicara() * $quantidade);
                    echo "<p>$quantidade xícaras de $label = $mult g</p>";
                } else if ($unidadeMedida == "colCS") {
                    $mult = ($this->getColherDeSopa() * $quantidade);
                    echo "<p>$quantidade colheres de sopa de $label = $mult g</p>";
                } else if ($unidadeMedida == "colCC") {
                    $mult = ($this->getColherDeCha() * $quantidade);
                    echo "<p>$quantidade colheres de cha de $label = $mult g</p>";
                } else {
                    echo "<p>ERRO MAIS DE UM</p>";
                }
            }
            else {
                echo "<p>$label = 0 g</p>";
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function metade($quantidade, $unidadeMedida = null, $ingredientes = "agua") {
        try {
            $this->setIngrediente($this->dicionario($ingredientes));
            $label = $this->label($ingredientes);
            $medida = $this->medida($unidadeMedida);
            if($quantidade === 1) {
                if($unidadeMedida == "xicara") {
                    $meiaXic = round($this->getXicara() / 2, 1);
                    echo "<p>1/2 $medida de $label = $meiaXic g</p>";
                } else if($unidadeMedida == "colCS") {
                    $meiaCS = round($this->getColherDeSopa() / 2, 1);
                    echo "<p>1/2 $medida de $label = $meiaCS g</p>";
                } else if ($unidadeMedida == "colCC") {
                    $meiaCC = round($this->getColherDeCha() / 2, 1);
                    echo "<p> 1/2 $medida de $label = $meiaCC g</p>";
                } else {
                    echo "ERRO";
                }
            }else if($quantidade === '1/2') {
                if($unidadeMedida == "xicara") {
                    $umQuartoXic = round($this->getXicara() / 4);
                    echo "<p>1/4 de $medida de $label = $umQuartoXic g</p>";
                } else if($unidadeMedida == "colCS") {
                    $umQuartoCS = round($this->getColherDeSopa() / 4);
                    echo "<p>1/4 de $medida de $label = $umQuartoCS g</p>";
                } else if($unidadeMedida == "colCC"){
                    $umQuartoCC = round($this->getColherDeCha() / 4);
                    echo "<p>1/4 de $medida de $label = $umQuartoCC g</p>";
                } else {
                    echo "<p>ERRO METADE</p>";
                }
            } else  if ($quantidade === '1/3') {
                $umTercoXic = round($this->getXicara() / 3);
                $metade = round($umTercoXic / 2);
                echo "<p>$label = $metade g</p>";
            } else if ($quantidade == '1/4') {
                $umQuartoXic = round($this->getXicara() / 4);
                $metade = round($umQuartoXic / 2);
                echo "<p>$label = $metade g</p>";
            } else if ($quantidade == '3/4'){
                $tresQuartos = round(($this->getXicara() / 4) * 3);
                $metade = round($tresQuartos / 2);
                echo "<p>$label = $metade g</p>";
            } else if($quantidade > 1) {
                if($unidadeMedida == "xicara") {
                    $mult = round((($this->getXicara() * $quantidade) / 2));
                    echo "<p>$label = $mult g</p>";
                } else if ($unidadeMedida == "colCS") {
                    $mult = round((($this->getColherDeSopa() * $quantidade) / 2));
                    echo "<p>$label = $mult g</p>";
                } else if ($unidadeMedida == "colCC") {
                    $mult = round((($this->getColherDeCha() * $quantidade) / 2));
                    echo "<p>$label = $mult g</p>";
                } else {
                    echo "<p>ERRO MAIS DE UM</p>";
                }
            }
            else {
                echo "<p>$label = 0 g</p>";
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function dobro($quantidade, $unidadeMedida = null, $ingredientes = "agua") {
        try {
            $this->setIngrediente($this->dicionario($ingredientes));
            $label = $this->label($ingredientes);
            $medida = $this->medida($unidadeMedida);
            if ($quantidade == '1') {
                if ($unidadeMedida == "xicara") {
                    $dobro = round($this->getXicara() * 2);
                    echo "<p>2 $medida de $label = {$dobro} g</p>";
                } else if ($unidadeMedida == "colCS") {
                    $dobro = round($this->getColherDeSopa() * 2);
                    echo "<p>2 $medida de $label = {$dobro} g</p>";
                } else if ($unidadeMedida == "colCC") {
                    $dobro = round($this->getColherDeCha() * 2);
                    echo "<p>2 $medida de $label = {$dobro} g</p>";
                } else {
                    echo "ERRO";
                }
            }else if($quantidade === '1/2') {
                if($unidadeMedida == "xicara") {
                    echo "<p>1 $medida de $label = {$this->getXicara()} g</p>";
                } else if($unidadeMedida == "colCS") {
                    echo "<p>1 $medida de $label = {$this->getColherDeSopa()} g</p>";
                } else if ($unidadeMedida == "colCC") {
                    echo "<p>1 $medida de $label = {$this->getColherDeCha()} g</p>";
                } else {
                    echo "ERRO";
                }
            } else  if ($quantidade === '1/3') {
                $umTercoXic = round($this->getXicara() / 3);
                $dobro = round($umTercoXic * 2);
                echo "<p>$label = $dobro g</p>";
            } else if ($quantidade == '1/4') {
                $umQuartoXic = round($this->getXicara() / 4);
                $dobro = round($umQuartoXic * 2);
                echo "<p>$label = $dobro g</p>";
            } else if ($quantidade == '3/4'){
                $tresQuartos = round(($this->getXicara() / 4) * 3);
                $dobro = round($tresQuartos * 2);
                echo "<p>$label = $dobro g</p>";

            } else if($quantidade > 1) {
                if($unidadeMedida == "xicara") {
                    $mult = round(($this->getXicara() * $quantidade) * 2);
                    echo "<p>$label = $mult g</p>";
                } else if ($unidadeMedida == "colCS") {
                    $mult = round(($this->getColherDeSopa() * $quantidade) * 2);
                    echo "<p>$label = $mult g</p>";
                } else if ($unidadeMedida == "colCC") {
                    $mult = round(($this->getColherDeCha() * $quantidade) * 2);
                    echo "<p>$label = $mult g</p>";
                } else {
                    echo "<p>ERRO MAIS DE UM</p>";
                }
            }
            else {
                echo "<p>$label = 0 g</p>";
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function triplo($quantidade, $unidadeMedida = null, $ingredientes = "agua") {
        try {
            $this->setIngrediente($this->dicionario($ingredientes));
            $label = $this->label($ingredientes);
            $medida = $this->medida($unidadeMedida);
            if ($quantidade == '1') {
                if ($unidadeMedida == "xicara") {
                    $triplo = round($this->getXicara() * 3);
                    echo "<p>3 $medida de $label = {$triplo} g</p>";
                } else if ($unidadeMedida == "colCS") {
                    $triplo = round($this->getColherDeSopa() * 3);
                    echo "<p>3 $medida de $label = {$triplo} g</p>";
                } else if ($unidadeMedida == "colCC") {
                    $triplo = round($this->getColherDeCha() * 3);
                    echo "<p>3 $medida de $label = {$triplo} g</p>";
                } else {
                    echo "ERRO";
                }
            }else if($quantidade === '1/2') {
                if($unidadeMedida == "xicara") {
                    $triplo = (round($this->getXicara() / 2)) + $this->getXicara();
                    echo "<p>1 e 1/2 $medida de $label = {$triplo} g</p>";
                } else if($unidadeMedida == "colCS") {
                    $triplo = (round($this->getColherDeSopa() / 2)) + $this->getColherDeSopa();
                    echo "<p>1 e 1/2 $medida de $label = {$triplo} g</p>";
                } else if ($unidadeMedida == "colCC") {
                    $triplo = (round($this->getColherDeCha() / 2)) + $this->getColherDeCha();
                    echo "<p>1 e 1/2 $medida de $label = {$triplo} g</p>";
                } else {
                    echo "ERRO";
                }
            } else  if ($quantidade === '1/3') {
                $umTercoXic = round($this->getXicara() / 3);
                $dobro = round($umTercoXic * 3);
                echo "<p>$label = $dobro g</p>";
            } else if ($quantidade == '1/4') {
                $umQuartoXic = round($this->getXicara() / 4);
                $dobro = round($umQuartoXic * 3);
                echo "<p>$label = $dobro g</p>";
            } else if ($quantidade == '3/4'){
                $tresQuartos = round(($this->getXicara() / 4) * 3);
                $dobro = round($tresQuartos * 3);
                echo "<p>$label = $dobro g</p>";

            } else if($quantidade > 1) {
                if($unidadeMedida == "xicara") {
                    $mult = round(($this->getXicara() * $quantidade) * 3);
                    echo "<p>$label = $mult g</p>";
                } else if ($unidadeMedida == "colCS") {
                    $mult = round(($this->getColherDeSopa() * $quantidade) * 3);
                    echo "<p>$label = $mult g</p>";
                } else if ($unidadeMedida == "colCC") {
                    $mult = round(($this->getColherDeCha() * $quantidade) * 3);
                    echo "<p>$label = $mult g</p>";
                } else {
                    echo "<p>ERRO MAIS DE UM</p>";
                }
            }
            else {
                echo "<p>$label = 0 g</p>";

            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
 
    
?>