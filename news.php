<?php
session_start();
$mysqli = new mysqli("n2o93bb1bwmn0zle.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "t3yx98bakhvb6qcu",
    "x220h26wnon03a7t", "msf3ai2ttoov1rtw");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$results = $mysqli->query("SELECT * FROM `news`");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Новости</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<div id="container">
    <div id="news">
        <table cellspacing="0" class="bordered">
            <?php
            while ($row = $results->fetch_object()) {
                echo <<<HTML
                    <tr>
                        <td>
                            <div class="one-news">
                                <img src="$row->pic" alt="" class="img-news">
                                <div class="content">
                                    <p class="headline"><a href="one_news.php?id=$row->id">$row->headline</a></p>
                                    <p class="annonce">$row->announce</p>
                                </div>
                            </div>
                        </td>
                    </tr>    
HTML;
            }
            ?>
        </table>
    </div>
    <?php
    require('menu.php')
    ?>
</div>
</body>
</html>


