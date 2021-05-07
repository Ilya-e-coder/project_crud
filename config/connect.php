<?php
//Соединение с базой данных
$connect = mysqli_connect('localhost', 'root', 'root', 'bd_crud');
if (!$connect) {
    die ('Error connect to database!');
}


