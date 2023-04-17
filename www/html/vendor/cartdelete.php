<?php
session_start();
include './connect.php';

$user = $_SESSION['user']['id'];
$game = $_POST['id'];

$sql = "DELETE FROM cart WHERE users_id = ? AND game_id = ?";
$updatecart = $connect->prepare($sql);
$updatecart->execute([$user, $game]);