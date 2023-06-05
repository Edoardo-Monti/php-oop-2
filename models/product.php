<?php

class Product{

    public $foto;
    public $tipologia;
    public $nome;

    public function __construct($tipologia, $nome, $foto){
        $this -> foto = $foto;
        $this -> tipologia = $tipologia;
        $this -> nome = $nome;
        
    }
    
}



