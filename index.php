<?php

require_once __DIR__ . '/Cpu.php';
require_once __DIR__ . '/GraphicCard.php';
require_once __DIR__ . '/Ram.php';
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/StandardUser.php';
require_once __DIR__ . '/PremiumUser.php';

$intel = new Cpu('Intel', 'i9 11900k', '3.5', 470);

$nvidia = new GraphicCard('Nvidia', 'GeForce 1660 Ti', '1.86', 500, 6);

try {
    $patriot = new Ram('Patriot', 'Viper Steel', '3.6', 150, '32');
} catch(Exception $e) {

    // Scrittura nel file di log.
    error_log($e);

    // Gestione fatal error
    echo '<div style="border: 1px solid red; 
                    color: red; 
                    background-color:#f8d7da; 
                    text-align:center;
                    font-size:18px; 
                    margin:50px;">
                Site under ordinary mainteinance. 
          </div>';
    die();
}

$gn = new PremiumUser('Gianluca', 'Nesta', 'gn@email.it');

$gn->addProduct($intel);
$gn->addProduct($nvidia);
$gn->addProduct($patriot);
$gn_cart = $gn->getCart();

// var_dump($gn);
$gn->finalPrice();

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
            <div><strong>Frequenza:</strong> <?php echo $product->frequency; ?> Ghz</div>
            <div><strong>Prezzo:</strong>  <?php echo $product->price; ?> €</div>
            
            <?php if(isset($product->memory)) { ?>
                <div><strong>Memoria:</strong>  <?php echo $product->memory; ?> Gb</div>
            <?php } ?>            
        </div>
    <?php } ?>

    <div>
        <h1>
            <strong>Totale carrello:</strong>  
            <?php echo $gn->finalPrice(); ?> €
        </h1>
    </div>
   
</body>
</html>