<?php
require_once 'connect.php';

$user = $_SESSION['user']['id'];

$sql = "SELECT * FROM cart WHERE users_id = $user";
$check_cart = $connect->query($sql);

while($temp = $check_cart->fetch(PDO::FETCH_ASSOC)){
    $carts[] = $temp;
}