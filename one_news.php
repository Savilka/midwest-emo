<?php
session_start();
$id = (int)$_GET['id'];
$mysqli = new mysqli("n2o93bb1bwmn0zle.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "yfnk95pabxc7o8pb",
    "cji3ywltts8o22ui", "qytxwbkkn14vj0yd");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$results = $mysqli->query("SELECT * FROM `news` WHERE `id` = $id");
$news = $results->fetch_object();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Midwest Emo</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<div id="container">
    <div id="news" class="bordered">
        <div class="one-news">
            <img src="<?php echo $news->pic ?>" alt="" class="img-news">
            <div class="content">
                <p class="headline"><?php echo $news->headline ?></p>
                <p class="annonce"><?php echo $news->text ?></p>
                <?php
                if (isset($_SESSION['admin']) && ($_SESSION['admin'] === 1)) {
                    ?>
                    <p class="annonce"><a href="delete_news.php?id=<?php echo $id ?>" style="color: #c23838">удалить</a></p>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <?php
    require('menu.php')
    ?>
</div>
</body>
</html>
