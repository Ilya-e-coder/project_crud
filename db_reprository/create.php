<?php

//Соединение с базой данных из соседней папки
require_once '../config/connect.php';
$comment = $_POST['comment'];
$content = $_POST['upload'];
if ($comment == NULL){
    header('Location: ../index_crud.php');
}else {
    mysqli_query($connect, "INSERT INTO `comments` (`id`,`date`, `post`, `content`) VALUES (NULL, now(),'$comment','$content')");
    // Возвращает обратно на главную страницу после отправки поста
    header('Location: ../index_crud.php');
}
