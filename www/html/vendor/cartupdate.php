<?php
session_start();
include './connect.php';

$user = $_SESSION['user']['id'];
$game = $_POST['id'];
$count = $_POST['count'];

$sql = "UPDATE cart SET game_count = ? WHERE users_id = ? AND game_id = ?";
$updatecart = $connect->prepare($sql);
$updatecart->execute([$count, $user, $game]);