<?php

require_once 'connect.php';

$sql = "SELECT game.game_id, game.image, game.name, author.author, game.annotation,publisher.pub_name, series.series_name, game_year.game_year, game.game_format, cover_type.cover_name, game.weight, game.janre, game.mode
        FROM game
        INNER JOIN author ON author.author_id = game.author_id
        INNER JOIN publisher ON publisher.pub_id = game.pub_id
        INNER JOIN series ON series.series_id = game.series_id
        INNER JOIN game_year ON game_year.year_id = game.year_id
        INNER JOIN cover_type ON cover_type.cover_id = game.cover_id";

$check_game = $connect->query($sql);

while($temp = $check_game->fetch(PDO::FETCH_ASSOC)){
    $games[] = $temp;
}