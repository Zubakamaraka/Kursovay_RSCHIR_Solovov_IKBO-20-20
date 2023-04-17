<?php
session_start();
include './connect.php';

$user = $_SESSION['user']['id'];
$game = $_POST['id'];
$grade = $_POST['grade'];
$text = $_POST['text'];

$sql = "INSERT INTO comments (users_id, game_id, grade, game_com)
        VALUES (?, ?, ?, ?)";
$updatecart = $connect->prepare($sql);
$updatecart->execute([$user, $game, $grade, $text]);