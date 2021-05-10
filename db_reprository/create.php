<?php

//Соединение с базой данных из соседней папки
require_once '../config/connect.php';
$comment = $_POST['comment'];
$photo = $_POST['photo'];
$upload = $_POST['upload'];



// Условие, чтобы пустой комментарий без фото не добавлялся в базу данных
if ($comment == NULL && $photo == NULL) {
    // Возвращает обратно на главную страницу после отправки поста
    header('Location: ../index_crud.php');
} else {
    mysqli_query($connect, "INSERT INTO `comments` (`id`,`date`, `post`, `content`) VALUES (NULL, now(),'$comment','$photo')");
    header('Location: ../index_crud.php');
}




