<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = hash('sha256', $_POST['password']);

    $sql = "SELECT * FROM users WHERE login = ? AND password = ?";
    $check_user = $connect->prepare($sql);
    $check_user->execute([$login, $password]);
    if ($check_user->rowCount() > 0) {

        $user = $check_user->fetch(PDO::FETCH_ASSOC);

        $_SESSION['user'] = [
            "id" => $user['users_id'],
            "login" => $user['login'],
            "full_name" => $user['full_name'],
            "avatar" => $user['avatar'],
            "email" => $user['email']
        ];

        header('Location: ../profile.php');

    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: ../index.php');
    }
    ?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>
