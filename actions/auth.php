<?php

if(isset($_POST['login'])){

    $email    = $_POST['email'];
    $password = $_POST['password'];

    $login = $auth->login($email, $password);

    if($login) {
        header('Location:index.php');
    }
    else {
        $session->flash('error', 'Email atau password tidak sesuai. Silahkan coba kembali.');
        header('Location:login.php');
    }

}

if(isset($_POST['logout'])) {

    if($auth->logout()) {
        header('Location:login.php');
    }

}