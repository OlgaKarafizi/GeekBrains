<?php
/**
 * Created by PhpStorm.
 * User: olgakarafizi
 * Date: 02.05.2018
 * Time: 16:19
 */

$server = "localhost";
$login="root";
$pass="";
$db = "lesson5";


//коннектимся к серверу базы данных и выбираем базу данных для работы
$connect = mysqli_connect($server,$login,$pass,$db);

/*mysqli_query($connect, "SET NAMES 'utf8'");
mysqli_query($connect, "SET CHARACTER SET 'utf8'");
*/