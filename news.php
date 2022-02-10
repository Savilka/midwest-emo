<?php
session_start();
$mysqli = new mysqli("n2o93bb1bwmn0zle.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "yfnk95pabxc7o8pb",
    "cji3ywltts8o22ui", "qytxwbkkn14vj0yd");
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
                ?>
                <tr>
                    <td>
                        <div class="one-news">
                            <img src="<?php echo $row->pic ?>" alt="" class="img-news">
                            <div class="content">
                                <p class="headline"><a href="one_news.php?id=<?php echo $row->id ?>"><?php echo $row->headline ?></a></p>
                                <p class="annonce"><?php echo $row->announce ?></p>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php
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


