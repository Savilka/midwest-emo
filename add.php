<?php
$mysqli = new mysqli("n2o93bb1bwmn0zle.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "t3yx98bakhvb6qcu",
    "x220h26wnon03a7t", "msf3ai2ttoov1rtw");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$headline = $_POST["headline"];
$text = $_POST["text"];
$announce = $_POST["announce"];
$pic = $_POST["pic"];
$timestamp = date('Y-m-d H:i:s');
$err = $mysqli->query("INSERT INTO `news` (date, headline, announce, text, pic) VALUE ('$timestamp', '$headline', '$announce',
                                                                        '$text', '$pic')");
header('Location: news.php', false);

