<?php

class Product{
    public $prezzo;
    public $foto;
    public $tipologia;
    public $nome;

    public function __construct($prezzo, $tipologia, $nome, $foto){
        $this -> prezzo = $prezzo;
        $this -> foto = $foto;
        $this -> tipologia = $tipologia;
        $this -> nome = $nome;
        
    }
    
}



