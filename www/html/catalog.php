<?php 
    session_start();
    
    include './vendor/gameinfo.php';
    include './vendor/carouselinfo.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Игротека</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<link rel="stylesheet" type="text/css" href="./assets/css/base.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/card.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/carousel.css">
        <script src="./assets/js/carousel.js" type="text/javascript"></script>
        <link rel="shortcut icon" href="icons/game-shelf.png" type="image/png">
    </head>
    <body>
    
    <?php include_once './templates/header.php'?>
    <?php include './templates/carousel.php' ?>


        <section class="game-blok">
            <?php foreach ($games as $game): ?>
            <div class="card" data-gameid=<?=$game['game_id']?>>
                <a href="<?= "./product.php?id=" . $game['game_id']?>">
                    <div><img src=<?= $game['image'] ?>  class="game-img" alt="game"></div>
                    <p><?= $game['name'] ?></p>
                </a>
            </div>
            <?php endforeach; ?>
        </section>

        <?php include_once './templates/footer.php' ?>
        <script src="./assets/js/carousel.js" type="text/javascript"></script>

    </body>

</html>
