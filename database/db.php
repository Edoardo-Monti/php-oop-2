<?php

require_once __DIR__ . '/../models/product.php';
require_once __DIR__ . '/../models/categories.php';


$arrayProdotti = [

    new Categories('10$', 'cibo', 'fressky', 'https://i.pinimg.com/564x/0e/5d/2c/0e5d2c628a102eba97411deca54079e3.jpg', 'cane'),
    new Categories('15$', 'gioco', 'dong', 'https://i.pinimg.com/564x/37/7a/d5/377ad50a3eb881a4fdd6b2aad4c7720e.jpg', 'cane'),
    new Categories('100$', 'cuccia', 'cuccia memoryform', 'https://i.pinimg.com/564x/c4/ba/73/c4ba7397167a1e703861db6f58cc33ef.jpg', 'gatto'),
];