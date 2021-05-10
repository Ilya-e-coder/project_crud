<?php

//Соединение с базой данных из соседней папки
require_once 'config/connect.php';

//Отправка текущего id
$comment_id = $_GET['id'];
$comment = mysqli_query($connect,"SELECT * FROM `comments` WHERE `id` = '$comment_id'");
//Выбирает все строки из значения и помещает их в ассоциативный массив
$comment = mysqli_fetch_assoc($comment);

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
</head>
<body>
<h3>Update comment</h3>
<form action="db_reprository/db_update.php" method="post" enctype="multipart / form-data">
    <!-- Создание скрытого инпута, для updat'а в db_reprository -->
    <input type="hidden" name="id" value="<?=$comment['id'] ?>">
    <p>Comment</p>
    <textarea name="comment"><?=$comment['post'] ?></textarea>
    <br>
    <!-- Ограничение размера файлов -->
    <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
    <!-- Выберите файл -->
    <input type="file" name="photo" accept="image/*">
    <!-- Кнопка загрузки -->
    <!--        <input type = "submit" name = "upload" value = "Download">-->
    <br> <br> <br>
    <!-- Кнопка добавления коммента -->
    <button type="submit">Update</button>

</body>
</html>