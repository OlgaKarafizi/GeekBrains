<?php
/**
 * Created by PhpStorm.
 * User: olgakarafizi
 * Date: 26.04.2018
 * Time: 11:14
 */

require "config.php";
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
      <a href="img.php?img=<?=$image[$i] ?>" style="text-decoration: none;"> <img src="<?=IMG_SMALL.$image[$i] ?>"> </a>
    <?php endfor; ?>
  </div>

<?php
//echo $sql;

$sql = "select * from image;";
$conclusion = mysqli_query($connect,$sql);

while($data=mysqli_fetch_assoc($conclusion)): ?>
    <a href="img.php?img=<?= $data['path_norm'] ?>" style="text-decoration: none;"> <img src="<?= $data['path_small'] ?>"> </a>
<?php endwhile;
$data['path_small']
?>

</body>
</html>