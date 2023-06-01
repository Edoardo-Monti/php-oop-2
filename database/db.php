<?php

require_once __DIR__ . '/../models/product.php';
require_once __DIR__ . '/../models/categories.php';


$arrayProdotti = [

    new Categories('10$', 'cibo', 'fressky', 'foto', 'gatto'),
    new Categories('15$', 'gioco', 'dong', 'foto', 'cane'),
    new Categories('100$', 'cuccia', 'cuccia memoryform', 'foto', 'cane'),
];