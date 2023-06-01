<?php

require_once __DIR__ . '/product.php';

class Categories extends Product{
    public $animale;

    public function __construct($prezzo, $tipologia, $nome, $foto, $animale){
        parent::__construct($prezzo, $tipologia, $nome, $foto);
        $this -> animale = $animale;
    }
}


$prodotto = new Categories('10$', 'cibo', 'fressky', 'foto', 'cane');
var_dump($prodotto);