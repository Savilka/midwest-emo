<?php
session_start();
$mysqli = new mysqli("n2o93bb1bwmn0zle.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "yfnk95pabxc7o8pb",
    "cji3ywltts8o22ui", "qytxwbkkn14vj0yd");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$results = $mysqli->query("SELECT * FROM `releases`");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Релизы</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<div id="container">
    <div id="releases" class="bordered">
        <?php
        while ($row = $results->fetch_object()) {
            ?>
            <div class="release">
                <img src="<?php echo $row->pic ?>" alt="preview" class="img-album">
                <h2 class="artist"><?php echo $row->artist ?></h2>
                <h3 class="album"><?php echo $row->album ?></h3>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
    require('menu.php')
    ?>
</div>
</body>
</html>

