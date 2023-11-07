<?php
    session_start();
    require_once("db.php");

    $login = $_POST["login"];
    $password = $_POST["password"];
    $password = md5($password);
    echo($password);
    $check = mysqli_query($connect,"SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check) > 0) {
        
    }
    else{
       echo "Данные не найдены";
    }
?>