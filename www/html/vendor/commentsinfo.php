<?php

require_once 'connect.php';

$sql = "SELECT comments.*, users.login FROM comments LEFT JOIN users ON comments.users_id = users.users_id";
$check_com = $connect->query($sql);

while($temp = $check_com->fetch(PDO::FETCH_ASSOC)){
    $comments[] = $temp;
}