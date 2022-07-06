<?php
require_once 'Lutador.php';
class Luta {
    
    private $desafiado, $desafiante, $rounds, $aprovada;

    
    function marcarLuta($l1,$l2){
        if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)) {
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        }
        else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }
    
        function lutar() {
            if ($this->aprovada){
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                
                $fight = rand(0,2);
                switch ($fight) {
                case 0: 
                    echo"<p>Empate!</p>"; 
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                
                case 1: 
                    echo "<p>Vitória do lutador ".$this->desafiado->getNome()." !</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                
                
                case 2: 
                    echo "<p>Vitória do lutador ".$this->desafiante->getNome()." !</p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
                }
            }
            
            else {
                echo "Luta não pode acontecer.";
            }
        }
        
    
    function getDesafiado() {
        return $this->desafiado;
    }

    function getDesafiante() {
        return $this->desafiante;
    }

    function getRounds() {
        return $this->rounds;
    }

    function getAprovada() {
        return $this->aprovada;
    }

    function setDesafiado($desafiado): void {
        $this->desafiado = $desafiado;
    }

    function setDesafiante($desafiante): void {
        $this->desafiante = $desafiante;
    }

    function setRounds($rounds): void {
        $this->rounds = $rounds;
    }

    function setAprovada($aprovada): void {
        $this->aprovada = $aprovada;
    }

}

