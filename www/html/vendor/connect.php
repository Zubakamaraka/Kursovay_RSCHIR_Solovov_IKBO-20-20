<?php

    $dsn = "pgsql:host=192.168.208.3;port=5432;dbname=gamestore;user=admin;password=admin";

    $connect = new PDO($dsn);

    if (!$connect) {
        die('Error connect to DataBase');
    }