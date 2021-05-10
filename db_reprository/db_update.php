<?php
require_once '../config/connect.php';

//Оставляем такие переменные, т.к. форма одинаковая
$id = $_POST['id'];
$comment = $_POST['comment'];
$photo = $_POST['photo'];
$upload = $_POST['upload'];

mysqli_query($connect,"UPDATE `comments` SET `post` = '$comment',`last update` = now(), `content` = '$photo'  WHERE `comments`.`id` = '$id'");

header('Location: ../index_crud.php');