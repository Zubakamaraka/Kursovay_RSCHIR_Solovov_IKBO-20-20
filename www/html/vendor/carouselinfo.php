<?php

require_once 'connect.php';

$sql = "SELECT * FROM carousel";
$check_page = $connect->query($sql);

while($temp = $check_page->fetch(PDO::FETCH_ASSOC)){
    $pages[] = $temp;
}
