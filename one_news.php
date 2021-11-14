<?php
session_start();
$id = (int)$_GET['id'];
$mysqli = new mysqli("n2o93bb1bwmn0zle.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "t3yx98bakhvb6qcu",
    "x220h26wnon03a7t", "msf3ai2ttoov1rtw");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<?php
require('menu.php')
?>
<body>
<div class="container">
    <div class="row my-3 ">
        <div class="col-sm-3">
            <img class="w-100" src="<?php echo $news->pic ?>" alt="">
        </div>
        <div class="col-sm-9">
            <h2 class="text-color"><?php echo $news->headline ?></h2>
            <p class="text-color fs-4"><?php echo $news->text ?></p>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>
</html>