<?php
/**
 * Created by PhpStorm.
 * User: olgakarafizi
 * Date: 26.04.2018
 * Time: 11:14
 */

  include_once 'loading.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lesson4</title>
</head>
<body>
<h1>Галерея фотографий</h1>

  <form action="" method="POST" enctype="multipart/form-data">
      <p>Добавить файл</p>
      <p><input type="file" name="load_file"></p>
      <p><input type="submit" name="load" value="Загрузите файл"></p>
      <p><?=$load_text?></p>
  </form>

  <div>
    <?php for ($i=0; $i < count($image); $i++) : ?>
      <a href="img.php?my_img=<?=$image[$i] ?>" style="text-decoration: none;"> <img src="<?=IMG_SMALL.$image[$i] ?>"> </a>
    <?php endfor; ?>
  </div>

</body>
</html>