<?php

class Pessoa{
    // atributos da classe
    public string $nome;
    public int $idade;
    private float $peso;
    public string $cidade;

    //metodo construtor -> no Python chama def _init_
    function __construct($nome,$idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function hello(){
        echo "Hello " . $this->nome;
    }

    public function getNome(){
        
    }
}