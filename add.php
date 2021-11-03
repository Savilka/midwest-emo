<?php
$mysqli = new mysqli("localhost", "root", "", "midwestemo");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$headline = $_POST["headline"];
$text = $_POST["text"];
$announce = $_POST["announce"];
$pic = $_POST["pic"];
$timestamp = date('Y-m-d H:i:s');
$err = $mysqli->query("INSERT INTO midwestemo.news (date, headline, announce, text, pic) VALUE ('$timestamp', '$headline', '$announce',
                                                                        '$text', '$pic')");
header('Location: news.php', false);

