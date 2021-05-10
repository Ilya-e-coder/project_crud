<?php
require_once '../config/connect.php';
// Через Get, так как в адресной строке передаем идентификатор
$id = $_GET['id'];
mysqli_query($connect, "DELETE FROM `comments` WHERE `comments`.`id` = '$id'");
header('Location: ../index_crud.php');