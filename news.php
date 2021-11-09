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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Новости</title>
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>


