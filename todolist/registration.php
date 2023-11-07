<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous" defer></script>
    <title>ToDoList</title>
</head>
<body>
    <form action="signupscript.php" method="post" id="loginform">
        <div class="row">
            <div class="col justify-content-center pt-0">
                <label style="display: block;">Логин</label>
            </div>
        </div>
        <div class="row">
            <div class="col justify-content-center">
                <input type="text" name="login" placeholder="Введите логин">
            </div>
        </div>
        <div class="row">
            <div class="col justify-content-center pt-4">
                <label style="display: block;">Email</label>
            </div>
        </div>

        <div class="row">
            <div class="col justify-content-center">
                <input type="email" name="email" placeholder="Введите email">
            </div>
        </div>
        <div class="row">
            <div class="col justify-content-center pt-4">
                <label style="display: block;">Пароль</label>
            </div>
        </div>
        <div class="row">
            <div class="col justify-content-center">
                <input type="password" name="pass" placeholder="Введите пароль">
            </div>
        </div>
        <div class="row">
            <div class="col justify-content-center pt-4">
                <label style="display: block;">Подтвердите пароль</label>
            </div>
        </div>
        <div class="row">
            <div class="col justify-content-center">
                <input type="password" name="passconfirm" placeholder="Повторите пароль">
            </div>
        </div>
        <div class="row">
            <div class="col justify-content-center pt-4">
                <button type="submit" class="btn btn-secondary">Зарегистрироваться</button>
            </div>
        </div>
        <div class="row">
            <div class="col justify-content-center pt-4">
                <?php 
                if($_SESSION['message']){
                    echo $_SESSION['message'];
                }
                unset($_SESSION['message']);
                ?>
            </div>
        </div>
    </form>
</body>
</html>