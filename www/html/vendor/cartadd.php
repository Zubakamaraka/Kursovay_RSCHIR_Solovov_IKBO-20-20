<?php
session_start();
include './connect.php';
include './cartinfo.php';

$user = $_SESSION['user']['id'];
$game = $_POST['id'];

if(isset($carts)){
    foreach($carts as $cart){
        if($cart['users_id'] == $user && $cart['game_id'] == $game){
            $sql = "UPDATE cart SET game_count = ? WHERE users_id = ? AND game_id = ?";
            $updatecart = $connect->prepare($sql);
            $updatecart->execute([$cart['game_count'] + 1, $user, $game]);
            break;
        }
        else 
        {
            $sql = "INSERT INTO cart (users_id, game_id, game_count) VALUES (?, ?, 1);";
            $updatecart = $connect->prepare($sql);
            $updatecart->execute([$user, $game]);
            break;
        }
    }
}
else 
{
    $sql = "INSERT INTO cart (users_id, game_id, game_count) VALUES (?, ?, 1);";
    $updatecart = $connect->prepare($sql);
    $updatecart->execute([$user, $game]);
}
