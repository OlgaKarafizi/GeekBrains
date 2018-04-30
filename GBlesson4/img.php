<?php
/**
 * Created by PhpStorm.
 * User: olgakarafizi
 * Date: 26.04.2018
 * Time: 11:21
 */
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
    <img src="<?=IMG_NORM.$_GET['my_img'] ?>">
</div>
</body>
</html>