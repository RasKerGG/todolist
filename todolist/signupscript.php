<?php
    session_start();
    require_once("db.php");

    $login = $_POST["login"];
    $email = $_POST["email"];
    $password = md5($_POST["pass"]);
    $passconfirm = md5($_POST["passconfirm"]);
    
    if($password === $passconfirm) {
        mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES (NULL, '$login', '$email', '$password')");
        $_SESSION["message"] = "Успешная регистрация";
        header("Location: index.php");
    }
    else{
        $_SESSION["message"] = "Пароли не совпадают";
        header("Location: registration.php");
    }
?>