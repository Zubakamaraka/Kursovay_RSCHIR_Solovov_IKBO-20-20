<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header('Location: /');
    }

    include './vendor/gameinfo.php';
    include './vendor/cartinfo.php';
?>

<!doctype html>
<html lang="en">
<head>
    <title>Профиль</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/profile.css">
</head>

<?php include_once './templates/header.php' ?>

<body>
    <div id="cart-profile">
        <div id="cart">
            <div id="cart_name">
                <h2>Игротека</h2>
            </div>
            <div id="cart_games">
                <?php if(!isset($carts)):
                    echo '<h1>Начните собирать коллекцию</h1>';?>
                <?php else:?>

                <?php foreach ($carts as $cart):?>
                <div class="game" data-gameid=<?= $games[$cart['game_id']-1]['game_id']?>>
                    <a href="<?= "./product.php?id=" . $games[$cart['game_id']-1]['game_id']?>">
                        <div><img src=<?= $games[$cart['game_id']-1]['image']?>  class="game-img" alt="game"></div>
                        
                    </a>
                    <div class="information">
                        <p><?= $games[$cart['game_id']-1]['name']?></p>
                    </div>
                    <div>
                        <button class="deleteBtn"><img src="./icons/delete.svg"></button>
                    </div>
                </div>
                <?php endforeach;
                        endif; ?>
            </div>
            
        </div>

        <div id="profile">
            <h2 id="profile_name">Профиль</h2>
            <div class="profile_info">
                <img src="<?= $_SESSION['user']['avatar']?>" width="200" alt="user-photo" id="user-photo">
                <h2 style="margin: 10px 0;"><?= $_SESSION['user']['login']?></h2>
                <p><?= $_SESSION['user']['email']?></p>
                <a href="vendor/logout.php" class="logout">Выход</a>
            </div>
        </div>
        <script src="./assets/js/profile.js"></script>
    </div>
</body>

<?php include_once './templates/footer.php' ?>

</html>