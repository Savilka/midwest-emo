<?php
session_start();
$mysqli = new mysqli("n2o93bb1bwmn0zle.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "t3yx98bakhvb6qcu",
    "x220h26wnon03a7t", "msf3ai2ttoov1rtw");
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
            echo <<<HTML
                <div class="release">
                    <img src="$row->pic" alt="preview" class="img-album">
                    <h2 class="artist">$row->artist</h2>
                    <h3 class="album">$row->album</h3>
                </div>
HTML;
        }
        ?>
    </div>
    <?php
    require('menu.php')
    ?>
</div>
</body>
</html>

