<?php
require_once "Medidas.php";

class Ingredientes extends Medidas{
    var $ingrediente; 

    public function __construct() {
        //em ML
        $this->setIngrediente("agua");
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
            case "farinha de trigo": 
                $this->setXicara(150);
                $this->setColherDeSopa(9.4);
                break;
            case "acucar cristal/demerara":
                $this->setXicara(200);
                $this->setColherDeSopa(12.5);
                break;
            case "acucar refinado":
                $this->setXicara(225);
                $this->setColherDeSopa(15);
                break;
            case "cacau em po":
                $this->setXicara(120);
                break;
            case "fermento em po":
                $this->setColherDeCha(3);
                break;
            case "bicarbonato de sodio":
                $this->setColherDeCha(5);
                break;
            case "sal":
                $this->setColherDeCha(5);
                break;
            case "oleo vegetal":
                $this->setXicara(205);
                break;
            default:  //"agua"
                $this->getXicara();
                $this->getColherDeCha();
                $this->getColherDeSopa();
                break;
        }
    }

    public function medir($medida, $tipo = null, $ingredientes = "agua") {
        try {
            $this->setIngrediente($this->dicionario($ingredientes));
            if($medida == 1) {
                if($tipo == "xicara") {
                    echo "<p>1 xicara de $ingredientes = {$this->getXicara()} g</p>";
                } else if($tipo == "colher de sopa") {
                    echo "<p>1 colher de sopa de $ingredientes = {$this->getColherDeSopa()} g</p>";
                } else if ($tipo == "colher de cha") {
                    echo "<p>1 colher de chá de $ingredientes = {$this->getColherDeCha()} g</p>";
                } else {
                    echo "ERRO";
                }

            }else if($medida == 1/2) {
                if($tipo == "xicara") {
                    $meiaXic = round($this->getXicara() / 2, 1);
                    echo "<p>1/2 xícara de $ingredientes = $meiaXic g</p>";
                } else if($tipo == "colher de sopa") {
                    $meiaCS = round($this->getColherDeSopa() / 2, 1);
                    echo "<p>1/2 colher de sopa de $ingredientes = $meiaCS g</p>";
                } else if($tipo == "colher de cha"){
                    $meiaCC = round($this->getColherDeCha() / 2, 1);
                    echo "<p>1/2 colher de chá de $ingredientes = $meiaCC g</p>";
                } else {
                    echo "<p>ERRO METADE</p>";
                }

            } else  if ($medida == 1/3) {
                $umTercoXic = round($this->getXicara() / 3);
                echo "<p>1/3 de xicara de $ingredientes = $umTercoXic g</p>";

            } else if ($medida == 1/4) {
                $umQuartoXic = round($this->getXicara() / 4);
                echo "<p>1/4 de xícara de $ingredientes = $umQuartoXic g</p>";

            } else if ($medida == 3/4){
                $tresQuartos = round(($this->getXicara() / 4) * 3);
                echo "<p>3/4 de xícara de $ingredientes = $tresQuartos g</p>";

            } else if($medida > 1) {
                if($tipo == "xicara") {
                    $mult = ($this->getXicara() * $medida);
                    echo "<p>$medida xícaras de $ingredientes = $mult g</p>";
                } else if ($tipo == "colher de sopa") {
                    $mult = ($this->getColherDeSopa() * $medida);
                    echo "<p>$medida colheres de sopa de $ingredientes = $mult g</p>";
                } else if ($tipo == "colher de cha") {
                    $mult = ($this->getColherDeCha() * $medida);
                    echo "<p>$medida colheres de cha de $ingredientes = $mult g</p>";

                } else {
                    echo "<p>ERRO MAIS DE UM</p>";
                }
            }
            
            else {
                echo "<p>ERRO MEDIDAS</p>";
            }

        } catch (\Throwable $th) {
            throw $th;
        }
        
    }
}
 
    
?>