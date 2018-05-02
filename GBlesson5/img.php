<?php
/**
 * Created by PhpStorm.
 * User: olgakarafizi
 * Date: 26.04.2018
 * Time: 11:21
 */
require "config.php";
include_once 'loading.php';
//echo '<pre>';
//print_r($_GET);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Работа с файлами</title>
</head>
<body>
<a href="index.php"> Вернуться </a>
<div>
    <?php
    $sql = "select * from image";
    $conclusion = mysqli_query($connect,$sql);
    $data=mysqli_fetch_assoc($conclusion);?>

    <img src="<?=$_GET['img'] ?>">
</div>
</body>
</html>