<?php

require_once __DIR__ . '/Cpu.php';
require_once __DIR__ . '/GraphicCard.php';
require_once __DIR__ . '/Ram.php';
require_once __DIR__ . '/User.php';

$intel = new Cpu('Intel', 'i9 11900k', '3.5 Ghz', 469);

$nvidia = new GraphicCard('Nvidia', 'GeForce 1660 Ti', '1860 Mhz', 500, 6);

$patriot = new Ram('Patriot', 'Viper Steel', '3600 Mhz', 150, 32);

$gn = new User('Gianluca', 'Nesta', 'gn@email.it');
$gn->addProduct($intel);
$gn->addProduct($nvidia);
$gn->addProduct($patriot);
$gn_cart = $gn->getCart();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php OOP 2</title>
</head>
<body>

    <h1>Benvenuto <?php echo $gn->getFullName(); ?> questo è il tuo carrello</h1>

    <?php foreach($gn_cart as $product) { ?>
        <div>
            <h2><?php echo $product->brand; ?> - <?php echo $product->model; ?></h2>
            <div>Frequenza: <?php echo $product->frequency; ?></div>
            <div>Prezzo: <?php echo $product->price; ?> €</div>
            
            <?php if(isset($product->memory)) { ?>
                <div>Memoria: <?php echo $product->memory; ?> Gb</div>
            <?php } ?>

            
        </div>
    <?php } ?>
    
</body>
</html>