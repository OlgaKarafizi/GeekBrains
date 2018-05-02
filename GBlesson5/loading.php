<?php
/**
 * Created by PhpStorm.
 * User: olgakarafizi
 * Date: 26.04.2018
 * Time: 11:18
 */

function changeImage($h, $w, $src, $newsrc, $type) {
    $newimg = imagecreatetruecolor($h, $w);
    switch ($type) {
        case 'jpeg':
            $img = imagecreatefromjpeg($src);
            imagecopyresampled($newimg, $img, 0, 0, 0, 0, $h, $w, imagesx($img), imagesy($img));
            imagejpeg($newimg, $newsrc);
            break;
        case 'png':
            $img = imagecreatefrompng($src);
            imagecopyresampled($newimg, $img, 0, 0, 0, 0, $h, $w, imagesx($img), imagesy($img));
            imagepng($newimg, $newsrc);
            break;
    }
}

CONST IMG_NORM = './img_norm/';
CONST IMG_SMALL = './img_small/';

$path_norm = IMG_NORM . $_FILES['load_file']['name'];
$path_small = IMG_SMALL . $_FILES['load_file']['name'];

$inquiry = "INSERT INTO `image` (`path_norm`, `path_small`) VALUES ('" . $path_norm . "', '" . $path_small . "')";
//echo $path_small;
//echo $path_norm;
//echo $inquiry;



if (isset($_POST['load'])) {
    if ($_FILES['load_file']['error']) {
        $load_text = 'Файл с изображением почему-то не загружен';
    } elseif ($_FILES['load_file']['size'] > 1000000) {
        $load_text = 'Файл с изображением слишком большой';
    } elseif ($_FILES['load_file']['type'] == 'image/jpeg' || $_FILES['load_file']['type'] == 'image/png') {
        if (copy($_FILES['load_file']['tmp_name'],$path_norm)) {

            $type = explode('/', $_FILES['load_file']['type'])[1];
            changeImage(150, 150, $_FILES['load_file']['tmp_name'], $path_small, $type);

            $res = mysqli_query($connect,$inquiry);
        } else {
            $load_text = 'Файл с изображением почему-то не загружен!!!';
        }
    } else {
        $load_text = 'Файл с изображением неправильного формата. Подходят форматы .jpeg и .png';
    }
}
//$image = array_slice(scandir(IMG_SMALL), 2); --- из прошлого ДЗ

//echo '<pre>';
//print_r($image);
//print_r($_POST);
//print_r($_FILES);

?>
