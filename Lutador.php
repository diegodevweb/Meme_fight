<?php

// * @author Diego Rodrigues

class Lutador {

    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    function __construct($no, $nac, $idade, $alt, $p, $v, $e, $d) {
        $this->setNome($no);
        $this->setNacionalidade($nac);
        $this->setIdade($idade);
        $this->setAltura($alt);
        $this->setPeso($p);
        $this->setVitorias($v);
        $this->setEmpates($e);
        $this->setDerrotas($d);
    }

    function apresentar() {
        echo "<p>Iiiiiiiiiiiiiiit's tiiiiimee!! Deste lado temos o lutador " . $this->getNome() . ", nascido em " . $this->getNacionalidade() .
        ", com " . $this->getIdade() . " anos e pesando " . $this->getPeso() . "kg. O lutador tem " . $this->getVitorias() . " vitórias," .
        $this->getEmpates() . " empates e " . $this->getDerrotas() . " derrotas. <hr>";
    }

    function status() {
        echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria() . " com " . $this->getVitorias() . " vitórias, " . $this->getEmpates() . " empates e " . $this->getDerrotas() . " derrotas. <hr></p>";
    }

    function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }

    function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }

    function getNome() {
        return $this->nome;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function getIdade() {
        return $this->idade;
    }

    function getAltura() {
        return $this->altura;
    }

    function getPeso() {
        return $this->peso;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getVitorias() {
        return $this->vitorias;
    }

    function getDerrotas() {
        return $this->derrotas;
    }

    function getEmpates() {
        return $this->empates;
    }

    private function setNome($nome): void {
        $this->nome = $nome;
    }

    private function setNacionalidade($nacionalidade): void {
        $this->nacionalidade = $nacionalidade;
    }

    private function setIdade($idade): void {
        $this->idade = $idade;
    }

    private function setAltura($altura): void {
        $this->altura = $altura;
    }

    private function setPeso($peso): void {
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria(): void {
        if ($this->peso < 52.2) {
            $this->categoria = "Inválido.";
        } elseif ($this->peso <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->peso <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido.";
        }
    }

    private function setVitorias($vitorias): void {
        $this->vitorias = $vitorias;
    }

    private function setDerrotas($derrotas): void {
        $this->derrotas = $derrotas;
    }

    private function setEmpates($empates): void {
        $this->empates = $empates;
    }

}
