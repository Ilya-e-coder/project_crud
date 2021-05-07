<?php
require_once 'config/connect.php';
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="config/connect_style.css" rel="stylesheet">
    <title>Send Post</title>
</head>
<body>
<table>
    <tr>
        <th>№</th>
        <th>Date</th>
        <th>Posts</th>
        <th>Last Update</th>
    </tr>

    <?php
    // Создание команды по выборке из таблицы всех значений и переносу на веб страницу
    $addComments = mysqli_query($connect, "SELECT * FROM `comments`");
    // Выбирает все строки из значения и помещает их в массив
    $addComments = mysqli_fetch_all($addComments);
    // Создание команды для обхода массива и переноса значений в веб таблицу
    foreach ($addComments as $addcomment){

    ?>
        <!-- HTML между тегами PHP, а также PHP код внутри HTML в сокращенном варианте:
         вместо echo /< ?=  -->
        <tr>
            <td><?=$addcomment[0] ?></td>
            <td><?=$addcomment[2]?></td>
            <td><?=$addcomment[1]  . $addcomment[3] ?></td>
            <td></td>
        </tr>
    <?php
    }
    ?>


</table>
<br> <br> <br> <br> <br>

<h3>Add new comment</h3>
<form action="db_reprository/create.php" method="post" enctype="multipart / form-data">

    <p>Comment</p>
    <textarea name="comment"></textarea>
    <br>
    <!-- Ограничение размера файлов -->
        <input type = "hidden" name = "MAX_FILE_SIZE" value = "2000000">
    <!-- Выберите файл -->
        <input type="file" name="photo" accept="image/*">
    <!-- Кнопка загрузки -->
        <input type = "submit" name = "upload" value = "Download">
    <br> <br> <br>
    <!-- Кнопка добавления коммента -->
    <button type="submit">Add comment</button>


</form>

</body>
</html>