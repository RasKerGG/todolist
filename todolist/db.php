<?php
    $connect = mysqli_connect("localhost","root","", "todolist");
    if (!$connect) {
        die("Error connection");
    }
?>