<?php

require_once __DIR__ . '/product.php';
require_once __DIR__ . '/../traits/prezzo.php';

class Categories extends Product{
    use Prezzo;
    public $animale;

    public function __construct($price, $tipologia, $nome, $foto, $animale){
        parent::__construct($tipologia, $nome, $foto);
        $this -> animale = $animale;
        $this -> price = $price;
    }

}


$prodotto = new Categories('10$', 'cibo', 'fressky', 'foto', 'cane');
var_dump($prodotto);