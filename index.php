<?php

require_once __DIR__ . '/models/product.php';
require_once __DIR__ . '/models/categories.php';
require_once __DIR__ . '/database/db.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negozio Animali</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="d-flex justify-content-around">
        <?php foreach( $arrayProdotti as $elem ) { ?>

        <div class="card" style="width: 18rem;">
            <img src="<?php echo $elem->foto?>" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title"> <?php echo $elem->nome?></h5>
                <p class="card-text"> <?php echo $elem-> tipologia?></p>
                <span> <?php echo $elem-> prezzo?></span>
            </div>
            <div>
                <?php if($elem->animale == "cane"){?>
                <i class="fa-solid fa-dog"></i>
                <?php }else{ ?>
                <i class="fa-solid fa-cat"></i>
                <?php } ?>

                
            </div>
        </div>
        <?php } ?>


    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
